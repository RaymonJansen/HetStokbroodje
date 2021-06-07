<?php

namespace App\Http\Controllers;

use App\Models\ContactDetails;
use Illuminate\Http\Request;

class ContactDetailsController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $view = view('information.edit');

        $view->information = ContactDetails::findOrFail(1); // By default only one row in DB Table possible.

        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = 1)
    {
        $information = ContactDetails::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        var_dump($request);
        exit;

        $information->name = $request->name;
        $information->address = $request->name;
        $information->zipcode = $request->name;
        $information->city = $request->name;
        $information->email = $request->name;
        $information->phone = $request->name;

        $information->save();

        return redirect('admin/home');
    }
}
