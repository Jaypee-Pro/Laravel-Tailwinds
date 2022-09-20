@extends('layout')

    @section('content')

    @include('partials._hero')
    @include('partials._search')



    <div
    class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>

            {{-- checking if no listing --}}
            @unless(count($listings) == 0)

                @foreach ($listings as $listing)
                    {{-- accessing components --}}
                    <x-listing-card :listing="$listing"/>
                    
                @endforeach

            @else
                <p>No listings found</p>
            @endunless
    </div>
    @endsection
