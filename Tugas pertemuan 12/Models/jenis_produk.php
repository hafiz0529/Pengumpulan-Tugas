<?php
class JenisProduk
{
    private $koneksi;
    public function __construct()
    {
        global $dbh; //instance object koneksi.php
        $this->koneksi = $dbh;
    }

    public function JenisProduk()
    {
        $sql = "SELECT * FROM jenis_produk";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getJenisProduk($id){
        $sql = "SELECT * from jenis_prduk WHERE jenis_produk.id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO jenis_produk(nama) VALUES (?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>