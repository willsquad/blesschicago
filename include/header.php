<?php 
    $basename = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        Bless Chicago | 2018
    </title>
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/style.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900|Montserrat:500,700,800|Open+Sans:300,400,700" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Header: Menu + Logo -->
            <header id="menu_header_container" class="col-12">
                <a id="menu_logo" href="index.php">
                    <h2>Bless Chicago
                        <span class="separator">|</span>
                        <span class="year">2018</span>
                    </h2>
                </a>
                <div id="menu_item_container">
                    <ul id="primary-menu">
                        <li class="<?php echo (($basename == 'index.php')?'active':'');?>">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="<?php echo (($basename == 'about.php')?'active':'');?>">
                            <a href="about.php">About</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Sub Menu 1</a>
                                </li>
                                <li>
                                    <a href="#">Sub Menu 2</a>
                                </li>
                                <li>
                                    <a href="#">Sub Menu 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo (($basename == 'speakers.php')?'active':'');?>">
                            <a href="speakers.php">Speakers</a>
                        </li>
                        <li class="<?php echo (($basename == 'venue.php')?'active':'');?>">
                            <a href="venue.php">Venue</a>
                        </li>
                        <li class="<?php echo (($basename == 'directions.php')?'active':'');?>">
                            <a href="directions.php">Directions</a>
                        </li>
                        <li class="<?php echo (($basename == 'contact.php')?'active':'');?>">
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>

                    <div id="menu_icon" class="hidden-lg-up">
                        <i class="fas fa-bars fa-fw"></i>
                    </div>

                </div>
            </header>
            <!-- Header: Menu + Logo -->