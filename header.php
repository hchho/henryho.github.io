<?php
$root = "";
$link_home = $root . "/index.php";
$link_projects = $root . "/projects/projects.php";
$link_about = $root . "/about/about.php";
$link_contact = $root . "/contact.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>HAS Bruhs</title>
    <link rel="stylesheet" href="/assets/css/custom.css" />

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>

<body>

    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid visible-xs">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">H.A.S. Bruhs</a>
            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li>
                    <?php echo "<a href='" . $link_home . "'>Home</a>"; ?>
                </li>
                <li>
                    <?php echo "<a href='" . $link_projects . "'>Projects</a>"; ?>
                </li>
                <li class="dropdown">
                    <?php echo "<a class='dropdown-toggle' data-toggle='dropdown' href='" . $link_about . "'>About <span class='caret'></span></a>"; ?>
                    <ul class="dropdown-menu">
          <li><a href="/about/henry.php">Henry Ho</a></li>
          <li><a href="/about/alex.php">Alex Lee</a></li>
          <li><a href="/about/steve.php">Steve Cho</a></li>
        </ul>
                </li>
                <li>
                    <?php echo "<a href='" . $link_contact . "'>Contact</a>"; ?>
                </li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </nav>