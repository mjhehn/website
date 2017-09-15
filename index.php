<?php
$pageName="Matt's Alcove";
require('./common/config.php');
include('./common/navBox.php');
?>

<div class="content-wrap">
    <div class="content">
        <br><br><br><br><br>
        <div class="row" style="text-align:  center;">
            <div class="col-md-5 offset-md-1 flex-md-last flex-xs-first">
                        <div style="padding-top: 3rem;">
                            <h2>I'm Matt Hehn</h2><br><h4> Soon-to-be holder of a Bachelors of Science <br>in <a href="https://www.cs.colostate.edu/cstop/csacademics/csdegrees/csbachelors/hccmajor.php">Applied Computing Technology, with a concentration in Human-Centric Computing</a>.<h4>
                            <h5>A student of UX design and research.</h5>
                        </div>
            </div> 
            <div class="offset-md-1 col-md-4 flex-md-first flex-xs-last align-self-center">
                <img class="rounded img-fluid" src="./assets/img/mwah.jpg" title="Never have been sure why I let them talk me into the whole 'mystery dinner' thing.">
            </div>
        </div>
        <div class="divider"></div>
        <div class="row" style="margin: 1em; text-align: left;">
            <div class="offset-md-1 col-md-4 offset-md-1 flex-first">
                <div style="padding-top: 3rem;">
                    <h5>I am passionate about exploring new ideas and technologies and how they can be better used by people, or how they can convey new ideas or tell new stories.</h5>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 flex-last align-self-center">
                <a href=<?php echo $path."Projects/FatTireVR.php"?>><img class="rounded img-fluid" src="./assets/img/vrhack.jpg" title="VR Hackathon"></a>
            </div> 
        </div>
    </div>
</div><!--content wrap-->

<?php
include('./common/footer.php');
?>