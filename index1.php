<?php

require_once 'config/Config.php';



?>



<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title></title>
    <style>
    fieldset {
    width: 500px;
    display: block;
    background-color: aquamarine;
    border-radius: 10px;
/*    margin: 2em auto;*/
}
</style>
</head>

    
    
<?php    
    
require_once 'kod.php';


?>
    
    

    
<body>
    <div><?php unset($walidacja);
echo $wyslana;?></div>
    
    <form method="post">

 <div id="reg" class="container" class="form-group row">
  <div class="row">
   <div class="col-sm-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-sm-offset-2" ><h3><p>KONKURS O WARSZAWIE</p></h3></div>
<!-- <div class="col-sm-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-sm-offset-2" ><img src="img/logo-facebook.png" alt=""></div> -->


 
  <div id="form" class="col-sm-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-sm-offset-2">
   <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Your Name</label>
  <div class="col-10">
    <input class="form-control" type="Name" value="" name="name" id="name">
  </div>
</div>


<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Your surname</label>
  <div class="col-10">
    <input class="form-control" type="search" value="" name="surname" id="surname">
  </div>
</div>
<!--

<div class="form-group row">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Date of birth</label>
  <div class="col-10">
    <input class="form-control" type="date" value=""  id="birth">
  </div>
</div>
-->

<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Day of your birth</label>
  <div class="col-10">
    <select class="form-control"  id="day" name="day" class="input-xlarge">
                            <option value="" selected="selected">Day</option>
                            <option value="01">01</option>
                           <option value="02">02</option>
                           <option value="03">03</option>
                           <option value="04">04</option>
                           <option value="05">05</option>
                           <option value="06">06</option>
                           <option value="07">07</option>
                           <option value="08">08</option>
                           <option value="09">09</option>
                           <option value="10">10</option>
                           <option value="11">11</option>
                           <option value="12">12</option>
                           <option value="13">13</option>
                           <option value="14">14</option>
                           <option value="15">15</option>
                           <option value="16">16</option>
                           <option value="17">17</option>
                           <option value="18">18</option>
                           <option value="19">19</option>
                           <option value="20">20</option>
                           <option value="21">21</option>
                           <option value="22">22</option>
                           <option value="23">23</option>
                           <option value="24">24</option>
                           <option value="25">25</option>
                           <option value="26">26</option>
                           <option value="27">27</option>
                           <option value="28">28</option>
                           <option value="29">29</option>
                           <option value="30">30</option>
                           <option value="31">31</option>
    </select>
  </div>
</div>


<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Month of your birth</label>
  <div class="col-10">
    <select class="form-control"  id="month" name="month" class="input-xlarge">
                            <option value="" selected="selected">Month</option>
                            <option value="01">January</option>
                           <option value="02">February</option>
                           <option value="03">March</option>
                           <option value="04">April</option>
                           <option value="05">May</option>
                           <option value="06">June</option>
                           <option value="07">July</option>
                           <option value="08">August</option>
                           <option value="09">September</option>
                           <option value="10">October</option>
                           <option value="11">November</option>
                           <option value="12">December</option>
                       
    </select>
  </div>
</div>



<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Year of your birth</label>
  <div class="col-10">
    <select class="form-control"  id="year" name="year" class="input-xlarge">
                            <option value="" selected="selected">Year</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>

    </select>
  </div>
</div>

<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Sex</label>
  <div class="text-center">
      <input class="col-2" class="radio" class="form-control" type="radio" value="male" id="sex" name="sex" checked> Male
    <input  class="col-2" class="pull-right" class="radio" class="form-control" type="radio" value="female" id="sex" name="sex"> Female
  </div>
</div>

<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Your email</label>
  <div class="col-10">
    <input class="form-control" type="email" value=""  name="email" id="email">
  </div>
</div>



<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
  <div class="col-10">
    <input class="form-control" type="tel" value="" name="phone" id="phone">
  </div>
</div>

<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Adres line</label>
  <div class="col-10">
    <input class="form-control" type="text" value="" name="address" id="address">
   
  </div>
</div>



  <fieldset class="ask" class="form-group">
    <legend>Odpowiedź na kilka pytań!</legend>
    <p>1. Lorem ipsum dolor sit ament?</p>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Lorem ipsum dolor.
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Ipsum dolor lorem ipsum
      </label>
    </div>

  </fieldset>
 
 
    <fieldset class="ask2" class="form-group">
    <legend>Odpowiedź na kilka pytań!</legend>
    <p>1. Lorem ipsum dolor sit ament?</p>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Lorem ipsum dolor.
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Ipsum dolor lorem ipsum
      </label>
    </div>

  </fieldset>
 
 
<div class="form-group row">
 <input  type="submit" class="btn btn-info" name="submit" value="Submit Button">
</div>





  </div>
</div>
      
   </div> 
  
<link rel="stylesheet" href="js/jquery-3.1.1.min.js">  
<script>

   
    </script>
   


    </form>




</body>
</html>