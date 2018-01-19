@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.clients.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.clients.fields.first-name')</th>
                            <td field-key='first_name'>{{ $client->first_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.clients.fields.last-name')</th>
                            <td field-key='last_name'>{{ $client->last_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.clients.fields.phone')</th>
                            <td field-key='phone'>{{ $client->phone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.clients.fields.email')</th>
                            <td field-key='email'>{{ $client->email }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#appointments" aria-controls="appointments" role="tab" data-toggle="tab">Appointments</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="appointments">
<table class="table table-bordered table-striped {{ count($appointments) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.appointments.fields.clients')</th>
                        <th>@lang('quickadmin.clients.fields.last-name')</th>
                        <th>@lang('quickadmin.clients.fields.phone')</th>
                        <th>@lang('quickadmin.clients.fields.email')</th>
                        <th>@lang('quickadmin.appointments.fields.employee')</th>
                        <th>@lang('quickadmin.employees.fields.last-name')</th>
                        <th>@lang('quickadmin.appointments.fields.start-time')</th>
                        <th>@lang('quickadmin.appointments.fields.finish-time')</th>
                        <th>@lang('quickadmin.appointments.fields.comments')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($appointments) > 0)
            @foreach ($appointments as $appointment)
                <tr data-entry-id="{{ $appointment->id }}">
                    <td field-key='clients'>{{ $appointment->clients->first_name or '' }}</td>
<td field-key='last_name'>{{ isset($appointment->clients) ? $appointment->clients->last_name : '' }}</td>
<td field-key='phone'>{{ isset($appointment->clients) ? $appointment->clients->phone : '' }}</td>
<td field-key='email'>{{ isset($appointment->clients) ? $appointment->clients->email : '' }}</td>
                                <td field-key='employee'>{{ $appointment->employee->first_name or '' }}</td>
<td field-key='last_name'>{{ isset($appointment->employee) ? $appointment->employee->last_name : '' }}</td>
                                <td field-key='start_time'>{{ $appointment->start_time }}</td>
                                <td field-key='finish_time'>{{ $appointment->finish_time }}</td>
                                <td field-key='comments'>{!! $appointment->comments !!}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('appointment_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.appointments.restore', $appointment->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('appointment_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.appointments.perma_del', $appointment->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('appointment_view')
                                    <a href="{{ route('admin.appointments.show',[$appointment->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('appointment_edit')
                                    <a href="{{ route('admin.appointments.edit',[$appointment->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('appointment_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.appointments.destroy', $appointment->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.clients.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
