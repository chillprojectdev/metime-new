<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminTreatments;

class AdminTreatmentsController extends Controller
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
        return view('admin.treatments');
    }

    public function createTreatment(Request $request) {
        // $name = isset($_GET['name']) ? strval($_GET['name']) : "";
        // $description = isset($_GET['description']) ? strval($_GET['description']) : "";
        // $price = isset($_GET['price']) ? intval($_GET['price']) : "";
        // $time = isset($_GET['time']) ? intval($_GET['time']) : "";
        // $img = isset($_GET['treatment_img']) ? $_GET['treatment_img'] : null;

        // var_dump($name);
        return $request['name'];

        // $new_key = "";

        // $key = AdminTreatments::getKeyTreatment();
        // if ($key != 0) {
        //     $key_year = (int)substr($key, 2, 2);
        //     $key_no = (int)substr($key, 4, 4);
        //     $new_key = "";
        //     if ($key_year == date("y")) {
        //         $new_index = "";
        //         for ($i = 0; $i < (4-strlen($key_no)); $i++) {
        //             if ($i == ((4-strlen($key_no)))-1 ) {
        //                 $new_index .= ($key_no+1);
        //             } else {
        //                 $new_index .= 0;
        //             }
        //         }
        //         $new_key = "MT".$key_year.$new_index;
        //     } else {
        //         $new_key = "MT".date("y")."0001";
        //     }
        // } else {
        //     $new_key = "MT".date("y")."0001";
        // }

        // $data['name'] = $name;
        // $data['description'] = $description;
        // $data['price'] = $price;
        // $data['time'] = $time;
        // $data['img'] = $img;

        // $save = AdminTreatments::createTreatment($data, $new_key);
        // return response()->json([
        //     'success'=> $save['val'],
        //     'message' => $save['message']
        // ]);
    }

    public function updateTreatment() {
        $name = isset($_POST['name']) ? strval($_POST['name']) : "";
        $description = isset($_POST['description']) ? strval($_POST['description']) : "";
        $price = isset($_POST['price']) ? intval($_POST['price']) : "";
        $time = isset($_POST['time']) ? intval($_POST['time']) : "";
        $uid = isset($_POST['uid']) ? strval($_POST['uid']) : "";

        $data['name'] = $name;
        $data['description'] = $description;
        $data['price'] = $price;
        $data['time'] = $time;
        $data['uid'] = $uid;

        $save = AdminTreatments::updateTreatment($data);
        return response()->json([
            'success'=> $save['val'],
            'message' => $save['message']
        ]);
    }

    public function getKey() {
        $key = AdminTreatments::getKeyTreatment();
        var_dump($key);
    }

    public function deleteTreatment() {
        $uid = isset($_POST['uid']) ? strval($_POST['uid']) : "";

        $data['uid'] = $uid;

        $save = AdminTreatments::deleteTreatment($data);
        return response()->json([
            'success'=> $save['val'],
            'message' => $save['message']
        ]);
    }

    
}