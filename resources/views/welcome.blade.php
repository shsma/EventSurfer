@extends('layouts.layout')
    <title>Home</title>

<style>
@section('style')
    #jqxbutton:hover{
        background-color: #2a88bd;
    }
@endsection
</style>

<script>

@section('document.ready')
    createButton();
@endsection
@section('head')

    function createButton() {
        $("#jqxbutton").jqxButton({ width: '150', height: '25'});
    }

    function buttonClicked() {
        alert("works");
    }
@endsection
</script>

@section('body')

    <input type="button" value="Button" id='jqxbutton' onclick="buttonClicked()" />

<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="register"></div>
@endsection
