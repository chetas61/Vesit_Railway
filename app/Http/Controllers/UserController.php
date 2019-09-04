<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\student;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                
        return view('book');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Flight;
        
        $user->package = request('package');
        $user->To = request('to');
        $user->from = request('from');
        $user->adults = request('adults');
        $user->children = request('child');
        $user->save();
//return $user;
        return redirect("/available");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show1()
    {
        $user = DB::table('flights')
                 ->join('availableflights','flights.package','=','availableflights.package' )
                 ->where('flights.To','availableflights.To')
                 ->where('flights.from','availableflights.from')
                 ->select('flights.*','availableflights.*') 
                ->get();
             //return $user;
        return view("availableflight")->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
