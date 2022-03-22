<x-layout>
<header class="mt-10 text-center">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-semibold">
                  <span class="text-red-500">#</span>  Latest from <span class="text-red-500">the blog</span>
                </h1>
            </div>
</header>
      @foreach($posts as $post)
      <article>
        <h1>
            <a href="/posts/{{$post->slug}}">
           {{$post->title}}
            </a>    
        </h1>
        <span>
            <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </span>
      </article>
      @endforeach
</x-layout>