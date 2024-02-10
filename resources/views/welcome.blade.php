@extends('base')
@section('title','Acceuille')
@section('hero')
    <!--hero-->
    <div class="h-full relative m-1 mt-20 lg:w-12/12 lg:h-full lg:m-4  lg:mt-20">

        <div id="default-carousel" class="relative group overflow-hidden  w-full  " data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative z-0 h-56 overflow-hidden pt-60 pb-52 rounded-lg md:h-96 lg:pt-96 lg:pb-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out " data-carousel-item>
                    <img src="https://images.pexels.com/photos/2724748/pexels-photo-2724748.jpeg?auto=compress&cs=tinysrgb&w=600" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://media.istockphoto.com/id/1357529184/photo/3d-render-of-a-contemporary-living-room-interior.jpg?s=612x612&w=0&k=20&c=YuMefC7wfoc6Qitx7iyjmnjFBdtb94CyuITVCDrHTB8="  class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.pexels.com/photos/534151/pexels-photo-534151.jpeg?auto=compress&cs=tinysrgb&w=600" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=600" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://media.istockphoto.com/id/1456467041/photo/beautiful-kitchen-in-new-farmhouse-style-luxury-home-with-island-pendant-lights-and-hardwood.jpg?s=612x612&w=0&k=20&c=wwlKjbAsf_xBveRuqMV2fCJ8cpED0CoXE4GdIUSxpW8=" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <div class="border-sm rounded-lg absolute z-2 inset-0 bg-black/50 opacity-50 transition-opacity duration-300 pb-40 pt-40"></div>

        </div>


        <!-- Texte de bienvenue -->
        <div class="absolute top-14 mr-4 ml-4 h-10 lg:top-60 lg:ml-20 lg:float-start " >
            <div class="">
                <div class="mb-2 ">
                    <h1 class="text-white font-bold text-3xl lg:text-4xl ">Nous vous aidons à trouver votre maison de  <span
                            class="text-[#16a34a]">vos rêve!</span></h1>
                </div>
                <div class="lg:mt-8">
                    <h3 class="text-slate-100 text-md lg:text-xl">Explorez notre plateforme exceptionnelle pour acheter, vendre et louer
                        <br> des propriétés de manière simple et efficace.</h3>
                </div>
            </div>
            <!--searchBar-->
            <div class="relative flex mt-14  justify-center items-center lg:mt-6 lg:ml-0 lg:w-full lg:block " >
                <div class="">
                    <input type="search" placeholder="Appartement,ville" class="w-80 h-10 pl-4 pr-2 bg-slate-50 text-zinc-700 rounded-lg border-none outline-none focus:border-none lg:w-96 lg:h-14 lg:pr-8" >
                </div>
                <div class="flex justify-center absolute right-0 bottom-0 top-0 w-16 bg-[#16a34a] rounded-e-lg lg:items-center lg:left-80 ">
                    <p class="pt-2  text-slate-50  cursor-pointer lg:pt-0.5 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--endHero-->



@endsection
@section('content')

    <!-- DebBien-->
    <div class="flex-col">
        <div class="flex flex-col justify-center">
            <h1 class="flex justify-center text-2xl font-bold font-serif">Discover Our Featured Listings</h1>
            <h5 class="flex justify-center text-sm mt-2 text-slate-700 dark:text-slate-500" >Lorem ipsum dolor sit amet,</h5>
        </div>
    <div class="flex flex-col md:flex-row lg:flex-row xl:flex-row gap-3 justify-center mt-10  ">
        <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3 sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="relative">
                <div class="">
                    <img src="https://images.unsplash.com/photo-1501183638710-841dd1904471?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aG9tZXxlbnwwfHwwfHx8MA%3D%3D" class="w-full" alt="...">
                </div>
                <div class="absolute bottom-8 left-5 text-2xl font-bold text-white">
                    <p>40000FCFA/an</p>
                </div>
                <div class="absolute bottom-8 top-0 right-0 text-2xl font-bold text-white">
                    <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">A Louer</span>
                </div>
            </div>
            <div class="flex-auto p-6">
                <h5 class="mb-0 text-base font-bold "><a href="#" class="">Design apartment</a> </h5>
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
        <div class="text-center">
            <button type="button" class="py-2.5 px-5 me-2 mb-2  text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><a href="#">Voir Plus</a> </button>
        </div>

    </div>
    <!--FinBien-->
    <!-- Decouvrir nos categories-->
    <div class="mt-12 flex flex-col lg:grid lg:grid-cols-3 lg:m-40 lg:mt-12 lg:grid-flow-row ">
        <!--deb -->
        <div>
            <p class="text-white">.</p>
        <div class="flex flex-col ml-8 mt-28 ">
            <p class="text-2xl font-serif ">Residentiel</p>
            <p class="text-slate-700 dark:text-slate-500"> <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit,do eiusmod tempor incidi dunt</small></p>
        </div>
        <div class="w-36 mt-12 lg:m-0 ">
        <div class="grid grid-cols-1 divide-y divide-x-0 divide-slate-950 mt-4 ml-8">
            <p></p>
            <p></p>
        </div>
        </div>
        </div>
        <!--fin -->
            <!--debcard -->
            <a href="#" class="lg:row-span-2 ">
                <div>
                    <div class="flex flex-col">

                        <div class="m-8 ">
                            <div
                                class="relative grid h-[20rem] lg:h-[44rem]  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                <div
                                    class="absolute inset-0 m-0 h-full w-full  overflow-hidden rounded-none bg-transparent  bg-[url('https://images.unsplash.com/photo-1502005229762-cf1b2da7c5d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGhvbWV8ZW58MHx8MHx8fDA%3D')]  bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                    <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                </div>
                                <div class="flex flex-col absolute top-0 text-white mt-6">
                                    <p class="">26 proprietes</p>
                                    <p class="ml-1 text-2xl">Apartment</p>
                                </div>
                                <div class="flex  absolute bottom-10 ml-8 text-white mt-6">
                                    <p class="">Plus de detail <i class="fa-solid fa-angle-right"></i></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!--debcard -->
            <a href="#">
            <div>
                <div class="flex flex-col">

                    <div class="m-8">
                        <div
                            class="relative grid h-[20rem]  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                            <div
                                class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.unsplash.com/photo-1502005229762-cf1b2da7c5d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGhvbWV8ZW58MHx8MHx8fDA%3D')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
                            </div>
                            <div class="flex flex-col absolute top-0 text-white mt-6">
                                <p class="">23 proprietes</p>
                                <p class="ml-1 text-2xl">Studio</p>
                            </div>
                            <div class="flex  absolute bottom-10 ml-8 text-white mt-6">
                                <p class="">Plus de detail <i class="fa-solid fa-angle-right"></i></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>
            <!--   fincard -->
            <!--debcard -->
            <a href="#">
                <div>
                    <div class="flex flex-col">

                        <div class="m-8">
                            <div
                                class="relative grid h-[20rem]  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                <div
                                    class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.unsplash.com/photo-1502005229762-cf1b2da7c5d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGhvbWV8ZW58MHx8MHx8fDA%3D')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                    <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
                                </div>
                                <div class="flex flex-col absolute top-0 text-white mt-6">
                                    <p class="">23 proprietes</p>
                                    <p class="ml-1 text-2xl">Single Family Home</p>
                                </div>
                                <div class="flex  absolute bottom-10 ml-8 text-white mt-6">
                                    <p class="">Plus de detail <i class="fa-solid fa-angle-right"></i></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!--debcard -->
            <a href="#">
                <div>
                    <div class="flex flex-col">

                        <div class="m-8">
                            <div
                                class="relative grid h-[20rem]  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                <div
                                    class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.unsplash.com/photo-1502005229762-cf1b2da7c5d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGhvbWV8ZW58MHx8MHx8fDA%3D')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                    <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                </div>
                                <div class="flex flex-col absolute top-0 text-white mt-6">
                                    <p class="">23 proprietes</p>
                                    <p class="ml-1 text-2xl">Villa</p>
                                </div>
                                <div class="flex  absolute bottom-10 ml-8 text-white mt-6">
                                    <p class="">Plus de detail <i class="fa-solid fa-angle-right"></i></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!--deb -->
        <div>
            <div class="mr-24 text-start">
                <p class="text-white">.</p>
                <div class="flex flex-col ml-8 lg:mt-28">
                    <p class="text-2xl mr-24 font-serif">Commercial</p>
                    <p class="text-start text-slate-700 dark:text-slate-500"> <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</small></p>
                </div>
            </div>

            <div class="w-36 mt-12">
                <div class="grid grid-cols-1 divide-y divide-x-0 divide-slate-950 mt-4 ml-8">
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
            <!--fin -->
            <!--debcard -->
            <a href="#" class="">
                <div>
                    <div class="flex flex-col">

                        <div class="m-8">
                            <div
                                class="relative grid h-[20rem]  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                <div
                                    class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.unsplash.com/photo-1502005229762-cf1b2da7c5d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGhvbWV8ZW58MHx8MHx8fDA%3D')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                    <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
                                </div>
                                <div class="flex flex-col absolute top-0 text-white mt-6">
                                    <p class="">23 proprietes</p>
                                    <p class="ml-1 text-2xl">Apartment</p>
                                </div>
                                <div class="flex  absolute bottom-10 ml-8 text-white mt-6">
                                    <p class="">Plus de detail <i class="fa-solid fa-angle-right"></i></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!--debcard -->
            <a href="#">
                <div>
                    <div class="flex flex-col">

                        <div class="m-8">
                            <div
                                class="relative grid h-[20rem]  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                <div
                                    class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.unsplash.com/photo-1502005229762-cf1b2da7c5d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGhvbWV8ZW58MHx8MHx8fDA%3D')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                    <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                </div>
                                <div class="flex flex-col absolute top-0 text-white mt-6">
                                    <p class="">23 proprietes</p>
                                    <p class="ml-1 text-2xl">Apartment</p>
                                </div>
                                <div class="flex  absolute bottom-10 ml-8 text-white mt-6">
                                    <p class="">Plus de detail <i class="fa-solid fa-angle-right"></i></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

    </div>
    <!-- Decouvrir notre selection-->
    <div class="mt-24 lg:mt-12">
        <!-- DebBien-->

        <div class="flex-col m-8 lg:mt-8">
            <div class="flex flex-col justify-center">
                <h1 class="flex justify-center text-2xl font-bold font-serif">Discover Our Featured Listings</h1>
                <h5 class="flex justify-center text-sm mt-2 text-slate-700 dark:text-slate-500" >Lorem ipsum dolor sit amet,</h5>
            </div>
         <div class="flex flex-col lg:grid lg:grid-cols-3 gap-3 lg:grid-rows-2  lg:m-28 lg:mt-8">
            <a href="#" class="cursor-pointer lg:w-8">
                <article class="relative isolate flex flex-col justify-end overflow-hidden   px-8 pb-8 pt-40 max-w-sm mx-auto lg:w-[40rem]   ">
                    <img src="https://images.unsplash.com/photo-1505691723518-36a5ac3be353?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8aG9tZXxlbnwwfHwwfHx8MA%3D%3D" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover ">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-700 via-gray-900/40"></div>
                    <span class="absolute top-1 right-0 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 border border-gray-500">A louer</span>
                    <h3 class="z-10  text-2xl font-bold text-white">Maison en MER</h3>
                    <h3 class="z-10  text-white">24000FCFA/mois</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <div class="flex flex-row gap-4 mt-2 text-white ">
                            <p> <i class="fa fa-bed" aria-hidden="true"></i>5</p>
                            <p> <i class="fa fa-bath" aria-hidden="true"></i>3</p>
                            <p> <i class="fa fa-car" aria-hidden="true"></i>1</p>
                            <p>m2 <i class="fa fa-industry" aria-hidden="true"></i>25</p>
                        </div>
                    </div>
                </article>
            </a>
            <a href="#" class="cursor-pointer lg:w-8">
                    <article class="relative isolate flex flex-col justify-end overflow-hidden   px-8 pb-8 pt-40 max-w-sm mx-auto lg:w-[40rem]   ">
                        <img src="https://images.unsplash.com/photo-1505691723518-36a5ac3be353?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8aG9tZXxlbnwwfHwwfHx8MA%3D%3D" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover ">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-700 via-gray-900/40"></div>
                        <span class="absolute top-1 right-0 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 border border-gray-500">A louer</span>
                        <h3 class="z-10  text-2xl font-bold text-white">Maison en MER</h3>
                        <h3 class="z-10  text-white">24000FCFA/mois</h3>
                        <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                            <div class="flex flex-row gap-4 mt-2 text-white ">
                                <p> <i class="fa fa-bed" aria-hidden="true"></i>5</p>
                                <p> <i class="fa fa-bath" aria-hidden="true"></i>3</p>
                                <p> <i class="fa fa-car" aria-hidden="true"></i>1</p>
                                <p>m2 <i class="fa fa-industry" aria-hidden="true"></i>25</p>
                            </div>
                        </div>
                    </article>
                </a>
            <a href="#" class="cursor-pointer lg:w-8">
                <article class="relative isolate flex flex-col justify-end overflow-hidden   px-8 pb-8 pt-40 max-w-sm mx-auto lg:w-[40rem]   ">
                    <img src="https://images.unsplash.com/photo-1505691723518-36a5ac3be353?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8aG9tZXxlbnwwfHwwfHx8MA%3D%3D" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover ">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-700 via-gray-900/40"></div>
                    <span class="absolute top-1 right-0 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 border border-gray-500">A louer</span>
                    <h3 class="z-10  text-2xl font-bold text-white">Maison en MER</h3>
                    <h3 class="z-10  text-white">24000FCFA/mois</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <div class="flex flex-row gap-4 mt-2 text-white ">
                            <p> <i class="fa fa-bed" aria-hidden="true"></i>5</p>
                            <p> <i class="fa fa-bath" aria-hidden="true"></i>3</p>
                            <p> <i class="fa fa-car" aria-hidden="true"></i>1</p>
                            <p>m2 <i class="fa fa-industry" aria-hidden="true"></i>25</p>
                        </div>
                    </div>
                </article>
            </a>
            <a href="#" class="cursor-pointer lg:w-8">
                <article class="relative isolate flex flex-col justify-end overflow-hidden   px-8 pb-8 pt-40 max-w-sm mx-auto lg:w-[40rem]   ">
                    <img src="https://images.unsplash.com/photo-1505691723518-36a5ac3be353?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8aG9tZXxlbnwwfHwwfHx8MA%3D%3D" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover ">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-700 via-gray-900/40"></div>
                    <span class="absolute top-1 right-0 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 border border-gray-500">A louer</span>
                    <h3 class="z-10  text-2xl font-bold text-white">Maison en MER</h3>
                    <h3 class="z-10  text-white">24000FCFA/mois</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <div class="flex flex-row gap-4 mt-2 text-white ">
                            <p> <i class="fa fa-bed" aria-hidden="true"></i>5</p>
                            <p> <i class="fa fa-bath" aria-hidden="true"></i>3</p>
                            <p> <i class="fa fa-car" aria-hidden="true"></i>1</p>
                            <p>m2 <i class="fa fa-industry" aria-hidden="true"></i>25</p>
                        </div>
                    </div>
                </article>
            </a>
            <a href="#" class="cursor-pointer lg:w-8">
                <article class="relative isolate flex flex-col justify-end overflow-hidden   px-8 pb-8 pt-40 max-w-sm mx-auto lg:w-[40rem]   ">
                    <img src="https://images.unsplash.com/photo-1505691723518-36a5ac3be353?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8aG9tZXxlbnwwfHwwfHx8MA%3D%3D" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover ">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <span class="absolute top-1 right-0 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 border border-gray-500">A louer</span>
                    <h3 class="z-10  text-2xl font-bold text-white">Maison en MER</h3>
                    <h3 class="z-10  text-white">24000FCFA/mois</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <div class="flex flex-row gap-4 mt-2 text-white ">
                            <p> <i class="fa fa-bed" aria-hidden="true"></i>5</p>
                            <p> <i class="fa fa-bath" aria-hidden="true"></i>3</p>
                            <p> <i class="fa fa-car" aria-hidden="true"></i>1</p>
                            <p>m2 <i class="fa fa-industry" aria-hidden="true"></i>25</p>
                        </div>
                    </div>
                </article>
            </a>
            <a href="#" class="cursor-pointer lg:w-8">
                <article class="relative isolate flex flex-col justify-end overflow-hidden   px-8 pb-8 pt-40 max-w-sm mx-auto lg:w-[40rem]   ">
                    <img src="https://images.unsplash.com/photo-1505691723518-36a5ac3be353?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8aG9tZXxlbnwwfHwwfHx8MA%3D%3D" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover ">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <span class="absolute top-1 right-0 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 border border-gray-500">A louer</span>
                    <h3 class="z-10  text-2xl font-bold text-white">Maison en MER</h3>
                    <h3 class="z-10  text-white">24000FCFA/mois</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <div class="flex flex-row gap-4 mt-2 text-white ">
                            <p> <i class="fa fa-bed" aria-hidden="true"></i>5</p>
                            <p> <i class="fa fa-bath" aria-hidden="true"></i>3</p>
                            <p> <i class="fa fa-car" aria-hidden="true"></i>1</p>
                            <p>m2 <i class="fa fa-industry" aria-hidden="true"></i>25</p>
                        </div>
                    </div>
                </article>
            </a>
         </div>
        </div>

        </div>
        <!--FinBien-->
    <div class="lg:w-[80rem] bg-slate-200 lg:m-12 lg:overflow-hidden ">
        <div class="lg:m-8 lg:w-4 ">
            <div class="mt-12 flex flex-col lg:flex lg:flex-row  ">
                <!--deb -->
                <div>
                    <p class="text-white">.</p>
                    <div class="flex flex-col ml-8 mt-28 lg:w-40 ">
                        <p class="text-2xl font-serif ">Explore our cities</p>
                        <p class="text-slate-700 dark:text-slate-500"> <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit,do eiusmod tempor incidi dunt</small></p>
                    </div>
                    <div class="w-36 mt-12 lg:m-0 ">
                        <div class="grid grid-cols-1 divide-y divide-x-0 divide-slate-950 mt-4 ml-8">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!--fin -->
                <!--debcard -->
                <div>
                    <a href="#" class="w-4">
                        <div>
                            <div class="flex flex-col">

                                <div class="m-4 ">
                                    <div
                                        class="relative grid h-[30rem] lg:w-56  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                        <div
                                            class="absolute inset-0 m-0 h-full w-full  overflow-hidden rounded-none bg-transparent  bg-[url('https://images.unsplash.com/photo-1502005229762-cf1b2da7c5d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGhvbWV8ZW58MHx8MHx8fDA%3D')]  bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                            <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                        </div>
                                        <div class="flex flex-col absolute top-0 text-white mt-6">
                                            <p class="">26 proprietes</p>
                                            <p class="ml-1 text-2xl">Apartment</p>
                                        </div>
                                        <div class="flex  absolute bottom-10 ml-8 text-white mt-6">
                                            <p class="">Plus de detail <i class="fa-solid fa-angle-right"></i></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#" class="w-4">
                        <div>
                            <div class="flex flex-col">

                                <div class="m-4 ">
                                    <div
                                        class="relative grid h-[30rem] lg:w-56  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                        <div
                                            class="absolute inset-0 m-0 h-full w-full  overflow-hidden rounded-none bg-transparent  bg-[url('https://images.unsplash.com/photo-1502005229762-cf1b2da7c5d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGhvbWV8ZW58MHx8MHx8fDA%3D')]  bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                            <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                        </div>
                                        <div class="flex flex-col absolute top-0 text-white mt-6">
                                            <p class="">26 proprietes</p>
                                            <p class="ml-1 text-2xl">Apartment</p>
                                        </div>
                                        <div class="flex  absolute bottom-10 ml-8 text-white mt-6">
                                            <p class="">Plus de detail <i class="fa-solid fa-angle-right"></i></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#" class="w-4">
                        <div>
                            <div class="flex flex-col">

                                <div class="m-4 ">
                                    <div
                                        class="relative grid h-[30rem] lg:w-56  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                        <div
                                            class="absolute inset-0 m-0 h-full w-full  overflow-hidden rounded-none bg-transparent  bg-[url('https://images.unsplash.com/photo-1502005229762-cf1b2da7c5d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGhvbWV8ZW58MHx8MHx8fDA%3D')]  bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                            <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                        </div>
                                        <div class="flex flex-col absolute top-0 text-white mt-6">
                                            <p class="">26 proprietes</p>
                                            <p class="ml-1 text-2xl">Apartment</p>
                                        </div>
                                        <div class="flex  absolute bottom-10 ml-8 text-white mt-6">
                                            <p class="">Plus de detail <i class="fa-solid fa-angle-right"></i></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#" class="w-4">
                        <div>
                            <div class="flex flex-col">

                                <div class="m-4 ">
                                    <div
                                        class="relative grid h-[30rem] lg:w-56  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                        <div
                                            class="absolute inset-0 m-0 h-full w-full  overflow-hidden rounded-none bg-transparent  bg-[url('https://images.unsplash.com/photo-1502005229762-cf1b2da7c5d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGhvbWV8ZW58MHx8MHx8fDA%3D')]  bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                            <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                        </div>
                                        <div class="flex flex-col absolute top-0 text-white mt-6">
                                            <p class="">26 proprietes</p>
                                            <p class="ml-1 text-2xl">Apartment</p>
                                        </div>
                                        <div class="flex  absolute bottom-10 ml-8 text-white mt-6">
                                            <p class="">Plus de detail <i class="fa-solid fa-angle-right"></i></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>


        </div>

    </div>





    <!-- Decouvrir nos villles-->
    <div>


     </div>
    </div>

@endsection

