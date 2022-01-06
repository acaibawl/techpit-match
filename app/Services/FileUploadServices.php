<?php

namespace App\Services;

class FileUploadServices
{
  public static function fileUpload($imageFile) {
    $filenameWithExt = $imageFile->getClientOriginalName();
    $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    $extension = $imageFile->getClientOriginalExtension();
    // ファイル名が一意になるように時刻を含める
    $fileNameToStore = $fileName.'_'.time().'.'.$extension;

    $fileData = file_get_contents($imageFile->getRealPath());

    $list = [$extension, $fileNameToStore, $fileData];
    return $list;
  }
}
