<x-layout>
    <article>
        <h1>{{$post->title}}</h1>
        <div>
            {{$post->intro}}
        </div>
        <div>
            {{$post->body}}
        </div>
    </article>
</x-layout>