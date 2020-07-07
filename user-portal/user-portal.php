<?php
  require_once('../functions.php');
  db_connect();
  if(!isset($_SESSION['userId']))
  {
    redirect_to('index.php?loggedOut=true');
  }
  
?>
<!DOCTYPE html>
<html>
  <head>
      <title>Expense Manager</title>
      <link href="images/icon.png" rel="Icon">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Google Font Yatra One-->
    <link href='https://fonts.googleapis.com/css?family=Yatra One' rel='stylesheet'>
    <!--Import Google Font Allerta-->
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection">
    <!--Font Awesome 4.7.0 css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--MY Style-->
    <link type="text/css" rel="stylesheet" href="style/User_portal.css">
  </head>

  <body>
        <div class="navbar-fixed">
                <nav class="nav-bg">
                  <div class="nav-wrapper">
                    <a href="#" class="title-logo">Expense Manager</a>
                    <ul class="right hide-on-med-and-down">
                        <li class="sign-up-text">Sign-out</li><li><a class="nav-icon" href="../php/logout.php"><i class="material-icons">power_settings_new</i></a></li>
                  </ul>
                  </div>
                </nav>
        </div>
        <div class="title-container">
            <span class="title-text">Expenditure Report | <?php echo $_SESSION['firstName'];?></span> 
        </div>
        <div class="user-expense-table">
            
            <table cellpadding="10"  class="highlight table-header scroll">
                <thead>
                  <tr>
                      <th>Sl no</th>
                      <th>Transaction Date</th>
                      <th>Transaction Category</th>
                      <th>Note</th>
                      <th>Amount</th>
                  </tr>
                </thead>
        
                <tbody>
                  <?php
                    $i=1;
                    $totalAmount = 0;
                    $userId = $_SESSION['userId'];
                    $sql = "SELECT expenseDate,expenseCategory, expenseNote, expenseAmount FROM expenses WHERE fromUser = '$userId'";
                    $statement = $conn->query($sql);
                    if($statement)
                    {
                      if($statement->num_rows>0)
                      {
                        $totalAmount = 0;
                        while($expense = $statement->fetch_assoc())
                        {
                          $totalAmount+=$expense['expenseAmount'];
                          
                    ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $expense['expenseDate'];?></td>
                    <td><?php echo $expense['expenseCategory'];?></td>
                    <td><?php echo $expense['expenseNote'];?></td>
                    <td><?php echo $expense['expenseAmount'];?></td>
                  </tr>
                  <?php
                      $i++;
                        }
                      }
                    }
                    ?>
                </tbody>
              </table>
              <div class="Total-Expenditure"><span>Total Expenditure : <?php echo $totalAmount;?></span></div>
              
                    
        </div>
               <!-- Modal Trigger -->
                <div class="fixed-action-btn">
                  <a class="btn-floating btn-large green modal-trigger" href="#modal1">
                    <i class="large material-icons">add</i>
                  </a>
                </div>
           <!-- Modal Structure -->
           <div id="modal1" class="modal modal-fixed-footer">
              <form action="../php/addrecord.php" method="POST">
              <div class="modal-content">
                <h4 style="color:#c5180d">Add Transaction</h4>
                      <div class="row">
                          <div class = "input-field col s12">
                              <i class="material-icons prefix">event</i>
                              <input id="todaysdate" name="expenseDate" type="text" class="datepicker" required>
                              <label for="todaysdate">Transaction Date</label>
                          </div>
                        </div>
                        <div class="row"> 
                            <div class="input-field col s12">
                                <i class="material-icons prefix">dns</i>
                                <select name="expenseCategory" >
                                  <option value="CTC" disabled selected>Choose transaction category</option>
                                  <option value="ADV">Advertising</option>
                                  <option value="CTE">Car & Truck Expenses</option>
                                  <option value="CON">Contractors</option>
                                  <option value="EAT">Education and Training</option>
                                  <option value="EBS">Employee Benefits </option>
                                  <option value="MAE">Meals & Entertainment</option>
                                  <option value="OEP">Office Expenses & Postage</option>
                                  <option value="PER">Personal</option>
                                  <option value="PRO">Professional Services </option>
                                  <option value="ROL">Rent or Lease</option>
                                  <option value="SUP">Supplies</option>
                                  <option value="TRA">Travel</option>
                                  <option value="UTI">Utilities</option>
                                  <option value="HOH">Household</option>
                                  <option value="OEX">Other Expenses</option>
                                </select>
                                <label for="category">Transaction category</label>
                              </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">edit</i>
                                  <input id="note" name="expenseNote" type="text" class="validate">
                                  <label for="note">Note</label>
                                </div>
                              </div>
                              <div class="row">
                                  <div class="input-field col s12">
                                    <i class="material-icons prefix">attach_money </i>
                                    <input id="amount" name="expenseAmount" type="number" min="1" class="validate" required>
                                    <label for="amount">Amount</label>
                                  </div>
                                </div>
              </div>
            <div class="modal-footer">
              <button class="modal-submit-button" type="submit" style="color:#c5180d">Add</button>
            </div>
          </form>
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
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script>
   $(document).ready(function(){
   $('.modal').modal();
   });


   var date=new Date();
      var val=(date.getMonth()+1)+"/"+date.getDate()+"/"+date.getFullYear();
       $(document).ready(function(){0
    $('.datepicker').datepicker({
      format: "dd-mm-yyyy",
      container:'body',
      setDefaultDate: true,
      defaultDate: date,
      maxDate: date,
    });
    });


   $(document).ready(function(){
    $('select').formSelect();
  });
    </script>
    <script src="js/sticky.js"></script>
  </body>
</html>
      