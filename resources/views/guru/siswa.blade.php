@extends('layouts.app2')

@section('navbar')
<nav class="relative flex flex-wrap items-center justify-between px-0 pt-6 pb-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
        <!-- breadcrumb -->
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
            <a class="opacity-50 text-slate-700" href="javascript:;">Guru</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Siswa</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Siswa</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
        <div class="flex items-center md:ml-auto md:pr-4"></div>
        <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            <li class="flex items-center px-4">
                <a href="javascript:;" class="p-0 transition-all text-sm ease-nav-brand text-slate-500">
                    <i fixed-plugin-button-nav class="cursor-pointer fa fa-moon" aria-hidden="true"></i>
                </a>
            </li>

            <li class="flex items-center">
                <a href="../pages/sign-in.html" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                    <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                    <span class="hidden sm:inline">Guru</span>
                </a>
            </li>

            <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                    <div class="w-4.5 overflow-hidden">
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    </div>
                </a>
            </li>
        </ul>
        </div>
    </div>
</nav>
@endsection

@section('main')
<div class="flex flex-wrap mt-6 -mx-3">
    <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3 ">
                        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex w-full justify-between">
                            <h6>Daftar Siswa</h6>
                            <button type="button" data-toggle="modal" data-target="#import" class="inline-block px-8 py-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 hover:scale-102 active:shadow-soft-xs border-fuchsia-500 text-fuchsia-500 hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:scale-100 active:border-fuchsia-500 active:bg-fuchsia-500 active:text-white hover:active:border-fuchsia-500 hover:active:bg-transparent hover:active:text-fuchsia-500 hover:active:opacity-75">Import</button>
                            <!-- MODAL SISWA -->
                            <div class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto transition-opacity ease-linear opacity-0 z-sticky outline-0" id="import" aria-hidden="true">
                                <div class="relative w-auto m-2 transition-transform duration-300 pointer-events-none sm:m-7 sm:max-w-125 sm:mx-auto lg:mt-48 ease-soft-out -translate-y-13">
                                    <div class="relative flex flex-col w-full bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
                                    <div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
                                        <h5 class="mb-0 leading-normal dark:text-white" id="ModalLabel">Import CSV</h5>
                                        <i class="ml-4 fas fa-upload"></i>
                                        <button type="button" data-toggle="modal" data-target="#import" class="fa fa-close w-4 h-4 ml-auto box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
                                    </div>
                                    <div class="relative flex-auto p-4">
                                        <p>You can browse your computer for a file.</p>
                                        <input action="/file-upload" dropzone type="text" placeholder="Browse file..." class="dark:bg-gray-950 mb-4 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                        <div class="min-h-6 pl-7 mb-0.5 block">
                                        <input class="w-5 h-5 ease-soft -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-150 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" type="checkbox" value="" id="importCheck" checked="">
                                        <label class="inline-block mb-2 ml-1 font-bold cursor-pointer select-none text-xs text-slate-700 dark:text-white/80" for="importCheck">I accept the terms and conditions</label>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap items-center justify-end p-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
                                        <button type="button" data-toggle="modal" data-target="#import" class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-slate-600 to-slate-300 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Close</button>
                                        <button type="button" data-toggle="modal" data-target="#import" class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Upload</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
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