<?php 

include("Person.php");
try{
    $newName = new Person("Jordin", "21");
    echo $newName->showInformation();
}catch(Exception $e){
    echo "<b>Error: </b> " . $e->GetMessage();
}