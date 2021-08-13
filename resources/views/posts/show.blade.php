
@extends('layouts.app')
@section('title')
    {{ $post->title }}
@endsection

@section('content')


    <div class="text-center max-w-2xl mx-auto mt-6">
        <h1 class="text-4xl font-semibold text-gray-800 mb-2">{{ $post->title }}</h1>
        <p class="text-xl text-gray-600">{{ $post->excerpt }}</p>
    </div>
    {{-- Datos del autor --}}
    <div class="max-w-2xl mx-auto mt-6">
        <div class="grid grid-cols-5">
            <div class="col-span-3">
                <div class="flex">
                    <div class="flex-initial">
                        <div class="h-14 w-14 bg-cover bg-center bg-no-repeat overflow-hidden rounded-full" style="background-image: url('{{ $post->author->avatar }}')"></div>
                    </div>
                    <div class="flex-auto ml-2 self-center">
                        <span class="self-center text-sm text-gray-900 items-center font-semibold">
                            {{ $post->author->name }}
                        </span>
                        <p class="text-gray-600">
                            {{ $post->created_at->diffForHumans() }}
                            <span class="text-xs">-</span>
                            <span>@php echo ceil(count(explode(" ", strip_tags($post->body))) / 250); @endphp min lectura</span>
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-span-2 self-end">
                <div class="flex justify-end">
                    <a class="flex-initial" rel="noreferrer noopnener" target="_blank" href="">
                        <svg class="h-8 w-8 fill-current text-gray-600" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 25C5.58608 25 0 19.3681 0 12.5C0 5.58608 5.58608 0 12.5 0C19.3681 0 25 5.58608 25 12.5C25 19.3681 19.3681 25 12.5 25Z" fill="none"/>
                            <path d="M21.2308 7.65738C20.59 7.93846 19.9072 8.12477 19.1954 8.21523C19.9277 7.778 20.4866 7.09092 20.7494 6.26277C20.0666 6.66985 19.3128 6.95738 18.5094 7.11785C17.8611 6.42754 16.9371 6 15.9291 6C13.9734 6 12.3989 7.58738 12.3989 9.53338C12.3989 9.81338 12.4226 10.0826 12.4808 10.3389C9.544 10.1957 6.94538 8.78815 5.19969 6.644C4.89492 7.17277 4.71615 7.778 4.71615 8.42954C4.71615 9.65292 5.34615 10.7374 6.28523 11.3652C5.71769 11.3545 5.16092 11.1897 4.68923 10.9302C4.68923 10.9409 4.68923 10.9549 4.68923 10.9689C4.68923 12.6855 5.91369 14.1114 7.51938 14.4398C7.23185 14.5185 6.91846 14.5562 6.59323 14.5562C6.36708 14.5562 6.13877 14.5432 5.92446 14.4958C6.38215 15.8948 7.68092 16.9232 9.22523 16.9566C8.02338 17.8968 6.49738 18.4632 4.84538 18.4632C4.55569 18.4632 4.27785 18.4503 4 18.4148C5.56477 19.4238 7.41923 20 9.41908 20C15.9194 20 19.4732 14.6154 19.4732 9.948C19.4732 9.79185 19.4678 9.64108 19.4603 9.49138C20.1614 8.99385 20.7505 8.37246 21.2308 7.65738Z" />
                        </svg>
                    </a>
                    <a class="flex-initial" rel="noreferrer noopnener" target="_blank" href="">
                        <svg class="h-8 w-8 fill-current text-gray-600" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 25C5.58608 25 0 19.3681 0 12.5C0 5.58608 5.58608 0 12.5 0C19.3681 0 25 5.58608 25 12.5C25 19.3681 19.3681 25 12.5 25Z" fill="none" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1649 12.5V19.7344C10.1649 19.826 10.2565 19.9176 10.3481 19.9176H13.0495C13.1411 19.9176 13.2327 19.826 13.2327 19.7344V12.4084H15.2015C15.2931 12.4084 15.3847 12.3168 15.3847 12.2253L15.5678 10.0275C15.5678 9.93589 15.4763 9.84431 15.3847 9.84431H13.2327V8.28754C13.2327 7.92124 13.5532 7.60072 13.9195 7.60072H15.4305C15.5221 7.60072 15.6136 7.50915 15.6136 7.41757V5.21977C15.6136 5.1282 15.5221 5.03662 15.4305 5.03662H12.9122C11.4012 5.03662 10.2107 6.2271 10.2107 7.73809V9.8901H8.88286C8.79128 9.8901 8.69971 9.98168 8.69971 10.0733V12.2711C8.69971 12.3626 8.79128 12.4542 8.88286 12.4542H10.1649V12.5Z" />
                        </svg>
                    </a>
                    <span class="flex-initial">
                        <svg class="h-8 w-8 fill-current text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/></svg>
                    </span>
                </div>
            </div>
        </div>

    </div>

    {{-- imagen principal del post --}}
    <div class="my-10 text-center" style="height: 60vh;">
        <div class="w-full bg-cover bg-center bg-no-repeat overflow-hidden mb-2" style="background-image: url('{{ $post->featured_image }}'); height: 60vh;">
        </div>
        <span class="text-gray-500 text-sm">{!! $post->featured_image_caption !!}</span>
    </div>

    {{-- contenido del post --}}
    <div class="text-left text-lg max-w-2xl mx-auto pt-5">
            <p class="mt-6">
                {!! $post->body !!}
            </p>

    </div>

    {{-- tags --}}
    <div class="text-left text-lg max-w-2xl mx-auto pt-5">
        <div class="flex flex-wrap">
            @foreach ($tags as $tag)
            <a class="text-sm bg-gray-200 rounded-sm py-2 px-3 text-gray-500 mr-2 mb-2" href="{{ $tag->slug }}">
                {{ $tag->name }}
            </a>
            @endforeach
        </div>
    </div>

    {{-- perfil Autor --}}
    <div class="text-left text-lg max-w-2xl mx-auto pt-8 mb-2 flex">
        <div class="flex-initial">
            <div class="h-20 w-20 bg-cover bg-center bg-no-repeat overflow-hidden rounded-full" style="background-image: url('{{ $post->author->avatar }}')"></div>
        </div>
        <div class="flex-auto ml-3 self-center">
            <p class="text-xl font-light">Escrito por</p>
            <span class="self-center text-lg text-gray-900 items-center font-semibold pb-4">
                {{ $post->author->name }}
            </span>
            <p class="text-gray-500 mt-2">
                {{ $post->excerpt }}
            </p>
        </div>
    </div>


    <div class="h-40 py-10">
        @include('posts.sections.other_posts')
    </div>

 @endsection
