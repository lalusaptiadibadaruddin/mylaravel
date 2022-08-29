<?php $__env->startSection('konten'); ?>
   


<!DOCTYPE html>
<html>
<head>
    <title> Membuat Pencarian Pada Laravel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</head>
    <body>
 
    <div class="container">
        <div class="card">
            <div class="card-body">
                
 
               

                <h2>
                Selamat Datang 
                <b><?php echo e(Auth::user()->name); ?></b>, 
                Anda Login sebagai 

                <b><?php echo e(Auth::user()->role); ?></b>
            </h2>

 
                <h3>Data Pegawai</h3>

                    


                
 
                <p>Cari Data Pegawai :</p>
 
                <div class="form-group">
                    
                </div>
                <form action="/home/cari" method="GET" class="form-inline">
                    <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="<?php echo e(old('cari')); ?>">
                    <input class="btn btn-primary ml-3" type="submit" value="CARI">
                </form>
 
                <br/>
 
                <table class="table table-bordered">
                    <tr>
                        <th>id User</th>
                        <th>Nama User</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($p->id); ?></td>
                        <td><?php echo e($p->name); ?></td>
                        <td><?php echo e($p->pegawai_nama); ?></td>
                        <td><?php echo e($p->pegawai_jabatan); ?></td>
                        <td><?php echo e($p->pegawai_umur); ?></td>
                        <td><?php echo e($p->pegawai_alamat); ?></td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="/home/edit/<?php echo e($p->id); ?>">Edit</a>
                            <a class="btn btn-danger btn-sm" href="/home/hapus/<?php echo e($p->id); ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
 
               
            </div>
        </div>
    </div>
 
 
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelku\resources\views/home.blade.php ENDPATH**/ ?>