<?php

namespace App\Http\Controllers;
use Toastr;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function list()
    {
        //
        $categoryDetails = Category::all();
        return view ('pages.CRUD_OPERATIONS.CategoryCrudOperation.Category_crud.list',compact('categoryDetails'));
    }

    public function create()
    {
        //
        return view('pages.CRUD_OPERATIONS.CategoryCrudOperation.Category_crud.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'categoryName' => 'required|min:3|max:100|unique:categories|string',
        ],[
            'categoryName.required' => 'Please write your category name', 
            'categoryName.unique' => 'Category Name should be unique', 
        ]);
        $categoryDetails = new Category;
        $categoryDetails->categoryName = $request->categoryName;
        Toastr::success('Category Inserted Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $categoryDetails->save();
        return redirect()->route('Category.list');

    }

    public function edit($id)
    {
        //
        $categoryDetails = Category::find($id); // Fetch specific banner id
        return view('pages.CRUD_OPERATIONS.CategoryCrudOperation.Category_crud.edit',compact('categoryDetails'));
    }

    public function update(Request $request, $id)
    {
        $categoryDetails = Category::find($id);
        $categoryDetails->categoryName = $request->categoryName;
        Toastr::success('Category Name Updated Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $categoryDetails->save();
        return redirect()->route('Category.list');
    }

    public function destroy($id)
    {
        //
        $categoryDetails = Category::find($id);
        $categoryDetails->delete();
        Toastr::success('Category Name Deleted Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        return redirect()->route('Category.list');
    }
}
