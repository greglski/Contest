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
    <title></title>
    
    <style>
            body {
        background-image: url(img/warsaw0.jpg);
        background-size: cover;
    }
    .startInfo{
        
        /*text-align: center;*/
        margin: 10px auto;
        width: 200px;
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

                            <div class="startInfo">fgffgfgfgfgfgfgfgfgfgfgfgfgfgf</div>
                <form action="" class="form-inline" method="post">

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
                <div class="startInfo">fgffgfgfgfgfgfgfgfgfgfgfgfgfgf</div>
                <div class="startInfo">galeria</div>
                
                
                
                <div class="startInfo">fgffgfgfgfgfgfgfgfgfgfgfgfgfgf</div>
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

