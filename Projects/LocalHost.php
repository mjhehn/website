<?php
$pageName="RAMhack 2017 Submission - Matt's Alcove ";
require('../common/config.php');
include('../common/navBox.php');
?>
<!-- TODO: update with neural net implementation -->
<div class="content-wrap">
    <div class="content">
        <div class="row" style="text-align: center;">
                <div class="col-md-10 offset-md-1 flex-md-last flex-xs-first">
                    <br><br><br><h2>'ASL VR Experience - RAMhack 2017 1st Place</h2><br>
                    <p style="text-align: left">
                        Team Localhost's submission for Colorado State University's 2017 Virtual Reality "RAMhack" hackathon. As per the guidelines of the hackathon and its contest, 'Fat Tire' was built by a four-person team over the course of 48 hours and was a concept promoting 'Scholarship, research, and community connection' in keeping with Colorado State University's Land-grant mission.
                        <br><br>Over the course of the weekend, Team Localhost designed and developed a prototype learning tool which could recognize a set of American Sign Language hand signs and properly translate them into text. This text was displayed onscreen in a virtual environment alongside references to show users the correct signs they were trying to emulate. As a final demo of the intended concept, users were challenged to sign a word ("Bed"), and if they were able to successfully sign all three letters, a 3D model of a bed was spawned into the space to reinforce the meaning of the word.
                        
                        <br>
                        <br>
                        The project won the team 1st place in the Hackathon.
                        <br>
                        In future, the team aims to expand the range of characters, words, and phrases recognized by the system through revamping the comparison logic of the prototype and building up a neural net rather than a simplistic reference file 'dictionary'.
                        <br>

                        Note: This page is in-progress. Video and more images of the prototype will be up soon, along with project files and a fork of the project to further improve the prototype.
                    </p>
                </div>
        </div>

        <div class="row justify-content-center">
            <div class="card card-inverse">
                <a role="button disabled" class="btn btn-outline-primary" href="https://github.com/mjhehn/VRFatTire">See Project</a>
            </div>
        </div>
    </div>
</div><!--content wrap-->

<?php
include('../common/footer.php');
?>