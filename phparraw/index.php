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
                    <h3>Php  -Arraw</h3>
                </div>
                <div class="card-body">
                   
                  <?php
                  
                  $teachers=array(
                    array(
                      'name'=>'fahim',
                      'age'=>20
                    ),

                    array(
                      'name'=>'tamim',
                      'age'=>16
                    ),

                    array(
                      'name'=>'al amin',
                      'age'=>26
                    ),
                  );



                  $age=array(
                    'fahim'=>'10',
                    'tamim'=>'20'
                  );


               //   print_r($age);

                  
                  //print arraw value inside multi dimension arraw
                  for($i=0;$i<count($teachers);$i++){
                    foreach($teachers[$i] as $k=> $teacher){
                          echo $k.' => '.$teacher .'<br/>';
                      }
                   }

                   $cities=array(

                      array(
                        'id'=>1,
                        'name'=>'sylhet',
                        'cost'=>120
                      ),

                      array(
                        'id'=>2,
                        'name'=>'sunamgonj',
                        'cost'=>240
                      ),

                      array(
                        'id'=>3,
                        'name'=>'dhaka',
                        'cost'=>50
                      ),


                    );
                  
                    //select a specific colunm from a multidimens arraw using arraw column method;
                   $cost=array_column($cities,'cost');
                    print_r($cost);
                   $sum=summation($cost);
                    echo "==". $sum;  
                   function summation($cost){

                    $total=0;
                    for($i=0;$i<count($cost);$i++){
                        $total+=$cost[$i];
                    }
                    return $total;

                   };


                   //arraw combainer method

                   $name=array('fahim','shimul','juwel');
                   $district=array('sunamgonj','moulvibazar','hobigonj');
                   
                   $name_distrit=array_combine($name,$district);

                   print('<pre>');
                   print_r($name_distrit);
                   print('</pre>');



                   //array count value

                   $count_value=array('1','2','2','2','2','3','4');

                   print('<pre>');
                   print_r(array_count_values($count_value));
                   print('</pre>');



                   //get the differnce between arraw

                   $arrw_one=array(
                     'r'=>'red',
                     'g'=>'green',
                     'w'=>'white',
                     'o'=>'orage'
                   );


                   $arrw_two=array(
                    'r'=>'red',
                 //   'g'=>'green',
                    'w'=>'white',
                    'o'=>'orage'
                  );

                  $arrw_three=array(
                    'r'=>'red',
                 //  'g'=>'green',
                   // 'w'=>'white',
                    'o'=>'orage'
                  );

                   print('<pre>');
                   print_r(array_diff($arrw_one,$arrw_two,$arrw_three));
                   print('</pre>');
                     
                  ?>

                  
                </div>
                <div class="card-footer text-center">
                <h4>Php Arraw</h4>

                </div>
            </div>
        </div>
   </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>