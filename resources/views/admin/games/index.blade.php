@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.games.title')</h3>
    @can('game_create')
    <p>
        <a href="{{ route('admin.games.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($games) > 0 ? 'datatable' : '' }} @can('game_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('game_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

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
                                @can('game_delete')
                                    <td></td>
                                @endcan

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
@stop

@section('javascript') 
    <script>
        @can('game_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.games.mass_destroy') }}';
        @endcan

    </script>
@endsection