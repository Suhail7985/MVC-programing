<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function storeSession(Request $request)
    {
        session(['user_name' => 'John Doe']);
        return "Session stored!";
    }

    public function getSession(Request $request)
    {
        return "User: " . session('user_name', 'Guest');
    }

    public function deleteSession(Request $request)
    {
        session()->forget('user_name');
        return "Session deleted!";
    }
}
