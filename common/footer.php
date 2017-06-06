<br><br><br>
</body>
<footer>
<span style="float:right; padding-right: 1em"><ol class="breadcrumb">&copy; 2017 Matt Hehn</ol></span>
<span style="float:right; padding-right: 1em"><ol class="breadcrumb">Icons for github, social media/whatever</ol></span>
<ol class="breadcrumb">
  <?php
    $host = $_SERVER['HTTP_HOST'];
    $currentPath = $_SERVER['SCRIPT_NAME'];
    $path = explode("/", $currentPath);
    $current = array_pop($path); //array_pop($path), or return the pagename
    $current = $pageName;
    foreach ($path as $step)
    {
      echo '<li class="breadcrumb-item">'.$step.'</li>';
    }
    echo '<li class="breadcrumb-item active">'.$current.'</li>';
    ?>
</ol>
</footer>