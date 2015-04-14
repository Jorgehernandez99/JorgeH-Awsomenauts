<!-- Code that uses sessions to authenticate the user -->
<?php
    require_once(__DIR__ . "/../model/config.php");
    
    function authenticateUser() {
        if(!isset($_SESSION["authenticated"])) {
            
        }
        else {
            if($_SESSION["authenticated"] != true){
                return false;
            }
            else{
                return true;
            }
        }
    }
    
    

