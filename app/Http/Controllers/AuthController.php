<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {



        $validated = $request->validate(
            [
                'name' => 'required|max:255',
                'address' => 'required|max:255',
                'email' => 'required|email:rfc,dns|unique:users',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
                'password' => 'required|same:confirm_password|min:8',
                'confirm_password' => 'required'

            ],
            [
                'name.required' => 'حقل الاسم مطلوب',
                'address.required' => 'حقل العنوان مطلوب',
                'email.required' => 'حقل الايميل مطلوب',
                'email.email' => 'تأكد من كتابة الايميل بشكل صحيح',
                'email.unique' => 'غير مسموح بتكرار الايميل',
                'phone.required' => 'حقل التليفون مطلوب',
                'phone.regex' => 'تأكد من رقم التليفون',
                'phone.min' => 'رقم التليفون 11 رقم على الأقل',
                'password.required' => 'حقل كلمة السر مطلوب',
                'password.same' => 'تأكد من مطابقة كلمة السر',
                'confirm_password.required' => 'حقل تأكيد كلمة السر مطلوب',
            ]
        );

        try {

            $user = new User();
            $user->name = $request->name;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            if ($request->role == 1) {
                $user->role = 1;
            } else {
                $user->role = 0;
            }
            $user->save();

            return redirect('/register')->with('success', 'تم الحفظ بنجاح');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return redirect('/register')->with('save_error', 'حدث خطأ اثناء الحفظ');
        }
    }


    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {


        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'حقل الإيميل مطلوب',
            'email.email' => 'تأكد من ادخال ايميل صحيح',
            'password.required' => 'حقل كلمة السر مطلوب',
        ]);


        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (auth()->attempt($credentials)) {
            return redirect()->route('homepage')->with('success', 'تم تسجيل الدخول بنجاح');
        }

        return redirect()->route('login')->with('error', 'تأكد من بيانات الدخول');
    }
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('homepage')->with('success', 'تم تسجيل الخروج بنجاح');
    }
}
