<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #cardid{
            padding : 10px;
        }
        #cardid:hover {
            background-color: red;
        }
    </style>

</head>
<body>
    <div id = "cardid" class = "card">
        <h1>Software Development</h1>
        <h3>
            Experienced in both functional and OOP: <br> Dart, Python, Java, JavaScript, TypeScript.
        </h3>
    </div>
    <div id = "nxt">
        
    </div>

    <script>
        document.getElementById("cardid").addEventListener("click", function (params) {
            // alert(params.target.innerHTML);
            // console.log(params.target);
            console.log("HELLO");
            document.getElementById("nxt").innerHTML = params.target.innerHTML;
        });
    </script>
</body>
</html>