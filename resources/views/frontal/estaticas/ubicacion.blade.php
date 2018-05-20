@extends('layout-frontal')

@section('title', 'Ubicacion')

@section('css')
    <link href="{{ asset('css/frontal/portada.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="col-md-12 mx-auto ">
                <h4><strong>Ubicación</strong></h4>
            </div>
        </div>


        <div class="col-md-8 img-fluid">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.1907766267923!2d2.1651343202946656!3d41.391547869234806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2ed7da630eb%3A0x47e4bb70c43fdb80!2sHotel+Mandarin+Oriental+Barcelona!5e0!3m2!1ses!2ses!4v1526658228777" width="750" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
        <div class="col-md-4">
            <ul>
                <li>Carrer: Passeig de Gràcia</li>
                <li>Numero:38-40</li>
                <li>Codigo postal:08007</li>
                <li>Provincia: Barcelona</li>
            </ul>
        </div>




    </div>


@endsection