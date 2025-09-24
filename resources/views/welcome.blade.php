<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Feedback App</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#">Feedback</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-start">
                    @if(Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="btn btn-outline-primary me-2" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="btn btn-primary me-2  " href="{{ route('login') }}">Login</a>
                    </li>
                    @if(Route::has('register'))
                    <li class="nav-item">
                        <a class="btn btn-outline-success " href="{{ route('register') }}">Register</a>
                    </li>
                    @endif
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main sections  -->
    <div class="container-fluid">
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Left Text -->
                    <div class="col-lg-7 text-center text-lg-start mb-5 mb-lg-0">
                        <h1 class="fw-bold display-5">
                            Unlimited Interior Design on
                            <span class="text-success text-gradients">Subscription</span><br>
                            Powered by AI
                        </h1>
                        <p class="mt-3">
                            Hire world-class designers on subscription. One dashboard for all your 2D layouts, 3D
                            renders, material charts, and walkthroughs. Fixed cost. Zero chaos.
                        </p>

                        <!-- Buttons -->
                        <div class="d-flex flex-wrap gap-3 mt-4">
                            <a href="#" class="btn btn-success px-4">Start Your Subscription</a>
                            <a href="#" class="btn btn-outline-light px-4 ">Book a Demo</a>
                        </div>

                        <!-- Stats -->
                        <div class="d-flex flex-wrap gap-4 mt-4">
                            <div>
                                <h5 class="fw-bold">2-3 Days</h5>
                                <p class="mb-0 small">Average Delivery</p>
                            </div>
                            <div>
                                <h5 class="fw-bold">500+</h5>
                                <p class="mb-0 small">Projects Completed</p>
                            </div>
                            <div>
                                <h5 class="fw-bold">98%</h5>
                                <p class="mb-0 small">Client Satisfaction</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-5 text-center">
                        <div class="dashboard-img">
                            <h6 class="mb-3">SpaceLoop Dashboard</h6>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="bg-primary rounded" style="height:20px; width:80%;"></div>
                            </div>
                            <div class="d-flex justify-content-between gap-3">
                                <div class="bg-warning rounded flex-fill" style="height:40px;"></div>
                                <div class="bg-info rounded flex-fill" style="height:40px;"></div>
                                <div class="bg-success rounded flex-fill" style="height:40px;"></div>
                            </div>

                            <!-- Floating badges -->
                            <div class="badge-box badge-top">New Request <br><strong>3D Bedroom Design</strong></div>
                            <div class="badge-box badge-bottom">Completed <br><strong>Living Room Layout</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trusted Section -->
        <section class="py-5 bg-white">
            <div class="container text-center">
                <!-- Heading -->
                <h5 class="fw-semibold">Trusted by Contractors, Designers, and Architects Across India</h5>
                <p class="text-muted py-3">500+ projects delivered</p>

                <!-- Company names -->
                <div class="d-flex flex-wrap justify-content-center gap-3 mb-5 text-muted">
                    <span>TechCorp</span>
                    <span>DesignStudio</span>
                    <span>BuildRight</span>
                    <span>HomeSpace</span>
                    <span>InteriorPro</span>
                    <span>UrbanLiving</span>
                </div>

                <!-- Icons Row -->
                <div class="row g-4">
                    <div class="col-6 col-md-2">
                        <div class="icon-box text-success"><i class="bi bi-shield-check"></i></div>
                        <p class="small mb-0">Secure Payments</p>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="icon-box text-primary"><i class="bi bi-globe"></i></div>
                        <p class="small mb-0">NRI Friendly</p>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="icon-box text-warning"><i class="bi bi-geo-alt"></i></div>
                        <p class="small mb-0">Made in India</p>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="icon-box text-info"><i class="bi bi-people"></i></div>
                        <p class="small mb-0">500+ Projects</p>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="icon-box text-secondary"><i class="bi bi-patch-check"></i></div>
                        <p class="small mb-0">Quality Assured</p>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="icon-box text-danger"><i class="bi bi-sliders"></i></div>
                        <p class="small mb-0">Flexible Plans</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- steps section -->
        <section class="py-5 bg-light">
            <div class="container">
                <!-- Section Header -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold">From Floor Plan to Final Design — Simplified</h2>
                    <p class="text-muted">Our streamlined process takes your project from concept to completion
                        with minimal hassle and maximum results.</p>
                </div>

                <!-- Steps -->
                <div class="row g-4">
                    <!-- Step 1 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 text-center p-3 border-0 shadow-sm">
                            <div class="badge rounded-circle bg-primary text-white mb-3"
                                style="width: 35px; height: 35px; line-height: 28px;">1</div>
                            <div class="mb-3">
                                <i class="bi bi-upload fs-2 text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Submit a Request</h5>
                            <p class="text-muted small">Upload floor plan, select room/service. Our platform instantly
                                organizes your requirements.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 text-center p-3 border-0 shadow-sm">
                            <div class="badge rounded-circle bg-primary text-white mb-3"
                                style="width: 35px; height: 35px; line-height: 28px;">2</div>
                            <div class="mb-3">
                                <i class="bi bi-person-check fs-2 text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Designer Assigned</h5>
                            <p class="text-muted small">AI matches best designer for your style and project requirements
                                within minutes.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 text-center p-3 border-0 shadow-sm">
                            <div class="badge rounded-circle bg-primary text-white mb-3"
                                style="width: 35px; height: 35px; line-height: 28px;">3</div>
                            <div class="mb-3">
                                <i class="bi bi-check2-circle fs-2 text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Get Your Design</h5>
                            <p class="text-muted small">2D, 3D, material chart, or walkthrough delivered in days with
                                professional quality.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 text-center p-3 border-0 shadow-sm">
                            <div class="badge rounded-circle bg-primary text-white mb-3"
                                style="width: 35px; height: 35px; line-height: 28px;">4</div>
                            <div class="mb-3">
                                <i class="bi bi-chat-left-dots fs-2 text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Feedback & Revisions</h5>
                            <p class="text-muted small">AI feedback tools + unlimited revisions until you're completely
                                satisfied.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Virutal Section -->
        <section class="hero">
            <div class="container py-4">
                <div class="row align-items-center">

                    <!-- Left Text -->
                    <div class="col-lg-7 text-center text-lg-start mb-5 mb-lg-0">
                        <h1 class="fw-bold display-5">
                            Your Virtual Design Team
                            <span class="text-success text-gradients1">In One Dashboard</span><br>
                            Powered by AI
                        </h1>
                        <p class="mt-3">
                            Comprehensive AI-powered platform combining project tracking,feedback tools,and
                            expert desginers.
                        </p>
                        <section class=" text-white">
                            <div class="container">
                                <div class="row g-4">

                                    <!-- Feature 1 -->
                                    <div class="col-md-6">
                                        <div class="tool-cards rounded-4 p-4 h-100">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="icon-boxs"><i class="bi bi-diagram-3"></i></div>
                                                <h3 class="h6 fw-semibold ms-3 mb-0">Request Management & Tracking</h3>
                                            </div>
                                            <p class="small opacity-75 mb-0">
                                                Real-time dashboard to monitor all your design projects in one place.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Feature 2 -->
                                    <div class="col-md-6">
                                        <div class="tool-cards rounded-4 p-4 h-100">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="icon-boxs"><i class="bi bi-people"></i></div>
                                                <h3 class="h6 fw-semibold ms-3 mb-0">Designer Matching Algorithm</h3>
                                            </div>
                                            <p class="small opacity-75 mb-0">
                                                AI-powered matching connects you with the perfect designer for your
                                                style.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Feature 3 -->
                                    <div class="col-md-6">
                                        <div class="tool-cards rounded-4 p-4 h-100">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="icon-boxs"><i class="bi bi-chat-dots"></i></div>
                                                <h3 class="h6 fw-semibold ms-3 mb-0">Real-time Feedback & Annotations
                                                </h3>
                                            </div>
                                            <p class="small opacity-75 mb-0">
                                                Collaborative tools that eliminate miscommunication and speed up
                                                revisions.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Feature 4 -->
                                    <div class="col-md-6">
                                        <div class="tool-cards rounded-4 p-4 h-100">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="icon-boxs"><i class="bi bi-lightning-charge"></i></div>
                                                <h3 class="h6 fw-semibold ms-3 mb-0">Built-in AI Tools</h3>
                                            </div>
                                            <p class="small opacity-75 mb-0">
                                                Design drafts, furniture finder, material swaps – all powered by AI.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>


                        <!-- Buttons -->
                        <div class="d-flex flex-wrap gap-3 mt-4">
                            <a href="#" class="btn btn-success px-4">Start Platform Demo</a>

                        </div>


                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-5 text-center">
                        <div class="dashboard-img">
                            <h6 class="mb-3">SpaceLoop Dashboard</h6>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="bg-primary rounded" style="height:20px; width:80%;"></div>
                            </div>
                            <div class="d-flex justify-content-between gap-3">
                                <div class="bg-warning rounded flex-fill" style="height:40px;"></div>
                                <div class="bg-info rounded flex-fill" style="height:40px;"></div>
                                <div class="bg-success rounded flex-fill" style="height:40px;"></div>
                            </div>

                            <!-- Floating badges -->
                            <div class="badge-box badge-top">New Request <br><strong>3D Bedroom Design</strong></div>
                            <div class="badge-box badge-bottom">Completed <br><strong>Living Room Layout</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ai Section -->
        <section class="hero1 p-4">
            <div class="container py-5">
                <!-- Header -->
                <div class="text-center mb-5">
                    <h1 class="display-4 fw-bold">AI Tools to Transform Your Design
                        Process</h1>
                    <p class="lead opacity-75 mx-auto" style="max-width: 800px;">
                        From quick makeovers to professional-grade renders, our AI
                        suite puts powerful design tools at your fingertips—fast,
                        accurate, and hassle-free.
                    </p>
                </div>

                <!-- Tools Grid -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="tool-card rounded-4 p-4 h-100">
                            <div class="d-flex align-items-center">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center bg-light bg-opacity-25 rounded p-2 mb-2 fs-3">
                                    🎨</div>
                                <h3 class="h5 fw-semibold ms-2 mb-0">AI
                                    Redesign</h3>
                            </div>
                            <p class="small opacity-75">Instantly refresh any room
                                with Beautiful, Creative, or Perfect redesign
                                modes.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="tool-card rounded-4 p-4 h-100">
                            <div class="d-flex align-items-center">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center bg-light bg-opacity-25 rounded p-2 mb-2 fs-3">
                                    🏠</div>
                                <h3 class="h5 fw-semibold ms-2 mb-0">Virtual
                                    Staging</h3>
                            </div>
                            <p class="small opacity-75">Furnish empty interiors in
                                seconds with realistic AI-generated furniture.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="tool-card rounded-4 p-4 h-100">
                            <div class="d-flex align-items-center">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center bg-light bg-opacity-25 rounded p-2 mb-2 fs-3">
                                    ✏️</div>
                                <h3 class="h5 fw-semibold ms-2 mb-0">Sketch to
                                    Render</h3>
                            </div>
                            <p class="small opacity-75">Turn rough sketches into
                                polished, photorealistic 3D renders.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="tool-card rounded-4 p-4 h-100">
                            <div class="d-flex align-items-center">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center bg-light bg-opacity-25 rounded p-2 mb-2 fs-3">
                                    🎯</div>
                                <h3 class="h5 fw-semibold ms-2 mb-0">Precision+
                                    Edits</h3>
                            </div>
                            <p class="small opacity-75">Change specific areas of
                                your design without touching the rest.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="tool-card rounded-4 p-4 h-100">
                            <div class="d-flex align-items-center">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center bg-light bg-opacity-25 rounded p-2 mb-2 fs-3">
                                    🎨</div>
                                <h3 class="h5 fw-semibold ms-2 mb-0">Color &
                                    Material Changer</h3>
                            </div>
                            <p class="small opacity-75">Experiment with wall colors,
                                textures, and finishes in one click.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="tool-card rounded-4 p-4 h-100">
                            <div class="d-flex align-items-center">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center bg-light bg-opacity-25 rounded p-2 mb-2 fs-3">
                                    🔍</div>
                                <h3 class="h5 fw-semibold ms-2 mb-0">Furniture
                                    Finder</h3>
                            </div>
                            <p class="small opacity-75">Identify furniture styles
                                and get purchase options instantly.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="tool-card rounded-4 p-4 h-100">
                            <div class="d-flex align-items-center">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center bg-light bg-opacity-25 rounded p-2 mb-2 fs-3">
                                    📋</div>
                                <h3 class="h5 fw-semibold ms-2 mb-0">Design
                                    Transfer</h3>
                            </div>
                            <p class="small opacity-75">Apply the look of an
                                inspiration photo directly to your room.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="tool-card rounded-4 p-4 h-100">
                            <div class="d-flex align-items-center">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center bg-light bg-opacity-25 rounded p-2 mb-2 fs-3">
                                    💬</div>
                                <h3 class="h5 fw-semibold ms-2 mb-0">AI Design
                                    Critique</h3>
                            </div>
                            <p class="small opacity-75">Get instant AI feedback and
                                suggestions to improve your design.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="tool-card rounded-4 p-4 h-100">
                            <div class="d-flex align-items-center">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center bg-light bg-opacity-25 rounded p-2 mb-2 fs-3">
                                    💡</div>
                                <h3 class="h5 fw-semibold ms-2 mb-0">Smart Home
                                    Advisor</h3>
                            </div>
                            <p class="small opacity-75">Plan lighting, layouts and
                                smart integrations powered by AI.</p>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Section -->


                <div class="bg-dark bg-opacity-25 rounded-4 p-3 mx-auto" style="max-width: 1000px;">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold display-6">Supercharge Your Projects with
                            AI</h2>
                        <p class="text-white-50">Dashboard mockup with 3D render preview
                            pop-ups</p>
                    </div>
                    <div class="d-flex align-items-center gap-2 p-2 bg-light rounded-top">
                        <div class="browser-dot red"></div>
                        <div class="browser-dot yellow"></div>
                        <div class="browser-dot green"></div>
                        <span class="ms-3 small text-secondary">SpaceLoop AI
                            Dashboard</span>
                    </div>
                    <div class="bg-white text-dark rounded-bottom p-4">
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <div class="rounded text-center py-3 text-white fw-semibold"
                                    style="background:#4f46e5;">
                                    AI Processing<br><strong>3D Render</strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="rounded text-center py-3 text-white fw-semibold"
                                    style="background:#10b981;">
                                    Completed<br><strong>Virtual Staging</strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="rounded text-center py-3 text-white fw-semibold"
                                    style="background:#8b5cf6;">
                                    In Progress<br><strong>AI Redesign</strong>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="bg-primary rounded p-3 text-white fs-3 mb-2">🤖</div>
                            <div class="fw-semibold text-muted">AI-Powered Design
                                Tools</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <a href="#" class="btn btn-success px-4">Try AI, tools free</a>
                        <a href="#" class="btn btn-success px-4">Book,My Demo</a>

                    </div>
                </div>


            </div>
        </section>

        <!-- Qualtity section -->
        <section class="py-5 bg-light">
            <section class="py-5 bg-white">
                <div class="container text-center mb-5">
                    <h2 class="fw-bold display-6 text-primary">See the Quality We
                        Deliver</h2>
                    <p class="text-muted mx-auto" style="max-width: 700px;">
                        From concept to reality—explore our portfolio of stunning
                        designs that showcase the
                        professional quality and attention to detail you can expect.
                    </p>
                </div>

                <div class="container">
                    <div class="row g-4">
                        <!-- Card 1 -->
                        <div class="col-md-6 col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-muted small">Residential</span>
                                        <span class="badge bg-primary">3D Render +
                                            Walkthrough</span>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-center border rounded bg-light bg-opacity-50"
                                        style="height:200px;">
                                        <div class="bg-success bg-opacity-25 rounded" style="width:50px; height:50px;">
                                        </div>
                                        <small class="text-muted mt-2">3D Render
                                            Preview</small>
                                    </div>
                                    <h5 class="fw-semibold mt-3">Modern Bedroom
                                        Suite</h5>
                                    <p class="text-muted small">Complete bedroom
                                        design with custom furniture and
                                        lighting</p>
                                    <a href="#" class="text-success fw-semibold small text-decoration-none">View
                                        Full Project <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-6 col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-muted small">Kitchen</span>
                                        <span class="badge bg-primary">2D Layout +
                                            3D Visualization</span>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-center border rounded bg-light bg-opacity-50"
                                        style="height:200px;">
                                        <div class="bg-success bg-opacity-25 rounded" style="width:50px; height:50px;">
                                        </div>
                                        <small class="text-muted mt-2">3D Render
                                            Preview</small>
                                    </div>
                                    <h5 class="fw-semibold mt-3">Open Kitchen
                                        Layout</h5>
                                    <p class="text-muted small">Space-optimized
                                        kitchen with island and smart storage</p>
                                    <a href="#" class="text-success fw-semibold small text-decoration-none">View
                                        Full Project <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-md-6 col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-muted small">Commercial</span>
                                        <span class="badge bg-primary">Complete
                                            Design Package</span>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-center border rounded bg-light bg-opacity-50"
                                        style="height:200px;">
                                        <div class="bg-success bg-opacity-25 rounded" style="width:50px; height:50px;">
                                        </div>
                                        <small class="text-muted mt-2">3D Render
                                            Preview</small>
                                    </div>
                                    <h5 class="fw-semibold mt-3">Office Reception
                                        Area</h5>
                                    <p class="text-muted small">Professional
                                        reception with brand elements and
                                        functionality</p>
                                    <a href="#" class="text-success fw-semibold small text-decoration-none">View
                                        Full Project <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="col-md-6 col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-muted small">Residential</span>
                                        <span class="badge bg-primary">3D Render +
                                            Material Chart</span>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-center border rounded bg-light bg-opacity-50"
                                        style="height:200px;">
                                        <div class="bg-success bg-opacity-25 rounded" style="width:50px; height:50px;">
                                        </div>
                                        <small class="text-muted mt-2">3D Render
                                            Preview</small>
                                    </div>
                                    <h5 class="fw-semibold mt-3">Living Room
                                        Makeover</h5>
                                    <p class="text-muted small">Contemporary living
                                        space with entertainment zone</p>
                                    <a href="#" class="text-success fw-semibold small text-decoration-none">View
                                        Full Project <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-success px-4 py-2 rounded-pill fw-semibold">
                            View Complete Portfolio <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </section>
        </section>

        <!-- Spaceloop section -->
        <section class="py-5 bg-light">
            <div class="container text-center">
                <h2 class="fw-bold">Who Is SpaceLoop For?</h2>
                <p class="text-muted mb-5">
                    Whether you're a professional contractor or a homeowner designing from abroad, our platform adapts
                    to your specific needs and workflow.
                </p>

                <div class="row g-4">
                    <!-- Contractors -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 text-center shadow-sm border-0">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="bi bi-hammer" style="font-size:2rem; color:#f05a28;"></i>
                                </div>
                                <h5 class="card-title fw-bold">Contractors</h5>
                                <p class="text-success mb-2">Deliver faster without hiring</p>
                                <p class="card-text text-muted small">
                                    Complete projects quicker with professional designs. No need to hire full-time
                                    designers—get quality outputs on demand.
                                </p>
                                <ul class="list-unstyled text-center small">
                                    <li><span class="badges">•</span> Faster project delivery</li>
                                    <li><span class="badges">•</span> No hiring overhead</li>
                                    <li><span class="badges">•</span> Professional quality</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Interior Designers -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 text-center shadow-sm border-0">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="bi bi-palette" style="font-size:2rem; color:#9b59b6;"></i>
                                </div>
                                <h5 class="card-title fw-bold">Interior Designers</h5>
                                <p class="text-success mb-2">Scale with AI tools & revisions</p>
                                <p class="card-text text-muted small">
                                    Focus on creativity while AI handles feedback organization and client communication.
                                    Scale your practice without hiring more staff.
                                </p>
                                <ul class="list-unstyled text-center small">
                                    <li><span class="badges">•</span> AI-powered workflow</li>
                                    <li><span class="badges">•</span> Revision management</li>
                                    <li><span class="badges">•</span> Scale without hiring</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Architects -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 text-center shadow-sm border-0">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="bi bi-building" style="font-size:2rem; color:#3498db;"></i>
                                </div>
                                <h5 class="card-title fw-bold">Architects</h5>
                                <p class="text-success mb-2">Get drawings & visuals on demand</p>
                                <p class="card-text text-muted small">
                                    Complete architectural packages including technical drawings, 3D visualizations, and
                                    walkthroughs—delivered by expert teams.
                                </p>
                                <ul class="list-unstyled text-center small">
                                    <li><span class="badges">•</span> Technical drawings</li>
                                    <li><span class="badges">•</span> 3D visualizations</li>
                                    <li><span class="badges">•</span> Expert teams</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Furniture Retailers -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 text-center shadow-sm border-0">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="bi bi-basket" style="font-size:2rem; color:#2ecc71;"></i>
                                </div>
                                <h5 class="card-title fw-bold">Furniture Retailers</h5>
                                <p class="text-success mb-2">Bundle design with sales</p>
                                <p class="card-text text-muted small">
                                    Offer complete design services to customers. Show how your furniture looks in
                                    professionally designed spaces to increase sales.
                                </p>
                                <ul class="list-unstyled text-center small">
                                    <li><span class="badges">•</span> Increase sales</li>
                                    <li><span class="badges">•</span> Complete solutions</li>
                                    <li><span class="badges">•</span> Customer satisfaction</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing section -->
        <section class="py-5 bg-light">
            <section class="py-5 bg-white">
                <div class="container text-center mb-5">
                    <h2 class="fw-bold display-6">Simple, Transparent Pricing</h2>
                    <p class="text-muted mx-auto" style="max-width: 700px;">
                        Choose the plan that fits your needs. No hidden fees, no
                        long-term contracts.
                        Start with a free trial and scale as you grow.
                    </p>
                </div>

                <div class="container">
                    <div class="row g-4 justify-content-center">

                        <!-- Plan 1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4 text-center">
                                    <h5 class="fw-semibold">Per Request</h5>
                                    <h2 class="fw-bold mt-3">₹3,000 <span class="fs-6 fw-normal">/
                                            room</span></h2>
                                    <p class="text-muted small">Perfect for single
                                        room projects</p>

                                    <ul class="list-unstyled text-start mt-4 mb-4">
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>1
                                            room 3D render + material chart</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>2D
                                            furniture layout (₹499 trial tier)</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Single
                                            design request</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>1
                                            free revision</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>48–72
                                            hour delivery</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Email
                                            support</li>
                                    </ul>

                                    <a href="#" class="btn btn-success w-100">Start
                                        Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- Plan 2 (Most Popular) -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card border border-success shadow-lg h-100 position-relative">
                                <div
                                    class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-primary">
                                    Most Popular
                                </div>
                                <div class="card-body p-4 text-center">
                                    <h5 class="fw-semibold">Monthly
                                        Subscription</h5>
                                    <h2 class="fw-bold mt-3">₹25,000 <span class="fs-6 fw-normal">/
                                            month</span></h2>
                                    <p class="text-muted small">Unlimited requests,
                                        3 active projects</p>

                                    <ul class="list-unstyled text-start mt-4 mb-4">
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Unlimited
                                            requests</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>3
                                            active projects at a time</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Same
                                            day or next day 3D output</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>All
                                            services: 2D, 3D, walkthroughs,
                                            drawings</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>AI
                                            tools included</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Priority
                                            support</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Dedicated
                                            project manager</li>
                                    </ul>

                                    <a href="#" class="btn btn-success w-100">Start
                                        Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- Plan 3 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4 text-center">
                                    <h5 class="fw-semibold">Enterprise</h5>
                                    <h2 class="fw-bold mt-3">Custom <span class="fs-6 fw-normal">pricing</span></h2>
                                    <p class="text-muted small">Multi-seat,
                                        integrations, white-label</p>

                                    <ul class="list-unstyled text-start mt-4 mb-4">
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>For
                                            contractors, architects, studios</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Unlimited
                                            requests & projects</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Multi-seat
                                            team access</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>White-label
                                            solutions</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Custom
                                            integrations</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Dedicated
                                            account manager</li>
                                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>24/7
                                            priority support</li>
                                    </ul>

                                    <a href="#" class="btn btn-primary w-100">Start
                                        Now</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Footer note -->
                    <div class="text-center mt-4">
                        <p class="text-muted small mb-0">
                            All plans include secure payments, worldwide access, and
                            satisfaction guarantee <br>
                            <span class="d-block mt-2">
                                <i class="bi bi-check2 me-1"></i>No setup fees
                                &nbsp;·&nbsp;
                                <i class="bi bi-check2 me-1"></i>Cancel anytime
                                &nbsp;·&nbsp;
                                <i class="bi bi-check2 me-1"></i>14-day money back
                            </span>
                        </p>
                    </div>
                </div>
            </section>
        </section>


        <!-- Colaboratio Section -->
        <section class="hero1 p-4">
            <section class="py-5 text-white">
                <div class="container text-center mb-5">
                    <h2 class="fw-bold display-6">The Future of Interior Design
                        Collaboration</h2>
                    <p class="mt-3 mb-5" style="max-width: 750px; margin: 0 auto;">
                        Soon, SpaceLoop will integrate advanced AI tools and virtual
                        collaboration features
                        that will revolutionize how interior design projects are
                        managed and delivered.
                    </p>
                </div>

                <div class="container mb-5">
                    <div class="row g-4 text-center">
                        <!-- Feature 1 -->
                        <div class="col-md-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-light bg-opacity-25 rounded-3 mb-3"
                                style="width:60px; height:60px; font-size:1.5rem;">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </div>
                            <h6 class="fw-semibold">AI-powered instant design
                                drafts</h6>
                            <p class="small text-light opacity-75">Get preliminary
                                designs in minutes, not days</p>
                        </div>
                        <!-- Feature 2 -->
                        <div class="col-md-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-light bg-opacity-25 rounded-3 mb-3"
                                style="width:60px; height:60px; font-size:1.5rem;">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <h6 class="fw-semibold">Annotation & feedback tools</h6>
                            <p class="small text-light opacity-75">Reduce meetings
                                to zero with smart collaboration</p>
                        </div>
                        <!-- Feature 3 -->
                        <div class="col-md-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-light bg-opacity-25 rounded-3 mb-3"
                                style="width:60px; height:60px; font-size:1.5rem;">
                                <i class="bi bi-link-45deg"></i>
                            </div>
                            <h6 class="fw-semibold">Client collaboration links</h6>
                            <p class="small text-light opacity-75">One-click
                                approvals for seamless project management</p>
                        </div>
                    </div>
                </div>

                <!-- Video Section -->
                <div class="container mb-5">
                    <div class="ratio ratio-16x9 mx-auto" style="max-width:800px;">
                        <div class="d-flex flex-column align-items-center justify-content-center bg-dark rounded-3">
                            <button class="btn btn-light rounded-circle mb-3" style="width:60px; height:60px;">
                                <i class="bi bi-play-fill fs-3 text-dark"></i>
                            </button>
                            <h6 class="fw-semibold">See the Future in Action</h6>
                            <p class="small opacity-75 mb-0">Watch how our AI
                                transforms chaotic feedback into clear design
                                tasks</p>
                        </div>
                    </div>
                    <p class="small mt-3 opacity-75 text-center" style="max-width: 700px; margin: 0 auto;">
                        “From messy WhatsApp chats and multiple file versions to one
                        sleek dashboard with AI-powered annotations and instant
                        design
                        variations, SpaceLoop transforms chaos into clarity.”
                    </p>
                </div>

                <!-- CTA Buttons -->
                <div class="container text-center">
                    <h5 class="fw-semibold mb-4">Unlimited Interior Design on
                        Subscription — Powered by AI</h5>
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                        <a href="#" class="btn btn-success px-4 py-2 fw-semibold">Start
                            Subscription</a>
                        <a href="#" class="btn btn-outline-light px-4 py-2 fw-semibold">Join
                            Waitlist</a>
                    </div>
                </div>
            </section>
        </section>


        <!-- Clients section -->
        <section class="py-5 bg-light">
            <div class="container">
                <!-- Section Title -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-primary">What Our Clients Say</h2>
                    <p class="text-muted">
                        From contractors to NRIs, see how SpaceLoop is transforming
                        the way people approach interior design—making it faster,
                        more affordable, and stress-free.
                    </p>
                </div>

                <!-- Testimonials Row 1 -->
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="testimonial-card h-100">
                            <div class="quote-icon"><i class="bi bi-quote"></i></div>
                            <div class="stars mb-2">★★★★★</div>
                            <p class="quote">"We cut approval time by 70% using SpaceLoop! The AI feedback tools are
                                game-changing."</p>
                            <div class="client-info">
                                <h6>Rajesh Kumar</h6>
                                <small class="text-muted">Contractor • Mumbai • 50+ Residential Projects</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-card h-100">
                            <div class="quote-icon"><i class="bi bi-quote"></i></div>
                            <div class="stars mb-2">★★★★★</div>
                            <p class="quote">"Finally, a way to scale without 10 in-house designers. Quality remains
                                consistently high."</p>
                            <div class="client-info">
                                <h6>Priya Sharma</h6>
                                <small class="text-muted">Studio Owner • Pune • Design Studio with 5 Staff</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-card h-100">
                            <div class="quote-icon"><i class="bi bi-quote"></i></div>
                            <div class="stars mb-2">★★★★★</div>
                            <p class="quote">"I designed my parents' home from Dubai stress-free. The platform made
                                everything transparent."</p>
                            <div class="client-info">
                                <h6>David Chen</h6>
                                <small class="text-muted">NRI Client • Dubai • 3BHK Complete Design</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonials Row 2 -->
                <div class="row g-4 mb-5">
                    <div class="col-md-4">
                        <div class="testimonial-card h-100">
                            <div class="quote-icon"><i class="bi bi-quote"></i></div>
                            <div class="stars mb-2">★★★★★</div>
                            <p class="quote">"SpaceLoop delivers professional drawings and renders faster than any team
                                we've worked with."</p>
                            <div class="client-info">
                                <h6>Anjali Patel</h6>
                                <small class="text-muted">Architect • Bangalore • Commercial & Residential</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-card h-100">
                            <div class="quote-icon"><i class="bi bi-quote"></i></div>
                            <div class="stars mb-2">★★★★★</div>
                            <p class="quote">"Bundling design with furniture sales increased our conversion rate by 40%.
                                Excellent ROI."</p>
                            <div class="client-info">
                                <h6>Mohammed Ali</h6>
                                <small class="text-muted">Furniture Retailer • Hyderabad • Furniture Showroom
                                    Design</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-card h-100">
                            <div class="quote-icon"><i class="bi bi-quote"></i></div>
                            <div class="stars mb-2">★★★★★</div>
                            <p class="quote">"The AI tools help me focus on creativity while the platform handles all
                                project management."</p>
                            <div class="client-info">
                                <h6>Sarah Johnson</h6>
                                <small class="text-muted">Interior Designer • Goa • Freelance Designer</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="row text-center">
                    <div class="col-6 col-md-3 stats-box mb-4">
                        <h3>500+</h3>
                        <p class="text-muted mb-0">Projects Completed</p>
                    </div>
                    <div class="col-6 col-md-3 stats-box mb-4">
                        <h3>98%</h3>
                        <p class="text-muted mb-0">Client Satisfaction</p>
                    </div>
                    <div class="col-6 col-md-3 stats-box mb-4">
                        <h3>70%</h3>
                        <p class="text-muted mb-0">Faster Approvals</p>
                    </div>
                    <div class="col-6 col-md-3 stats-box mb-4">
                        <h3>24/7</h3>
                        <p class="text-muted mb-0">Global Support</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Faq Section -->
        <div class="container py-5">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <p class="text-center mb-5">Get answers to common questions about our subscription model, delivery process,
                and how SpaceLoop can transform your design experience.</p>

            <div class="accordion" id="faqAccordion">
                <div class="accordion-item m-2">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            How does the subscripion model work?
                            <i class="bi bi-chevron-down ms-auto icon-rotate"></i>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Answer about international client collaboration.
                        </div>
                    </div>
                </div>

                <div class="accordion-item m-2">
                    <h2 class="accordion-header" id="headingtwo">
                        <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false"
                            aria-controls="collapsetwo">
                            What's included in each request?
                            <i class="bi bi-chevron-down ms-auto icon-rotate"></i>
                        </button>
                    </h2>
                    <div id="collapsetwo" class="accordion-collapse collapse" aria-labelledby="headingtwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Answer about international client collaboration.
                        </div>
                    </div>
                </div>

                <div class="accordion-item m-2">
                    <h2 class="accordion-header" id="headingthree">
                        <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false"
                            aria-controls="collapsethree">
                            How long does it take complete a design?
                            <i class="bi bi-chevron-down ms-auto icon-rotate"></i>
                        </button>
                    </h2>
                    <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingtwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Answer about international client collaboration.
                        </div>
                    </div>
                </div>



                <div class="accordion-item m-2">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false"
                            aria-controls="collapsefour">
                            Do you work with international clients?
                            <i class="bi bi-chevron-down ms-auto icon-rotate"></i>
                        </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingtwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Answer about international client collaboration.
                        </div>
                    </div>
                </div>
                <div class="accordion-item m-2">
                    <h2 class="accordion-header" id="headingfive">
                        <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false"
                            aria-controls="collapsefive">
                            How does the AI feedback system work?
                            <i class="bi bi-chevron-down ms-auto icon-rotate"></i>
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingtwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Answer about international client collaboration.
                        </div>
                    </div>
                </div>


                <div class="accordion-item m-2">
                    <h2 class="accordion-header" id="headingsix">
                        <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false"
                            aria-controls="collapsesix">
                            What if I'm not satisfied with design?
                            <i class="bi bi-chevron-down ms-auto icon-rotate"></i>
                        </button>
                    </h2>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingtwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Answer about international client collaboration.
                        </div>
                    </div>
                </div>


                <div class="accordion-item m-2">
                    <h2 class="accordion-header" id="headingseven">
                        <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false"
                            aria-controls="collapseseven">
                            Can I work with the same designer for multiple rooms?
                            <i class="bi bi-chevron-down ms-auto icon-rotate"></i>
                        </button>
                    </h2>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingtwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Answer about international client collaboration.
                        </div>
                    </div>
                </div>


                <div class="accordion-item m-2">
                    <h2 class="accordion-header" id="headingseight">
                        <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false"
                            aria-controls="collapseeight">
                            What file formats do you provide?
                            <i class="bi bi-chevron-down ms-auto icon-rotate"></i>
                        </button>
                    </h2>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingtwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Answer about international client collaboration.
                        </div>
                    </div>
                </div>

                <div class="accordion-item m-2">
                    <h2 class="accordion-header" id="headingsnine">
                        <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false"
                            aria-controls="collapsenine">
                            Do you handle commercial Projects?
                            <i class="bi bi-chevron-down ms-auto icon-rotate"></i>
                        </button>
                    </h2>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingtwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Answer about international client collaboration.
                        </div>
                    </div>
                </div>


                <div class="accordion-item m-2">
                    <h2 class="accordion-header" id="headingsten">
                        <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false"
                            aria-controls="collapseten">
                            How do payments work?
                            <i class="bi bi-chevron-down ms-auto icon-rotate"></i>
                        </button>
                    </h2>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingtwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Answer about international client collaboration.
                        </div>
                    </div>
                </div>

                <div class="accordion-item m-2">
                    <h2 class="accordion-header" id="headingTwelve">
                        <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false"
                            aria-controls="collapseTwelve">
                            What makes SpaceLoop different from traditional designers?
                            <i class="bi bi-chevron-down ms-auto icon-rotate"></i>
                        </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Answer about international client collaboration.
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-center mb-2 mt-4">Still have questions? We're here to help!.</p>
            <p class="text-center mb-5 fw-bold" style="color:#45d6b7">Support@spaceloop.com +91 98765 43210</p>
        </div>
        
        <!-- Footer -->
        <footer class="bg-gradient" style="">
            <div class="container text-center py-5">
                <!-- Heading -->
                <h2 class="fw-bold text-light">Ready to Scale Your Design Team?</h2>
                <p class="mb-4 text-light">Hire designers on subscription and access the future of AI-powered
                    collaboration.</p>

                <!-- Buttons -->
                <div class="d-flex justify-content-center gap-3 mb-3 flex-wrap">
                    <a href="#" class="btn btn-success px-4">Start Subscription</a>
                    <a href="#" class="btn btn-outline-light px-4 ">Join Waitlist</a>
                </div>

                <!-- Features -->
                <div class="d-flex justify-content-center flex-wrap gap-3 small">
                    <span class="text-light">✅ No credit card required</span>
                    <span class="text-light">✅ 14-day money back guarantee</span>
                    <span class="text-light">✅ Cancel anytime</span>
                </div>
            </div>

            <hr class="border-light">

            <div class="container py-4">
                <div class="row text-center text-md-start">
                    <!-- Product -->
                    <div class="col-6 col-md-3 mb-3">
                        <h6 class="fw-bold text-light">Product</h6>
                        <ul class="list-unstyled small">
                            <li><a href="#" class="text-decoration-none text-light">Features</a></li>
                            <li><a href="#" class="text-decoration-none text-light">Pricing</a></li>
                            <li><a href="#" class="text-decoration-none text-light">Security</a></li>
                        </ul>
                    </div>
                    <!-- Company -->
                    <div class="col-6 col-md-3 mb-3">
                        <h6 class="fw-bold text-light">Company</h6>
                        <ul class="list-unstyled small">
                            <li><a href="#" class="text-decoration-none text-light">About</a></li>
                            <li><a href="#" class="text-decoration-none text-light">Blog</a></li>
                            <li><a href="#" class="text-decoration-none text-light">Careers</a></li>
                        </ul>
                    </div>
                    <!-- Support -->
                    <div class="col-6 col-md-3 mb-3">
                        <h6 class="fw-bold text-light">Support</h6>
                        <ul class="list-unstyled small">
                            <li><a href="#" class="text-decoration-none text-light">Help Center</a></li>
                            <li><a href="#" class="text-decoration-none text-light">Contact</a></li>
                            <li><a href="#" class="text-decoration-none text-light">API Docs</a></li>
                        </ul>
                    </div>
                    <!-- CTA -->
                    <div class="col-6 col-md-3 mb-3 text-md-end">
                        <a href="#" class="btn btn-success px-4">Start Free Trial</a>
                    </div>
                </div>
                <hr class="border-light">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small">
                    <p class="mb-2 mb-md-0 text-light">
                        <strong>SpaceLoop</strong> — The AI-powered design subscription platform
                    </p>

                    <div>
                        <a href="#" class="text-light me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <hr class="border-light">

                <!-- Bottom Info -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small">
                    <p class="mb-2 mb-md-0 text-light">
                        © 2024 SpaceLoop. All rights reserved. Made in India with ❤️
                    </p>
                    <p class="mb-2 mb-md-0">

                    </p>
                    <div>
                        <a href="#" class="text-light text-decoration-none me-3">Privacy Policy</a>
                        <a href="#" class="text-light text-decoration-none me-3">Terms of Service</a>
                        <a href="#" class="text-light text-decoration-none">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>