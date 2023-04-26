<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="home.css">
    <title>Home </title>
</head>

<body>
    <section class="nav">
        <div class="logo">
            <img src="splash1.png" alt="Splash Screen">
        </div>

        <!-- <div class="main">
            <h3>Tax Management System</h3>
        </div> -->

        <div class="navbar">
            <a class="active" href="#">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="help.php">Help</a>
            <a href="setting.php">Settings</a>
        </div>

        <!-- <div class="search">
            <input type="text" name="uname" placeholder="Search"><br>
        </div> -->
        <input class="input" name="text" placeholder="Search..." type="search">

        <div class="user">
            <img src="user.png" alt="User">
        </div>

    </section>

    <section class="body">

        <div class="one">
            <span class="welcome"><b>Welcome to Tax Management System</b></span>
            <p> Our system allows for easy import of financial data from real-time
                tax calculation and hassle-free electronic.

                We provide tax planning tools, audit support, and reporting
                to help you stay on track with your tax obligations and
                minimize your tax liability.

                Join our system today and experience the convenience and peace
                of mind that comes with efficiently and effectively managing
                your taxes.Our team is here to provide support and assistance
                every step of the way.

                Our Tax Management System allows you to calculate the tax of income tax, custom tax and vat
                In income tax, there is caterogories for the tax calculation of married and unmarried male and female
                for now.
                However our system is still working for the calculation of Custom tax and vat which will be provided
                in our website very soon.

            </p>

        </div>
        <!-- <div class="ll">
            <ul class="u1">
                <div class="b1"><button class="b"><a href="/">Income Tax </a></button> </div>
                <div class="b2"><button class="b"><a href="/">Custon Tax </a></button></div>
                <div class="b3"> <button class="b"><a href="/"> VAT</a> </button></div>
              
        
            </ul>	
            </div>  -->

        <!-- <div class="ll">
                <ul class="u1">
                    <div class="b1"><a href="income.php" type: button>Income Tax </a></div>
                    <div class="b2"><a href="/" type: button>Custom Tax </a></button></div>
                    <div class="b3"><a href="/" type: button> VAT</a> </button></div>
                  
            
                </ul>	
                </div> -->
        <div class="ll">
            <ul class="u1">
                <span class="tax"><b>Tax Calculations:</b></span>
                <button class="learn-more">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <a href="income.php"><span class="button-text">Income Tax</span></a>
                </button>
                <button class="learn-more">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <a href="custom.php"><span class="button-text">Custom Tax</span></a>
                </button>
                <button class="learn-more">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <a href="vat.php"><span class="button-text">Vat</span></a>
                </button>
            </ul>
        </div>

    </section>
    <div class="splash">
        <div class="splash-img">
            <img src="splash1.png" alt="Splash Screen">
        </div>
    </div>
    <script>
        var splashScreen = document.querySelector('.splash');
        splashScreen.addEventListener('click', () => {
            splashScreen.style.opacity = 0;
            setTimeout(() => {
                splashScreen.classList.add('hidden')
            }, 610)
        })
    </script>
</body>

</html>