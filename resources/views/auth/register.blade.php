@extends('layouts.auth')

@section('content')
<section class="">
    <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover rounded-xl" style="background-image: url('../assets/img/curved-images/curved14.jpg')">
    <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-60"></span>
        <div class="container z-10">
            <div class="flex flex-wrap justify-center -mx-3">
            <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                <h1 class="mt-12 mb-2 text-white">Welcome!</h1>
                <p class="text-white">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
            <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="mt-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                    <h3>Register</h3>
                </div>

                <div class="flex-auto p-6">
                    <form role="form text-left">
                        <div class="mb-4">
                        <input type="email" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
                        </div>
                        <div class="mb-4">
                        <input type="password" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                        </div>
                        <div class="text-center">
                        <button type="button" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Sign up</button>
                        </div>
                        <p class="mt-4 mb-0 leading-normal text-sm">Already have an account? <a href="{{ route('login') }}" class="font-bold text-slate-700">Sign in</a></p>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="py-12">
    <div class="container">
    <div class="flex flex-wrap -mx-3">
        <div class="flex-shrink-0 w-full max-w-full mx-auto mt-2 mb-6 text-center lg:flex-0 lg:w-8/12">
        <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
            <span class="text-lg fab fa-dribbble"></span>
        </a>
        <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
            <span class="text-lg fab fa-twitter"></span>
        </a>
        <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
            <span class="text-lg fab fa-instagram"></span>
        </a>
        <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
            <span class="text-lg fab fa-pinterest"></span>
        </a>
        <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
            <span class="text-lg fab fa-github"></span>
        </a>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3">
        <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
        <p class="mb-0 text-slate-400">
            Copyright ©
            <script>
            document.write(new Date().getFullYear());
            </script>
            by Tim PKM Unesa.
        </p>
        </div>
    </div>
    </div>
</footer>
@endsection