<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mt-6 max-w-6xl max-lg:max-w-3xl mx-auto bg-gray-800 rounded-lg">
        <article class="pl-8 py-8 max-w-screen-md">

            <h2 class="mb-l text-3xl tracking-tight font-bold text-white">{{$post['title']}}</h2>

            <div class="text-base text-gray-500">
                <a href="#">{{$post['author']}}</a> | {{$post->created_at->diffForHumans()}}
            </div>
            <p class="my-4 font-light text-white">{{$post['body']}}</p>
            <a href="/posts" class="font-medium text-white hover:underline">Back to Blog &laquo;</a>

        </article>
    </div>

</x-layout>
