<?php

namespace App\Http\Controllers;
use Toastr;
use Illuminate\Http\Request;
use App\Models\ProjectProposal;
class ProjectProposalController extends Controller
{
    public function list()
    {
        //
        $ProjectProposalDetails = ProjectProposal::all();
        return view ('pages.CRUD_OPERATIONS.ProjectProposalCrudOperation.ProjectProposal_crud.list',compact('ProjectProposalDetails'));
    }

    public function store(Request $data)
    {
        $ProjectProposalDetails = new ProjectProposal;
        $ProjectProposalDetails->details = $data->details;
        $ProjectProposalDetails->full_name = $data->full_name;
        $ProjectProposalDetails->mobile_number = $data->mobile_number;
        $ProjectProposalDetails->ref_website = $data->ref_website;
        $ProjectProposalDetails->email = $data->email;

        $arrayToString = implode(',',$data->input('servicesSelected'));
        $ProjectProposalDetails['servicesSelected'] =$arrayToString;
        $ProjectProposalDetails->save();

    }

    public function destroy($id)
    {
        //
        $ProjectProposalDetails = ProjectProposal::find($id);
        Toastr::error('Project Proposal Details Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $ProjectProposalDetails->delete();
        return redirect()->route('ProjectProposal.list');
    }

    public function preview($id)
    {
        //
        $ProjectProposalDetails = ProjectProposal::find($id);
        return view('pages.CRUD_OPERATIONS.ProjectProposalCrudOperation.ProjectProposal_crud.preview',compact('ProjectProposalDetails'));
    }

    public function restoreList()
    {
        //
        $ProjectProposalDetails = ProjectProposal::onlyTrashed()->get();
        return view ('pages.CRUD_OPERATIONS.ProjectProposalCrudOperation.ProjectProposal_crud.restoreList',compact('ProjectProposalDetails'));
    }


    public function restoreData($id)
    {
        //
        $ProjectProposalDetails = ProjectProposal::onlyTrashed()->find($id)->restore();
        return redirect()->route('ProjectProposal.restoreList')->with('success',"Restored Successfully");
    }


    public function forceDelete($id)
    {
        //
        $ProjectProposalDetails = ProjectProposal::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('ProjectProposal.restoreList')->with('success',"Permanently Deleted Successfully");
    }
}
