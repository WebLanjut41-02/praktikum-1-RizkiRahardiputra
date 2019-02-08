<!DOCTYPE html>
<html>
<head>
	<title>View Kalkulator</title>
</head>
<body>
	<h3>Masukkan Nilai</h3>
	<form action = "<?php echo base_url()?>setting/hasil" method="post">
	Bilangan 1 <input type="text" name="bil1">
	Bilangan 2 <input type="text" name="bil2">

	<input type="submit" name="hasil" value="Hitung">

</form>
</body>
</html>