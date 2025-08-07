<?php

use App\Models\Blog;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    $service = Service::paginate(6);
    $blog = Blog::paginate(6);
    $service_name = Service::take(5)->get();
    return view('welcome', compact('service', 'blog', 'service_name'));
});

Route::get('aboutus', [PageController::class, 'aboutus'])->name('aboutus');
Route::get('service', [PageController::class, 'service'])->name('service');
Route::get('contactus', [PageController::class, 'contactus'])->name('contactus');
Route::get('blog', [PageController::class, 'blog'])->name('blog');

// admilogin

Route::get('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/login', [AuthController::class, 'logindetails'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Admin Routes
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        $categoryCount = Category::count();
        $blogCount = Blog::count();
        $serviceCount = Service::count();
        return view('admin.dashboard', compact('categoryCount', 'blogCount', 'serviceCount'));
    })->name('admin.dashboard');
});

// mail send
Route::post('/send-contact', [ContactController::class, 'send'])->name('contact.send');

// category routes---------
Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
Route::get('/admin/manage_category', [CategoryController::class, 'manage_category'])->name('admin/manage_category');
Route::get('admin/category/manage_category/{id}', [CategoryController::class, 'manage_category']);
Route::post('admin/category/manage_category_process', [CategoryController::class, 'manage_category_process'])->name('category.manage_category_process');
Route::get('admin/category/delete/{id}', [CategoryController::class, 'delete']);
Route::get('admin/category/status/{status}/{id}', [CategoryController::class, 'status']);



// Blogs------------
Route::get('/admin/blog', [BlogController::class, 'index'])->name('admin.blog');
Route::get('/admin/manage_blog/{id?}', [BlogController::class, 'manage_blog'])->name('blog.manage_blog');
Route::post('/admin/manage_blog_process', [BlogController::class, 'manage_blog_process'])->name('blog.manage_blog_process');
Route::get('/admin/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');
Route::get('/{slug}', [BlogController::class, 'blog_details']);


// Faqs------------
Route::get('/admin/faq', [FaqController::class, 'index'])->name('admin.faq');
Route::get('/admin/manage_faq/{id?}', [FaqController::class, 'manage_faq'])->name('faq.manage_faq');
Route::post('/admin/manage_faq_process', [FaqController::class, 'manage_faq_process'])->name('faq.manage_faq_process');
Route::get('/admin/faq/delete/{id}', [FaqController::class, 'delete'])->name('faq.delete');



// service------------
Route::get('/admin/service', [ServiceController::class, 'index'])->name('admin.service');
Route::get('/admin/manage_service/{id?}', [ServiceController::class, 'manage_Service'])->name('sevice.manage_service');
Route::post('/admin/manage_service_process', [ServiceController::class, 'manage_service_process'])->name('service.manage_service_process');
Route::get('/admin/service/delete/{id}', [ServiceController::class, 'delete'])->name('service.delete');
Route::get('/service/{slug}', [ServiceController::class, 'service_details']);
