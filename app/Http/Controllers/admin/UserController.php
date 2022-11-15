<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\UserCreatedNotification;
use App\Models\Speciality;
use App\Models\User;
use Faker\Core\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class UserController extends Controller
{

    /**
     * create : create a new user via form
     *
     * @return void
     */
    public function create()
    {
        $speciality = Speciality::all();
        return view('post-login.admin.profiles.addUser', ['speciality'=>$speciality]);
    }


    /**
     * store : store new user to DB
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $dataOk = $request->validate([
            'name' => 'required|min:2',
            'email' => 'email|required',
            'phone' => "required",
            'address' => 'required',
            'photo' => 'max:10250',
            'speciality_id' => '',

        ]);
    
        $users = $dataOk;
        
        $registration_num = mt_rand(1000, 10000);
        $users['registration_num'] = $registration_num;
        $pass = Str::random(8);
        $users['pass'] = $pass;
        $users['password'] = Hash::make($pass);

        if ($request['admin']) {
            $users['role'] = 'admin';
        } elseif ($request['professor']) {
            $users['role'] = 'professor';
        } elseif ($request['parent']) {
            $users['role'] = 'parent';
        } else {
            $users['role'] = 'student';
        }

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $fileName = "user-" . time() . "." . $file->getClientOriginalExtension();
            $path = $file->storeAs('images/users', $fileName, 'public');
            $users['photo'] = 'storage/' . $path;
        }
        $userCreate = User::create($users);
        
        if ($userCreate) {
            $users['created_at'] = now();
            Mail::to($userCreate->email)->send(new UserCreatedNotification($users));

           // Mail::to($userCreate->email)->send(new UserCreatedNotification($users));
            return redirect()->route('admin.dashboard')->with(["status" => "$userCreate->name created successfully"]);
        } else {
            return back()->with("error", "Failed to create the User")->withInput();
        }
    }
    public function activate($id)
    {
        $user = User::find($id);
        $user->activate = !$user->activate;

        $message = "";
        if ($user['activate']) {
            $user['updated_at'] = now();
            $message = "User status: Active!";
        } else {
            $user['updated_at'] = now();
            $message = "User status: Desactivated";
        }
        if ($user->update()) {
            return redirect()->route('user.profile', ['id' => $user->id])->with(["status" => $message]);
        } else {
            return back()->with('error', ' User Status failed to change')->withInput();
        }
    }
    /**
     * saveEdit: save modifications in myProfile****
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
   
    public function saveEdit(Request $request)
    {
        // dd($request);
        $dataOk = $request->validate([
            'name' => 'min:2',
            'email' => 'email',
            'phone' => "numeric|min:10",
            'address' => 'required',
            'speciality_id'=>'string'
        ]);
        
        $user = Auth::user();
        if($request->name){
        $user->name = $dataOk['name'];
        };
        $user->email = $dataOk['email'];
        $user->phone = $dataOk['phone'];
        $user->address = $dataOk['address'];
        if($request->speciality_id){
        $user->speciality_id = $dataOk['speciality_id'];
        }
        if ($user->update(['field' => 'value'])) {
            return back()->with(["status" => "$user->name updated successfully"]);
            
        } else {
            return back()->with("error", "Failed to update your profile")->withInput();
        }
    }    




    public function saveEditUsersProfile(Request $request, $id)
    {
        // dd($request);
        $dataOk = $request->validate([
            'name' => 'min:2',
            'email' => 'email',
            'phone' => "numeric|min:10",
            'address' => 'string',
            'speciality_id'=>'string'
        ]);
        // dd($dataOk);
        $user = User::findOrFail($id);
        if($request->name){
        $user->name = $dataOk['name'];
        };
        $user->email = $dataOk['email'];
        $user->phone = $dataOk['phone'];
        $user->address = $dataOk['address'];
        if($request->speciality_id){
        $user->speciality_id = $dataOk['speciality_id'];
        }
        if ($user->update(['field' => 'value'])) {
            return back()->with(["status" => "$user->name updated successfully"]);
            
        } else {
            return back()->with("error", "Failed to update your profile")->withInput();
        }
    }    
    /**
     * myProfile: function for avery user to view his/her own profile
     *
     * @return void
     */
    
    public function myProfile($view){
        $user = Auth::user();
        return view($view, ['user'=>$user]);
    }
    
    /**
     * destroy: delete this user's data
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->delete()) {
            return redirect()->route('admin.dashboard')->with(["status" => "$user->name deleted successfully"]);
        } else {
            return back()->with('status', "Oops: failed to delete $user->id ");
        }
    }
    public function searchUser($view)
    {
        if (!($query = null)) {
            $query = request()->input('query');
            $user = User::where('name', 'like', "%$query%")
                ->orWhere('email', 'like', "%$query%")
                ->paginate();

            if (count($user) > 0) {
                return view($view, ['role' => $user]);
            } else {
                return redirect()->back()->with("error", "Oops! No user found")->withInput();
            }
        } else {
            return back();
        }
    }
    /**
     * ADMIN SECTION:
     * showAdmins 
     *
     */
    public function showAdmins()
    {
        $user = DB::table('users')->where('role', 'admin')->orderBy('name', 'asc')->paginate(15);
        return view('post-login.admin.lists.adminsList', ['role' => $user]);
    }
    
    public function userProfile($view, $id)
    {
        $user = User::find($id);
        $specialities = Speciality::all();
        return view($view, ['user' => $user, 'specialities'=>$specialities]);
    }



    /**
     * PROFESSORS SECTION
     * showProfessors
     *
     */
    public function showProfessors()
    {
        $user = DB::table('users')->where('role', 'professor')->orderBy('name', 'asc')->paginate(15);
        return view('post-login.admin.lists.professorsList', ['role' => $user]);
    }


    /**
     * PARENTS SECTION
     * showParents 
     *
     */
    public function showParents()
    {
        $user = DB::table('users')->where('role', 'parent')->orderBy('name', 'asc')->paginate(15);
        return view('post-login.admin.lists.parentsList', ['role' => $user]);
    }


    /**
     * STUDENTS SECTION
     * showStudents 
     *
     */
    public function showStudents()
    {
        $user = User::where('role', 'student')->orderBy('name', 'asc')->paginate(15);
        return view('post-login.admin.lists.studentsList', ['role' => $user]);
    }
}
