<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masum Billah</title>
    
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        font-family: 'Inter', sans-serif;
        }

        body {
        background-color: #f5f5f5;
        color: #1a1a1a;
        }

        header {
        background-color: #ffffff;
        padding: 20px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        header h1 {
        font-size: 1.8rem;
        color: #007acc;
        }

        nav a {
        margin-left: 20px;
        text-decoration: none;
        color: #333;
        font-weight: 500;
        }

        .hero {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 100px 20px;
        background: linear-gradient(to right, #e0f7ff, #ffffff);
        }

        .hero h2 {
        font-size: 2.5rem;
        margin-bottom: 10px;
        }

        .hero p {
        font-size: 1.2rem;
        max-width: 600px;
        margin-bottom: 30px;
        color: #555;
        }

        .hero a {
        padding: 12px 24px;
        background-color: #007acc;
        color: #fff;
        text-decoration: none;
        border-radius: 6px;
        transition: background-color 0.3s ease;
        }

        .hero a:hover {
        background-color: #005fa3;
        }

        section {
        padding: 60px 40px;
        max-width: 1000px;
        margin: auto;
        }

        .about, .projects, .contact {
        margin-top: 40px;
        }

        .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin-top: 20px;
        }

        .project-card {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        footer {
        text-align: center;
        padding: 20px;
        font-size: 0.9rem;
        color: #888;
        margin-top: 40px;
        }
    </style>
    @stack('style')
</head>
<body>
    @yield('main-content')
    
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