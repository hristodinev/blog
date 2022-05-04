@props(['comment'])

<article class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
                <div class="px-3 py-3 shrink">
                    <img class="rounded-xl flex space-x-4" src="#" alt="" srcset="">
                </div>
                <div class="py-3">
                    <header>
                        <h3 class="font-bold">{{$comment->author->name}}</h3>
                        <p class="text-xs">
                            <time>{{$comment->created_at->diffForHumans()}}</time>
                        </p>
                    </header>
                    <p class="mt-2">
                    {{$comment->body}}
                    </p>
                </div>
            </article>
