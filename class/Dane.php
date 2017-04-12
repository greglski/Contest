<?php
class Dane extends DbConnect{


function addDane($id_user,$name,$surname,$birth_date,$sex,$email,$phone,$street,$building_number,$flat_number,$post_code,$city_name,$country_name,$first_question,$second_question,$third_question,$fourth_question,$good_answers,$date){
         
            $zapytanie = "INSERT INTO `contest`(`id_user`, `name`, `surname`, `birth_date`, `sex`, `email`, `phone`, `street`, `building_number`, `flat_number`, `post_code`, `city_name`, `country_name`, `first_question`, `second_question`, `third_question`, `fourth_question`, `good_answers`, `date`) values (NULL,'$name','$surname','$birth_date','$sex','$email','$phone','$street','$building_number','$flat_number','$post_code','$city_name','$country_name','$first_question','$second_question','$third_question', '$fourth_question','$good_answers','$date')";
            $wyslanie = $this->db->query($zapytanie);
//            header('Location:index.php');
//            exit ();
            
            
            $checkId = '';
            $this->wiadomosc = '';
            
            $checkId = $this->db->insert_id;
            
            $zapytanie2 = "select * from `contest` where `id_user` = $checkId";
            $wyslanie2 = $this->db->query($zapytanie2);
            $wynik2 = $wyslanie2->fetch_object();
            $this->wiadomosc = "Your name: $wynik2->name<br>Your surname: $wynik2->surname<br>Your birthdate: $wynik2->birth_date<br>Your sex: $wynik2->sex<br>Your email: $wynik2->email<br>Your phone: $wynik2->phone<br>Your address: $wynik2->country_name";
            
//            header('Location:index.php');
//            exit ();
            
 }
 
// function checkDane($id_user){
     
     
     
     
 
 
 
}
