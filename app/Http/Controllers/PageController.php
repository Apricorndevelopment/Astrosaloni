<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutus()
    {
        $service_name = Service::take(5)->get();
        return view('aboutus', compact('service_name'));
    }

    public function service()
    {
        $service = Service::paginate(6);
        $service_name = Service::take(5)->get();
        $blog = Blog::paginate(6);
        return view('service', compact('service', 'service_name', 'blog'));
    }

    public function contactus()
    {
        $service_name = Service::take(5)->get();
        return view('contactus', compact('service_name'));
    }




    public function blog(Request $request)
    {
        // Search functionality
        $search = $request->input('search');
        $category = $request->input('category');

        $blogs = Blog::when($search, function ($query, $search) {
            return $query->where('blog_name', 'like', "%{$search}%")
                ->orWhere('blog_shortdesc', 'like', "%{$search}%");
        })
            ->when($category, function ($query, $category) {
                return $query->where('category_id', $category);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(3); // 5 items per page

        $recent_blogs = Blog::orderBy('created_at', 'desc')->take(5)->get();

        $categories = Category::withCount('blogs')->get();
        $service_name = Service::take(5)->get();

        return view('blog', compact('blogs', 'recent_blogs', 'search', 'categories', 'category', 'service_name'));
    }
}
