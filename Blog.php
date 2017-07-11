<?php
$pageName="Scribbles of the Alcove";
require('./common/config.php');

$currentPost = false;
if(isset($_GET['post'])) 	//is there a requested post
{
	$currentPost = array();
	$currentPost = filter_var($_GET['post'], FILTER_SANITIZE_STRING);
	if($currentPost) 	//is it a legit post name
	{
		//output the post from file
		$currentPost = file_exists("./posts/".$currentPost.".md");
		if($currentPost) 	//does it actually exist
		{
			$currentPost = $path."posts/".$currentPost.".md";
		}
		else
		{
			header( 'refresh:3; url='.$path.'Blog.php' ) ;
			echo "<p class='alert'>The post is a lie (does not exist). Redirecting to default listing.<p><br>";
		}
	}
	else
	{
		//invalid post
		header( 'refresh:3; url='.$path.'Blog.php' );
		echo "<p class='alert'>Invalid post. Redirecting to default blog page</p><br>";
	}
}
else
{
	//nada. run as normal
}

function printPost($thePost)
{
	$linkPost = "Blog.php?post=".basename($thePost, ".md");
	$thePost = file($thePost);
	$postTitle = array_shift($thePost);
	$postDate = array_shift($thePost);
	
	echo "<div class='post'>";
		echo "<div class='postHeader'>";
			echo "<div class='postTitle'><a href=".$linkPost.">".$postTitle."</a></div>";
			echo "<div class='postDate'>".$postDate."</div>";
		echo "</div>";
		echo "<div class='postBody'>";
			if(is_array($thePost))
			{
				foreach ($thePost as $line)
				{
					echo $line."<br>";
				}
			}
			else
			{
				//echo $thePost."<br>";
			}
		echo "<br><br></div>";
	echo "</div>";
}

include('./common/navBox.php');
?>

<div class="content-wrap">
    <div class="content">
       <div class="blog">
			<?php
				if($currentPost)
				{
					printPost($currentPost);
				}
				else
				{
					//output list of posts
					foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.\posts')) as $filename)
					{
						// filter out "." and ".."
						if ($filename->isDir()) continue;
						printPost($filename);
					}
				}
			?>

			blog things!
		</div>
    </div>
</div><!--content wrap-->


<?php
include('./common/footer.php');
?>