<?php
require_once "../utils/functions.php";
require_once "../widgets/_Login.php";
require_once "../widgets/_AddMember.php";
$error = "";

if (isset($_GET['sub_login'])) {
  if (LoginHome($_GET['user'], $_GET['pass'])) {
    header("Location: /pages/admin.php?admin=sudo");
  } else {
    header("Location: /pages/home.php");
  }
}
?>
<div class="signin">
        <?php

        addMember();

        ?>
</div>
<!DOCTYPE html>
<html lang="FR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barrel & fit’</title>
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="/css/style-responsive.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="container">
<header id="top">
      <menu>
        <a href="/pages/home.php" class="link">Home</a>
        <a href="/pages/piscine.php" class="link">Piscine</a>
        <a href="/pages/fitness.php" class="link">Fitness</a>
        <a href="/pages/machines.php" class="link">Machines</a>
      </menu>
      <a class="logo-website" href="home.php">
        <img
          src="../img/logo.png"
          alt="logo website (stay strong)"
          title="logo website (stay strong)"
        />
      </a>
      <i class="fas fa-bars"></i>
      <?php
      TestLog($_GLOBALS['login']);
      ?>
  <div class="form-login">
    <form action="" method="get" class="">
      <input type="text" name="user" required />
      <input type="password" name="pass" required />
      <button name="sub_login">Login</button>
    </form>
  </div>
    </header>