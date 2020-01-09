<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Product;
use Mail;
use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class userConstroller extends Controller
{
  
 
    public function indexPage()
    {
        return view('welcome');
    }

    public function RegisterUser(Request $request)
    { $viewName="";
      $getUserInfo = Customer:: where('email','=',$request->email)->first();
        if( $getUserInfo = Customer:: where('email','=',$request->email)->first() == null)
        {  
           
            $code="12656";
            Mail :: send(['text'=>'mail'],['tempUser',$request],function($message) use ($request)
                {
                $message->from('ali.monther97@gmail.com','aliMonther');
                $message->to($request->email ,$request->userName)->subject('P-123456');
               
                }
            );
             $viewName ='users.activationUserAccount';
        
        }
        else 
            {
             $viewName = 'users.errorRegister';
            }    
          $arr = Array('userName'=>$request->userName,
          'password'=>$request->password,
          'email'=>$request->email,
          'phoneNumber'=>$request->phoneNumber,
          'gender'=>$request->gender,
          'age'=>$request->age,
          'address'=>$request->address
          
        );
        return view($viewName,$arr);
  
    }


    public function printInfo(REQUEST $request3 )
    {
        dd($request3->all());
    }
    public function userValid(REQUEST $request)
    { 
        $userName = Input::get('userName');
        $password = Input::get('password');
        $email = Input::get('email');
        $phoneNumber = Input::get('phoneNumber');
        $gender = Input::get('gender');
        $age = Input::get('age');
        $address = Input::get('address');
        $viewName="";

        
        if($request->validCode == "123456")
        {
           $tempUser = new Customer;
           $tempUser->userName=$userName;
            $tempUser->password=(string)$password;
            $tempUser->email=(string)$email;
            $tempUser->phoneNumber=(integer)$phoneNumber;
            $tempUser->gender=(integer)$gender;
            $tempUser->age=(integer)$age;
            $tempUser->address=(string)$address;
            $tempUser->numberOfProducts=0;
            $tempUser->state=1;
            $tempUser->save();
            $allProducts = Product ::all();
            $arr = Array('allProducts'=>$allProducts);
         $viewName='users.mainCustomerPage';
          //  addUser($userName,$password,$email,$phoneNumber,$gender,$age,$address);
        }
        else 
        {
            $viewName = "users.registerGuest";
        }
       
        
 return view($viewName,$arr);

    }
  
    public function loginCustomer(REQUEST $request)
    {
       $viewName="";
       $customerCheck = Customer :: where('email','=',$request->email)->first();
       $arr = Array('email'=>$customerCheck->email,'password'=>$customerCheck->password);
      
    if(  $request->email=='ali.monther97@gmail.com' )
    {   
             $viewName='users.mainAdminPage';
    
    }
    else {
    
       if( (( $request->email== $customerCheck->email ) && ( $request->password== $customerCheck->password ) )   )
       {
           $allProducts = Product ::all();
           $arr = Array('allProducts'=>$allProducts);
           $viewName='users.mainCustomerPage';
       }
       else if( ($customerCheck->email != $request->email) || ($customerCheck->password != $request->password) )

       {
         $viewName='users.registerGuest';
       }
    }
    return view($viewName,$arr);
    }
   
 //------------------------------------------
  
    public function showProducts()
    {
        $allProducts = Product ::all();
           $arr = Array('allProducts'=>$allProducts);
           return view('users.adminHome',$arr);

        }

}
 /* public function addUser(string $userName,string $password,string $email,int $phoneNumber,int $gender,int $age,string $address)
    {
        $tempUser = new Customer;
        $tempUser->userName=$userName;
         $tempUser->password=(string)$password;
         $tempUser->email=(string)$email;
         $tempUser->phoneNumber=(integer)$phoneNumber;
         $tempUser->gender=(integer)$gender;
         $tempUser->age=(integer)$age;
         $tempUser->address=(string)$address;
         $tempUser->numberOfProducts=0;
         $tempUser->state=1;
         $tempUser->save();

    }*/