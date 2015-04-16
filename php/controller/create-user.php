<?php
require_once(__DIR__ . "/../model/config.php");
/* this code makes the email, user, password case sensitive */
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
/* when creating the user it gives you a crypted password so the password wont be displayed */
$hashedPassword = crypt($password, $salt);

$query = $_SESSION["connection"]->query("INSERT INTO users SET  "
        . "email = '',"
        . "username = '$username',"
        . "password = '$hashedPassword',"
        . "salt = '$salt', "
        . "exp1 = 0, "
        . "exp2 = 0, "
        . "exp3 = 0, "
        . "exp4 = 0");

        $_SESSION["name"] = $username;

/* an if statement that reads out if you successfully created a user or if you got an error making the user */
if($query) {
    //need this for Ajax on index.php
    echo "true";
}
else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}

