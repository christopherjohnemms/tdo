<?php

namespace App\Http\Controllers;

use App\Models\Grading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class GradingsController extends Controller
{
    public function index()
    {
        $gradings = Grading::orderBy('created_at', 'ASC')->get();
        return Inertia::render('gradings', [
            'data' => $gradings,
        ]);
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'file' => 'required|max:10240',
            'name' => 'required',
            'type' => 'required',
        ])->validate();

        $uploadPath = public_path('images/uploads');
        $request->file('file')->store('file');
        $gradingSheet = new Grading;
        $name = time().'_'.$request->file->getClientOriginalName();
        $file = $request->file('file');
        $file->move($uploadPath, $name);

        $gradingSheet->order = $request->input('order');
        $gradingSheet->name = $request->input('name');
        $gradingSheet->type = $request->input('type');
        $gradingSheet->file = $name;
        $gradingSheet->save();

        return redirect()->back()
            ->with('message', 'Grading Sheet Created Successfully.');
    }

    public function update(Request $request)
    {
        if($request->hasFile('file')) {
            //
            Validator::make($request->all(), [
                'file' => 'required|max:10240',
            ])->validate();
        }

        if ($request->has('id')) {
            $gradingSheet =  Grading::find($request->input('id'));

            if($request->hasFile('file')) {
                $uploadPath = public_path('images/uploads');
                $request->file('file')->store('file');

                $name = time().'_'.$request->file->getClientOriginalName();

                if(File::exists(public_path('images/uploads/'. $gradingSheet->file))) {
                    File::delete(public_path('images/uploads/'. $gradingSheet->file));
                }

                $file = $request->file('file');
                $file->move($uploadPath, $name);
                $gradingSheet->file = $name;
            }
            $gradingSheet->order = $request->input('order');
            $gradingSheet->name = $request->input('name');
            $gradingSheet->type = $request->input('type');

            $gradingSheet->update();


            return redirect()->back()
                ->with('message', 'Grading Sheet Updated Successfully.');
        }
    }

    public function destroy(Request $request)
    {
        if ($request->has('id')) {
            $gradingSheet = Grading::find($request->input('id'));
            Grading::find($request->input('id'))->delete();
            $image_path = url("/images/uploads/");
            if(File::exists(public_path('images/uploads/'. $gradingSheet->file))) {
                File::delete(public_path('images/uploads/'. $gradingSheet->file));
            }
            return redirect()->back();
        }
        else{
            return false;
        }
    }



}
