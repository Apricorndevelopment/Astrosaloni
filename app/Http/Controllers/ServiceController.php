<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {

        $data = Service::paginate(10);
        return view('admin.service', $data);
    }



    public function manage_service(Request $request, $id = 0)
    {
        if ($id > 0) {
            $arr = Service::Where(['id' => $id])->get();
            $result['service_type'] = $arr['0']->service_type;
            $result['service_name'] = $arr['0']->service_name;
            $result['service_image'] = $arr['0']->service_image;
            $result['service_slug'] = $arr['0']->service_slug;
            $result['service_shortdesc'] = $arr['0']->service_shortdesc;
            $result['service_desc'] = $arr['0']->service_desc;
            $result['meta_title'] = $arr['0']->meta_title;
            $result['service_icon'] = $arr['0']->service_icon;
            $result['meta_description'] = $arr['0']->meta_description;
            $result['post_by'] = $arr['0']->post_by;
        } else {
            $result['service_type'] = '';
            $result['service_name'] = '';
            $result['service_image'] = '';
            $result['service_slug'] = '';
            $result['service_icon'] = '';
            $result['service_shortdesc'] = '';
            $result['service_desc'] = '';
            $result['meta_title'] = '';
            $result['service_icon'] = '';
            $result['meta_description'] = '';
            $result['post_by'] = '';
        }

        $result['id'] = $id;

        return view('admin/manage_service', $result);
    }


    public function manage_service_process(Request $request)
    {
        if ($request->post('id') > 0) {
            $image_validation = "mimes:jpeg,jpg,png,tif,avif,webp";
        } else {
            $image_validation = "required|mimes:jpeg,jpg,png,tif,avif,webp";
        }

        $request->validate([
            'service_name' => 'required',
            'service_slug' => 'required|unique:blogs,blog_slug,' . $request->post('id'),
            'service_image' => $image_validation,
        ]);

        if ($request->post('id') > 0) {
            $model = Service::find($request->post('id'));
            $msg = "Service updated";
        } else {
            $model = new Service();
            $msg = "Product inserted";
        }

        // Correct field name for image
        if ($request->hasFile('service_image')) {
            $image = $request->file('service_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $image_name);
            $model->service_image = 'uploads/products/' . $image_name;
        }


        $model->service_name = $request->post('service_name');
        $model->service_type = $request->post('service_type');
        $model->service_slug = $request->post('service_slug');
        $model->service_shortdesc = $request->post('service_shortdesc');
        $model->service_desc = $request->post('service_desc');
        $model->service_icon = $request->post('service_icon');
        $model->meta_title = $request->post('meta_title');
        $model->meta_description = $request->post('meta_description');
        $model->post_by = $request->post('post_by');

        $model->save();

        session()->flash('message', $msg);

        return redirect('admin/service');
    }



    public function delete(Request $request, $id)
    {
        $model = Service::find($id);
        if ($model) {
            $model->delete();
            session()->flash('message', 'Service deleted');
        } else {
            session()->flash('message', 'Service not found');
        }
        return redirect('admin/service');
    }

    public function Service_details($slug)
    {
        $service = Service::where('service_slug', $slug)->firstOrFail();

        // Get related services (same category or type)
        $related_services = Service::where('service_type', $service->service_type)
            ->where('id', '!=', $service->id)
            ->take(4)
            ->get();

        // Get other services for sidebar
        $other_services = Service::where('service_type', '!=', $service->service_type)
            ->inRandomOrder()
            ->take(6)
            ->get();
        $meta_title = $service->meta_title ?? $service->meta_title;
        $meta_description = $service->meta_description ?? Str::limit(strip_tags($service->service_description), 150);
        $page_title = $service->meta_title;
        $service_name = Service::take(5)->get();

        return view('servicedetails', compact(
            'service',
            'related_services',
            'other_services',
            'meta_title',
            'meta_description',
            'page_title',
            'service_name'
        ));
    }
}
