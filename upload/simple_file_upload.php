<?php
  if (isset($_FILES['file'])) {
    $file= $_FILES['file'];
    $file_name= $file['name'];
    $file_tmp= $file['tmp_name'];
    if (!file_exists('all_files')) {
      mkdir('all_files');
    }
    $destination = 'all_files/' . $file_name;
    move_uploaded_file($file_tmp, $destination);
  
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload file</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
 <div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h2>upload file</h2>
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data"> 
        <div class="form-group">
          <label for="file">File</label>
          <input type="file" name="file" id="file" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-outline-info">upload file</button>
        </div>
      </form>
    </div>
  </div>
 </div> 
</body>
</html>