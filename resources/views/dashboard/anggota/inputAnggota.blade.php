<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section id="dashborad" class="flex">
        <!-- Aside Start -->
        <aside id="aside"
            class="flex lg:pt-28 lg:pb-96 flex-col lg:w-64 lg:block lg:px-5 bg-gray-700 p-16 fixed lg:static top-0 left-0 right-0 bottom-0 transform -translate-x-full lg:translate-x-0 transition duration-500 ease-in-out z-10">
            <a class="aside-list" href="{{ url('/')  }}">
                <ion-icon name="home" class="mr-2"></ion-icon>
                <h1>Beranda</h1>
            </a>

            <a class="aside-list aside-list-active" href="{{ url('/anggota') }}">
                <ion-icon name="people" class="mr-2"></ion-icon>
                <h1>Anggota</h1>
            </a>

            <a class="aside-list" href="{{ url('/kegiatan') }}">
                <ion-icon name="calendar" class="mr-2"></ion-icon>
                <h1>Kegiatan</h1>
            </a>
        </aside>
        <!-- Aside End -->





        <!-- Main Start -->
        <section id="dashboard-anggotaForm" class="w-full">
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

            <form method="post" action="{{ url("/anggota") }}" class="w-full">
                {{ csrf_field() }}
                <section class="dashboard-field ">
                    <!-- <label for="id_kegiatan" name="id_kegiatan" class="font-medium pl-7 lg:text-2xl">Id Kegiatan</label> -->

                    <div class="field-container mt-10 lg:mt-16">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="">
                    </div>

                    <div class="field-container">
                        <label for="tempatlahir">Tempat Lahir</label>
                        <input type="text" name="tempatlahir" id="">
                    </div>

                    <div class="field-container">
                        <label for="tanggallahir">Tanggal Lahir</label>
                        <input type="text" name="tanggallahir" id="">
                    </div>

                    <div class="field-container">
                        <label for="Alamat">Alamat</label>
                        <input type="text" name="alamat" id="">
                    </div>

                    <div class="field-container">
                        <label for="jenis kelamin">Jenis Kelamin</label>
                        <input type="text" name="jeniskelamin" id="">
                    </div>

                    <div class="field-container">
                        <label for="tempatlahir">Telepon</label>
                        <input type="text" name="telepon" id="">
                    </div>

                    <div class="button-container">
                        <button class="bg-red-500" type="submit" name="submit">Submit</button>
                        <button class="bg-blue-500" type="reset">Reset</button>
                    </div>
                </section>
            </form>
        </section>
        <!-- Main End -->
    </section>
    <script src="{{ asset('js/index.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>