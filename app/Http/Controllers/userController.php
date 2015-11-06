<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\Http\Requests;
use Illuminate\http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    /**
     *  
     * Display a listing of resource.
     */
    public function __construct() {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id = '')
    {
        if ($id != '') {
           $user = Users::findOrFail($id);
           //echo '<pre>'; print_r($user); exit;
           //return $user; exit;
           return view('create', compact('user'));
        } else {
            return view('create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    //public function store(UserRequest $request)
    public function store(UserRequest $request)
    {
        $imageName = $user->id .'.'.$request->file('photo')->getClientOriginalExtension();
        $user = new Users(array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'image' => $imageName,
            'role' => $request->input('role')
        ));
        $user->save();
         
        /*DB::table('users')->where('id', $user->id)->update(
         ['image' => $imageName]);*/
        $request->file('photo')->move(
            base_path() . '/public/images/', $imageName
        );
        //$input = $request->all();
        //Users::create($input);

        /*DB::table('users')->insertGetId(
            ['name' => $request->input('name'), 'email' => $request->input('email'), 'password' => bcrypt($request->input('password')), 'role' => $request->input('role')
        ]);*/
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        //dd('show');
        $data = Users::all();
        $user = Auth::user();
        $userId = $user->role;
        //return $data;
        //echo '<pre>'; print_r(compact('data')); exit;
        //$data = DB::table('users')->where('id', '$id'); 
        
        //return view('user', ['lessions' => $data]);
        return view('user', compact('data', 'userId'));
        //return view('user')->with('id', $ids)->with('lessions', $lessions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    //public function update(UserRequest $request, $id)
    public function update(UserRequest $request, $id)
    {   //exit('call');
        $user = Users::findOrFail($id);
        //return $user; exit;
        //$user->update($request->all());
        if ($request->file('photo')) {
            //remove old image
            unlink(base_path() . '/public/images/'. $user->image);
            
            $imageName = $user->id .'.'.$request->file('photo')->getClientOriginalExtension();
            DB::table('users')->where('id', $id)->update(
                ['name' => $request['name'], 'email' => $request['email'], 'image' => $imageName, 'role' => $request['role']
            ]);
            
            //upload new photo
            $request->file('photo')->move(
                base_path() . '/public/images/', $imageName
            );
        } else {
            DB::table('users')->where('id', $id)->update(
                ['name' => $request['name'], 'email' => $request['email'], 'role' => $request['role']
            ]);
        }
        
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    { //echo $id; exit;
        $user = Users::findOrFail($id)->delete();
        
        return redirect('user');
    }
}
