@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Upcoming Games</h1>

                <table class="table">
                    <tr>
                        <th>Start</th>
                        <th>Teams</th>
                    </tr>
                    @forelse($games as $game)
                        <tr>
                            <td>{{ $game->start_time }}</td>
                            <td>{{ $game->team1->name }} - {{ $game->team2->name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No games.</td>
                        </tr>
                    @endforelse
                </table>

                <hr />

                <h1>Results</h1>

                <table class="table">
                    <tr>
                        <th>Start</th>
                        <th>Teams</th>
                        <th>Result</th>
                    </tr>
                    @forelse($results as $game)
                        <tr>
                            <td>{{ $game->start_time }}</td>
                            <td>{{ $game->team1->name }} - {{ $game->team2->name }}</td>
                            <td>{{ $game->result1 }} : {{ $game->result2 }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No results.</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
