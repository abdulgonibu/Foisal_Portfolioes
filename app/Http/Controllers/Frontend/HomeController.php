<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Logo;
use App\Models\Portfolio;
use App\Models\Project;
use App\Models\ProjectDetails;
use App\Models\Video;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //home page menubar

    public function index()
    {
        $data['categories'] = Category::all();
        $data['logos'] = Logo::all();
        return view('welcome', $data);
    }


    public function home()
    {
        $data['portfolies'] = Portfolio::all();
        $data['categories'] = Category::all();
        $data['logos'] = Logo::all();
        return view('frontend.layouts.main', $data);
    }

    public function category($id)
    {
        $data['portfolies'] = Portfolio::all();
        $data['logos'] = Logo::all();
        $data['categories'] = Category::all();
        $data['category'] = Category::find($id);
        return view('frontend.category', $data);
    }

    public function projects($id)
    {
        $data['portfolies'] = Portfolio::all();
        $data['logos'] = Logo::all();
        $data['categories'] = Category::all();
        $data['category'] = Category::find($id);
        $data['projectdetail'] = ProjectDetails::all();
        $data['project'] = Project::find($id);
        return view('frontend.projects', $data);
    }

    public function contact()
    {
        $data['abouts'] = About::all();
        $data['portfolies'] = Portfolio::all();
        $data['categories'] = Category::all();
        $data['logos'] = Logo::all();
        $data['videos'] = Video::all();
        $data['contacts'] = Contact::all();
        return view('frontend.contact', $data);
    }


    public function project()
    {
        $data['abouts'] = About::all();
        $data['portfolies'] = Portfolio::all();
        $data['categories'] = Category::all();
        $data['logos'] = Logo::all();
        $data['videos'] = Video::all();
        $data['projects'] = Project::all();
        return view('frontend.project', $data);
    }

    public function portfolio()
    {
        $data['portfolios'] = Portfolio::all();
        return view('portfolio', $data);
    }

    public function about()
    {
        $data['abouts'] = About::all();
        $data['portfolies'] = Portfolio::all();
        $data['categories'] = Category::all();
        $data['logos'] = Logo::all();
        return view('frontend.about', $data);
    }

    public function videos()
    {
        $data['abouts'] = About::all();
        $data['portfolies'] = Portfolio::all();
        $data['categories'] = Category::all();
        $data['logos'] = Logo::all();
        $data['videos'] = Video::all();
        return view('frontend.videos', $data);
    }
}
