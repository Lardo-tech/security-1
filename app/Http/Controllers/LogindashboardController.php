<?php

namespace App\Http\Controllers;

use App\Models\Logindashboard;
use Illuminate\Http\Request;

class LogindashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Logindashboard $logindashboard)
    {
        return view('logindashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logindashboard $logindashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logindashboard $logindashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logindashboard $logindashboard)
    {
        //
    }
}
