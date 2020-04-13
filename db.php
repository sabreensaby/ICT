<?php 
    include_once "../server.php";

    if(isset($_REQUEST['acttion']) && !empty($_REQUEST['acttion'])){

        print_r($_REQUEST);

        $action = $_REQUEST['acttion'];
        switch ($action) {
            case 'admin_login':
                # code...
                break;
            
            default:
                # code...
                break;
        }

    }

?>