<?php

use App\Custom\CustomResponse;
use App\Http\Controllers\BayiteController;
use App\Http\Controllers\KhassidaController;
use App\Http\Controllers\LanguesController;
use App\Mail\SendContactEmailMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('khassidas', KhassidaController::class);

Route::apiResource('bayites', BayiteController::class);

Route::apiResource('langues', LanguesController::class);

Route::post('contact/sendMessage', function (Request $request) {
    $validators = Validator::make($request->all(), [
        'name' => 'required',
        'objet' => 'required',
        'message' => 'required',
        'email' => 'required'
    ]);
    if ($validators->fails()) {
        return CustomResponse::buildValidationErrorResponse($validators->errors());
    }
    try {
        $name = $request->name;
        $objet = $request->objet;
        $email = $request->email;
        $message = $request->message;
        Mail::to('cheikhgueye000@gmail.com')->send(new SendContactEmailMessage($objet, $name, $email, $message));
    } catch (\Throwable $th) {
        throw $th;
        return CustomResponse::buildErrorResponse("Une erreur est survenue lors de l'envoi...");
    }
    return CustomResponse::buildSuccessResponse("Message envoyé avec succès!");
})->name('contact/sendMessage');
