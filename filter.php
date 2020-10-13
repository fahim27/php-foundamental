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
                    <h3>Php  -Filter</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <?php
                                $str="<h2>I am learing php</h2>";
                                echo $str;

                                echo "<h3>Integer validation</h3>";

                                $int=20;
                                if(filter_var($int,FILTER_VALIDATE_INT)){
                                    echo $int ."is  integr";
                                }else{
                                    echo $int ."is not integr";
                                }

                                echo "<h3>Ip validation</h3>";

                                $ip='127.0.7.1:8000';
                                if(filter_var($ip,FILTER_VALIDATE_IP)){
                                    echo "$ip it's real ip address";
                                }else{
                                    echo "$ip it's not real ip address";

                                }


                            ?>
                        </div>
                        <div class="col-lg-4">
                        <h2>  Filter List </h2>
                            <?php
                                    foreach(filter_list() as $filter){
                                        echo $filter ."<br/>";
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