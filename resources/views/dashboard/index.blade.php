<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Dashboard Header Start -->
    <section class="dashboard-header items-center">
        <h1 class="text-gray-700 font-bold text-lg lg:text-2xl pl-10">HKBP Pos pelayanan Saguba - Data Kegiatan</h1>
        <button id="burger-button" onclick="showNavigationMenu()" class="burger-button">
            <span class="bg-white w-full h-1 transform transition duration-300 ease-in-out origin-top-left"></span>
            <span class="bg-white w-full h-1 transform transition duration-300 ease-in-out"></span>
            <span class="bg-white w-full h-1 transform transition duration-300 ease-in-out origin-bottom-left"></span>
        </button>
    </section>
    <!-- Dashboard Header End -->






    <section class="flex">
        <!-- Aside Start -->
        <aside id="aside"
            class="flex lg:pt-10 lg:pb-96 flex-col lg:w-64 lg:block lg:px-5 bg-gray-700 p-16 fixed lg:static top-0 left-0 right-0 bottom-0 transform -translate-x-full lg:translate-x-0 transition duration-500 ease-in-out">
            <a class="aside-list aside-list-active" href="{{ url('/') }}">
                <ion-icon name="home" class="mr-2"></ion-icon>
                <h1>Home</h1>
            </a>

            <a class="aside-list" href="{{ url('/anggota') }}">
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
        <section id="beranda" class="w-full bg-gray-100">
            <!-- Greating Start -->
            <div className='w-full mx-auto pr-5 ml-5'>
                <div class='flex w-full items-center h-32 bg-white rounded-2xl mt-16'>
                    <img src='./image/istockphoto-1182596507-170x170.jpg' class='h-20' />
                    <div class='ml-3 text-gray-600 px-2 text-base'>
                        <h1 class='lg:text-2xl text-lg font-medium text-italic'>hai, Muhamad Zulfikar (2021018)</h1>
                        <h2>Saat ini kamu berada di semester <span class='font-semibold'>2021/2022 ganjil (minggu
                                11)</span></h2>
                        <h2>Tetap semangat belajar ya</h2>
                    </div>
                </div>
                <!-- Greating End -->






                <!-- Information DashBoard Start -->
                <div class='lg:flex w-full justify-between'>

                    <!-- Left Section Start -->
                    <div class='lg:w-3/4 w-full mr-7'>

                        <!-- Roaster Container Start -->
                        <div class='w-full bg-white mt-5 rounded-2xl p-7 text-gray-700'>
                            <h1 class='font-bold uppercase'>JADWAL KULIAH HARI INI ({{ date('l, d F Y') }})</h1>
                            @if(date('N') != 6 && date('N') != 7)

                            <!-- Roster Content Start -->
                            @foreach($roaster as $index => $data)
                            <div class='mt-5 ml-7 mb-8'>

                                <!-- Roaster Time Start -->
                                <div class='flex text-gray-500'>
                                    <p class='font-bold text-lg'>{{$data -> time}}</p>
                                    <img src='./image/1486486303-alert-bell-notification-education-christmas-bell-church-bell-ring_81235.svg'
                                        class='h-6 ml-1' />
                                </div>
                                <!-- Roaster Time End -->

                                <!-- Roaster Mata Kuliah and Prodi Start-->
                                <h1 class='font-bold text-lg text-gray-700 mt-2'>{{$data -> name}}</h1>
                                <p class='text-gray-500 mt-4'>{{$data -> major}} ({{$data ->semester}} {{$data->class}})
                                </p>
                                <!-- Roaster Mata Kuliah and Prodi End-->

                                <!-- Roaster Room Start -->
                                <div class='flex items-center mt-4'>
                                    <img src='./image/enter_icon-icons.com_48306.png' class='h-5' />
                                    <p class='mx-2'>{{$data -> room}} |</p>
                                    <img src='./image/link_icon-icons.com_70055.png' class='h-4' />
                                    <a class='text-blue-700 ml-2'>Akses E-Learning</a>
                                </div>
                                <!-- Roaster Room End -->

                            </div>
                            @endforeach
                            <!-- Roster Content End -->
                            @else
                            <h1>libur bang</h1>
                            @endif
                        </div>
                        <!-- Roaster Container End -->





                        <!-- Berita dan Informasi Start -->
                        <div class='w-full bg-white mt-5 rounded-2xl p-7'>
                            <div class='flex justify-between mb-4'>
                                <h1 class='text-xl font-bold text-gray-700'>BERITA & INFORMASI</h1>
                                <div
                                    class='h-5 p-1 flex justify-center items-center bg-blue-500 text-white text-xs rounded font-bold'>
                                    VIEW ALL</div>
                            </div>
                            <!-- Isi Berita Start -->
                            @foreach($news as $index => $data)
                            <div class='text-blue-600 font-medium mb-4'>
                                <h1>{{ $data -> news_title }}</h1>
                                <div class='flex text-sm items-center'>
                                    <p class='font-bold text-blue-600'>Pengumuman</p>
                                    <img src='./image/wondicon-ui-free-calender_111212.png' class='h-4' />
                                    <p class='text-gray-600'>{{ $data -> news_time }}</p>
                                </div>
                            </div>
                            @endforeach
                            <!-- Isi Berita End -->
                        </div>
                        <!-- Berita Informasi End -->
                    </div>
                    <!-- Left Section End -->




                    <!-- Right Section Start -->
                    <div class='lg:w-1/3 w-full mt-5'>
                        <!-- Notification Start -->
                        <div class='w-full bg-white h-72 rounded-2xl p-5'>
                            <!-- Notification Header Start-->
                            <div class='flex items-center justify-between'>
                                <div class='flex items-center'>
                                    <h1 class='text-gray-600 font-bold'>NOTIFIKASI</h1>
                                    @php $test=0; @endphp
                                    @foreach($notification as $index => $data)
                                    @php $test = $data -> id @endphp
                                    @endforeach
                                    <div class='h-5 bg-green-400 w-5 rounded-2xl ml-1 text-center text-white text-sm'>{{
                                        $test }}</div>
                                </div>
                                <div
                                    class='h-5 p-1 flex justify-center items-center bg-blue-500 text-white text-xs rounded font-bold'>
                                    VIEW ALL</div>
                            </div>
                            <!-- Notification Header End -->


                            <!-- Notification Content Start -->
                            <div class='overflow-auto h-52 p-2 mt-2'>
                                @foreach($notification as $index => $data)
                                <div class='mb-5 text-gray-600'>
                                    <h1 class='text-lg font-medium mb-2'>{{ $data -> Notification_title }}</h1>
                                    <p class='text-sm font-medium text-gray-500'>{{ $data -> Notification_time }}</p>
                                </div>
                                @endforeach
                            </div>
                            <!-- Notification Content End -->
                        </div>
                        <!-- Notification End -->
                    </div>
                    <!-- Right Section End -->
                </div>
                <!-- End -->
            </div>
        </section>
    </section>
    <!-- Main End -->
    </section>
    <script src="{{ asset('js/index.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>