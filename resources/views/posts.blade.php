<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    @foreach ( $posts as $post )

    <div class="mt-6 max-w-6xl max-lg:max-w-3xl mx-auto bg-gray-800 rounded-lg">
        <article class="py-8 pl-8 max-w-screen-md border-b border-gray-300 ">
            <a href="/posts/{{$post['slug']}}" class="hover:underline">
                <h2 class="mb-l text-3xl tracking-tight font-bold text-white">{{$post['title']}}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="/authors/{{$post->author->id}}" class="hover:underline">{{$post->author->name}} </a> | {{$post->created_at->diffForHumans()}}
            </div>
            <p class="my-4 font-light text-white">{{Str::limit($post['body'], 100)}}</p>
            <a href="/posts/{{$post['slug']}}" class="font-medium text-white hover:underline">Read More &raquo;</a>

        </article>
    </div>

    @endforeach
</x-layout>
