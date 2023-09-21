<x-guest-layout>

<div class="space-y-16">

    @if($posts->count())
        @foreach($posts as $post)
            <x-post-list-item :post="$post" />
        @endforeach

        {{ $posts->links() }}
    @else
    <p>Nothing Here Yet!</p>
    @endif
</div>
</x-guest-layout>
