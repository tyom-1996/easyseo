<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div id="app" style="width: 100%">

</div>
<script src="{{asset('/js/app.js')}}"></script>
</body>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    body{
        background: #f2f2f2;
        width: 100%;
    }
</style>
</html>