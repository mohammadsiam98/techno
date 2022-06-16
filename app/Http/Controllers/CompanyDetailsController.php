<?php

namespace App\Http\Controllers;
use Toastr;
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
        Toastr::success('Company Details Inserted Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $Details->save();
        return redirect()->route('CompanyDetails.list');
    }

    public function edit($id)
    {
        //
        $Details = CompanyDetails::find($id);
        if(!empty($Details)){
            return view('pages.CRUD_OPERATIONS.HomePageCrudOperation.CompanyDetails_crud.edit',compact('Details'));
        }
        else{
            return 'Invalid id';
        }
    }

    public function update(Request $request, $id)
    {
        // Fetch Specific row and update
        $Details = CompanyDetails::find($id);
        $Details->details = $request->details;
        Toastr::success('Company Details Updated Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $Details->save();
        return redirect()->route('CompanyDetails.list');
    }

    public function destroy($id)
    {
        //
        $Details = CompanyDetails::find($id);
        Toastr::error('Company Details Deleted Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $Details->delete();
        return redirect()->route('CompanyDetails.list');
    }

    public function preview($id)
    {
        //
        $Details = CompanyDetails::find($id);
        return view('pages.CRUD_OPERATIONS.HomePageCrudOperation.CompanyDetails_crud.preview',compact('Details'));
    }
}
