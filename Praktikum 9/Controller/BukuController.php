<<<<<<< HEAD
<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        // mengakses model
        $data = new DaftarBuku();

        // memberi data model ke view dan menampilkan view
        include "View/BukuView.php";
    }

    public function simpan(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('Location: http://localhost/index.php');
        exit;
    }

    public function hapus(){
        $id = $_POST['id_hapus'];

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('Location: http://localhost/index.php');
        exit;
    }

    public function edit(){
        // index.php/edit?id=5

        // menangkap nilai query stirng id dari view
        $id = $_GET['id'];

        // membuat objek model daftar buku
        $daftar_buku = new DaftarBuku();

        // mengambil dan  membuat objek  model buku berdasarkan id buku dari objek daftar_buku;
        $buku = $daftar_buku->getBukuById($id);

        // jika buku ada atau ketemu
        if($buku){
            // tampilkan view edit buku
            include_once "view/EditBukuView.php";
        }else{
            header("Location: http://localhost/index.php");
        }
    }

    public function update(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);
        $buku->setId($_POST['id']);
        
        $daftar_buku = new DaftarBuku();
        $daftar_buku->update($buku);

        header("Location: http://localhost/index.php");
    }

=======
<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        // mengakses model
        $data = new DaftarBuku();

        // memberi data model ke view dan menampilkan view
        include "View/BukuView.php";
    }

    public function simpan(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('Location: http://localhost/index.php');
        exit;
    }

    public function hapus(){
        $id = $_POST['id_hapus'];

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('Location: http://localhost/index.php');
        exit;
    }

    public function edit(){
        // index.php/edit?id=5

        // menangkap nilai query stirng id dari view
        $id = $_GET['id'];

        // membuat objek model daftar buku
        $daftar_buku = new DaftarBuku();

        // mengambil dan  membuat objek  model buku berdasarkan id buku dari objek daftar_buku;
        $buku = $daftar_buku->getBukuById($id);

        // jika buku ada atau ketemu
        if($buku){
            // tampilkan view edit buku
            include_once "view/EditBukuView.php";
        }else{
            header("Location: http://localhost/index.php");
        }
    }

    public function update(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);
        $buku->setId($_POST['id']);
        
        $daftar_buku = new DaftarBuku();
        $daftar_buku->update($buku);

        header("Location: http://localhost/index.php");
    }

>>>>>>> 5b3e1d65e1c965116d8a4ab413ad3c0d26f7f217
}