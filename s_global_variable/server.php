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
                    <h3>Php $_SERVER</h3>
                </div>
                <div class="card-body">
                    <?php

                     //$_SERVER is a php super global variable
                     //which store about headers, paths, and script locations,fil name, folder name, borwser and etc... 


                     echo "<b>File Name :</b>". $_SERVER['PHP_SELF'] ."<br/>";   //return current file name
                     echo "<b>Server Name :</b>". $_SERVER['SERVER_NAME'] ."<br/>";  //return serve name
                     echo "<b>Device Information :</b>". $_SERVER['HTTP_USER_AGENT'] ."<br/>" ; //return serve name
                     echo "<b>Server Ip Address :</b>". $_SERVER['SERVER_ADDR'] ."<br/>" ; //return serve ip address
                     echo "<b>Request method :</b>". $_SERVER['REQUEST_METHOD'] ."<br/>" ; //return REQUEST method,such as get,post etc..




                    ?>
                </div>
                <div class="card-footer text-center">
                <h4>Php Super Global Variable</h4>

                </div>
            </div>
        </div>
   </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>