<?php 
$message = '';
if (isset($_FILES['image'])) {
  $file = $_FILES['image'];
  $name= $file['name']; //jahed.jpg
  $exploded_name=explode('.', $name); //['jahed','jpg']
  $source = $file['tmp_name'];
  $extension= end($exploded_name); //jpg
  $supported_extensions =['jpg','JPG','jpeg','gif'];

  if (in_array($extension, $supported_extensions)) {
    move_uploaded_file($source, 'up_image/'.$name);
    $message="Your picture uploaded successfully";
  }else{
    $message="Please upload only image file";
  }

}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>    
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h2>upload image</h2>
      </div>
      <div class="card-body">
        <?php if (!empty($message)): ?>
          <div class="alert alert-info">
            <?= $message; ?>
          </div>
        <?php endif ?>

        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="image">Image Upload</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Upload</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>