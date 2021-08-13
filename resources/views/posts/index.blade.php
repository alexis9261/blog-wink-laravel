
@extends('layouts.app')
@section('title', 'Blog desarrollado con Wink, Laravel. FrontEnd Tailwinds')

@section('section')
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-3">
            <h2 class="text-2xl">Sitio web creado con:</h2>
                <ul class="text-base font-semibold">
                    <li>Laravel 8</li>
                    <li>Wink - Laravel Package</li>
                    <li>TailwindsCSS</li>
                    <li>AlpineJS</li>
                </ul>
        </div>
        <div class="col-span-2 p-4 bg-gray-100 rounded-md shadow-sm">
            <h3 class="text-base font-normal">Alexis Montilla</h3>
            <ul class="text-sm font-semibold">
                <li><a class="text-gray-700" href="https://github.com/alexis9261" target="_blank" rel="noopener noreferrer">GitHub</a></li>
                <li><a class="text-blue-700" href="https://www.linkedin.com/in/alexis9261/" target="_blank" rel="noopener noreferrer">Linkedin</a></li>
                <li><a class="text-blue-700" href="alexis.montilla@oxas.tech" target="_blank" rel="noopener noreferrer">alexis.montilla@oxas.tech</a></li>
            </ul>

        </div>
    </div>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-14">
            <div class="col-span-2">

                @foreach ($posts as $post)
                @include('components.post-card')

                @endforeach
            </div>
            <div class="col-span-1">
                @include('components.aside-info')
            </div>

        </div>

    </div>
@endsection
