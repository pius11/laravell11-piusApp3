<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    
        <article class="py-8 max-w-screen-md ">
          
            <h3 class="mb-2 text-3xl tracking-tigh font-bold text-gray-800 hover:underline">{{ $post['title'] }}</h3>
         
            <div class="mb-3">
                <a href="#">{{ $post['author'] }}</a> | 1 januari 2024
            </div>
            <p class="my-4 font-light">{{$post['body'] }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:text-blue-700 hover:underline">&laquo; bact to posts</a>
        </article>
    
</x-layout>
