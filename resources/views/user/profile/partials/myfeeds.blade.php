<div class="w-1/2 mx-auto">
    <div class="feeds m-4">
        <div class="feed">
            <a href="#" class="flex flex-row items-center w-fit">
                    <div class="feed-pp w-12 mr-2">
                    <img class="rounded-full" src="https://images.unsplash.com/photo-1597872849945-a1a1ef549c6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="Photo Profile">
                    </div>
                    <div class="feed-username text-sm font-semibold">
                        <h3>Ali</h3>
                    </div>
            </a>
            <div class="feed-value p-2 mx-6 w-3/4 border-l-2">
                <p class="ml-6 text-sm">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias voluptatem ipsam laboriosam voluptates impedit id ea necessitatibus praesentium neque veniam?
                </p>
                @if ($feed->photo ?? false)
                    <img class="ml-6" src="'.BASEURL.'app/assets/img/feeds/'.$feed['feed_photo'].'" alt="Feeds_Photo" width="300px">';
                @endif
                <p class="ml-6 text-xs text-slate-400">Created 7 menutes ago</p>
            </div>
        </div>
        <div class="feed-comments my-1">
            <h4 class="mx-4 text-xs text-slate-400">Comments</h4>
            {{-- start foreach comment --}}
            <div class="comment">
                <a href="" class="flex flex-row items-center mx-2 my-1 w-fit">
                    <div class="comment-pp w-8 mr-2">
                        <img class="rounded-full" src="https://images.unsplash.com/photo-1597872849945-a1a1ef549c6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="Photo Profile">
                    </div>    
                    <div class="comment-username text-xs font-semibold"><h3>Meri</h3></div>
                </a>
                <div class="comment-value mx-7 w-3/4 text-xs">
                    <p class="ml-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, hic.</p>
                    <p class="ml-5 text-slate-400">Created 1 minute ago</p>
                </div>
                <div class="vote-comment">
                    <button value="10" id="voted" class="flex flex-row items-center mx-11 my-3 w-fit rounded-full stroke-pink-500 text-pink-500 voted">
                        <div class="voted-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                            </svg>
                        </div>
                        <span class="vote-count"><p class="text-vote text-xs">voted</p></span>
                        <span id="show_vote17">
                            <span class="mx-5 text-xs text-slate-400 vote-number">10 Voted</span> 
                        </span>
                    </button>
                </div>
            </div>
            {{-- end foreach comment --}}
            {{-- start foreach comment --}}
            <div class="comment">
                <a href="" class="flex flex-row items-center mx-2 my-1 w-fit">
                    <div class="comment-pp w-8 mr-2">
                        <img class="rounded-full" src="https://images.unsplash.com/photo-1597872849945-a1a1ef549c6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="Photo Profile">
                    </div>    
                    <div class="comment-username text-xs font-semibold"><h3>Meri</h3></div>
                </a>
                <div class="comment-value mx-7 w-3/4 text-xs">
                    <p class="ml-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, hic.</p>
                    <p class="ml-5 text-slate-400">Created 1 minute ago</p>
                </div>
                <div class="vote-comment">
                    <button value="10" id="voted" class="flex flex-row items-center mx-11 my-3 w-fit rounded-full stroke-pink-500 text-pink-500 voted">
                        <div class="voted-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                            </svg>
                        </div>
                        <span class="vote-count"><p class="text-vote text-xs">voted</p></span>
                        <span id="show_vote17">
                            <span class="mx-5 text-xs text-slate-400 vote-number">10 Voted</span> 
                        </span>
                    </button>
                </div>
            </div>
            {{-- end foreach comment --}}
            <form class="mx-7 text-xs" action="#" method="post">
                    <input class=" rounded-md w-3/4 p-2 mr-1 border border-pink-500 focus:ring-pink-700 focus:ring-1 focus:outline-none" type="text" name="comment" id="comment" placeholder="Comment here ...">
                    <button class=" p-2 rounded-md text-pink-500 border border-pink-500 font-semibold" type="submit" name="send" disabled>Send</button>
            </form>
        </div>
    </div>
    <hr class="my-3">
</div>
{{-- foreach start feeds --}}

