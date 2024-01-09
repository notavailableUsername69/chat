<?php
try {
  // session_start();
  if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
  }
} catch (\Throwable $th) {
  echo "Error";
}

?>

<?php include_once "header.php"; ?>
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
    <section class="form login">
      <header style="text-align: center;  text-shadow: 5px 5px 5px rgba(0, 0, 0, .5);"><b>ChatUs</b></header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label><b>Email Address</b></label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label><b>Password</b></label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat" style="background-color: #F07857; box-shadow: 5px 5px 10px rgba(0, 0, 0, .4);" id="field-button">
        </div>
      </form>
      <div class="link"  id="signup">Not yet signed up? <a href="index.php" style="color: #F07857;">Signup now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>

</html>