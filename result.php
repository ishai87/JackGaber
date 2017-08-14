<?php
session_start();
?>
<?php
  $con=new mysqli("localhost","root","","limudimdb");
  //check con
  if($con->connect_error){
    die("Connection failed: ". $con->connect_error);
  }
  $city=$_POST["city"];
  $class=$_POST["class"];
  $profession=$_POST["profession"];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>limudim-result</title>

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
    <link href="css/agency.css" rel="stylesheet">

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
                        <a class="page-scroll" href="search.php">חזרה לדף חיפוש סטודנט</a>
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


    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">תוצאות חיפוש</h2>
                    <h3 class="section-subheading text-muted">: מציג תוצאות עבור החיפוש הבא</h3>
                    <!-- form -->

                    <div align="center">
                          <fieldset>
                            <p><label for="city">
                              <span>אזור מגורים:</span>
                              <?php
                                if(isset($_POST["city"])){ $_SESSION['city']=$_POST["city"];
                                  echo $city;} ?>
                            </label>
                            </p>

                            <p><label for="class">
                              <span> כיתה:</span>
                              <?php
                                if(isset($_POST["class"])){ $_SESSION['class']=$_POST["class"];
                                  echo $class;} ?>
                            </label>
                            </p>

                            <p><label for="profession">
                              <span>מקצוע:</span>
                              <?php
                                if(isset($_POST["profession"])){ $_SESSION['profession']=$_POST["profession"];
                                  echo   $profession;} ?>
                            </label>
                            </p>
                          </div>
                          <br><br>

                            <?php
                            $sql="SELECT * FROM users WHERE City ='$city' and Profession='$profession' and Class like '$class'";
                            $res=$con->query($sql);
                           ?>
                           <div align="center">
                           <table id="ut" >
                             <tr text-align="center">
                               <td class="wr"> # <td class="wr">שם פרטי <td class="wr">שם משפחה <td class="wr">מין
                                 <td class="wr"> אזור מגורים <td class="wr">פלאפון <td class="wr"> מייל <td class="wr"> כיתות <td class="wr"> מקצועות לימוד
                             </tr>
                             <?php
                             $i=1;

                             //print user database

                             while($row=$res->fetch_object()){
                               echo "<tr><td>".$i;
                                echo "<td>".$row->FirstName;
                               echo "<td>".$row->LastName;
                              echo "<td>".$row->Gender;

                               echo "<td>".$row->City;
                               echo "<td>".$row->Telephone;
                               echo "<td>".$row->Email;
                               echo "<td>".$row->Class;
                               echo "<td>".$row->Profession;

                               $i++;
                             }
                              ?>
                           </table>
                           </div>
                         </div>

                    </div>

<section>
      <footer class="bg-light-gray">
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
