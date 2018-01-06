<?php
$pageName="Text Adventure - Matt's Alcove ";
require('../common/config.php');
include('../common/navBox.php');
?>
<div class="grid-container">
    <div class="content">
        <div class="row" style="text-align: center;">
                <div class="col-md-10 offset-md-1 flex-md-last flex-xs-first">
                    <br><br><br><h2>A simple Adventure Game</h2><br>
                    <p style="text-align: left">
                        Turned in as the final project of my very first programming/logic course in C++ in late 2013, but built mostly for fun. 
                        <br><br>The game was honestly very basic, but was the first time I tried to work with the idea of a simple game within the scope of my abilities at the time. 
                        <br><br>All the information on rooms and scenarios were stored in simple text files, while the main executable contained functions for each room that would read the file. 
                        <br><br>I wished not much later that I had learned more about object oriented programming a bit earlier and saved myself a lot of work.
                        <br><br>
                    </p>
                </div>
        </div>
        <div class="row" style="margin: .5em; text-align: center;">
            <div class="offset-md-1 col-md-5">
                <br><img class="img-fluid" src="AdvGame1.png" alt="The start of the adventure">
            </div>
            <div class="col-md-5">
                <br><img class="img-fluid" src="AdvGame2.png" alt="The basic interaction of the game">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="card card-inverse">
                <a class="btn btn-outline-primary" role="button" href="https://github.com/mjhehn/CS116AdventureGame">See Source</a>
            </div>
        </div>
    </div>
</div><!--content wrap-->


<?php
include('../common/footer.php');
?>