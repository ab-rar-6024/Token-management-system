<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenController extends Controller
{
    public function index(Request $request)
{
    $query = Token::where('user_id', Auth::id());

    if ($request->status) {
        $query->where('status', $request->status);
    }

    $tokens = $query->get();

    return view('tokens.index', compact('tokens'));
}

    public function create()
    {
        return view('tokens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Token::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('tokens.index')->with('success', 'Token Created!');
    }

    // ✏️ EDIT
    public function edit($id)
    {
        $token = Token::findOrFail($id);
        return view('tokens.edit', compact('token'));
    }

    // 🔄 UPDATE
    public function update(Request $request, $id)
{
    $token = Token::findOrFail($id);

    $token->update([
        'title' => $request->title,
        'description' => $request->description,
        'status' => $request->status ?? $token->status
    ]);

    return redirect('/tokens')->with('success', 'Updated!');
}

    // 🗑️ DELETE
    public function destroy($id)
    {
        $token = Token::findOrFail($id);
        $token->delete();

        return back()->with('success', 'Deleted!');
    }
}