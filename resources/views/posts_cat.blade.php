<x-layout>
    @foreach($posts as $post)
        <div>
            <a href="/posts/{{$post->slug}}">{{$post->title}}</a></p>
        <div>
    @endforeach
</x-layout>