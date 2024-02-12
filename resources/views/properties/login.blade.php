@extends('base')
@section('title','login')
@section('content')
<!--login-->
<div class="mt-20 mb-0 py-20 w-full h-full relative bg-[url('https://media.istockphoto.com/id/848549286/photo/dream-home-luxury-house-success.jpg?s=612x612&w=0&k=20&c=cjhoNqomNTxgYWxuZ9Ev5PxZh6WY96vvDGf3Hl-7x-U=')] bg-no-repeat bg-cover bg-center ">
   <div class="absolute inset-0 bg-black opacity-60"></div>
   <div  class="relative  max-w-[400px] w-full m-auto p-6 bg-white shadow-md rounded-lg text-gray-700">
        <h5 class="text-center  my-6 text-xl font-semibold">connexion</h5>
        <form class="text-start" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="grid grid-cols-1">
                <div class="grid grid-cols-1">
                    <div class="mb-4">
                        <label for="email"class="font-medium" >Email:</label> <br>
                        <input type="email" id="email" name="email" placeholder="nom@exemple.com" class="form-input mt-3 w-full border-gray-200 rounded-lg focus:ring-0 " :value="old('email')"  style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';" required autofocus autocomplete="username" >
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="font-medium">mot de passe:</label><br>
                        <input type="password" id="password" placeholder='Password:' class="form-input mt-3 w-full border-gray-200 rounded-lg focus:ring-0" style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';" required >
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="flex justify-between mb-4">
                        <div class="flex items-center mb-0">
                            <input type="checkbox" id='remember_me' name="remember" class="form-checkbox rounded border-gray-200 focus:ring-green-200 focus:ring-opacity-50 ">
                            <label for="remember_me" class=" text-slate-400 ml-1">{{ __('Remember me') }}</label>
                    
                        </div>
                        <p class="text-slate-400 mb-0">
                            @if (Route::has('password.request'))
                               <a href="{{ route('password.request')}}" class="text-slate-600">{{ __('mot de passe oublié ?') }}</a>
                            @endif   
                        </p>

                    </div>
                    <div class="mb-4">
                        <button type="submit" class="w-full px-4 py-2  text-white font-bold rounded-lg" style="background-color: #16a14a; :hover { background-color: #128d3e; }">Se connecter</button>
                    </div>
                    <div class="text-center">
                        <span class="text-slate-400 me-2 ">Vous n'avez pas de compte ?</span>
                        <a href="{{route('registertest')}}" class="text-gray-900 hover:text-slate-600">Créer un compte</a>
                    </div>
                </div>

            </div>

        </form>

    </div>

</div>

<!--endLogin-->
@endsection