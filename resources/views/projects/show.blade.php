@extends('layouts.app')

@section('content')
<div class="container py-3">

    <!-- Project Title -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
        <h3 class="fw-bold text-primary mb-2 mb-md-0 text-truncate">{{ $project->name }}</h3>
        <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-left"></i> Back to Projects
        </a>
    </div>

    <!-- PDF Viewer -->
<div class="mb-4 shadow-sm border rounded overflow-hidden" style="width: 100%;">
    <iframe 
        src="{{ asset($project->pdf_path) }}" 
        style="width: 100%; height: 60vh; min-height: 300px; border: none;"
        class="rounded">
    </iframe>
</div>


    <!-- Feedback Form -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="bi bi-chat-dots"></i> Add Feedback</h5>
        </div>
        <div class="card-body">
            <form id="feedbackForm" class="row g-3">
                @csrf
                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold">Highlighted Text</label>
                    <input type="text" name="highlighted_text" class="form-control" placeholder="Copy/paste section" required>
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold">Comment</label>
                    <textarea name="comment" class="form-control" rows="2" placeholder="Write your feedback..." required></textarea>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary px-4 mt-2 mt-md-0">
                        <i class="bi bi-send"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Feedbacks Section -->
    <h4 class="fw-bold mb-3">Feedbacks</h4>
    <div id="feedbacksList">
        @foreach($project->feedbacks as $fb)
            <div class="card mb-3 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-start flex-column flex-sm-row mb-2">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($fb->user->name) }}&background=0D8ABC&color=fff" 
                             alt="Avatar" class="rounded-circle me-2 mb-2 mb-sm-0" width="40" height="40">
                        <div>
                            <strong class="text-dark">{{ $fb->user->name }}</strong>  
                            <small class="text-muted d-block">{{ $fb->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                    <p class="mb-1">
                        <span class="badge bg-success text-dark text-truncate d-block">{{ $fb->highlighted_text }}</span>
                    </p>
                    <p class="mb-0">{{ $fb->comment }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- AJAX Script for Feedback Submission -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const feedbackForm = document.getElementById('feedbackForm');

    feedbackForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(feedbackForm);

        fetch("{{ route('feedbacks.store', $project->id) }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if(data.success){
                feedbackForm.reset();

                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: data.message,
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true
                });

                const feedbacksContainer = document.querySelector('#feedbacksList');
                if(feedbacksContainer){
                    const html = `
                    <div class="card mb-3 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-start flex-column flex-sm-row mb-2">
                                <img src="https://ui-avatars.com/api/?name=${data.feedback.user_name}&background=0D8ABC&color=fff" 
                                     alt="Avatar" class="rounded-circle me-2 mb-2 mb-sm-0" width="40" height="40">
                                <div>
                                    <strong class="text-dark">${data.feedback.user_name}</strong>  
                                    <small class="text-muted d-block">Just now</small>
                                </div>
                            </div>
                            <p class="mb-1">
                                <span class="badge bg-warning text-dark text-truncate d-block">${data.feedback.highlighted_text}</span>
                            </p>
                            <p class="mb-0">${data.feedback.comment}</p>
                        </div>
                    </div>`;
                    feedbacksContainer.insertAdjacentHTML('afterbegin', html);
                }
            } else {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    title: data.message || 'Something went wrong',
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true
                });
            }
        })
        .catch(error => {
            console.error(error);
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: 'Error submitting feedback',
                showConfirmButton: false,
                timer: 2500,
                timerProgressBar: true
            });
        });
    });
});
</script>

@endsection
