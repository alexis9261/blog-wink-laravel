<div class="grid grid-cols-7 gap-2 mb-8">
    <div class="col-span-5">
        <div class="mb-2 flex">
            <div class="">
                <div class="h-6 w-6 bg-cover bg-center bg-no-repeat overflow-hidden rounded-full" style="background-image: url('{{ $post->author->avatar }}')"></div>
            </div>
            <span class="self-center text-sm text-gray-900 items-center font-semibold ml-2">
                {{ $post->author->name }}
            </span>
        </div>
        <div class="mb-4">
            <a href="{{ route('posts.show', $post->slug) }}">
                <h3 class="text-gray-900 font-bold text-2xl" >{{ $post->title }}</h3>
                <p class="text-gray-700 text-base mt-2">{{ $post->excerpt }}</p>
            </a>
        </div>
        <div>
            <p class="text-gray-600">
                {{ $post->created_at->diffForHumans() }}
                <span class="text-xs">-</span>
                <span>@php echo ceil(count(explode(" ", strip_tags($post->body))) / 250); @endphp min lectura</span>
                <span class="text-xs">-</span>
                <a class="text-sm bg-gray-200 rounded-full px-2" href="{{ $post->tags[0]->slug }}">{{ $post->tags[0]->name }}</a>
            </p>
        </div>
    </div>
    <div class="col-span-2 self-center">
        <a href="{{ route('posts.show', $post->slug) }}">
            <div class="h-20 md:h-28 lg:h-40 w-full bg-cover bg-center bg-no-repeat overflow-hidden" style="background-image: url('{{ $post->featured_image }}')">
            </div>
        </a>
    </div>

</div>
