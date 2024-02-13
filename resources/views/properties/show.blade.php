@extends('base')
@section('title','detail du produit')
@section('hero')
.
@endsection
@section('content')


        <div class=" flex flex-col m-24   lg:m-24 lg:mt-24 bg-white   ">
            <!--header-->
            <p>.</p>
            <div class="flex flex-col justify-between lg:flex-row lg:ml-16 lg:mt-4 ">
                <div>
                    <div>
                        <h3 class="sm:text-sm lg:text-3xl   font-mono">{{$pr->category->name}}</h3>
                    </div>
                    @if($pr->status==1)
                        <div class="flex flex-row lg:mt-2">
                            <span class="bg-green-600 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 border border-gray-500">A Louer</span>
                        </div>
                    @else
                        <div class="flex flex-row lg:mt-2">
                            <span class="bg-green-600 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 border border-gray-500">A vendre</span>
                        </div>
                    @endif

                    <div>
                        <h3 class="sm:text-sm text-2xl">{{$pr->adresse}}</h3>
                    </div>
                </div>
                @if($pr->status==1)
                    <div class="m-4 ">
                        <div><p class="sm:text-sm lg:text-5xl ">{{$pr->price}}FCFA/Mois</p></div>
                    </div>
                @else
                    <div class="m-4 ">
                        <div><p class="sm:text-sm lg:text-5xl ">{{$pr->price}}Millions FCFA</p></div>
                    </div>
                @endif


            </div>
            <!--header-->
            <div class="flex  flex-col lg:flex-row lg:w-full ">


                <div class="grid gap-4 lg:w-2/3 lg:m-16 lg:mt-6">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ Storage::url($pr->picture1) }}"alt="">
                    </div>
                    <div class="grid grid-cols-5 gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ Storage::url($pr->picture2) }}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ Storage::url($pr->picture3) }}"alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ Storage::url($pr->picture4) }}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ Storage::url($pr->picture5) }}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ Storage::url($pr->picture6) }}" alt="">
                        </div>
                    </div>
                </div>


                <div class="lg:w-1/3">
                    <form action="https://fabform.io/f/{form-id}" method="post" class="md:col-span-8 p-10 ">
                        <div class="flex flex-wrap -mx-3 mb-6 ">
                            <div class="w-full md:w-1/2 px-3 mt-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-last-name">
                                    preNom
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-last-name" type="text" placeholder="">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-last-name">
                                    Nom
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-last-name" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-password">
                                    adresse mail
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-email" type="email" placeholder="">
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-password">
                                    ton message
                                </label>
                                <textarea rows="5"
                                          class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 "></textarea>
                            </div>
                            <div class="flex justify-between w-full px-3">

                                <button
                                    class="shadow bg-indigo-600 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded"
                                    type="submit">
                                    Send Message
                                </button>

                            </div>

                        </div>

                    </form>
                </div>
            </div>
            <div class="flex flex-col gap-3 lg:flex lg:flex-row lg:gap-4 lg:m-20 lg:mt-2 lg:justify-between ">
                <div class="">
                    <div class="grid grid-cols-1 divide-y">
                        <div class="mb-8"><p class="text-4xl">Description</p></div>
                        <div ><p class="mt-8 text-sm ">{{$pr->description}}</p></div>

                    </div>
                </div>
                <div class="lg:w-[200rem]">
                    <div class="">
                        <div class="grid grid-cols-1 divide-y">
                            <div class="mb-8"><p class="text-4xl">Details</p></div>
                            <div>
                                <div class="  bg-white rounded-lg shadow-md overflow-hidden mt-4">
                                 <div class="lg:flex lg:flex-row lg:justify-between">
                                    <div class="px-4 py-5 sm:p-6">
                                        <div class="flex flex-col items-start justify-between mb-6">
                                            <span class="text-sm font-medium text-gray-600">Nom proprietaire</span>
                                            <span class="text-lg font-medium text-gray-800">Homiz</span>
                                        </div>
                                        <div class="flex flex-col items-start justify-between mb-6">
                                            <span class="text-sm font-medium text-gray-600">Adresse</span>
                                            <span class="text-lg font-medium text-gray-800">{{$pr->adresse}}</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-between mb-6">
                                            <div class="flex flex-col items-start">
                                                <span class="text-sm font-medium text-gray-600">Category</span>
                                                <span class="text-lg font-medium text-gray-800">{{$pr->category->name}}</span>
                                            </div>
                                    </div>
                                        <div class="flex flex-col items-start">
                                            <span class="text-sm font-medium text-gray-600">Surface </span>
                                            <span class="text-lg font-medium text-gray-800">{{$pr->surface}} m2</span>
                                        </div>
                                 </div>

                                     <div class="px-4 py-5 sm:p-6">
                                         <div class="flex flex-col items-start justify-between mb-6">
                                             <span class="text-sm font-medium text-gray-600">Année de construction</span>
                                             <span class="text-lg font-medium text-gray-800">{{$pr->yearOfBuild}}</span>
                                         </div>
                                         <div class="flex flex-col items-start justify-between mb-6">
                                             <span class="text-sm font-medium text-gray-600">Chambre</span>
                                             <span class="text-lg font-medium text-gray-800">{{$pr->room}}</span>
                                         </div>
                                         <div class="flex flex-row items-center justify-between mb-6">
                                             <div class="flex flex-col items-start">
                                                 <span class="text-sm font-medium text-gray-600">Salle de bain </span>
                                                 <span class="text-lg font-medium text-gray-800">{{$pr->bathroom}}</span>
                                             </div>


                                         </div>
                                         <div class="flex flex-col items-start">
                                             <span class="text-sm font-medium text-gray-600">Garage </span>
                                             <span class="text-lg font-medium text-gray-800">{{$pr->garage}}</span>
                                         </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
