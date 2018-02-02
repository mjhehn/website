<?php
$pageName="Matt's Alcove";
require('./common/config.php');
include('./common/navBox.php');
?>
<!--<p class=alert>Content updates and migration to CSS Grid in progress. Please pardon the dust.</p>-->
<div class="grid-container">
    <div class="content">
        <div class="grid-row-2">
            <div class="grid-item-1">
                <div class="img-wrapper">
                    <img class="img-rounded" src="./assets/img/mwah.jpg" title="Never have been sure why I let them talk me into the whole 'mystery dinner' thing.">
                </div>
            </div>

            <div class="grid-item-2" style="margin-top: 6rem;">
                <h2>I'm Matt Hehn</h2><br>
                <h5>A programmer and lifelong tinkerer, I finished my Bachelors of Science in Computer Science and Human-Centric Computing in late 2017 and am currently seeking somewhere to use my talents.</h5>
            </div> 
        </div>
        <div class="divider"></div>
        <div class="grid-row-2">
            <div class="grid-item-1">
                <h5>I am passionate about exploring new ideas and technologies and how they can be better used by people, how technology can help convey new ideas, or how it can tell new stories. More generally though, I just enjoy programming and problem solving.</h5>
            </div>
            <div class="grid-item-2">
                <div class="img-wrapper">
                    <a href=<?php echo $path."Projects/FatTireVR.php"?>><img src="./assets/img/vrhack.jpg" class="img-rounded" title="VR Hackathon"></a>
                </div>
            </div> 
        </div>
    </div>
</div><!--content wrap-->

<?php
include('./common/footer.php');
?>