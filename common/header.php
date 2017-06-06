<html lang="en">
	<head>		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Matt Hehn's homepage">
        <meta name="keywords" content="Personal, Website, Design, Developer">
        <meta name="author" content="Matt Hehn">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet"> 
        <?php 
        $path = "http://localhost/MJHWebsite/";
        $css = $path.'common/custom.css';
        echo '<link rel="stylesheet" href='.$css.'>';
        ?>
        
        <link rel="apple-touch-icon" sizes="180x180" href=<?php echo $path."apple-touch-icon.png"?>>
        <link rel="icon" type="image/png" sizes="32x32" href=<?php echo $path."favicon-32x32.png"?>>
        <link rel="icon" type="image/png" sizes="16x16" href=<?php echo $path."favicon-16x16.png"?>>
        <link rel="manifest" href=<?php echo $path."manifest.json"?>>
        <link rel="mask-icon" href=<?php echo $path."safari-pinned-tab.svg"?> color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <title><?php echo $pageName ?></title>
            <nav class="navbar navbar-toggleable-md navbar-inverse">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href=<?php echo $path."index.php"?>><img src=<?php echo $path."assets/img/brand.svg"?> width="30" height="30" alt="site logo"><span class="title">Matt's Alcove</span></a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        <a class="nat-item nav-link" href=<?php echo $path."index.php"?>>Home</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarProjectDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
                            <div class="dropdown-menu" aria-labelled-by="navbarProjectDropdownMenuLink">
                                <a class="dropdown-item" href=<?php echo $path."Projects/JPTR.php"?>>Project JPTR</a>
                                <a class="dropdown-item" href=<?php echo $path."Projects/CS464.php"?>>CS464 Design Project</a>
                                <a class="dropdown-item" href=<?php echo $path."Projects/CT310.php"?>>CT310 Federated Project</a>
                            </div>
                        </li>
                        <a class="nat-item nav-link menu-item" href=<?php echo $path."About.php"?>>About</a>
                        <a class="nat-item nav-link menu-item" href=<?php echo $path."Contact.php"?>>Contact</a>
                    </ul>
                </div>
            </nav>
        </head>
    <body>
        <div id="navbarSpacer"></div>
  