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

  <div class="offset-sm-6 col-sm-1">
    <ol class="breadcrumb">
      <a href="mailto:arsene@protonmail.com" alt="Email Matt"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a>
      <a href="https://github.com/mjhehn" alt="Matt's Github"><i class="fa fa-github fa-lg" aria-hidden="true" ></i></a> 
  </div>
  <div class="col-sm-2">
    <ol class="breadcrumb">
     &copy; 2017 Matt Hehn</ol>
  </div>

</div>
</footer