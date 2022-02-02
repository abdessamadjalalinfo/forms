<?php

namespace App\Http\Controllers;
use App\Models\Match;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MatchController extends Controller
{
    public function match(Request $request)
    {
        
        $colors = preg_split('/(?=[A-Z])/',$request->color);
        $matches=Match::all()->where('pet',$request->pet)->where('race',$request->race);
        //return $matches;
        foreach($matches as $match)
        {
            if(in_array($request->features[0],explode(",",strtoupper($match->features))))
            {
                $details = [
                    'title' => 'About you question',
                    'body' =>'test1',
                ];
                Mail::to($match->email)->send(new \App\Mail\MyTestMail($details));
                return $match;
            }
            
        }
        
       //return $request->features;
    }
}
