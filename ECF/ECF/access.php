<?php
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in']=FALSE)
{
Header("Location: login.php"); break;}
?>