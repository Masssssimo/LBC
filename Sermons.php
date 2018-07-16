<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sermons</title>

  <link rel="stylesheet" type="text/css" href="css/jplayer-theme.css">
  <link href="css/animate.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- font awesome for icons -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- flex slider css -->
  <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
  <!-- owl slider css -->
  <link href="owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
  <link href="owl-carousel/assets/owl.theme.default.css" rel="stylesheet" type="text/css" media="screen">
  <!-- jQuery UI -->
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" media="screen">
  <!--lightbox-->
  <link href="lightbox2/dist/css/lightbox.css" rel="stylesheet">
  <!--Animate CSS-->
  <link href="css/animate.css" rel="stylesheet">
  <!-- jplayer theme -->
  <link rel="stylesheet" type="text/css" href="css/jplayer-theme.css">
  <!-- custom css-->
  <link href="css/LBC.css" rel="stylesheet" type="text/css" media="screen">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="fullcalendar/fullcalendar.css">

</head>


<body data-spy="scroll">
  <!-- Static navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="#">LBC</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav scroll-to navbar-right">
          <li><a href="home.php">Home</a>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>



  <section id="Sermon">
    <div class="container">
      <div class="col-sm-8 col-sm-offset-2 text-center wow fadeIn">
        <div class="sermon-Title text-center">
          <h3>Sermons</h3>
        </div>
        <div class="sermon-info">
          <p>
            To <i><b>download</b></i> any of the Sermons:<br>1) Right-click on either the <i>"mp3"</i> or the <i>"oga"</i><br>(Make sure it is inline with the Sermon which you intend to download)<br>2) Then click "Save link as..."<br>3) Finally name the file and save it!
          </p>
        </div>
      </div><!--section title-->
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

          <div id="jquery_jplayer_playlist" class="jp-jplayer"></div>
          <div id="jp_container_playlist" class="jp-audio" role="application" aria-label="media player">
            <div class="jp-type-playlist">
              <div class="jp-gui jp-interface">
                <div class="jp-controls">
                  <a class="jp-previous"><i class="fa fa-backward"></i></a>
                  <a class="jp-play"><i class="fa fa-play"></i></a>
                  <a class="jp-pause"><i class="fa fa-pause"></i></a>
                  <a class="jp-stop"><i class="fa fa-stop"></i></a>
                  <a class="jp-next"><i class="fa fa-forward"></i></a>
                </div>
                <div class="jp-progress">
                  <div class="jp-seek-bar">
                    <div class="jp-play-bar"></div>
                  </div>
                </div>
                <div class="jp-volume-controls">
                  <a class="jp-mute"><i class="fa fa-volume-off"></i></a>
                  <a class="jp-volume-max"><i class="fa fa-volume-up"></i></a>
                  <div class="jp-volume-bar">
                    <div class="jp-volume-bar-value"></div>
                  </div>
                </div>
                <div class="jp-time-holder">
                  <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                  <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                </div>
              </div>

              <div class="jp-playlist">
                <ul>
                  <li></li>
                </ul>
              </div>

              <div class="jp-no-solution">
                <span>Update Required</span>
                To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section><!--about us-->



  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
  <!-- Bootstrap js-->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!--easing plugin for smooth scroll-->
  <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
  <script src="js/jquery.backstretch.min.js" type="text/javascript"></script>
  <!--flex slider plugin-->
  <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
  <!--owl carousel slider js-->
  <script src="owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
  <!-- jQuery UI -->
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <!--pace plugin-->
  <script src="js/pace.min.js" type="text/javascript"></script>
  <!--on scroll animation-->
  <script src="js/wow.min.js" type="text/javascript"></script>
  <!--popup js-->
  <script src="lightbox2/dist/js/lightbox.min.js" type="text/javascript"></script>
  <!-- calendar -->
  <script src="fullcalendar/lib/moment.min.js"></script>
  <script src="fullcalendar/fullcalendar.js"></script>
  <script type="text/javascript" src="fullcalendar/gcal.js"></script>
  <!-- wow -->
  <script src="js/wow.min.js"></script>
  <script>
  new WOW().init();
  </script>
  <!--restaurant custom js-->
  <script src="js/restaurant-custom.js" type="text/javascript"></script>

  <!-- jPlayer JS -->
  <script type="text/javascript">
  $(document).ready(function(){

    new jPlayerPlaylist({
      jPlayer: "#jquery_jplayer_playlist",
      cssSelectorAncestor: "#jp_container_playlist"
    }, [
      {
        title:"Bubble",
        free: Boolean,
        mp3:"http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3",
        oga:"http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
      },
    ], {
      volume: 1.0,
      playlistOptions: {
        autoPlay: false,
      },
      swfPath: "js",
      supplied: "oga, mp3",
      wmode: "window",
      useStateClassSkin: true,
      autoBlur: false,
      smoothPlayBar: true,
      keyEnabled: true
    });
  });
  </script>


</body>

</html>
