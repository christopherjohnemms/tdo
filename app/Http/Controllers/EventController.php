<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventImage;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class EventController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
        $january = Event::where('month','january')->get();
        $february = Event::where('month','february')->get();
        $march = Event::where('month','march')->get();
        $april = Event::where('month','april')->get();
        $may = Event::where('month','may')->get();
        $june = Event::where('month','june')->get();
        $july = Event::where('month','july')->get();
        $august = Event::where('month','august')->get();
        $september = Event::where('month','september')->get();
        $october = Event::where('month','october')->get();
        $november = Event::where('month','november')->get();
        $december = Event::where('month','december')->get();

        return Inertia::render('events', [
            'january' => $january,
            'february' => $february,
            'march' => $march,
            'april' => $april,
            'may' => $may,
            'june' => $june,
            'july' => $july,
            'august' => $august,
            'september' => $september,
            'october' => $october,
            'november' => $november,
            'december' => $december,
        ]);
//
//        return Inertia::render('dashboard');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'type' => ['required'],
            'month' => ['required'],
            'day' => ['required'],
            'event_title' => ['required'],
        ])->validate();

        Event::create($request->all());

        return redirect()->back()
            ->with('message', 'Event Created Successfully.');
    }


    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'type' => ['required'],
            'day' => ['required'],
            'month' => ['required'],
            'event_title' => ['required'],
        ])->validate();

        if ($request->has('id')) {
            Event::find($request->input('id'))->update($request->all());
            return redirect()->back()
                ->with('message', 'Event Updated Successfully.');
        }
    }


    public function destroy(Request $request)
    {
        if ($request->has('id')) {
            Event::find($request->input('id'))->delete();
            return redirect()->back();
        }
    }
}
