<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

use Advoor\NovaEditorJs\Http\Controllers\EditorJsImageUploadController;
use Advoor\NovaEditorJs\Http\Controllers\EditorJsLinkController;

Route::post('upload/file/{path?}', EditorJsImageUploadController::class . '@file')->name('editor-js-upload-image-by-file');
Route::post('upload/url/{path?}', EditorJsImageUploadController::class . '@url')->name('editor-js-upload-image-by-url');
Route::get('fetch/url', EditorJsLinkController::class . '@fetch')->name('editor-js-fetch-url');
