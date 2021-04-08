<?php

namespace app\Controllers;
use app\Models\User;
use app\Router;

class UserController{
        public function logout()
        {
            setcookie('UserId','',time() + (86400 * 30), "/");
            setcookie('Email','',time() + (86400 * 30), "/");
            setcookie('Password','',time() + (86400 * 30), "/");
            setcookie('LastName','',time() + (86400 * 30), "/");
            setcookie('FirstName','',time() + (86400 * 30), "/");
            setcookie('NumberPhone','',time() + (86400 * 30), "/");
            header("location: /products");
        }
        public function login(Router $router)
        {
            $UserData =[
                'Email'=>'',
                'NumberPhone'=>'',
                'Password'=>'',
                'LastName'=>'',
                'FirstName'=>''
            ];
           
            if(isset($_POST['btnlogin']))
            {
                $UserData['Email']=$_POST['Email'];
                $UserData['NumberPhone'] = $_POST['NumberPhone'];
                $UserData['Password']=$_POST['Password'];
                $UserData['LastName']=$_POST['LastName'];
                $UserData['FirstName']=$_POST['FirstName'];
                $user = new User();
                $user->load($UserData);
                
                if(!empty($user->login()))
                {
                    
                    $userLogin=$user->login();
                    $Email_Cookie=$user->Email;
                    $Password_Cookie=$user->Password;
                    $LastName_Cookie=$user->LastName;
                    $FirstName_Cookie=$user->FirstName;
                    $PhoneNumber_Cookie=$user->NumberPhone;
                    $UserId_cookie=$userLogin[0]['UserId'];
                    setcookie('Email',$Email_Cookie,time() + (86400 * 30), "/");
                    setcookie('Password',$Password_Cookie,time() + (86400 * 30), "/");
                    setcookie('LastName',$LastName_Cookie,time() + (86400 * 30), "/");
                    setcookie('FirstName',$FirstName_Cookie,time() + (86400 * 30), "/");
                    setcookie('NumberPhone',$PhoneNumber_Cookie,time() + (86400 * 30), "/");
                    setcookie('UserId',$UserId_cookie,time()+(86400*30),"/");
                    header("location: /products");
                    exit;
                }
            }
            echo $router->RenderView('users/login');
        }
        public function register(Router $router)
        {
            $UserData =[
                'Email'=>'',
                'NumberPhone'=>'',
                'Password'=>'',
                'LastName'=>'',
                'FirstName'=>''
            ];
            if(isset($_POST['btnsubmit']))
            {
                
                $UserData['Email']=$_POST['Email'];
                $UserData['NumberPhone'] = $_POST['NumberPhone'];
                $UserData['Password']=$_POST['Password'];
                $UserData['LastName']=$_POST['LastName'];
                $UserData['FirstName']=$_POST['FirstName'];
                $user = new User();
                $user->load($UserData);
                if(!empty($user->checkRegister()))
                {
                    echo "Email đã tồn tại";
                    exit;
                }
                else{
                    $user->save();
                    header("location: /products");
                    exit;
                }
            }
            echo $router->RenderView('users/register');
        }
    }
?>
