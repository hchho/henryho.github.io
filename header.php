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
    <title>Henry Ho's Webpage</title>
    <link rel="stylesheet" href="/assets/css/custom.css" />

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>


    <div class="background">
    </div>
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
                <a class="navbar-brand" href="index.html">Dream Team</a>
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
                <li>
                    <?php echo "<a href='" . $link_about . "'>About</a>"; ?>
                </li>
                <li>
                    <?php echo "<a href='" . $link_contact . "'>Contact</a>"; ?>
                </li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </nav>