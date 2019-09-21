<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Car;
use Illuminate\Support\Facades\DB;
class carController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car::paginate(3);
        $category=Category::all();
        return view('car.home',compact('cars','category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('car.createCar',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg',
        ]);
        $destinationPath='asd';
        $car=new Car();
        if ($files = $request->file('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

        }






        $car->category_name=$request->category_name;
        $car->image=$name;
        $car->name=$request->name;
        $car->motor	=$request->motor;
        $car->price=$request->price;
        $car->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $car=Car::find($id);
      $category=Category::all();
      return view('car.edit',compact('car','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg',
        ]);
        $destinationPath='asd';
        $car=Car::find($id);
        if ($files = $request->file('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

        }






        $car->category_name=$request->category_name;
        $car->image=$name;
        $car->name=$request->name;
        $car->motor	=$request->motor;
        $car->price=$request->price;
        $car->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car=Car::find($id);
        $car->delete();
        return redirect()->back();

    }
}
