<x-layout>
      @foreach($posts as $post)
<main class="mt-12 px-3 py-5">
    <article class="max-w-5xl mx-auto border border-black-200 rounded-lg shadow-lg shadow-gray-500/50">
        <img class="mb-5 rounded-lg shadow-lg shadow-gray-500/50" src="https://picsum.photos/1024/300" alt="" srcset="">
        <span class="text-sm text-red-500 border-b-4 border-black-300 font-semibold px-5 py-3">
            <a href="/?category={{$post->category->slug}}">{{$post->category->name}}</a>
        </span>
        <h1 class="flex font-bold text-4xl px-3 py-5 mt-5">
            <a href="/posts/{{$post->slug}}">
           {{$post->title}}
            </a>    
        </h1>
        <div class="text-xl px-3 py-5">
            {{$post->intro}}
        </div>
        <div class="flex justify-between px-2 py-4">
            <div class="flex">
               <a href="/?author={{$post->author->name}}">
               <img src="{{ Avatar::create($post->author->name)->toBase64() }}" />
               </a>
            </div>
            <div>
            <a href="{{route('show', $post)}}" class="bg-red-500 font-semibold text-white text-sm shadow-lg shadow-gray-500/50 px-4 py-2 rounded-xl hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-500">Read more</a>
            </div>
        </div>
    </article>
      @endforeach
      <div class="mt-20 max-w-5xl mx-auto">
      {{$posts->links()}}
      </div>
      
</main>
</x-layout>

