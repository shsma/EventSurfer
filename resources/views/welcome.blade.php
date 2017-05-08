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
    buttonClicked();
@endsection
@section('head')

    function createButton() {
        $("#jqxbutton").jqxButton({ width: '150', height: '25'});
    }

    function buttonClicked() {
        $("#jqxbutton").on('click','div[id^="stage_"]', function (e) { alert('Hello'); });
    }
@endsection
</script>

@section('body')

    <input type="button" value="Button" id='jqxbutton' onclick="buttonClicked()" />

<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="register"></div>
@endsection
