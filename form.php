
 <?php

$nameError='';
$webError='';
if($_SERVER['REQUEST_METHOD']=='POST'){


  if(empty($_POST['name'])){
    $nameError="Name field is required";
  }else{
    $name=validation($_POST['name']);

  }

  if(empty($_POST['website'])){

    $webError="Name field is required";

   
  }
  elseif(!filter_var($_POST['website'],FILTER_VALIDATE_URL)){
    $webError="Invalid formate";
  }
  else{
    $website=validation($_POST['website']);


  }
$emai=validation($_POST['email']);
$comment=validation($_POST['comment']);
//  $gender=validation($_POST['gender']);

//echo $name;


////echo $name;



}

function validation($data){

  $data=trim($data);
 // $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;

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
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Php  -get data from form</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-8">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name"/>
                              <?php
                                if(!empty($nameError)){
                                  echo "<p>$nameError</p>";

                                }
                              ?>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" type="email"/>
                        </div>

                        <div class="form-group">
                            <label>Website</label>
                            <input class="form-control" name="website" type="text"/>
                            <?php
                                if(!empty($webError)){
                                  echo "<p>$webError</p>";

                                }
                              ?>
                        </div>
                        <div class="form-group">
                            <label>Comment</label>
                            <textarea class="form-control" name="comment" ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Gender</label><br/>
                          <label>  <input name="gender" value="male" type="radio"/>Male</label><br/>
                           <label> <input  name="gender" value="Female" type="radio"/>Famel</label>

                        </div>

                        <button class="btn btn-block btn-info" type="submit">Submit</button>
                   </form>
                    </div>
                    <div class="col-lg-4">
                      <?php
                        if(!empty($name)){
                          echo $name;
                        }
                      ?>
                    </div>
                  </div>
                   

                 
                </div>
                <div class="card-footer text-center">
                <h4>Php Foundamental</h4>

                </div>
            </div>
        </div>
   </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>