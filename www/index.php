<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>OpenCV Demo</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--<div class="bar"></div>-->
    <div class="main" id="main">
      <header>
        <h1>OpenCV Demo</h1>
        <h3><em>A demonstration of landscape recognition using OpenCV</em></h3>
      </header>
      <form action="upload.php" class="dropzone" id="imageUpload">
        <span class="dz-message">Drop image file here!</span>
      </form>
      <span class="progress" id="progressMessage">
        Processing the file...<img src="img/spinner.gif" class="progressImage">
      </span>
    </div>
    
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropzone.js"></script>
    <script>
      function loadImage(filename) {
        $.ajax({
          url: "getimage.php?filename="+filename,
          cache: false
        })
        .done(function(html) {
          // Hide progress message, add the result to the container div
          progressMessage.style.display = "none";
          $("#main").append(html);
        });
      }
      
      Dropzone.options.imageUpload = {
        paramName: "image",
        uploadMultiple: false,
        acceptedFiles: "image/*",
        init: function() {
          this.on("success", function(e, response) {
            // Hide the image uploader and show the progress thing
            imageUpload.style.display = "none";
            progressMessage.style.display = "inline";
            loadImage(response);
          });
        }
      };
    </script>
  </body>
</html>
