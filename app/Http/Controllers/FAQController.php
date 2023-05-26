<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function show(Faq $faq) {

        return view('faqs.show', ['faq' => $faq]);
    }

    public function index(){
        $faqs = Faq::latest()->get();

        return view('faqs.index', ['faqs'=>$faqs]);
    }

    public function create(){
       return view('faqs.create');
    }

    public function store(Request $request){

        Faq::create($this->validateFaq($request));

        return redirect('/faqs');
    }

    public function edit(Faq $faq) {

        return view('faqs.edit', ['faq' => $faq]);
    }

    public function update(Request $request, Faq $faq){

        $faq->update($this->validateFaq($request));

        return redirect('/faqs/' . $faq->id);
    }

    public function destroy(Faq $faq){

        $faq->delete();

        return redirect('/faqs');
    }

    protected function validateFaq(){
        return request()->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => 'required'
        ]);
    }
}
