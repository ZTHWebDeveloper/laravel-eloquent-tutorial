<?php

use Illuminate\Support\Facades\Route;
use App\Models\StudentRecord;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/studentAll',function(){
    $student_all = StudentRecord::all();
    foreach($student_all as $student){
        echo $student->name.'<br>';
    }
    
});

Route::get('/studentFindOne/{id}',function($id){
    $student_find_one = StudentRecord::find($id);
    echo $student_find_one;
});

Route::get('/studentWhereOne',function(){
    $student_where_one = StudentRecord::where('name', '=' , 'John')->first();
    echo $student_where_one;
});

Route::get('/rankStudent',function(){
    $rankStudents = StudentRecord::where('student_rank', '>', 5)->get();
    foreach($rankStudents as $rankStudent){
        echo $rankStudent.'<br>';
    }
});

Route::get('/updateStudent',function(){
    $student_rank = StudentRecord::where('name', '=' , 'John')->first();
    $student_rank->student_rank = 15;
    $student_rank->save();
});

Route::get('/deleteStudent',function(){
    $student = StudentRecord::find(1);
    $student->delete();
});

Route::get('/destoryStudent',function(){
    $detroy_student = StudentRecord::destroy(2);
    if($detroy_student){
        echo 'Successfully Destory';
    }else{
        echo 'Error !!';
    }

});

Route::get('/moreThanOneDestory',function(){
    $student_destroy = StudentRecord::destroy(1, 2, 3);
    if($student_destroy){
        echo 'Successfully Destory';
    }else{
        echo 'Error !!';
    }
});

Route::get('/studentWhereDelete',function(){
    $more_than_ten_delete_student =StudentRecord::where('student_rank', '>', 5)->delete();

    if($more_than_ten_delete_student){
        echo 'Successfully Destory';
    }else{
        echo 'Error !!';
    }
});