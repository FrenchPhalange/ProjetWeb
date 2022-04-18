<?php 

function LoginHome($username, $password){

    $tet = findAll(['username','password'], "login","username = '".$username."' AND password = '".$password."' ");
    
    foreach($tet as $t){
        if($t == 1){
            return true;
        }else{
            return false;
        }
    }
}
