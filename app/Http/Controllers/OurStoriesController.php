<?php

namespace App\Http\Controllers;
use Toastr;
use Illuminate\Http\Request;
use App\Models\ourStory;
class OurStoriesController extends Controller
{
    public function list()
    {
        //
        $ourStoryDetails = ourStory::all();
        $checkthatTheValueExistsOrNot = ourStory::first();
        return view ('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.ourStory_crud.list',compact('checkthatTheValueExistsOrNot','ourStoryDetails'));
    }

    public function create()
    {
        //
        return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.ourStory_crud.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'details' => 'required|min:3|max:100|string',
        ],[
            'details.required' => 'Please write our story details',
        ]);
        $ourStoryDetails = new ourStory;
        $ourStoryDetails->details = $request->details;
        Toastr::success('Our Story Created Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $ourStoryDetails->save();
        return redirect()->route('ourStory.list');

    }

    public function edit($id)
    {
        $ourStoryDetails = ourStory::find($id);
        if(!empty($ourStoryDetails)){
            return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.ourStory_crud.edit',compact('ourStoryDetails'));
        }
        else{
            return 'Invalid id';
        }
    }

    public function update(Request $request, $id)
    {
        $ourStoryDetails = ourStory::find($id);
        $ourStoryDetails->details = $request->details;
        Toastr::success('Our Story Updated Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $ourStoryDetails->save();
        return redirect()->route('ourStory.list');
    }

    public function destroy($id)
    {
        $ourStoryDetails = ourStory::find($id);
        Toastr::error('Our Story Deleted Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $ourStoryDetails->delete();
        return redirect()->route('ourStory.list');
    }

    public function preview($id)
    {
        $ourStoryDetails = ourStory::find($id);
        return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.ourStory_crud.preview',compact('ourStoryDetails'));
    }
}
