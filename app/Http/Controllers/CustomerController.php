<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use DB,Redirect;
use Illuminate\Routing\Route;

use Illuminate\View\View;
use PhpParser\Node\Stmt\Return_;

class CustomerController extends Controller
{


    public function index()
    {

       //$this->read();
       // $this->update();
        //$this->read();

      //$data = compact($this->read());



        return view("customer");
    }


    public function create(Request $request)
    {
        if ($request->post()) {
            $customer = new Customer();
            $customer->name = $request['name'];
            $customer->email = $request['email'];
            $customer->dob = $request['dob'];
           $request['status'] = "on"? $customer->status =1:$customer->status =0;
           $customer->password = $request['password'];
            $customer->gender = $request['gender'];
            $customer->save();
            redirect(route('customer.signup'));
        }

        return view('signup');
    }

    public function read()
    {
        $customers = Customer::query('name', 'email', 'status', 'gender')

            ->get();
         // ->toArray();

        $data = compact("customers");

        return view("customer")->with($data);
    }

    public function update($id,$data)
    {
        $customer = Customer::find($id);
        $customer->status = $data;
        $customer->update();


    }

    public function login(Request $request)
    {
        if($request->session()->get('user')=="mintu"){
            $customer = Customer::select("name","email",'status')
                ->where("email","=","mintu2@gmail.com")
                ->where('password','=','12345')
                ->get();//->toArray();
           /* echo "Session = ".$request->session()->get('user');

            echo "<pre>";
            print_r($customers);*/
            $data = compact('customer');

            /*echo "<pre>";
            print_r($customer);*/

            return view("login")->with($data);
        }else{
            echo "please Set Session";

        };


    }
    public function login2(Request $request)
    {

        $customer = DB::table('customer')
        ->select('name','email')

            ->where("email","=","mintu2@gmail.com")
            ->where('password','=','12345')
           // ->first();
            ->get();

        $data = compact('customer');

        /*echo "<pre>";
        print_r($customer);*/

       return view("login")->with($data);
    }

    public function setSession(Request $request, string $id){

        if(empty($request->session()->get('user'))){

            $request->session()->put("user",$id);
           // redirect('/login');
            //redirect()->route('login');
        return redirect()->route('login');

        }else{
           // $request->session()->exists('user');

            return redirect()->route('login');
        }


    }
    public function sessionUnset(Request $request){

        $request->session()->forget('user');

     return   redirect()->route('login');


    }

    //
}
