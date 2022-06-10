@extends('layouts.main')

@section('container')
@include('layouts.sidebar')
<section class="container p-20 mx-auto">
    <div class="shadow-lg p-6 w-full mt-10 text-center mx-auto md:w-1/2">
        <img class="rounded-full w-40 mx-auto mb-5 md:w-1/3" src="image/assets/profile-pic/{{ $user->photo }}" alt="Photo Profile">
        <h2 class=" text-3xl font-semibold text-pink-500 mb-1">{{ $user->username }}</h2>
        <h3 class="text-mdtext-black">Muhammad Ali Mustaqim</h3>
        <h3 class="text-sm mb-4 text-pink-500">
            <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="21"viewBox="0 0 24 24" fill="none" stroke="#ec4899" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            {{ date('F j, Y', $user->birthday) }}
        </h3>
        <p class="text-md text-gray-500">{{ $user->bio }}</p>
    </div>
    @auth
    <div class="flex flex-row justify-center mx-auto mt-10 text-gray-600 md:w-1/2">
        <a href="/articles/write" target="_blank" class="mx-5"></a>
        <button >
            <svg class="inline mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ec4899" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon><line x1="3" y1="22" x2="21" y2="22"></line></svg>
            <span class="text-md block mt-1">
                Your Article's
            </span>
        </button>
        <a href="/alimus/edit" class="mx-5">
            <button >
                <svg class="inline mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ec4899" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                <span class="text-md block mt-1">
                    Edit Profile
                </span>
            </button>
        </a>
    </div>
    @endauth
</section>
@endsection