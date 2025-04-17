<?php
namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function addCar(Request $request)
    {
        $imagePath = null;

        if ($request->hasFile('image')) {
            $image     = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            $uploadPath = base_path('public/images/cars');
            $image->move($uploadPath, $imageName);
            $imagePath = 'images/cars/' . $imageName;
        }

        $Car = Car::create([
            'name'  => $request->input('name'),
            'type'  => $request->input('type'),
            'spz'   => $request->input('spz'),
            'color' => $request->input('color'),
            'image' => $imagePath,

        ]);

        return redirect('/cars');
    }

    public function editCar($id)
    {
        $car = Car::find($id);
        return view('editcar', ['car' => $car]);
    }

    public function updateCar(Request $request, $id)
    {
        $car = Car::find($id);
        $car->update($request->all());
        return redirect('/cars');
    }
    public function index()
    {
        $cars = Car::all();
        return view('cars', ['cars' => $cars]);
    }

    public function deleteCar($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('/cars');
    }
}
