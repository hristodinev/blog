<x-layout>
<header class="mt-10 text-center">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-semibold">
                  <span class="text-red-500">#</span>  Latest from <span class="text-red-500">the blog</span>
                </h1>
                <div class="tw-flex tw-justify-center mt-8 space-x-3">
                <span class="bg-gray-200 inline-block rounded-xl w-32">
                    <div x-data="{show: false}"@click.away="show=false">
                        <button @click="show=! show" class="py-2 px-5 text-sm font-semibold">Categories</button>
                        <div style="display:none;" x-show="show" class="py-2 absolute bg-gray-200 rounded-xl w-32 text-left">
                        @foreach($categories as $category)
                            <a href="/categories/{{$category->slug}}"
                            class="block text-left px-3 text-sm leading-6 hover:bg-gray-300"
                            >{{$category->name}}
                        </a>
                        @endforeach
                        </div>
                    </div>
                </span>
                <span class="bg-gray-200 inline-block rounded-xl">
                <select class= "appereance-none bg-transparent py-2 px-5 text-sm font-semibold">
                    <option value='Category' selected>Other Rules</option>
                    <option value='Comment'>Comment</option>
                    <option value= 'Author'>Author</option>                
                </select>
                </span>
                <span class="bg-gray-200 inline-block rounded-xl py-2 px-5 ">
                <form method="GET">
                    <input type="text" name="search" placeholder="Find me something" class="bg-transparent text-sm placeholder-black font-semibold">
                </form>
                </span>
            </div>
</header>
      @foreach($posts as $post)
<main class="mt-12 px-3 py-5">
    <article class="max-w-5xl mx-auto border border-black-200 rounded-lg shadow-lg shadow-gray-500/50">
        <img class="mb-5 rounded-lg shadow-lg shadow-gray-500/50" src="https://picsum.photos/1024/300" alt="" srcset="">
        <span class="text-sm text-red-500 border-b-4 border-black-300 font-semibold px-5 py-3">
            <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </span>
        <h1 class="flexfont-bold text-4xl px-3 py-5 mt-5">
            <a href="/posts/{{$post->slug}}">
           {{$post->title}}
            </a>    
        </h1>
        <div class="text-xl px-3 py-5">
            {{$post->intro}}
        </div>
        <div class="flex justify-between px-2 py-4">
            <div class="flex">
               <a href="/authors/{{$post->author->username}}">{{$post->author->username}}</a>
            </div>
            <div>
            <button class="bg-red-500 font-semibold text-white text-sm shadow-lg shadow-gray-500/50 px-4 py-2 rounded-xl hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-500">Read more</button>
            </div>
        </div>
    </article>
      @endforeach
</main>
</x-layout>

