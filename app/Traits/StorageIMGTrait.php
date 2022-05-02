<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait StorageIMGTrait
{
    public function StorageTraitsUpload($request, $field_name, $folder)
    {
        if($request->hasFile($field_name)){
			$file = $request->file('file');
			
            $file = $request->$field_name;
            $nameOrigin = $file->getClientOriginalName();
            $filename = str_random(20) . auth()->id(). '.' . $file->getClientOriginalExtension();
            $path = $request->file($field_name)->storeAs('public/' . $folder . '/' . auth()->id(), $filename);
          	$file->move(base_path('/public/storage/'. $folder . '/'), $filename);
          	$file_path='https://www.hndev.tech/public/storage/'. $folder . '/'.$filename;
            $data = [
                'file_name' => $nameOrigin,
                'file_path' => $file_path
            ];
            return$data;
        }
        return null;
    }
}
