@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>{{ $team->name }}: Players</h1>

                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Birth date</th>
                    </tr>
                    @forelse($players as $player)
                        <tr>
                            <td>{{ $player->name . ' ' . $player->surname }}</td>
                            <td>{{ $player->birth_date }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No players.</td>
                        </tr>
                    @endforelse
                </table>

            </div>
        </div>
    </div>
@endsection
