@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-primary mb-0">
            <i class="bi bi-cloud-upload"></i> Upload Project
        </h3>
        <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Back to Projects
        </a>
    </div>

    <!-- Upload Form -->
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Project Name -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        <i class="bi bi-folder"></i> Project Name
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="Enter project name" required>
                </div>

                <!-- Upload PDF -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        <i class="bi bi-file-earmark-pdf"></i> Upload PDF
                    </label>
                    <input type="file" name="pdf" class="form-control" accept="application/pdf" required>
                    <div class="form-text text-muted">
                        Only PDF files are allowed.
                    </div>
                </div>

                <!-- Submit -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-lg">
                        <i class="bi bi-save"></i> Save Project
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
