<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Broadcast;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BroadcastController extends Controller
{
    public function myList(){
    	return view('index');
    }
    public function register(){
        return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }
    public function saveInfo(Request $request){
        $program = $request->program;
        $country = $request->country;
        $channel = $request->channel;
        $day = $request->day;
        $time = $request->time;

        $broadcasts = new Broadcast;
        $broadcasts->program = $program;
        $broadcasts->country = $country;
        $broadcasts->channel = $channel;
        $broadcasts->day = $day;
        $broadcasts->time = $time;  
        $broadcasts->save();

        return view('done', [
            'program' => $program,
            'country' => $country,
            'channel' => $channel,
            'day' => $day,
            'time' => $time
        ]);

        $this->validate($request,[
            'program' => 'required|100',
            'country' => 'required|100',
            'channel' => 'required|100',
            'day' => 'required|100',
            'time' => 'required|100'
            ]);
    }
    public function showSchedule() {
        $users = Broadcast::orderBy('id')->get();
        \Session::flash('flash_message2','The Schedule has been created!'); 
        return view('schedule',[
            'users' => $users]);


    }
    public function forGuest(){
        $users = Broadcast::orderBy('id')->get();
        return view('guest',[
            'users' => $users]);
    }

     public function delete($id){
        $user = Broadcast::find( $id );
        $user ->delete();  
        \Session::flash('flash_message1','The Schedule has been deleted!');
        return redirect('/show-schedule');
    }

    public function showEdit(Request $request){
        return view('update', [
        'id' => $request ->id,
        'program' => $request ->program,
        'country' => $request ->country,
        'channel' => $request ->channel,
        'day' => $request ->day,
        'time' => $request ->time
        ]);
    }
    public function showUpdate(Request $request, $id){
        $broadcast = Broadcast::find($id);
        $broadcast->program = $request->program;
        $broadcast->country = $request->country;
        $broadcast->channel = $request->channel;
        $broadcast->day = $request ->day;
        $broadcast->time = $request ->time;
        $broadcast->save();

        \Session::flash('flash_message','The Schedule has been updated!');
        return redirect('/show-schedule');
    }
    // public function __construct(){
    //     $this->middleware('auth',[''=>'myList']);
    // }

}
