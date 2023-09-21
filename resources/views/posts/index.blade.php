<x-guest-layout>

<div class="space-y-16">

    @if($posts->count())
        @foreach($posts as $post)
            <article class="prose">
                <h1 class="not-prose text-3xl font-extrabold"><a href="{{ route('posts.show',$post->slug) }}" 
                    class="hover:text-blue-500 tranisition-colors duration-100">
                    {{ $post->title }}
                </a></h1>

                <div>
                    {{ $post->teaser }}
                </div>

                <x-post-meta :post="$post"/>

            </article>
        @endforeach
    @else
    <p>Nothing Here Yet!</p>
    @endif
</div>
</x-guest-layout>