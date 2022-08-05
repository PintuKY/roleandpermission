<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Http\Requests\StoreCustomerRequest;

class CustomerController extends Controller
{

    public function index()
    {

        $customer_list = Customers::paginate(1);
        return view('/customer',compact('customer_list') );
    }

    public function CustomerForm()
    {

        return view('/add_customer');
    }

    public function AddCustomer(StoreCustomerRequest $request)
    {        

       // Customers::create($request->only("first_name", "last_name", "phone","address1","address2","city","landmakr","post_office","pincode","country","state"));

        $data= new Customers();
        $data->first_name = $request->input('first_name');
        $data->last_name  = $request->input('last_name');
        $data->phone      = $request->input('phone');
        $data->address1   = $request->input('address1');
        $data->address2   = $request->input('address2');
        $data->city       = $request->input('city');
        $data->landmakr   = $request->input('landmakr');
        $data->post_office= $request->input('post_office');
        $data->pincode    = $request->input('pincode');
        $data->country    = $request->input('country');
        $data->state      = $request->input('state');
        $data->save();
        return redirect()->back()->with('status', 'Customer Add.! ');
    }





    public function Edit($id){

        //$data= Customers::find($id);
        $data = Customers::where("id", $id)->first();
        return view('/customer_edit',['data'=>$data]);
    }

    /**
     * 
     * 
     * 
     */
    public function Update(Request $request ,$customer_id){

        $data = Customers::where("id", $customer_id)->first();
        $data->first_name=$request->input('edit_first_name');
        $data->last_name=$request->input('edit_last_name');
        $data->phone=$request->input('edit_phone');
        $data->address1=$request->input('edit_address1');
        $data->address2=$request->input('edit_address2');
        $data->city=$request->input('edit_city');
        $data->landmakr=$request->input('edit_landmakr');
        $data->post_office=$request->input('edit_post_office');
        $data->pincode=$request->input('edit_pincode');
        $data->country=$request->input('edit_country');
        $data->state=$request->input('edit_state');
        $data->update();
        return redirect('/customers');
    }
    public function View($customer_id){

        $data= Customers::find($customer_id);
    //  $data = Customers::where("id", $id)->first();
        return view('/customerview',['data'=>$data]);
    
    }
    public function Delete($customer_id)
    {
        $customer = Customers::find($customer_id);
        $customer->delete();
        return redirect()->back()->with('delete', 'Customer Deleted.! ');
    }
}
