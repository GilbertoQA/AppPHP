



<?php  

		



  //Enter your database connection details here.
    $host = 'localhost'; //HOST NAME.
    $db_name = 'platform'; //Database Name
    $db_username = 'root'; //Database Username
    $db_password = ''; //Database Password


    try
    {
     
     //https://stackoverflow.com/questions/20732897/php-oop-database-connect
     $pdo = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);

    }
    catch (PDOException $e)
    {
        exit('Error Connecting To DataBase');
    }



?>