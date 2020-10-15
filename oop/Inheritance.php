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
                    <h3>Php Inhertance</h3>
                </div>
                <div class="card-body">
                    <?php
                    
                        class Scholl {

                           public $name="";

                           public function __construct($name)
                           {
                               $this->name=$name;
                           }
                            public function SchollName(){
                                echo "this scholl name is ".$this->name;
                            }
                        };

                        class SchoolLocation extends Scholl{

                            public $lo="";
                            public function location(){
                                echo "this scholl name is.". $this->name . "and school location is " .$this->lo;
                            }
                        }

                      //  $scholl=new Scho ll("ahh high scholl");
                        $s=new SchoolLocation("ahh high scholl");
                        $s->lo="derai sunamgonj";
                        $s->location();

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