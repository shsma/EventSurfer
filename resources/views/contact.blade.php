
<title>Contact</title>
@section('body')
    <script type="text/javascript" src="../../../jqwidgets-ver4.5.2/scripts/jquery.js"></script>
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
    <button onclick="fn()">button</button>
@stop
@extends('layouts.layout')