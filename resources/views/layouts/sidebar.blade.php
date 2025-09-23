<div class="sidebar d-none d-md-block bg-dark text-white vh-100 position-fixed" style="width: 220px; padding-top: 1rem;">

    @auth
        <div class="text-center mb-4 px-3">
            
            <div class="fw-semibold">Hello !{{ Auth::user()->name }}</div>
        </div>
    @endauth


    <a href="{{ route('dashboard') }}" class="d-block py-2 px-3 text-white {{ request()->routeIs('dashboard') ? 'bg-primary rounded' : '' }}">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
    </a>
    <a href="{{ route('projects.index') }}" class="d-block py-2 px-3 text-white {{ request()->routeIs('projects.*') ? 'bg-primary rounded' : '' }}">
        <i class="bi bi-folder me-2"></i> Projects
    </a>


     @auth
        <div class="text-center mb-4 px-3">
            <form method="POST" action="{{ route('logout') }}" class="mt-2">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-light w-100">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>
    @endauth


</div>
