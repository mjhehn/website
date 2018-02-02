<!DOCTYPE html>
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
        <script src="https://use.fontawesome.com/a88a72f9af.js"></script>        
        
        <?php
            echo '<link rel="stylesheet" media="screen and (min-width: 0px) and (max-width: 991px)" href="'.$cssSmall.'">';
            echo '<link rel="stylesheet" media="screen and (min-width: 992px) and (orientation: landscape)" href="'.$cssLarge.'">';
            echo '<link rel="stylesheet" media="screen and (min-width: 992px) and (orientation: portrait)" href="'.$cssSmall.'">';
        ?>
        <link rel="apple-touch-icon" sizes="180x180" href=<?php echo $path."apple-touch-icon.png"?>>
        <link rel="icon" type="image/png" sizes="32x32" href=<?php echo $path."favicon-32x32.png"?>>
        <link rel="icon" type="image/png" sizes="16x16" href=<?php echo $path."favicon-16x16.png"?>>
        <link rel="manifest" href=<?php echo $path."manifest.json"?>>
        <link rel="mask-icon" href=<?php echo $path."safari-pinned-tab.svg"?> color="#5bbad5">
        <meta name="theme-color" content="#ffffff">
        <title><?php echo $pageName ?></title>
    </head>
    <body>
        <div class="bodyGrid">
                <div class="menu-wrap">
                    <nav class="menu">
                        <div class='image-container align-self-center justify-content-center'>
                            <a href=<?php echo $path."index.php"?>>
                                <img src=<?php echo $path."assets/img/brand.svg"?> width="100" height="100" alt="site logo & home link" title="Home">
                            </a>
                        </div>
                        <ul class='menu-list'>
                            <div class="accordion" id="accordionParent" role="tablist" aria-multiselectable="true">
                                <!-- <div class="sidebarLabel">Projects</div>
                                <hr /> -->
                                <a class="accordionButton" id="academiaAccordion" role="tab" href="#academiaCollapse" data-toggle="collapse" data-parent="#accordionParent" aria-expanded="false">For Academia <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <div class="collapse" role="tabPanel" id="academiaCollapse" aria-labelled-by="academiaAccordion">
                                    <a class="dropdown-item" href=<?php echo $path."Projects/LocalHost.php"?>>Sign Language VR <i class="fa fa-code" aria-hidden="true"></i> </a>
                                    <a class="dropdown-item" href=<?php echo $path."Projects/CS464.php"?>>CS464 UX Design <i class="fa fa-code" aria-hidden="true"></i> </a>
                                    <a class="dropdown-item" href=<?php echo $path."Projects/FatTireVR.php"?>>Fat Tire VR <i class="fa fa-code" aria-hidden="true"></i> </a>
                                </div>
                                <a class="accordionButton" id="funAccordion" role="tab" href="#funCollapse" data-toggle="collapse" data-parent="#accordionParent" aria-expanded="false">For Fun <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <div class="collapse" role="tabpanel" id="funCollapse" aria-labelled-by="funAccordion">
                                    <a class="dropdown-item" href=<?php echo $path."Projects/CombatDemo.php"?>>Turn-based Combat <i class="fa fa-code" aria-hidden="true"></i> </a>
                                    <a class="dropdown-item" href=<?php echo $path."Projects/DungeonCrawler.php"?>>Dungeon Crawler <i class="fa fa-code" aria-hidden="true"></i> </a>
                                    <a class="dropdown-item" href=<?php echo $path."Projects/AdventureGame.php"?>>Text Adventure <i class="fa fa-code" aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        <!-- <div class="sidebarLabel">Me</div>
                            <hr /> -->
                            
                            <a class="nav-link" href=<?php echo $path."Resume.php"?>>Resume <i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                            <a class="nav-link" href=<?php echo $path."Blog.php"?>>Blog <i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
                            <a class="nav-link" href=<?php echo $path."Contact.php"?>>Contact <i class="fa fa-user" aria-hidden="true"></i></a>
                        </ul>
                        
                    </nav>
                    <div class="miniFooter">
                            <div class="minifooterContent">
                                <a href="mailto:me@matthehn.com" alt="Email Matt"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a>
                                <a href="https://github.com/mjhehn" alt="Matt's Github"><i class="fa fa-github fa-lg" aria-hidden="true" ></i></a> 
                                <small>&nbsp &copy; 2018 Matt Hehn</small>
                            </div>
                        </div>
                    <button class="close-button" id="close-button">Close Menu</button>
                    
                </div>
                <!--Begin icon menu -->
                <div class="spacer"></div>
                <button class="menu-button" id="open-button" alt="open menu" title="Menu"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></button>
                <!--<a class="sideResumeButton" href=<?php echo $path."Resume.php"?> alt="Resume" title="Resume"><i class="fa fa-file-text-o" aria-hidden="true" alt="Resume"></i></a>-->
                <!--<a class="sideBlogButton" href=<?php echo $path."Blog.php"?> alt="Blog" title="Blog"><i class="fa fa-newspaper-o" aria-hidden="true" alt="Blog"></i></a>-->
                <a class="sideContactButton" href=<?php echo $path."Contact.php"?> alt="Contact Matt" title="Contact"><i class="fa fa-user fa-lg" aria-hidden="true" alt="Contact Matt"></i></a>
          

                <script>
                    $('#funAccordion').focus(function () {
                        $('#funAccordion').collapse('toggle');
                    });
                </script>