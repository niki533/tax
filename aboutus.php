<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="aboutus.css">
    <title>About Us</title>
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
            <a class="active" href="home.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="#contact">Help</a>
            <a href="setting.php">Settings</a>
        </div>
        
        <input class="input" name="text" placeholder="Search..." type="search">
        <!-- <div class="search">
            <input type="text" name="uname" placeholder="Search"><br>
        </div> -->

        <div class="user">
            <img src="user.png" alt="User">
        </div>

    </section>

    <section class="body">
        
          <div class="one">
            <span class="rule"><b>Rules and Regulations:</b></span>
              <p> As per the law bided in Nepal for the single people yearly: <br><br>
                •	If your annual income is up-to 5,00,000 your income rate will be of 1%  <br><br>
                •	Annually income is more than 5,00,001 – 7,00,000 your tax rate for the money in between that amount will be 10% which is if your annual income is 6,00,000 your tax rate for first 5,00,000 amount will be of 1% and for the rest 1,00,000 will be of 10%. <br><br>
                •	Eventually if your annual income is between 7,00,001 – 10,00,000 your tax rate for 5,00,000 will be of 1% and for the money between 5,00,001 – 7,00,000 will be of 10% and for the money  between 7,00,001 – 10,00,000 the tax rate will be of 20%. <br><br>
                •	Similarly, to the annual income for 10,00,001 – 20,00,000 the tax rate will be of 30%. <br> <br>
                •	And for the annual income above 20,00,000 the tax rate will be of 36%. <br> <br>
             
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
                </div>  -->

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
                            <a href="income.php"><span class="button-text">Custom Tax</span></a>
                          </button>
                          <button class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <a href="income.php"><span class="button-text">Vat</span></a>
                          </button>
                    </ul>
                </div>

    </section>
</body>
</html>