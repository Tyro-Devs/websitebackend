<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\FAQ;
use App\Models\FAQAccordion;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\TeamMember;
use App\Models\Tool;
use App\Models\TopSection;
use App\Models\Type;
use App\Models\WhyUs;
use App\Models\WhyUsAccordion;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $topSection = TopSection::first();
        $types = Type::all();
        $portfolios = Portfolio::all();
        $tools = Tool::all();
        $about = AboutUs::first();
        $why_us = WhyUs::first();
        $why_us_accs = WhyUsAccordion::get();
        $service = Service::first();
        $services = ServiceDetail::get();
        $contact = Contact::first();
        $faq = FAQ::first();
        $faq_accs = FAQAccordion::get();
        $teams = TeamMember::where('is_active','0')->get();
        return view('front.layouts.app', compact('types' ,'portfolios','tools','about','why_us','why_us_accs','service','services','contact','faq', 'faq_accs','teams','topSection'));
    }

    public function portfolio($id){
        $portfolio = Portfolio::where('id', $id)->first();
        return view('front.layouts.portfolio-details', compact('portfolio'));
    }
}
