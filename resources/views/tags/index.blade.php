
<x-guest-layout>
    <h1 class="text-3xl font-bold">Displaying Tag: {{ Str::title($tag) }}</h1>

    <div class="mt-8 space-y-16">
            @foreach($posts as $post)
             <x-post-list-item :post="$post" />
            @endforeach
    </div>
    </x-guest-layout>
    