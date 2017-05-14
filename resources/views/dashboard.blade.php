@extends('layouts.app')
<title>Dashboard</title>

<style>
    @section('css')
         #mainDiv{
    //background-color: #a4aaae;
        width: 100%;
        height: 1200px;
    }

    #createEventTable{
        margin-top: 100px;
        margin-left: 200px;
        width: 600px;
        height: 600px;
    //background-color: #761c19;
        color: black;
        font-size: 20px;
    }

    .tableJqxs td{
        width: 300px;
        height: 120px;
        padding: 15px;
        //border: 1px solid black;
        vertical-align: top;
        align-content: left;
    }

    .tableHeaders td{
        width: 300px;
        height: 40px;
        padding: 15px;
    //border: 1px solid black;
        vertical-align: top;
        align-content: left;
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
        margin-left: 30%;
    }

    #Start{
        font-size: small;
    }
    @endsection
</style>
@section('content')
<head>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../../jqwidgets-ver4.5.2/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../../../jqwidgets-ver4.5.2/scripts/jquery.js"></script>
<script>
        $(document).ready(function () {
            smoothScroll();
            createInputs();
        });
        var country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

        var eventCategory = ["Party", "Pic-nic", "Cheese and wine" ]

        function createInputs(){
            $('#Title').jqxInput({ width: '250px', height: '35px', placeHolder: "  Event title..."});
            $('#Category').jqxDropDownList({
                source:eventCategory,
                width: '250px',
                height: '35px',
                template: "primary",
                theme: 'energyblue',
                dropDownHeight: 100,
                placeHolder: "  Event category",
            });
            $("#Description").jqxTextArea({ width: '250px', height: '100px', placeHolder: " Event escription..."});
            $("#Start").jqxDateTimeInput({
                width: '250px',
                height: '35px',
                template: "primary",
                theme: 'energyblue',
                showTimeButton: true,
                formatString: "dd-MM-yyyy -- h:mm tt",
            });
            $("#End").jqxDateTimeInput({
                width: '250px',
                height: '35px',
                template: "primary",
                theme: 'energyblue',
                showTimeButton: true,
                formatString: "dd-MM-yyyy -- h:mm tt",
            });
            $('#Country').jqxDropDownList({
                source:country_list,
                width: '250px',
                height: '35px',
                template: "primary",
                theme: 'energyblue',
                dropDownHeight: 200,
                filterable: true,
                placeHolder: "Select a country",
                filterPlaceHolder: "Filter country",
            });
            $('#City').jqxInput({ width: '250px', height: '35px', placeHolder: "  Enter your event city"});
            $('#StreetNum').jqxInput({ width: '250px', height: '35px', placeHolder: "  Street number"});
            $('#Street').jqxInput({ width: '250px', height: '35px', placeHolder: "  Street"});
            $('#Apart').jqxInput({ width: '250px', height: '35px', placeHolder: " Apartment number"});
            $('#zip').jqxInput({ width: '250px', height: '35px', placeHolder: "  Postal code"});
            $("#submit").jqxButton({ width: '150', height: '50'});
        }

        function submitClicked(){
            var title = $('#Title').val();
            var category = $('#Category').val();
            var date = $('#Start').val();
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
                <li class="dashboard_li"><a id="goCreateEvent" href="#ancreCreateEvant" onclick="smoothScroll('#goCreateEvent')">Create new event</a></li>
            </ul>
        </div>
        <div id="myEventDiv">

        </div>
        <div id="ancremyEventDiv"></div>

        <div id="registredEventDiv">

        </div>
        <div id="ancreregistredEventDiv"></div>

        <div id="createEventDiv">
            <div id="ancreCreateEvant"></div>
            <table id="createEventTable">
                <tr>
                    <td>
                        <h2>
                            Create new event
                        </h2>
                    </td>
                </tr>
                <tr class="tableHeaders">
                    <td>Title</td> <td>Category</td><td>Description</td>
                </tr>
                <tr class="tableJqxs">
                    <td><input id="Title"></td> <td><div id="Category"></div></td> <td><div id="Description"></div></td>
                </tr>
                <tr class="tableHeaders">
                    <td>Start date-time</td> <td>End date-time</td>
                </tr>
                <tr class="tableJqxs">
                    <td><div id='Start'></div></td>  <td><div id='End'></div></td>
                </tr>
                <tr class="tableHeaders">
                    <td>Street number</td>  <td>Street</td>  <td>Apartment</td>
                </tr>
                <tr class="tableJqxs">
                    <td><input id="StreetNum"></td><td><input id="Street"></td><td><input id="Apart"></td>
                </tr>

                <tr class="tableHeaders">
                    <td>Postal code</td>   <td>City</td> <td>Country</td>
                </tr>
                <tr class="tableJqxs">
                    <td><input id="zip"></td>  <td><input id="City"></td> <td><div id="Country"></div></td>
                    <td>
                        <input type="button" value="Create" id='submit' onclick="submitClicked()" />
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id="ancre"></div>
</body>
@append