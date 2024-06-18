@extends('layouts.main')
@section('content')
    @include('layouts.product-header')
<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-3 md:py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/400x400">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">The Catcher in the Rye</h1>

                <p class="leading-relaxed">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                    <div class="rounded-2xl bg-green-200 border-grey-400 flex py-1 px-3 items-center align-middle">
                        <span>Em estoque</span>
                    </div>
                </div>
                <div class="flex">
                    <span class="title-font font-medium text-2xl text-gray-900">$58.00</span>
                    <button class="flex ml-auto text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded">Comprar</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
