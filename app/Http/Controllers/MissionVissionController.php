<?php

namespace App\Http\Controllers;

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
        $goal->save();
        return redirect()->route('goal.list')->with('success','Details updated Successfully');
    }

    public function destroy($id)
    {
        //
        $goal = MissionVission::find($id);
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
