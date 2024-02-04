<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }


    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        // Hàm getCredentials() được gọi trên đối tượng $request để trả về thông tin xác thực của yêu cầu đó. 
        // Thông tin xác thực thường bao gồm tên người dùng và mật khẩu được gửi trong tiêu đề Authorization của yêu cầu.
        if(!Auth::validate($credentials)):
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }
    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }

}
