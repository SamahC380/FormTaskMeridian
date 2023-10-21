<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mark;

class FormController extends Controller
{
    public function storefn(Request $request)
    {

        request()->validate([
            'name'=>'required | min:3 |regex:/^[A-Z ]+$/',
            'gender'=>'required',
            'dob'=>'required',
            'nationality'=>'required',
            'guardian'=>'required',
            'comaddress'=>'required',
            'permaddress'=>'required',
            'email'=>'required | unique:users,email',
            'contact1'=>'required | min:10',
            'contact2'=>'required | min:10',
            'examname'=>'required',
            'board'=>'required',
            'register12'=>'required',
            'yearof12'=>'required',
            'instname'=>'required',
            'state'=>'required',
            'image' => 'required|image|mimes:png,jpg,jpeg |max:2048', 
            'dobpdf' => 'required|mimes:pdf|max:3072', 
            'addresspdf' => 'required|mimes:pdf|max:3072', 
            'exampdf' => 'required|mimes:pdf|max:3072', 
            'fee' => 'required|mimes:pdf|max:3072', 
            'p' => 'required|string',
            'pmax' => 'required|string',
            'phyperc' => 'required|string',
            'c' => 'required|string',
            'cmax' => 'required|string',
            'chemperc' => 'required|string',
            'b' => 'required|string',
            'bmax' => 'required|string',
            'bioperc' => 'required|string',
            'e' => 'required|string',
            'emax' => 'required|string',
            'engperc' => 'required|string',
            'total' => 'required|string',
            'maxtotal' => 'required|string',
            'totalperc' => 'required|string',
            'grand' => 'required|string',
            'grandmax' => 'required|string',
            'grandperc' => 'required|string',
        ]);

        $name = request('name');
        $gender = request('gender');
        $dob = request('dob');
        $religion = request('religion');
        $nationality = request('nationality');
        $guardian = request('guardian');
        $comaddress = request('comaddress');
        $permaddress = request('permaddress');
        $email = request('email');
        $contact1 = request('contact1');
        $contact2 = request('contact2');
        $examname = request('examname');
        $board = request('board');
        $register12 = request('register12');
        $yearof12 = request('yearof12');
        $instname = request('instname');
        $state = request('state');
        $image = request('image');
        $dobpdf = request('dobpdf');
        $addresspdf = request('addresspdf');
        $exampdf = request('exampdf');
        $fee = request('fee');
        $p = $request->input('p');
        $pmax = $request->input('pmax');
        $pPercentage = $request->input('phyperc');
        $c = $request->input('c');
        $cmax = $request->input('cmax');
        $cPercentage = $request->input('chemperc');
        $b = $request->input('b');
        $bmax = $request->input('bmax');
        $bPercentage = $request->input('bioperc');
        $e = $request->input('e');
        $emax = $request->input('emax');
        $ePercentage = $request->input('engperc');
        $total = $request->input('total');
        $maxTotal = $request->input('maxtotal');
        $totalPercentage = $request->input('totalperc');
        $grand = $request->input('grand');
        $grandmax = $request->input('grandmax');
        $grandPercentage = $request->input('grandperc');


        
        if (request()->hasFile('image')) {
            $extension = request('image')->extension();
            $picfilename = 'user_pic' . time() . '.' . $extension;
            request('image')->storeAs('public/images', $picfilename);
        }
        
        if (request()->hasFile('dobpdf')) {
            $extension = request('dobpdf')->extension();
            $dobfilename = 'dob_pdf' . time() . '.' . $extension;
            request('dobpdf')->storeAs('public/pdfs', $dobfilename);
        }
        
        if (request()->hasFile('addresspdf')) {
            $extension = request('addresspdf')->extension();
            $addressfilename = 'address_pdf' . time() . '.' . $extension;
            request('addresspdf')->storeAs('public/addressproof', $addressfilename);
        }
        
        if (request()->hasFile('exampdf')) {
            $extension = request('exampdf')->extension();
            $examfilename = 'exam_pdf' . time() . '.' . $extension;
            request('exampdf')->storeAs('public/examdoc', $examfilename);
        }
        
        if (request()->hasFile('fee')) {
            $extension = request('fee')->extension();
            $feefilename = 'fee_pdf' . time() . '.' . $extension;
            request('fee')->storeAs('public/feedoc', $feefilename);
        }
        
        $user = User::create([
            'name' => $name,
            'gender' => $gender,
            'dob' => $dob,
            'religion'=> $religion,
            'nationality' => $nationality,
            'guardian' => $guardian,
            'comaddress' => $comaddress,
            'permaddress' => $permaddress,
            'email' => $email,
            'contact1' => $contact1,
            'contact2' => $contact2,
            'examname' => $examname,
            'board' => $board,
            'register12' => $register12,
            'yearof12' => $yearof12,
            'instname' => $instname,
            'state' => $state,
            'image' => $picfilename,
            'dobpdf' => $dobfilename,
            'addresspdf' => $addressfilename,
            'exampdf' => $examfilename,
            'fee' => $feefilename,
        ]);
        
        // $userId = session('id');
        Mark::create([
            'p' => $p,
            'pmax' => $pmax,
            'phyperc' => $pPercentage,
            'c' => $c,
            'cmax' => $cmax,
            'chemperc' => $cPercentage,
            'b' => $b,
            'bmax' => $bmax,
            'bioperc' => $bPercentage,
            'e' => $e,
            'emax' => $emax,
            'engperc' => $ePercentage,
            'total' => $total,
            'maxtotal' => $maxTotal,
            'totalperc' => $totalPercentage,
            'grand' => $grand,
            'grandmax' => $grandmax,
            'grandperc' => $grandPercentage,
            'applicant_id'=> $user->id,
        ]);    
        $users = User::all();
        $marks = Mark::all();
        return view('dashboard', compact('users', 'marks','user'));
        // return redirect()->route('dashboard')->with('message', 'Applicant Details Added Successfully');
    
    }
    public function callPagefn($id)
    {
        $users=User::find($id);
        $marks=Mark::where('applicant_id',$users->id)->first();
        
        return view('details',compact('marks','users'));
    }
    

}
