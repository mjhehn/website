<?php
$pageName="Resume - Matt's Alcove ";
require('./common/config.php');
include('./common/navBox.php');
?>

<div class="grid-container">
    <div class="content">
        <div class='resume'>
            <div class="resumeHeader">
                <div class="row">
                    <div class='imgHeader'>
                        <img src=<?php echo $path."assets/img/brand.svg"?> width="100" height="100">
                    </div>
                </div>
                <div class='resumeHeaderName'>Matt Hehn</div>
                <div>Windsor, CO. United States</div>
                <div>mjh@matthehn.com</div>
            </div>
            <div class='resumeBody'>
                <div class='resumeBlock firstBlock'>
                    <div class="resumeBlockHeader">Experience</div>
                    <div class="row"><div class="col-8"><h4>RAMtech Technologist</h4></div> <div class='col-4 duration'>Summer 2016-Winter 2017</div> <div class="offset-1 location">Colorado State University, Fort Collins CO.</div></div>
                    <div class="row"><div class="col-8"><h4>EasyTech Associate</h4></div><div class='col-4 duration'>Summer 2014-Fall 2016</div> <div class="offset-1 location"> Staples INC, Fort Collins CO.</div></div>
                    <div class="row"><div class="col-8"><h4>Contract Hardware Assembly</h4></div> <div class='col-4 duration'>Winter 2013 </div> <div class="offset-1 location">Ampt LLC, Fort Collins CO.</div></div>
                    <div class="row"><div class="col-8"><h4>Summer Program Instructor</h4></div> <div class='col-4 duration'>Summer 2012 </div> <div class="offset-1 location">Longs Peak Council, Greeley CO.</div></div>
                    <div class="row"><div class="col-8"><h4>Summer Program Instructor</h4></div> <div class='col-4 duration'>Summer 2011</div> <div class="offset-1 location">Longs Peak Council, Greeley CO.</div></div>
                </div>

                
                <div class='resumeBlock secondBlock'>
                    <div class="resumeBlockHeader">Education</div>
                    <div class="row"><div class="col-8"><h4>B.S. in Computer Science</h4></div> <div class='col-4 duration'>2015-2017</div> <div class="offset-1 location">Colorado State University</div></div>
                    <div class="row"><div class="col-8"><h4>Associates of Arts</h4></div><div class='col-4 duration'>2012-2015</div> <div class="offset-1 location"> Front Range Community College</div></div>
                    <div class="row"><div class="col-8"><h4>Programming Certification</h4></div> <div class='col-4 duration'>2012-2015 </div> <div class="offset-1 location">Front Range Community College</div></div>
                    <div class="row"><div class="col-8"><h4>Diploma</h4></div> <div class='col-4 duration'>2012-2015 </div> <div class="offset-1 location">Colorado Early College</div></div>
                </div>
                

                <div class='resumeBlock technologiesBlock'>
                    <div class="resumeBlockHeader">Technologies</div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <ul>
                                <li>C</li>
                                <li>C++</li>
                                <li>Java</li>
                                <li>Python</li>
                                <li>Visual Basic</li>
                                <li>JavaScript</li>
                                <li>PHP</li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <ul>
                                <li>HTML 5</li>
                                <li>Bootstrap Framework</li>
                                <li>Apache Server</li>
                                <li>SQLite</li>
                                <li>mySQL</li>
                                <li>Minimal AWS</li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <ul>
                                <li>Vector Drawing Programs</li>
                                <li>Adobe Photoshop/Equivalents</li>
                                <li>Non-linear Video Editors</li>
                                <li>MS Office Suite</li>
                                <li>Intermediate IBM SPSS</li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <ul>
                                <li>Windows Operating Systems</li>
                                <li>Linux Operating Systems</li>
                                <li>Java Android Development</li>
                                <li>SteamVR Platform</li>
                                <li>Unreal Engine 4</li>
                            </ul>
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
    </div>
</div><!--content wrap-->


<?php
include('./common/footer.php');
?>