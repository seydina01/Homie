@extends('base')
@section('title','Acceuill')
@section('hero')
    <h1>herooo</h1>
@endsection
@section('content')


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
