<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Validation\contactsValidator;
use App\Http\Validation\ContactValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
class contactController extends Controller
{
    public function get_contacts()
    {
        $contacts = Contact::all();
        return view('contacts/listeContacts', compact('contacts'));
    }

    public function show_DetailsContact($id)
    {
        $contact = Contact::find($id);
        return view('contacts/contactInfo', compact('contact'));
    }

    public function delete_Contact($id)
    {

        $contact = Contact::find($id);
        if ($contact) {
        $contact->delete();
        Alert::success('Success', 'Successfully Deleted');

        }
    }

    public function find_by_id($id)
    {
        $contact = Contact::find($id);
    }

    public function edit_Contact(request $request, contactsValidator $validation, $id)
    {
        $validator = Validator::make($request->all(), $validation->rules(), $validation->messages());
        $contact = Contact::find($id);

        if ($validator->fails()) {return view('contacts/contactInfo', compact('contact'));}

        $contact->nom               = $request->nom;
        $contact->prenom            = $request->prenom;
        $contact->fonction          = $request->fonction;
        $contact->service           = $request->service;
        $contact->date_naissance    = date("Y-m-d", strtotime($request->date_naissance));
        $contact->email             = $request->email;
        $contact->telephone         = $request->telephone;
        $contact->societe           = $request->societe;
        $contact->adresse           = $request->adresse;
        $contact->ville             = $request->ville;
        $contact->code_postal       = $request->code_postal;
        $contact->site              = $request->site;

        $contact->save();
        $contacts = Contact::all();
        return view('contacts/listeContacts', compact('contacts'));
    }

}
