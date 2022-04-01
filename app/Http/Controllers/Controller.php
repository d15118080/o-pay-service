<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\noti;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        $log = new log;
        $ip = $request->server('REMOTE_ADDR');
        $log->User('info', '사용자 메인페이지 방문 ' . $ip);
        $noti_data = noti::orderByDesc('id')->limit(3)->get();

        return view('welcome', ['data' => $noti_data]);
    }

    public function notice(Request $request)
    {
        $log = new log;
        $ip = $request->server('REMOTE_ADDR');
        $log->User('info', '사용자 공지사항 방문 ' . $ip);
        $noti_data = noti::orderByDesc('id')->get();
        return view('notice',['data'=>$noti_data]);
    }


}
