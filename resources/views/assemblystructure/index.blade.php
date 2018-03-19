@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Assemblystructure Index
    </h1>
    <a href='{!!url("assemblystructure")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>ParentID</th>
            <th>ChildID</th>
            <th>Callout</th>
            <th>Position</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($assemblystructures as $assemblystructure) 
            <tr>
                <td>{!!$assemblystructure->ParentID!!}</td>
                <td>{!!$assemblystructure->ChildID!!}</td>
                <td>{!!$assemblystructure->Callout!!}</td>
                <td>{!!$assemblystructure->Position!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/assemblystructure/{!!$assemblystructure->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/assemblystructure/{!!$assemblystructure->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/assemblystructure/{!!$assemblystructure->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $assemblystructures->render() !!}

</section>
@endsection