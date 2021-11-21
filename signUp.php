<?php
echo<<<_SIGNUP
<div class="container">
        <div class="register-box">
            <h1>Sign Up</h1>
            <form >
                <label for="">Username</label>
                <input type="text" name="" placeholder="Enter username" required>
                <label for="">Password</label>
                <input type="password" name="" placeholder="Enter password" required>
                <button id="btnLogin">Sign in</button>
                <p>Don't have an account? <a href="#">Sign up</a></p>
            </form>
        </div>
    </div>
_SIGNUP;