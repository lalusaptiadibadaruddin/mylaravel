<!DOCTYPE html>
<html>
<head>
	<title> Membuat CRUD Pada Laravel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
 
	
	<h3>Edit Pegawai</h3>
 
	<a href="/home"> Kembali</a>
	
	<br/>
	<br/>
 
	<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form action="/home/update" method="post">
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="id" value="<?php echo e($p->id); ?>"> <br/>
		Nama <input type="text" required="required" name="nama" value="<?php echo e($p->pegawai_nama); ?>"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="<?php echo e($p->pegawai_jabatan); ?>"> <br/>
		Umur <input type="number" required="required" name="umur" value="<?php echo e($p->pegawai_umur); ?>"> <br/>
		Alamat <textarea required="required" name="alamat"><?php echo e($p->pegawai_alamat); ?></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
 
</body>
</html><?php /**PATH C:\xampp\htdocs\laravelku\resources\views/edit.blade.php ENDPATH**/ ?>