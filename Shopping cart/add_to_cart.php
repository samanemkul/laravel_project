<?php
session_start();
$item = $_POST['Shopping'];

if (isset($_SESSION['manjan'])) {
    array_push($_SESSION['manjan'], $item);
  } else {
    $_SESSION['manjan'] = [$item];
  }
  header("Location: /");
  ?>
  