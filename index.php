<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGUKT-IIITN Admissions</title>
    <link rel="icon" href="./logo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        .form-control:focus{
            box-shadow: none !important;
            border: 1px solid gray;
        }
        .h1, label{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .token{
            font-family: calibri;
        }
        label{
            font-size: 15px;
        }
        .form-control{
            height: 30px;
            font-size: 14px;
        }
        body{
            background-color: whitesmoke;
        }
        @media screen and (max-width:360px){
            .box{
                width: 90% !important;
                padding: 25px 15px !important;
            }
            .token{
                width: 300px !important;
            }
            .token-box{
                width: 90% !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid pb-5" style="height: 100vh;">
        <div class="row">
            <div class="col-md-12 mt-4 d-flex justify-content-center">
                <h1 style="font-family: Arial, Helvetica, sans-serif; color: rgb(149, 0, 0); font-weight: bolder; text-align: center;">RGUKT-IIITN UG Admissions Tokens Generator</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row justify-content-around">
                    <div class="col-md-5 p-5 my-4 rounded box shadow bg-white" style="height: 480px;">

                        <form action="token.php" method="post">
                            <label>Number of Tokens</label>
                            <div class="col-md-12 d-flex column justify-content-between">
                                <div class="col-md-5" style="width: 49%;">
                                    <div class="form-group mb-2">
                                        <input type="number" class="form-control mt-1" name="fromcount" id="fromcount" placeholder="From" onblur="fcc()">
                                    </div>
                                </div>
                                <div class="col-md-5" style="width: 49%;">
                                    <div class="form-group mb-2">
                                        <input type="number" class="form-control mt-1" name="tocount" id="tocount" placeholder="To" onchange="tcc()">
                                    </div>
                                </div>
                            </div>
                            <label>Academic Year</label>
                            <div class="col-md-12 d-flex column justify-content-between">
                                <div class="col-md-5" style="width: 49%;">
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control mt-1" name="fromyear" id="fromyear" placeholder="From" onkeyup="fromyearfun()" onblur="fyc()">
                                    </div>
                                </div>
                                <div class="col-md-5" style="width: 49%;">
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control mt-1" name="toyear" id="toyear" placeholder="To" onkeyup="toyearfun()" onblur="tyc()">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label>Type of Tokens</label>
                                <select class="form-control mt-1" name="cattype" id="type" onchange="display()" style="padding: 0px 10px;">
                                    <option value="---">---</option>
                                    <option value="General Category">General Category</option>
                                    <option value="Special Category">Special Category</option>
                                    <option value="Food Tokens">Food Tokens</option>
                                </select>
                            </div>
                            <div class="form-group mb-2" id="category" style="display: none;">
                                <label>Category</label>
                                <input type="text" class="form-control mt-1" name="category" id="cat" onkeyup="categoryfun()" onblur="cc()">
                            </div>

                            <div class="form-group mb-2" id="session" style="display: none;">
                                <label>Session</label>
                                <input type="text" class="form-control mt-1" name="session" id="sess" onkeyup="sessionfun()" onblur="cc()">
                            </div>


                            <div class="form-group mb-2 mt-2">
                                <label>Date of Counselling</label>
                                <input type="date" class="form-control mt-1" name="date" id="date" onchange="datefun()" onkeyup="datefun()" onblur="dc()">
                            </div>
                            <input type="submit" class="btn btn-success mt-3" style="width: 100%;" value="Generate" id="button" disabled>
                        </form>
                    </div>

                    <div class="col-md-6 my-4 py-5 rounded box token-box shadow d-flex flex-column token align-items-center justify-content-center bg-white">
                        <table class="token" style='border: 2px solid black; width:330px; border-collapse: separate; border-spacing: 3px 4px;'>
                            <tr><td style="box-shadow: -0.02em -0.02em 0.04em 0.03em gray; border-spacing: 3px 3px;"><center><img src='./logo.png' style='padding: 2px; width:60px; height: 55px;'></center></td>
                            <td style='font-size:22px; width:100%; box-shadow: -0.02em -0.02em 0.03em 0.03em gray; text-align: center; line-height: 25px; font-weight: bold;'>RGUKT-Nuzvid<br>UG Admissions <b id="fy">xxxx</b>-<b id="ty">xx</b></td></tr>
                            <tr>
                                <td colspan=2 style='font-size:32px; padding:15px; font-family:calibri; box-shadow: -0.01em -0.01em 0.01em 0.02em gray;'>
                                <table style='width:100%;' border="2" cellspacing='0px' cellpadding='5px'>
                                    <tr>
                                        <td style="border: 2px solid black;"><b style='font-size:25px;' id="token">&nbspToken No</b></td>
                                        <td style='font-size:25px; width:90px; text-align:center; border: 2px solid black;'><b>1601</b></td>
                                    </tr>
                                    <tr id="sn">
                                        <td style="border: 2px solid black;"><b style='font-size:25px;'>&nbspSerial No</b></td>
                                        <td style='width:90px; font-size:25px; border: 2px solid black;'><b></b></td>
                                    </tr>
                                    <tr id="sen" style="display: none;">
                                        <td colspan="2" style="border: 2px solid black; height: 60px;"><center><b style='font-size:25px;' id="ses-text">&nbsp</b></center></td>
                                    </tr>
                                </table>
                                </td>
                            </tr>
                            <tr id="gc">
                                <td colspan="2" style='font-size:19px;text-align: center; box-shadow: -0.02em -0.02em 0.03em 0.03em gray;'><b id="dr">dd-mm-yyyy</b></td>
                            </tr>
                            <tr id="sc" style="display:none;">
                                <td style='font-size:19px;text-align: center; box-shadow: -0.02em -0.02em 0.03em 0.03em gray;'><b id="cat-text"></b></td>
                                <td style='font-size:19px;text-align: center; box-shadow: -0.02em -0.02em 0.03em 0.03em gray;'><b id="drr">dd-mm-yyyy</b></td>
                            </tr>
                        </table>
                        <center><h4 class="mt-3 py-0 mb-0"><b>Token Preview</b></h4></center>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 bg-dark text-light d-flex flex-column align-items-center justify-content-center py-1">
            <p style="line-height: 15px;" class="mt-2">UG@dmissions1601</p><p style="line-height: 0px; display: inline;">iiitn.ug.admissions@gmail.com</p><p style="position: absolute; right:20px;" class="mt-3 text-dark">ugadmissions</p>
            </div>
        </div>
    </div>
    <script>

        var fcs = "false";
        var tcs = "false";
        var fys = "false";
        var tys = "false";
        var typecs = "false";
        var css = "false";
        var dcs = "false";

        function fcc(){
            var ifc = document.getElementById("fromcount").value;
            var itc = document.getElementById("tocount").value;
            var reg = /^[0-9]*$/;
            fc = parseInt(ifc)
            toc = parseInt(itc)
            if (reg.test(fc) == false){
                document.getElementById("fromcount").style.border = "1px solid red";
                fcs = "false"
                submit_check()
            }
            else if(itc.length >= 1){
                if(fc>toc){
                    document.getElementById("tocount").style.border = "1px solid red";
                    document.getElementById("fromcount").style.border = "1px solid red";
                    alert("From number must be less than To number")
                    fcs = "false"
                    submit_check()
                }
                else if(fc<toc){
                    document.getElementById("tocount").style.border = "1px solid lightgray";
                    document.getElementById("fromcount").style.border = "1px solid lightgray";
                    fcs = "true"
                    submit_check()
                }
            }
            else{
                document.getElementById("fromcount").style.border = "1px solid lightgray";
                fcs = "true"
                submit_check()
            }
        };
        function tcc(){
            var ifc = document.getElementById("fromcount").value;
            var itc = document.getElementById("tocount").value;
            fc = parseInt(ifc)
            toc = parseInt(itc)
            var reg = /^[0-9]*$/;
            if (reg.test(toc) == false){
                document.getElementById("tocount").style.border = "1px solid red";
                tcs = "false"
                submit_check()
            }
            else if(fc>toc){
                document.getElementById("tocount").style.border = "1px solid red";
                document.getElementById("fromcount").style.border = "1px solid red";
                alert("From number must be less than To number")
                tcs = "false"
                submit_check()
            }
            else if(fc<toc){
                document.getElementById("tocount").style.border = "1px solid lightgray";
                document.getElementById("fromcount").style.border = "1px solid lightgray";
                tcs = "true"
                submit_check()
            }
            else{
                document.getElementById("tocount").style.border = "1px solid lightgray";
                tcs = "true"
                submit_check()
            }
        };



        function fyc(){
            var ycc = document.getElementById("fromyear").value;
            var reg = /^[0-9]{4}$/;
            if (reg.test(ycc) == false){
                document.getElementById("fromyear").style.border = "1px solid red";
                fys = "false"
                submit_check()
            }
            else{
                document.getElementById("fromyear").style.border = "1px solid lightgray";
                newyear = new Date().getFullYear()
                if (ycc >= newyear){
                    fys = "true"
                    submit_check()
                    tyc()
                }
                else{
                    document.getElementById("fromyear").style.border = "1px solid red";
                    alert("Year must be Greater than or equal to present Date");
                    fys = "false"
                    submit_check()
                }
            }
        };
        function tyc(){
            var tcc = document.getElementById("toyear").value;
            var ycc = document.getElementById("fromyear").value;
            var reg = /^[0-9]{4}$/;
            var freg = /^[0-9]{4}$/;
            if (reg.test(tcc) == false | fys == "false"){
                document.getElementById("toyear").style.border = "1px solid red";
                document.getElementById("fromyear").style.border = "1px solid red";
                tys = "false"
                submit_check()
            }
            else{
                document.getElementById("toyear").style.border = "1px solid lightgray";
                document.getElementById("fromyear").style.border = "1px solid lightgray";
                if(tcc>ycc){
                    tys = "true"
                    submit_check()
                }
                else{
                    document.getElementById("toyear").style.border = "1px solid red";
                    alert("To Year must be Greater than From Year");
                    tys = "false"
                    submit_check()
                }
            }
        }



        function tc(){
            var typec = document.getElementById("type").value;
            if (typec == "---"){
                document.getElementById("type").style.border = "1px solid red";
                typecs = "false"
                submit_check()
            }
            else{
                document.getElementById("type").style.border = "1px solid lightgray";
                typecs = "true"
                submit_check()
            }
        };
        function cc(){
            var catc = document.getElementById("cat").value;
            var sesc = document.getElementById("sess").value;
            if (catc.length == 0 | sesc.length == 0){
                document.getElementById("cat").style.border = "1px solid red";
                document.getElementById("sess").style.border = "1px solid red";
                css = "false"
                submit_check()
            }
            else{
                document.getElementById("cat").style.border = "1px solid lightgray";
                document.getElementById("sess").style.border = "1px solid lightgray";
                css = "true"
                submit_check()
            }
        };



        function dc(){
            var dcc = document.getElementById("date").value;
            presentdate = new Date()
            newdate = new Date(dcc)
            var [yer,mon,dat] = dcc.split("-");
            if (dcc.length == 10){
                document.getElementById("date").style.border = "1px solid lightgray";
                if(presentdate.getTime() < newdate.getTime() | presentdate.getDate() == newdate.getDate()){
                    dcs = "true"   
                    submit_check() 
                }
                else{
                    document.getElementById("date").style.border = "1px solid red";
                    alert("Date must be Greater or equal to Present Date")             
                    dcs = "false"
                    submit_check()
                }
            }
            else{
                document.getElementById("date").style.border = "1px solid red";
                dcs = "false"
                submit_check()
            }
        }



        function display(){
            let val = document.getElementById("type").value;
            var catval = document.getElementById("cat");
            var sesval = document.getElementById("sess");
            var tokval = document.getElementById("token");
            if (val == "General Category" || val == "---"){
                document.getElementById("gc").style.display = "contents";
                document.getElementById("sn").style.display = "contents";
                document.getElementById("sc").style.display = "none";
                document.getElementById("sen").style.display = "none";
                document.getElementById("category").style.display = "none";
                document.getElementById("session").style.display = "none";
                tokval.innerHTML = "&nbspToken No";
                catval.value = "none";
                sesval.value = "none";
                css = "false";
                submit_check()
                tc()
            }
            else if (val == "Special Category"){
                document.getElementById("category").style.display = "contents"
                document.getElementById("sc").style.display = "contents"
                document.getElementById("sn").style.display = "contents";
                document.getElementById("sen").style.display = "none";
                document.getElementById("gc").style.display = "none"
                document.getElementById("session").style.display = "none";
                tokval.innerHTML = "&nbspToken No";
                catval.value = "";
                sesval.value = "none";
                css = "false";
                submit_check()
                tc()
            }
            else if (val == 'Food Tokens'){
                document.getElementById("category").style.display = "contents"
                document.getElementById("gc").style.display = "contents";
                document.getElementById("sen").style.display = "contents"
                document.getElementById("sc").style.display = "none";
                document.getElementById("sn").style.display = "none";
                document.getElementById("category").style.display = "none";
                document.getElementById("session").style.display = "contents";
                tokval.innerHTML = "&nbspFood Token";
                catval.value = "none";
                sesval.value = "";
                css = "false";
                submit_check()
                tc()
            }
        }

        function categoryfun(){
            let cat = document.getElementById("cat").value;
            document.getElementById("cat-text").innerHTML = cat
        }

        function sessionfun(){
            let sess = document.getElementById("sess").value;
            document.getElementById("ses-text").innerHTML = sess
        }

        function fromyearfun(){
            let fy = document.getElementById("fromyear").value;
            document.getElementById("fy").innerHTML = fy
        }

        function toyearfun(){
            let ty = document.getElementById("toyear").value;
            document.getElementById("ty").innerHTML = ty.slice(-2)
        }

        function datefun(){
            var date = document.getElementById("date").value;
            var [year, month, day] = date.split("-")
            finaldate = day+"-"+month+"-"+year
            document.getElementById("dr").innerHTML = finaldate
            document.getElementById("drr").innerHTML = finaldate
            date.value = finaldate
        }

        function submit_check(){
            let val = document.getElementById("type").value;
            if (val == "Special Category" || val == "Food Tokens"){
                if (fcs == "true" & tcs == "true" & fys == "true" & tys == "true" & typecs == "true" & css == "true" & dcs == "true"){
                    document.getElementById("button").disabled = false
                }
                else{
                    
                    document.getElementById("button").disabled = true
                }
            }else{
                if (fcs == "true" & tcs == "true" & fys == "true" & tys == "true" & typecs == "true" & dcs == "true"){
                    // alert("fcs"+fcs+" -tcs"+tcs+" -fys"+fys+" -tys"+tys+" -type"+typecs+" -dcs"+dcs)
                    document.getElementById("button").disabled = false
                }
                else{
                    // alert("fcs"+fcs+" -tcs"+tcs+" -fys"+fys+" -tys"+tys+" -type"+typecs+" -dcs"+dcs)
                    document.getElementById("button").disabled = true
                }
            }
        }
    </script>
</body>
</html>