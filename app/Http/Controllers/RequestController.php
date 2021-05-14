<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BibleStudyRequest;

class RequestController extends Controller
{
  public function index()
  {
      $requests = DB::select('select * from bible_study_requests', [10]);

      return view('bible-study-requests', ['requests' => $requests]);
  }
  public function store(Request $request)
  {
      
      $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'contact' => 'required|max:14',
        'birthdate' => 'required',
        'religious_affiliation' => 'required|max:255',
        'bs_date' => 'required',
        'bs_time' => 'required',
        'bs_location' => 'required|max:255',
      ]);
      $request = new Request;
      $request->name = $request->name;
      $request->email = $request->email; //here
      $request->contact = $request->contact;
      $request->birthdate = $request->birthdate;
      $request->religious_affiliation = $request->religious_affiliation;
      $request->bs_date = $request->bs_date;
      $request->bs_time = $request->bs_time;
      $request->bs_location = $request->bs_location;
      $request->save();
      return view('thank-you')->with('status', 'Your request for a Bible Study schedule has been sent.');
  }
}

public function thank_you()
{
    return view('thank-you');
}