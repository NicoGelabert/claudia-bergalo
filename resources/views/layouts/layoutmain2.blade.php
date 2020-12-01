<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css2?family=Delius&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('/css/bootstrap-4.5.0-dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href=" {{ asset('/css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href=" {{ asset('/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href=" {{ asset('/css/swiper.css') }}" type="text/css" />

	<!-- Music Specific Stylesheet -->
	<link rel="stylesheet" href=" {{ asset('/css/music.css') }}" type="text/css" />
    <!-- / -->
    
	<link rel="stylesheet" href=" {{ asset('/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href=" {{ asset('/css/et-line.css') }}" type="text/css" />
	<link rel="stylesheet" href=" {{ asset('/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href=" {{ asset('/css/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href=" {{ asset('/css/fonts.css') }}" type="text/css" />

    <!-- Bootstrap Switch CSS -->
    <link rel="stylesheet" href=" {{ asset('/css/bs-switches.css') }}" type="text/css" />

    <link rel="stylesheet" href=" {{ asset('/css/custom.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Theme color -->
    <link rel="stylesheet" href=" {{ asset('/css/colors.php?color=8A4493') }}" type="text/css" />

    <!-- Audio Player Plugin CSS -->
    <link rel="stylesheet" href=" {{ asset('/css/mediaelement/mediaelementplayer.css') }}">

    <title>{{ config('app.name', 'Claudia Bergalo') }}</title>
</head>

<body class="stretched">

<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section">
        <img src="preloader.gif" alt="">

    </div>

</div>

<div id="content">
    @include('partials.navbar')

    @yield('content')
</div>

@include('partials.footer2')

    
<!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up" style="bottom: 70px;"></div>
    
<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
    <script src="js/plugins.min.js"></script>

<!-- Footer Scripts
	============================================= -->
    <script src="js/functions.js"></script>
    
    <script>

		jQuery(window).on( 'load', function(){
			
			$("#loader-wrapper").hide();

			let $container = $('#posts');

			function blogTimelineEntries() {
				$('.post-timeline').find('.entry:not(.entry-date-section)').each( function(){
					let position = $(this).position();
					if( position.left === 0 ) {
						$(this).removeClass('alt');
					} else {
						$(this).addClass('alt');
					}
					$(this).find('.entry-timeline').fadeIn();
				});

				$('.entry.entry-date-section').next().next().find('.entry-timeline').css({ 'top': '0px' });
			}

			$container.on( 'layoutComplete', function() {
				blogTimelineEntries();
			});

			$(window).resize(function() {
				$container.isotope('layout');
				setTimeout( function(){
					blogTimelineEntries();
				}, 2500 );
			});

		});

	</script>


</body>
</html>