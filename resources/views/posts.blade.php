<x-layout>
<header class="mt-10 text-center">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-semibold">
                  <span class="text-red-500">#</span>  Latest from <span class="text-red-500">the blog</span>
                </h1>
                <div class="tw-flex tw-justify-center mt-8 space-x-4 justify-between">
                <span class="bg-gray-200 inline-block rounded-xl">
                <select class= "appereance-none bg-transparent py-2 px-5 text-sm font-semibold">
                    <option value='Category' selected>Category</option>
                    @foreach($categories as $cat)
                        <option value= {{$cat->slug}}>{{$cat->name}}</option>
                    @endforeach
                </select>
                <svg style="transform: rotate(-90deg); position:absolute; right: 12px; pointer-events:none;" width="18" height="18" viewBox="0.83 1 20.15 20.15"><g fill="none" fill-rule="evenodd"><path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path><path class="fill-current" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path></g></svg>
                </span>
                <span class="bg-gray-200 inline-block rounded-xl">
                <select class= "appereance-none bg-transparent py-2 px-5 text-sm font-semibold">
                    <option value='Category' selected>Other Rules</option>
                    <option value='Comment'>Comment</option>
                    <option value= 'Author'>Author</option>                
                </select>
                <svg style="transform: rotate(-90deg); position:absolute; right: 12px; pointer-events:none;" width="18" height="18" viewBox="0.83 1 20.15 20.15"><g fill="none" fill-rule="evenodd"><path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path><path class="fill-current" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path></g></svg>
                </span>
                <span class="bg-gray-200 inline-block rounded-xl py-2 px-5">
                <svg  style=" display:flex; position:absolute; pointer-events:none;" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M16.041 15.856c-0.034 0.026-0.067 0.055-0.099 0.087s-0.060 0.064-0.087 0.099c-1.258 1.213-2.969 1.958-4.855 1.958-1.933 0-3.682-0.782-4.95-2.050s-2.050-3.017-2.050-4.95 0.782-3.682 2.050-4.95 3.017-2.050 4.95-2.050 3.682 0.782 4.95 2.050 2.050 3.017 2.050 4.95c0 1.886-0.745 3.597-1.959 4.856zM21.707 20.293l-3.675-3.675c1.231-1.54 1.968-3.493 1.968-5.618 0-2.485-1.008-4.736-2.636-6.364s-3.879-2.636-6.364-2.636-4.736 1.008-6.364 2.636-2.636 3.879-2.636 6.364 1.008 4.736 2.636 6.364 3.879 2.636 6.364 2.636c2.125 0 4.078-0.737 5.618-1.968l3.675 3.675c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414z"></path></svg>
                <form method="GET">
                    <input type="text" name="search" placeholder="Find me something" class="bg-transparent placeholder-black">
                </form>
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

