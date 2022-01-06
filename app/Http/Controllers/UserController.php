<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;

use App\Services\CheckExtensionServices;
use App\Services\FileUploadServices;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findorFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findorFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findorFail($id);

        if(!is_null($request['img_name'])){
            $lit = FileUploadServices::fileUpload($imageFile);
            list($extension, $fileNmaeToStore, $fileData) = $list;

            $data_url = CheckExtensionServices::checkExtension($fileData, $extension);
            $image = Image::make($data_url);
            $image->resize(400, 400)->save(storage_path() . '/app/public/images' . $fileNmaeToStore);

            $user->img_name = $fileNmaeToStore;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->sex = $request->sex;
        $user->self_introduction = $request->self_introduction;

        $user->save();

        return redirect('home');
    }
}
