<x-layout>
	<!--Container-->
	<div class="container w-full md:max-w-3xl mx-auto pt-20">
        <div class="space-y-2 px-3 pt-6 pb-8 md:space-y-5">
            <h1 class="text-2xl uppercase font-extrabold leading-6 sm:text-4xl sm:leading-8 md:text-6xl md-leading-12">
                Latest Posts
            </h1>
        </div>
		<ul>
        @foreach($posts as $post)
        <li class="py-4  border-t-2 mb-7">
            <article class="space-y-2 px-3 xl:grid xl:grid-cols-6 xl:items-baseline xl:space-y-0">
                <div class="space-y-2 xl:col-span-2">
                {{ \Carbon\Carbon::parse($post->created_at)->format(' jS \of F Y') }} 
                </div>
                <div class="space-y-3 xl:col-span-4">
                    <div>
                    <h3 class="text-2xl font-bold leading-8 tracking-tight">
                    <a href="/posts/{{$post->slug}}">{{$post->title}}</a>    
                    </h3>
                    </div>
                    <span class=" text-sm font-medium uppercase text-green-500">
                    <a href="/?category={{$post->category->slug}}">{{$post->category->name}}</a>
                    </span>
                    <div class="prose max-w-none text-gray-500">
                        {{$post->intro}}
                    </div>
                </div>
            </article>
        </li>
        @endforeach
        </ul>
        <div class="mb-10">
            <!--Next & Prev Links-->
		{{ $posts->links() }}
		<!--/Next & Prev Links-->
        </div>
	</div>
	<!--/container-->
</x-layout>

