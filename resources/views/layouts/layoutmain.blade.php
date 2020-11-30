<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css2?family=Delius&family=Quicksand:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('/css/bootstrap-4.5.0-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('/css/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href=" {{ asset('/css/dark.css') }}" type="text/css"/>
    <link rel="stylesheet" href=" {{ asset('/css/swiper.css') }}" type="text/css"/>

    <!-- Music Specific Stylesheet -->
    <link rel="stylesheet" href=" {{ asset('/css/music.css') }}" type="text/css"/>

    <link rel="stylesheet" href=" {{ asset('/css/font-icons.css') }}" type="text/css"/>
    <link rel="stylesheet" href=" {{ asset('/css/et-line.css') }}" type="text/css"/>
    <link rel="stylesheet" href=" {{ asset('/css/animate.css') }}" type="text/css"/>
    <link rel="stylesheet" href=" {{ asset('/css/magnific-popup.css') }}" type="text/css"/>

    <link rel="stylesheet" href=" {{ asset('/css/fonts.css') }}" type="text/css"/>

    <!-- Bootstrap Switch CSS -->
    <link rel="stylesheet" href=" {{ asset('/css/bs-switches.css') }}" type="text/css"/>

    <link rel="stylesheet" href=" {{ asset('/css/custom.css') }}" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Theme color -->
    <link rel="stylesheet" href=" {{ asset('/css/colors.php?color=ed215e') }}" type="text/css"/>

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


@include('partials.footer')
</body>
<!-- Audio Player
	============================================= -->
<audio id="audio-player" preload="none" class="mejs__player" controls
       data-mejsoptions='{"defaultAudioHeight": "50", "alwaysShowControls": "true"}' style="max-width:100%;">
    <source src="/storage/src/audios/nashe-si.mp3" type="audio/mp3">
</audio>

<!-- Default Track - onLoad
	============================================= -->
<div id="track-onload" data-track="/storage/audios/reel/reel.mp3" data-poster="/storage/images/reel/reel.jpg"
     data-title="Reel" data-singer="Claudia Bergalo"></div>

<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
	============================================= -->
<script src="js/jquery.js"></script>
<script src="js/plugins.min.js"></script>

<!-- Audio player Plugin
	============================================= -->
<script src="js/mediaelement/mediaelement-and-player.js"></script>

<!-- Footer Scripts
	============================================= -->
<script src="js/functions.js"></script>

<script>
    // Custom Tab jQuery
    // jQuery( '.tabs' ).on( 'tabsactivate', function( event, ui ) {
    // 	var gridContainerAvailable = jQuery( ui.newPanel ).find('.grid-container');

    // 	if( gridContainerAvailable.length > 0 ) {
    // 		gridContainerAvailable.each( function(){
    // 			var portfolioGrid = jQuery(this);

    // 			if( !portfolioGrid.hasClass('tabs-enabled-grid-container') ) {
    // 				portfolioGrid.isotope('layout');
    // 				jQuery(window).trigger('resize');
    // 				portfolioGrid.addClass('tabs-enabled-grid-container');
    // 			}
    // 		});
    // 	}
    // });

    // Music playing Scripts
    var trackPlaying = '',
        audioPlayer = document.getElementById('audio-player');

    audioPlayer.addEventListener("ended", function () {
        jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
    });

    audioPlayer.addEventListener("pause", function () {
        jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
    });

    $(".button-video").on("click", function () {
        var audio = $("#audio-player");
        playerId = audio.closest('.mejs__container').attr('id');
        playerObject = mejs.players[playerId];
        playerObject.pause();
    })

    function changeAudio(sourceUrl, posterUrl, trackTitle, trackSinger, playAudio = true) {

        var audio = $("#audio-player"),
            clickEl = jQuery('[data-track="' + sourceUrl + '"]'),
            playerId = audio.closest('.mejs__container').attr('id'),
            playerObject = mejs.players[playerId];

        jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');

        if (sourceUrl == trackPlaying) {

            if (playerObject.node.paused) {
                playerObject.play();
                clickEl.find('i').removeClass('icon-play').addClass('icon-pause');
            } else {
                playerObject.pause();
                clickEl.find('i').removeClass('icon-pause').addClass('icon-play');
            }
            return true;
        }

        trackPlaying = sourceUrl;

        audio.attr('poster', posterUrl);
        audio.attr('title', trackTitle);

        jQuery('.mejs__layers').html('').html('<div class="mejs-track-artwork"><img src="' + posterUrl + '" alt="Track Poster" /></div><div class="mejs-track-details"><h3>' + trackTitle + '<br><span>' + trackSinger + '</span></h3></div>');

        if (sourceUrl != '') {
            playerObject.setSrc(sourceUrl);
        }
        playerObject.pause();
        playerObject.load();

        if (playAudio == true) {
            playerObject.play();
            jQuery(clickEl).find('i').removeClass('icon-play').addClass('icon-pause');
        }

    }

    jQuery('.track-list').on('click', function () {

        var audioTrack = jQuery(this).attr('data-track'), // Track url
            posterUrl = jQuery(this).attr('data-poster'), // Track Poster Image
            trackTitle = jQuery(this).attr('data-title'); // Track Title
        trackSinger = jQuery(this).attr('data-singer'); // Track Singer Name

        $(".mejs-track-artwork img").attr("src", "/preloader_media.gif");
        $(".mejs__playpause-button").hide();
        changeAudio(audioTrack, posterUrl, trackTitle, trackSinger);
        return false;
    });

    jQuery(window).on('load', function () {

        var trackOnload = jQuery('#track-onload');

        if (trackOnload.length > 0) {
            var audioTrack = trackOnload.attr('data-track'), // Track url
                posterUrl = trackOnload.attr('data-poster'), // Track Poster Image
                trackTitle = trackOnload.attr('data-title'); // Track Title
            trackSinger = trackOnload.attr('data-singer'); // Track Singer Name

            setTimeout(function () {
                changeAudio(audioTrack, posterUrl, trackTitle, trackSinger, false);
            }, 500);
        }
    });

</script>


<script>

    // Music playing Scripts demo
    var trackPlaying = '',
        audioPlayer = document.getElementById('audio-player');

    audioPlayer.addEventListener("ended", function () {
        jQuery('.track-list-demo').find('i').removeClass('icon-pause').addClass('icon-microphone1');
    });

    audioPlayer.addEventListener("pause", function () {
        jQuery('.track-list-demo').find('i').removeClass('icon-pause').addClass('icon-microphone1');
    });

    audioPlayer.addEventListener("play", function () {
        $(".mejs__playpause-button").show();
    })

    function changeAudio(sourceUrl, posterUrl, trackTitle, trackSinger, playAudio = true) {
        var audio = $("#audio-player"),
            clickEl = jQuery('[data-track="' + sourceUrl + '"]'),
            playerId = audio.closest('.mejs__container').attr('id'),
            playerObject = mejs.players[playerId];

        jQuery('.track-list-demo').find('i').removeClass('icon-pause').addClass('icon-microphone1');

        if (sourceUrl == trackPlaying) {
            if (playerObject.node.paused) {
                playerObject.play();
                clickEl.find('i').removeClass('icon-microphone1').addClass('icon-pause');
            } else {
                playerObject.pause();
                clickEl.find('i').removeClass('icon-pause').addClass('icon-microphone1');
            }
            return true;

        }

        trackPlaying = sourceUrl;

        audio.attr('poster', posterUrl);
        audio.attr('title', trackTitle);

        jQuery('.mejs__layers').html('').html('<div class="mejs-track-artwork"><img src="' + posterUrl + '" alt="Track Poster" /></div><div class="mejs-track-details"><h3>' + trackTitle + '<br><span>' + trackSinger + '</span></h3></div>');

        if (sourceUrl != '') {
            playerObject.setSrc(sourceUrl);
        }
        playerObject.pause();
        playerObject.load();

        if (playAudio == true) {
            playerObject.play();
            jQuery(clickEl).find('i').removeClass('icon-microphone1').addClass('icon-pause');
        }
    }

    jQuery('.track-list-demo').on('click', function () {
        var audioTrack = jQuery(this).attr('data-track'), // Track url
            posterUrl = jQuery(this).attr('data-poster'), // Track Poster Image
            trackTitle = jQuery(this).attr('data-title'); // Track Title
        trackSinger = jQuery(this).attr('data-singer'); // Track Singer Name

        $(".mejs-track-artwork img").attr("src", "/preloader_media.gif");
        $(".mejs__playpause-button").hide();

        changeAudio(audioTrack, posterUrl, trackTitle, trackSinger);

        return false;
    });

    jQuery(window).on('load', function () {
        $("#loader-wrapper").hide();
        var trackOnload = jQuery('#track-onload');

        if (trackOnload.length > 0) {
            var audioTrack = trackOnload.attr('data-track'), // Track url
                posterUrl = trackOnload.attr('data-poster'), // Track Poster Image
                trackTitle = trackOnload.attr('data-title'); // Track Title
            trackSinger = trackOnload.attr('data-singer'); // Track Singer Name

            setTimeout(function () {
                changeAudio(audioTrack, posterUrl, trackTitle, trackSinger, false);
            }, 500);
        }
    });

</script>

<script>

    jQuery(window).on('load', function () {
        document.getElementById("spinner-back").classList.remove("show");
        document.getElementById("spinner-front").classList.remove("show");

        let $container = $('#posts');

        function blogTimelineEntries() {
            $('.post-timeline').find('.entry:not(.entry-date-section)').each(function () {
                let position = $(this).position();
                if (position.left === 0) {
                    $(this).removeClass('alt');
                } else {
                    $(this).addClass('alt');
                }
                $(this).find('.entry-timeline').fadeIn();
            });

            $('.entry.entry-date-section').next().next().find('.entry-timeline').css({'top': '70px'});
        }

        $container.on('layoutComplete', function () {
            blogTimelineEntries();
        });

        $(window).resize(function () {
            $container.isotope('layout');
            setTimeout(function () {
                blogTimelineEntries();
            }, 2500);
        });


    });
</script>
</html>
