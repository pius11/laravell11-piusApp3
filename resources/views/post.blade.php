<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    
        <article class="py-8 max-w-screen-md ">
          
            <h3 class="mb-2 text-3xl tracking-tigh font-bold text-gray-800 hover:underline">{{ $post['title'] }}</h3>
         
            <div class="mb-3">
                by
                <a href="/author/{{ $post->author->user_name }}" class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a> 
                in
                <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a> |
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">{{$post->body }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:text-blue-700 hover:underline">&laquo; bact to posts</a>
        </article>
    
</x-layout>

