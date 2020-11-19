<?php
require_once '../model.php';
if (deleteAccount($_GET['id']))
{
 echo "Deletation successfull";
}
?>