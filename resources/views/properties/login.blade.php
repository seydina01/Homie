@extends('base')
@section('title','login')
@section('content')
<!--login-->
<div class=" mt-40 max-w-[400px] w-full m-auto p-6 bg-white shadow-md rounded-lg">
    <h5 class="my-6 text-xl font-semibold">Login</h5>
    <form class="text-start" action="">
        <div class="grid grid-cols-1">
            <div class="grid grid-cols-1">
                <div class="mb-4">
                    <label for="email"class="font-medium" >Email:</label> <br>
                    <input type="email" id="email" name="email" placeholder="nom@exemple.com" class="form-input mt-3 border-gray-200 ">
                </div>
                <div class="mb-4">
                    <label for="password" class="font-medium">mot de passe:</label><br>
                    <input type="password" id="password" placeholder='Password:' class="form-input mt-3">
                </div>
                <div class="flex justify-between mb-4">
                    <div class="flex items-center mb-0">
                        <input type="checkbox" id='RememberMe' class="form-checkbox rounded border-gray-200 focus:ring-green-200 focus:ring-opacity-50 ">
                        <label for="RememberMe" class="form-checkbox-label text-slate-400">Remember me</label>
                
                    </div>
                    <p class="text-slate-400 mb-0">
                        <a href="#" class="text-slate-400">mot de passe oublié ?</a>
                    </p>

                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full px-4 py-2 bg-green-500 hover:bg-green-700 text-white font-bold rounded-lg">Login</button>
                </div>
                <div class="text-center">
                    <span class="text-slate-400 me-2 ">Vous n'avez pas de compte ?</span>
                    <a href="#" class="text-black">Créer un compte</a>
                </div>
            </div>

        </div>

    </form>

</div>
<!--endLogin-->
@endsection