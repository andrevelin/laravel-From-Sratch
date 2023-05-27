<x-layout>
    {{--    @foreach($posts as $post)--}}

    {{--        <article>--}}
    {{--            <h1>--}}
    {{--                <a href="/posts/{{ $post->slug }}">--}}
    {{--                    {{ $post->title}}--}}

    {{--                </a>--}}
    {{--            </h1>--}}


    {{--            <p>--}}
    {{--                By <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name }} </a> in <a href="/categories/{{ $post->category->slug }}">--}}
    {{--                    {{ $post->category->name }}--}}
    {{--                </a>--}}
    {{--            <p>--}}

    {{--            </p>--}}
    {{--            <div>--}}
    {{--                {!! $post->excerpt !!}--}}
    {{--            </div>--}}
    {{--        </article>--}}
    {{--    @endforeach--}}

    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())
            <x-posts-grid :posts="$posts"/>
            {{ $posts->links() }}
            {{-- metodo Links funciona quando estamos usando Pagination--}}
        @else
            <p class="text-center"> No posts yet</p>

        @endif


    </main>

</x-layout>

