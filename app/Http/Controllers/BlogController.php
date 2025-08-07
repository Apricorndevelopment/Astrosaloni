<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $data = Blog::paginate(10);
        return view('admin.blog', $data);
    }



    public function manage_blog(Request $request, $id = '')
    {
        $categories = \App\Models\Category::all(); // Fetch all categories

        if ($id > 0) {
            $arr = Blog::where(['id' => $id])->first();
            $blog_name = $arr->blog_name;
            $blog_slug = $arr->blog_slug;
            $blog_type = $arr->blog_type;
            $category_id = $arr->category_id; // Add this line
            $blog_image = $arr->blog_image;
            $blog_shortdesc = $arr->blog_shortdesc;
            $blog_desc = $arr->blog_desc;
            $meta_title = $arr->meta_title;
            $meta_description = $arr->meta_description;
            $post_by = $arr->post_by;
            $keywords = $arr->keywords;
            $geo_placename = $arr->geo_placename;
            $geo_position = $arr->geo_position;
            $geo_region = $arr->geo_region;
            $canonical = $arr->canonical;
            $icbm = $arr->icbm;
            $schema = $arr->schema;
        } else {
            $blog_name = '';
            $blog_slug = '';
            $blog_type = '';
            $category_id = ''; // Add this line
            $blog_image = '';
            $blog_shortdesc = '';
            $blog_desc = '';
            $meta_title = '';
            $meta_description = '';
            $post_by = '';
            $keywords = '';
            $geo_placename = '';
            $geo_position = '';
            $geo_region = '';
            $canonical = '';
            $icbm = '';
            $schema = '';
        }

        return view('admin/manage_blog', compact(
            'blog_name',
            'blog_slug',
            'blog_type',
            'category_id', // Add this line
            'blog_image',
            'blog_shortdesc',
            'blog_desc',
            'post_by',
            'meta_title',
            'meta_description',
            'id',
            'categories',
            'keywords',
            'geo_placename',
            'geo_position',
            'geo_region',
            'canonical',
            'icbm',
            'schema',




        ));
    }


    public function manage_blog_process(Request $request)
    {
        if ($request->post('id') > 0) {
            $image_validation = "mimes:jpeg,jpg,png,tif,avif,webp";
        } else {
            $image_validation = "required|mimes:jpeg,jpg,png,tif,avif,webp";
        }

        $request->validate([
            'blog_name' => 'required',
            'blog_slug' => 'required|unique:blogs,blog_slug,' . $request->post('id'),
            'blog_image' => $image_validation,
        ]);

        if ($request->post('id') > 0) {
            $model = Blog::find($request->post('id'));
            $msg = "Blog updated";
        } else {
            $model = new Blog();
            $msg = "Product inserted";
        }

        // Correct field name for image
        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/blogs'), $image_name);
            $model->blog_image = 'uploads/blogs/' . $image_name;
        }


        $model->blog_name = $request->post('blog_name');
        $model->blog_type = $request->post('blog_type');
        $model->blog_slug = $request->post('blog_slug');
        $model->blog_shortdesc = $request->post('blog_shortdesc');
        $model->blog_desc = $request->post('blog_desc');
        $model->post_by = $request->post('post_by');
        $model->category_id = $request->post('category_id');
        $model->meta_title = $request->post('meta_title');
        $model->meta_description = $request->post('meta_description');
        $model->keywords = $request->post('keywords');
        $model->geo_placename = $request->post('geo_placename');
        $model->geo_position = $request->post('geo_position');
        $model->geo_region = $request->post('geo_region');
        $model->canonical = $request->post('canonical');
        $model->icbm = $request->post('icbm');
        $model->schema = $request->post('schema');


        $model->save();

        session()->flash('message', $msg);

        return redirect('admin/blog');
    }



    public function delete(Request $request, $id)
    {
        $model = Blog::find($id);
        if ($model) {
            $model->delete();
            session()->flash('message', 'Blog deleted');
        } else {
            session()->flash('message', 'Blog not found');
        }
        return redirect('admin/blog');
    }


    public function blog_details($slugg)
    {
        $blog = Blog::where('blog_slug', $slugg)->firstOrFail();
        $faqs = Faq::where('blog_id', $blog->id)->get();
        $recent_blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $related_blogs = Blog::where('blog_type', $blog->blog_type)
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(2)
            ->get();

        $categories = Category::withCount('blogs')->get();

        $meta_title = $blog->meta_title ?? $blog->meta_title;
        $meta_description = $blog->meta_description ?? Str::limit(strip_tags($blog->blog_description), 150);
        $page_title = $blog->meta_title;
        $service_name = Service::take(5)->get();

        return view('blogdetails', [
            'blog' => $blog,
            'recent_blogs' => $recent_blogs,
            'related_blogs' => $related_blogs,
            'categories' => $categories,
            'meta_title' => $meta_title,
            'meta_description' => $meta_description,
            'page_title' => $page_title,
            'service_name' => $service_name,
            'faqs' => $faqs,
            'keywords' => $blog->keywords,
            'geo_placename' => $blog->geo_placename,
            'geo_position' => $blog->geo_position,
            'geo_region' => $blog->geo_region,
            'canonical' => $blog->canonical,
            'icbm' => $blog->icbm,
            'schema' => $blog->schema,

        ]);
    }
}
