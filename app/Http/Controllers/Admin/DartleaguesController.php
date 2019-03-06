<?php

namespace App\Http\Controllers\Admin;

use App\League;
use App\Dartleague;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDartleaguesRequest;
use App\Http\Requests\Admin\UpdateDartleaguesRequest;

class DartleaguesController extends Controller
{
    public function index()
    {
        if (! Gate::allows('dartleague_access')) {
            return abort(401);
        }

        $dartleagues = Dartleague::all();

        return view('admin.dartleagues.index', compact('dartleagues'));
    }

    public function create()
    {
        if (! Gate::allows('dartleague_create')) {
            return abort(401);
        }

        return view('admin.dartleagues.create');
    }

    public function store(StoreDartleaguesRequest $request)
    {
        if (! Gate::allows('dartleague_create')) {
            return abort(401);
        }

        Dartleague::create($request->validated());

        return redirect()->route('admin.dartleagues.index');
    }

    public function edit($id)
    {
        if (! Gate::allows('dartleague_edit')) {
            return abort(401);
        }

        $dartleague = Dartleague::findOrFail($id);

        return view('admin.dartleagues.edit', compact('dartleague'));
    }

    public function update(UpdateDartleaguesRequest $request, $id)
    {
        if (! Gate::allows('dartleague_edit')) {
            return abort(401);
        }

        $dartleague = DartLeague::findOrFail($id);
        $dartleague->update($request->all());

        return redirect()->route('admin.dartleagues.index');
    }

    public function show($id)
    {
        if (! Gate::allows('dartleague_view')) {
            return abort(401);
        }

        $dartleague = Dartleague::findOrFail($id);

        return view('admin.dartleagues.show', compact('dartleague'));
    }

    public function destroy($id)
    {
        if (! Gate::allows('dartleague_delete')) {
            return abort(401);
        }

        $dartleague = Dartleague::findOrFail($id);
        $dartleague->delete();

        return redirect()->route('admin.dartleagues.index');
    }

    // TODO: Validierung hinzufuegen
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('dartleague_delete')) {
            return abort(401);
        }

        if ($request->input('ids')) {
            $entries = Dartleague::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
