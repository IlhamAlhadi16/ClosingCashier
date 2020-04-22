<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php 
		if ($this->session->userdata('role') == 'admin') {
			echo "<meta http-equiv='refresh' content='0; URL=http://localhost/CodeIgniter/ClosingCashier/index.php/Adnin/index'>";
		}else if ($this->session->userdata('role') == 'kepala') { 
			echo "<meta http-equiv='refresh' content='0; URL=http://localhost/CodeIgniter/ClosingCashier/index.php/kepala/index'>";
		}else if ($this->session->userdata('role') == 'kasir') {
			echo "<meta http-equiv='refresh' content='0; URL=http://localhost/CodeIgniter/ClosingCashier/index.php/kasir/index'>";
		}
	?>
	<title>Document</title>
</head>
<body>
	
</body>
</html>
