<?php
require_once "models/UserModel.php";
require_once "function/function.php";

class AuthController
{
  public function index()
  {
    loadView('auth/login');
  }

  public function register()
  {
    loadView('auth/register');
  }


  public function login()
  {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = UserModel::check_if_exist($username, $password);
    if ($result) {
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      header("Location:/member");
    } else {
      echo "<center><h1>Username atau Password Anda Salah. Silahkan Coba Login Kembali.</h1>
      <button><strong><a href='/'>Login</a></strong></button></center>";
    }
  }
}
