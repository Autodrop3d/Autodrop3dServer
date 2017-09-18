@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Contactinfo Index
    </h1>
    <a href='{!!url("contactinfo")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>emailAddress</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($contactinfos as $contactinfo) 
            <tr>
                <td>{!!$contactinfo->emailAddress!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/contactinfo/{!!$contactinfo->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/contactinfo/{!!$contactinfo->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/contactinfo/{!!$contactinfo->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $contactinfos->render() !!}

</section>
@endsection