@extends('base')
@section('title','Liste')
@section('hero')
    .
@endsection
@section('content')

    <div class="flex flex-col mt-24 ml-16 ">
        <div class=""><p class="text-4xl font-mono">Listes de nos biens</p></div>
        <div class="lg:flex lg:flex-row justify-between mt-8 lg:m-16    ">
            <div class="flex flex-col md:flex-row lg:grid  lg:grid-cols-2  gap-3 justify-center mt-10 lg:w-2/3 ">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-4">
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
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-4">
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
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-4">
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
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-4">
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
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-4">
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
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-4">
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


            <div class="lg:w-1/3 ">
                <div class="w-full md:w-1/4 px-4 sticky top-0">
                    <div class="bg-white p-4 mt-12">

                        <h2 class="text-3xl font-bold text-gray-800 mb-4 ">Categories</h2>
                        <ul class="list-none">
                            <li class="mb-2">
                                <a href="#" class="text-gray-700 hover:text-gray-900">Blog Post 1</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-gray-700 hover:text-gray-900">Blog Post 2</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-gray-700 hover:text-gray-900">Blog Post 3</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-gray-700 hover:text-gray-900">Blog Post 4</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-gray-700 hover:text-gray-900">Blog Post 4</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-gray-700 hover:text-gray-900">Blog Post 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white p-4 mt-4  ">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Villes</h2>
                        <ul class="list-none">
                            <li class="mb-2">
                                <a href="#" class="text-gray-700 hover:text-gray-900">Category 1</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-gray-700 hover:text-gray-900">Category 2</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-gray-700 hover:text-gray-900">Category 3</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-gray-700 hover:text-gray-900">Category 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
