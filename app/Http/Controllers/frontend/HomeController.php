<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\all\GetAPIService;
use App\Services\all\ListPostService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $getAPI = new GetAPIService();
        $this->darkskyAPI = $getAPI->getAPIDarkSky();
    }

    public function index()
    {
        // Public Services
        $listpost     = new ListPostService;
        $viewListPost = $listpost->listpost();

        return view('frontend.pages.home', [
            'title'     => TITLE_FRONTEND_INDEX,

            'darkskyAPI' => $this->darkskyAPI,

            'listpost'  => $viewListPost,
        ]);
    }

    public function about()
    {
        return view('frontend.pages.about', [
            'title' => TITLE_FRONTEND_INDEX,

            'darkskyAPI' => $this->darkskyAPI,
        ]);
    }

    public function contact()
    {
        return view('frontend.pages.contact', [
            'title' => TITLE_FRONTEND_INDEX,

            'darkskyAPI' => $this->darkskyAPI,
        ]);
    }
}
