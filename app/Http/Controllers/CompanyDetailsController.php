<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyDetails;
class CompanyDetailsController extends Controller
{
    public function list()
    {
        //
        $Details = CompanyDetails::all();
        $CompanyDetailsCreated=CompanyDetails::first();
        return view ('pages.CRUD_OPERATIONS.HomePageCrudOperation.CompanyDetails_crud.list',compact('Details','CompanyDetailsCreated'));
    }

    public function create()
    {
        //
        $CompanyDetailsCreated=CompanyDetails::first();
        return view('pages.CRUD_OPERATIONS.HomePageCrudOperation.CompanyDetails_crud.create',compact('CompanyDetailsCreated'));

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'details' => 'required|min:3|max:1000|string'
        ],[
            'details.required' => 'Please write something',
        ]);
        $Details = new CompanyDetails;
        $Details->details = $request->details;
        $Details->save();
        return redirect()->route('CompanyDetails.list')->with('success','New Details created Successfully'); // redirect to banner create page with a success message.

    }

    public function edit($id)
    {
        //
        $Details = CompanyDetails::find($id); // Fetch specific id
        return view('pages.CRUD_OPERATIONS.HomePageCrudOperation.CompanyDetails_crud.edit',compact('Details'));
    }

    public function update(Request $request, $id)
    {
        // Fetch Specific row and update
        $Details = CompanyDetails::find($id);
        $Details->details = $request->details;
        $Details->save();
        return redirect()->route('CompanyDetails.list')->with('success','Details updated Successfully');
    }

    public function destroy($id)
    {
        //
        $Details = CompanyDetails::find($id);
        $Details->delete();
        return redirect()->route('CompanyDetails.list')->with('success','Details Deleted Successfully');
    }

    public function preview($id)
    {
        //
        $Details = CompanyDetails::find($id);
        return view('pages.CRUD_OPERATIONS.HomePageCrudOperation.CompanyDetails_crud.preview',compact('Details'));
    }
}
