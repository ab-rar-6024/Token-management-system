<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $tokens = Token::all();
        return view('admin.dashboard', compact('tokens'));
    }

    public function updateStatus(Request $request, $id)
{
    $token = Token::findOrFail($id);
    $token->status = $request->status;
    $token->save();

    return back()->with('success', 'Status Updated!');
}
}