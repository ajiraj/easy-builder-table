<?php
include 'functions.php';

if(isset($_GET['fn']))
{
    $fn=$_GET['fn'];
    $operator=new operations();
    switch($fn){
        case 'save':
                 $data=$_POST['data'];
                 if($operator->save_to_file($data))
                     echo "Done";
                 break;


    }

}

?>