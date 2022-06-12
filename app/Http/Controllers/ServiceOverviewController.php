<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ServiceOverview;
use DB;
class ServiceOverViewController extends Controller
{
   
    public function list()
    {
        //
        $ServiceOverviewDetails = ServiceOverview::all();
        return view ('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.ServiceOverView_crud.list',compact('ServiceOverviewDetails'));
    }

    public function create(Request $request)
    {
        // 
        $categorylist = Category::all();
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.ServiceOverView_crud.create',compact('categorylist'));
    }

    public function store(Request $request)
    {
        // Validation
        $this->validate($request,[
            'page_heading' => 'required|min:3|max:100|string',
            'title' => 'required|min:3|string',
            'details' => 'required|min:3|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ],[
            'page_heading.required' => 'Please write your page heading',
            'title.required' => 'Please write service overview title',
            'details.required' => 'Please write service overview details',
            'image.required' => 'Please upload your image'
        ]);
        $if_a_serviceOverview_is_already_written = DB::table('service_overviews')->where('category_id',$request->category_id)->first();
        if (empty($if_a_serviceOverview_is_already_written))
        {
            $ServiceOverviewDetails = new ServiceOverview;
            $ServiceOverviewDetails->page_heading = $request->page_heading;
            $ServiceOverviewDetails->title = $request->title;
            $ServiceOverviewDetails->details = $request->details;
            $ServiceOverviewDetails->category_id=$request->category_id;
         
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $ServiceOverviewDetails->image ="storage/img/".$image->hashName();
           
            $ServiceOverviewDetails->save();
            return redirect()->route('ServiceOverviewDetails.list')->with('success','Created Successfully');
        }
        else{
            return 'In this category there is already data inserted.';
        }

       
    }

    public function edit($id)
    {
        //
        $ServiceOverviewDetails = ServiceOverview::find($id);
        $categorylist = Category::all();
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.ServiceOverView_crud.edit',compact('ServiceOverviewDetails','categorylist'));

    }

    public function update(Request $request, $id)
    {
        //
        $ServiceOverviewDetails = ServiceOverview::find($id);
        $ServiceOverviewDetails->page_heading = $request->page_heading;
        $ServiceOverviewDetails->title = $request->title;
        $ServiceOverviewDetails->details = $request->details;
        $ServiceOverviewDetails->category_id=$request->category_id;


        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $ServiceOverviewDetails->image ="storage/img/".$image->hashName();
        }
        $ServiceOverviewDetails->save();
        return redirect()->route('ServiceOverviewDetails.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $ServiceOverviewDetails = ServiceOverview::find($id);
        $ServiceOverviewDetails->delete();
        return redirect()->route('ServiceOverviewDetails.list')->with('success',"Deleted Successfully");
    }

    public function preview($id)
    {
        //
        $ServiceOverviewDetails = ServiceOverview::find($id);
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.ServiceOverView_crud.preview',compact('ServiceOverviewDetails'));
    }
}
