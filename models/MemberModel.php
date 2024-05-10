<?php

require_once 'config/database.php';

class MemberModel{

  static function read(){
    global $conn;
    $query = "select * from tbl_member";
    $result = mysqli_query($conn, $query);
    $data = array();
    if ($result->num_rows > 0) {
      while($a = $result->fetch_array()) {
        $data[]=$a;
      }
    }
    return $data;
  }

  static function create($profil, $nama, $no_telepon, $status_member){
    global $conn;
    $query = "insert into tbl_member (profil, nama, no_telepon, status_member) values (?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $profil, $nama, $no_telepon, $status_member);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }

  static function detail($id){
    global $conn;
    $query = "select * from tbl_member WHERE id=".$id;
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
      while($a = $result->fetch_array()) {
        $data[]=$a;
      }
    }
    else { 
      $data = [];
    }
    return $data;
  }

  static function update_profil($id, $profil, $nama, $no_telepon, $status_member){
    global $conn;
    $stmt = $conn->prepare("update tbl_member set profil=?, nama=?, no_telepon=?, status_member=? WHERE id=".$id);
    $stmt->bind_param("ssss", $profil, $nama, $no_telepon, $status_member);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }
  
  static function update($id, $nama, $no_telepon, $status_member){
    global $conn;
    $stmt = $conn->prepare("update tbl_member set nama=?, no_telepon=?, status_member=? WHERE id=".$id);
    $stmt->bind_param("sss", $nama, $no_telepon, $status_member);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }

  static function delete($id){
    global $conn;
    $query = "delete from tbl_member where id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }
}