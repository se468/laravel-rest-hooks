<?php
Route::group(['middleware' => ['auth:api'], 'prefix' => 'api'], function () {
    Route::post('hooks', 'se468\RestHooks\Http\Controllers\RestHooksController@subscribe'); //POST /api/hooks - subscribe
    Route::delete('hooks/{id}', 'se468\RestHooks\Http\Controllers\RestHooksController@delete'); //DELETE /api/hooks/:id - delete
});
