<x-layout>
<!--Container-->
	<div class="container w-full md:max-w-3xl mx-auto pt-20">

    <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

    
			<!--Title-->
			<div class="font-sans">
				<p class="text-base md:text-sm text-green-500 font-bold">&lt; <a href="{{route('home')}}" class="text-base md:text-sm text-green-500 font-bold no-underline hover:underline">BACK TO BLOG</a></p>
                        <img class="mt-10" src="https://picsum.photos/800/300">
						<h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">{{$post->title}}</h1>
						<p class="text-sm md:text-base font-normal text-gray-600">Published {{$post->created_at}}</p>
			</div>


			<!--Post Content-->


			<!--Lead Para-->
			<h2 class="py-6 font-sans">
                {{$post->intro}}
			</h2>

			<p class="py-6">
                {{$post->body}}
            </p>


			<!--/ Post Content-->

		</div>

		<!--Tags -->
		<div class="text-base md:text-sm text-gray-500 px-4 py-6">
			Tags: <a href="/?category={{$post->category->slug}}" class="text-base md:text-sm text-green-500 no-underline hover:underline">{{$post->category->name}}</a>
		</div>

		<!--Divider-->
		<hr class="border-b-2 border-gray-400 mb-8 mx-4">

    </div>
</x-layout>