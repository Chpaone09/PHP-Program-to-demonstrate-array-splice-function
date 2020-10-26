<?php

/*
***********************************************************

Topic   : Program to demonstrate array_splice function in PHP.
Author  : Chpaone09®
Date    : Oct 26, 2020

************************************************************
*/


$a = array(5,3,4,1,2);


array_splice($a,2,1,6);
echo "<pre>";print_r($a);

?>
