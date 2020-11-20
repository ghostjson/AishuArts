<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

if (!function_exists('fileUploader')) {

    /**
     * Store a base64 file to storage
     *
     * @param UploadedFile $file
     * @return string
     */
    function fileUploader(UploadedFile $file): string
    {

        $file_name = uniqid(time() . '_', true) . '.' .$file->extension();

        Storage::disk('local')->putFileAs('public/', $file, $file_name);

        return $file_name;
    }
}
