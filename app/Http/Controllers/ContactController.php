<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function indexHome(){
    return view('frontend.contact.index');
   }

   public function sendMessage(Request $request){
    $validate   = $request->validate([
        'name'      => 'required',
        'phone'     => 'required',
        'email'     => 'required',
        'message'   => 'required'
    ]);

    Contact::create([
        'name'          => $request->name,
        'phone'         => $request->phone,
        'email'         => $request->email,
        'message'       => $request->message,
    ]);

    return redirect()->route('contact.home')->with('success', 'Terima Kasih Pesan Anda Telah Kami Terima');

   }

   public function index(){
    $contact = Contact::latest()->get();
    return view('backend.contact.index', compact('contact'));
   }

   public function destroy(Contact $contact){
    $contact->delete();
    return redirect()->route('contact.index')->with('success', 'Data Berhasil Di Hapus');
   }
}
