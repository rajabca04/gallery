
<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="" class="navbar-brand" style="color:white;">GaLlErY.ZoNe</a><button data-bs-target="#Upload" data-bs-toggle="modal" class="btn btn-outline-primary"style="margin-left:10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
</svg> Upload</button>
            <ul class="navbar-nav">

                
                <!--<button type="button" data-bs-target="#sign" data-bs-toggle="modal" class="btn btn-success"style="margin-left:10px;">Sign in</button>          
                <button type="button" data-bs-target="#signUp" data-bs-toggle="modal" class="btn btn-primary"style="margin-left:10px;">Sign Up</button>
                 -->
                <button type="button" data-bs-target="#seen" data-bs-toggle="modal" class="btn btn-outline-success"style="margin-left:10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
  <path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
</svg></button>
                 
            </ul>
        </div>    
    </nav>
    <!-- Modal of sign in -->
   <div class="container-fluid mt-2">
       <div class="row mt-2">
           <div class="col-lg-2">
               <div class="d-flex juistyfy-coatant-center">
               <div class="modal fade" id="sign">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form action="" method="post">
                                    <h1 style="text-align:center;">Login Your account</h1>

                                        <div class="mb-3">
                                            <label for="">Email:</label>
                                            <input type="email" name="email" placeholder="Enter you Email_id" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label for="">password:</label>
                                            <input type="password" name="password" placeholder="Enter your Password"class="form-control">
                                        </div>
                    
                                        <input type="send" value="Sign in" class="btn btn-success  w-100%">
                                </form>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Modal of sign up -->
    <div class="container-fluid mt-2">
       <div class="row mt-2">
           <div class="col-lg-2">
               <div class="d-flex juistyfy-coatant-center">
               <div class="modal fade" id="signUp">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form action="" method="post">
                                    <h1 style="text-align:center;">Sign up your account</h1>

                                        <div class="mb-3">
                                            <label for="">Name:</label>
                                            <input type="text" name="name" placeholder="Enter you name" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label for="">Email:</label>
                                            <input type="email" name="email" placeholder="Enter your email"class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">password:</label>
                                            <input type="password" name="password" placeholder="Enter your phone no."class="form-control">
                                        </div>
                    
                                        <input type="submit" name="put" value="Sign Up" class="btn btn-primary  w-100%">
                                </form>

                                <?php 
                                if(isset($_POST['put']))
                                {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];

                                    $connect = mysqli_connect('localhost','root','','gallery');

                                    $put = mysqli_query($connect,"INSERT INTO data(name,email,password) value ('$name','$email','$password')");
                                }
                                ?>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Modal of Uploding image -->
    <div class="container-fluid mt-2">
       <div class="row mt-2">
           <div class="col-lg-2">
               <div class="d-flex juistyfy-coatant-center">
                <div class="modal fade" id="Upload">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form action="index.php" method="post" enctype="multipart/form-data">
                                    <h1 style="text-align:center;">Uplode Your image.</h1>
                                        <div class="mb-3">                                          
                                            <input type="file" name="image" >
                                            <input type="submit" name="send" value="Upload" class="btn btn-success" >
                                        </div>
                                </form>
                                <?php   

                                    $connect = mysqli_connect('localhost','root','','gallery');
                                    if(isset($_POST['send']))
                                    {
                                    $image = $_FILES['image']['name'];
                                    $_tmp_img = $_FILES['image']['tmp_name'];
                                    move_uploaded_file($_tmp_img,"photos/$image");
                                    
                                    $up_cmd = mysqli_query($connect,"INSERT INTO data(image) value ('$image')");
                                    }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<img src="wall-2558279_1920.jpg" alt="" style="width:100%;">


<div class="container-fluid mt-2">
       <div class="row mt-2">
           <div class="col-lg-4">
               <div class="d-flex juistyfy-coatant-center">
                <div class="modal fade" id="seen">
                    <div class="modal-dialog mt-5">
                        <div class="modal-content">
                            <div class="modal-body bg-dark">
                            <div class="container mt-4">
                            <h3 style="text-align:center; color:red;">Your lovely photos.</h3>
                                <div class="row">

                            <?php $calling =  mysqli_query($connect,"select * from data");
                            while($a =mysqli_fetch_array($calling)): ?>

                            <div class="col-lg-4 mb-3">

                                <div class="card">
                                    <a href="zoom.php">
                                        <img src="<?php echo "photos/".$a['image']; ?>" alt="" class="w-100"style="height:100px;">
                                    </a>
                                </div>
                            </div>

                            <?php endwhile; ?>
                                </div>
                            </div>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

        
    
<!-- JavaScript Bundle with Popper -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>  
</body>
</html>