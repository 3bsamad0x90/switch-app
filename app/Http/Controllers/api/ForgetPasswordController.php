<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mail;

class ForgetPasswordController extends Controller
{
    public function PasswordReset(Request $request)
    {
        $checkCode = rand(100000, 999999);
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
        ]);
        if ($validator->passes()) {
            $CheckEmail = User::where('email',$request->email)->first();
            if ($CheckEmail != '') {
                //send email
                $to      = $request->email;
                $subject = 'تعيين كلمة مرور جديدة';
                $message = 'كود التحقق الخاص بك هو: '.$checkCode.'';
                $headers = array("From: switch",
                    "Reply-To: switch@switch.technomasrsystems.com",
                    "X-Mailer: PHP/" . PHP_VERSION
                );
                $headers = implode("\r\n", $headers);
                $mail = mail($to, $subject, $message, $headers);
                //update the mail check code
                $CheckEmail->update([
                    'checkCode' => $checkCode
                ]);

                return response()->json(['status'=>true,'data' => 'تم إرسال رسالة إلي بريدك الإلكتروني لإستعادة كلمة المرور الخاصة بك'], 200);
            } else {
                return response()->json(['status'=>true,'error'=>'لا يوجد لدينا أى عضويات بالبريد الإلكترونى الذى تم إدخاله'], 401);
            }
        } else {
            return response()->json(['status'=>false,'error'=>$validator->errors()->first()], 401);
        }
    }
    //check code
    public function checkcode(Request $request){
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'checkCode'     => 'required',
        ]);
        if ($validator->passes()) {
            $CheckEmail = User::where('email',$request->email)->first();
            if ($CheckEmail != '') {
                if ($CheckEmail->checkCode == $request->checkCode) {
                    return response()->json(['status'=>true,'data' => 'تم تأكيد الكود بنجاح'], 200);
                } else {
                    return response()->json(['status'=>false,'data'=>'الكود غير صحيح'], 401);
                }
            } else {
                return response()->json(['status'=>true,'data'=>'لا يوجد لدينا أى عضويات بالبريد الإلكترونى الذى تم إدخاله'], 401);
            }
        } else {
            return response()->json(['status'=>false,'data'=>$validator->errors()->first()], 401);
        }
    }
    public function ResetPasswordForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'password'     => 'required',
            'password_confirmation'     => 'required|same:password',
        ]);
        if ($validator->passes()) {
            $CheckEmail = User::where('email',$request->email)->first();
            if ($CheckEmail != '') {
                $CheckEmail->update([
                    'password' => Hash::make($request->password)
                ]);
                return response()->json(['status'=>true,'data' => 'تم تغيير كلمة المرور بنجاح'], 200);
            } else {
                return response()->json(['status'=>true,'data'=>'لا يوجد لدينا أى عضويات بالبريد الإلكترونى الذى تم إدخاله'], 401);
            }
        } else {
            return response()->json(['status'=>false,'data'=>$validator->errors()->first()], 401);
        }
    }
}
