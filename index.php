<?php
  if(isset($_GET['loggedOut']))
  {
   $toastMessage = "You have been logged out, please log in to see your account";
  }
  if(isset($_GET['loginFailed']))
  {
   $toastMessage = "Incorrect Email ID or Password!";
  }
  if(isset($_GET['registered']))
  {
   $toastMessage = "Successfully Registered! Log In to add records";
  }
?>  
<!DOCTYPE html>
<html>
  <head>
    <title>Expense Manager | Login</title>
    <link href="images/icon.png" rel="Icon">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Google Font Yatra One-->
    <link href='https://fonts.googleapis.com/css?family=Yatra One' rel='stylesheet'>
    <!--Import Google Font Allerta-->
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <!--Font Awesome 4.7.0 css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--MY Style-->
    <link type="text/css" rel="stylesheet" href="my-style/style.css">
  </head>

  <body>
    
        <div class="navbar-fixed">
                <nav class="nav-bg">
                  <div class="nav-wrapper">
                    <a href="#" class="title-logo">Expense Manager</a>
                    <ul class="right hide-on-med-and-down">
                            <li class="sign-up-text">If you are new to us</li><li><a class="nav-icon" href="sign-up/sign-up.php"><i class="material-icons">person_add</i></a></li>
                    </ul>
                  </div>
                </nav>
        </div>
        <div class="title-container">
          <span class="title-text">Keep track of your day to day expense</span> 
      </div>
        <div class="card" id="title-card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/Business-Expenses.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Expenditure<i class="material-icons right">more_vert</i></span>
              <p><a href="sign-up/sign-up.php">If you are new to us sign up</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">About<i class="material-icons right">close</i></span>
              <p>You can Keep track of your outflow of money to another person or group to pay for an item or service, or for a category of costs. For a tenant, rent is an expense. For students or parents, tuition is an expense. Buying food, clothing, furniture or an automobile is often referred to as an expense. An expense is a cost that is "paid" or "remitted", usually in exchange for something of value.</p>
                <p>Expense Manager is easy to understand and use. It's clean & basic interface provides a simple yet elegant look. Anybody can start using Expense Manager within seconds.</p>
            </div>
          </div>
        <div class="login-form-container">
            <div class="login-form-container-text">
                Login
            </div>
            <div class="row">
                <form class="col s12" action="php/login.php" method="POST">
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">email</i>
                      <input id="icon_prefix" name="emailId" type="email" class="validate" required>
                      <label for="icon_prefix">E-mail</label>
                    </div>
                 </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <i class="material-icons prefix">lock</i>
                        <input id="icon_telephone" name="password" type="password" class="validate" required>
                        <label for="icon_telephone">Password</label>
                     </div>
                  </div>
                  <button class="btn waves-effect waves-light" id="button-submit" type="submit" >Login
                        <i class="material-icons right">send</i>
                  </button>
                </form>
            </div>
        </div>
        <footer class="page-footer" id="footer">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text" id="Footer-Content">Expense Manager</h5>
                  <p class="grey-text text-lighten-4">Keep track of your day to day expense</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Contact Us</h5>
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-linkedin"></a>
                  <a href="#" class="fa fa-instagram"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <ul>
                      <li>ka.usman@rediffmail.com</li>
                      <li>+91 8088611415</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright" id="footer-end">
              <div class="container">
              &copy 2019 Copyright Expense Manager
              <a class="grey-text text-lighten-4 right" >Developed By : Mohammed Usman E Gani</a>
              </div>
            </div>
          </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script>
      var toastHTML = "<?php echo $toastMessage;?>";
      if(toastHTML!="")
      {
        console.log("here");
        M.toast({html: toastHTML, classes: 'rounded'});
      }
      </script>
  </body>

</html>
      