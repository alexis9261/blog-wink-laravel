<div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @foreach ($other_posts as $post)

            @include('components.other-posts-card')

        @endforeach

    </div>
</div>
