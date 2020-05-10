<?php

namespace App\Http\Controllers;
use App\User;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class MessengerController extends Controller
{
    public function index()
    {
        $threads = Thread::forUserWithNewMessages(Auth::id())->latest('updated_at')->get();
        return view('backend.messages', compact('threads'));
    }

    public function store(Request $request)
    {
        if(Auth::guest()){
            return redirect(route('login'))->with(['loginMessage' => 'Please Login to send Message.' ]);
        }

        $thread = Thread::create([
            'subject' => $request->subject,
        ]);

        // Message
        Message::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'body' => $request->body,
        ]);

        // Sender
        Participant::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),

        ]);

        $thread->addParticipant($request->agent_id);


        return back()->with('sendmessage', 'Your Message Has Been Send.');
    }

    public function show($id)
    {

        $thread = Thread::with('messages')->findOrFail($id);

        // get participant id
        $userId = Auth::id();
        $user = User::where('name', $thread->participantsString($userId))->firstorfail();

        return view('backend.conversation', compact('thread', 'user'));
    }
    public function update($id, Request $request)
    {

            $thread = Thread::findOrFail($id);


        // Message
        Message::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'body' => $request->message,
        ]);

        // Add replier as a participant
        $participant = Participant::firstOrCreate([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
        ]);

        // Recipient
            $thread->addParticipant($request->recipient);


        if (Gate::allows('isAdmin')) {
            return redirect()->route('admin_messages.show', $id);
        }elseif (Gate::allows('isAgent')) {
           return redirect()->route('agent_messages.show', $id);
        } else {
           return redirect()->route('user_messages.show', $id);
        }
    }
    public function destroy($id)
    {
        $thread = Thread::findorfail($id);
        $thread->messages()->delete();
        $thread->participants()->delete();
        $thread->delete();
        return back();
    }

}
