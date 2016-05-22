<?php

// On écrase le tableau de session 
session_start(); 

// On détruit la session 
session_destroy(); 

header('Location:index.html');
  exit();
?>