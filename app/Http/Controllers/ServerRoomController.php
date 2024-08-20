<?php

namespace App\Http\Controllers;

use App\Models\ServerRoom;
use Illuminate\Http\Request;

class ServerRoomController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $serverRooms = ServerRoom::all();
        return view('server_rooms.index', compact('serverRooms'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('server_rooms.create');
    }

   
    public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|integer',
            ]);

            // Create a new ServerRoom instance using mass assignment
            ServerRoom::create($request->all());

            return back()->with('success', 'Server Room created successfully.');
        }

    

    // Display the specified resource
    public function show(ServerRoom $serverRoom)
    {
        return view('server_rooms.show', compact('serverRoom'));
    }

    // Show the form for editing the specified resource
    public function edit(ServerRoom $serverRoom)
    {
        return view('server_rooms.edit', compact('serverRoom'));
    }

    // Update the specified resource in storage
    public function update(Request $request, ServerRoom $serverRoom)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|integer',
        ]);

        $serverRoom->update($request->all());

        return back()->with('success', 'Server Room updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy(ServerRoom $serverRoom)
    {
        $serverRoom->delete();

        return redirect()->route('server-rooms.index')->with('success', 'Server Room deleted successfully.');
    }
}

