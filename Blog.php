<?php
$pageName="Blog - Matt's Alcove ";
require('./common/config.php');
include('./common/navBox.php');
include('./lib/Parsedown.php')
?>
<div class="grid-container">
    <div class="content">
        <div class="grid-row-1">
            <div class="grid-item-1">
                <?php
                    if(isset($_GET["entry"]))
                    {
                        $blogEntry = filter_Var($_GET["entry"], FILTER_SANITIZE_STRING);
                        //get page content of the item
                        echo "<a href=Blog.php>"."back"."</a>";
                        
                        $testPage = file_get_contents($keybaseBlogPath.$blogEntry);
                        echo ParseDown::instance()->text($testPage);
                    }
                    else
                    {
                        $blogListRaw = file_get_contents($keybaseBlogPath);
                        $blogList = explode(";", $blogListRaw);
                        foreach ($blogList as $blogEntry)
                        {
                            $blogTags = explode(",", $blogEntry);
                            $blogDate = $blogTags[0];
                            $blogTitle = preg_replace('/\.[^.]+$/', '', $blogTags[1]);  //https://stackoverflow.com/a/2395905
                            $blogTitle = preg_replace('/-/', ' ', $blogTitle); 
                            echo "<a href=Blog.php?entry=".$blogTags[1].">";
                            echo "<h3>".$blogTitle."</h3><h5>".$blogDate."</h5>";
                            echo "</a>";
                        }
                    }
                ?>
            </div>
        </div>
        <div class="blogFooter">Served out of the KeyBase File System at https://mjhehn.keybase.pub/blogPosts/, signed by <a href=https://keybase.io/mjhehn>me</a>.</div>
    </div>
</div><!--content wrap-->

<?php
include('./common/footer.php');
?>