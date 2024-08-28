<?php

// $sensitiveData = "lemi";
// $salt = bin2hex(random_bytes(16));
// $pepper = "secretPepper";

// echo $salt . "<br>";

// $dataToHash = $sensitiveData . $salt . $pepper;
// $hash = hash("sha256", $dataToHash);


// echo $hash . "<br>";
$pwd = "lemi";

$hashed = password_hash($pwd, PASSWORD_BCRYPT, ["cost" => 12]);

$pwdLogin = "lemi";


if (password_verify($pwdLogin, $hashed)) {
    echo "Password is correct";

}else{
    echo "Password is incorrect";
}
