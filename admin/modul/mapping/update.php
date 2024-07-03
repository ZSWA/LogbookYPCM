<?php 
    include '../koneksi.php';

    if (isset($_POST['simpan'])) {
        $id_anak = $_POST['id_anak'];
        $Pembimbing = $_POST['Pembimbing'];
        $Tahun = $_POST['Tahun'];

        // Update data pada tabel tb_anak
        $sql_anak = "UPDATE tb_anak SET pembimbing='$Pembimbing' WHERE id_anak='$id_anak'";
        $update_anak = mysqli_query($koneksi, $sql_anak);

        // Insert data pada tabel tb_mapping
        $sql_mapping = "INSERT INTO tb_mapping (id_anak, id_fasilitator, Tahun) VALUES ('$id_anak', '$Pembimbing', '$Tahun')";
        $insert_mapping = mysqli_query($koneksi, $sql_mapping);

        if ($update_anak && $insert_mapping) {
            header("location: ?m=mapping&s=awal");
        } else {
            echo "gagal";
        }
    }
?>