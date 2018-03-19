@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show assemblystructure
    </h1>
    <br>
    <a href='{!!url("assemblystructure")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Assemblystructure Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>ParentID</b> </td>
                <td>{!!$assemblystructure->ParentID!!}</td>
            </tr>
            <tr>
                <td> <b>ChildID</b> </td>
                <td>{!!$assemblystructure->ChildID!!}</td>
            </tr>
            <tr>
                <td> <b>Callout</b> </td>
                <td>{!!$assemblystructure->Callout!!}</td>
            </tr>
            <tr>
                <td> <b>Position</b> </td>
                <td>{!!$assemblystructure->Position!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection