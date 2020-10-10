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
                    <h3>Php arraw</h3>
                </div>
                <div class="card-body">
                    <?php

                    //php arraw
                    //php is one kind of container where we are store different type of data at a time and together.
                    //php arraw is 3 kind of
                    //  1.Index arraw
                    //  2.associative arraw
                    //  3.Multi dimenssion arraw 


                    // we are show example of all kine of arraw below



                    //.....index arraw
                    echo "<b>Index arraw</b><br/>";
                    $index_arraw=array('1','2','3','4');
                    $index_arraw_length=count($index_arraw);
                    
                   // echo $index_arraw[0];
                    for($i =0; $i < $index_arraw_length;$i++){

                      echo "$index_arraw[$i] <br>";

                    }

                    //associative arraw
                    // when are difned arraw index the we are called this is associative arraw
                    echo "<b>associative arraw</b><br/>";

                    $student=[
                      'toufiq'=>1,
                      'Fahim'=>3,
                      'Shimul'=>5,
                     

                    ];
                   // ksort($student);

                    foreach($student as $key=> $student){
                      echo  "$key-$student <br>";
                    }


                     //multi dimenssion arraw
                    // multi dimenssion arraw mean arraw inside arrwa. when a arraw store anather arraw that's we are called multidimension arraw;
                    echo "<b>multi dimonseions arraw arraw</b><br/>";

                    $teachers=[
                      array(1,2,3),
                      array(2,3,1)
                    ];

                  //  echo count($teachers);
                   for($k=0;$k < count($teachers);$k++){

                     $count=count($teachers[$k]);
                     
                     for($a=0; $a <$count;$a++){
                        echo $teachers[$k][$a] .'<br/>';
                     }
                   };
                          



                    ?>
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