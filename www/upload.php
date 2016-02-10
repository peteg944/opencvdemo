<?php
  
  $sep = DIRECTORY_SEPARATOR;
  if(!empty($_FILES))
  {
    $filename = $_FILES['image']['tmp_name'];
    $targetPath = dirname(__FILE__).$sep."uploads".$sep; // current path + /uploads/
    $targetFile = $targetPath.$_FILES['image']['name'];
    move_uploaded_file($filename, $targetFile);
  }
  
  // Send back the filename so getimage.php knows what to load
  echo $_FILES['image']['name'];

?>
