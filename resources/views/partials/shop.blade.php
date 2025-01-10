<article id="shop" class="h-screen pt-8 xl:px-32 2xl:px-40">
    <section class="flex items-center justify-between">
        <h1 class="uppercase text-4xl font-bold">Shop Best Coffee</h1>
        <article class="flex items-end gap-8">
            <a class="underline underline-offset-8 uppercase font-semibold" href="">View All</a>
            <section class="flex items-center gap-2">
                <span class="bg-gray-300 p-1 flex justify-center items-center rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        class="size-6 stroke-black">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span class="bg-primaryDark2 p-1 flex justify-center items-center rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        class="size-6 stroke-gray-200">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
            </section>
        </article>
    </section>
    <section class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @for ($i = 0; $i < 4; $i++)
            @include('components.shop-card')
        @endfor
    </section>
    <section class="h-1/2 pt-8 flex justify-center items-center relative">
        <span
            class="absolute left-0 flex items-center justify-center border border-gray-300 p-3 rounded-full cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="size-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </span>
        @include('components.quote-with-writer')
        <span
            class="absolute right-0 flex items-center justify-center border border-gray-300 bg-primaryDark2 p-3 rounded-full cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="size-6 stroke-gray-200">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </span>
    </section>
</article>
<article class="flex flex-col gap-40 xl:mt-28 2xl:mt-8 xl:px-32 2xl:px-40">
    <article class="grid grid-cols-4">
        @for ($i = 0; $i < 4; $i++)
            <article class="flex {{ $i % 2 == 0 ? 'flex-col' : 'flex-col-reverse' }} flex-col h-full">
                <section class="h-1/2">
                    <img class="w-full h-full bg-cover rounded"
                        src="https://www.whiskaffair.com/wp-content/uploads/2021/01/Filer-Coffee-2-3.jpg"
                        alt="">
                </section>
                <section class="h-1/2 flex flex-col gap-2 justify-center items-center text-center px-8">
                    <h1 class="uppercase font-medium text-2xl font-calibri">Coffee Accessories</h1>
                    <p class="font-light leading-6 font-sans">Lorem ipsum dolor sit amet consectetur aliquam dicta autem,
                        recusandae
                        libero
                        consectetur id! Soluta temporibus dolor ut.</p>
                    <h2 class="uppercase font-bold font-sans underline underline-offset-8">Shop Category</h2>
                </section>
            </article>
        @endfor
    </article>
    <article id="shop-single" class="grid grid-cols-2 gap-20">
        <section class="flex flex-col gap-8">
            <h1 class="uppercase font-bold text-4xl">New Arrivals</h1>
            <article class="flex flex-col gap-4">
                @for ($i = 0; $i < 5; $i++)
                    <section class="w-full flex gap-4 justify-between">
                        <figure class="flex gap-4 items-center">
                            <img class="w-14 h-14 object-cover rounded-full"
                                src="https://mybartender.com/wp-content/uploads/2024/10/Coconut-Kiss-of-Death.png"
                                alt="">
                            <figcaption class="flex flex-col gap-1">
                                <h2 class="uppercase font-bold">Coconut Kiss</h2>
                                Lorem ipsum dolor sit amet
                            </figcaption>
                        </figure>
                        <h2 class="font-semibold">$2.99</h2>
                    </section>
                @endfor
            </article>
            <a href="" class="w-fit uppercase font-semibold underline underline-offset-8">View All</a>
        </section>
        <section class="flex flex-col gap-8">
            <h1 class="uppercase font-bold text-4xl">Best Selling</h1>
            <article class="flex flex-col gap-4">
                @for ($i = 0; $i < 5; $i++)
                    <section class="w-full flex gap-4 justify-between">
                        <figure class="flex gap-4 items-center">
                            <img class="w-14 h-14 object-cover rounded-full"
                                src="https://mybartender.com/wp-content/uploads/2024/10/Coconut-Kiss-of-Death.png"
                                alt="">
                            <figcaption class="flex flex-col gap-1">
                                <h2 class="uppercase font-bold">Coconut Kiss</h2>
                                Lorem ipsum dolor sit amet
                            </figcaption>
                        </figure>
                        <h2 class="font-semibold">$2.99</h2>
                    </section>
                @endfor
            </article>
            <a href="" class="w-fit uppercase font-semibold underline underline-offset-8">View All</a>
        </section>
    </article>
    <article class="flex flex-col gap-4 items-center justify-center">
        <h1 class="uppercase text-4xl font-bold">Subscribe Us</h1>
        <p class="font-thin">Lorem ipsum dolor sit amet okuram and consectur.</p>
        <span class="w-1/3 flex flex-col justify-center gap-4">
            <section class="relative flex items-center border border-gray-300 py-2 px-4 rounded-full">
                <input type="text" class="w-full pr-28 focus:outline-none" placeholder="Write your email here...">
                <button
                    class="h-full absolute right-0 px-4 uppercase font-bold text-gray-600 border border-gray-500 rounded-full">Subscribe</button>
            </section>
            <section class="flex items-center justify-center gap-4 mt-4">
                {{-- FACEBOOK --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-gray-400 hover:fill-primary cursor-pointer"
                    viewBox="0 0 320 512">
                    <path
                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                </svg>
                {{-- INSTAGRAM --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-gray-400 hover:fill-primary cursor-pointer"
                    viewBox="0 0 448 512">
                    <path
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg>
                {{-- TWITTER --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-gray-400 hover:fill-primary cursor-pointer"
                    viewBox="0 0 512 512">
                    <path
                        d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
                </svg>
                {{-- LINKEDIN --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-gray-400 hover:fill-primary cursor-pointer"
                    viewBox="0 0 448 512">
                    <path
                        d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                </svg>
                {{-- YOUTUBE --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-gray-400 hover:fill-primary cursor-pointer"
                    viewBox="0 0 576 512">
                    <path
                        d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                </svg>
            </section>
        </span>
    </article>
</article>
<article class="h-fit grid grid-cols-4 border-t-2 border-b-4 py-4 mt-16 border-gray-300">
    <figure class="flex flex-col items-center justify-center">
        <img class="w-16" src="https://img.icons8.com/B7B7B7/carbon_copy/2x/coffee-to-go.png" alt="">
        <h1 class="uppercase font-semibold text-xl">Quick Delivery</h1>
        <p class="text-center px-12 font-faberSansStd font-light">Lorem, ipsum dolor sit amet Lorem ipsum dolor, sit amet?!</p>
    </figure>
    <figure class="flex flex-col items-center justify-center">
        <img class="w-16" src="https://img.icons8.com/B7B7B7/carbon_copy/2x/coffee-pot.png" alt="">
        <h1 class="uppercase font-semibold text-xl">Pick up in store</h1>
        <p class="text-center px-12 font-faberSansStd font-light">Lorem, ipsum dolor sit amet Lorem ipsum dolor, sit amet?!</p>
    </figure>
    <figure class="flex flex-col items-center justify-center">
        <img class="w-16" src="https://img.icons8.com/B7B7B7/carbon_copy/2x/cafe.png" alt="">
        <h1 class="uppercase font-semibold text-xl">No shipping charge</h1>
        <p class="text-center px-12 font-faberSansStd font-light">Lorem, ipsum dolor sit amet Lorem ipsum dolor, sit amet?!</p>
    </figure>
    <figure class="flex flex-col items-center justify-center">
        <img class="w-16" src="https://img.icons8.com/B7B7B7/carbon_copy/2x/paper-bag-with-seeds.png"
            alt="">
        <h1 class="uppercase font-semibold text-xl">Friendly service</h1>
        <p class="text-center px-12 font-faberSansStd font-light">Lorem, ipsum dolor sit amet Lorem ipsum dolor, sit amet?!</p>
    </figure>
</article>
