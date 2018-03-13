@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show supplier
    </h1>
    <br>
    <a href='{!!url("supplier")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Supplier Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$supplier->name!!}</td>
            </tr>
            <tr>
                <td> <b>address</b> </td>
                <td>{!!$supplier->address!!}</td>
            </tr>
            <tr>
                <td> <b>phone</b> </td>
                <td>{!!$supplier->phone!!}</td>
            </tr>
            <tr>
                <td> <b>fax</b> </td>
                <td>{!!$supplier->fax!!}</td>
            </tr>
            <tr>
                <td> <b>email</b> </td>
                <td>{!!$supplier->email!!}</td>
            </tr>
            <tr>
                <td> <b>url</b> </td>
                <td>{!!$supplier->url!!}</td>
            </tr>
            <tr>
                <td> <b>orderURL</b> </td>
                <td>{!!$supplier->orderURL!!}</td>
            </tr>
            <tr>
                <td> <b>notes</b> </td>
                <td>{!!$supplier->notes!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection