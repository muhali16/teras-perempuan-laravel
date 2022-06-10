@extends('layouts.main')

@section('container')
<section class="login p-8 h-screen flex flex-col-reverse md:flex-row">
    <div class="left-side hidden md:flex md:flex-col justify-center items-end text-right p-8 w-full md:w-1/2 bg-gradient-to-r from-violet-500 to-pink-500 rounded-lg">
        <h1 class="text-2xl font-bold w-1/2 text-white">Ketika seluruh dunia diam, bahkan satu suara saja bisa menjadi sangat kuat.</h1>
        <p class="w-1/2 text-white">- Malala Yousafzai | Aktivis Muda</p>
    </div>
    <div class="right-side md:w-1/2 p-2 h-full flex justify-center items-center rounded-r-lg relative md:fixed md:top-0 md:bottom-0 md:right-0">
        <div class="login-card w-full md:w-96 md:h-auto shadow-lg shadow-pink-200 rounded-lg">
            <div class="flex flex-col p-4">
                <h1 class="font-semibold text-2xl text-pink-500 mb-2">Sign Up</h1>
                <p class="text-xs text-slate-400">Teras Perempuan</p>
                <form class="m-4" action="/signup" method="post">
                    @csrf
                   <label class="block mb-1">
                      <span for="username" class="block text-sm font-medium text-slate-700">Username</span>
                      <input value="{{ old('username') }}" type="text" id="username" name="username" placeholder="Create your username" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @error('username') ring-2 ring-red-600 @enderror
                      "/>
                      @error('username')
                          <p class="text-sm text-red-600">{{ $message }}</p>
                      @enderror
                   </label>
                   <label class="block mb-1">
                    <span for="email" class="block text-sm font-medium text-slate-700">Email</span>
                    <input value="{{ old('email') }}" type="email" id="email" name="email" placeholder="Enter your email" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                      focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                      disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                      invalid:border-pink-500 invalid:text-pink-600
                      focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @error('email') ring-2 ring-red-600 @enderror
                    "/>
                    @error('email')
                          <p class="text-sm text-red-600">{{ $message }}</p>
                      @enderror
                  </label>
                   <label class="block mb-1">
                        <span class="block text-sm font-medium text-slate-700">Password</span>
                        <input type="password" id="password_1" name="password" placeholder="Create your password" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                          invalid:border-pink-500 invalid:text-pink-600
                          focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @error('password') ring-2 ring-red-600 @enderror
                        "/>
                        @error('password')
                          <p class="text-sm text-red-600">{{ $message }}</p>
                      @enderror
                    </label>
                    <label class="block mb-1">
                      <span class="block text-sm font-medium text-slate-700">Retype Password</span>
                      <input type="password" id="password_2" name="password_confirmation" placeholder="Retype your password" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @error('password_confirmation') ring-2 ring-red-600 @enderror
                      "/>
                      @error('password_confirmation')
                          <p class="text-sm text-red-600">{{ $message }}</p>
                      @enderror
                  </label>
                    <div class="flex flex-col justify-center items-center w-full">
                      <button name="signup" class="rounded-full w-full bg-pink-500 hover:bg-pink-700 duration-100 text-white p-2 m-2">Sign up</button>
                      <p class="text-sm m-2 text-center text-slate-300">or</p>       
                      <button name="login" class="rounded-full w-full border border-pink-300 hover:bg-pink-300 duration-100 text-pink-500 hover:text-white p-2 m-2 inline-flex justify-center">
                        <img src="image/icons/google.png" class="w-5 h-5 mr-2 self-center" alt="">Sign up with google</button>
                      <p class="text-xs m-2">Already have an account? <a href="/" class="text-pink-700">Sign in</a>.</p>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</section>
@endsection