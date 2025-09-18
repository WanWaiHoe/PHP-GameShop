<?php
session_start();
if(session_destroy()) 
{
header("Location: final(1).html");
}
?>