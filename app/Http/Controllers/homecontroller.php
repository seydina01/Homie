<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    function index(){
        $appartement= Property::where('category_id', '5')->count();
        $villa= Property::where('category_id', '3')->count();
        $single= Property::where('category_id', '6')->count();
        $maison= Property::where('category_id', '4')->count();
        $boutique= Property::where('category_id', '7')->count();
        $bureau= Property::where('category_id', '8')->count();
        $studio= Property::where('category_id', '2')->count();
        $thies= Property::where('city_id', '2')->count();
        $dakar= Property::where('city_id', '1')->count();
        $mbour= Property::where('city_id', '4')->count();
        $kaolack= Property::where('city_id', '3')->count();




        $p=Property::take(3)->get();
        $property=Property::take(6)->get();
        return view('welcome',compact('property','dakar','p','appartement','villa','single','maison','boutique','bureau','studio','mbour','kaolack','thies','dakar'));
    }
    public function rent()
    {
        $pr = Property::with('category')->where('status','=' ,1)->get();
        $cat=Category::all();
        $vi=City::all();
        return view('louer',compact('pr','cat','vi'));
    }
    public function montrer($id)
    {
        $pr=Category::findOrFail($id);
        return view('montrer',compact('pr'));
    }
    public function all()
    {
        $pr = Property::all();
        $cat=Category::all();
        $vi=City::all();

        return view('all',compact('pr','cat','vi'));
    }
    public function see($city)
    {
        // Récupérez les biens pour une ville spécifique
        $pr = Property::where('city_id', $city)->get();
        $cat=Category::all();
        $vi=City::all();



        return view('see', compact('pr','cat','vi'));
    }

}
