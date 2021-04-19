@extends('layouts.layoutmain2')

@section('content')

<!-- Page Title
		============================================= -->
		<section id="page-title">
			<div class="section-sobremi-contacto parallax dark mb-0" style="background-image: url('storage/images/brand/claudia-mic-editado.jpg'); padding: 100px 0;" data-bottom-top="background-position:0px 1100px;" data-top-bottom="background-position:0px -1100px;">

				<div class="container clearfix">
					<h1>Servicios</h1>
					<span>Publicidad, doblaje, radio y TV</span>
				</div>

			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap-servicios">

				<div class="row bottommargin-lg align-items-stretch">

					<div class="col-lg-4 dark col-padding overflow-hidden">
						<div>
							<h3 class="text-uppercase" style="font-weight: 600;">Estudio de grabación profesional</h3>
                            <p style="line-height: 1.8;">
                                <ul>
                                    <li><i class="icon-line-chevron-right small"></i> Cabina acústica e insonorizada</li>
                                    <li><i class="icon-line-chevron-right small"></i> Mic: AKG C214 / AUDIO TECHNICA AT2020</li>
                                    <li><i class="icon-line-chevron-right small"></i> Placa: FOCUSRITE SCARLETT 2i4</li>
                                    <li><i class="icon-line-chevron-right small"></i> Pre amp: PRESONUS</li>
                                    <li><i class="icon-line-chevron-right small"></i> Compu: MAC</li>
                                    <li><i class="icon-line-chevron-right small"></i> Softwarwe: PROTOOLS 10</li>
                                </ul>
                            </p>
							<i class="icon-line2-microphone bgicon"></i>
						</div>
					</div>

					<div class="col-lg-4 dark col-padding overflow-hidden">
						<div>
							<h3 class="text-uppercase" style="font-weight: 600;">Traducción y adaptación</h3>
                            <p style="line-height: 1.8;">
                                Puedo hacer tu proyecto en forma integral: <br>
                                Realizo todo tipo de grabaciones de voz, tutoriales, e-learning, IVR, audiolibros, locución publicitaria y doblaje en castellano neutro y rioplatense. <br>
                                También brindo servicio en la realización de traducciones y adaptaciones de textos en inglés, portugués y francés. Edición y entrega en el día, en el formato que requieras.
                            </p>
							<i class="icon-line2-note bgicon"></i>
						</div>
					</div>

					<div class="col-lg-4 dark col-padding overflow-hidden">
						<div>
							<h3 class="text-uppercase" style="font-weight: 600;">Rendimiento de voz</h3>
                            <p style="line-height: 1.8;">
                                Soy una locutora versátil, al ser locutora y actriz de doblaje puedo pasar por todos los registros: voces de niñxs, adolecentes, jóvenes y adultos. Tengo la capacidad de modificar mis intenciones para sonar urbana, maternal, sensual, corporativa o amigable. ¡Caricaturas y más!
                            </p>
							<i class="icon-line2-rocket bgicon"></i>
						</div>
					</div>

				</div>

                <div class="section parallax border-0 dark" style="height: 450px; padding: 120px 0;">

                    <div class="vertical-middle center" style="z-index: 3;">
                        <div class="container clearfix" data-animate="fadeInUp">
                            <a href="/contacto" class="button button-border button-rounded button-white button-light button-large ml-0 mb-0">Contactame</a>
                        </div>
                    </div>

                    <div class="video-wrap" style="z-index: 1;">
                        <video poster="storage/videos/brand/claudia-bergalo-poster.jpg" preload="auto" loop autoplay muted>
                            <source src='storage/videos/brand/Claudia-Bergalo-Locutora-Nacional.mp4' type='video/mp4' />
                            <source src='storage/videos/brand/Claudia-Bergalo-Locutora-Nacional.webm' type='video/webm' />
                        </video>
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
                    </div>

                </div>

			</div>
		</section><!-- #content end -->
        

@endsection