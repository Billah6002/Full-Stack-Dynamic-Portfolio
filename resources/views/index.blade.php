<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masum Billah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @stack('style')
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
        .max-width-p-tag {
        max-width: 90%;
        word-wrap: break-word;
        }

    </style>
</head>

<body>
    @yield('main-content')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>