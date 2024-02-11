@extends('base')
@section('title','register')
@section('content')
<div>
    <div class="mt-40 max-w-[400px] m-auto w-full p-6 bg-white shadow-md rounded-md text-gray-700">
        <h5 class="text-center mb-4 text-xl font-semibold py-4">Signup</h5>
        <form action="" class="text-start">
            <div class="grid grid-cols-1">
                <div class="mb-4">
                    <label for="firstname">Prenom:</label><br>
                    <input type="text" id="firstname" name="fisrtname" placeholder="Prenom" class="mt-3 w-full border-gray-200 rounded-lg focus:ring-0 " style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';" >
                </div>
                <div class="mb-4">
                    <label for="lastname">Nom:</label><br>
                    <input type="text" id="lastname" name="lastname" placeholder="Nom" class="mt-3 w-full border-gray-200 rounded-lg focus:ring-0 " style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';" >
                </div>
                <div class="mb-4">
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email" placeholder="john21@example.com" class="mt-3 w-full border-gray-200 rounded-lg focus:ring-0 " style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';" >
                </div>
                <div class="mb-4">
                    <label for="password">mot de passe:</label><br>
                    <input type="text" id="password" name="password" class="mt-3 w-full border-gray-200 rounded-lg focus:ring-0 " style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';" >
                </div>
                <div class="mb-4">
                    <label for="passwordconfirmation">confirmer mot de passe:</label><br>
                    <input type="text" id="passwordconfirmation" name="passwordconfirmation" class="mt-3 w-full border-gray-200 rounded-lg focus:ring-0 " style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';">
                </div>
                <div class="text-center mb-4 mt-4">
                    <a href="#" class="w-full px-4 py-2 bg-[#16a34a]  text-white rounded-md ">S'enregistrer</a>
                </div>
                <div class="text-center mt-2">
                    <span class="text-slate-400 me-2">Vous avez déjas un compte ?</span>
                    <a href="#" class="text-gray-900 hover:text-slate-600 font-semibold ">Se Connecter</a>

                </div>
            </div>
        </form>

    </div>
</div>
@endsection