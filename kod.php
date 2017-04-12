<?php

require_once 'config/Config.php';


$wyslana = '';

if(isset($_POST['submit'])){
 
            $name = $_POST['name'];
            $surname = $_POST['surname'];
//            $birth_date = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
            $birth_date = $_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
            $sex = $_POST['sex'];
            $email = $_POST['email'];
            $yourphone = $_POST['yourphone'];
            $phone = $_POST['cphone'].$_POST['yourphone'];
            $street = $_POST['street'];
            $building_number = $_POST['building_number'];
            $flat_number = $_POST['flat_number'];
            $post_code = $_POST['post_code'];
            $city_name= $_POST['city_name'];
            $country_name = $_POST['country_name'];
            
              
            $first_question = $_POST['first_question'];
            $second_question = $_POST['second_question'];
            $third_question = $_POST['third_question'];
            $fourth_question = $_POST['fourth_question'];
            $good_answers = '';
//            $yphone = $_POST['yphone'];
            $year = $_POST['year'];
            $month = $_POST['month'];
            $day = $_POST['day'];
            
   
//            var_dump($_POST);
//            exit();

$walidacja = new Validate();
$walidacja->puste($name, 'name');
$walidacja->puste($surname, 'surname');
$walidacja->puste($birth_date, 'birth_date');
$walidacja->puste($year, 'year');
$walidacja->puste($month, 'month');
$walidacja->puste($day, 'day');
$walidacja->puste($sex, 'sex');
$walidacja->puste($email, 'email');
$walidacja->puste($yourphone, 'yourphone');
$walidacja->puste($street, 'street');
$walidacja->puste($building_number, 'building_number');

$walidacja->puste($post_code, 'post_code');
$walidacja->puste($city_name, 'city_name');
$walidacja->puste($country_name, 'country_name');
$walidacja->maxIloscZnakow($name, 'name', 25);
$walidacja->maxIloscZnakow($surname, 'surname', 40);

$walidacja->maxIloscZnakow($street, 'street', 40);
$walidacja->maxIloscZnakow($city_name, 'city_name', 40);
$walidacja->maxIloscZnakow($country_name, 'country_name', 35);
//$walidacja->minIloscZnakow($yourphone, 'yourphone', 9);

$walidacja->weryfikacjaMaila($email, 'email');

if(!empty($name)){
    $walidacja->znakiOK($name, 'name');
}
if (!empty($surname)){
        $walidacja->znakiOK($surname, 'surname');
}

//if (!empty($yourphone)){
//        $walidacja->minIloscZnakow($yourphone, 'yourphone');
//}
//if (!empty($yourphone)){
//        $walidacja->kodOK($yourphone, 'yourphone');
//}

//s

if(!isset($_POST['agreement'])){
//    
    $walidacja->isChecked('Agreement');
}

if($walidacja->liczError == 0){
    
    
    $date = date('Y-m-d');   
    $addDane = new Dane();
    $addDane->addDane(NULL,$name,$surname,$birth_date,$sex,$email,$phone,$street,$building_number,$flat_number,$post_code,$city_name,$country_name,$first_question,$second_question,$third_question,$fourth_question,$good_answers,$date);
    
//    $checkID = $addDane->checkId;
    
//    echo $checkID;
//    exit();
    
    
//    $addDane->checkDane($id_user;)
    
    $sendMail= new sendMail(E_MAIL_ADMIN);
    $message = $addDane->wiadomosc;
//    $message = "NAME: $name<br>SURNAME: $surname<br>BIRTH DATE: $birth_date<br>SEX: $sex<br>EMAIL: $email<br>PHONE: $phone<br>ADDRESS: $address";
//    $message = "$name.' '.$surname.' '.$birth_date.' '.$sex.' '.$email.' '.$phone.' '.$address";
    $sendMail->send($email, 'Thank You for registration in contest About Warsaw!', $message); 
    $wyslana = $sendMail->wyslana;
    
}

}   


 