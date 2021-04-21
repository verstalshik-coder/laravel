<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class MainController extends Controller
{
    public function landing()
    {
        session(['prev' => '/']);
        return view('index');
    }

    public function main()
    {
        session(['prev' => '/main']);
        return view('main',['data' => NewsModel::all()->take(4)]);
    }

    public function dpage()
    {
        session(['prev' => '/dpage']);
        return view('download');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function userReg(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:4',
            'login' => 'required|min:4',
            'pas1' => 'required|min:4',
            'pas2' => 'required_with:pas1|same:pas1|min:4'
        ]);

        $name = UserModel::all()->where('name', '=', $request->input('name'));
        $email = UserModel::all()->where('email', '=', $request->input('email'));

        if (count($name) !== 0 | count($email) !== 0) return redirect()->action('App\Http\Controllers\MainController@register');

        $user = new UserModel();
        $user->name = $request->input('name');
        $user->email = $request->input('login');
        $user->pas = $request->input('pas1');

        $user->save();

        Cookie::queue('name', $request->input('name'), 60);

        return redirect()->action('App\Http\Controllers\MainController@main');
    }

    public function userLog(Request $request)
    {
        $valid = $request->validate([
            'login' => 'required|min:4',
            'pas' => 'required|min:4'
        ]);

        $f = UserModel::all()
            ->where('email', '=', $request->input('login'))
            ->where('pas', '=', $request->input('pas'));

        if (count($f) !== 0) {
            Cookie::queue('name', $f->first->toArray()['name'], 60);
            return redirect()->action('App\Http\Controllers\MainController@main');
        } else return redirect()->action('App\Http\Controllers\MainController@login');
    }

    public function exit()
    {
        Cookie::queue(Cookie::forget('name'));

        return redirect()->action('App\Http\Controllers\MainController@' . str_replace('/', '', strval(session('prev'))));
    }

    public function test(Request $request)
    {
//        setcookie('mm','a',time() + 13000, '/');
//        setcookie('mm','mm',[max-])
//        session(['temp'=>'/asdsa']);
//        ''.join(session('prev').replace('',''))
//        return $_COOKIE['mm'];
//        return $_COOKIE;
        $request->session()->flash('status', 'Task was successful!');
        return redirect()->action('App\Http\Controllers\MainController@test1');
    }

    public function test1(Request $request)
    {
        $temp = $request->session()->get('status');
//        $request->session()->forget('status');
        return redirect()->action('App\Http\Controllers\MainController@test2');
    }

    public function test2(Request $request){
        dd($request->session()->get('status'));
    }
}
