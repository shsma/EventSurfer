@extends('layouts.app')
<title>Dashboard</title>

<style>
    @section('css')
         #mainDiv{
    //background-color: #a4aaae;
        width: 100%;
        height: 650px;
    }

    table{
        margin-top: 100px;
        margin-left: 200px;
        width: 600px;
        height: 600px;
    //background-color: #761c19;
        color: black;
        font-size: 20px;
    }

    #dasboard-nav{
        background-color: #4e97ed ;
        height: 100px;
        margin-top: 0px;
    }

    .dashboard_ul {
        list-style-type: none;
        padding: 0;
        overflow: hidden;
        background-color: #122b40;
        font-weight: 100;
        font-size: 23px;
    }

    .dashboard_li {
        float: left;
    }

    .dashboard_li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .dashboard_li a:hover {
        background-color: #4e97ed;
    }

    #li-1{
        margin-left: 33%;
    }
    @endsection
</style>
@section('content')
<head>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../../jqwidgets-ver4.5.2/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../../../jqwidgets-ver4.5.2/scripts/jquery.js"></script>
    <script type="text/javascript" src="../../../jqwidgets-ver4.5.2/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../../jqwidgets-ver4.5.2/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../../../jqwidgets-ver4.5.2/jqwidgets/jqxinput.js"></script>
    <script type="text/javascript" src="../../../jqwidgets-ver4.5.2/jqwidgets/jqxpasswordinput.js"></script>
<script>
    $(document).ready(function () {
        smoothScroll();
        createInputs();
    });

        function createInputs(){
            $('#Title').jqxInput({ width: '250px', height: '35px'});
            $("#Title").jqxInput({placeHolder: "  Event title..." });
            $('#Category').jqxInput({ width: '250px', height: '35px'});
            $("#Category").jqxInput({placeHolder: "  Event category..." });
            $("#Address").jqxInput({ width: '250px', height: '35px'});
            $("#Address").jqxInput({placeHolder: "  Address.." });
            $("#Date").jqxInput({ width: '250px', height: '35px'});
            $("#Date").jqxInput({placeHolder: " Event date" });
            $("#Description").jqxInput({ width: '250px', height: '100px'});
            $("#Description").jqxInput({placeHolder: " Description..." });
            $("#submit").jqxButton({ width: '150', height: '50'});
        }

        function submitClicked(){
            var title = $('#Title').val();
            var category = $('#Category').val();
            var date = $('#Date').val();
            var address = $('#Address').val();
            var description = $('#Description').val();
            if(title === "" || category === "" || date === "" || address === "" || description === ""){
                alert("Please fill all the fields")
            }else{
                alert(title + category +date +address + description);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: success,
                    dataType: dataType
                });
            }
        }
</script>

</head>
<body>

    <div id="mainDiv">
        <div id="dasboard-nav">
            <ul class="dashboard_ul">
                <li class="dashboard_li" id="li-1"><a  id="goMyEvent" href="#ancremyEventDiv" onclick="smoothScroll('#goMyEvent')">  My events</a></li>
                <li class="dashboard_li"><a id="goRegEvent" href="#ancreregistredEventDiv"onclick="smoothScroll('#goRegEvent')" >My registred events</a></li>
                <li class="dashboard_li"><a id="goCreateEvent" href="#ancreCreateEvant" onclick="smoothScroll('#goCreateEvent')">Create event</a></li>
            </ul>
        </div>
        <div id="myEventDiv">

        </div>
        <div id="ancremyEventDiv"></div>

        <div id="registredEventDiv">

        </div>
        <div id="ancreregistredEventDiv"></div>

        <div id="createEventDiv">
            <table>
                <tr>
                    <td>
                        <h1>
                            Create new event
                        </h1>
                    </td>
                </tr>
                <tr>
                    <td>Title</td><td> <input id="Title"></td>
                </tr>
                <tr>
                    <td>Category</td><td><input id="Category"></td>
                </tr>
                <tr>
                    <td>Description</td><td><input id="Description"></td>
                </tr>
                <tr>
                    <td>Address</td><td><input id=Address></td>
                </tr>
                <tr>
                    <td>Date</td><td><input id="Date"></td>
                </tr>
                <tr>
                    <td>
                        <input type="button" value="Create" id='submit' onclick="submitClicked()" />
                    </td>
                </tr>
            </table>
        </div>
        <div id="ancreCreateEvant"></div>
    </div>
    <div id="ancre"></div>
</body>
@append