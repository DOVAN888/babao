<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
   
//     return view('home');
// });
// Route::get('/unicode', function () {
   
//     return view('home');
// });
// Route::get('/sanpham', function () {
   
//     return view('product');
//     // goi thang product khong thiong qua cotroller 
//     // ma goi truc tiep tu view
// });
// Route::get('/unicode', function () {
//    $user = new User();
//    dd($user);
    
// });
// neu cung phuong tuc no se doc tu tren xuong duoi

// Route::get('/', function () {
//     return  'Home Pade';
// });



// Route::get('/unicode', function () {
       
//       return view('form');
//         //phuong thuc post phai tao form thi moi co tac dung
//         });

//         Route::post('/unicode', function () {
//             return  'day la phuong thuc post';
//         });
//         Route::put('/unicode', function () {
//             return  'day la phuong thuc put';
//         });
//         Route::delete('/unicode', function () {
//             return  'day la phuong thuc delete';
//         });
//          Route::patch('/unicode', function () {
//             return  'day la phuong thuc patch';
//         });
// Route::match(['get','post'],'unicod',function(){
//     return $_SERVER['REQUEST_MET{HOD'];
// });
// Route::any('unicode',fuction(){
//     $request = new Request();
//     return $request->method();

// });
// Route::get('show_form', function () {
//                return  view('form');
//            });





// Route:: view('show-form','form');
// //cai nay viet tat chi dung cho get va post thoi phuong thuc khac khong dung duoc

// Route::prefix('admin')->group (function(){

//     Route::get('tintuc/{slug}-{id}.html',function($maso,$chuoi){
//        $content = 'phuong thuc get cua path/uicode';
//        $content.='id='.$maso.'</br>';
//        $content.='chuoi='.$chuoi;
//        return $content;
//     });

//     Route::get('show_form',function(){
//         return view('form');
//     });
// });
// Route::prefix('admin')->group (function(){

//     Route::get('tintuc/{id?}/{slug?}',function($maso =null,$slug=null){
//        $content = 'phuong thuc get cua path/uicode';
//        $content.='id='.$maso.'</br>';
//        $content.='chuoi='.$slug;
//        return $content;
//        // khong rang buoc thi them dau hoi vao  va cho no bang null
//     });

//     Route::get('show_form',function(){
//         return view('form');
//     });
// });

// Route::prefix('admin')->group (function(){

    // Route::get('tintuc/{slug-{id}.html}',function($slug =null,$id=null){
    //    $content = 'phuong thuc get cua path/uicode';
    //    $content.='id='.$id.'</br>';
    //    $content.='chuoi='.$slug;
    //    return $content;
    //    // khong rang buoc thi them dau hoi vao  va cho no bang null
    // })->where('id','0-9 +')->where('slug','.+');

        // canh 2
    // ->where
    //     'slug'=>'[a-z-]+',
    //     'id'=>'[0-9]+'

    // ]
    Route::get('/','App\Http\Controllers\HomeController@index')->name('home');
     
Route::prefix('admin')->group(function(){
    Route::get('tintuc/{id?}/{slug?}.html}',function($id =null,$slug=null){
           $content = 'phuong thuc get cua path/uicode voi tham so';
           $content.='id='.$id.'</br>';
           $content.='chuoi='.$slug;
           return $content;
           // khong rang buoc thi them dau hoi vao  va cho no bang null
        })->where('id','\d+')->where('slug','.+')->name('admin.tintuc');
    


    Route::get('show-form',function(){
        return view('form');
    })->name('admin.show-form');

    Route::prefix('products')->middleware('Checkpermission')->group (function(){
        Route::get('/', function(){
            return 'danh sach san pham';
    });
    Route::get('/',function(){
        return 'danh sach san pham';
    }) ->name('admin.product.add');
    Route::get('edit',function(){
        return 'sua san pham ';
    }) ;
    Route::get('delete',function(){
        return 'xoa san pham';
    }) ;
});
});
