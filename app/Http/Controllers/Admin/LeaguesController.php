<?php

namespace App\Http\Controllers\Admin;

use App\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreLeaguesRequest;
use App\Http\Requests\Admin\UpdateLeaguesRequest;

class LeaguesController extends Controller
{
    public function index()
    {
        if (! Gate::allows('league_access')) {
            return abort(401);
        }

        $leagues = League::all();

        return view('admin.leagues.index', compact('leagues'));
    }

    public function create()
    {
        if (! Gate::allows('league_create')) {
            return abort(401);
        }

        return view('admin.leagues.create');
    }

    public function store(StoreLeaguesRequest $request)
    {
        if (! Gate::allows('league_create')) {
            return abort(401);
        }

        League::create($request->validated());

        return redirect()->route('admin.leagues.index');
    }

    public function edit($id)
    {
        if (! Gate::allows('league_edit')) {
            return abort(401);
        }

        $league = League::findOrFail($id);

        return view('admin.leagues.edit', compact('league'));
    }

    public function update(UpdateLeaguesRequest $request, $id)
    {
        if (! Gate::allows('league_edit')) {
            return abort(401);
        }

        $league = League::findOrFail($id);
        $league->update($request->all());

        return redirect()->route('admin.leagues.index');
    }

    public function show($id)
    {
        if (! Gate::allows('league_view')) {
            return abort(401);
        }

        $league = League::findOrFail($id);

        return view('admin.leagues.show', compact('league'));
    }

    public function destroy($id)
    {
        if (! Gate::allows('league_delete')) {
            return abort(401);
        }

        $league = League::findOrFail($id);
        $league->delete();

        return redirect()->route('admin.leagues.index');
    }

    // TODO: Validierung hinzufuegen
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('league_delete')) {
            return abort(401);
        }

        if ($request->input('ids')) {
            $entries = League::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
