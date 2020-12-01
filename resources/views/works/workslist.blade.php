@extends('layouts.layoutmain')

@section('content')



	<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element min-vh-100 dark include-header">
			<div class="slider-inner">

				<div class="container">
					<div class="slider-caption justify-content-end">
						<div>
							<h2 class="font-primary nott">Publis 2020</h2>
							<a href="https://www.youtube.com/watch?v=bvF3XBO7Pro" class="button button-rounded font-weight-normal ls1 mt-3 clearfix button-video" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="iframe" data-disable-under="0"><i class="icon-play"></i>Escuchar reel</a>
						</div>
					</div>
				</div>

				<div class="video-wrap" style="z-index: 1;">
					<video poster="storage/videos/brand/claudia-bergalo-poster.jpg" preload="auto" loop autoplay muted>
						<source src='storage/videos/brand/Claudia-Bergalo-Locutora-Nacional.mp4' type='video/mp4' />
						<source src='storage/videos/brand/Claudia-Bergalo-Locutora-Nacional.webm' type='video/webm' />
					</video>
					<div class="video-overlay" style="background-color: rgba(0,0,0,0.45);"></div>
				</div>

			</div>
		</section>

		<!-- Contenido completo
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0" style="overflow: visible;">

				<!-- Inicio imperdibles
				============================================= -->

				<div class="container topmargin-lg clearfix" style="z-index: 7;">

					<div class="heading-block bottommargin-sm topmargin border-0 dark">
						<h3 class="lazy lazy-loaded fancy-title title-center title-border bounce animated" data-animate="bounce">Los imperdibles</h3>
						<span style="text-align: center">Click obligado</span>
					</div>


					<div id="top-charts" class="portfolio grid-container row dark gutter-20 desc-sm" data-layout="fitRows">
					@foreach($trabajos as $trabajo)
						<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="0">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{$trabajo->image}}" alt="{{$trabajo->name}}">
									</a>
									<div class="bg-overlay">
										@if ($trabajo->type == 'audio')
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="file:///C:/Claudia%20Bergalo/Package-HTML/HTML/demo-music-custom.html#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color track-list" data-track="{{$trabajo->url}}" data-poster="{{$trabajo->image}}" data-title="{{$trabajo->name}}" data-singer="{{$trabajo->category}}" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-play"></i></a>
										</div>
										@else
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<a href="{{$trabajo->url}}" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color clearfix button-video" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="iframe" data-disable-under="0"><i class="icon-line-play"></i></a>
										</div>
										@endif
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>{{$trabajo->name}}</h3>
									<span>{{$trabajo->category}}</span>
								</div>
							</div>
						</article>
					@endforeach
					</div>
				</div>

				<!-- Fin imperdibles
				============================================= -->

				<!-- Inicio Demos
				============================================= -->

				<div class="content-wrap py-0">

					<div class="section-parallax parallax min-vh-50 dark border-0 d-flex" style="background-image: url('storage/images/brand/demos-background.jpg');"  >
						<div class="vertical-middle">
							<div class="container">

								<div class="row col-mb-50">
								@foreach ($trabajos4 as $trabajo4)
									<div class="col-sm-6 col-lg-4">
										<div class="feature-box fbox-center fbox-border fbox-dark fbox-effect border-0 fbox-lg">
											<div class="fbox-icon">
											<a href="file:///C:/Claudia%20Bergalo/Package-HTML/HTML/demo-music-custom.html#" class="track-list-demo" data-track="{{$trabajo4->url}}" data-poster="{{$trabajo4->image}}" data-title="{{$trabajo4->name}}" data-singer="{{$trabajo4->category}}"><i class="icon-microphone1"></i></a>
											</div>
											<div class="fbox-content">
												<h3>{{$trabajo4->name}}</h3>
											</div>
										</div>
									</div>
								@endforeach
								</div>

							</div>
						</div>
					</div>

				</div>

				<!-- Fin Demos
				============================================= -->
				
				<!-- Inicio servicios
				============================================= -->

				<div class="container topmargin-lg clearfix" style="z-index: 7;">

					<div class="heading-block bottommargin-sm topmargin border-0 dark">
						<h3 class="lazy lazy-loaded fancy-title title-center title-border bounce animated" data-animate="bounce">Servicios</h3>
						<!-- <span style="text-align: center">Click obligado</span> -->
					</div>
					
					<div class="tabs side-tabs mb-0 clearfix" id="tab-6">

								<ul class="tab-nav tab-nav2 clearfix">
									<li><a href="#tabs-21"><i class="icon-line2-microphone"></i> Estudio de grabación profesional</a></li>
									<li><a href="#tabs-22"><i class="icon-line2-note"></i> Traducción y adaptación</a></li>
									<li><a href="#tabs-23"><i class="icon-line2-rocket"></i> Rendimiento de voz</a></li>
								</ul>

								<div class="tab-container">

									<div class="tab-content clearfix" id="tabs-21">
										<ul>
											<li><i class="icon-line-chevron-right small"></i> Cabina acústica e insonorizada</li>
											<li><i class="icon-line-chevron-right small"></i> Mic: AKG C214 / AUDIO TECHNICA AT2020</li>
											<li><i class="icon-line-chevron-right small"></i> Placa: FOCUSRITE SCARLETT 2i4</li>
											<li><i class="icon-line-chevron-right small"></i> Pre amp: PRESONUS</li>
											<li><i class="icon-line-chevron-right small"></i> Compu: MAC</li>
											<li><i class="icon-line-chevron-right small"></i> Softwarwe: PROTOOLS 10</li>
										</ul>
									</div>
									<div class="tab-content clearfix" id="tabs-22">
										Puedo hacer tu proyecto en forma integral: <br>
										Realizo todo tipo de grabaciones de voz, tutoriales, e-learning, IVR, audiolibros, locución publicitaria y doblaje en castellano neutro y rioplatense. <br>
										También brindo servicio en la realización de traducciones y adaptaciones de textos en inglés, portugués y francés. Edición y entrega en el día, en el formato que requieras.
									</div>
									<div class="tab-content clearfix" id="tabs-23">
										Soy una locutora versátil, al ser locutora y actriz de doblaje puedo pasar por todos los registros: voces de niñxs, adolecentes, jóvenes y adultos. Tengo la capacidad de modificar mis intenciones para sonar urbana, maternal, sensual, corporativa o amigable. ¡Caricaturas y más!
									</div>

								</div>

							</div>

					<div class="row topmargin-lg dark clearfix">
					</div>

				</div>

				<!-- Fin servicios
				============================================= -->

				<!-- Inicio últimos y mezcladito
				============================================= -->

				<div class="row clearfix section-audios">

					<!-- Inicio Los últimos
					============================================= -->
					<div class="col-lg-6">

						<div class="heading-block bottommargin-sm topmargin border-0 dark">
							<h3>Los últimos</h3>
							<span>Mis trabajos más recientes.</span>
						</div>

						
						<div class="songs-lists-wrap">
							
							@php $i=0; @endphp
							@foreach ($trabajos2 as $trabajo2)
							<div class="songs-list">
								<div class="songs-number">0{{++$i}}</div>
								<div class="songs-image track-image">
									@if ($trabajo2->type == 'video')
									<a href="{{$trabajo2->url}}" class="text-ts text-light h-text-color clearfix" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="iframe" data-disable-under="0">
									<img src="{{$trabajo2->image}}" alt="{{$trabajo2->name}}"><span><i class="icon-play"></i></span></a>
									@else
									<a href="file:///C:/Claudia%20Bergalo/Package-HTML/HTML/demo-music-custom.html#" class="track-list" data-track="{{$trabajo2->url}}" data-poster="{{$trabajo2->image}}" data-title="{{$trabajo2->name}}" data-singer="{{$trabajo2->category}}">
									<img src="{{$trabajo2->image}}" alt="{{$trabajo2->name}}"><span><i class="icon-play"></i></span></a>
									@endif
								</div>
								<div class="songs-name track-name">{{$trabajo2->name}}<br><span>{{$trabajo2->category}}</span></div>
								<div class="songs-time">{{$trabajo2->length}}</div>
							</div>
							<div class="divider"><i class="icon-line-activity"></i></div>
							@endforeach
						</div>
					</div>

					<!-- Fin Los últimos
					============================================= -->

					<!-- Inicio Mezcladito
					============================================= -->

					<div class="col-lg-6">

						<div class="heading-block bottommargin-sm topmargin border-0 dark">
							<h3>Mezcladito</h3>
							<span>Un poco de todo.</span>
						</div>

						<div class="songs-lists-wrap">
							@php $i=0; @endphp
							@foreach ($trabajos3 as $trabajo3)
							<div class="songs-list">
								<div class="songs-number">0{{++$i}}</div>
								<div class="songs-image track-image">
									@if ($trabajo3->type == 'video')
									<a href="{{$trabajo3->url}}" class="text-ts text-light h-text-color clearfix" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="iframe" data-disable-under="0">
									<img src="{{$trabajo3->image}}" alt="{{$trabajo3->name}}"><span><i class="icon-play"></i></span></a>
									@else
									<a href="file:///C:/Claudia%20Bergalo/Package-HTML/HTML/demo-music-custom.html#" class="track-list" data-track="{{$trabajo3->url}}" data-poster="{{$trabajo3->image}}" data-title="{{$trabajo3->name}}" data-singer="{{$trabajo3->category}}">
									<img src="{{$trabajo3->image}}" alt="{{$trabajo3->name}}"><span><i class="icon-play"></i></span></a>
									@endif
								</div>
								<div class="songs-name track-name">{{$trabajo3->name}}<br><span>{{$trabajo3->category}}</span></div>
								<div class="songs-time">{{$trabajo3->length}}</div>
							</div>
							<div class="divider"><i class="icon-line-activity"></i></div>
							@endforeach								
						</div>
					</div>

					<!-- Fin Mezcladito
					============================================= -->

				</div>

				<!-- Fin últimos y mezcladito
				============================================= -->



				

				<div class="container topmargin-lg clearfix" style="z-index: 7;">

					<!-- Para ver y escuchar
					============================================= -->

					<div class="heading-block bottommargin-sm topmargin border-0 dark">
						<h3 class="lazy lazy-loaded fancy-title title-center title-border bounce animated">Para ver y escuchar</h3>
						<span style="text-align: center">Pasen y vean</span>
					</div>
					<div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
						<div class="row gutter-20 align-items-stretch">

							<div class="col-md-6 min-vh-40" data-animate="fadeIn" data-delay="0">
								<div class="grid-inner h-100" style="background-image: url('/storage/images/para-ver-y-escuchar/fiestas-001.jpg');">
									<div class="bg-overlay2">
										<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
											<div>
												<div class="portfolio-desc seccionvideo">
													<span class="font-primary text-uppercase">FA!</span>
													<h3>Fiesta Provincial del Inmigrante</h3>
												</div>
												<div>
												<a href="https://www.youtube.com/watch?v=9pXgnGGwcJQ" class="button button-rounded font-weight-normal ls1 mt-3 clearfix button-video" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="iframe" data-disable-under="0"><i class="icon-play"></i>Ver</a>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6 px-0" data-animate="fadeIn" data-delay="50">
								<div class="row mx-0 gutter-20">

									<div class="col-6">
										<div class="grid-inner">
											<img src="/storage/images/para-ver-y-escuchar/trolls.jpg" alt="Image">
											<div class="bg-overlay2">
												<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
													<div>
														<div class="portfolio-desc seccionvideo">
															<span class="font-primary text-uppercase">Doblaje</span>
															<h3>Bridget - Trolls</h3>
														</div>
														<div>
															<a href="https://www.youtube.com/watch?v=H5PuyEmVE_o" class="button button-mini button-rounded font-weight-normal ls1 mt-3 clearfix button-video" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="iframe" data-disable-under="0"><i class="icon-play"></i>Ver</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-6">
										<div class="grid-inner">
											<img src="/storage/images/para-ver-y-escuchar/fiestas-002.jpg" alt="Image">
											<div class="bg-overlay2">
												<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
													<div>
														<div class="portfolio-desc seccionvideo">
															<span class="font-primary text-uppercase">FA!</span>
															<h3>Fiesta Patronal Virgen de Fátima</h3>
														</div>
														<div>
															<a href="https://www.youtube.com/watch?v=xO-AYa4rEMk" class="button button-mini button-rounded font-weight-normal ls1 mt-3 clearfix button-video" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="iframe" data-disable-under="0"><i class="icon-play"></i>Ver</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-12" data-animate="fadeIn" data-delay="150">
										<div class="grid-inner">
											<img src="/storage/images/para-ver-y-escuchar/doblaje-demo.jpg" alt="Black Mirror">
											<div class="bg-overlay2">
												<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
													<div>
														<div class="portfolio-desc seccionvideo">
															<span class="font-primary text-uppercase">Demo</span>
															<h3>Doblaje</h3>
														</div>
														<div>
															<a href="https://www.youtube.com/watch?v=VUCEpK19Ox4&t" class="button button-rounded font-weight-normal ls1 mt-3 clearfix button-video" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="iframe" data-disable-under="0"><i class="icon-play"></i>Ver</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>

					<div class="row topmargin-lg dark clearfix">
					</div>

				</div>

				<!-- Inicio audiolibros
				============================================= -->

				<div class="container topmargin-lg clearfix" style="z-index: 7;">

					<div class="heading-block bottommargin-sm topmargin border-0 dark">
						<h3 class="lazy lazy-loaded fancy-title title-center title-border bounce animated" data-animate="bounce">Audiolibros</h3>
						<!-- <span style="text-align: center">Click obligado</span> -->
					</div>


					<div id="top-charts" class="portfolio grid-container row dark gutter-20 desc-sm" data-layout="fitRows">
					@foreach($trabajos6 as $trabajo6)
						<article class="portfolio-item col-6 col-md-1-5 col-lg-2" data-animate="fadeIn" data-delay="0">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{$trabajo6->image}}" alt="{{$trabajo6->name}}">
									</a>
									<div class="bg-overlay">
										
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="file:///C:/Claudia%20Bergalo/Package-HTML/HTML/demo-music-custom.html#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color track-list" data-track="{{$trabajo6->url}}" data-poster="{{$trabajo6->image}}" data-title="{{$trabajo6->name}}" data-singer="{{$trabajo6->category}}" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-play"></i></a>
										</div>
										
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>{{$trabajo6->name}}</h3>
									<span>{{$trabajo6->category}} <br> {{$trabajo6->length}}</span>
								</div>
							</div>
						</article>
					@endforeach
					</div>

					<div class="row topmargin-lg dark clearfix">
					</div>

				</div>

				<!-- Fin audiolibros
				============================================= -->

			</div>
		</section>
		<!-- Fin Contenido completo
		============================================= -->
@endsection
