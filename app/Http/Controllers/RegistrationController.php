<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regs = Registration::orderBy('id', 'DESC')->get();
        return Inertia::render('Dashboard', compact('regs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegistrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistrationRequest $request)
    {
        if ($request->file('profile_pic') != null and $request->file('profile_pic') != '') {
            $profile_pic_url = '/storage/' . $request->file('profile_pic')->store('files', 'public');
        } else {
            return false;
        }
        if ($request->file('cv') != null and $request->file('cv') != '') {
            $cv_url = '/storage/' . $request->file('cv')->store('files', 'public');
        } else {
            return false;
        }
        if ($request->file('examples') != null and $request->file('examples') != '') {
            $examples_url = '/storage/' . $request->file('examples')->store('files', 'public');
        } else {
            $examples_url = null;
        }

        $data = request()->all();
        $data['examples'] = $examples_url;
        $data['cv'] = $cv_url;
        $data['profile_pic'] = $profile_pic_url;

        $reg = Registration::create($data);

        return Redirect::route('done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        $reg = $registration;
        return Inertia::render('Reg', compact('reg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistrationRequest  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
