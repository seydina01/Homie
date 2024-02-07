@extends('base')
@section('title','Acceuille')
@section('hero')
    <!--hero-->
    <div class="h-full relative lg:w-12/12 lg:h-full lg:m-4">
        

        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>


        <!-- Texte de bienvenue -->
        <div class=" top-40 mr-4 ml-4 lg:float-left lg:ml-20">
            <div class="mb-5">
                <h1 class="text-white font-bold text-4xl">Nous vous aidons à trouver <br>votre maison <span
                        class="text-[#16a34a]">de rêve!</span></h1>
            </div>
            <div>
                <h3 class="text-slate-100 text-lg">Explorez notre plateforme exceptionnelle pour trouver, vendre et louer
                    <br> des propriétés de manière simple et efficace</h3>
            </div>
        </div>
</div>

@endsection
@section('content')


        <p class="text-slate-950 ">annonces</p>


    <!-- Decouvrir nos biens-->
    <div class="flex-col">
        <div class="flex flex-col justify-center">
            <h1 class="flex justify-center text-2xl font-bold">Discover Our Featured Listings</h1>
            <h5 class="flex justify-center text-sm mt-2" >Lorem ipsum dolor sit amet,</h5>
        </div>

    <div class="flex flex-col md:flex-row lg:flex-row xl:flex-row gap-3 justify-center mt-10 ">
        <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3 sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="relative">
                <div class="">
                    <img src="https://images.unsplash.com/photo-1501183638710-841dd1904471?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aG9tZXxlbnwwfHwwfHx8MA%3D%3D" class="w-full" alt="...">
                </div>
                <div class="absolute bottom-8 left-5 text-2xl font-bold text-white">
                    <p>40000FCFA/mois</p>
                </div>
                <div class="absolute bottom-8 top-0 right-0 text-2xl font-bold text-white">
                    <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">A Louer</span>
                </div>
            </div>
            <div class="flex-auto p-6">
                <h5 class="mb-0 text-base font-bold ">Design apartment tesr</h5>
                <p class="mb-0 text-base font-medium">Dakar,camberene</p>
                <div class="flex flex-row gap-4 mt-2">
                    <p> <i class="fa fa-bed" aria-hidden="true"></i>5</p>
                    <p> <i class="fa fa-bath" aria-hidden="true"></i>3</p>
                    <p> <i class="fa fa-car" aria-hidden="true"></i>1</p>
                    <p>m2 <i class="fa fa-industry" aria-hidden="true"></i>25</p>
                </div>
                <h5 class="mb-0 text-base font-medium">Studio</h5>
                <div class="divide-y divide-gray-400  mt-3">
                    <p></p>
                    <p class="mb-0 flex flex-row justify-between"><small class="text-gray-700"><i class="fa-regular fa-user"></i> Seydina issa</small> <small class="text-gray-700"><i class="fa-regular fa-calendar-days"></i> il y' 2 mois</small></p>
                </div>
            </div>
        </div>

        <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3 sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="relative">
                <div class="">
                    <img src="https://images.unsplash.com/photo-1505691723518-36a5ac3be353?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8aG9tZXxlbnwwfHwwfHx8MA%3D%3D" class="w-full" alt="...">
                </div>
                <div class="absolute bottom-8 left-5 text-2xl font-bold text-white">
                    <p>40000FCFA/mois</p>
                </div>
                <div class="absolute bottom-8 top-0 right-0 text-2xl font-bold text-white">
                    <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">A Louer</span>
                </div>
            </div>
            <div class="flex-auto p-6">
                <h5 class="mb-0 text-base font-bold ">Design apartment tesr</h5>
                <p class="mb-0 text-base font-medium">Dakar,camberene</p>
                <div class="flex flex-row gap-4 mt-2">
                    <p> <i class="fa fa-bed" aria-hidden="true"></i>5</p>
                    <p> <i class="fa fa-bath" aria-hidden="true"></i>3</p>
                    <p> <i class="fa fa-car" aria-hidden="true"></i>1</p>
                    <p>m2 <i class="fa fa-industry" aria-hidden="true"></i>25</p>
                </div>
                <h5 class="mb-0 text-base font-medium">Studio</h5>
                <div class="divide-y divide-gray-400  mt-3">
                    <p></p>
                    <p class="mb-0 flex flex-row justify-between"><small class="text-gray-700"><i class="fa-regular fa-user"></i> Seydina issa</small> <small class="text-gray-700"><i class="fa-regular fa-calendar-days"></i> il y' 2 mois</small></p>
                </div>
            </div>
        </div>
        <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3 sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="relative">
                <div class="">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGhvbWV8ZW58MHx8MHx8fDA%3D" class="w-full" alt="...">
                </div>
                <div class="absolute bottom-8 left-5 text-2xl font-bold text-white">
                    <p>40000FCFA/mois</p>
                </div>
                <div class="absolute bottom-8 top-0 right-0 text-2xl font-bold text-white">
                    <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">A Louer</span>
                </div>
            </div>
            <div class="flex-auto p-6">
                <h5 class="mb-0 text-base font-bold ">Design apartment tesr</h5>
                <p class="mb-0 text-base font-medium">Dakar,camberene</p>
                <div class="flex flex-row gap-4 mt-2">
                    <p> <i class="fa fa-bed" aria-hidden="true"></i>5</p>
                    <p> <i class="fa fa-bath" aria-hidden="true"></i>3</p>
                    <p> <i class="fa fa-car" aria-hidden="true"></i>1</p>
                    <p>m2 <i class="fa fa-industry" aria-hidden="true"></i>25</p>
                </div>
                <h5 class="mb-0 text-base font-medium">Studio</h5>
                <div class="divide-y divide-gray-400  mt-3">
                    <p></p>
                    <p class="mb-0 flex flex-row justify-between"><small class="text-gray-700"><i class="fa-regular fa-user"></i> Seydina issa</small> <small class="text-gray-700"><i class="fa-regular fa-calendar-days"></i> il y' 2 mois</small></p>
                </div>
            </div>
        </div>
    </div>


    </div>

    <!-- Decouvrir nos categories-->
    <div>
        <p>categories</p>
    </div>

    <!-- Decouvrir notre selection-->
    <div>
        <p>selection</p>
    </div>
    <!-- Decouvrir nos villles-->
    <div>
        <div class="flex flex-col">
           <div class="flex flex-col m-8">
               <p class="text-2xl font-extralight">Explorer Nos Villes</p>
               <p class="w-60  text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
           </div>
            <div class="m-8">
            <div
                class="relative grid h-[40rem] w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700 ">
                <div
                    class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.unsplash.com/photo-1502005229762-cf1b2da7c5d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGhvbWV8ZW58MHx8MHx8fDA%3D')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                    <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
                </div>
                <div class="relative p-6 px-6 py-14 text-center">
                   <p>dakar</p>


                </div>
            </div>
        </div>
        </div>
    </div>


    <!-- contact-->
    <div>
        <p>contact</p>
    </div>
@endsection

