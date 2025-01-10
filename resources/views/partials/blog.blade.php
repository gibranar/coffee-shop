@php
    $blogs = [
        [
            'imagesize' => 'h-80',
            'image' =>
                'lady-barista.avif',
            'title' => 'What is the best coffee?',
            'description' =>
                'Discover the best coffee in the world and why it`s the best. Find out what makes it so special.',
        ],
        [
            'imagesize' => 'h-96',
            'image' => 'shop-coffee-2.jpg',
            'title' => 'How to brew the perfect cup?',
            'description' => 'Discover the secrets of brewing a perfect cup of coffee at home with these simple tips.',
        ],
        [
            'imagesize' => 'h-80',
            'image' =>
                'woman-holding-coffee.avif',
            'title' => 'Health benefits of coffee',
            'description' =>
                'Explore the surprising health benefits of your daily cup of coffee and why it’s good for you.',
        ],
    ];
@endphp

<article id="blog" class="mt-40 xl:px-32 2xl:px-40">
    <article class="flex justify-between items-center">
        <h1 class="uppercase font-bold text-4xl">Read our blogs</h1>
        <h3 class="uppercase font-bold underline underline-offset-8">Read blog posts</h3>
    </article>
    <article class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
        @foreach ($blogs as $blog)
            <figure>
                <img class="rounded-lg w-full {{ $blog['imagesize'] }} object-cover" src="{{ asset('img/'. $blog['image']) }}"
                    alt="Blog Image">
                <figcaption class="mt-2">
                    <h1 class="uppercase font-bold text-xl">{{ $blog['title'] }}</h1>
                    <p class="font-faberSansStd mt-2">{{ $blog['description'] }}</p>
                </figcaption>
            </figure>
        @endforeach
    </article>
</article>
