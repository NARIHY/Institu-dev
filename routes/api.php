<?php

use App\Http\Controllers\Api\Teaching\Period\PeriodManagementApiController;
use App\Http\Controllers\Api\Teaching\SubjectManagementApiController;
use App\Http\Controllers\Api\Teaching\Training\TrainingApiController;
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
        //Periods Management
        Route::prefix('/Periods-Management')->group(function () {
            //Get list
            Route::get('/', [PeriodManagementApiController::class, 'lists_periods']);
            // Show one periods
            Route::get('/Show/{periodId}', [PeriodManagementApiController::class,'show_periods']);
            // Store one periods
            Route::post('/', [PeriodManagementApiController::class,'store_periods']);
            //Update one periods
            Route::put('/Modification/{periodId}', [PeriodManagementApiController::class,'update_periods']);
            //delete one period
            Route::delete('/Remove/{periodId}', [PeriodManagementApiController::class,'delete_periods']);
        });
        //Training Ressource
        Route::prefix('/Training-Management')->group(function () {
            //Get all list
            Route::get('/',[TrainingApiController::class,'list_training']);
            //show one training
            Route::get('/{trainingId}',[TrainingApiController::class,'show_training']);
            // store one training
            Route::post('/',[TrainingApiController::class,'store_training']);
            //update one training
            Route::put('/{trainingId}',[TrainingApiController::class,'update_training']);
            //removed one training
            Route::delete('/{trainingId}',[TrainingApiController::class,'delete_training']);
        });
    });
});
