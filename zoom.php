<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zoom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   

</head>
<body>
    
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <?php
                $con = mysqli_connect('localhost','root','','gallery');
                $calling = mysqli_query($con,"SELECT * FROM data");
                $a = mysqli_fetch_array($calling); ?>
                    <img src="<?php echo "photos/".$a['image']; ?>" alt="" class="w-100">
            </div>
        </div>
    </div>
</div>
    
</body>
</html>
