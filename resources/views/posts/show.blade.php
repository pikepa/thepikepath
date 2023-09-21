<x-guest-layout>  
    <article class="prose prose-xl">   
        <h1>{{ $post->title }}</h1>
        <div>{{ $post->contents }}</div>
        <x-post-meta :post="$post"/>
    </article>
</x-guest-layout>