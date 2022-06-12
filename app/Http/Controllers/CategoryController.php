<?php

namespace App\Http\Controllers;

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
        $categoryDetails->save();
        return redirect()->route('Category.list')->with('success','New Category Created Successfully'); // redirect to banner create page with a success message.

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
        $categoryDetails->save();
        return redirect()->route('Category.list')->with('success','Category Name Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $categoryDetails = Category::find($id);
        $categoryDetails->delete();
        return redirect()->route('Category.list')->with('success','Category Name Deleted Successfully');
    }
}
