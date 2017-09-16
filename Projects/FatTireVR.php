<?php
$pageName="CSU VR Hackathon 2016: Fat Tire - Matt's Alcove ";
require('../common/config.php');
include('../common/navBox.php');
?>

<div class="content-wrap">
    <div class="content">
        <div class="row" style="text-align: center;">
                <div class="col-md-10 offset-md-1 flex-md-last flex-xs-first">
                    <br><br><br><h2>'Fat Tire' VR - RAMhack 2016</h2><br>
                    <p style="text-align: left">
                        Team Ballmer Peak's submission for Colorado State University's first Virtual Reality RAMhack. As per the guidelines of the hackathon and its contest, 'Fat Tire' was built by a five-person team over the course of 72 hours and was a concept promoting 'Scholarship, research, and community connection'.
                        <br><br>'Fat Tire' in design was intended to be a driving simulator with two potential applications:
                        <li>Further expand on the capabilities of the driving simulator used by some of CSU's cognitive psychology researchers by making it cheaper and easier to run, but with more flexiblity in what sorts of metrics can be gathered. Secondary controllers were used to simulate existing research methods used to simulate distracted driving in the simulator.</li>
                        <br><li>Provide an educational/community service by allowing users to experience and quantify how alcohol or similar substances might influence their driving ability. (through random slightly delayed control reactions, instability in the virtual camera. In more extreme modes, forced 'heavy blinking' and FOV shifts included)</li>
                    </p>
                </div>
        </div>
        <div class="row" style="margin: .5em; text-align: center;">
            <div class="offset-md-3 col-md-6">
                <br><img class="img-fluid img-responsive" src="../assets/img/vrhack.jpg" alt="The start of the adventure">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="card card-inverse">
                <a role="button" class="btn btn-outline-primary" href="https://github.com/mjhehn/VRFatTire">See Project</a>
            </div>
        </div>

         <div style="margin: .5em; text-align: center;">
            *Do note that the wobble and other effects are not well represented on a monitor in comparison how they are experienced in the headset.
        </div>
    </div>
</div><!--content wrap-->

<?php
include('../common/footer.php');
?>