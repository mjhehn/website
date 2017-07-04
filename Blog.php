<?php
$pageName="Scribbles of the Alcove";
include('./common/navBox.php');
?>

<div class="content-wrap">
    <div class="content">
       
       <?php
		$currentPost = array();
		if(isset($_GET['post']))
		{
			$currentPost = filter_var($_GET['post'], FILTER_SANITIZE_STRING);
			if($currentPost)
			{
				//output the post from file
				echo "<p>WHOOOOOOOOOOOOO, A POST</p><br>";
				$currentPost = file($path."/posts/".$currentPost.".md");
				
				if($currentPost != false)
				{
					$title = array_shift($currentPost);
					$date = array_shift($currentPost);

					echo "<div class='post'>";
						echo "<div class='postHeader'>";
							echo "<h2>".$title."</h2><br>";
							echo "<h4>".$date."</h4><br>";
						echo "</div";
					if(is_array($currentPost))
					{
						foreach ($currentPost as $line)
						{
							echo $line."<br>";
						}
					}
					else
					{
						echo $currentPost."<br>";
					}
					echo "</div>";
				}
				else
				{
					echo "The post is a lie<br>";
				}
			}
			else
			{
				//invalid post
				echo "<p>invalid post</p><br>";
			}
		}
		else
		{
			//output default post listings
			echo "<div class='blogList'>listy things</div><br>";
		}
		
		?>
        blog things!
        </div>
</div><!--content wrap-->


<?php
include('./common/footer.php');
?>