<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $body_class = "home page body_filled article_style_stretch scheme_original preloader top_panel_above sidebar_hide sidebar_outer_hide sc_responsive";

        return view('treatment', compact('body_class'));
    }

    public function bookTreatment() {
        $body_class = "single single-product woocommerce woocommerce-page body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide preloader wpb-js-composer sc_responsive";   
        return view('book_treatment_new', compact('body_class'));
    }
}
