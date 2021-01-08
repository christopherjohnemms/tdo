<?php

namespace App\Http\Controllers;

use App\Models\EventImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class EventImageController extends Controller
{
    public function index()
    {
        $gallery = EventImage::orderBy('created_at', 'ASC')->get();
        return Inertia::render('eventimage', [
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
        $eventImage = new EventImage;
        $name = time().'_'.$request->file->getClientOriginalName();
        $file = $request->file('file');
        $file->move($uploadPath, $name);
        $eventImage->file = $name;
        $eventImage->save();

        return redirect()->back()
            ->with('message', 'Event Image Created Successfully.');
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
            $eventImage =  EventImage::find($request->input('id'));

            if($request->hasFile('file')) {
                $uploadPath = public_path('images/uploads');
                $request->file('file')->store('file');

                $name = time().'_'.$request->file->getClientOriginalName();

                if(File::exists(public_path('images/uploads/'. $eventImage->file))) {
                    File::delete(public_path('images/uploads/'. $eventImage->file));
                }

                $file = $request->file('file');
                $file->move($uploadPath, $name);
                $eventImage->file = $name;
            }

            $eventImage->update();


            return redirect()->back()
                ->with('message', 'Event Image Updated Successfully.');
        }
    }


    public function destroy(Request $request)
    {
        if ($request->has('id')) {
            $eventImage = EventImage::find($request->input('id'));
            EventImage::find($request->input('id'))->delete();
            $image_path = url("/images/uploads/");
            if(File::exists(public_path('images/uploads/'. $eventImage->file))) {
                File::delete(public_path('images/uploads/'. $eventImage->file));
            }

            return redirect()->back();
        }
        else{
            return false;
        }
    }
}
