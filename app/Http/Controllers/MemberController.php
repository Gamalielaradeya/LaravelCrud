<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //
    public function index()
    {
        
        return view('member/index', [
            'members' => Member::get(),
        ]);
    }

    public function create()
    {
        return view('member/create');

    }

    public function store(Request $request)
    {
        $member = new Member();

        $member->nama = $request->nama;
        $member->alamat = $request->alamat;
        $member->phone_number = $request->phone_number;

        $member->save();

        return redirect()->route('member/index');
    }

    public function edit($id)
    {

        $member = Member::find($id);
        return view('member/edit',[
            'member' => $member,
        ]);
    }

    public function update(Request $request,$id)

    {
        $member = Member::find($id);

        $member->nama = $request->nama;
        $member->alamat = $request->alamat;
        $member->phone_number = $request->phone_number;

        $member->save();

        return redirect()->route('member/index');
    }
}
