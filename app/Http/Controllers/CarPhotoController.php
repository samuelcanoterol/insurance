<?php

namespace App\Http\Controllers;

use App\Models\CarPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarPhotoController extends Controller
{
    public function store(Request $request, $carId)
    {
        $request->validate([
            'photos.*' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        foreach ($request->file('photos') as $photo) {
            $filename = $photo->store('car_photos', 'public');

            CarPhoto::create([
                'car_id' => $carId,
                'filename' => $filename,
            ]);
        }

        return redirect()->back();
    }


    public function destroy($id)
    {
        $photo = CarPhoto::findOrFail($id);

        Storage::disk('public')->delete($photo->filename);
        $photo->delete();

        return redirect()->back();
    }
}
