@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.leagues.title')</h3>
    @can('league_create')
    <p>
        <a href="{{ route('admin.leagues.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>

    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($leagues) > 0 ? 'datatable' : '' }} @can('league_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('league_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.leagues.fields.name')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($leagues) > 0)
                        @foreach ($leagues as $league)
                            <tr data-entry-id="{{ $league->id }}">
                                @can('league_delete')
                                    <td></td>
                                @endcan

                                <td>{{ $league->name }}</td>
                                <td>
                                    @can('league_view')
                                    <a href="{{ route('admin.leagues.show',[$league->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('league_edit')
                                    <a href="{{ route('admin.leagues.edit',[$league->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('league_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.leagues.destroy', $league->id])) !!}
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
        @can('league_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.leagues.mass_destroy') }}';
        @endcan

    </script>
@endsection
