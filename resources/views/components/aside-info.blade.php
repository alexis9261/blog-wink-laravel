<div class="w-full">
    <h6 class="text-base font-bold text-gray-800 mb-4">Descubre otros temas que te puedan interesar</h6>
    <div>
        <div class="flex flex-wrap">
            @foreach ($tags as $tag)
            <a class="text-sm border-2 border-gray-300 rounded-sm py-2 px-3 text-gray-500 mr-2 mb-2" href="{{ $tag->slug }}">
                {{ $tag->name }}
            </a>
            @endforeach
        </div>
    </div>
    <div class="mt-3">
        <a class="text-blue-800 text-sm font-semibold" href="">Ver todos los temas</a>
    </div>
    <hr class="mt-4 mb-3">
    <div>
        <div class="flex flex-wrap">
            <a class="text-gray-500 font-sm pr-4" href="">Acerca de</a>
            <a class="text-gray-500 font-sm pr-4" href="">Politicas</a>
            <a class="text-gray-500 font-sm pr-4" href="">Status</a>
            <a class="text-gray-500 font-sm pr-4" href="">Escritores</a>
        </div>

    </div>
</div>

