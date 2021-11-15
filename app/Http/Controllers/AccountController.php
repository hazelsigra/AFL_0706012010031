<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = Account::all();

        return view('account', compact('account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createAccount');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Account::create([
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'phone' => $request->phone,
            'nickname' => $request->nickname,
            'gender' => $request->inputGender
        ]);
        return redirect(route('account.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show($accounts)
    {
        $account = Account::where('id', $accounts)->first();

        return view('detailsAccount', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit($accounts)
    {
        $account = Account::findorfail($accounts);
        return view('editAccount', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $accounts)
    {
        $account = Account::findorfail($accounts);
        $account->update([
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'phone' => $request->phone,
            'nickname' => $request->nickname,
            'gender' => $request->inputGender
        ]);
        return redirect(route('account.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy($accounts)
    {
        $account = Account::findorfail($accounts);
        $account->delete();

        return redirect(route('account.index'));
    }
}
