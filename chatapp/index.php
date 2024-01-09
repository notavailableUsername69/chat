<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>

<html>
  <head>
  <style>
    #field-button{
      transition: .5s;
    }
    #field-button:hover{
      scale: 1.1;
      transition: .5s;
    }
    #signup{
      transition: .5s;
    }
    #signup:hover{
      transition: .5s;
      scale: 1.1;
    }
  </style>
  </head>
<body>
  <div class="wrapper" style="box-shadow: 5px 5px 10px rgba(0, 0, 0, .3);">
    <section class="form signup">
      <header><b style="text-shadow: 5px 5px 5px rgba(0, 0, 0, .5);">ChatUs</b></header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label ><b>First Name</b></label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label><b>Last Name</b></label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label><b>Email Address</b></label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label><b>Password</b></label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label ><b>Select Profile Picture</b></label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat" style="background-color: #F07857; box-shadow: 5px 5px 10px rgba(0, 0, 0, .4);" id="field-button">
        </div>
      </form>
      <div class="link" id="signup">Already signed up? <a href="login.php" style="color: #F07857;" >Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>

