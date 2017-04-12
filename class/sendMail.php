<?php
class sendMail{
            
            private $from, $Bcc, $Cc, $headers, $to, $subject, $message, $htmlCodeStart, $htmlCodeEnd;
            
            function __construct($from, $Cc='', $Bcc='', $html='yes') {
                $this->from=$from;
                $this->Cc=$Cc;
                $this->Bcc=$Bcc;
                $this->headers='';
                $this->htmlCodeStart='';
                $this->htmlCodeEnd='';
                
                        
                        if($html=='yes'){
                            $this->htmlCodeStart='
                                <!DOCTYPE html>
                                <html>
                                <head>
                                <meta charset="UTF-8">
                                </head>
                                <body>
                                ';
                            $this->htmlCodeEnd='
                                </body>
                                </html>
                                ';
                            
                            
                                    

                        $this->headers="MIME-Version: 1.0\r\n";
                        $this->headers.="Content-type: text/html; charset=UTF-8\r\n";
                                               
                                    
                        }
                        
                        $this->headers.="From:$this->from\r\n";
//                        $this->headers.="Cc:$this->from\rn";
                        
                        if($this->Cc !=''){
                            $this->headers.="Cc:$this->Cc\r\n";
                        }
                        
                        if($this->Bcc !=''){
                            $this->headers.="Bcc:$this->Bcc\r\n";
                        }
                        
                
            }
            
            function send($to,$subject,$message){
                $this->to=$to;
                $this->subject=$subject;
                $this->message= $this->htmlCodeStart;
                $this->message.=$message;
                $this->message.= $this->htmlCodeEnd;
                $this->wyslana='';
                
                $wyslij = mail($this->to, $this->subject, $this->message, $this->headers);
                
                if($wyslij){
                    $this->wyslana="Thank you very much for filling up our form.<br>We sent you email with completed form!<br>Wait for it!";
//                    echo 'Wiadomość wysłana';
                }
            }
        
        } 

