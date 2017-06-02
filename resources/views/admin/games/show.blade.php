@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.games.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.games.fields.team1')</th>
                            <td>{{ $game->team1->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.games.fields.team2')</th>
                            <td>{{ $game->team2->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.games.fields.start-time')</th>
                            <td>{{ $game->start_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.games.fields.result1')</th>
                            <td>{{ $game->result1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.games.fields.result2')</th>
                            <td>{{ $game->result2 }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.games.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop