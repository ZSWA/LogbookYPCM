<?php 
    include '../koneksi.php';

    if (isset($_POST['simpan'])) {
        $id_mapping = $_POST['id_mapping'];
        $id_anak = $_POST['id_anak'];
        $Pembimbing = $_POST['Pembimbing'];
        $Tahun = $_POST['Tahun'];

        // Update data pada tabel tb_anak
        $sql_anak = "UPDATE tb_anak SET pembimbing='$Pembimbing' WHERE id_anak='$id_anak'";
        $update_anak = mysqli_query($koneksi, $sql_anak);

        // Insert data pada tabel tb_mapping
        $sql_mapping = "UPDATE tb_mapping SET id_fasilitator='$Pembimbing', Tahun='$Tahun' WHERE id_mapping='$id_mapping'";
        $update_mapping = mysqli_query($koneksi, $sql_mapping);

        if ($update_anak && $update_mapping) {
            header("location: ?m=mapping&s=awal");
        } else {
            echo "gagal";
        }
    }
?>