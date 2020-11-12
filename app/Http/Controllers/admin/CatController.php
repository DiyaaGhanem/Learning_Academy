<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;

class CatController extends Controller
{
    public function index(){

        $data['cats'] = Cat::select('id', 'name')->orderBy('id', 'DESC')->get();

        return view('admin.cats.index', $data);
    }

    public function create(){

        return view('admin.cats.create');
    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required|string|max:25',
        ]);

        Cat::create($data);

        return redirect(route('admin.cats.index'));
    }

     public function edit($id){

         $data['cat'] = Cat::findOrFail($id);

        return view('admin.cats.edit', $data);
    }

     public function update(Request $request){

        $data = $request->validate([
            'name' => 'required|string|max:25',
        ]);

        Cat::findOrFail($request->id)->update($data);

        return back();
    }

    public function delete($id){

        Cat::findOrfail($id)->delete();

        return back(); 
    }
}
