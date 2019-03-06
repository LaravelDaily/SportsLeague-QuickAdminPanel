<?php

namespace App\Http\Controllers\Admin;

use App\League;
use App\Dartleague;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDartleaguesLeagueRequest;

class DartleaguesLeagueController extends Controller
{
    public function store($dartleagueId, StoreDartleaguesLeagueRequest $request)
    {
        if (! Gate::allows('dartleague_create')) {
            return abort(401);
        }

        $dartleague = Dartleague::findOrFail($dartleagueId);

        // TODO:: erst einmal ganz billig
        $dartleague->leagues()->detach($request->league_id);
        $dartleague->leagues()->attach($request->league_id);

        return redirect()->route('admin.dartleagues.edit', ['id' => $dartleague->id])
            ->with('success', 'Die Liga wurde erfolgreich hinzugefügt');
    }

    public function create($id)
    {
        if (! Gate::allows('dartleague_create')) {
            return abort(401);
        }

        $dartleague = Dartleague::findOrFail($id);

        $storeLeagues = League::whereNotin(
            'id',
            $dartleague->leagues()->pluck('id')
        )->pluck('name', 'id')->prepend('Bitte auswählen', '');

        return view('admin.dartleagues.leagues.create', compact('dartleague', 'storeLeagues'));
    }

    public function destroy($dartleagueId, $leagueId)
    {
        if (! Gate::allows('dartleague_create')) {
            return abort(401);
        }

        $dartleague = Dartleague::findOrFail($dartleagueId);

        // TODO:: erst einmal ganz billig
        $dartleague->leagues()->detach($leagueId);

        return redirect()->route('admin.dartleagues.edit', ['id' => $dartleague->id])
            ->with('success', 'Die Liga wurde erfolgreich entfernt');
    }
}
