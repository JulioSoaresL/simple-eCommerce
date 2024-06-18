@extends('layouts.main')

@section('content')

    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">

            @foreach($products as $product)
            <div class="-my-8 divide-y-2 divide-gray-100">
                <div class="py-8 flex flex-wrap md:flex-nowrap space-x-5 items-center border">

                    <div class="md:w-64 md:mb-0 mb-6 flex flex-col justify-around h-40 md:border-r-2">
                        <span class="font-semibold title-font text-gray-700 uppercase">{{ $product->category }}</span>
                        <span class="mt-1 text-gray-500 text-sm">{{ date('d M Y', strtotime($product->created_at)) }}</span>
                        <span class="font-semibold title-font text-gray-700 uppercase">R$ {{ $product->price }}</span>
                    </div>

                    <div class="flex flex-col md:flex-grow justify-around">
                        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $product->name }}</h2>
                        <p class="leading-relaxed">{{ $product->description }}</p>
                        <a class="text-indigo-500 inline-flex items-center mt-4 cursor-pointer">
                            Editar
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
