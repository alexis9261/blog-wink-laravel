<div class="col-span-1">
    <div class="grid grid-cols-7 gap-1 mb-8">
        <div class="col-span-4">
            <a href="{{ route('posts.show', $post->slug) }}">
                <h3 class="text-gray-900 font-bold text-lg" >{{ $post->title }}</h3>
            </a>
            <span class="self-center text-sm text-gray-900 items-center font-semibold">
                {{ $post->author->name }}
            </span>
        </div>
        <div class="col-span-3">
            <a href="{{ route('posts.show', $post->slug) }}">
                <div class="h-20 md:h-20 lg:h-24 w-full bg-cover bg-center bg-no-repeat overflow-hidden" style="background-image: url('{{ $post->featured_image }}')">
                </div>
            </a>
        </div>

    </div>

</div>
