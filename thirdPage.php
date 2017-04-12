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

                            <div class="startInfo">Thank You for registration in contest About Warsaw!</div>

                <div class="startInfo">Zapisane dane użytkownika(to co w mailu</div>
                
                
                
                <div class="startInfo">Wysłaliśmy do Ciebie maila</div>
                <div class="startInfo">galeria</div>
                
                <a href="#" text-align="center">Regulamin</a>
                <a href="#" text-align="center">Contact</a>
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
