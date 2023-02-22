<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Dotenv\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $contact = Contact::all();
        return  response()->ison($contact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required|min:10|numeric',
        ];
        $validator = \Illuminate\Validation\Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return \response()->json($validator->errors(),400);
        }
       $contact = new Contact();
       $contact->name = request('name');
       $contact->address = request('address');
       $contact->phone = request('phone');
       $contact->save();
       return  response()-> json($contact);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {

        $contact = Contact::findOrFail($id);
        if (!$contact){

            return response()->json([
                    'message'=>'data not found'
            ], 404);
        }

        return response()->json($contact);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $contact = Contact::findOrFais($id);
        if (!$contact){

            return response()->json([
                'message'=>'data not found'
            ], 404);
        }
        $contact->name = reqest('name');
        $contact->address = request('address');
        $contact->phone = request('phone');
        $contact->save();
        dd( response()-> json($contact));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
      $contact = Contact::find($id);
        if (!$contact){

            return response()->json([
                'message'=>'data not found Not delete'
            ], 404);
        }
      $contact->delete();
      return response()->json($contact);
    }
}
