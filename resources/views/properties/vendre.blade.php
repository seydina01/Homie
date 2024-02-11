@extends('base')
@section('title','vendre')
@section('content')
<!--hero-vendre-->
<div class="mt-20 h-[30rem]">
    <section class="relative w-full h-full py-32 lg:py-36 bg-[url('https://images.unsplash.com/photo-1613977257592-4871e5fcd7c4?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-no-repeat bg-center bg-cover">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-3xl text-lg md:leading-normal leading-normal font-medium text-white lg:text-2xl"> Confiez-nous votre propriété et découvrez le chemin vers une transaction réussie.</h3>
        </div>

    </div>
    </section>
</div>
<!--finHero-->
<!--main content -->
<div>
    @include('properties/contact')
</div>
<!--endMainContent-->
@endsection
