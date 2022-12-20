<?php 

namespace App\Http\Controllers;

use App\Models\Tb_customer;
use Illuminate\Http\Request;

class RegisController extends Controller
{
    function RegisIndex(){
        return view('register');
    }
    function InsertData(Request $request){
        $cust_nama = $request->input('cust_nama');;
        $cust_username = $request->input['cust_username'];
        $cust_tlp = $request->input['cust_tlp'];
        $cust_email = $request->input['cust_email'];
        $cust_pass = $request->input['cust_pass'];

        $isInsertSuccess = Tb_customer::insert(['cust_name'=>$cust_nama,
                                                'cust_username'=>$cust_username,
                                                'cust_tlp'=>$cust_tlp,
                                                'cust_email'=>$cust_email,
                                                'cust_pass'=>$cust_pass
        ]);
        if($isInsertSuccess){
            echo '<h1>Insert Success</h1>';
        }else{
            echo '<h1>Insert Failed</h1>';
        }
    }

}

