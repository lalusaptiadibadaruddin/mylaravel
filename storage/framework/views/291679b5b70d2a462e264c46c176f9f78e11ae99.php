<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
 	<div class="container">
		<div class="card">
			<div class="card-body">

				<h2 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>

				<h3>Data Pegawai</h3>
			 
				<a href="/home"> Kembali</a>
				
				<br/>
				<br/>
			 
				<form action="/home/store" method="post">
					<?php echo e(csrf_field()); ?>

					Nama <input type="text" name="nama" required="required"> <br/>
					Jabatan <input type="text" name="jabatan" required="required"> <br/>
					Umur <input type="number" name="umur" required="required"> <br/>
					Alamat <textarea name="alamat" required="required"></textarea> <br/>
					<input type="submit" value="Simpan Data">
				</form>

			</div>
		</div>
	</div>
 
</body>
</html>



<?php /**PATH C:\xampp\htdocs\laravelku\resources\views/tambah.blade.php ENDPATH**/ ?>