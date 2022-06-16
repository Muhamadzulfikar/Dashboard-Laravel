<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body>
    <section id="dashborad" class="flex">
        <!-- Aside Start -->
        <aside id="aside"
            class="flex lg:pt-28 lg:pb-96 flex-col lg:w-64 lg:block lg:px-5 bg-gray-700 p-16 fixed lg:static top-0 left-0 right-0 bottom-0 transform -translate-x-full lg:translate-x-0 transition duration-500 ease-in-out z-10">
            <a class="aside-list" href="<?php echo e(url('/')); ?>">
                <ion-icon name="home" class="mr-2"></ion-icon>
                <h1>Beranda</h1>
            </a>

            <a class="aside-list aside-list-active" href="<?php echo e(url('/anggota')); ?>">
                <ion-icon name="people" class="mr-2"></ion-icon>
                <h1>Anggota</h1>
            </a>

            <a class="aside-list" href="<?php echo e(url('/kegiatan')); ?>">
                <ion-icon name="calendar" class="mr-2"></ion-icon>
                <h1>Kegiatan</h1>
            </a>
        </aside>
        <!-- Aside End -->






        <!-- Main Start -->
        <section id="dashboard-anggotaTable" class="w-full">
            <section class="dashboard-header">
                <h1 class="text-dark font-bold text-base lg:text-2xl">HKBP Pos pelayanan Saguba - Data Kegiatan</h1>
                <button id="burger-button" onclick="showNavigationMenu()" class="burger-button">
                    <span
                        class="bg-white w-full h-1 transform transition duration-300 ease-in-out origin-top-left"></span>
                    <span
                        class="bg-white w-full h-1 transform transition duration-300 ease-in-out origin-top-left"></span>
                    <span
                        class="bg-white w-full h-1 transform transition duration-300 ease-in-out origin-top-left"></span>
                </button>
            </section>


            <section class="flex justify-end my-5">
                <a class="btn-tambahAnggota" href="<?php echo e(url('/anggota/add')); ?>">
                    Tambah Anggota
                    <ion-icon name="person-add"></ion-icon>
                </a>
            </section>

            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="table-header">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tempat, Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="table-row">
                            <th scope="row" class="first-table-row">1</th>
                            <td><?php echo e($data->id); ?></td>
                            <td><?php echo e($data->name); ?></td>
                            <td><?php echo e($data->placeOfBirth); ?>, <?php echo e($data->dateOfBirth); ?></td>
                            <td><?php echo e($data->address); ?></td>
                            <td><?php echo e($data->gender); ?></td>
                            <td><?php echo e($data->phone); ?></td>
                            <td class="text-right">
                                <a  class="font-medium text-blue-600 dark:text-blue-500 hover:opacity-95" 
                                    href="<?php echo e(url("/anggota/update", $data->id)); ?>">Update</a>
                                <form method="POST" action="/anggota/delete/<?php echo e($data->id); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('DELETE')); ?>

                                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:opacity-95">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <!-- Main End -->
        </section>
    </section>
    <script src="<?php echo e(asset('js/index.js')); ?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html><?php /**PATH D:\User\Documents\Code\Laravel\latihan1\resources\views/dashboard/anggota/anggota.blade.php ENDPATH**/ ?>