<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
	mysql_query($sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}
// delete condition

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEST CRUD</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
	if(confirm('Apakah Anda Yakin Untuk Mengubah Data?'))
	{
		window.location.href='edit_data.php?edit_id='+id;
	}
}
function delete_id(id)
{
	if(confirm('Apakah Anda Yakin Untuk Menghapus Data?'))
	{
		window.location.href='index.php?delete_id='+id;
	}
}
</script>
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>SOA TEST CRUD YEAY!</a></label>
    </div>
</div>

<div id="body">
	<div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="add_data.php">Tambah Data</a></th>
    </tr>
    <th>Nama Depan</th>
    <th>Nama Akhir</th>
    <th>Kota</th>
    <th colspan="2">Aksi</th>
    </tr>
    <?php
	$sql_query="SELECT * FROM users";
	$result_set=mysql_query($sql_query);
	if(mysql_num_rows($result_set)>0)
	{
        while($row=mysql_fetch_row($result_set))
		{
		?>
            <tr>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="UBAH" /></a></td>
            <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="HAPUS" /></a></td>
            </tr>
        <?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="5">Tidak Ada Data!</td>
        </tr>
        <?php
	}
	?>
    </table>
    </div>
</div>

</center>
</body>
</html>