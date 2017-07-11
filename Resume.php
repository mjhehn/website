<?php
$pageName="Resume - Matt's Alcove ";
require('./common/config.php');
include('./common/navBox.php');
?>

<div class="content-wrap">
    <div class="content">
        <div class='row'>
            <div class='imgHeader'>
                <img src=<?php echo $path."assets/img/brand.svg"?> width="100" height="100">
            </div>
        </div>
        <div class="resumeHeader row">
            <div class='col-md-5 resumeHeaderName'>Matt Hehn</div>
            <div class='col-md-5 offset-md-2'>
                <div class='resumeHeaderlocation'>Fort Collins, CO, USA</div>
                <div class='resumeHeaderContact'>+1 (970) 460-6587</div>
                <div class='resumeHeaderContact'>mjh@matthehn.com</div>
            </div>
        </div>
        <div class='row'>
            <div class='resumeBlock firstBlock col-md-8'>
                Experience
            </div>
        </div>

        <div class='row'>
            <div class='resumeBlock secondBlock col-md-8 offset-md-4'>
                Education
            </div>
        </div>

        <div class='row'>
            <div class='resumeBlock technologiesBlock'>
                Technologies
            </div>
        </div>

        <div class='row'>
            <div class='resumeBlock achievementsBlock col-md-8 offset-md-2'>
                Achievements
            </div>
        </div>
        

    </div>
</div><!--content wrap-->


<?php
include('./common/footer.php');
?>