@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.teams.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.teams.fields.name')</th>
                            <td>{{ $team->name }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#players" aria-controls="players" role="tab" data-toggle="tab">Players</a></li>
<li role="presentation" class=""><a href="#games" aria-controls="games" role="tab" data-toggle="tab">Games</a></li>
<li role="presentation" class=""><a href="#games" aria-controls="games" role="tab" data-toggle="tab">Games</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="players">
<table class="table table-bordered table-striped {{ count($players) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.players.fields.team')</th>
                        <th>@lang('quickadmin.players.fields.name')</th>
                        <th>@lang('quickadmin.players.fields.surname')</th>
                        <th>@lang('quickadmin.players.fields.birth-date')</th>
                        <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @if (count($players) > 0)
            @foreach ($players as $player)
                <tr data-entry-id="{{ $player->id }}">
                    <td>{{ $player->team->name or '' }}</td>
                                <td>{{ $player->name }}</td>
                                <td>{{ $player->surname }}</td>
                                <td>{{ $player->birth_date }}</td>
                                <td>
                                    @can('player_view')
                                    <a href="{{ route('admin.players.show',[$player->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('player_edit')
                                    <a href="{{ route('admin.players.edit',[$player->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('player_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.players.destroy', $player->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="games">
<table class="table table-bordered table-striped {{ count($games) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.games.fields.team1')</th>
                        <th>@lang('quickadmin.games.fields.team2')</th>
                        <th>@lang('quickadmin.games.fields.start-time')</th>
                        <th>@lang('quickadmin.games.fields.result1')</th>
                        <th>@lang('quickadmin.games.fields.result2')</th>
                        <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @if (count($games) > 0)
            @foreach ($games as $game)
                <tr data-entry-id="{{ $game->id }}">
                    <td>{{ $game->team1->name or '' }}</td>
                                <td>{{ $game->team2->name or '' }}</td>
                                <td>{{ $game->start_time }}</td>
                                <td>{{ $game->result1 }}</td>
                                <td>{{ $game->result2 }}</td>
                                <td>
                                    @can('game_view')
                                    <a href="{{ route('admin.games.show',[$game->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('game_edit')
                                    <a href="{{ route('admin.games.edit',[$game->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('game_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.games.destroy', $game->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="9">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="games">
<table class="table table-bordered table-striped {{ count($games) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.games.fields.team1')</th>
                        <th>@lang('quickadmin.games.fields.team2')</th>
                        <th>@lang('quickadmin.games.fields.start-time')</th>
                        <th>@lang('quickadmin.games.fields.result1')</th>
                        <th>@lang('quickadmin.games.fields.result2')</th>
                        <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @if (count($games) > 0)
            @foreach ($games as $game)
                <tr data-entry-id="{{ $game->id }}">
                    <td>{{ $game->team1->name or '' }}</td>
                                <td>{{ $game->team2->name or '' }}</td>
                                <td>{{ $game->start_time }}</td>
                                <td>{{ $game->result1 }}</td>
                                <td>{{ $game->result2 }}</td>
                                <td>
                                    @can('game_view')
                                    <a href="{{ route('admin.games.show',[$game->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('game_edit')
                                    <a href="{{ route('admin.games.edit',[$game->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('game_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.games.destroy', $game->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="9">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.teams.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop