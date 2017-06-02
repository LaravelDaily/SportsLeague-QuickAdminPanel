@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.teams.title')</h3>
    @can('team_create')
    <p>
        <a href="{{ route('admin.teams.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($teams) > 0 ? 'datatable' : '' }} @can('team_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('team_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.teams.fields.name')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($teams) > 0)
                        @foreach ($teams as $team)
                            <tr data-entry-id="{{ $team->id }}">
                                @can('team_delete')
                                    <td></td>
                                @endcan

                                <td>{{ $team->name }}</td>
                                <td>
                                    @can('team_view')
                                    <a href="{{ route('admin.teams.show',[$team->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('team_edit')
                                    <a href="{{ route('admin.teams.edit',[$team->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('team_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.teams.destroy', $team->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('team_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.teams.mass_destroy') }}';
        @endcan

    </script>
@endsection