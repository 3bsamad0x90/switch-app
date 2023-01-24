<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\users\CreateUser;
use App\Http\Resources\UserResource;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AuthinticationController extends Controller
{
    //
    public function register(Request $request)
    {
        $lang = $request->header('lang');
        if ($lang == '') {
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        $url = 'https://switch-profile.technomasrsystems.com';
        try {
            //Validated
            $validateUser = Validator::make($request->all(),
            [
                'name' => 'required',
                'familyName' => 'required',
                'job_title' => 'required',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'password' => 'required',
                'device_token' => 'nullable'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            $user = User::create([
                'name' => $request->name,
                'familyName' => $request->familyName,
                'job_title' => $request->job_title,
                'email' => $request->email,
                'device_token' => $request->device_token,
                'phone' => $request->phone,
                'language' => in_array($lang,['ar','en']) ? $lang : 'ar',
                'password' => Hash::make($request->password)
            ]);
            if($user){
                $qrCode = QrCode::format('svg')->size(100)->generate($url.'/'. $user->id, public_path('uploads/qrcodes/user-'.$user->id.'.svg'));
            }
            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken,
                'user' => new UserResource($user),
                'qrCode' => asset('uploads/qrcodes/user-'.$user->id.'.svg'),
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }


    public function login(Request $request)
    {
        $lang = $request->header('lang');
        if ($lang == '') {
            $resArr = [
                'status' => 'faild',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }

        try {
            $validateUser = Validator::make($request->all(),
            [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.',
                ], Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            $user = User::where('email', $request->email)->first();
            $user->update([
                'device_token' => $request->device_token,
                'language' => in_array($lang,['ar','en']) ? $lang : 'ar',
            ]);
            $url = 'https://switch-profile.technomasrsystems.com';
            if(!file_exists(asset('uploads/qrcodes/user-'.$user->id.'.svg'))){
                $qrCode = QrCode::format('svg')->size(100)->generate($url.'/'. $user->id, public_path('uploads/qrcodes/user-'.$user->id.'.svg'));
            }
            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken,
                // 'user_id' => $user->id,
                'user' => new UserResource($user),
                'qrCode' => asset('uploads/qrcodes/user-'.$user->id.'.svg')
            ], Response::HTTP_OK);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'status' => true,
            'message' => 'User Logged In Successfully'
        ], Response::HTTP_OK);
    }

    //change password
    public function changePassword(Request $request)
    {
        $lang = $request->header('lang');
        if ($lang == '') {
            $resArr = [
                'status' => 'faild',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        $request->validate([
            'password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        if (!Hash::check($request->password, auth()->user()->password)) {
            return response()->json([
                'status' => false,
                'message' => trans('api.PasswordDoesNotMatchYourCurrentPassword')
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        // return $request->all();

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return response()->json([
            'status' => true,
            'message' => trans('api.PasswordChangedSuccessfully')
        ], Response::HTTP_OK);
    }
    //delete account
    public function deleteAccount(Request $request){
        $lang = $request->header('lang');
        if ($lang == '') {
            $resArr = [
                'status' => 'faild',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        $user = User::find(auth()->user()->id);
        if($user->role != "1"){
            $user->delete();
            $resArr = [
                'status' => true,
                'message' => trans('api.AccountDeletedSuccessfully'),
            ];
            return response()->json($resArr);
        }else{
            $resArr = [
                'status' => false,
                'message' => trans('api.YouCanNotDeleteThisAccount')
            ];
            return response()->json($resArr);
        }

    }
}
