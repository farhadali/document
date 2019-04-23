public function postLogin(Request $request){
        $this->validate($request, [
            'email'           => 'required|max:255|email',
            'password'           => 'required',
        ]);
        $existUser = User::where('is_active', True)->where('email',$request->email)->get();

        if(count($existUser)>0){
          $user = User::where('email',$request->email)->first();
          if($user->role_id==2){
            return back()->with('message','Login failed!You do not have permission to admin login!.');
          }
          if (Auth::attempt(['email'=>$request->email,'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect('admin/home')->with('message','Your password has been updated!');
          }else{
            return back()->with('message','Login failed!Please input valid user.');
          }
        }else{
          return back()->with('message','Login failed!Please input valid user.');
        }

    }

}
