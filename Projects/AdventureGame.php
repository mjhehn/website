<?php
$pageName="Text Adventure - Matt's Alcove ";
include('../common/header.php');
?>

<div class="row" style="margin: .5em; text-align: center;">
        <div class="col-md-10 offset-md-1 flex-md-last flex-xs-first">
            <br><br><br><h2>A simple Adventure Game</h2><br>
            <p style="text-align: left">
                Built as the final project of my very first programming/logic course in C++ in late 2013. 
                <br>It was a very basic project, but was one of my first real opportunities to work with the idea of a simple game within the scope of my abilities at the time. 
                <br>All the information on rooms and scenarios were stored in simple text files, while the main executable contained functions for each room that would read the file. 
                <br>I wished not much later that I had learned more about object oriented programming a bit earlier and saved myself a lot of work.
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
        <button type="button" class="btn btn-outline-secondary">See Source</button>
    </div>
</div>


<?php
include('../common/footer.php');
?>