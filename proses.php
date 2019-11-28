<?php
include "koneksi.php";
$judul = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn = $_POST['thn_penerbit'];
$ket = $_POST['keterangan'];
$kode = $_POST['kode_buku'];
$query = mysqli_query($koneksi, "INSERT INTO tb_23(judul_buku, pengarang, thn_penerbit, keterangan, kode_buku) value ('$judul','$pengarang','$thn','$ket','$kode')");
if ($query) {
	?><script language="javascript">
	document.location.href = "table.php";
</script>
<?php
} else {
	echo "gagal input data";
}
?>