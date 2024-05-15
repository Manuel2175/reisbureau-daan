<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht</title>
</head>

<body>
    <header>
        <section class="header-img">
            <marquee scrollamount="10" behavior="scroll" direction="right">
                <button onclick="randomding()" type="button">
                <img src="img/header_img/plane.png" alt="vliegtuig">
                </button>
                
            </marquee>
        </section>
        <nav>
            <ul>
                <li>
                    <a href="reizen.php">
                        <div class="header-knop">
                            <h3>Reizen</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="over-ons.php">
                        <div class="header-knop" >

                            <h3>Over ons</h3>

                        </div>
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        <div class="header-knop">
                            <h3>Contact</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="admin.php">
                        <div class="header-knop">
                            <h3>Admin</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <div class="header-knop">
                            <h3>Login</h3>
                        </div>
                    </a>
                </li>
                <li>    
                        <div id="klok">
                            
                        </div>

                </li>
            </ul>
        </nav>
    </header>
</body>

</html>
<script>
function randomding() {

    // Get the body element
    var body = document.body;
    
    // Set the body's HTML content to an empty string
    body.innerHTML = "<div> <p>episch</p> </div>";

  }
</script>

