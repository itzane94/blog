<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.home');
    }
    public function welcome(){
        return view('dashboard.welcome');
    }
    public function square(){
        $redis = Redis::connection();
        $res = $redis->setex('library8', 1000, 'predis');
        return response()->json($redis);
    }
}
