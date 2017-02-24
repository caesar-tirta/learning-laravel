<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Profile;

class ContactsController extends Controller
{
    protected $obj_contact, $arr_input, $m_session, $obj_profile;

    public function __construct()
    {
        $this->m_session = 'asdasdsadsa_kong';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->obj_contact = Contact::all();
        return view('contact.index')->with([
            'contact' => $this->contact
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->obj_contact = new Contact();
        return view('contact.new')->with([
            'contact' => $this->contact
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->arr_input = $request->all();

        $this->obj_contact = new Contact();
        $this->obj_contact->name = $this->arr_input['name'];
        $this->obj_contact->email = $this->arr_input['email'];
        $this->obj_contact->phone_number = $this->arr_input['phone_number'];
        // $this->obj_contact->save();
        dd($this);

        return 'ok';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->obj_profile = Profile::find($id);
        dd($this);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->obj_contact = Contact::where('id', $id);
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
