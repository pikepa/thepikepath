
<x-guest-layout>
    <h1 class="text-3xl font-bold">Tag: {{ Str::title($tag) }}</h1>

    <div class="mt-8 space-y-16">
            @foreach($posts as $post)
             <x-post-list-item :post="$post" />
            @endforeach

            {{ $posts->links() }}

    </div>

    </x-guest-layout>
    