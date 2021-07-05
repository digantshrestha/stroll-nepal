<?php
    include_once($_SERVER['DOCUMENT_ROOT']."/constants.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=BRANDNAME;?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/jquery.min.js"></script>
</head>
<body>

<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
    <div class="container">
        <h1 class="nav-items brand"><a href="../"><?=BRANDNAME;?></a></h1>  
        <div class="nav-items">
            <button class="btn btn-danger">Register</button>
            <button class="btn btn-danger">Sign In</button>
        </div>
    </div>
</header>

<div class="container">