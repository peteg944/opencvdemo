<?php

  $sep = DIRECTORY_SEPARATOR;
  if(!empty($_GET))
  {
    $filename = $_GET['filename'];
    $filepath = "uploads".$sep.$filename; // uploads/filename
    
    // Run the opencv program
    $pathToOpencv = dirname(__FILE__)."/processimage";
    $result = exec($pathToOpencv." ".$filepath);
    
    // Check the result
    if(strpos($result, "Success") !== false)
    {
      echo "<a href=\"/\">Try another</a><br>";
      echo "<img src=\"".$filepath."\" class=\"outputImage\">";
    }
    else
      echo "<strong>Error occurred! Uh oh</strong>";
  }

?>
