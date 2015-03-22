<?php

// Main file

if (!$_POST["submit"])
{
	echo date("Y-m-d");
	include "form.tpl.php";
}
?>