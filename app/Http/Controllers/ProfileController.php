<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

use App\Models\User;

class ProfileController extends Controller
{
    //Profile
    public function index($id)
    {
        $id = ($id == 'me') ? Session::get('user_id') : $id;

        $user = User::find($id);

        //Check Is Exist User
        if (!$user) {
            return redirect()->route('not_found');
        }

        return view('profile.profile', ['user' => $user, 'user_id' => $id]);
    }

    //Profile Setting
    public function setting($id)
    {
        $id = ($id == 'me') ? Session::get('user_id') : $id;

        $user = User::find($id);

        //Check Is Exist User
        if (!$user) {
            return redirect()->route('not_found');
        }

        //check is valid user
        if (Session::get('user_id') != $id) {
            return redirect()->route('forbidden');
        }

        return view('profile.setting', ['user' => $user, 'user_id' => $id]);
    }

    public function profile_update(Request $request, $id)
    {

        $id = ($id == 'me') ? Session::get('user_id') : $id;

        // Input Validation
        $request->validate([
            'name'  => 'required|max:255',
            'email'  => 'required|email:rfc,dns|max:255',
            'phone'  => 'required|max:15|min:11',
        ]);

        //check is Email exist in DB
        if (User::where('user_email', htmlspecialchars($request->email))->where('user_id', '!=', $id)->count() > 0) {
            //Flash Message
            flash_alert(
                __('alert.icon_error'), //Icon
                'Failed', //Alert Message 
                'Email Already Exist' //Sub Alert Message
            );

            return redirect()->back();
        }

        //check is Phone Number exist in DB
        if (User::where('user_phone', htmlspecialchars($request->phone))->where('user_id', '!=', $id)->count() > 0) {
            //Flash Message
            flash_alert(
                __('alert.icon_error'), //Icon
                'Failed', //Alert Message 
                'Phone Number Already Exist' //Sub Alert Message
            );

            return redirect()->back();
        }

        //Update Data
        $data = [
            'user_name' => htmlspecialchars($request->name),
            'user_email' => htmlspecialchars($request->email),
            'user_phone' => htmlspecialchars($request->phone),
        ];
        User::where('user_id', $id)
            ->update($data);

        //Update Session
        $session = [
            'user_name' => htmlspecialchars($request->name),
            'user_email' => htmlspecialchars($request->email),
        ];
        $request->session()->put($session);

        //Update Cookie If Exist
        if (Cookie::get('account') && Cookie::get('access')) {
            Cookie::queue(Cookie::forget('account'));
            Cookie::queue(Cookie::make('account', htmlspecialchars($request->email), 60 * 24));
        }

        //Flash Message
        flash_alert(
            __('alert.icon_success'), //Icon
            'Success', //Alert Message 
            'Profile Updated' //Sub Alert Message
        );

        return redirect()->back();
    }

    public function password_update(Request $request, $id)
    {
        $id = ($id == 'me') ? Session::get('user_id') : $id;

        // Input Validation
        $request->validate([
            'old_password'  => 'required|max:100',
            'new_password'  => 'required|max:100|min:8',
            'confirm_password'  => 'required|max:100|min:8|same:new_password'
        ]);

        $old_password = htmlspecialchars($request->old_password);
        $new_password = htmlspecialchars($request->new_password);

        //Check Old Password
        if (Hash::check($old_password, User::find($id)->user_password)) {
            $data = [
                'user_password' => Hash::make($new_password)
            ];

            //Update Data
            User::where('user_id', $id)
                ->update($data);

            //Flash Message
            flash_alert(
                __('alert.icon_success'), //Icon
                'Success', //Alert Message 
                'Password Changed' //Sub Alert Message
            );

            return redirect()->back();
        } else {

            //Flash Message
            flash_alert(
                __('alert.icon_error'), //Icon
                'Failed', //Alert Message 
                'Old Password Different' //Sub Alert Message
            );

            return redirect()->back();
        }

        //Flash Message
        flash_alert(
            __('alert.icon_error'), //Icon
            'Error', //Alert Message 
            'Something Wrong' //Sub Alert Message
        );

        return redirect()->back();
    }

    public function picture_update(Request $request, $id)
    {
        $id = ($id == 'me') ? Session::get('user_id') : $id;

        // Input Validation
        $request->validate([
            'image'  => 'required|mimetypes:image/png,image/jpeg,image/gif',
        ], [
            'image.mimetypes' => "The image must be a file of type: png, jpeg, jpg, gif."
        ]);

        $file = $request->file('image');
        $destination = "assets/img/profile/";

        $imageOld =  User::where('user_id', $id)->first();
        $image_path = public_path($destination . $imageOld->user_image);

        //Update Data
        $data = [
            'user_image' => $file->hashName(),
        ];
        User::where('user_id', $id)
            ->update($data);

        //Update Session
        $session = [
            'user_image' => $file->hashName(),
        ];
        $request->session()->put($session);

        $file->move($destination, $file->hashName());

        if ($imageOld->user_image != "default.jpg") {
            File::delete($image_path);
        }

        //Flash Message
        flash_alert(
            __('alert.icon_success'), //Icon
            'Success', //Alert Message 
            'Profile Picture Updated' //Sub Alert Message
        );

        return redirect()->back();
    }
}
