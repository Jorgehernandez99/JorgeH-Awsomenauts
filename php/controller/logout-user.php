<!-- Code that lets the user logged out of the blog -->
<?php
require_once(__DIR__ . "/../model/config.php");

unset($_SESSION["authenticated"]);

session_destroy();
header("Location: " . $path . "index.php");
