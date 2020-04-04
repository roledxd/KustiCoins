<?php
require '../db.php';
?>
<?php if(isset($_SESSION['logged_user'])) : ?>
  <?php
    $user = R::findOne('users', 'rawusername = ?', array(strtolower($_SESSION['logged_user']->username)));
    ?>
<?php else : ?>
<?php endif ; ?>
<head>
<title>KustiNET | Error 401</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="/css/util.css">
<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
    <div class="limiter">
	<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="https://kustinet.tk">KustiNet</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://kustinet.tk">
          <i class="fa fa-home"></i>
          Home
          <span class="sr-only">(current)</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-envelope-o">
            <span class="badge badge-danger">11</span>
          </i>
          Link
        </a>
      </li>
      <li class="nav-item">
        <!--<a class="nav-link disabled" href="https://kustinet.tk/kusticoins">-->
        <a class="nav-link disabled">
        🌳
        KustiCoins BETA
        </a>
      </li>
      <?php if(isset($_SESSION['logged_user'])) : ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://kustinet.tk/profile?username=<?php echo $_SESSION['logged_user']->rawusername ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user">
            <!--<span class="badge badge-primary">11</span>-->
          <?php if($user->role == "admin") : ?>
          </i>
          @<?php echo $_SESSION['logged_user']->username ?>
          <?php elseif($user->role == "user") : ?>
          </i>
          <?php echo $_SESSION['logged_user']->username ?>
          <?php endif ; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://kustinet.tk/profile?username=<?php echo $_SESSION['logged_user']->rawusername ?>">Profile</a>
          <a class="dropdown-item" href="#">Action2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://kustinet.tk/logout.php">Sign-Out</a>
          <?php if($user->role == "admin") : ?>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://kustinet.tk/cpanel">Control Panel</a>
          <a class="dropdown-item" href="https://databases.000webhost.com/sql.php?db=id7051492_api">phpMyAdmin</a>
          <?php elseif($user->role == "user") : ?>
          
          <?php endif ; ?>
        </div>
      </li>
      <?php else : ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://kustinet.tk/auth" id="navbarDropdown" role="button" aria-haspopup="false" aria-expanded="false">
          <i class="fa fa-user">
            <!--<span class="badge badge-primary">11</span>-->
          </i>
          Log-In
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://kustinet.tk/auth/register.php">Register</a>
          <a class="dropdown-item" href="http://kustinet.tk/auth/login.php">Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://kustinet.tk">KustiNet.tk</a>
        </div>
      </li>
      <?php endif ; ?>
    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-bell">
            <span class="badge badge-info">11</span>
          </i>
          Test
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-globe">
            <span class="badge badge-success">11</span>
          </i>
          Test
        </a>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
        <?php if(isset($_SESSION['logged_user'])) : ?>
        <a class="navbar-brand" href="../profile?username=<?php echo $_SESSION['logged_user']->rawusername ?>"><?php echo $_SESSION['logged_user']->username ?></a>
        <li class="nav-item dropdown">
        <a class="navbar-brand" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php echo $_SESSION['logged_user']->username ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action1</a>
          <a class="dropdown-item" href="#">Action2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sign-Out</a>
        </div>
      </li>
        <?php else : ?>
        <a class="navbar-brand" href="../auth/login.php">Log-In</a>
        <?php endif ; ?>
   </form>-->
  </div>
</nav>
        <div class="container-login100">
            <div class="login100-pic js-tilt" id="centerobj" data-tilt>
					<img src="/images/img-01.png" alt="IMG" id="centerobj">
					<span class="login100-form-title" id="centerobj"><h2>401: Unauthorised</h2></span>
		    	</div>
        </div>
    </div>
    <script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
    <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/vendor/select2/select2.min.js"></script>
	<script src="/vendor/tilt/tilt.jquery.min.js"></script>
	<script src="/js/onload.js"></script>
	<script src="/js/main.js"></script>
</body>