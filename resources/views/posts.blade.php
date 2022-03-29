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
        <li class="py-4">
            <article class="space-y-2 px-3 xl:grid xl:grid-cols-6 xl:items-baseline xl:space-y-0">
                <div class="space-y-2 xl:col-span-2">
                {{ \Carbon\Carbon::parse($post->created_at)->format(' jS \of F Y') }} 
                </div>
                <div class="space-y-3 xl:col-span-4">
                    <div>
                    <h3 class="text-2xl font-bold leading-8 tracking-tight">{{$post->title}}</h3>
                    </div>
                    <span class=" text-sm font-medium uppercase text-green-500">
                        {{$post->category->name}}
                    </span>
                    <div class="prose max-w-none text-gray-500">
                        {{$post->intro}}
                    </div>
                </div>
            </article>
        </li>
        @endforeach
        </ul>
		<!--Next & Prev Links-->
		<div class="font-sans flex justify-between content-center px-4 pb-12 mt-10">
			<div class="text-left">
				<span class="text-xs md:text-sm font-normal text-gray-600">&lt; Previous Post</span><br>
				<p><a href="#" class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Blog title</a></p>
			</div>
			<div class="text-right">
				<span class="text-xs md:text-sm font-normal text-gray-600">Next Post &gt;</span><br>
				<p><a href="#" class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Blog title</a></p>
			</div>
		</div>
		<!--/Next & Prev Links-->
        <x-subscribe_mail />
	</div>
	<!--/container-->

</x-layout>

