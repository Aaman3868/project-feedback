@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
        Dashboard
    </h2>
@endsection

@section('content')
<div class="container">


    <!-- Dashboard Cards -->
    <div class="row g-4">

        <!-- Projects Card -->
        <div class="col-md-4">
            <a href="{{ route('projects.index') }}" class="text-decoration-none">
                <div class="card  shadow-lg border-0 hover-scale">
                    <div class="card-body d-flex align-items-center">
                        <div class="me-3"> 
                            <i class="bi bi-folder2-open fs-1 text-primary"></i>
                        </div>
                        <div>
                            <h5 class="card-title fw-bold mb-1">Projects</h5>
                            <p class="card-text fs-4">{{ $projectsCount ?? 0 }}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Add more cards here if needed -->
        <!-- Example: Users, Feedbacks, Settings -->
    </div>
</div>

<!-- Optional Hover Effect -->
<style>
.hover-scale:hover {
    transform: scale(1.03);
    transition: 0.3s ease-in-out;
    cursor: pointer;
}
</style>
@endsection
