<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Section;
use Illuminate\Support\Facades\Validator;

class SectionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Section::all();
        $homedata = Section::where('page','home')->get();
        return Inertia::render('sections', [
            'data' => $data,
            'homedata' => $homedata,
        ]);
//
//        return Inertia::render('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'page' => ['required'],
            'section_title' => ['required'],
            'body' => ['required'],
        ])->validate();

        Section::create($request->all());

        return redirect()->back()
            ->with('message', 'Section Created Successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'page' => ['required'],
            'section_title' => ['required'],
            'body' => ['required'],
        ])->validate();

        if ($request->has('id')) {
            Section::find($request->input('id'))->update($request->all());
            return redirect()->back()
                ->with('message', 'Section Updated Successfully.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function destroy(Request $request)
    {
        if ($request->has('id')) {
            Section::find($request->input('id'))->delete();
            return redirect()->back();
        }
    }
}
