<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Kreait\Firebase\Auth\SignInResult\SignInResult;
use Session;

use Illuminate\Http\Request;

class UserController extends Controller
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
    public function profile()
    {   
        $hide_icon_up = true;
        $uid = Session::get('uid');
        $profile = UserData::getUserProfile($uid);

        $body_class = "certificates page body_filled theme_skin_less article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide preloader wpb-js-composer sc_responsive";
        return view('profile', compact(
            'body_class', 'hide_icon_up', 'profile'
        ));

    }
}
