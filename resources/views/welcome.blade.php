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
                                style="width: 40px; height: 40px; line-height: 40px;">1</div>
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
                                style="width: 40px; height: 40px; line-height: 40px;">2</div>
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
                                style="width: 40px; height: 40px; line-height: 40px;">3</div>
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
                                style="width: 40px; height: 40px; line-height: 40px;">4</div>
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
            <div class="container">
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
            <div class="container text-center">
                <div class="row align-items-center">
                    <h2 class="fw-bold ">
                        AI Tools Transform Your Design Process
                    </h2>

                    <p class="mt-3">
                        From quick makeovers to professional-grade renders,Our AI suite puts powerful design tools at
                        your
                        fingertips-fast,accurate, and hassle-free
                    </p>

                </div>
            </div>
        </section>

         <!-- Qualtity section -->
        <section class="py-5 bg-light">
            <div class="container text-center">
                <h2 class="fw-bold">See the Quality We Deliver</h2>
                <p class="text-muted mb-5">
                    Whether you're a professional contractor or a homeowner designing from abroad, our platform adapts
                    to your specific needs and workflow.
                </p>

               
            </div>
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
            <div class="container text-center">
                <h2 class="fw-bold">Simple,Transperent Pricing</h2>
                <p class="text-muted mb-5">
                    Choose the plan that fits you needs,No hidden fees,no long-term contracts.Start
                    with a free trial and scale as you grow
                </p>

                <div class="row justify-content-center">
                   
                    

                   
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 text-center shadow-sm border-0">
                            <div class="card-body">
                            
                                <h5 class="card-title fw-bold">Per Request</h5>
                                <p class="text-success mb-2">Scale with AI tools & revisions</p>
                                <p class="card-text text-muted small">
                                    Focus on creativity while AI handles feedback organization and client communication.
                                    Scale your practice without hiring more staff.
                                </p>
                                <ul class="list-unstyled text-start small">
                                    <li>• AI-powered workflow</li>
                                    <li>• Revision management</li>
                                    <li>• Scale without hiring</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                   
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 text-center shadow-sm border-0">
                            <div class="card-body">
                               
                                <h5 class="card-title fw-bold">Montly Subscription</h5>
                                <p class="text-success mb-2">Get drawings & visuals on demand</p>
                                <p class="card-text text-muted small">
                                    Complete architectural packages including technical drawings, 3D visualizations, and
                                    walkthroughs—delivered by expert teams.
                                </p>
                                <ul class="list-unstyled text-start small">
                                    <li>• Technical drawings</li>
                                    <li>• 3D visualizations</li>
                                    <li>• Expert teams</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                  
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 text-center shadow-sm border-0">
                            <div class="card-body">
                                
                                <h5 class="card-title fw-bold">Enterprise</h5>
                                <p class="text-success mb-2">Bundle design with sales</p>
                                <p class="card-text text-muted small">
                                    Offer complete design services to customers. Show how your furniture looks in
                                    professionally designed spaces to increase sales.
                                </p>
                                <ul class="list-unstyled text-start small">
                                    <li>• Increase sales</li>
                                    <li>• Complete solutions</li>
                                    <li>• Customer satisfaction</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


          <!-- Colaboratio Section -->
        <section class="hero1 p-4">
            <div class="container text-center">
                <div class="row align-items-center">
                    <h2 class="fw-bold ">
                        The Future Interior Design collaboration
                    </h2>

                    <p class="mt-3">
                        From quick makeovers to professional-grade renders,Our AI suite puts powerful design tools at
                        your
                        fingertips-fast,accurate, and hassle-free
                    </p>

                </div>
            </div>
        </section>


         <!-- Clients section -->
        <section class="py-5 bg-light">
            <div class="container text-center">
                <h2 class="fw-bold">What our Clients Say</h2>
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
                                <ul class="list-unstyled text-start small">
                                    <li>• Faster project delivery</li>
                                    <li>• No hiring overhead</li>
                                    <li>• Professional quality</li>
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
                                <ul class="list-unstyled text-start small">
                                    <li>• AI-powered workflow</li>
                                    <li>• Revision management</li>
                                    <li>• Scale without hiring</li>
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
                                <ul class="list-unstyled text-start small">
                                    <li>• Technical drawings</li>
                                    <li>• 3D visualizations</li>
                                    <li>• Expert teams</li>
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
                                <ul class="list-unstyled text-start small">
                                    <li>• Increase sales</li>
                                    <li>• Complete solutions</li>
                                    <li>• Customer satisfaction</li>
                                </ul>
                            </div>
                        </div>
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