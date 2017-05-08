@extends('layouts.app')
<title>Home</title>

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
        font-size: 30px;
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
        createInputs();
    });
        function createInputs(){
            $('#lastName').jqxInput({ width: '250px', height: '35px'});
            $("#lastName").jqxInput({placeHolder: "  Enter your last name" });
            $('#firstName').jqxInput({ width: '250px', height: '35px'});
            $("#firstName").jqxInput({placeHolder: "  Enter your first name" });
            $("#email").jqxInput({ width: '250px', height: '35px'});
            $("#email").jqxInput({placeHolder: "  Enter your e-mail" });
            $("#password").jqxPasswordInput({ width: '250px', height: '35px'});
            $("#password").jqxInput({placeHolder: "  Enter your password" });
            $("#confirmPassword").jqxPasswordInput({ width: '250px', height: '35px'});
            $("#confirmPassword").jqxInput({placeHolder: "  Confirm your password" });
            $("#submit").jqxButton({ width: '150', height: '50'});
        }
        function submitClicked(){
            var lastName = $('#lastName').val();
            var firstName = $('#firstName').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var confirmPassword = $('#confirmPassword').val();
            if(lastName=="" || firstName == "" || email == "" || password == "" || confirmPassword == ""){
                alert("Please fill all the fields")
            }else if(password != confirmPassword){
                alert("Confirm your passwor")
            }else{
                alert(lastName+ firstName+email+confirmPassword+password);
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
        <table>
            <tr>
                <td>Last Name</td><td> <input id="lastName"></td>
            </tr>
            <tr>
                <td>First Name</td><td><input id="firstName"></td>
            </tr>
            <tr>
                <td>E-mail</td><td><input id="email"></td>
            </tr>
            <tr>
                <td>Password</td><td><input type="password" id="password"></td>
            </tr>
            <tr>
                <td>Confirm Password</td><td><input type="password" id="confirmPassword"></td>
            </tr>
            <tr>
                <td>
                    <input type="button" value="Submit" id='submit' onclick="submitClicked()" />
                </td>
            </tr>
        </table>
    </div>
    <div id="register"></div>
</body>
@append