<br><br><br>
</body>
<footer>
<div class="row">
  <div class="col-sm-3">
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
  </div>
    <div class="offset-sm-5 col-sm-2">
    <ol class="breadcrumb">Icons for github, social</ol>
  </div>
  <div class="col-sm-2">
    <ol class="breadcrumb">&copy; 2017 Matt Hehn</ol>
  </div>

</div>
</footer