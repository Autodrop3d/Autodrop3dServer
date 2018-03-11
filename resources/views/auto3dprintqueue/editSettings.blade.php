@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')
    <form id="usrform">

        <input type="submit">
    </form>
    <br>
    <textarea rows="100" cols="50" name="settingsFile" form="usrform">{{$settingsFile}}</textarea>

@endsection
