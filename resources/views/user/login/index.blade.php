@extends('layouts.main')

@section('container')
<section class="login p-8 h-screen flex flex-col-reverse md:flex-row">
    <div class="left-side hidden md:flex md:flex-col justify-center items-end text-right p-8 w-full md:w-1/2 bg-gradient-to-r from-violet-500 to-pink-500 rounded-lg">
        <h1 class="text-2xl font-bold w-1/2 text-white">Butuh Waktu yang cukup lama untuk bersuara. Sekarang saya telah memilikinya dan saya tidak akan diam saja.</h1>
        <p class="w-1/2 text-white">- Madeleine Albright | Diplomat AS</p>
    </div>
    <div class="right-side md:w-1/2 p-2 h-full flex justify-center items-center rounded-r-lg relative md:fixed md:top-0 md:bottom-0 md:right-0">
        <div class="login-card w-full md:w-96 md:h-auto shadow-lg shadow-pink-200 rounded-lg">
            <div class="flex flex-col p-4">
                <h1 class="font-semibold text-2xl text-pink-500 mb-2">Sign in</h1>
                <p class="text-xs text-slate-400 mb-3">Teras Perempuan</p>
                @error('failed')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-3" role="alert">
                        <strong class="font-semibold">{{ $message }}</strong>
                    </div>
                @enderror
                @if(session()->has('pleaseLogin'))
                    <div class="bg-pink-100 border border-pink-400 text-pink-700 px-4 py-3 rounded relative my-3" role="alert">
                        <strong class="font-bold">Signup successful!</strong>
                        <span class="block sm:inline">{{ session('pleaseLogin') }}</span>
                    </div>
                @endif
                    <form class="mx-4" action="/login" method="post">
                    @csrf
                    <label class="block mb-2">
                      <span for="email" class="block text-sm font-medium text-slate-700">Email</span>
                      <input autofocus value="{{ old('email') }}" type="email" id="email" name="email" placeholder="Enter your email" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @error('email') ring-2 ring-red-600 @enderror
                      "/>
                      @error('email')
                          <p class="text-sm text-red-600">{{ $message }}</p>
                      @enderror
                    </label>
                   <label class="block mb-2">
                        <span class="block text-sm font-medium text-slate-700">Password</span>
                        <input type="password" id="password" name="password" placeholder="Enter your password" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                          invalid:border-pink-500 invalid:text-pink-600
                          focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @error('password') ring-2 ring-red-600 @enderror
                        "/>
                        @error('password')
                          <p class="text-sm text-red-600">{{ $message }}</p>
                      @enderror
                    </label>
                    <a href="" class="text-xs mt-2 text-pink-700">Lupa password?</a>
                    <div class="flex flex-col justify-center items-center w-full">
                      <button name="login" class="rounded-full w-full bg-pink-500 hover:bg-pink-700 duration-100 text-white p-2 m-2">Sign in</button>
                      <p class="text-sm m-2 text-center text-slate-500">or</p>
                      <button name="login" class="rounded-full w-full bg-pink-50 hover:bg-pink-100 duration-100 text-pink-500 p-2 m-2 inline-flex justify-center">
                        <img src="image/icons/google.png" class="w-5 h-5 mr-2 self-center" alt="">Sign in with google</button>
                      <p class="text-xs m-2">Not regitered yet? <a href="/signup" class="text-pink-700">Create an account</a>.</p>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</section>
@endsection