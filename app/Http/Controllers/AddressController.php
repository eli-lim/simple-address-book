<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $searchby = $request->input('searchby');
        $search   = $request->input('search');
        $orderby  = $request->input('orderby');
        $order    = $request->input('order');

        $addresses = Address::where($searchby, 'LIKE', "%$search%");

        if ($orderby != "")
            $addresses = $addresses->orderBy($orderby)->get();
        else {
            $addresses = $addresses->get();
        }

        $view = view('addresses.search')->with('addresses', $addresses);

        $numResults = count($addresses);

        if ($numResults > 0) {
            return $view->with('success', 'Found ' . $numResults .  ' result' . ($numResults > 1 ? 's!' : '!'));
        }

        return $view->with('error', 'Found no such address...');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::orderBy('street', 'asc')->get();
        return view('addresses.index')->with('addresses', $addresses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addresses.create');
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
            'name' => 'required',
            'hp_num' => 'required',
            'email' => 'required',
            'street' => 'required', // *** YL qn: Is there a config file for validation???
            'zip' => 'required'
        ]);

        // Create address
        $address = new Address;
        $address->name   = $request->input('name');
        $address->hp_num = $request->input('hp_num');
        $address->email  = $request->input('email');
        $address->street = $request->input('street');
        $address->block  = $request->input('block');
        $address->unit   = $request->input('unit');
        $address->zip    = $request->input('zip');

        $address->save();

        return redirect('/addresses')->with('success', 'Address created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = Address::find($id);
        return view('addresses.show')->with('address', $address);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('addresses.edit')->with('address', Address::find($id));
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
        $this->validate($request, [
            'name' => 'required',
            'hp_num' => 'required',
            'email' => 'required',
            'street' => 'required', // *** YL qn: Is there a config file for validation???
            'zip' => 'required'
        ]);

        // Create address
        $address = Address::find($id);
        $address->name   = $request->input('name');
        $address->hp_num = $request->input('hp_num');
        $address->email  = $request->input('email');
        $address->street = $request->input('street');
        $address->block  = $request->input('block');
        $address->unit   = $request->input('unit');
        $address->zip    = $request->input('zip');
        $address->save();

        return redirect('/addresses')->with('success', 'Address Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address = Address::find($id);

        $address->delete();
        return redirect('/addresses')->with('success', 'Address successfully deleted!');
    }
}
