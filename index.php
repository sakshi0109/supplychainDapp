<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="SHORTCUT ICON" href="images/logo.png" type="image/x-icon" />
    <link rel="ICON" href="images/logo.png" type="image/ico" />

    <title>VITRON - DApp</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
  <?php
  if( !isset($_SESSION['role']) ){
  ?>
  <center>
      <div class="customalert">
          <div class="alertcontent">
              <div id="alertText"> &nbsp </div>
              <img id="qrious">
              <div id="bottomText" style="margin-top: 10px; margin-bottom: 15px;"> &nbsp </div>
              <button id="closebutton" class="formbtn"> OK </button>
          </div>
      </div>
  </center>

  <div class="login-box" id="card1">
  <h2>VITRON</h2>
  <h3>The Supply Chain DAPP</h3><br><br>
  <p>VITRON is a Decentralized E2E Logistics Application that stores the whereabouts of product at every freight hub on the Blockchain. At consumer end, customers can simply scan the QR CODE of products and get complete information about the provenance of that product hence empowering consumers to only purchase authentic and quality products.</p>
    
  <form>    
  <div class="cardbtnarea">
                   <a href="#" id="login">Login</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="#" id="signup">Signup</a>
                </div>
  </form>
</div>




    <div class="login-box" id="maincard3">
          <h2>Signup</h2>
          <form action="registration.php" method="POST" onsubmit="return checkSecondForm(this);">


          <div class="user-box">            
            <input type="text" name="email" id="email" onkeypress="isNotChar(event)" required>
            <label> Email </label>
          </div>


          <div class="user-box">
            <input type="text" name="username" id="username" onkeypress="blockSpaces(event)" required>
            <label type="text"> Userame </label>
          </div>

          <div class="user-box">
            <input type="password" name="pw" id="pw" onkeypress="isNotChar(event)" required>
            <label type="text" class="formlabel"> Password </label>            
          </div>

          <!-- <div class="user-box">
            <input type="password" name="cpw" id="cpw" onkeypress="isNotChar(event)" required>
            <label type="text"> Confirm Password </label>            
          </div>  -->


         <div class="user-box">
            <label type="text"> Select Your Role </label><br><br>
            <select class="formselect" name="role">
              <option value="2" style="background: transparent;">Consumer</option>
              <option value="1" style="background: transparent;">Retailer</option>
              <option value="1" style="background: transparent;">Distributor</option>
              <option value="0" style="background: transparent;">Manufacturer</option>
            </select>
         </div>



            <button class="formbtn" name="loginsubmit" value="submitted!" type="submit">Register</button>

            <br>
           <a href="#" id="gotologin" style="font-size: 0.8rem; text-align: center;" > Have an account - Login </a>
            </form>
      </div>
<!-------------------New Registration---------------------------------------------------->


<!-------------------New Login---------------------------------------------------->
    <div class="login-box" id="maincard2">
      <h2>Login</h2>
          <form action="login.php" method="POST" onsubmit="return checkFirstForm(this);">

        <div class="user-box">
          <input type="text" name="email" id="email" onkeypress="isNotChar(event)" required>
          <label type="text" class="formlabel"> Email </label>
        </div>

        <div class="user-box">
          <input type="password" name="pw" id="pw" onkeypress="isNotChar(event)" required>
          <label type="text" class="formlabel"> Password </label>
        </div>
        <button class="formbtn" name="loginsubmit" type="submit">Login</button>
        <a href="#" id="gotosignup" style="font-size: 0.8rem; text-align: center;">Don't have an account? Register</a>
      </form>
    </div>

<!-------------------New Login---------------------------------------------------->


    <?php
    }else{
      include 'redirection.php';
      redirect('checkproduct.php');
    }
    ?>
    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Material Design Bootstrap-->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
  
    function isInputNumber(evt){
      var ch = String.fromCharCode(evt.which);
      if(!(/[0-9]/.test(ch))){
          evt.preventDefault();
      }
    }
    function isNotChar(evt){
      var ch = String.fromCharCode(evt.which);
      if(ch=="'"){
        evt.preventDefault();
      }
    }

    function blockSpaces(evt){
      var ch = String.fromCharCode(evt.which);
      if(ch=="'" || ch==" "){
        evt.preventDefault();
      }
    }

    function blockSpecialChar(e){
      var k;
      document.all ? k = e.keyCode : k = e.which;
      return ((k >= 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 46|| k == 42|| k == 33 || k == 32 || (k >= 48 && k <= 57));
    }

    $("#login").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard3").hide("fast","linear");
      $("#maincard2").show("fast","linear");
    });

    $("#gotologin").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard3").hide("fast","linear");
      $("#maincard2").show("fast","linear");
    });

    $("#openlogin").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard3").hide("fast","linear");
      $("#maincard2").show("fast","linear");
    });

    $("#signup").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard2").hide("fast","linear");
      $("#maincard3").show("fast","linear");
    });

    $("#gotosignup").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard2").hide("fast","linear");
      $("#maincard3").show("fast","linear");
    });

    $("#opensignup").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard2").hide("fast","linear");
      $("#maincard3").show("fast","linear");
    });

    


    $("#closebutton").on("click", function(){
        $(".customalert").hide("fast","linear");
    });

    function checkSecondForm(theform){
      var email = theform.email.value;
      var pw = theform.pw.value;
      var cpw = theform.cpw.value;

      if (!validateEmail(email)) {
        showAlert("Invalid Email address");
        return false;
      }

      if (pw!=cpw) {
        showAlert("Please check your password");
        return false;
      } 
      return true;
    }

    function checkFirstForm(theform){
      var email = theform.email.value;

      if (!validateEmail(email)) {
        showAlert("Invalid Email address");
        return false;
      }
      return true;
    }

    function showAlert(message){
      $("#alertText").html(message);
      $("#qrious").hide();
      $("#bottomText").hide();
      $(".customalert").show("fast","linear");
    }

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    
    </script>
  </body>
</html>