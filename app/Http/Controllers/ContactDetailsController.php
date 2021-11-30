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
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id = 1)
    {
        $information = ContactDetails::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        if ($validated) {
            $information->fill($request->all())->save();

            return back()->with("success", "Record updated!");
        }

        return back()->withErrors($validated);
    }
}
