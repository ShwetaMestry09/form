<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\member;
use Illuminate\Support\Facades\Http;
class Membercontroller extends Controller
{
    //
    function fpage()
    {
        echo"form Submitted";
    }

    function db()
        {
            return member::all();
        }

    
        function addData(Request $req)
    {
        $member= new Member;
        $member->full_name=$req->full_name;
        $member->email=$req->email;
        $member->phone_number=$req->phone_number;
        $member->college_name=$req->college_name;
        $member->address=$req->address;
        $member->skills=$req->skills;
        $member->pc=$req->pc;
        $member->wifi=$req->wifi;
        $member->edu=$req->edu;


        $member->save();
        return redirect('form');
    }

        function http()
        {
            $list= Member::all();
            return view('list',['facts'=>$list]);
        }

        function list()
        {
            return redirect('list');
        }
    
}
