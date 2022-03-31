<x-layout>
<div class="container w-full md:max-w-3xl mx-auto pt-20 mb-96 my-10 sm:px-4">
    <main class="mb-auto">
        <div class="flex flex-col items-start justify-start divide-y divide-gray-200 md:mt-24 md:flex-row md:items-center md:justify-center md:space-x-6 md:divide-y-0">
            <div class="space-x-2 pt-10 pb-8 md:space-y-5">
                <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl  sm:leading-10 md:border-r-2 md:px-6 md:text-6xl md:leading-14 uppercase">
                  Tags
                </h1>
            </div>
            
            <div class="flex max-w-lg flex-wrap">
                @foreach($tags as $tag)
                    
                    <div class="mt-3 mb-2 mr-5">
                        <a href="/?category={{$tag->slug}}" class="mr-3 text-sm font-medium uppercase text-green-500">{{$tag->name}} ({{$tag->posts->count()}})</a>
                    </div>

                @endforeach
            </div>
        </div>
        
    </main>
</div>
</x-layout>