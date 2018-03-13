@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Supplier Index
    </h1>
    <a href='{!!url("supplier")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>address</th>
            <th>phone</th>
            <th>fax</th>
            <th>email</th>
            <th>url</th>
            <th>orderURL</th>
            <th>notes</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier) 
            <tr>
                <td>{!!$supplier->name!!}</td>
                <td>{!!$supplier->address!!}</td>
                <td>{!!$supplier->phone!!}</td>
                <td>{!!$supplier->fax!!}</td>
                <td>{!!$supplier->email!!}</td>
                <td>{!!$supplier->url!!}</td>
                <td>{!!$supplier->orderURL!!}</td>
                <td>{!!$supplier->notes!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/supplier/{!!$supplier->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/supplier/{!!$supplier->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/supplier/{!!$supplier->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $suppliers->render() !!}

</section>
@endsection