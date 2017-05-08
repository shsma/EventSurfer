@extends('layouts.layout')
<title>Contact</title>
@section('body')
<style>
    button{
        height: 100px;
        width: 200px;
    }
</style>
<script>
    $(document).ready(function () {

    });
    function fn() {
        alert("works");
    }
</script>
<input type="button" value="Button" id='jqxbutton' onclick="fn()" />
@stop
