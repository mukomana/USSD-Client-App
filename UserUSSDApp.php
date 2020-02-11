<?php
//
if(!empty($_POST) && !empty($_POST[''])){
    require_once 'DatabaseConnector.php';
    require 'User.php';
    require 'Subject.php';
    
    $sessionId      = $_POST['sessionId'];
    $type           = $_POST['type'];
    $serviceCode    = $_POST['serviceCode'];
    $phoneNumber    = $_POST['phoneNumber'];
    $text           = $_POST['text'];
    $user           = new User;
    $textArray=explode('*', $text);
    $userResponse=trim(end($textArray));
    
    if(isset($text)){ //Check if $text is not NULL
        if($text=="" && $type=1){
            
            $response="CON Welcome to CM registration portal. \nPlease enter your first name.";
        
        }else if(isset($level[0]) && $level[0]!="" and isset($level[1])){
        
            $response = "CON Hi ".$level[0]." surname.";
        
        }
        else if (isset($level[1]) && $level[1]!="" && isset($level[2])){
            
            $response = "CON Please enter you monthly costs (from Jan to Dec) seperated by comma.";
            
        }
        else if (isset($level[2]) && $level[2]!=="" && !isset($level[3])){
            //Save data to database
            $monthlyCosts = explode(',', $level[2]);
            $user->name = $level[0];
            $user->surname = $level[1];
            $user->jan = monthlyCosts[0];
            $user->feb = monthlyCosts[1];
            $user->mar = monthlyCosts[2];
            
            $data=array(
                'phonenumber' => $phoneNumber,
                'firstname' => $level[0],
                'surname' => $level[1]
                );
            
            $response="END Thank you ".$level[0]." for your time.";
            
        }
        
    }
}
