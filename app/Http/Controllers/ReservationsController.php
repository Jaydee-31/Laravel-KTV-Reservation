<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Reservation::latest()->paginate(8);
    
        return view('reservations.create',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'number_of_people' => 'required',
            'message' => 'required'
        ]); 

        Reservation::create($request->all());
     
        return redirect()->route('reservations.create')
                        ->with('success','Reservation created successfully.')->setTargetUrl(url()->previous() . '#book-a-table');
        
                        // return redirect()->back()->withMessage('success','Reservation created successfully.');
        // return redirect()->back()->withInput()
        //                 ->with('success','Reservation created successfully.')->fragment('section-id');


    }


}
