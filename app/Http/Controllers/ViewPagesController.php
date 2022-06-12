<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\ourStory;
use App\Models\Blog;
use App\Models\CeoDetails;
use App\Models\MissionVission;
use App\Models\brands;
use App\Models\CompanyDetails;

class ViewPagesController extends Controller
{
    // homepage function
    public function homepage()
    {
        $bannerFetch = Banner::all();
        $companyDetailsFetch = CompanyDetails::all();
        $blogsFetch = Blog::orderBy('updated_at','desc')->limit(3)->get();
        return view('pages.homepage.index',compact('bannerFetch','companyDetailsFetch','blogsFetch'));
    }


    // aboutUs function
    public function aboutUs()
    {
        
        $ceoDetailsFetch = CeoDetails::all();
        $ourStoryFetch = ourStory::all();
        $blogsFetch = Blog::orderBy('updated_at','desc')->limit(2)->get();
        $brandsFetch = brands::all();
        $MissionVissionFetch = MissionVission::all();
        return view('pages.about.about',compact('ceoDetailsFetch','ourStoryFetch','blogsFetch','brandsFetch','MissionVissionFetch'));
    }

    // portfolio function
    public function portfolio()
    {
        return view('pages.Portfolio.portfolio');
    }

    // blog function
    public function blog()
    {
        $blogsFetch = Blog::all();
        return view('pages.blogs.blog',compact('blogsFetch'));
    }

    // single blog function
    public function SinglePost($slug)
    {
        $blogsFetch = Blog::where('slug','like',$slug)->first();
        return view('pages.blogs.blog_single',compact('blogsFetch'));
    }
    


    // contactUs function
    public function contactUs()
    {
         return view('pages.contactForm.contactform');
    }


    // Dashboard function
    public function dashboard()
    {
        return view('pages.ADMIN_DASHBOARD.admin_dashboard_control');
    }

    
    // project proposal function
    public function projectProposal()
    {
         return view('pages.projectProposal.project_proposal');
    }


}
