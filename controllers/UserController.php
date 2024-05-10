<?php
require_once "models/UserModel.php";
require_once "function/function.php";

class UserController{

  public function formcreate(){
    loadView('createporto');
  }

  public function register(){
    global $url;
    $data = UserModel::create($_POST["nama_lengkap"],$_POST["no_telepon"],$_POST["username"],$_POST["password"]);
    header("Location:/");
  }
}