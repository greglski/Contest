<?php
$page = 'firstPage';
$title = 'Logowanie do aplikacji Kontakty';

if(isset($_GET['your_code']) && !empty($_GET['your_code'])){
    
    
   $your_code = (int)$_GET['your_code'];
   
   
   
   
   
   
   
//   echo $your_code;
//   exit();
}

  
if(isset($_GET['page'])){
    
$page = htmlentities($_GET['page']);

switch ($page){
    
    case('zaloz_konto'):
       
        $page = 'zaloz_konto';
        $title = 'Zakładanie konta';
        break;
    
    case('nie_pamietam'):
        
        $page = 'nie_pamietam';
        $title = 'Przypomnij hasło';
        break;
    
    default :
        
}
}
