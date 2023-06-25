<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Region;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /* $data =Region::orderby('id','asc')->get();
        dd($data); */
        /* dd($request); */
        if ($request->ajax()) {
            $data =Region::orderby('id','asc')->get();
            return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('action', function ($row) {
            /* $btn = '<a href="' . route('region.show', [$row->id]) . '" class="dropdown-item" title="view"
                style="display: contents">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-file-text font-small-4 mr-50">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                </svg></a>'; */
            $btn =' <a href="' . route('region.edit', [$row->id]) . '" title="edit" class="dropdown-item"
                style="display: contents">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-archive font-small-4 mr-50">
                    <polyline points="21 8 21 21 3 21 3 8">
                    </polyline>
                    <rect x="1" y="3" width="22" height="5"></rect>
                    <line x1="10" y1="12" x2="14" y2="12"></line>
                </svg></a>';

            $btn = $btn . '<a href="javascript:void(0)" data-id="' . $row->id . '" title="delete" style="display: contents"
                class="dropdown-item deleteTender"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-trash-2 font-small-4 mr-50">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg></a>';

            return $btn;
        })
        ->rawColumns(['region', 'action'])
        ->make(true);

        }
        return view('region.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city=City::orderby('id','asc')->get();

        return view('region.new',[
            'city'=>$city,
        ]);
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
            'name'=>'required',
            'city_id'=>'required',
        ]);

        Region::create([
            'name'=>$request->name,
            'city_id' =>$request->city_id,
        ]);
        return redirect()->route('region.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function show($id)
    {

    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $region=Region::find($id);
        $city=City::orderby('id','asc')->get();
        return view('region.edit',[
            'region'=>$region,
            'city'=>$city

        ]);
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
        $region=Region::find($id);
        $request->validate([
        'name'=>'required',
        'city_id'=>'required',
        ]);

        $region->update([
        'name'=>$request->name,
        'city_id' =>$request->city_id,
        ]);
        return redirect()->route('region.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region=Region::find($id);
        $region -> delete();
    }
}
