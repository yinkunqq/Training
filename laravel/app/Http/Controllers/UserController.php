<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
   public function show(Request $request){

     // return view('user.profile', ['user' => User::findOrFail($id)]);

     // $bool=DB::insert('insert into user (uname,upass,email) values (?, ?, ?)',['1','Laravel','laravel@test.com']);

     // var_dump($bool);

     $request->session()->put('key', 'val');

     dd($request->session()->get('key'));

     die;

   	 //return View::first(['layouts.app', 'user.profile']);

   	 //return view('layouts.app');
   }

   public function test(Request $request){

       if ($request->hasFile('photo')) {
         
          $file = $request->file('photo');

          $extension = $file->extension();

          $store_result = $file->storeAs('photo', 'test.jpg');

          // $output = [

          //   'extension' => $extension,
          //   'store_result' => $store_result
          // ];
          //print_r($output);exit();

          print_r($store_result); 
       }

       // echo '滚！';
      
      // $validatedData = $request->validate([

      //    'title' => 'required|max:255',
      // ]);

      
   }

//    public function upload(Request $request){

//     	//接收表单提交的文件，file为表单的name
// 		$file=$request->file('file');

//         //判断是否为合法文件
// 		if($file->isValid ()){

//             //通过laravel自带的store方法进行文件的上传，其中第一个参数表示上传到哪个
// //文件夹下，第二个参数为用哪个磁盘，也就是框架下面的filesystem.php里面的配置

// 			$path=$file->store (date ('ymd'),'upload');

// 			return ['file' => asset('uploadImages/'.$path), 'code' => 0];
// 		}else{
// 			return ['message' => '上传失败', 'code' => 403];
// 		}
// 	}
}
