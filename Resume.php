<?php
$pageName="Resume - Matt's Alcove ";
require('./common/config.php');
include('./common/navBox.php');
?>

<div class="content-wrap">
    <div class="content">
        <div class='resume'>
        <div class="resumeHeader">
            <div class="hidden-md-up">
                <div class="row">
                    <div class='imgHeader'>
                        <img src=<?php echo $path."assets/img/brand.svg"?> width="100" height="100">
                    </div>
                </div>
                <div class="row">
                    <div class='resumeHeaderName'>Matt Hehn</div>
                </div>
            </div>
            
            <div class="hidden-sm-down row">
                <div class="col-4 offset-4 row">
                    <div class='col-4 resumeHeaderNameCol'>Matt</div>
                    <div class='col-4 imgHeaderCol'>
                        <img src=<?php echo $path."assets/img/brand.svg"?> width="100" height="100">
                    </div>
                    <div class='col-4 resumeHeaderNameCol'>Hehn</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 offset-md-3 row">
                    <div class='col-md-4 col-10 offset-md-1 offset-1 resumeHeaderlocation'>Fort Collins, CO. <br>United States</div>
                    <div class='col-md-4 col-10 offset-md-2 offset-1'>
                        <div class='resumeHeaderContact'>+1 (970) 460-6587<br>mjh@matthehn.com</div>
                    </div>
                </div>
            </div>
        </div>
        <div class='resumeBody'>
            <div class='row'>
                <div class='resumeBlock firstBlock col-md-8'>
                    <div class="resumeBlockHeader">Experience</div>
                    <div class="row"><div class="col-8"><h4>RAMtech Lead Technologist</h4></div> <div class='col-4 duration'>Summer 2016-Winter 2017</div> <div class="offset-1 location">Colorado State University, Fort Collins CO.</div></div>
                    <div class="row"><div class="col-8"><h4>EasyTech Associate</h4></div><div class='col-4 duration'>Summer 2014-Fall 2016</div> <div class="offset-1 location"> Staples INC, Fort Collins CO.</div></div>
                    <div class="row"><div class="col-8"><h4>Contract Assembler</h4></div> <div class='col-4 duration'>Winter 2013 </div> <div class="offset-1 location">Ampt LLC, Fort Collins CO.</div></div>
                    <div class="row"><div class="col-8"><h4>Summer Program Instructor</h4></div> <div class='col-4 duration'>Summer 2012 </div> <div class="offset-1 location">Longs Peak Council, Greeley CO.</div></div>
                    <div class="row"><div class="col-8"><h4>Summer Program Instructor</h4></div> <div class='col-4 duration'>Summer 2011</div> <div class="offset-1 location">Longs Peak Council, Greeley CO.</div></div>
                </div>
            </div>

            <div class='row'>
                <div class='resumeBlock secondBlock col-md-8 offset-md-4'>
                    <div class="resumeBlockHeader">Education</div>
                    <div class="row"><div class="col-8"><h4>B.S. in Applied Computing Technology</h4></div> <div class='col-4 duration'>2015-2017</div> <div class="offset-1 col-5">Concentration in Human Centric Computing</div><div class="col-4 offset-2">Colorado State University</div></div>
                    <div class="row"><div class="col-8"><h4>Associates of Arts</h4></div> <div class='col-4 duration'>2012-2015</div> <div class="offset-1 col-5"></div><div class="col-4 offset-2">Front Range Community College</div></div>
                    <div class="row"><div class="col-8"><h4>Certification in Programming</h4></div> <div class='col-4 duration'>2012-2015</div> <div class="offset-1 col-5"></div><div class="col-4 offset-2">Front Range Community College</div></div>
                    <div class="row"><div class="col-8"><h4>H.S. Diploma</h4></div> <div class='col-4 duration'>2012-2015</div> <div class="offset-1 col-5"></div><div class="col-4 offset-2">Colorado Early College</div></div>
                </div>
            </div>

            <div class='row'>
                <div class='resumeBlock technologiesBlock col-md-8 offset-md-2'>
                    <div class="resumeBlockHeader">Technologies</div>
                    <div class="row">
                        <div class="col-3 offset-1">
                            <ul>
                                <li>C</li>
                                <li>C++</li>
                                <li>Java</li>
                                <li>Python</li>
                                <li>Visual Basic</li>
                                <li>Windows Forms</li>
                                <li>Eclipse Android Dev</li>
                            </ul>
                        </div>
                        <div class="col-3 offset-1">
                            <ul>
                                <li>HTML 5</li>
                                <li>JavaScript</li>
                                <li>PHP</li>
                                <li>Bootstrap</li>
                                <li>Apache</li>
                                <li>Some AWS</li>
                                <li>SQLite</li>
                                <li>mySQL</li>
                            </ul>
                        </div>
                        <div class="col-3 offset-1">
                            <ul>
                                <li>Vector Drawing Programs</li>
                                <li>Adobe Photoshop</li>
                                <li>Non-linear Video Editors</li>
                                <li>MS Office Suite</li>
                                <li>Unreal Engine 4</li>
                            </ul>
                        </div>
                </div>
            </div>

            <!--<div class='row'>
                <div class='resumeBlock achievementsBlock col-md-8 offset-md-2'>
                    <div class="resumeBlockHeader">Achievements</div>
                    <div class="row"><div class="col-8"><h4></h4></div> <div class='col-4 duration'></div> <div class="offset-1 location"></div></div>
                </div>
            </div>-->
        </div>
    </div>
</div><!--content wrap-->


<?php
include('./common/footer.php');
?>