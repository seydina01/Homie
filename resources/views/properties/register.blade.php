@extends('base')
@section('title','register')
@section('content')
<div class="mt-20 mb-0 py-20 w-full h-full relative bg-[url('https://media.istockphoto.com/id/848549286/photo/dream-home-luxury-house-success.jpg?s=612x612&w=0&k=20&c=cjhoNqomNTxgYWxuZ9Ev5PxZh6WY96vvDGf3Hl-7x-U=')] bg-no-repeat bg-cover bg-center ">
   <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative max-w-[400px] m-auto w-full p-6 bg-white shadow-md rounded-md text-gray-700">
        <h5 class="text-center mb-4 text-xl font-semibold py-4">Signup</h5>
        <form method="POST" action="{{ route('register') }}" class="text-start">
            @csrf
            <div class="grid grid-cols-1">
                <div class="mb-4">
                    <label for="firstname">Prenom:</label><br>
                    <input type="text" id="firstname" name="fisrtname" placeholder="Prenom" class="mt-3 w-full border-gray-200 rounded-lg focus:ring-0" required autofocus  style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';" >
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="lastname">Nom:</label><br>
                    <input type="text" id="lastname" name="lastname" placeholder="Nom" class="mt-3 w-full border-gray-200 rounded-lg focus:ring-0 " required style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';" >
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email" placeholder="john21@example.com" class="mt-3 w-full border-gray-200 rounded-lg focus:ring-0 " :value="old('email')" required  style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';"  >
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="password">mot de passe:</label><br>
                    <input type="text" id="password" name="password" class="mt-3 w-full border-gray-200 rounded-lg focus:ring-0 " required style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';" >
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="password_confirmation">confirmer mot de passe:</label><br>
                    <input type="text" id="password_confirmation" name="password_confirmation" class="mt-3 w-full border-gray-200 rounded-lg focus:ring-0 " required style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="text-center mb-4 mt-4">
                    <button  ><span class="w-full px-4 py-2 bg-[#16a34a] text-white rounded-md ">S'enregistrer</span></button>
                </div>
                <div class="text-center mt-2">
                    <span class="text-slate-400 me-2">Vous avez déjas un compte ?</span>
                    <a href="{{route('logintest')}}" class="text-gray-900 hover:text-slate-600 font-semibold ">Se Connecter</a>

                </div>
            </div>
        </form>

    </div>
</div>
@endsection