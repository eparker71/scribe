<nav class="topnav" id="myTopnav">
  <?php session_start();?>
  <img id="scribe-icon" src="images/pencil.png" />
  <a id="home" href="index.php">Home</a> |
  <a id="license" href="licenses.php">License</a> |
  <a id="training" href="trainings.php">Training</a> |
  <a id="help" href="help.php">Help</a>
  <?php if isset($_SESSION['login_user']) { ?>
  <span id="user">Hi Kate!</span>
  <img id="profilePicture" src="images/kate.png" />
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <?php } else { ?>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
  <?php } ?>
</nav>
