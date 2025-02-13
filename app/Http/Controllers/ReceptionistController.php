<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\User;
use App\Models\SubDistrict;
use App\Models\Village;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
    public function login() {
        return view( 'receptionist.login',['title' => 'Login Form']);
    }

    public function addReceptionist() {
        return view( 'receptionist.form',['title' => 'Add Receptionist','username' => Auth::user()->username,'provinces' => Province::all(),'districts' => District::all(),'sub_districts' => SubDistrict::all(),'villages' => Village::all()]);
    }

    public function add(Request $request) {
        $receptionist = new User();
        $receptionist->username = $request->username;
        $receptionist->password = $request->password;
        $receptionist->role_id = '2';
        $receptionist->province_code = $request->province;
        $receptionist->district_code = $request->district;
        $receptionist->sub_district_code = $request->sub_district;
        $receptionist->village_code = $request->village;
        $receptionist->photo = $request->file('receptionist_photo')->store('receptionist_photo');
        $receptionist->save();

        return redirect()->route('admin.receptionists')->with('success','Receptionist added successfully');
    }

    public function delete($id) {
        User::find($id)->delete();
        return redirect()->route('admin.receptionists')->with('success','Receptionist deleted successfully');
    }
}
