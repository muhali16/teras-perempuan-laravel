<style>
    .active {
      padding: 10px;
      background-color: #FF5C8D;
      border-radius: 50%;
    }
  </style>
  <section>
      <div class="navigation-section bg-white flex flex-row md:flex-col items-center justify-center fixed px-10 md:px-3 inset-x-0 bottom-0 md:inset-y-0 md:bottom-0 md:left-0 md:inset-x-auto border-t-2 md:border-r-2">
            @auth
            <div class="head-navigation">
                <a href="/{{ auth()->user()->username }}">
                    <img class="photo-profile w-10 rounded-full" src="{{ asset('image/assets/profile-pic/'. auth()->user()->photo) }}" alt="Profile">
                </a>
            </div>
            @endauth
            <div class="navigation flex flex-row md:flex-col items-center justify-center w-12 mx-auto md:my-12">
                <a href="/" class="nav-item mx-4 md:my-3 {{ $title=='Feeds' ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </a>
                <a href="/search" class="nav-item mx-3 md:my-4 {{ $title=='Search' ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </a>
                <a href="/articles" class="nav-item mx-3 md:my-4 {{ $title=='Articles' ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </a>
                @auth
                <a href="/{{ auth()->user()->username }}/voted" class="nav-item mx-3 md:my-4 {{ $title== 'Votes' ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </a>
                @endauth
                
            </div>
            <div class="foot-navigation">
                @auth
                <a href="/logout" class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10 3H6a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h4M16 17l5-5-5-5M19.8 12H9"/>
                    </svg>
                </a>
                @endauth
                @guest
                <a href="/login" class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3"/>
                    </svg>
                </a>
                @endguest
            </div>
      </div>
  </section>

  