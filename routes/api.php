<?php

use App\Http\Controllers\Api\Teaching\SubjectManagementApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('/v1')->group(function () {
    // Teaching and subject
    Route::prefix('/Teaching-unit')->group(function () {
        //subject
        Route::prefix('/Subject')->group(function () {
            //Get list
            Route::get('/Course', [SubjectManagementApiController::class, 'list_subject']);
            //get one subject
            Route::get('/Course/{subjectId}', [SubjectManagementApiController::class,'show_subject']);
            //store one new subject
            Route::post('/Course', [SubjectManagementApiController::class, 'store_subject']);
            //update one subject
            Route::put('/Course/{subjectId}', [SubjectManagementApiController::class, 'update_subject']);
            //delete one subject
            Route::delete('/Course/{subjectId}', [SubjectManagementApiController::class, 'delete_subject']);
        });
    });
});
