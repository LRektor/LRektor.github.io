<!Doctype HTML>
<?php
  if(isset($_GET["priv"])){
    echo($_GET["priv"]);
  }else{
    echo("No URL Param");
  }
?>
