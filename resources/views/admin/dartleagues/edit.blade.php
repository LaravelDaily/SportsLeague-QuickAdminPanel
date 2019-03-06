@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.dartleagues.title')</h3>

    {!! Form::model($dartleague, ['method' => 'PUT', 'route' => ['admin.dartleagues.update', $dartleague->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>

        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

    <hr/>

    <!-- Tab panes -->
    <div class="panel panel-default">
        <ul class="nav nav-tabs" role="tablist">
            <li
                role="presentation"
                class="active"
            ><a href="#leagues" aria-controls="leagues" role="tab" data-toggle="tab">Ligen</a>
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="leagues">
                <hr/>

                <p>
                    <a href="{{ route('admin.dartleagues.league.create', ['dartleagueId' => $dartleague->id]) }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
                </p>

                <hr/>

                <table class="table table-bordered table-striped {{ $dartleague->leagues->isNotEmpty() ? 'datatable' : '' }}">
                    <thead>
                        <tr>
                            <th>@lang('quickadmin.leagues.fields.name')</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($dartleague->leagues->isNotEmpty())
                            @foreach ($dartleague->leagues as $league)
                                <tr data-entry-id="{{ $league->id }}">
                                    <td>{!! $league->name !!}</td>
                                    <td>
                                        @can('dartleague_delete')
                                            {!! Form::open(array(
                                                'style' => 'display: inline-block;',
                                                'method' => 'DELETE',
                                                'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                                'route' => ['admin.dartleagues.league.destroy', $dartleague->id, $league->id])) !!}
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
        </div>
    </div>
@stop
