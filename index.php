<?php include('M-A-P/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>LBC</title>
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
        <!-- custom css-->
        <link href="css/LBC.css" rel="stylesheet" type="text/css" media="screen">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
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
                        <li><a href="#home">Home</a></li>
                        <li><a href="#alpha">Alpha</a></li>
                        <li><a href="#newLBC">New To LBC</a></li>
                        <li><a href="#events">Events</a></li>
                        <li><a href="#events">Members</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>


        <section id="home">
            <div class="home-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                            <h3>Loughton Baptist Church</h3>
                            <div class="flexslider intro-slider">
                                <ul class="slides">
                                  <li>
                                    Hope
                                  </li>

                                  <li>
                                    Community
                                  </li>

                                  <li>
                                    Salvation
                                  </li>

                                </ul>
                            </div><!--flex slider-->

                        </div>
                    </div>
                </div>
            </div>
        </section><!--home intro section-->


        <section id="alpha" class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 center-title text-center">
                        <h3>Alpha</h3>
                        <span class="center-line"></span>
                        <h4>Everyone Has Questions?</h4>
                        <p>
                        Exploring is good.<br>
                        We're built for it.<br>
                        Explore more about life, faith and meaning with Alpha.
                        </p>
                    </div>
                </div><!--section title-->
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="img-service-box">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                            <img src="img/resto/alpha-logo.png" width="200" height="200" class="img-circle " alt="">
=======
                            <img src="img/resto/tryAlpha.jpeg" width="200" height="200" class="img-circle " alt="">
>>>>>>> parent of cf404dd... Small Changes
=======
                            <img src="img/resto/tryAlpha.jpeg" width="200" height="200" class="img-circle " alt="">
>>>>>>> parent of cf404dd... Small Changes
=======
                            <img src="img/resto/tryAlpha.jpeg" width="200" height="200" class="img-circle " alt="">
>>>>>>> parent of cf404dd... Small Changes
                            <span class="center-line"></span>
                            <h3>What is Alpha?</h3>
                            <p>
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#whatIsAlpha">View Details <i class="fa fa-angle-right"></i></button>
                            </p>
                        </div>
                    <!-- Modal -->
                    <div class="modal fade" id="whatIsAlpha" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">What is Alpha?</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                              Alpha is a series of sessions exploring the Christian faith, typically run over eleven weeks. Each talk looks at a different question around faith and is designed to create conversation.<br><br>Alpha is run all around the globe, and everyone is welcome.<br><br>No two Alphas look the same, but generally they have three key things in common:<br>Food, a talk and good conversation.
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>

                    </div><!--img-service box-->
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="img-service-box">
                            <img src="img/resto/talks.png" width="200" height="200" class="img-circle " alt="">
                            <span class="center-line"></span>
                            <h3>Talks</h3>
                            <p>
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#talks">View Details <i class="fa fa-angle-right"></i></button>
                            </p>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="talks" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Talks</h4>
                              </div>
                              <div class="modal-body">
                                <p>
                                  The talks are designed to engage and inspire conversation.<br><br>Usually around thirty minutes long and delivered over about eleven weeks, they can be given as a live talk or played as a video.<br><br>They explore the big issues around faith and unpack the basics of Christianity, addressing questions such as:<br><b><i>Who is Jesus?<br>How can we have faith?<br>Why and how do I pray?<br>How does God guide us?</i></b>
                                </p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>

                    </div><!--img-service box-->
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="img-service-box">
                            <img src="img/resto/food.png" width="200" height="200" class="img-circle " alt="">
                            <span class="center-line"></span>
                            <h3>Food</h3>
                            <p>
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#food">View Details <i class="fa fa-angle-right"></i></button>
                            </p>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="food" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Food</h4>
                              </div>
                              <div class="modal-body">
                                <p>
                                  Whether it's a group of friends gathered around a kitchen table, or a quick catch up over coffee and cake, food has a way of bringing people together.<br><br>It's no different at Alpha.<br><br>Most sessions start with food, because it's a great way to build community and get to know each other.
                                </p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>

                    </div><!--img-service box-->
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="img-service-box">
                            <img src="img/resto/discussion.png" width="200" height="200" class="img-circle " alt="">
                            <span class="center-line"></span>
                            <h3>Discussions</h3>
                            <p>
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#Dis">View Details <i class="fa fa-angle-right"></i></button>
                            </p>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="Dis" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Discussions</h4>
                              </div>
                              <div class="modal-body">
                                <p>
                                  Probably the most important part of any Alpha:<br><br>The chance to share thoughts and ideas on the topic, and simply discuss it in a small group. <br><br>There's no obligation to say anything and there's nothing you can't say (seriously). <br><br>It's an opportunity to hear from others and contribute your own perspective in an honest, friendly and open environment.
                                </p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>

                    </div><!--img-service box-->
                </div>
            </div>
        </section><!--about us-->


        <section class="opening-hours">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 center-title text-center">
                        <h3>Every Sunday</h3>
                        <span class="center-line"></span>
                    </div>
                </div><!--section title-->
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="opening-hours-box">
                            <h1>Armour of God</h1>
                            <h3>09:30 AM & 11:15 AM</h3>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="opening-hours-box">
                            <h1>Study of Acts</h1>
                            <h3>06:00 PM</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--section opening hours-->

                <section class="section-dishes" id="newLBC">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 center-title text-center">
                                <h3>New to LBC?</h3>
                                <span class="center-line"></span>
                                <h3>Here's what to expect!</h3>
                            </div>
                        </div>
                        <div class="panel-group col-sm-4" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" href="#collapse1">
                                <a>Is church only for good people?</a>
                              </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                              <div class="panel-body text-center"><p>No, the church is for everyone! Regardless of your background, culture, age and history, you are welcomed and accepted here.</p></div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" href="#collapse2">
                                <a>What happens at services?</a>
                              </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                              <div class="panel-body text-center"><p>You will be welcomed at the door by one of our ushers. Sit anywhere you like in the gathering room. There will be singing, prayers, and a sharing by a pastor who talks about how the Bible can bring hope and change in our daily lives. Children and youth go to their own groups in the middle of service. Services usually last an hour and a half. Free coffee and tea are available in between services at the foyer.</p></div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" href="#collapse3">
                                <a>Is anything expected of me?</a>
                              </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                              <div class="panel-body text-center"><p>Feel free to join in the singing of the songs (words are projected on the screen) but you can just enjoy listening to the songs. We also stand during this time, though you may sit if that is more comfortable with you. You do not have to bring a Bible as the passages will be shown on the screen. After the service, there are prayer opportunities if you would like to be prayed for.</p></div>
                            </div>
                          </div>

                        </div>

                        <div class="panel-group col-sm-4" id="accordion2">

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" href="#collapse4">
                                <a>What should I wear?</a>
                              </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                              <div class="panel-body text-center"><p>Dress in whatever makes you feel comfortable! Some of us dress casually, and others prefer to wear their “Sunday best.”</p></div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" href="#collapse5">
                                <a>Do I have to give money?</a>
                              </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                              <div class="panel-body text-center"><p>Not at all! The services, children and youth programmes and refreshments are free. Our church building, staff and community work are funded by contributions, so we have a collection at every service. It is normal to let the bag pass without putting anything inside. There is no expectation to give a contribution.</p></div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" href="#collapse6">
                                <a>Is church serious or social?</a>
                              </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                              <div class="panel-body text-center"><p>Church life is a wonderful mix of both! We are serious about Jesus and how we live out His teachings in our lives. At the same time, we also enjoy fun, social activities together and have many planned in our church calendar. <br>Check them out here!.


                                          <div class="col-sm-12 text-center scroll-to">
                                            <a class="btn btn-md btn-yellow" href="#events">Events</a>
                                          </div>

                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="panel-group col-sm-4" id="accordion3">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" href="#collapse7">
                                <a>Will someone tell me what to believe?</a>
                              </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                              <div class="panel-body text-center"><p>During the service, someone does give a talk at the front and it is a sharing of how God was, is and continues to be relevant in today’s world. The talk includes stories, pictures, testimonies and even jokes! And none of it is meant to intimidate or condemn anyone into believing anything. The message of Jesus is not an order or command of fear, it is instead a gentle invitation to love and hope.</p></div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" href="#collapse8">
                                <a>What if I have questions during the service?</a>
                              </h4>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse">
                              <div class="panel-body text-center"><p>Feel free to grab one of our pastors or ministry staff after the service and they will be happy to talk with you.</p></div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" href="#collapse9">
                                <a>Where can I park?</a>
                              </h4>
                            </div>
                            <div id="collapse9" class="panel-collapse collapse">
                              <div class="panel-body text-center"><p>We have a car park directly outside the church. When this is filled, please park responsibly along the surrounding streets. The parking spaces right in front of the church are reserved for those who have difficulty with mobility. </p></div>
                            </div>
                          </div>
                        </div>
                        </div>
                    </div>
                </section><!--section dishes-->

        <section class="cta">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>Affordable quality foods</h2>
                        <a class="btn btn-lg btn-yellow">Make a reservation</a>
                    </div>
                </div>
            </div>
        </section><!--call to action-->

        <section id="events" class="section-events">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 center-title text-center">
                        <h3>Upcoming events</h3>
                        <span class="center-line"></span>
                        <p>
                            Checkout the upcoming events
                        </p>
                    </div>
                </div><!--section title-->
                <div class="row">
                    <div class="col-sm-4 margin-b-30">
                        <div class="event-thumb">
                            <?php perch_content('Event 1'); ?>
                        </div><!--event thumbnail-->
                        <div class="event-desc clearfix">
                            <h4>Indian Meat Opening</h4>

                            <span class="date">26 August 2015</span><span class="time">11:15 AM</span>
                            <p>
                                Nam pharetra diam eu dolor vestibulum volutpat.
                            </p>
                            <a href="#">View Details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div><!--event entry column-->
                    <div class="col-sm-4 margin-b-30">
                        <div class="event-thumb">
                            <?php perch_content('Event 2'); ?>
                        </div><!--event thumbnail-->
                        <div class="event-desc clearfix">
                            <h4>Coffee with Enrique</h4>

                            <span class="date">26 August 2015</span><span class="time">11:15 AM</span>
                            <p>
                                Nam pharetra diam eu dolor vestibulum volutpat.
                            </p>
                            <a href="#">View Details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div><!--event entry column-->
                    <div class="col-sm-4 margin-b-30">
                        <div class="event-thumb">
                            <?php perch_content('Event 3'); ?>
                        </div><!--event thumbnail-->
                        <div class="event-desc clearfix">
                            <h4>New Restaurant Opening</h4>

                            <span class="date">26 August 2015</span><span class="time">11:15 AM</span>
                            <p>
                                Nam pharetra diam eu dolor vestibulum volutpat.
                            </p>
                            <a href="#">View Details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div><!--event entry column-->
                </div>
            </div>
        </section><!--events-->

        <section class="our-chefs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 center-title text-center">
                        <h3>Meet The Team</h3>
                        <span class="center-line"></span>
                    </div>
                </div><!--section title-->
                <div class="row">
                    <div class="col-sm-4 margin-b-30">
                        <div class="chef-box">
                            <div class="chef-thumb">
                                <img src="img/team-1.jpg" class="img-responsive" alt="">
                                <div class="chef-overlay">
                                    <div class="chef-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div><!--chef thumb-->
                            <div class="chef-desc">
                                <h4>Juliyana</h4>
                                <em>Master Chef</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim.
                                </p>
                            </div>
                        </div><!--chef desc-->
                    </div><!--chef column-->
                    <div class="col-sm-4 margin-b-30">
                        <div class="chef-box">
                            <div class="chef-thumb">
                                <img src="img/team-2.jpg" class="img-responsive" alt="">
                                <div class="chef-overlay">
                                    <div class="chef-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div><!--chef thumb-->
                            <div class="chef-desc">
                                <h4>Juliyana</h4>
                                <em>Master Chef</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim.
                                </p>
                            </div>
                        </div><!--chef desc-->
                    </div><!--chef column-->
                    <div class="col-sm-4 margin-b-30">
                        <div class="chef-box">
                            <div class="chef-thumb">
                                <img src="img/team-3.jpg" class="img-responsive" alt="">
                                <div class="chef-overlay">
                                    <div class="chef-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div><!--chef thumb-->
                            <div class="chef-desc">
                                <h4>Juliyana</h4>
                                <em>Master Chef</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim.
                                </p>
                            </div>
                        </div><!--chef desc-->
                    </div><!--chef column-->
                </div>
            </div>
        </section><!--Chefs section-->


        <footer class="footer  text-center">
            <div class="container">
                <div class=" text-center">
                    <ul class="list-inline social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <span>Loughton Baptist Church &copy; 2018</span>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
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
        <!--restaurant custom js-->
        <script src="js/restaurant-custom.js" type="text/javascript"></script>

    </body>
</html>
