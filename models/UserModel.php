<?php

require_once 'config/database.php';

class UserModel
{
  static function check_if_exist($username, $password)
  {
    global $conn;
    $query = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
      return 1;
    } else {
      return 0;
    }
  }

  static function create($nama_lengkap, $no_telepon, $username, $password)
  {
    global $conn;
    $query = "insert into tbl_user (nama_lengkap, no_telepon, username, password) values (?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $nama_lengkap, $no_telepon, $username, $password);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }
}
