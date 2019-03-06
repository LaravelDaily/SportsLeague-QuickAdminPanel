@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.dartleagues.title')</h3>
    @can('dartleague_create')
    <p>
        <a href="{{ route('admin.dartleagues.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>

    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($dartleagues) > 0 ? 'datatable' : '' }} @can('dartleague_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('dartleague_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.dartleagues.fields.name')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($dartleagues) > 0)
                        @foreach ($dartleagues as $dartleague)
                            <tr data-entry-id="{{ $dartleague->id }}">
                                @can('dartleague_delete')
                                    <td></td>
                                @endcan

                                <td>{{ $dartleague->name }}</td>
                                <td>
                                    @can('dartleague_view')
                                    <a href="{{ route('admin.dartleagues.show',[$dartleague->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('dartleague_edit')
                                    <a href="{{ route('admin.dartleagues.edit',[$dartleague->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('dartleague_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.dartleagues.destroy', $dartleague->id])) !!}
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
        @can('dartleague_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.dartleagues.mass_destroy') }}';
        @endcan

    </script>
@endsection
