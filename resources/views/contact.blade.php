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
<script>
    $(document).ready(function () {

    });
    function fn() {
        alert("works");
    }
</script>
<input type="button" value="Button" id='jqxbutton' onclick="fn()" />
@append
