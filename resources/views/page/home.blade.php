@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="bg-dark">
        <div class="container px-5 py-5 text-white">
            <div class="m-5">
                <h1 class="signika-negative font-colors-gradients">MY NAME IS MUHAMMAD UZAIR </h1>
                <p>
                    <h3 class="signika-negative font-color text-capitalize">i am an <label class="font-color2">analyst programmer</label></h3>
                </p>
                <a href="#" 
                class="link-offset-2 link-underline link-underline-opacity-0 text-white icon-link icon-link-hover"
                style="--bs-icon-link-transform: translate3d(0, .125rem, 0);"
                >
                    My Journey
                    <i class="fa-solid fa-arrow-down mx-2 bi" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Reuse the About section -->
    @include('partial.about')

    <!-- Reuse the Contact section -->
    @include('partial.contact')
@endsection