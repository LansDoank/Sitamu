<?php

namespace App\Http\Controllers;

use App\Models\VisitType;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{

    public function form()
    {
        return view('user.form', ['title' => 'Formulir Bertamu', 'visitTypes' => VisitType::all()]);
    }

    public function show($code)
    {
        // $id = $code;
        $code = str_split($code);
        $provinceCode = $code[0] . $code[1];
        $districtCode = $code[2] . $code[3];
        $subDistrictCode = $code[4] . $code[5];
        $villageCode = $code[6] . $code[7] . $code[8] . $code[9];
        $village = "$code[0]$code[1]$code[2]$code[3]$code[4]$code[5]$code[6]$code[7]$code[8]$code[9]";

        return view('user.form', [
            // 'id' => $id,
            'title' => 'Visitor Form',
            'visit' => VisitType::where('village_code', $village)->first(),
            ]);
    }

    public function addVisitor(Request $request)
    {
        // $request->validate([
        //     'fullname' => 'required',
        //     'email' => 'required',
        //     'telephone' => 'required',
        //     'address' => 'required',
        //     'check_in' => 'required',
        //     'check_out' => 'required',
        //     'purpose' => 'required',
        //     'person' => 'required',
        //     'room' => 'required',
        //     'status' => 'required'
        // ]);

        $newVisitor = new Visitor();
        $newVisitor->fullname = $request->fullname;
        $newVisitor->institution = $request->institution;
        $newVisitor->address = $request->province . " " . $request->district . " " . $request->sub_district .  " " . $request->village;
        $newVisitor->check_in = $request->check_in;
        $newVisitor->check_out = $request->check_out;
        $newVisitor->telephone = $request->telephone;
        $newVisitor->visitor_photo = $request->file('visitor_photo')->store('user_photo');
        $newVisitor->visit_type_id = $request->visit_type;
        $newVisitor->objective = $request->objective;
        $newVisitor->i_n_i = $request->i_n_i;
        $newVisitor->province_code = $request->province_code;
        $newVisitor->district_code = $request->district_code;
        $newVisitor->subdistrict_code = $request->sub_district_code;
        $newVisitor->village_code = $request->village_code;
        $newVisitor->save();


        return redirect()->route('user.index')->with('visitor_success', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        Visitor::find($id)->delete();
        return redirect()->route('admin.visitors')->with('visitor_delete', 'Data berhasil dihapus');
    }
}
