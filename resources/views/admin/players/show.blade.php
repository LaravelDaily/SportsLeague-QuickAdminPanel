@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.players.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.players.fields.team')</th>
                            <td>{{ $player->team->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.players.fields.name')</th>
                            <td>{{ $player->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.players.fields.surname')</th>
                            <td>{{ $player->surname }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.players.fields.birth-date')</th>
                            <td>{{ $player->birth_date }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.players.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop