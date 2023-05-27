<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left  lg:inline-flex">
            {{ isset($currentCategory)? $currentCategory->name : 'Categories'}}
            <x-icon name='down-arrow' style="right: 12px;" class="absolute pointer-events-none"/>
        </button>
    </x-slot>

    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}"
                     :active="request()->routeIs('home')"> All </x-dropdown-item>
    @foreach($categories as $category)


        <x-dropdown-item href="/?category={{$category->slug}}&{{ http_build_query(request()->except('category', 'page')) }}" :active='request()->is("categories/{$category->slug}")'>
            {{ ucwords($category->name) }}
        </x-dropdown-item>




        {{--                    <a href="/categories/{{ $category->slug }}"--}}
        {{--                       class="block text-left px-3 text-sm leading-6--}}
        {{--                           hover:bg-blue-500 focus:bg-blue-500 focus:text-white hover:text-white--}}
        {{--                           {{ isset($currentCategory) && $currentCategory->id == $category->id ? 'bg-blue-500 text-white' : '' }}--}}
        {{--                           ">--}}
        {{--                        {{ ucwords($category->name )}}--}}
        {{--                    </a>--}}


    @endforeach
</x-dropdown>
