<?php

require_once 'config/Config.php';



?>

<?php    
require_once 'kod.php';
?>


<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <link rel="Stylesheet" href="lightbox/css/lightbox.min.css">
    <title></title>
    
    <style>
            body {
        background-image: url(img/warsaw0.jpg);
        background-size: cover;
    }
    .startInfo{
        
        text-align: center;
        margin: 10px auto;
        width: 300px;
        padding: 10px 0;
    }
    
</style>
</head>



<body>

        <div id="reg" class="container" class="form-group row">
            <div class="row">
                

                <div class="container">
                    <div class="row">
                        <div >
                            <h3>CONTEST ABOUT WARSAW <img src="img/wersja1_pol.png" alt=""></h3>
                        </div>
                    </div>
                </div>

                            <div class="startInfo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, illum. </div>
                            <form action="" class="form-inline" method="get">

                <div id="form" class="col-sm-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-sm-offset-2">
                    <div class="form-group">
                        <label for="example-text-input" class="col-2 col-form-label">Please enter Your Code</label>
                        <div class="col-8">
                            <input class="form-control" id="example-text-input" name="your_code" placeholder="enter your code">
                        </div>
                    </div>


                    <div style="margin-left: 5px"class="form-group row">
                        <input type="submit" class="btn btn-info" name="submit1" value="Submit">
                    </div>
                </div>
    </form>
                <div class="startInfo">Cupiditate dolores, ad commodi alias accusantium reprehenderit, minima ab voluptates odit dignissimos at.</div>
                <!--<div class="startInfo">galeria</div>-->
                <table align="center" border="0">
  <tr> <td><a href="img/1.jpg" data-lightbox="warszawa" title="Warszawa1">
  <img src="img/1_min.jpg" /></a></td> <td><a href="img/2.jpg" data-lightbox="warszawa"><img src="img/2_min.jpg" /></a></td> <td><a href="img/3.jpg" data-lightbox="warszawa"><img src="img/3_min.jpg" /></a></td> </tr>
  <tr> <td><a href="img/4.jpg" data-lightbox="warszawa"><img src="img/4_min.jpg" /></a></td> <td><a href="img/5.jpg" data-lightbox="warszawa"><img src="img/5_min.jpg" /></a></td> <td><a href="img/6.jpg" data-lightbox="warszawa"><img src="img/6_min.jpg" /></a></td> </tr>
  <tr> <td><a href="img/7.jpg" data-lightbox="warszawa"><img src="img/7_min.jpg" /></a></td> <td><a href="img/8.jpg" data-lightbox="warszawa"><img src="img/8_min.jpg" /></a></td> <td><a href="img/9.jpg" data-lightbox="warszawa"><img src="img/9_min.jpg" /></a></td> </tr>
  </table>
 
 
  <script src="lightbox/js/lightbox-plus-jquery.min.js"></script>  
                
                
                
                <div class="startInfo">Cupiditate dolores, ad commodi alias accusantium reprehenderit, minima ab voluptates odit dignissimos at.</div>
                
                <div class="startInfo">
                <a href="#" text-align="center">Regulamin</a>
                <a href="#" text-align="center">Contact</a>
                </div>
            </div>

        </div>


        




               
                <div>
                    Contact: <br> Lorem ipsum 23 <br> 00-190 Warsaw <br>
                </div>

                <div>
                    © 2017
                </div>



            <!--</div>-->
        <!--</div>-->









<script>
    
$(function() {
    $('#second_question').hide();
    $('#first_question').change(function() {
        if ($(this).is(":selected")) {
            $('#second_question').hide();
        } else {
            $('#second_question').show();
        }
    });

});
   </script>

</body>

</html>

