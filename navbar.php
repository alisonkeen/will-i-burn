
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Will I Burn</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
<?php
if ( $_SERVER['PHP_SELF'] =='/index.php'){
echo "            <li class=\"active\"><a href=\"index.php\">Back to Start</a></li>";
}
else {
echo "            <li><a href=\"index.php\">Back to Start</a></li>";
}
if ( $_SERVER['PHP_SELF'] =='/results.php'){
echo "            <li class=\"active\"><a href=\"index.php\">Results</a></li>";
}else{
echo "            <li><a href=\"index.php\">Results</a></li>";
}
if ( $_SERVER['PHP_SELF'] =='/dev.php'){
echo "            <li class=\"active\"><a href=\"dev.php\">Development process</a></li>";
}else{
echo "            <li><a href=\"dev.php\">Development process</a></li>";
}

if ( $_SERVER['PHP_SELF'] =='/datasources.php'){
echo "            <li class=\"active\"><a href=\"datasources.php.php\">Data sources used</a></li>";
}else{
echo "            <li><a href=\"datasources.php\">Data sources used</a></li>";
}

if ( $_SERVER['PHP_SELF'] =='/findings.php'){
echo "            <li class=\"active\"><a href=\"findings.php\">Findings</a></li>";
}else{
echo "            <li><a href=\"findings.php\">Findings</a></li>";
}
if ( $_SERVER['PHP_SELF'] =='/about.php'){
echo "            <li class=\"active\"><a href=\"about.php\">About Team</a></li>";
}else{
echo "            <li><a href=\"about.php\">About Team</a></li>";
}
?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

