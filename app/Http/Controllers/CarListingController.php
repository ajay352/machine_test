<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CarListing;
use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
class CarListingController extends Controller
{
    public function create(){
        return view('create');
    }
    public function view(Request $request){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB for image files
        ]);
        $photoFileName = null;
       if ($request->hasFile('image')) {
            $photoFileName = $request->file('image')->store('photos','public');
        }
        CarListing::create([
          'carmodel' => $request->input('model'),
          'color' => $request->input('color'),
          'mileage'=>$request->input('mileage'),
          'year' => $request->input('year'),
          'photo' => $photoFileName
     ]);
     return redirect()->route('display');
    }
    public function edit($id){
        $record = CarListing::find($id);
        return view('update',compact('record'));
    }
    public function display(){
        $carlisting=CarListing::all();
        return view('view',compact('carlisting'));
    }
    public function delete($id)
    {
        $record = CarListing::find($id);
        if ($record) {
           $record->delete();
          return redirect()->route('display');
        } else {
            return redirect()->route('display')->with('error', 'Record not found');
        }
    }
    public function update($id){
        $record = CarListing::find($id);
        return view('update',compact('record'));
    }
    public function change(Request $request,$id){
        $photoFileName = null;
        if ($request->hasFile('image')) {
            $photoFileName = $request->file('image')->store('photos','public');
        }
         $item = CarListing::find($id);
        $item->carmodel = $request->input('model');  
        $item->color = $request->input('color');
        $item->mileage = $request->input('mileage');
        $item->year = $request->input('year');
        $item->photo = $photoFileName;
        $item->save();
        return redirect()->route('display');
    }
    public function member(){
        $memberview=CarListing::all();
        return view('member',compact('memberview'));
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function register_verification(Request $request){
        Registration::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password'=>$request->input('password'),
        ]);
        $username=$request->input('name');
        session(['username' => $username]);
        return redirect('/customdashboard');
    }
    public function login_verification(Request $request){
        $user = Registration::where('name', $request->name)
        ->where('password', $request->password)
        ->first();
        if ($user) {
            $name = $user->name;
            session(['name' => $name]);
            return redirect('/customdashboard');
        } else {
            // Authentication failed, redirect back with an error message
            return redirect('/login')->with('error', 'Invalid credentials');
        }
    }
    public function customdashboard(){
        $cards=CarListing::all();
        return view('customdash',compact('cards'));
    }
    public function logout(){
        Auth::logout(); 
        session()->flush();
        return redirect('/dashboard');
    }
}
