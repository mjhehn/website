<?php
$pageName="Matt's Alcove";
require('./common/config.php');
include('./common/navBox.php');
?>
<div class="grid-container">
    <div class="content">
        <div class="grid-row-2">
            <div class="grid-item-1">
                <div class="img-wrapper">
                    <img class="img-rounded" src="./assets/img/mwah.jpg" title="Never have been sure why I let them talk me into the whole 'mystery dinner' thing.">
                </div>
            </div>

            <div class="grid-item-2">
                <h2>I'm Matt Hehn</h2><br>
            </div> 
        </div>
        <div class="divider"></div>
        <div class="grid-row-2">
            <div class="grid-item-1">
                <h5>I am passionate about exploring new ideas and technologies and how they can be better used by people, how they can convey new ideas, or how they can tell new stories. More generally though, I just enjoy programming.</h5>
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