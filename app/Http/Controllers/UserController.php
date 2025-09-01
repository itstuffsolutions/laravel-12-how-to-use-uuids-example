<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
 
class UserController extends Controller
{  
 
    public function index()
    {
         $users = User::get();
        return view('post',compact('users'));
    }
       
    public function store(Request $request)
    {       
         
            $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            ]);
 
 
            Post::create([
                'user_id' => $request->user_id, //required
                'title' => $request->title,
                'description' => $request->description,
            ]);
 
            
          return redirect()->back()->withSuccess("Data saved successfully");
        
    }
}