<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::where('id', Auth::id())->first();
        return view('frontend.users.index', compact('profile'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $profile = Profile::where('id', Auth::id())->first();

        $profile->name = $request->input('name');
        $profile->lname = $request->input('lname');
        $profile->email = $request->input('email');
        $profile->phone = $request->input('phone');
        $profile->address1 = $request->input('address1');
        $profile->address2 = $request->input('address2');
        $profile->city = $request->input('city');
        $profile->state = $request->input('state');
        $profile->country = $request->input('country');
        $profile->pincode = $request->input('pincode');
        $profile->update();
        return redirect('profile-user')->with('status', "Info Updated Successfully");
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


         #Match The Old Password
         if(!Hash::check($request->old_password, auth()->user()->password)){
            return redirect('profile-user')->with("status", "Incorrect Old Password");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('profile-user')->with("status", "Password changed successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profile::find($id)->delete();

        return back();
    }
}
