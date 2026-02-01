<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('contact.index');
    }

    public function send(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        Contact::create($request->only(['name','email','subject','message']));
        return back()->with('success','Cảm ơn bạn đã liên hệ!');
    }
}
