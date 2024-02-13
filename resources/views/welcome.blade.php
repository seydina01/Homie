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
                    <input type="search" placeholder="Appartement,ville" class="w-80 h-10 pl-4 pr-2 bg-slate-50 text-zinc-800 text-lg rounded-lg border-none outline-none focus:border-none focus:ring-0  lg:w-96 lg:h-14 lg:pr-8 " >
                </div>
                <div class="flex justify-center absolute right-0 bottom-0 top-0 w-16 bg-[#16a34a] rounded-e-lg lg:items-center lg:left-80 ">
                    <p class="pt-2  text-slate-50  cursor-pointer lg:pt-0 ">
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
        <div class="flex flex-col justify-center " data-aos="fade-up"
             data-aos-anchor-placement="bottom-bottom">
            <h1 class="flex justify-center text-2xl font-bold font-serif">
                Découvrez nos annonces en vedette</h1>
            <h5 class="flex justify-center text-sm mt-2 text-slate-700 dark:text-slate-500" >Découvrez toutes nos annonces immobilier,</h5>
        </div>
       <div class="flex flex-col md:flex-row lg:flex-row xl:flex-row gap-3 justify-center mt-10  " data-aos="zoom-in-down">
        @foreach($p as $p)
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3 sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/4">

                <div class="relative">
                    <div class="">
                        <img src="{{ Storage::url($p->picture1) }}" class="w-full" alt="...">
                    </div>
                    @if($p->status==1)
                        <div class="absolute bottom-8 left-5 text-2xl font-bold text-white">
                            <p>{{$p->price}}FCFA/Mois</p>
                        </div>
                    @else
                        <div class="absolute bottom-8 left-5 text-2xl font-bold text-white">
                            <p>{{$p->price}}Millions FCFA</p>
                        </div>
                    @endif

                    <div class="absolute bottom-8 top-0 right-0 text-2xl font-bold text-white">
                        @if($p->status==1)
                            <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">A Louer</span>
                        @else   <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">A Vendre</span>

                        @endif
                    </div>
                </div>
                <div class="flex-auto p-6">
                    <h5 class="mb-0 text-base font-bold "><a href="#" class="">{{$p->yearOfBuild}}</a> </h5>
                    <p class="mb-0 text-base font-medium">{{$p->adresse}}</p>
                    <div class="flex flex-row gap-4 mt-2">
                        <p> <i class="fa fa-bed" aria-hidden="true"></i>{{$p->room}}</p>
                        <p> <i class="fa fa-bath" aria-hidden="true"></i>{{$p->bathroom}}</p>
                        <p> <i class="fa fa-car" aria-hidden="true"></i>{{$p->garage}}</p>
                        <p> <i class="fa fa-industry" aria-hidden="true"></i>{{$p->surface}}m2</p>
                    </div>
                    <h5 class="mb-0 text-base font-medium">{{$p->category->name}}</h5>
                    <div class="divide-y divide-gray-400  mt-3">
                        <p></p>
                        <p class="mb-0 flex flex-row justify-between"><small class="text-gray-700"><i class="fa-regular fa-user"></i>Homiz</small> <small class="text-gray-700"><i class="fa-regular fa-calendar-days"></i>depuis {{$p->yearOfBuild}}</small></p>
                    </div>
                </div>
            </div>

        @endforeach


    </div>
        <div class="text-center">
            <button type="button" class="py-2.5 px-5 me-2 mb-2  text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><a href="{{route('all')}}">Voir Plus</a> </button>
        </div>

    </div>
    <!--FinBien-->
    <!-- Decouvrir nos categories-->
    <div class="mt-12 flex flex-col lg:grid lg:grid-cols-3 lg:m-40 lg:mt-12 lg:grid-flow-row ">
        <!--deb -->
        <div>
            <p class="text-white">.</p>
        <div class="flex flex-col ml-8 mt-28 " data-aos="fade-up"
             data-aos-anchor-placement="bottom-bottom">
            <p class="text-2xl font-serif ">Residentiel</p>
            <p class="text-slate-700 dark:text-slate-500"> <small>La zone résidentielle désigne une zone urbaine appartenant à un quartier où l'habitat est la principale fonction et où l'espace public est conçu pour être partagé dans une véritable coexistence des différentes catégories d'usagers.</small></p>
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
            <a href="{{route('categories.show',5)}}" class="lg:row-span-2 " data-aos="zoom-in">
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
                                    <p class="">{{$appartement}} proprietes</p>
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
            <a href="{{route('categories.show',2)}} " data-aos="zoom-in">
            <div>
                <div class="flex flex-col">

                    <div class="m-8">
                        <div
                            class="relative grid h-[20rem]  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                            <div
                                class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.pexels.com/photos/2079246/pexels-photo-2079246.jpeg?auto=compress&cs=tinysrgb&w=600')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                            </div>
                            <div class="flex flex-col absolute top-0 text-white mt-6">
                                <p class="">{{$studio}} proprietes</p>
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
            <a href="{{route('categories.show',6)}}">
                <div>
                    <div class="flex flex-col">

                        <div class="m-8">
                            <div
                                class="relative grid h-[20rem]  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                <div
                                    class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg?auto=compress&cs=tinysrgb&w=600')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                    <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                </div>
                                <div class="flex flex-col absolute top-0 text-white mt-6">
                                    <p class="">{{$single}} proprietés</p>
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
            <a href="{{route('categories.show',3)}}" data-aos="zoom-in">
                <div>
                    <div class="flex flex-col">

                        <div class="m-8">
                            <div
                                class="relative grid h-[20rem]  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                <div
                                    class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.pexels.com/photos/280229/pexels-photo-280229.jpeg?auto=compress&cs=tinysrgb&w=600')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                    <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                </div>
                                <div class="flex flex-col absolute top-0 text-white mt-6">
                                    <p class="">{{$villa}} proprietés</p>
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
                <div class="flex flex-col ml-8 lg:mt-28"data-aos="fade-up"
                     data-aos-anchor-placement="bottom-bottom">
                    <p class="text-2xl mr-24 font-serif">Commercial</p>
                    <p class="text-start text-slate-700 dark:text-slate-500"> <small>Un local commercial constitue un espace dédié aux activités commerciales, exploitant ainsi des fonds commerciaux. Ces activités incluent les prestations, la vente de biens ou de services pour la clientèle.</small></p>
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
            <a href="{{route('categories.show',7)}}" class="" data-aos="zoom-in">
                <div>
                    <div class="flex flex-col">

                        <div class="m-8">
                            <div
                                class="relative grid h-[20rem]  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                <div
                                    class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.pexels.com/photos/2309235/pexels-photo-2309235.jpeg?auto=compress&cs=tinysrgb&w=600')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                    <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                </div>
                                <div class="flex flex-col absolute top-0 text-white mt-6">
                                    <p class="">{{$boutique}} proprietés</p>
                                    <p class="ml-1 text-2xl">Boutique</p>
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
            <a href="{{route('categories.show',8)}}" data-aos="zoom-in">
                <div>
                    <div class="flex flex-col">

                        <div class="m-8">
                            <div
                                class="relative grid h-[20rem]  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                <div
                                    class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.pexels.com/photos/245219/pexels-photo-245219.jpeg?auto=compress&cs=tinysrgb&w=600')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                    <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                </div>
                                <div class="flex flex-col absolute top-0 text-white mt-6">
                                    <p class="">{{$bureau}} proprietes</p>
                                    <p class="ml-1 text-2xl">Bureau</p>
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
            <div class="flex flex-col justify-center"data-aos="fade-up"
                 data-aos-anchor-placement="bottom-bottom">
                <h1 class="flex justify-center text-2xl font-bold font-serif">Toutes Nos Proprités</h1>
                <h5 class="flex justify-center text-sm mt-2 text-slate-700 dark:text-slate-500 capitalize" >Ici vous trouverez tout</h5>
            </div>
         <div class="flex flex-col lg:grid lg:grid-cols-3 gap-3 lg:grid-rows-2  lg:m-28 lg:mt-8" data-aos="zoom-in-down " data-aos-duration="3000">
             @foreach($property as $p)
                 <a href="#" class="cursor-pointer lg:w-8">
                     <article class="relative isolate flex flex-col justify-end overflow-hidden   px-8 pb-8 pt-40 max-w-sm mx-auto lg:w-[40rem]   ">
                         <img src="{{ Storage::url($p->picture1) }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover ">
                         <div class="absolute inset-0 bg-gradient-to-t from-gray-700 via-gray-900/40"></div>
                         @if($p->status==1)
                             <span class="absolute top-1 right-0 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 border border-gray-500">A louer</span>
                         @else                          <span class="absolute top-1 right-0 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 border border-gray-500">A Vendre</span>

                         @endif
                         <h3 class="z-10  text-2xl font-bold text-white">{{$p->category->name}}</h3>
                         @if($p->status==1)
                             <h3 class="z-10  text-white">{{$p->price}}FCFA/Mois</h3>
                         @else
                             <h3 class="z-10  text-white">{{$p->price}}Millions FCFA</h3>
                         @endif

                         <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                             <div class="flex flex-row gap-4 mt-2 text-white ">
                                 <p> <i class="fa fa-bed" aria-hidden="true"></i>{{$p->room}}</p>
                                 <p> <i class="fa fa-bath" aria-hidden="true"></i>{{$p->bathroom}}</p>
                                 <p> <i class="fa fa-car" aria-hidden="true"></i>{{$p->garage}}</p>
                                 <p>m2 <i class="fa fa-industry" aria-hidden="true"></i>{{$p->surface}}</p>
                             </div>
                         </div>
                     </article>
                 </a>

             @endforeach


         </div>
            <div class="text-center mt-0">
                <button type="button" class="py-2.5 px-5 me-2 mb-2  text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><a href="{{route('all')}}">Voir Plus</a> </button>
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
                    <div class="flex flex-col ml-8 mt-28 lg:w-40 "data-aos="fade-up"
                         data-aos-anchor-placement="bottom-bottom">
                        <p class="text-2xl font-serif ">Decouvrez Nos Villes</p>
                        <p class="text-slate-700 dark:text-slate-500"> <small>Tous nos biens à vendre  se trouvent dans des villes qui ont longtemps été les locomotives du marché immobilier</small></p>
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
                <div data-aos="fade-left">
                    <a href="{{route('cities.show',2)}}" class="w-4">
                        <div>
                            <div class="flex flex-col">

                                <div class="m-4 ">
                                    <div
                                        class="relative grid h-[30rem] lg:w-56  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                        <div
                                            class="absolute inset-0 m-0 h-full w-full  overflow-hidden rounded-none bg-transparent  bg-[url('https://images.pexels.com/photos/1525612/pexels-photo-1525612.jpeg?auto=compress&cs=tinysrgb&w=600')]  bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                            <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                        </div>
                                        <div class="flex flex-col absolute top-0 text-white mt-6">
                                            <p class="">{{$thies}} proprietes</p>
                                            <p class="ml-1 text-2xl">Thies</p>
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
                <div data-aos="fade-left" data-aos-duration="1500">
                    <a href="{{route('cities.show',1)}}" class="w-4">
                        <div>
                            <div class="flex flex-col">

                                <div class="m-4 ">
                                    <div
                                        class="relative grid h-[30rem] lg:w-56  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                        <div
                                            class="absolute inset-0 m-0 h-full w-full  overflow-hidden rounded-none bg-transparent  bg-[url('https://images.pexels.com/photos/586687/pexels-photo-586687.jpeg?auto=compress&cs=tinysrgb&w=600')]  bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                            <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                        </div>
                                        <div class="flex flex-col absolute top-0 text-white mt-6">
                                            <p class="">{{$dakar}} proprietes</p>
                                            <p class="ml-1 text-2xl">Dakar</p>
                                        </div>
                                        <div class="flex  absolute bottom-10 ml-8 text-white mt-6">
                                            <p class="">Plus de detail <i class="fa-solid fa-angle-right"></i></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div >
                <div data-aos="fade-left" data-aos-duration="2000">
                    <a href="{{route('cities.show',3)}}" class="w-4">
                        <div>
                            <div class="flex flex-col">

                                <div class="m-4 ">
                                    <div
                                        class="relative grid h-[30rem] lg:w-56  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                        <div
                                            class="absolute inset-0 m-0 h-full w-full  overflow-hidden rounded-none bg-transparent  bg-[url('https://images.pexels.com/photos/1123982/pexels-photo-1123982.jpeg?auto=compress&cs=tinysrgb&w=600')]  bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                            <div class="absolute inset-0 w-full h-full bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                        </div>
                                        <div class="flex flex-col absolute top-0 text-white mt-6">
                                            <p class="">{{$kaolack}} proprietes</p>
                                            <p class="ml-1 text-2xl">Kaolack</p>
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
                <div data-aos="fade-left" data-aos-duration="3000">

                    <a href="{{route('cities.show',4)}}" class="w-4">
                        <div>
                            <div class="flex flex-col">

                                <div class="m-4 ">
                                    <div
                                        class="relative grid h-[30rem] lg:w-56  max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-md bg-white bg-clip-border text-center text-gray-700  ">
                                        <div
                                            class="absolute inset-0 m-0 h-full w-full  overflow-hidden rounded-none bg-transparent  bg-[url('https://images.pexels.com/photos/13653478/pexels-photo-13653478.jpeg?auto=compress&cs=tinysrgb&w=600')]  bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                            <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-black/50 opacity-50 hover:opacity-0 transition-opacity duration-300"></div>
                                        </div>
                                        <div class="flex flex-col absolute top-0 text-white mt-6">
                                            <p class="">{{$mbour}}proprietes</p>
                                            <p class="ml-1 text-2xl">Mbour</p>
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





    <!-- Decouvrir nos villles

    -->
    <div>


     </div>

@endsection

