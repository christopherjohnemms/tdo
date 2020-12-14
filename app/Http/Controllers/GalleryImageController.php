<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;

class GalleryImageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
        $gallery = GalleryImage::orderBy('order', 'ASC')->get();
        return Inertia::render('gallery', [
            'data' => $gallery,
        ]);
    }


    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'file' => 'required|image|max:10240',
        ])->validate();


        $uploadPath = public_path('images/uploads');
        $request->file('file')->store('file');
        $galleryImage = new GalleryImage;
        $name = time().'_'.$request->file->getClientOriginalName();
//        $filePath = $request->file('file')->storeAs('uploads', $name, 'public');
        $file = $request->file('file');
        $file->move($uploadPath, $name);
        $galleryImage->name = time().'_'.$request->file->getClientOriginalName();
        $galleryImage->file = $name;
        $galleryImage->name  = $request->name;
        $galleryImage->description  = $request->description;
        $galleryImage->order  = $request->order;

        $galleryImage->save();

        return redirect()->back()
            ->with('message', 'Gallery Image Created Successfully.');
    }


    public function update(Request $request)
    {
        if($request->hasFile('file')) {
            //
            Validator::make($request->all(), [
                'file' => 'required|image|max:10240',
            ])->validate();
        }


        if ($request->has('id')) {
            $galleryImage =  GalleryImage::find($request->input('id'));

            if($request->hasFile('file')) {
                $uploadPath = public_path('images/uploads');
                $request->file('file')->store('file');

                $name = time().'_'.$request->file->getClientOriginalName();

                if(File::exists(public_path('images/uploads/'. $galleryImage->file))) {
                    File::delete(public_path('images/uploads/'. $galleryImage->file));
                }

                $file = $request->file('file');
                $file->move($uploadPath, $name);
                $galleryImage->name = time().'_'.$request->file->getClientOriginalName();
                $galleryImage->file = $name;
            }

            $galleryImage->name  = $request->name;
            $galleryImage->description  = $request->description;
            $galleryImage->order  = $request->order;

            $galleryImage->update();


            return redirect()->back()
                ->with('message', 'Gallery Image Updated Successfully.');
        }
    }


    public function destroy(Request $request)
    {
        if ($request->has('id')) {
            $galleryimage = GalleryImage::find($request->input('id'));
            GalleryImage::find($request->input('id'))->delete();
            $image_path = url("/images/uploads/");
            if(File::exists(public_path('images/uploads/'. $galleryimage->file))) {
                File::delete(public_path('images/uploads/'. $galleryimage->file));
            }

            return redirect()->back();
        }
    }
}
