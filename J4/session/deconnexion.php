<?php
session_start();
session_destroy();
// Session destroy détruit la session 

header('Location: index.php');