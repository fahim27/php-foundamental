
<?php
    spl_autoload_register(function($calss){
        include "./classes/".$calss.".php";
    });

    $user=new User();

   if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $id=$_POST['id'];

        $user->setName($name);
        $user->setEmail($email);
        $user->setPhone($phone);

        if($user->update($id)){
            echo "data updated successfully";
 
            
        }


    }

    if(isset($_GET['action']) && $_GET['action']=='edit'){
            $id=(int)$_GET['id'];
            $result=$user->edit($id);
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="row justify-content-center mt-5">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-header text-center">
                    <h3>OOP Crud</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">

                            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                <div class="form-group">
                                    <label>Name</label>
                                     <input type="hidden" value="<?php echo $result['id'] ?>" name="id" class="form-control">

                                    <input type="text" value="<?php echo $result['name'] ?>" name="name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" value="<?php echo $result['email'] ?>" name="email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" value="<?php echo $result['phone'] ?>" name="phone" class="form-control">
                                </div>

                                <input class="btn btn-primary btn-block" type="submit" value="submit" name="submit" />
                            </form>
                        </div>
                       
                    </div>
                </div>
                <div class="card-footer text-center">
                <h4>Pdo crud</h4>

                </div>
            </div>
        </div>
   </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
