<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use App\Models\TestGrupModel;
use App\Models\TestModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

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
        return view('main', ['data' => NewsModel::all()->take(4)]);
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

    public function fill()
    {
        TestModel::query()->truncate();
        TestGrupModel::query()->truncate();
        $name = ['Богдан', 'Влад', 'Руслан', 'Саня', 'Влад'];
        $surname = ['Смирнов', 'Бурцевич', 'Яковенко', 'Гайтанджи', 'Сенив'];
        for ($i = 1; $i < rand(2, 15); $i++) {
            TestGrupModel::insert(['grup' => 'Группа ' .$i]);
            for ($j = 0; $j < rand(2, 40); $j++) {
                TestModel::insert(['nam' => $name[$j % 5],
                    'surname' => $surname[$j % 5],
                    'grup_id' => $i,
                    'phone' => rand(1000000000, 9999999999)
                ]);
            }
        }
        return redirect()->action('App\Http\Controllers\MainController@test');
    }

    public function test()
    {
        return view('test', ['groups'=>TestGrupModel::query()
            ->select(DB::raw('`test_grup_models`.`id` as id, count(`test_models`.`id`) as count, `test_grup_models`.`grup` as nam'))
            ->join('test_models', 'test_grup_models.id', '=', 'test_models.grup_id')
            ->groupBy('test_models.grup_id')->get(), 'stud'=>TestModel::all()]);
    }

    public function deleteGroup($id)
    {
        TestModel::query()->where('grup_id', $id)->delete();
        TestGrupModel::query()->where('id', $id)->delete();
        return redirect()->action('App\Http\Controllers\MainController@test');
    }

    public function deleteStud($id)
    {
        TestModel::query()->where('id', $id)->delete();
        return redirect()->action('App\Http\Controllers\MainController@test');
    }
}
