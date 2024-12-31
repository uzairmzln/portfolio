@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="vh-100 d-flex align-items-center bg-dark text-white" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('your-background-image.jpg') center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-1 fw-bold signika-negative font-colors-gradients mb-4">MY NAME IS MUHAMMAD UZAIR</h1>
                    <h3 class="h2 mb-4 signika-negative">
                        I am an <span class="font-color2">Analyst Programmer</span>
                    </h3>
                    <a href="#journey" class="btn btn-outline-light btn-lg mt-3">
                        My Journey
                        <i class="fa-solid fa-arrow-down ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Reuse the About section -->
    @include('partial.about')

    <!-- Reuse the Journey section -->
    @include('partial.journey')

    <!-- Reuse the Contact section -->
    @include('partial.contact')
    
@endsection