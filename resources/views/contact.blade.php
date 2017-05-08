@extends('layouts.app')
<title>Contact</title>
@section('css')
<style>
    button{
        height: 100px;
        width: 200px;
    }
</style>
@endsection
@section('content')
    <script type="text/javascript" src="../../../jqwidgets-ver4.5.2/scripts/jquery.js"></script>
<script>
    $(document).ready(function () {
        alert("documment ready");
    });
    function fn() {
        alert("works");
    }
</script>
<input type="button" value="Button" id='jqxbutton' onclick="fn()" />
@append
