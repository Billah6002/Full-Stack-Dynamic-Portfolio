<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../css/app.css"> -->

    <style>
        body{
            padding:0;
            margin:0;
            padding-left:5%; 
            padding-right: 5%;
        }
        .flex{
            display: flex;
        }
        .center{
            justify-content: center;
            flex-wrap: wrap;
            align-items: center;
            width: 100%;
        }
        .space_between{
            display: flex;
            justify-content: space-between;
        }
        .align{
            flex-wrap: wrap;
            align-content : center;
        }
        .flex h3{
            padding: 10px;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav >
        <div class="flex">
            <div class="flex center"><img id = "avatar" src="{{asset('assets/images/Capture.PNG')}}" alt="" style="height:50px"></div>
            <div class = "flex center nav-links space_between">
                <a href="#">Home</a>
                <a href="#">Expertise</a>
                <a href="#">Work</a>
                <a href="#">Experience</a>
                <a href="#">Contact</a>
            </div>
        </div>
    </nav>

    <!-- dash -->
    <section>
        <h1 id="name" class="title">MD Masum Billah</h1>
        <h3>Software Engineer, Front end & App Developer.</h3>
        <div>
            Icons
        </div>
    </section>

    <!-- my Expertise -->
    <section>
        <div>
            <h1 class="title">My Expertise</h1>
            <div>
                <div>Icon</div>
                <h2>Software Development</h2>
            </div>
            <div>
                Experienced in both functional and OOP: Dart, Python, Java, JavaScript, TypeScript.
            </div>
        </div>
        <div>
            <h1>My Expertise</h1>
            <div>
                <div>Icon</div>
                <h2>Software Development</h2>
            </div>
            <div>
                Experienced in both functional and OOP: Dart, Python, Java, JavaScript, TypeScript.
            </div>
        </div>
    </section>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>