<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- AlpineJs --}}
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>

    <div class="min-h-screen bg-gray-50 relative">
        {{-- navbar --}}
        @include('components.navbar')


        {{-- Page Content --}}
        <main>
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                  <h1 class="text-3xl font-bold text-gray-900">
                    @yield('section')
                  </h1>
                </div>
              </header>
              <div>
                  @yield('content')
              </div>
        </main>

    </div>

</body>
</html>

