<?php
require_once "models/MemberModel.php";
require_once "function/function.php";

class MemberController
{

  public function index()
  {
    $data = MemberModel::read();
    loadView('dashboard', $data);
  }

  public function formcreate()
  {
    loadView('createmember');
  }

  public function create()
  {
    if ($_FILES['profil']['error'] === UPLOAD_ERR_OK) {
      $profil = $_FILES['profil']['name'];
      $profil_tmp = $_FILES['profil']['tmp_name'];
      $upload_path = 'views/asset/img/';
      if (move_uploaded_file($profil_tmp, $upload_path . $profil)) {
        $nama = $_POST['nama'];
        $no_telepon = $_POST['no_telepon'];
        $status_member = $_POST['status_member'];
        $data = MemberModel::create($profil, $nama, $no_telepon, $status_member);
        header("Location:/member");
      } else {
        echo 'Gagal mengunggah file.';
        exit();
      }
    } else {
      echo 'Terjadi kesalahan saat mengunggah file.';
      exit();
    }
  }

  public function detail($id)
  {
    $data = MemberModel::detail($id);
    return $data;
  }

  public function formupdate($id)
  {
    $data = MemberModel::detail($id);
    loadView('updatemember', $data);
  }

  public function update($id)
  {
    if ($_FILES['profil']['error'] === UPLOAD_ERR_OK) {
      $new_profil = $_FILES['profil']['name'];
      $new_profil_tmp = $_FILES['profil']['tmp_name'];
      $upload_path = 'views/asset/img/'; // Path folder img, sesuaikan dengan struktur folder Anda

      // Pindahkan file yang diunggah ke folder img
      if (move_uploaded_file($new_profil_tmp, $upload_path . $new_profil)) {
          // Tangani pembaruan data di database
          $new_nama = $_POST['nama'];
          $new_no_telepon = $_POST['no_telepon'];
          $new_status_member = $_POST['status_member'];
          $data = MemberModel::update_profil($id, $new_profil, $new_nama, $new_no_telepon, $new_status_member);
          header("Location:/member");
      } else {
          echo 'Gagal mengunggah file.';
          exit();
      }
  } else {
      // Tangani pembaruan data di database jika tidak ada file yang diunggah
      $new_nama = $_POST['nama'];
      $new_no_telepon = $_POST['no_telepon'];
      $new_status_member = $_POST['status_member'];

      $data = MemberModel::update($id, $new_nama, $new_no_telepon, $new_status_member);
      header("Location:/member");
  }
  }

  public function delete($id)
  {
    global $url;
    $data = MemberModel::delete($id);
    header("Location:/member");
  }
}
