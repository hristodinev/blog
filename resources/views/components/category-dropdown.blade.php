<span class="bg-gray-200 inline-block rounded-xl w-32">
                    <div x-data="{show: false}"@click.away="show=false">
                        <button @click="show=! show" class="py-2 px-5 text-sm font-semibold">
                            {{isset($currentCategory)? ucwords($currentCategory->name): 'Categories'}}
                        </button>
                        <div style="display:none;" x-show="show" class="py-2 absolute bg-gray-200 rounded-xl w-32 text-left">
                        @foreach($categories as $category)
                            <a href="/?category={{$category->slug}}"
                            class="block text-left px-3 text-sm leading-6 hover:bg-gray-300"
                            >{{$category->name}}
                        </a>
                        @endforeach
                        </div>
                    </div>
</span>