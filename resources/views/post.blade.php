<x-layout>
<main class="mt-12 px-3 py-5">
    <article class="mt-7 max-w-5xl mx-auto border border-black-200 rounded-lg shadow-lg shadow-gray-500/50">
        <img class="mb-5 rounded-lg shadow-lg shadow-gray-500/50" src="https://picsum.photos/1024/300" alt="" srcset="">
        <h1 class="flex font-bold text-4xl px-3 py-5 mt-5">{{$post->title}}</h1>
        <div class="font-semibold text-sm px-3 py-5">
        {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }} 
        in <span class="text-red-500 text-sm">
        <a href="/?category={{$post->category->slug}}">{{$post->category->name}}</a>
        </span>
        </div>
        <div class="text-xl px-3 py-5">
            {{$post->intro}}
        </div>
        <div class="text-lg px-3 py-5">
            {{$post->body}}
        </div>
        <div class="flex content-center py-5 px-3">
            <a href="{{route('home')}}" class="bg-red-500 font-semibold text-white text-sm shadow-lg shadow-gray-500/50 px-4 py-2 rounded-xl hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-500">Back</a>
        </div>
        <section class="mt-10 space-y-6">
            <x-post-comment />
            <x-post-comment />
            <x-post-comment />
         </section>
    </article>
</main>      
</x-layout>