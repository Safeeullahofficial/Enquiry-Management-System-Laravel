<?php

namespace App\Http\Controllers;

use App\Models\Enquiryform;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        // return dd($request->all());

        Enquiryform::create($request->all());
        // return "Enquiry has been submitted";
        return redirect('/')->with("success", "Enquiry has been submitted");
    }
}
