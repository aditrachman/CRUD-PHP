<?php
include "koneksi.php";
$id = $_POST['id'];
$kode = $_POST['kode_buku'];
$judul = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn = $_POST['thn_penerbit'];
$ket = $_POST['keterangan'];

$query = mysqli_query($koneksi, "update tb_23 set judul_buku='$judul', pengarang='$pengarang', thn_penerbit='$thn', keterangan='$ket', kode_buku='$kode' where id='$id'");
if ($query) {
    ?><script language="javascript">
	document.location.href = "table.php";
</script>
<?php
} else {
    echo "Gagal update data";
    echo mysqli_error($koneksi);
}
?>