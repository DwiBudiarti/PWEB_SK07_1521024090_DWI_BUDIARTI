<?php
$email = strtolower($_POST["email"]);
if (!preg_match ('/@.+\..+$/', $email))
{
  echo "Alamat Email anda salah.....";

}
else {
  echo "Alamat Email yang Anda masukkan adalah $email";
}
?>