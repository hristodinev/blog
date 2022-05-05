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
        @auth()
        <section class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
            <form action="/posts/{{$post->slug}}/comments" method="POST">
                @csrf
                <header class="flex items-center pb-4">
                    <h2 class="py-4 px-3">Want to participate?</h2>
                </header>
                <div class="py-4 px-3">
                    <textarea name="comment_body" class="w-full text-sm focus:outline-none focus:ring" cols="30" rows="10" placeholder="Your comment ..." required></textarea>
                  @error('comment_body')
                    <span class="text-xs text-red-700">{{$message}}</span>
                  @enderror
                </div>
                <footer class="py-4 px-3">
                    <button type="submit" class="bg-green-500 text-white py-2 px-4 text-sm rounded-2xl">Post</button>
                </footer>
            </form>
        </section>
        @endauth()
        <section class="col-span-8 col-start-5 mt-10 space-y-6 mb-2">
        @foreach($comments as $comment)
            <x-post-comment :comment="$comment" />
        @endforeach
    </div>
</x-layout>
