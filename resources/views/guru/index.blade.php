@extends('layouts.app2')

@section('navbar')
<nav class="absolute z-20 flex flex-wrap items-center justify-between w-full px-6 py-2 text-white transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start" navbar-profile navbar-scroll="true">
    <div class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit">
        <nav>
        <!-- breadcrumb -->
        <ol class="flex flex-wrap pt-1 pl-2 pr-4 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
            <a class="opacity-50" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal before:float-left before:pr-2 before:content-['/']" aria-current="page">Dashboard</li>
        </ol>
        <h6 class="mb-2 ml-2 font-bold text-white capitalize">Dashboard</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
        <div class="flex items-center md:ml-auto md:pr-4"></div>
        <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            <li class="flex items-center">
            <a href="../pages/sign-in.html" class="block px-0 py-2 font-semibold text-white transition-all ease-soft-in-out text-sm">
                <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                <span class="hidden sm:inline">Guru</span>
            </a>
            </li>

            <li class="flex items-center pl-4 xl:hidden">
            <a href="javascript:;" class="block p-0 text-white transition-all ease-soft-in-out text-sm" sidenav-trigger>
                <div class="w-4.5 overflow-hidden">
                <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                <i class="ease-soft relative block h-0.5 rounded-sm bg-white transition-all"></i>
                </div>
            </a>
            </li>

            <li class="flex items-center px-4">
            <a href="javascript:;" class="p-0 text-white transition-all text-sm ease-soft-in-out">
                <i fixed-plugin-button-nav class="cursor-pointer fa-solid fa-moon" aria-hidden="true"></i>
                <!-- fixed-plugin-button-nav  -->
            </a>
            </li>
        </ul>
        </div>
    </div>
</nav>
@endsection

@section('hero')
<div class="w-full px-6 mx-auto">
    <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
        <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-700 to-pink-500 opacity-60"></span>
    </div>
</div>
@endsection

@section('main')
<div class="flex flex-wrap -mt-16" style="margin-top: -8rem;">
    <div class="flex-none w-full max-w-full px-3 mt-6">
        <div class="relative flex flex-col min-w-0 mb-6 pb-2 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6 class="mb-1">Materi</h6>
            </div>

            <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                        <div class="relative flex flex-col min-w-0 h-10 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                            <div class="flex flex-col justify-content-center align-content-between px-1">
                                <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Materi #1</p>
                                <a href="javascript:;">
                                    <h5>DNA, Gen, Kromosom</h5>
                                </a>
                                <p class="leading-normal text-sm">Kesamaan dan perbedaannya.</p>

                                <div class="flex items-center justify-between">
                                    <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Lihat Materi</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                        <div class="relative flex flex-col min-w-0 h-10 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                            <div class="flex flex-col justify-content-center align-content-between px-1">
                                <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Materi #2</p>
                                <a href="javascript:;">
                                    <h5>Hereditas</h5>
                                </a>
                                <p class="leading-normal text-sm">Pewarisan induk kepada keturunannya.</p>
                                
                                <div class="flex items-center justify-between">
                                    <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Lihat Materi</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                        <div class="relative flex flex-col min-w-0 h-10 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                            <div class="flex flex-col justify-content-center align-content-between px-1">
                                <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Materi #3</p>
                                <a href="javascript:;">
                                    <h5>Sel</h5>
                                </a>
                                <p class="leading-normal text-sm">Unit terkecil dan dasar dari semua makhluk hidup.</p>
                                
                                <div class="flex items-center justify-between">
                                    <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Lihat Materi</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                        <div class="relative flex flex-col h-full min-w-0 break-words bg-transparent border border-solid shadow-none rounded-2xl border-slate-100 bg-clip-border">
                            <div class="flex flex-col justify-center flex-auto p-6 text-center">
                                <a href="javascript:;">
                                    <i class="mb-4 fa fa-plus text-slate-400"></i>
                                    <h5 class="text-slate-400">Materi Baru</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-wrap mt-6 -mx-3">
    <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3 ">
                        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6>Daftar Siswa</h6>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nama</th>
                                            <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Jabatan</th>
                                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                <img src="../assets/img/profile.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal">Wiwin Purnami</h6>
                                                <p class="mb-0 text-xs leading-tight text-slate-400">wiwin@biochron.com</p>
                                                </div>
                                            </div>
                                            </td>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-xs font-semibold leading-tight">Ketua Kelas</p>
                                            <p class="mb-0 text-xs leading-tight text-slate-400">Siswa</p>
                                            </td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight text-slate-400">Edit</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                <img src="../assets/img/profile.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user2" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal">Nova Amelia</h6>
                                                <p class="mb-0 text-xs leading-tight text-slate-400">nova@biochron.com</p>
                                                </div>
                                            </div>
                                            </td>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <!-- <p class="mb-0 text-xs font-semibold leading-tight">Programator</p> -->
                                            <p class="mb-0 text-xs leading-tight text-slate-400">Siswa</p>
                                            </td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Offline</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight text-slate-400">Edit</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                <img src="../assets/img/profile.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user3" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal">Yestyas Ramadiah</h6>
                                                <p class="mb-0 text-xs leading-tight text-slate-400">yestyas@biochron.com</p>
                                                </div>
                                            </div>
                                            </td>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <!-- <p class="mb-0 text-xs font-semibold leading-tight">Executive</p> -->
                                            <p class="mb-0 text-xs leading-tight text-slate-400">Siswa</p>
                                            </td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight text-slate-400">Edit</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                <img src="../assets/img/profile.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user4" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal">Raasikh Fil'ilmi</h6>
                                                <p class="mb-0 text-xs leading-tight text-slate-400">raasikh@biochron.com</p>
                                                </div>
                                            </div>
                                            </td>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <!-- <p class="mb-0 text-xs font-semibold leading-tight">Programator</p> -->
                                            <p class="mb-0 text-xs leading-tight text-slate-400">Siswa</p>
                                            </td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight text-slate-400">Edit</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                <img src="../assets/img/profile.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user5" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal">Dawwas Inha</h6>
                                                <p class="mb-0 text-xs leading-tight text-slate-400">dawwas@biochron.com</p>
                                                </div>
                                            </div>
                                            </td>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <!-- <p class="mb-0 text-xs font-semibold leading-tight">Manager</p> -->
                                            <p class="mb-0 text-xs leading-tight text-slate-400">Siswa</p>
                                            </td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Offline</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight text-slate-400">Siswa</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
        <div class="relative flex flex-col h-full  min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex p-4 h-full justify-content-center">
                <div class="flex flex-wrap -mx-3">
                    <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                        <div class="flex flex-col h-full pt-4">
                            <h5 class="font-bold">Forum Diskusi</h5>
                            <p class="">Buat forum diskusi dengan siswa anda secara daring sekarang!</p>
                            <a class="mt-auto mb-0 font-semibold leading-normal text-sm group text-slate-500" href="javascript:;">
                            Buat
                            <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                            </a>
                        </div>
                    </div>
                    <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                        <div class="h-full bg-gradient-to-tl from-purple-700 to-pink-500 rounded-xl">
                            <img src="../assets/img/shapes/waves-white.svg" class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                            <div class="relative flex items-center justify-center h-full">
                                <img class="relative z-20 w-full pt-6" src="../assets/img/illustrations/rocket-white.png" alt="rocket" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection