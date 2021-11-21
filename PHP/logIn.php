<?php
echo <<<_MAIN
<div class="login-box">
            <h1>Login</h1>
            <form>
                <label for="">Username</label>
                <input type="text" name="" placeholder="Enter username" required>
                <label for="">Password</label>
                <input type="password" name="" placeholder="Enter password" required>
                <button id="btnLogin">Sign in</button>
            </form>
            <p>Don't have an account?
                <button id='btnToRegister' onclick="getRegistrationForm()">Sign up</button>
            </p>
        </div>
_MAIN;
?>