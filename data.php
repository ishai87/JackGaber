<?php
session_start();
?>
<?php
  $con=new mysqli("localhost","root","","limudimdb");
  //check con
  if($con->connect_error){
    die("Connection failed: ". $con->connect_error);
  }
  $a=$_POST["FirstName"];
  $b=$_POST["LastName"];
  $c=$_POST['Gender'];
  $d=$_POST["birthDay"];
  $e=$_POST["city"];
  $f=$_POST["Telephone"];
  $g=$_POST["Email"];
  $class=$_POST['class'];
  $h=implode(",",$class);
  $profession=$_POST['profession'];
  $i=implode(",",$profession);
  $j=$_POST["pass1"];



  $result = $con->query("SELECT Email FROM users WHERE Email = '$g'");
  if($result->num_rows == 1) {
       header('Location: regform.php?register=false');
  }
?>

<?php
//confirm registration

if(isset($_POST["site_button"]))
{
  header("Location: index.php?register=true");

}?>
<?php
//change registration details
if(isset($_POST["reg_button"]))
{
  header("Location: regform.php");
  exit;
}?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>limudim-registration</title>

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


    <section id="register" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">סיום הרשמת סטודנט לאתר</h2>
                    <h3 class="section-subheading text-muted"> ודא שהערכים בשדות אכן נכונים</h3>
                    <!-- form -->
    <?php
    //if email already exsits

    if(isset($_GET['register'])){
    if ('false' === $_GET['register']) {

      echo '<script language="javascript">';
      echo 'alert(" Failed register! email already in use")';
      echo '</script>';

    }
  }
     ?>
    <div align="center">
      <form class="" action="" method="post">
               <section>
                 <fieldset>
                   <div id="divi">
                   <p><label for="FirstName">
                     <span>שם פרטי:</span>
                     <?php
                       if(isset($_POST["FirstName"])){ $_SESSION['FirstName']=$_POST["FirstName"];
                         echo $_POST["FirstName"];} ?>
                   </label>
                   </p>

                   <p><label for="LastName">
                     <span>שם משפחה:</span>
                     <?php
                       if(isset($_POST["LastName"])){ $_SESSION['LastName']=$_POST["LastName"];
                         echo $_POST["LastName"];} ?>
                   </label>
                   </p>

                   <p><label for="Gender">
                     <span>:מין</span>
                     <?php
                     if(isset($_POST["Gender"])){ $_SESSION['Gender']=$_POST["Gender"];
                       echo $c;}
                      ?>
                   </label>
                   </p>

                   <p><label for="birthDay">
                     <span>תאריך לידה:</span>
                     <?php
                       if(isset($_POST["birthDay"])){ $_SESSION['birthDay']=$_POST["birthDay"];
                         echo $_POST["birthDay"];} ?>
                   </label>
                   </p>

                   <p><label for="city">
                     <span>אזור מגורים:</span>
                     <?php
                       if(isset($_POST["city"])){ $_SESSION['city']=$_POST["city"];
                         echo $_POST["city"];} ?>
                   </label>
                   </p>

                   <p><label for="Telephone">
                     <span>פלאפון:</span>
                     <?php
                       if(isset($_POST["Telephone"])){ $_SESSION['Telephone']=$_POST["Telephone"];
                         echo $_POST["Telephone"];} ?>
                   </label>
                   </p>

                   <p><label for="Email">

                     <?php
                       if(isset($_POST["Email"])){ $_SESSION['Email']=$_POST["Email"];
                         echo $_POST["Email"];} ?>
                         <span>:אי-מייל</span>
                   </label>
                   </p>

                   <p><label for="class">
                     <span>:כיתות</span><br>
                     <?php
                     if(isset($_POST["class"])){ $_SESSION['class']=$h;
                     echo $h;}
                  ?>
                   </label>
                   </p>

                   <p><label for="profession">
                     <span>:מקצועות לימוד</span><br>
                     <?php
                     if(isset($_POST["profession"])){ $_SESSION['profession']=$i;
                       echo $i;}
                  ?>
                   </label>
                   </p>

                   <p><label for="pass1">
                     <span>סיסמא:</span>
                     <?php
                       if(isset($_POST["pass1"])){ $_SESSION['pass1']=$_POST["pass1"];
                         echo $_POST["pass1"];} ?>
                   </label>
                   </p>
                 </div>


                 </fieldset>
               </section>

               <section>
                 <br>
                 <h5>אם ברצונך לשנות את פרטייך, לחץ על החזרה</h5>
                <input type="submit" class="b21" name="reg_button" value="Return"> <br><br>
                <h5>אם כל הפרטים נכונים והינך מוכן להמשיך את תהליך ההרשמה לחץ על אנטר</h5>
                <input class="b21" type="submit" name="site_button" value="Enter">



               </section>
               </form>

           </div>
           </div>
           </div>

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
