<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- <div class="mt-6 max-w-6xl max-lg:max-w-3xl mx-auto bg-gray-800 rounded-lg">
        <article class="pl-8 py-8 max-w-screen-md">

            <h2 class="mb-l text-3xl tracking-tight font-bold text-white">{{$post['title']}}</h2>

            <div class="text-base text-white">
                By
                <a href="/authors/{{$post->author->username}}" class="hover:underline text-base text-gray-500">{{$post->author->name}} </a>
                in
                <a href="/categories/{{$post->category->slug}}" class="hover:underline text-base text-gray-500">{{$post->category->name}}</a>
                | {{$post->created_at->diffForHumans()}}
            </div>
            <p class="my-4 font-light text-white">{{$post['body']}}</p>
            <a href="/posts" class="font-medium text-white hover:underline">Back to Blog &laquo;</a>

        </article>

    </div> --}}

<main class="mt-6 ml-14 mr-14 pt-8 pb-16 lg:pt-16 lg:pb-24 bg-gray-800 rounded-lg">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <a href="/posts" class="font-medium text-sm text-white hover:underline">&laquo; Back to All Posts</a>
                <address class="flex items-center my-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                        <div>
                            <a href="/posts?author={{$post->author->username}}" rel="author" class="text-xl font-bold text-white dark:text-white">{{ $post->author->name }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400 mb-1">{{$post->created_at->diffForHumans()}}</p>

                            <a href="/posts?category={{$post->category->slug}}">
                                <span class="bg-{{ $post->category->color }}-100 text-black text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    {{$post->category->name}}
                                </span>
                            </a>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-white lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
            </header>
            <p>{{$post->body}}</p>
        </article>
    </div>
</main>

</x-layout>
