<?php 

class c_koneksi {

    public function conn() {
        $conn = mysqli_connect("localhost", "root", "", "project_klmpk4");
        return $conn;

        if (!$conn) {
            die("koneksi gagal: " . mysqli_connect_error());
        } else {
            echo "<script> alert('koneksi database berhasil');
            </script>";
        }
    }
}
