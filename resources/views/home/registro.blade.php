@extends('layouts.principal')

@section('content')

    <!-- Banner -->
    <div class="youplay-banner youplay-banner-parallax banner-top small" style="min-height: 200px;padding-top: 113px;">
        <div class="image" style="background-image: url('images/banner-blog-bg.jpg')">
        </div>

        <div class="info">
            <div>
                <div class="container">
                    <h1>Inscripción</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /Banner -->


    <div class="container youplay-content">

        <div class="row">
            <div class="col-md-9 col-md-push-3" style="left: 0">
                <!-- Contact Form -->
                <div class="youplay-form p-0">
                    <h2 class="mt-0">Llena el siguiente formulario</h2>

                    <form action="http://html.nkdev.info/youplay/dark/php/contact.php" method="POST" role="form" class="youplay-form-ajax" data-toggle="validator">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="youplay-input form-group">
                                    <input type="text" name="name" placeholder="Nombre" required>
                                </div>
                                <div class="youplay-input form-group">
                                    <input type="text" name="rut" placeholder="Rut" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="youplay-input form-group">
                                    <input type="text" name="apellido" placeholder="Apellido" required>
                                </div>
                                <div class="youplay-input form-group">
                                    <input type="email" name="email" placeholder="Inacap Mail" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="youplay-input form-group">
                                    <input type="text" name="carrera" placeholder="Carrera" required>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-default" id="btnRegistro">Inscribirme</button>
                    </form>
                </div>
                <!-- /Contact Form -->
            </div>

        </div>

    </div>

@endsection