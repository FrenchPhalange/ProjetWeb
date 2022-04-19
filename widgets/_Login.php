<?php 

function LoginHome($username, $password){

    $tet = findAll(['user','pass'], "login","user = '".$username."' AND pass = '".$password."' ");
    
    foreach($tet as $t){
        if($t == 1){
            return true;
        }else{
            return false;
        }
    }
}
//Issou
