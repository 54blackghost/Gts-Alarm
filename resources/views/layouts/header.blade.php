@extends('master')


<!--debut de la ligne de contact-->
<div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-danger py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope fs-1 text-danger me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <a href="mailto:"><span>gts@gtsalrm.com</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-primary border-inner py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="#" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-white">GTS ALARM</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-danger py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <a href="tel:+"><span>(237) 233 422 884 / 233 433 433</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--debut de la navbar-->
   
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('a-propos')}}" class="nav-item nav-link">A Propos</a>
                <a href="{{route('services')}}" class="nav-item nav-link">Nos Services</a>
                
                
                <a href="{{route('contact-us')}}" class="nav-item nav-link">Contact Us</a>
            </div>
        </div>
    </nav>