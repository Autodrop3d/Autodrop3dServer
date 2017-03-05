@extends('scaffold-interface.layouts.app')
@section('title') Group -
    {{$group->name}}
@endsection
@section('content')
    <div class="container row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div>
                        <img src="{{url(asset($group->image()->first()->path))}}" alt="{!!$group->name!!}" style="max-height: 200px;" >
                        {!!$group->about!!}
                    </div>

                <div class="panel-body">
                    {!! $calendar->calendar() !!}
                    {!! $calendar->script() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('adminBar')
    @hasanyrole(['superadmin','admin'])
    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/g/{!!$group->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/g/{!!$group->id!!}/edit'><i class = 'material-icons'>edit</i></a>
    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/g/{!!$group->stub!!}'><i class = 'material-icons'>info</i></a>
    @endhasanyrole
@endsection

@push('jquery.ready')
$('[data-toggle="popover"]').popover();
@endpush