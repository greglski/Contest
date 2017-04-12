<?php
class Dane extends DbConnect{


function addDane($id_user,$name,$surname,$birth_date,$sex,$email,$phone,$address,$first_question,$second_question,$date){
         
            $zapytanie = "insert into contest (`id_user`,`name`,`surname`,`birth_date`,`sex`,`email`,`phone`,`address`,`first_question`,`second_question`,`date`) values (NULL,'$name','$surname','$birth_date','$sex','$email','$phone','$address','$first_question','$second_question','$date')";
            $wyslanie = $this->db->query($zapytanie);
//            header('Location:index.php');
//            exit ();
            $checkId = '';
            $this->wiadomosc = '';
            
            $checkId = $this->db->insert_id;
            
            $zapytanie2 = "select * from contest where id_user= $checkId";
            $wyslanie2 = $this->db->query($zapytanie2);
            $wynik2 = $wyslanie2->fetch_object();
            $this->wiadomosc = "YOUR NAME: $wynik2->name<br>YOUR SURNAME: $wynik2->surname<br>YOUR BIRTH DATE: $wynik2->birth_date<br>YOUR SEX: $wynik2->sex<br>YOUR EMAIL: $wynik2->email<br>YOUR PHONE: $wynik2->phone<br>YOUR ADDRESS: $wynik2->address";
            
//            header('Location:index.php');
//            exit ();
            
 }
 
// function checkDane($id_user){
     
     
     
     
 
 
 
}
