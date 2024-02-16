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
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Materi</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Materi</h6>
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
<div class="flex-none w-full max-w-full px-3 mt-6">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
        <h6 class="mb-1">Kumpulan Materi</h6>
        <p class="leading-normal text-sm">Bank Materi Biologi</p>
        </div>
        <div class="flex-auto p-4">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                    <div class="relative">
                        <a class="block shadow-xl rounded-2xl">
                            <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                        </a>
                    </div>
                    <div class="flex-auto px-1 pt-6">
                        <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Materi #1</p>
                        <a href="javascript:;">
                            <h5>DNA, Gen, Kromosom</h5>
                        </a>
                        <p class="mb-6 leading-normal text-sm">Kesamaan dan perbedaannya.</p>
                        <div class="flex items-center justify-first">
                            <button type="button" class="px-8 py-2 mb-0 mr-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500"><i class="fa-solid fa-trash"></i></button>
                            <button type="button" class="px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Lihat Materi</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                    <div class="relative">
                        <a class="block shadow-xl rounded-2xl">
                            <img src="../assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-xl" />
                        </a>
                    </div>
                    <div class="flex-auto px-1 pt-6">
                        <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Materi #2</p>
                        <a href="javascript:;">
                            <h5>Hereditas</h5>
                        </a>
                        <p class="mb-6 leading-normal text-sm">Pewarisan induk kepada keturunannya.</p>
                        <div class="flex items-center justify-first">
                            <button type="button" class="px-8 py-2 mb-0 mr-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500"><i class="fa-solid fa-trash"></i></button>    
                            <button type="button" class="px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Lihat Materi</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                    <div class="relative">
                        <a class="block shadow-xl rounded-2xl">
                            <img src="../assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                        </a>
                    </div>
                    <div class="flex-auto px-1 pt-6">
                        <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Materi #3</p>
                        <a href="javascript:;">
                            <h5>Sel</h5>
                        </a>
                        <p class="mb-6 leading-normal text-sm">Unit terkecil dan dasar dari semua makhluk hidup.</p>
                        <div class="flex items-center justify-first">
                            <button type="button" class="px-8 py-2 mb-0 mr-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500"><i class="fa-solid fa-trash"></i></button>
                            <button type="button" class="px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Lihat Materi</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                <div class="relative flex flex-col h-full min-w-0 break-words bg-transparent border border-solid shadow-none rounded-2xl border-slate-100 bg-clip-border">
                    <div class="flex flex-col justify-center flex-auto p-6 text-center">
                        <a href="javascript:;">
                            <i class="mb-4 fa fa-plus text-slate-400"></i>
                            <h5 class="text-slate-400">Buat Materi</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection