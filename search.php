<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>limudim-search</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">limudim</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php">חזרה לדף הבית</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                  <img src="img/logos/logobig.png" class="img-responsive img-centered" alt="">
                <div class="intro-heading">נגיש, פשוט ונוח</div>
            </div>
        </div>
    </header>


    <!-- search Section -->
    <section id="search" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">חיפוש סטודנט</h2>
                    <h3 class="section-subheading text-muted"> *מלא את השדות הנדרשים</h3>
                    <!-- form -->
                    <?php
                    session_start();
                     ?>
                    <div align="center">
                      <form id="form1" action="result.php" method="post">
                          <fieldset>
                            <p><label for="city">
                              <select name="city">
                                <option value=""></option>
                                <option value="תל אביב">תל אביב</option>
                                <option value="באר שבע">באר שבע</option>
                                <option value="עפולה">עפולה</option>
                                <option value="חיפה">חיפה</option>
                                <option value="אילת">אילת</option>
                                <option value=" קריית שמונה"> קריית שמונה</option>
                                  </select>
                                  <span>:אזור מגורים</span>
                              <strong><abbr title="required field">*</abbr></strong>
                            </label>
                            </p>
                            <p><label for="class">
                              <select name="class">
                                <option value=""></option>
                                <option value="a">א</option>
                                <option value="b">ב</option>
                                <option value="c">ג</option>
                                <option value="d">ד</option>
                              </select>
                              <span> :כיתה</span>
                              <strong><abbr title="required field">*</abbr></strong>
                            </p>
                            <p><label for="profession">
                              <select name="profession">
                                <option value=""></option>
                                <option value="meth">חשבון</option>
                                <option value="eng">אנגלית</option>
                                <option value="his">היסטוריה</option>
                                <option value="bio">ביולוגיה</option>
                                <option value="az">אזרחות</option>
                              </select>
                                  <span>:מקצוע</span>
                              <strong><abbr title="required field">*</abbr></strong>
                            </p>
                          <button><img src="img/symbols/s.png" class="img-responsive img-centered" alt="" </button></p>
                      </form>
                    </div>
                  </section>
<section>
      <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; vally coding team</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
  </section>



    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
