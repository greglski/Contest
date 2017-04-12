<?php

require_once 'config/Config.php';



?>

<?php    
require_once 'kod.php';
?>


<!--<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <title></title>
</head>

<style>
            body {
        background-image: url(img/warsaw0.jpg);
        background-size: cover;
    }</style>-->

<body>

    <form action="" method="post">
        <div id="reg" class="container" class="form-group row">
            <div class="row">
                

                <div class="container">
                    <div class="row">
                        <div >
                            <h3>CONTEST ABOUT WARSAW <img src="img/wersja1_pol.png" alt=""></h3>
                            <div id="error"><?php unset($walidacja); echo $wyslana;?></div>
                        </div>
                    </div>
                </div>


                <div id="form" class="col-sm-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-sm-offset-2">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Your Name</label>
                        <div class="col-10">
                            <input class="form-control" type="name" value="" id="name" name="name">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-search-input" class="col-2 col-form-label">Your surname</label>
                        <div class="col-10">
                            <input class="form-control" type="search" value="" id="surname" name="surname">
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
                            <select class="form-control" id="day" name="day" class="input-xlarge">
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
                            <select class="form-control" id="month" name="month" class="input-xlarge">
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
                            <select class="form-control" id="year" name="year" class="input-xlarge">
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
                          <select class="form-control" id="sex" name="sex"  class="input-xlarge" chacked="checked">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option> </select>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-2 col-form-label">Your email</label>
                        <div class="col-10">
                            <input class="form-control" type="email" value="" id="email" name="email">
                        
                        </div></div>
                    

    
                <div class="form-group row">
                    <label for="example-tel-input" class="col-1 col-form-label">Telephone</label>    
                        <label for="example-tel-input" class="col-2 col-form-label"></label>
                          <select class="form-control" id="cphone" name="cphone" class="input-xlarge">
                            <option value="" selected="selected">Country number</option>
                            <option value="+48">+48</option>
                            <option value="+46">+46</option>
                            <option value="+47">+47</option>
                            <option value="+49">+49</option>
                            <option value="+43">+43</option>
                        </select>
                        Phone number:
                    <input class="form-control" type="tel" value="" id="yourphone" name="yourphone">
                </div>
                    
                    


                    <div class="form-group row">
                        <label for="example-tel-input" class="col-2 col-form-label">Address:<br><br> Street or place name:</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="" id="street" name="street">

                        </div>
                    </div>

 <div class="form-group row">
                        <label for="example-tel-input" class="col-2 col-form-label">Building number:</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="" id="building_number" name="building_number">

                        </div>
                    </div>

<div class="form-group row">
                        <label for="example-tel-input" class="col-2 col-form-label">Flat number:</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="" id="flat_number" name="flat_number">

                        </div>
                    </div>
<div class="form-group row">
                        <label for="example-tel-input" class="col-2 col-form-label">Post code:</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="" id="post_code" name="post_code">

                        </div>
                    </div>
<div class="form-group row">
                        <label for="example-tel-input" class="col-2 col-form-label">City name:</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="" id="city_name" name="city_name">

                        </div>
                    </div>
<div class="form-group row">
                        <label for="example-tel-input" class="col-2 col-form-label">Country name:</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="" id="country_name" name="country_name">

                        </div>
                    </div>




                    
<div class="form-group row" class="Question"id="first_question">
 <label for="example-tel-input" class="col-2 col-form-label">Which answer
 is correct. How many people do live in Warsaw?</label>
 <div class="col-10">
   <select class="form-control"   id="first_question" name="first_question"
   class="input-xlarge">
                           <option value="0" selected="selected">Question
                           1</option>
                           <option value="931,321">931,321</option>
                           <option value="1,748,916">1,748,916</option>
                           <option value="2,432,098">2,432,098</option>
   </select>
 </div>
</div>

 
<div class="form-group row" class="Question2" id="second_question">
 <label for="example-tel-input" class="col-2 col-form-label">Which answer
 is correct. How many districts Warsaw has?</label>
 <div class="col-10">
   <select class="form-control"  id="second_question" name="second_question"
   class="input-xlarge">
                           <option value="0" selected="selected">Question
                           2</option>
                           <option value="3">3</option>
                           <option value="5">5</option>
                           <option value="7">7</option>
                           <option value="11">11</option>
   </select>
 </div>
</div>

<div class="form-group row" class="Question3" id="third_question">
 <label for="example-tel-input" class="col-2 col-form-label">Which answer is correct. First president of Warsaw?</label>
 <div class="col-10">
   <select class="form-control"  id="third_question" name="third_question" class="input-xlarge">
                           <option value="0" selected="selected">Question 3</option>
                           <option value="Jarosław Kaczyński">Jarosław Kaczyński</option>
                           <option value="Ignacy Wyssogota Zakrzewski">Ignacy Wyssogota Zakrzewski</option>
                           <option value="Hanna Gronkiewicz Waltz">Hanna Gronkiewicz Waltz</option>
   </select>
 </div>
</div>
 


<div class="form-group row" class="Question4" id="fourth_question">
 <label for="example-tel-input" class="col-2 col-form-label">Which answer is correct. Actual president of Warsaw?</label>
 <div class="col-10">
   <select class="form-control"  id="fourth_question" name="fourth_question" class="input-xlarge">
                           <option value="0" selected="selected">Question 4</option>
                           <option value="Jarosław Kaczyński">Jarosław Kaczyński</option>
                           <option value="Ryszard Petru">Ryszard Petru</option>
                           <option value="Hanna Gronkiewicz Waltz">Hanna Gronkiewicz Waltz</option>
   </select>
 </div>
</div>
                        
<div class="form-group row">
<label class="myCheckbox">
    <input type="checkbox" name="agreement" id="agreement" >
    <span>Agreement*</span>
</label></div>
<div>
                    <p>*I agree...Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                </div>

                    <div class="form-group row">
                        <input type="submit" class="btn btn-info" name="submit" value="Submit Button">
                    </div>
                </div>
                </div>
            </div>
    </form>
        </div>
</div>

        <div id="kontakt" class="container-fluid">
            <div id="footer" class="row">






                
                <div id="contact">
                    Contact: <br> Lorem ipsum 23 <br> 00-190 Warsaw <br>  
                    
                </div>
                <div id="regulamin">
 Contest Regulation...
 </div>
                <div>
                    © 2017
                </div>



            </div>
        </div>
    </form>









<script>
$(function() {
    $('#second_question').hide();
    $('#third_question').hide();
    $('#fourth_question').hide();
    $('#first_question').change(function() {
        if ($(this).is(":selected")) {
            $('#second_question').hide();
        } else {
            $('#second_question').show();
        }
    })
    
    $('#second_question').change(function() {
        if ($(this).is(":selected")) {
            $('#third_question').hide();
        } else {
            $('#third_question').show();
        }
    })
    $('#third_question').change(function() {
        if ($(this).is(":selected")) {
            $('#fourth_question').hide();
        } else {
            $('#fourth_question').show();
        }
    })
    
});
   </script>

</body>

</html>