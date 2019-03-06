@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{ $dartleague->name }} - @lang('quickadmin.leagues.title')</h3>
    {!! Form::model($dartleague, ['method' => 'POST', 'route' => ['admin.dartleagues.league.store', $dartleague->id]]) !!}
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('quickadmin.qa_add_new')
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('league_id', 'Liga', ['class' => 'control-label']) !!}
                        {!! Form::select('league_id', $storeLeagues, old('league_id'), ['class' => 'form-control select2']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('league_id'))
                            <p class="help-block">
                                {{ $errors->first('league_id') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop
