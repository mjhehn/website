<?php
$pageName="Basic Dungeon Crawler - Matt's Alcove ";
require('../common/config.php');
include('../common/navBox.php');
?>
<div class="content-wrap">
    <div class="content">
        <div class="row" style="text-align: center;">
                <div class="col-md-10 offset-md-1 flex-md-last flex-xs-first">
                    <br><br><br><h2>A simple Dungeon Crawler Game</h2><br>
                    <p style="text-align: left">
                        Built as part of a 24hr Hackathon at FRCC in C++ in 2014, and refined somewhat to be submitted as my final project that semester.
                        <br>It was a very basic project, given that we had no real graphical capacity outside of the terminal 
                        <br>It was also one of our first larger scale group projects done with more object oriented programming (and what then I considered a lot of inheritance).
                        <br><br>This is still one of the general designs on a conceptual level that I like (or at least, I like it in a small codebase) <br> in regards to how multiple inheritance was used to easily spin up both character classes and enemy NPCs.
                        <br><br>
                    </p>
                </div>
        </div>
        <!--<div class="row" style="margin: .5em; text-align: center;">
            <div class="offset-md-1 col-md-5">
                <br><img class="img-fluid" src="AdvGame1.png" alt="The start of the adventure">
            </div>
            <div class="col-md-5">
                <br><img class="img-fluid" src="AdvGame2.png" alt="The basic interaction of the game">
            </div>
        </div>-->

        <div class="row justify-content-center">
            <div class="card card-inverse">
                <a class="btn btn-outline-secondary" role="button" href="https://github.com/mjhehn/HackathonDungeonCrawler/">See Source</a>
            </div>
        </div>
    </div>
</div><!--content wrap-->

<?php
include('../common/footer.php');
?>