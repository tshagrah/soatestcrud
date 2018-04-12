<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	// variables for input data
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$city_name = $_POST['city_name'];
	// variables for input data
	
	// sql query for inserting data into database
	$sql_query = "INSERT INTO users(first_name,last_name,user_city) VALUES('$first_name','$last_name','$city_name')";
	// sql query for inserting data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Sukses Tersimpan !');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while inserting your data');
		</script>
		<?php
	}
	// sql query execution function
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEST CRYD</title>
<link rel="stylesheet" href="style.css" type="text/css" />
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
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">Kembali ke Halaman Utama</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="Nama Depan" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Nama Belakang" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="Kota" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>Simpan</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>