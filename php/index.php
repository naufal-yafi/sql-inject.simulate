<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Demo</title>

    <style>
        * {
            overflow-x: hidden;
            width: 100%;
        }

        .text__group {
            text-align: center;
        }

        .text__title__h1 {
            margin-top: -15px;
        }

        .container {
            padding: 0px 32px 0px 32px;
            width: 100%;
        }

        .detail__title {
            display: flex;
            flex-direction: row;
            justify-content: start;
            align-items: center;
            width: 100%;
        }

        .detail__title button {
            width: 70px;
            height: 25px;
            cursor: pointer;
        }

        .detail__content {
            padding: 10px 20px 15px 20px;
        }
    </style>
</head>
<body>
    <header class="text__group">
        <h2 class="text__title__h2">Simulation</h2>
        <h1 class="text__title__h1">SQL Injection</h1>
    </header>

    <main class="container">
        <h3 class="detail__title">
            Vulnerable Injection
            <a href="http://localhost:8080/hacked/">
                <button>Try</button>
            </a>
        </h3>

        <div class="detail__content">
            <code>
                $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'"; <br>
                $result = $conn->query($query);
            </code>
        </div>
    </main>

    <section class="container">
        <h3 class="detail__title">
            Secure Injection 
            <a href="http://localhost:8080/unhacked/">
                <button>Try</button>
            </a>
        </h3>

        <div class="detail__content">
            <code>
                $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?"); <br>
                $stmt->bind_param("ss", $username, $password); <br>
                $stmt->execute(); <br>
                $result = $stmt->get_result(); <br>
            </code>
        </div>
    </section>

    <section class="container">
        <h3 class="detail__title">
            How to Simulate?
        </h3>

        <div class="detail__content">
            <h4 style="margin-top: -2px; margin-bottom: 5px;">You only need to fill in the form as shown below.</h4>

            Username: (type whatever...)<br>
            Password: ' OR '1'='1 <br>
        </div>
    </section>
</body>
</html>