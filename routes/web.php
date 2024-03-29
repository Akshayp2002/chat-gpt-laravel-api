<?php

use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form',[App\Http\Controllers\BooksController::class,'index']);
Route::post('/submit-form',[App\Http\Controllers\BooksController::class,'create']);
 


Route::get('/form2',[App\Http\Controllers\form2::class,'index']);
Route::post('/submit-form2',[App\Http\Controllers\form2::class,'create']);
 
Route::get('/openai',function(){


$result = OpenAI::completions()->create([
    'model' => 'text-davinci-003',
    'prompt' => 'what is laravel',  //prompt that we need to search
    'max_tokens' => 100,  //text limit 
]);

echo $result['choices'][0]['text']; //open ai output.
});