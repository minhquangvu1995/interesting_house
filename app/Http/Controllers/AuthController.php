<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Socialite, Auth, Redirect, Session, URL;
use App\User;

class AuthController extends Controller
{
    /**
     * Chuyển hướng người dùng sang OAuth Provider.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        if (!Session::has('pre_url')) {
            Session::put('pre_url', URL::previous());
        } else {
            if (URL::previous() != URL::to('login')) Session::put('pre_url', URL::previous());
        }
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Lấy thông tin từ Provider, kiểm tra nếu người dùng đã tồn tại trong CSDL
     * thì đăng nhập, ngược lại nếu chưa thì tạo người dùng mới trong CSDL.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return Redirect::to(Session::get('pre_url'));
    }

    /**
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->where('provider', $provider)->first();
        if ($authUser) {
            return $authUser;
        }

        return User::create([
            'email' => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id,
            'name' => $user->name,
            'avatar' => $user->avatar_original,
            'friend_see' => 1,
            'friend_by_friend_see' => 1,
            'stranger_see' => 1,
            'birthday' => date('Y-m-d')
        ]);
    }

    public function logOut()
    {
        Auth::logout();
        return back();
    }
}
