<article class="h-[calc(100vh-20.5vh)] grid grid-cols-1 md:grid-cols-2">
    <section class="flex items-center justify-center border rounded">
        <img class="rounded object-cover w-full h-full"
            src="https://static.tnn.in/thumb/msid-104069590,thumbsize-34210,width-1280,height-720,resizemode-75/104069590.jpg"
            alt="">
    </section>
    <section class="flex flex-col items-center justify-center border rounded"
        style="background: url({{ asset('img/bg-polkadot.jpg') }})">
        <h1 class="uppercase text-4xl font-medium">Special <span class="text-primary">Coffee</span></h1>
        <p class="w-4/6 text-center text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero
            officiis,
            expedita enim
            nihil dolor odio eos similique vel autem natus magnam molestias in pariatur? Iusto quam
            dolore pariatur.</p>
        <button class="border border-gray-500 mt-6 py-2 px-5 rounded-full hover:bg-primary transition-all">Order
            Now</button>
    </section>
    <section class="col-span-2 h-full flex justify-center items-center">
        @include('components.quote-home')
    </section>
</article>
