<?php

namespace App\Http\Controllers;
use Toastr;
use Illuminate\Http\Request;
use App\Models\MissionVission;
class MissionVissionController extends Controller
{
    public function list()
    {
        //
        $goal = MissionVission::all();
        $checkdataexists = MissionVission::first();
        return view ('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.MissionVision_crud.list',compact('checkdataexists','goal'));
    }

    public function create()
    {
        //
        return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.MissionVision_crud.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'mission' => 'required|min:3|max:100|string',
            'vision' => 'required|min:3|max:100|string'
        ],[
            'mission.required' => 'Please write your mission',
            'vision.required' => 'Please write your mission'
        ]);
        $goal = new MissionVission;
        $goal->mission = $request->mission;
        $goal->vision = $request->vision;
        Toastr::success('Mission Vission Details Created Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $goal->save();
        return redirect()->route('goal.list')->with('success','New Entry created Successfully'); // redirect to banner create page with a success message.

    }

    public function edit($id)
    {
        //
        $goal = MissionVission::find($id);
        if(!empty($goal)){
            return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.MissionVision_crud.edit',compact('goal'));
        }
        else{
            return 'Invalid id';
        }
    }

    public function update(Request $request, $id)
    {
        
        $goal = MissionVission::find($id);
        $goal->mission = $request->mission;
        $goal->vision = $request->vision;
        Toastr::success('Mission Vission Details Updated Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $goal->save();
        return redirect()->route('goal.list')->with('success','Details updated Successfully');
    }

    public function destroy($id)
    {
        //
        $goal = MissionVission::find($id);
        Toastr::error('Mission Vission Details Deleted Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $goal->delete();
        return redirect()->route('goal.list')->with('success','Deleted Successfully');
    }

    public function preview($id)
    {
        //
        $goal = MissionVission::find($id);
        return view('pages..CRUD_OPERATIONS.AboutUsPageCrudOperation.MissionVision_crud.preview',compact('goal'));
    }
}
