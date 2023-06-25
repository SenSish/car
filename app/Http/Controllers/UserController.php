<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /* dd($request); */
         if ($request->ajax()) {
         $data = User::where('type','user')->get();
         return DataTables::of($data)
         ->addIndexColumn()
         ->addColumn('action', function ($row) {
         $btn = '<a href="' . route('user.show', [$row->id]) . '" class="dropdown-item" title="view"
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
         $btn = $btn . ' <a href="' . route('user.edit', [$row->id]) . '" title="edit"
             class="dropdown-item" style="display: contents">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-archive font-small-4 mr-50">
                 <polyline points="21 8 21 21 3 21 3 8">
                 </polyline>
                 <rect x="1" y="3" width="22" height="5"></rect>
                 <line x1="10" y1="12" x2="14" y2="12"></line>
             </svg></a>';

         $btn = $btn . '<a href="javascript:void(0)" data-id="' . $row->id . '" title="delete"
             style="display: contents" class="dropdown-item deleteTender"><svg xmlns="http://www.w3.org/2000/svg"
                 width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 font-small-4 mr-50">
                 <polyline points="3 6 5 6 21 6"></polyline>
                 <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                 <line x1="10" y1="11" x2="10" y2="17"></line>
                 <line x1="14" y1="11" x2="14" y2="17"></line>
             </svg></a>';

         return $btn;
         })
         ->rawColumns(['user', 'action'])
         ->make(true);
         }
         return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user.new',[

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
            'firstname'         => ['required', 'string', 'max:255'],
            'lastname'          => ['required', 'string', 'max:255'],
            'phone'             => ['required', 'integer','unique:users,phone'],
            'gender'            => ['required', 'string', 'max:255'],
            'email'             => ['required', 'string', 'email', 'max:255','unique:users,email'],
            'birthday'          => ['required', 'date'],
            'password'          => ['required', 'string', 'min:8', 'confirmed'],
        ]);

         User::create([
            'firstname'          => $request->firstname,
            'lastname'           => $request->lastname,
            'gender'             => $request->gender,
            'phone'              => $request->phone,
            'email'              => $request->email,
            'birthday'           => $request->birthday,
            'type'               =>'user',
            'password'           => Hash::make($request->password),
        ]);
        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=USer::find($id);
        return view('user.show',[
            'user'=>$user,
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
         $region=Region::orderby('id','asc')->get();
         $user=USer::find($id);
         return view('user.edit',[
         'region'=>$region,
         'user'=>$user,
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
        $user=User::find($id);
        /* dd($request); */
        $request->validate([
            'firstname'         => ['required', 'string', 'max:255'],
            'lastname'          => ['required', 'string', 'max:255'],
            'identification_no' => ['required', 'integer', Rule::unique('users')->ignore($user->id)],
            'phone'             => ['required', 'integer', Rule::unique('users')->ignore($user->id)],
            'gender'            => ['required', 'string', 'max:255'],
            'email'             => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'birthday'          => ['required', 'date'],
            'region_id'         => ['required', 'integer'],
            'password'          => ['required', 'string', 'min:8', 'confirmed'],
        ]);




        $user->update([
            'firstname'         => $request->firstname,
            'lastname'          => $request->lastname,
            'identification_no' => $request->identification_no,
            'gender'            => $request->gender,
            'phone'             => $request->phone,
            'email'             => $request->email,
            'birthday'          => $request->birthday,
            'region_id'         => $request->region_id,
            'type'              =>'user',
            'password'          => Hash::make($request->password),
        ]);
        return redirect()->route('user.index');
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
