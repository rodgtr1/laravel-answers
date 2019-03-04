<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Mail\ContactForm;

class PageController extends Controller {
    public function about() {
        return "About Us Page";
    }

    public function contact() {
        return view('contact');
    }

    public function sendContact(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10',
        ]);

        Mail::to('admin@example.com')->send(new ContactForm($request));

        return redirect('/');
    }

    public function profile($id){
        //$user = User::findOrFail($id);
        $user = User::with(['questions', 'answers', 'answers.question'])->find($id);
        return view('profile')->with('user', $user);
    }
}

?>