<?php

namespace App\Http\Controllers;
use Toastr;
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
        Toastr::error('Contact Details Deleted Successfully', 'Success', ["positionClass" => "toast-bottom-right",
        "closeButton"=> "true",
        "debug" => "false",
        "newestOnTop"=> "false",
        "progressBar"=> "true",
        "preventDuplicates"=> "false",
        "showDuration"=> "300",
        "hideDuration"=> "1000",
        "timeOut"=>"5000",
        "extendedTimeOut"=> "1000",
        "showEasing"=> "swing",
        "hideEasing"=> "linear",
        "showMethod"=> "fadeIn",
        "hideMethod"=> "fadeOut",
        "preventDuplicates"=> "true",
    ]);
        return redirect()->route('Contact.list');
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
