<?php

namespace App\Http\Controllers;

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
        $ourStoryDetails->save();
        return redirect()->route('ourStory.list')->with('success','Our Story Created Successfully'); // redirect to banner create page with a success message.

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
        $ourStoryDetails->save();
        return redirect()->route('ourStory.list')->with('success','Details Updated Successfully');
    }

    public function destroy($id)
    {
        $ourStoryDetails = ourStory::find($id);
        $ourStoryDetails->delete();
        return redirect()->route('ourStory.list')->with('success','Deleted Successfully');
    }

    public function preview($id)
    {
        $ourStoryDetails = ourStory::find($id);
        return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.ourStory_crud.preview',compact('ourStoryDetails'));
    }
}
