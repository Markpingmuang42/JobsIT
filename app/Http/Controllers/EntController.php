<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrepreneur;

class EntController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ents = Entrepreneur::all()->toArray();
        return view('PostCompa.indexPost', compact('ents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PostCompa.entPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'CompanyName' => 'required',
            'Sto_group' => 'required',
            'numberJObs' => 'required',
            'CompanyDetail' => 'required',
            'Textpost' => 'required',
            'property' => 'required',
            'welfare' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'logoCompany' => 'required|image|mimes:jpeg,png,jpg,git|max:2048',

        ]);
        $logoCompany_name = '';
        if ($request->logoCompany) {
            $logoCompany_name = time() . '.' . $request->logoCompany->extension();
            $request->logoCompany->move(public_path('logoCompany'), $logoCompany_name); //upload path
        }


        $data = new Entrepreneur();
        $data->CompanyName = $request->CompanyName;
        $data->Sto_group = $request->Sto_group;
        $data->numberJObs = $request->numberJObs;
        $data->CompanyDetail = $request->CompanyDetail;
        $data->Textpost = $request->Textpost;
        $data->property = $request->property;
        $data->welfare = $request->welfare;
        $data->address = $request->address;
        $data->contact = $request->contact;
        $data->logoCompany = $logoCompany_name;

        $data->save();
        return redirect()->route('PostCompa.index')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $ents = Entrepreneur::find($id);
        // return view('PostCompa.editPostTwo', compact('user', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
