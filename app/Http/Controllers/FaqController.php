<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    public function index()
    {
        $data = Faq::all();
        return view('admin/faq', compact('data'));
    }

    // public function manage_faq(Request $request, $id = '')
    // {
    //     $blogs = \App\Models\Blog::all();

    //     if ($id > 0) {
    //         $arr = Faq::where(['id' => $id])->first();
    //         $question = $arr->question;
    //         $answer = $arr->answer;
    //         $blog_id = $arr->blog_id;
    //     } else {
    //         $question = '';
    //         $answer = '';
    //         $blog_id = '';
    //     }
    //     return view('admin/manage_faq', compact(
    //         'question',
    //         'answer',
    //         'blog_id',
    //         'blogs'
    //     ));
    // }
    public function manage_faq(Request $request, $id = null)
    {
        // Get all blogs to populate the dropdown
        $blogs = \App\Models\Blog::all();

        // Initialize variables
        $faq = null;
        $question = '';
        $answer = '';
        $blog_id = '';

        // If editing an existing FAQ
        if ($id) {
            $faq = \App\Models\Faq::find($id);
            if ($faq) {
                $question = $faq->question;
                $answer = $faq->answer;
                $blog_id = $faq->blog_id;
            }
        }

        return view('admin/manage_faq', [
            'id' => $id,
            'question' => $question,
            'answer' => $answer,
            'blog_id' => $blog_id,
            'blogs' => $blogs
        ]);
    }
    // public function manage_faq_process(Request $request)
    // {
    //     $request->validate([
    //         'question' => 'required|string',
    //         'answer' => 'required|string',

    //     ]);
    //     if ($request->post('id') > 0) {
    //         $model = Faq::find($request->post('id') > 0);
    //         $msg = "FAq Updated Sucessfully";
    //     } else {
    //         $model = new Faq();
    //         $msg = "Product inserted";
    //     }

    //     $model->qestion = $request->post('qestion');
    //     $model->answer = $request->post('answer');
    //     $model->blog_id = $request->post('blog_id');
    //     $model->save();

    //     session()->flash('Message', $msg);
    //     return redirect('admin/faq');
    // }
    public function manage_faq_process(Request $request)
    {
        $faqs = $request->input('faq');

        foreach ($faqs as $faqData) {
            // Validate each FAQ item
            $validator = Validator::make($faqData, [
                'question' => 'required',
                'answer' => 'required',
                'blog_id' => 'required|exists:blogs,id',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            // Create or update FAQ
            Faq::updateOrCreate(
                ['id' => $request->id],
                [
                    'question' => $faqData['question'],
                    'answer' => $faqData['answer'],
                    'blog_id' => $faqData['blog_id'],
                ]
            );
        }

        return redirect('admin/faq')->with('success', 'FAQ saved successfully');
    }

    public function delete(Request $request, $id)
    {
        $model = Faq::find($id);
        if ($model) {
            $model->delete();
            session()->flash('message', 'Faq deleted');
        } else {
            session()->flash('message', 'Faq not found');
        }
        return redirect('admin/faq');
    }
}
