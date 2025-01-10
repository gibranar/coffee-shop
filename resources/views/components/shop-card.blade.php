@php
    $products = [
        [
            'image' => 'coffee-pouch.jpg',
            'name' => 'Caramelicious',
            'price' => '$29.00',
        ],
        [
            'image' => 'coffee-bags.webp',
            'name' => 'Mocha Delight',
            'price' => '$35.00',
        ],
        [
            'image' => 'Apotheos.jpg',
            'name' => 'Espresso Dream',
            'price' => '$40.00',
        ],
        [
            'image' =>
                'coffee-ethiopia.jpg',
            'name' => 'Vanilla Bliss',
            'price' => '$25.00',
        ],
    ];
@endphp

@foreach ($products as $product)
    <figure class="h-[400px] flex flex-col justify-center mt-4">
        <img class="rounded-md object-cover w-full h-full" src="{{ asset('img/'. $product['image']) }}" alt="{{ $product['name'] }}">
        <h3 class="text-lg uppercase font-semibold mt-4">{{ $product['name'] }}</h3>
        <figcaption class="text-primary font-semibold">{{ $product['price'] }}</figcaption>
    </figure>
@endforeach
