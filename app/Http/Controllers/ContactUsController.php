<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContacUsCreateRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data = ContactUs::all();

        return view('showall', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContacUsCreateRequest $request)
    {

        $data = $request->input();
        $item = (new ContactUs())->create($data);

        if ($item) {
            return redirect()->refresh()->with(['success' => 'Save successful']);
        } else {
            return back()->withErrors(['msg' => 'Error Saving'])
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('ContactUs');
    }








}
