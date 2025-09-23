@extends('layouts.app')

@section('content')
<div class="container py-3">

    <!-- Header -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
        <h3 class="fw-bold text-primary mb-2 mb-md-0">
            <i class="bi bi-folder2-open"></i> Projects
        </h3>
        <a href="{{ route('projects.create') }}" class="btn btn-success">
            <i class="bi bi-upload"></i> Upload New Project
        </a>
    </div>

    <!-- Projects Table -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" style="width:5%;">#</th>
                            <th scope="col">Project Name</th>
                            <th scope="col" style="width:20%;">PDF File</th>
                            <th scope="col" class="text-center" style="width:20%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($projects as $index => $project)
                            <tr>
                                <td class="fw-semibold">{{ $index + 1 }}</td>
                                <td>{{ $project->name }}</td>
                                <td>
                                    <a href="{{ asset($project->pdf_path) }}" target="_blank" class="btn btn-sm btn-outline-secondary w-100 mb-1 mb-md-0 d-flex align-items-center justify-content-center">
                                        <i class="bi bi-file-earmark-pdf text-danger me-1"></i> View PDF
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-sm btn-primary w-100 d-flex align-items-center justify-content-center">
                                        <i class="bi bi-eye me-1"></i> Details
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                    <i class="bi bi-info-circle"></i> No projects uploaded yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Optional Hover Effect -->
<style>
    table tbody tr:hover {
        background-color: #f8f9fa;
        transition: 0.2s;
    }
</style>
@endsection
