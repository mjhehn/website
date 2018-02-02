<?php
$pageName="RAMhack 2017 Submission - Matt's Alcove ";
require('../common/config.php');
include('../common/navBox.php');
?>

<div class="grid-container">
    <div class="content">
        <div class="grid-row-1">
                <div class="grid-item-1">
                    <br><br><br><span style="text-align: center"><h2>ASL VR Experience - RAMhack 2017 1st Place</h2></span><br>
                    <p style="text-align: left">
                        Team Localhost's submission for Colorado State University's 2017 Virtual Reality "RAMhack" hackathon. As per the guidelines of the hackathon and its contest, 'Fat Tire' was built by a four-person team over the course of 48 hours and was a concept promoting 'Scholarship, research, and community connection' in keeping with Colorado State University's Land-grant mission.
                        <br><br>Over the course of the weekend and with no experience with the relevant tools/languages, Team Localhost designed and developed a prototype learning tool which could recognize a set of American Sign Language hand signs and properly translate them into text. This text was displayed onscreen in a virtual environment alongside references to show users the correct signs they were trying to emulate. As a final demo of the intended concept, users were challenged to sign a word ("Bed"), and if they were able to successfully sign all three letters, a 3D model of a bed was spawned into the space to reinforce the meaning of the word.
                        
                        <br><br>The project won the team 1st place in the Hackathon and the associated grand prize sponsored by HP Inc. and Nvidia.
                        <br><br> 
                        <br>

                        Note: Video and more images of the prototype VR environment shall be forthcoming after we next get ahold of a Vive with a mounted Leap Motion.
                    </p>
                </div>
        </div>

        <div class="row justify-content-center">
            <div class="card card-inverse">
                <a role="button" class="btn btn-outline-primary" href="https://github.com/Benascor/CSU-VR-2017-Hackathon-Localhost">Project Github</a>
            </div>
        </div>

        <div class="grid-row-1">
                <div class="grid-item-1">
                    <br><br><br><span style="text-align: center"><h2>ASL Neural Network Classifier</h2></span><br>
                    <p style="text-align: left">
                        In an attempt to further the accuracy of the overall system, much of Team Localhost -who at the time was finishing up an Artificial Intelligence course and had to select a final project- opted to experiment with a transition to a neural network to identify alphabet signs. Due to the requirements of the AI course project being done in Python 3, we had to port our hand management to Python and reimplement our use of the Leap API before finally tackling the classifier network.
                        <br><br>
                        After development of the network, and developing a small dataset with which to train (as there wasn't much in the way of usable public data) the finally submitted network managed a total error of 0.0003 and a functional accuracy of about 90% after training once over our data set (which averaged 200 or so examples of each signable letter).
                        <br><br>
                        A Jupyter/iPython notebook of our findings and methods can be found on <a href = " https://github.com/mjhehn/Sign-Language-Neural-Network/blob/master/ASL%20Project%20Report.ipynb">GitHub</a>.
                    </p>
                </div>
        </div>
        <div class="row justify-content-center">
            <div class="card card-inverse">
                <a role="button" class="btn btn-outline-primary" href="https://github.com/mjhehn/Sign-Language-Neural-Network">Full Project</a>
            </div>
        </div>
        <br><br>
    </div>
</div><!--content wrap-->

<?php
include('../common/footer.php');
?>