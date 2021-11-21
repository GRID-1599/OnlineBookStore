<?php
echo <<<_MAIN
<div class="register-box">
            <button id="btnBack-Login" onclick='getLogInForm()'> < Back</button>
            <h1>Sign Up</h1>
            <form>
                <div>
                    <label for="">First name</label>
                    <input type="text" name="" required>
                    <label for="">Last name</label>
                    <input type="text" name="" required>
                </div>
                <div>
                    <label for="">Username</label>
                    <input type="text" name="" placeholder="" required>
                    <label for="">Password</label>
                    <input type="password" name="" placeholder="" required>
                    <label for="">Confirm Password</label>
                    <input type="password" name="" placeholder="" required>
                </div>
                <div>
                    <button id="btnSignUp">Sign up</button>
                </div>
            </form>
        </div>
_MAIN;
?>