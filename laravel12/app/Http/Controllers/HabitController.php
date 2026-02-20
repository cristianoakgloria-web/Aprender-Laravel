<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\HabitRequest;

class HabitController extends Controller
{
    public function index()
    {
        $habits = auth()->user()->habits()->get();
        return view('dashboard', compact('habits'));
    }
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $validated = $request->validated();
        auth()->user()->habits()->create($validated);
        return redirect()->route('habits.index')->with('success', 'Hábito criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Habit $habit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habit $habit)
    {
        
        return view('habit.edit', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
        if($habit->user_id !== auth()->id()) {
            abort(403, 'Ação não autorizada.');
        }
        $habit->update($request->validated());
        return redirect()->route('habits.index')->with('success', 'Hábito atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        if($habit->user_id !== auth()->id()) {
            abort(403, 'Ação não autorizada.');
        }
        $habit->delete();
        return redirect()->route('habits.index')->with('success', 'Hábito deletado com sucesso!');
    }
}
