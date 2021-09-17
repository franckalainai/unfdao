<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;


class NewsLetterController extends Controller
{

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        try{
            if(Newsletter::isSubscribed($request->email)){
                return redirect()->back()->with('error', 'Email already subscribed');
            }else{
                Newsletter::subscribe($request->email);
                return redirect()->back()->with('success', 'Email subscribed successfully');
            }
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
        
}