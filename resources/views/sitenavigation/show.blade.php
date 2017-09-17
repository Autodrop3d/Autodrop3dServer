@extends('scaffold-interface.layouts.app')
@section('title', $Sitenavigation->LinkText)
@section('head')

    <script>
        {!!$Sitenavigation->PageJavaScript!!}
    </script>


    <style>
        {!!$Sitenavigation->PageCSS!!}
    </style>
    <meta name="keywords" content="{!!$Sitenavigation->PageKeywords!!}">
@endsection



@section('content')


    <div>
        {!!$Sitenavigation->PageContent!!}
    </div>

<hr>
    <div>
        Published on {!!$Sitenavigation->PagePublishDate!!}
    </div>
@endsection