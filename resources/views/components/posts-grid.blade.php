@props(['posts'])

<x-post-featured-card :post="$posts[0]" />  {{--   passando o primeiro item(0) da coleção de posts para o componente   --}}

@if($posts->count()>1)


    <div class="lg:grid lg:grid-cols-6">
        @foreach($posts->skip(1) as $post)
            <x-post-card :post="$post"
                         class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
            />

        @endforeach


    </div>

@endif
