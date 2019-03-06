@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.leagues.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.leagues.fields.name')</th>
                            <td>{{ $league->name }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

<li role="presentation" class="active"><a href="#teams" aria-controls="teams" role="tab" data-toggle="tab">Teams</a></li>
<li role="presentation" class=""><a href="#games" aria-controls="games" role="tab" data-toggle="tab">Games</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

<div role="tabpanel" class="tab-pane active" id="teams">
    INHALT Teams folgt später
</div>
<div role="tabpanel" class="tab-pane " id="games">
    INHALT Games folgt später
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.leagues.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
