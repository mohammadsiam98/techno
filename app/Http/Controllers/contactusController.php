<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactUs;
class contactusController extends Controller
{

    public function list()
    {
        //
        $contact = contactUs::all();
        return view ('pages.CRUD_OPERATIONS.ContactPageCrudOperation.contact_crud.list',compact('contact'));
    }

    public function store(Request $data)
    {
        //
        $contact = new contactUs;
        $contact->name = $data->name;
        $contact->email = $data->email;
        $contact->mobilenumber = $data->mobilenumber;
        $contact->yourMessage = $data->yourMessage;
        $contact->save();
    }

    public function destroy($id)
    {
        //
        $contact = contactUs::find($id);
        $contact->delete();
        return redirect()->route('Contact.list')->with('success','Contact Details Deleted Successfully');
    }

    public function preview($id)
    {
        //
        $contact = contactUs::find($id);
        return view('pages.CRUD_OPERATIONS.ContactPageCrudOperation.contact_crud.preview',compact('contact'));
    }

    public function restoreList()
    {
        //
        $contact = contactUs::onlyTrashed()->get();
        return view ('pages.CRUD_OPERATIONS.ContactPageCrudOperation.contact_crud.restoreList',compact('contact'));
    }


    public function restoreData($id)
    {
        //
        $contact = contactUs::onlyTrashed()->find($id)->restore();
        return redirect()->route('Contact.restoreList')->with('success',"Contact Details Restored Successfully");
    }


    public function forceDelete($id)
    {
        //
        $contact = contactUs::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('Contact.restoreList')->with('success',"Contact Details Permanently Deleted Successfully");
    }
}
