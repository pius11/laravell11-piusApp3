<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
          <a href="posts/{{ $post->slug }}">
            <h3 class="mb-2 text-3xl tracking-tigh font-bold text-gray-800 hover:underline">{{ $post['title'] }}</h3>
          </a>
            <div class="mb-3">
                <a href="/author/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }}</a> | {{ $post->created_at->format('j F Y') }}
            </div>
            <p class="my-4 font-light">{{Str::limit($post->body, 200 ) }}</p>
            <a href="/posts/{{ $post->slug}}" class="font-medium text-blue-500 hover:text-blue-700 hover:underline">read more &raquo;</a>
        </article>
    @endforeach
</x-layout>
