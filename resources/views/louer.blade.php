@extends('base')
@section('title','Louer')
@section('content')

    <div class="flex flex-col mt-24 ml-16 ">
        <div class=""><p class="text-5xl font-sans">Listes de nos biens</p></div>
        <div class="lg:flex lg:flex-row justify-between mt-8 lg:m-16   ">
            <div class="flex flex-col md:flex-row lg:grid  lg:grid-cols-2  gap-3 justify-center mt-10 lg:w-2/3 ">
                @foreach($pr as $p)
        <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-4">
            <div class="relative">
                <div class="">
                    <div class="">
                        <a href="{{route('properties.show',$p->id)}}">     <img src="{{ Storage::url($p->picture1) }}"src="{{ Storage::url($p->picture1) }}" class="w-full" alt="...">
                        </a>
                    </div>                            </div>
                            <div class="absolute bottom-8 left-5 text-2xl font-bold text-white">
                                <p>{{$p->price}}FCFA/Mois</p>
                            </div>

                        </div>
                        <div class="flex-auto p-6">
                            <h5 class="mb-0 text-base font-bold "><a href="#" class=""></a>{{$p->category->name}}</h5>
                            <p class="mb-0 text-base font-medium">{{$p->adresse}}</p>
                            <div class="flex flex-row gap-4 mt-2">
                                <p> <i class="fa fa-bed" aria-hidden="true"></i>{{$p->room}}</p>
                                <p> <i class="fa fa-bath" aria-hidden="true"></i>{{$p->bathroom}}</p>
                                <p> <i class="fa fa-car" aria-hidden="true"></i>{{$p->garage}}</p>
                                <p> <i class="fa fa-industry" aria-hidden="true"></i>{{$p->surface}}25m2</p>
                            </div>
                            <h5 class="mb-0 text-base font-medium">Studio</h5>
                            <div class="divide-y divide-gray-400  mt-3">
                                <p></p>
                                <p class="mb-0 flex flex-row justify-between"><small class="text-gray-700"><i class="fa-regular fa-user"></i>Homiz</small> <small class="text-gray-700"><i class="fa-regular fa-calendar-days"></i> depuis {{$p->yearOfBuild}}</small></p>
                            </div>
                        </div>
                    </div>

                @endforeach

    </div>


    <div class="lg:w-1/3 ">
        <div class="w-full md:w-1/4 px-4 sticky top-0">
            <div class="bg-white p-4 mt-12">

                <h2 class="text-3xl font-bold text-gray-800 mb-4 ">Categories</h2>
                <ul class="list-none">
                    @foreach($cat as $c)
                        <li class="mb-2">
                            <a href="{{route('categories.show',$c->id)}}" class="text-gray-700 hover:text-gray-900 uppercase">{{$c->name}}</a>
                        </li>
                    @endforeach


                </ul>
            </div>
            <div class="bg-white p-4 mt-4  ">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Villes</h2>
                <ul class="list-none">
                    @foreach($vi as $c)
                        <li class="mb-2">
                            <a href="{{route('cities.show',$c->id)}}" class="text-gray-700 hover:text-gray-900 uppercase">{{$c->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

