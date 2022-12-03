<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PortfolioController extends Controller
{
    public function index()
    {
        $portfolies = Portfolio::get();
        $categories = Category::get();
        return view('backend.portfolio.index', compact('portfolies', 'categories'));
    }


    public function show()
    {
        $portfolies = Portfolio::get();
        $categories = Category::get();
        return view('backend.portfolio.show', compact('portfolies', 'categories'));
    }

    public function store(Request $request)
    {
        $portfolies = new Portfolio();
        $portfolies->category_id = $request->category_id;
        // Note image
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientORiginalName();
            $file->move(public_path('upload/logo_images'), $filename);
            $portfolies['image'] = $filename;
            $portfolies->save();
            return redirect()->route('portfolies.show')->with('message', 'Portfolio added successfully');
        }
    }


    public function edit($id)
    {
        $editData = Portfolio::find($id);
        $categories = Category::get();
        return view('backend.portfolio.edit', compact('editData', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $data = Portfolio::find($id);
        $data->category_id = $request->category_id;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/logo_images/' . $data->image));
            $filename = date('YmdHi') . $file->getClientORiginalName();
            $file->move(public_path('upload/logo_images'), $filename);
            $data['image'] = $filename;
            $data->save();
            return redirect()->route('portfolies.show')->with('message', 'Portfolio update successfully');
        }
    }

    public function delete($id)
    {
        $portfolies = Portfolio::find($id);
        if (file_exists('upload/logo_images/' . $portfolies->image) and !empty($portfolies->image)) {
            unlink('upload/logo_images/' . $portfolies->image);
        }
        $portfolies->delete();
        return redirect()->route('portfolies.show')->with('message', 'Portfolio deleted successfully');
    }
}
