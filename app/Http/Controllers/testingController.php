<?php

namespace App\Http\Controllers;

use App\Models\testing;
use Illuminate\Http\Request;

class testingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testings = testing::get();
        return view('testing.addtesting')->with('testings',$testings);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testing.addnew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> ['required'],
            'present'=> ['required'],
            'absent'=> ['required'],
            'late'=> ['required'],
            'medical'=> ['required'],
            'substitute'=> ['required'],
            'rg'=> ['required'],
            'visitor'=> ['required'],
            'tyfcb'=> ['required'],
            'testimonial'=> ['required','min:1','max:2'],
            'training'=> ['required','min:1','max:3'],
        ]);

        //return $request;
        
        if($request->absent == 0){
            $absentpoint = 15;
        }elseif($request->absent == 1){            
            $absentpoint = 5;
        }
        
        if($request->late == 0){
            $latepoint = 5;
        }elseif($request->late == 1){            
            $latepoint = 5;
        }

        if($request->rg > 32){
            $rgpoint = 20;
        }elseif($request->rg < 32){            
            $rgpoint = 15;
        }

        if($request->visitor > 32){
            $visitorpoint = 20;
        }elseif($request->visitor < 32){            
            $visitorpoint = 15;
        }

        if($request->tyfcb < 500000 ){
            $tyfcbpoint = 0;
        }elseif($request->tyfcb > 500000 && $request->tyfcb < 1000000){            
            $tyfcbpoint = 5;
        }elseif($request->tyfcb > 1000000 && $request->tyfcb < 2000000){            
            $tyfcbpoint = 10;
        }elseif($request->tyfcb > 2000000){            
            $tyfcbpoint = 15;
        }
      

            $testimonialpoint = $request->testimonial * 5;
        
            $trainingpoint = $request->training * 5;
        $points = 0;
        if($request->absent == 0 && $request->late == 0 && $request->rg > 32 && $request->visitor > 32 && $request->tyfcb < 500000){
            $points = 15 + 5 + 20 + 20 + 0 ;
        }elseif($request->absent == 0 && $request->late == 0 && $request->rg > 32 && $request->visitor > 32 && $request->tyfcb > 500000 && $request->tyfcb < 1000000){
            $points = 15 + 5 + 20 + 20 + 5 ;
        }elseif($request->absent == 0 && $request->late == 0 && $request->rg > 32 && $request->visitor > 32 && $request->tyfcb > 1000000 && $request->tyfcb < 2000000){
            $points = 15 + 5 + 20 + 20 + 10 ;
        }elseif($request->absent == 0 && $request->late == 0 && $request->rg > 32 && $request->visitor > 32 && $request->tyfcb > 2000000){
            $points = 15 + 5 + 20 + 20 + 15 ;
        }
        
        //return $points;
        $minpoints = 0;
        if($request->absent == 1){
            $minpoints = 5;
        }

        $minpointslate = 0;
         if($request->late == 1){
            $minpointslate = 5;

         }

         $totalminus = $minpoints + $minpointslate;

         $allsum =  $points - $totalminus;

         $absentcount = testing::pluck('absent');

        $absent3mx = count($absentcount);

        if($absent3mx > 3){
            return back('3 absent already');
        }
        //return $allsum;
        $user = testing::create([
            'name' => $request->name,
            'present' => $request->present,
            'absent' => $request->absent,
            'late' => $request->late,
            'medical' => $request->medical,
            'substitute' => $request->substitute,
            'rg' => $request->rg,
            'visitor' => $request->visitor,
            'tyfcb' => $request->tyfcb,
            'testimonial' => $request->testimonial,
            'training' => $request->training,
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
