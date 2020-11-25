@extends('layouts.layoutmain2')

@section('content')

<!-- Page Title
		============================================= -->
		<section id="page-title">
			<div class="section-sobremi-contacto parallax dark mb-0" style="background-image: url('storage/images/brand/claudia-mic-editado.jpg'); padding: 100px 0;" data-bottom-top="background-position:0px 1100px;" data-top-bottom="background-position:0px -1100px;">

				<div class="container clearfix">
					<h1>Contactame</h1>
					<span>Estemos en contacto</span>
				</div>

			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row align-items-stretch col-mb-50 mb-0">
						<!-- Contact Form
						============================================= -->
						<div class="col-lg-6">

							<div class="fancy-title title-border">
								<h3>Escribime</h3>
							</div>

							<div class="form-widget">

								<div class="form-result"></div>

								<form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4 form-group">
											<label for="template-contactform-name">Nombre <small>*</small></label>
											<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
										</div>

										<div class="col-md-4 form-group">
											<label for="template-contactform-email">E-mail <small>*</small></label>
											<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
										</div>

										<div class="col-md-4 form-group">
											<label for="template-contactform-phone">Teléfono</label>
											<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
										</div>

										<div class="w-100"></div>

										<div class="col-md-8 form-group">
											<label for="template-contactform-subject">Asunto <small>*</small></label>
											<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
										</div>

										<div class="col-md-4 form-group">
											<label for="template-contactform-service">Locuciones</label>
											<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
												<option value="">-- Seleccioná uno --</option>
												<option value="Publicidad">Publicidad</option>
                                                <option value="Neutro">Neutro</option>
                                                <option value="Doblaje">Doblaje</option>
												<option value="Acting">Acting</option>
												<option value="E-learning">E-learning</option>
											</select>
										</div>

										<div class="w-100"></div>

										<div class="col-12 form-group">
											<label for="template-contactform-message">Mensaje <small>*</small></label>
											<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="11" cols="30"></textarea>
										</div>

										<div class="col-12 form-group d-none">
											<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
										</div>

										<div class="col-12 form-group">
											<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Enviar</button>
										</div>
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">

								</form>
							</div>

                        </div><!-- Contact Form End -->
                        <div class="col-lg-1">
                        </div>

						<!-- Instagram
						============================================= -->
						<div class="col-lg-4 min-vh-50">
                        <div class="widget clearfix">
                            <div class="fancy-title title-border">
								<h3>Seguime en Instagram</h3>
							</div>
                            <div id="instagram-photos" class="instagram-photos masonry-thumbs grid-container grid-4 customjs" data-user="claubergalo"></div>
                            </div>
						</div><!-- Instagram End -->
					</div>

					<!-- Contact Info
					============================================= -->
					<div class="row col-mb-50">
						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-map-marker2"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Dónde estoy<span class="subtitle">Buenos Aires, Argentina</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
								<a target="_blank" href="https://api.whatsapp.com/send?phone=541158879994&amp;text=Hola Claudia, necesito una locutora"><i class="icon-whatsapp"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Whatsappeame<span class="subtitle">(+54 9 11) 5887-9994</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-envelope-alt"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Escribime directamente<span class="subtitle">claubergalo@hotmail.com</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-linkedin"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Agregame en linkedin<span class="subtitle">Claudia Bergalo</span></h3>
								</div>
							</div>
						</div>
					</div><!-- Contact Info End -->

				</div>
			</div>
        </section><!-- #content end -->
        

@endsection