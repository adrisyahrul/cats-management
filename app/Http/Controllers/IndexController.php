<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cats;
use Validator;

class IndexController extends Controller
{
    public function index()
    {
        $cats = Cats::get();
    	return view('index', [
            'cats' => $cats,
        ]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'gender' => 'required',
            'type' => 'required',
            'colour' => 'required',
            'food' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $cats = new Cats;
        $cats->name= $request->name;
        $cats->gender= $request->gender;
        $cats->type= $request->type;
        $cats->colour= $request->colour;
        $cats->food= $request->food;

        $store=$cats->save();

        return $store ? redirect()->back()->with('success','Data saved success')
                : redirect()->back()->with('failed','Failed to save');
    }
}
