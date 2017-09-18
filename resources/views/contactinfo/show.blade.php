@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show contactinfo
    </h1>
    <br>
    <a href='{!!url("contactinfo")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Contactinfo Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>emailAddress</b> </td>
                <td>{!!$contactinfo->emailAddress!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection