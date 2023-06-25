<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Counter;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
        $data = Subscription::orderby('id','asc')->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('user_name', function($row){
        $name=$row->user_id;
        if($name==null){
        return 'no user found';
        }else{
        $name=$row->User->firstname;
        $name=$name. ' ' . $row->User->lastname;
        return $name;
        }
        })
        ->addColumn('action', function ($row) {
        $btn = '<a href="' . route('subscriptions.show', [$row->id]) . '" class="dropdown-item" title="view"
            style="display: contents">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-file-text font-small-4 mr-50">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
            </svg></a>';
        $btn = $btn . ' <a href="' . route('subscriptions.edit', [$row->id]) . '" title="edit" class="dropdown-item"
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

        ->rawColumns(['invoice','action'])
        ->make(true);
        }
        return view('sub.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::where('type','user')->get();
        $counter=Counter::orderby('id','asc')->get();
        return view('sub.new',[
            'user'=>$user,
            'counter'=>$counter,
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
        /* dd($request); */
        $request->validate([
            'sub_number'    =>  'required|numeric|unique:subscriptions,sub_number,except',
            'sub_address'   =>  'required|string',
            'user_id'       =>  'nullable|exists:users,id',
            'counter_id'    =>  'required|numeric|exists:counters,id|unique:subscriptions,counter_id,except',
        ]);

        Subscription::create([
            'sub_number'    =>$request->sub_number,
            'sub_address'   =>$request->sub_address,
            'user_id'       =>$request->user_id,
            'counter_id'    =>$request->counter_id,
        ]);

        return redirect()->route('subscriptions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sub=Subscription::find($id);
        return view('sub.show',[
            'sub'=>$sub,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::where('type','user')->get();
        $counter=Counter::orderby('id','asc')->get();
        $sub=Subscription::find($id);
        return view('sub.edit',[
        'user'=>$user,
        'counter'=>$counter,
        'sub'=>$sub,
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
        $sub=Subscription::find($id);
        $sub->delete();
    }
}
