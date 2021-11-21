<!DOCTYPE html>
<html>

<head>
    <title>Online BookStore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/logIn_style.css">
    <script src="JS/jquery-3.6.0.js"></script>
</head>


<body onload="getLogInForm()">
    <div id="container"></div>


    <script>
        function getRegistrationForm() {
            xhr = new XMLHttpRequest();

            xhr.onreadystatechange = () => {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("container").innerHTML = xhr.responseText;
                }
            };

            xhr.open("GET", "php/register.php", true);
            xhr.send();
        }

        function getLogInForm() {
            xhr = new XMLHttpRequest();

            xhr.onreadystatechange = () => {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("container").innerHTML = xhr.responseText;
                }
            };

            xhr.open("GET", "php/logIn.php", true);
            xhr.send();
        }
    </script>



</html>