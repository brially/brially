<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = null;
        if(Input::has('user_id') ){
            $user = User::findOrFail(Input::get('user_id'));
        }
        if($user){
            return view('user.address.create', compact('user'));
        }
        else {
            return back();
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'address_id' => 'required_without:address,city,state,post_code',
            'address' => 'required_without:address_id',
            'city' => 'required_without:address_id',
            'state' => 'required_without:address_id',
            'post_code' => 'required_without:address_id',
        ]);

        $user = User::find(Input::get('user_id'));
        if(Input::has('address_id')){
            $user_address = UserAddress::create($request->only('user_id', 'address_id', 'name'));
        }
        else {
            $address = Address::create($request->only('address', 'address2', 'city', 'state', 'post_code', 'country'));
            $user_address = UserAddress::create([
                'user_id' => Input::get('user_id'),
                'address_id' => $address->id,
                'name' => Input::get('name')
            ]);
        }

        return redirect(action('UserController@show', $user ))->with('message', 'Your address has been added to your profile')->with('message-status', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAddress  $userAddress
     * @return \Illuminate\Http\Response
     */
    public function show(UserAddress $userAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAddress  $userAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAddress $userAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserAddress  $userAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAddress $userAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAddress  $userAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAddress $userAddress)
    {
        //
    }
}
