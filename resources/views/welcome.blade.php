@extends('base')
@section('title','Acceuille')
@section('hero')
    <!--hero-->
    <div class="h-full relative lg:w-12/12 lg:h-full lg:m-4">
        <div id="default-carousel" class="relative group overflow-hidden w-full h-4/6 lg:h-full rounded-lg " data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-full z-0 overflow-hidden md:h-96  " style="height:100%">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out h-full w-full " data-carousel-item>
                    <img src="https://images.unsplash.com/photo-1612965607446-25e1332775ae?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHJlYWxzdGF0ZXN8ZW58MHx8MHx8fDA%3D" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 lg:object-fill " alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://pbs.twimg.com/media/GFBLcG9WkAAECFu?format=jpg&name=small" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 lg:object-fill" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.pexels.com/photos/2724748/pexels-photo-2724748.jpeg?auto=compress&cs=tinysrgb&w=600" class="absolute h-full block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 lg:object-fill" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.pexels.com/photos/534151/pexels-photo-534151.jpeg?auto=compress&cs=tinysrgb&w=600" class="absolute h-full block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 lg:object-fill" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=600" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 lg:object-fill " alt="...">
                </div>
            </div>
            <div class="border-sm rounded-lg absolute z-2 inset-0 bg-black/50 opacity-50 transition-opacity duration-300 pb-40 pt-40"></div>

            
        </div>
        <!--text_bienvenue-->
        <div class="absolute top-40 mr-4 ml-4 lg:float-left lg:ml-20">
            <div class="mb-5">
            <h1 class="text-white font-bold text-4xl ">Nous vous aidons à trouver <br>votre maison <span class="text-[#16a34a]">de rêve!</span></h1>
            </div>
            <div>
                <h3 class="text-slate-100 text-lg">Explorez notre plateforme exceptionnelle pour trouver, vendre et louer <br> des propriétés de manière simple et efficace</h3>
            </div>
        </div>
    
    </div>
@endsection
@section('content')
    <!-- Decouvrir nos annonces-->
    <div>

        <p class="text-slate-950 ">annonces</p>
    </div>


    <!-- Decouvrir nos categories-->
    <div>

        <p>categories</p>
    </div>

    <!-- Decouvrir notre selection-->
    <div>

        <p>selection</p>
    </div>
