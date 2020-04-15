<?php
try 
{
$cont = NEW PDO ("mysql:host=Localhost;dbname=db_crud1","root","");

//echo"Database Terhubung";

}
catch(PDOException $e)
{
echo $e->getMessage();
}

?>