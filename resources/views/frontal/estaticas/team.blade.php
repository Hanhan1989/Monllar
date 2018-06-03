@extends('layout-frontal')

@section('title', 'Team')

@section('css')
    <link href="{{ asset('css/frontal/portada.css') }}" rel="stylesheet">
@endsection

@section('content')

        <!-- Section: Team v.1 -->
        <section class="team-section text-center my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold my-5">Nuestro equipo</h2>
            <!-- Section description -->
            <p class="grey-text w-responsive mx-auto mb-5">Equipo desarollador  del Proyecto Monllar.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                    <div class="avatar mx-auto">
                        <img style="height: 255px; width: 255px;" src="https://trello-avatars.s3.amazonaws.com/9b1930583aea56a5f8e5c6bdfad0a4d3/170.png" class="rounded-circle z-depth-1" alt="Sample avatar">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Han Han Chen</h5>
                    <p class="text-uppercase blue-text"><strong>Fundador</strong></p>
                    <p class="grey-text">Neque porr quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci  sed quia non numquam modi tempora eius.</p>
                    <ul class="list-unstyled mb-0">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fa fa-facebook blue-text"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic">
                            <i class="fa fa-twitter blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fa fa-instagram blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                    <div class="avatar mx-auto">
                        <img src="https://trello-avatars.s3.amazonaws.com/4c3287ec97369e4d5d148d96e1b52f0f/original.png" class="img-fluid rounded-circle z-depth-1 img-fluid" alt="Sample avatar">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Alex Chavez</h5>
                    <p class="text-uppercase blue-text"><strong>Web developer</strong></p>
                    <p class="grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ipsa accusantium doloremque rem laudantium totam aperiam.</p>
                    <ul class="list-unstyled mb-0">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fa fa-facebook blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fa fa-instagram blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
                    <div class="avatar mx-auto">
                        <img src="https://trello-avatars.s3.amazonaws.com/1bb7974e9d093bcadc0c865bc4a120fb/original.png" class="img-fluid rounded-circle z-depth-1" alt="Sample avatar">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Aldo Sivila</h5>
                    <p class="text-uppercase blue-text"><strong>Web developer</strong></p>
                    <p class="grey-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est fugiat nulla id eu laborum.</p>
                    <ul class="list-unstyled mb-0">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fa fa-facebook blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fa fa-instagram blue-text"> </i>
                        </a>
                        <!-- Dribbble -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fa fa-dribbble blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6">
                    <div class="avatar mx-auto">
                        <img src="https://trello-avatars.s3.amazonaws.com/f0f013d0d882762b89c2c76e0f7ef812/original.png" class="img-fluid rounded-circle z-depth-1" alt="Sample avatar">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Danny Franco</h5>
                    <p class="text-uppercase blue-text"><strong>Backend developer</strong></p>
                    <p class="grey-text">Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi qui consectetur totam officia voluptates perferendis voluptatibus aut.</p>
                    <ul class="list-unstyled mb-0">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fa fa-facebook blue-text"> </i>
                        </a>
                        <!-- Github -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fa fa-github blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Team v.1 -->


@endsection