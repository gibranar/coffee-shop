@php
    $instagramPosts = [
        'https://img.freepik.com/free-photo/side-view-cup-coffee-with-wafer-roll-filled-with-condensed-milk-plate-coffee-beans_141793-6962.jpg?ga=GA1.1.1316726918.1729530717&semt=ais_hybrid',
        'https://c8.alamy.com/comp/2BJ8HJ9/cup-of-coffee-and-note-good-morning-on-wooden-background-2BJ8HJ9.jpg',
        'https://img.freepik.com/free-photo/cafe-female-owner-smiling-with-positive-happiness-ready-open-customerasian-female-woman-with-apron-hand-present-tray-coffee-cup-warm-welcome-condident-standing-entrance-coffeeshop_609648-2714.jpg?ga=GA1.1.1316726918.1729530717&semt=ais_hybrid',
        'https://img.freepik.com/free-photo/interior-shot-cafe-with-chairs-near-bar-with-wooden-tables_181624-1669.jpg?ga=GA1.1.1316726918.1729530717&semt=ais_hybrid',
        'https://img.freepik.com/free-photo/smiling-asian-girl-barista-pouring-hot-water-from-kettle-brewing-filter-coffee-standing_1258-203358.jpg?ga=GA1.1.1316726918.1729530717&semt=ais_hybrid',
        'https://img.freepik.com/free-photo/top-view-male-barista-holding-professional-coffee-machine-cup_23-2148824423.jpg?ga=GA1.1.1316726918.1729530717&semt=ais_hybrid',
    ];
@endphp
<article id="pages" class="mt-40 xl:px-32 2xl:px-40">
    <h1 class="uppercase text-center font-bold text-4xl">Follow Our Instagram #Beanie</h1>
    <article class="grid grid-cols-6 gap-4 mt-4">
        @foreach ($instagramPosts as $post)
            <img class="rounded-lg w-full h-full object-cover" src="{{ $post }}" alt="Post Image">
        @endforeach
    </article>
</article>
