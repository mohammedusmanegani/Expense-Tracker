<?php
  if(isset($_GET['registerFailed']))
  {
    $toastMessage = "Confirm Password and Password Fields Do Not Match!";
  }
  ?>
<!DOCTYPE html>
<html>

  <head>
      <title>Expense Manager | Sign-up</title>
      <link href="../images/icon.png" rel="Icon">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Google Font Yatra One-->
    <link href='https://fonts.googleapis.com/css?family=Yatra One' rel='stylesheet'>
    <!--Import Google Font Allerta-->
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection">
    <!--Font Awesome 4.7.0 css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--MY Style-->
    <link type="text/css" rel="stylesheet" href="my-style -sign-up/my-style -sign-up.css">
  </head>

  <body>
        <div class="navbar-fixed">
                <nav class="nav-bg">
                  <div class="nav-wrapper">
                    <a href="#" class="title-logo">Expense Manager</a>
                    <ul class="right hide-on-med-and-down">
                            <li class="sign-up-text">Already have an account</li><li><a class="nav-icon" href="../index.php"><i class="material-icons">lock_outline</i></a></li>
                    </ul>
                  </div>
                </nav>
        </div>
        <div class="title-container">
            <a class="back-button" href="../index.php"><span><i class="fa fa-chevron-left" aria-hidden="true"></i></span></a>
            <span class="title-text">Keep track of your day to day expense</span> 
        </div>
        <div class="login-form-container">
            <div class="login-form-container-text">
                Sign up
            </div>
            <div class="row">
              <form class="col s12" action="../php/register.php" method="POST">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="first_name" name="firstName" type="text" class="validate" required>
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="last_name"  name="lastName" type="text" class="validate" required>
                    <label for="last_name">Last Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="emailId" type="email" class="validate" required>
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="password" name="password" type="password" class="validate" required>
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">lock</i>
                      <input id="confirm-password" name="passwordConfirm" type="password" class="validate" required>
                      <label for="confirm-password">Confirm Password</label>
                    </div>
                  </div>
                <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">local_phones</i>
                      <input id="phone-number" name="phoneNumber" type="tel" class="validate" required>
                      <label for="phone-number">Phone number</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class = "input-field col s12">
                        <i class="material-icons prefix">event</i>
                        <input id="dob" name="dateOfBirth" type="text" class="datepicker" required>
                        <label for="dob">Date of Birth</label>
                    </div>
                  </div>
                  <div class="row"> 
                  <div class="input-field col s12">
                      <i class="material-icons prefix">wc</i>
                      <select name="gender">
                        <option value="" disabled selected>Choose your Gender</option>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="o">Other</option>
                      </select>
                      <label for="gender">Gender</label>
                    </div>
                  </div>
                  <button class="btn waves-effect waves-light" id="button-submit" type="submit" >Next
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
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"
    integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
    <script>
      var date=new Date();
      var val=(date.getMonth()+1)+"/"+date.getDate()+"/"+date.getFullYear();
       $(document).ready(function(){0
    $('.datepicker').datepicker({
      format: "dd-mm-yyyy",
      setDefaultDate: true,
      defaultDate: date,
      maxDate: date,
    });
    });
    </script>
    <script>
  $(document).ready(function(){
    $('select').formSelect();
  });
    </script>
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
      