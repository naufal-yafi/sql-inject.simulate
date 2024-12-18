<?php

function loginPage($title) {
    return "
        <!DOCTYPE html>
        <html lang='en'>
            <head>
                <title>$title</title>
                <link rel='stylesheet' href='/styles/web.css'>
                <link rel='icon' href='/favicon.ico' type='image/x-icon'>
            </head>
            <body>
                <main class='container'>
                    <div class='form__container'>
                        <div class='form__decoration'>
                            <img class='form__logo' src='/favicon.ico'/>
                            <h1 class='form__title'>LOGIN</h1>
                        </div>

        
                        <form method='POST'>
                            <div class='form__field'>
                                <label class='form__label' for='username'>username</label>
                                <input class='form__input' type='text' name='username' id='username' required>
                            </div>

                            <div class='form__field'>
                                <label class='form__label' for='password'>password</label>
                                <input class='form__input' type='password' name='password' id='password' required>
                            </div>

                            <button class='form__submit' type='submit'>Login</button>
                            <a href='http://localhost:8080/'>
                                <button class='form__back_button' type='button'>Cancel</button>
                            </a>
                        </form>
                    </div>
                </main>
            </body>
        </html>";
}

?>

<button type></button>
