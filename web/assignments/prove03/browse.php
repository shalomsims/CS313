<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assign03stylesheet.css" />
</head>
<style>
    p.footer {
        background-color: black;
        color: white;
        font-family: Century;
    }
</style>
    <title> Roadie's </title>

    <header class="relative" style="font: bold 34px century;">
        <div class="relative" style="color: black; text-decoration: dashed">
            Roadie's Inc.
        </div>
        <div class="sticky">
            <img src="assign03/lebike.png" alt="Bike.jpg"; style="max-width: 200px; max-height: 100%" />
            <img src="assign03/lebike.png" alt="Bike.jpg"; style="max-width: 200px; max-height: 100%" />
        </div>

    </header>

    <body background="assign03/bg2.jpg" class="center">
        <div class="">
        <div class="relative" ; text-align: left">
            <a href="bikelisting.html" style="font: bold 20px century ">  See Our Inventory </a>
        </div>
        <div class="relative" ; text-align: left">
            <a href="assign03/assign03forms.html" style="font: bold 20px century ">  Become a Member </a>
        </div>
        <div class="relative" ; text-align: left">
            <a href="#bottom" ; style="font: bold 20px century "> Contact Us </a>
        </div>

        <div class="relative" ;>

            <p style="color: black; font: 15px century">
                Welcome to Roadie's! The home of your cycling needs! We are a private

                company that specializes in catering to  those brave souls who traverse
                these car-dominated roads with their two-wheeled chariots!
                <br/>
                <br/>
                <em style="font: bold 18px; text-decoration-line: underline"> About us </em>
                <br/>
                Founded in 2018 by Shalom Sims, Roadie's Inc. is
                a small company based out of local Rexburg, ID. The company was founded to
                cater to the needs of the many biking students on the campus of BYU-Idaho
                and the sightseers who explore the back-roads of Idaho. The company specializes
                in older roadbike designs but is also open to newer high speed bike builds. 
                <br/>
                <br/>
                <div style="text-align: center">
                    <em style="font: bold 15px century; text-align: center">
                        "Be who you are and say what you feel, because those who mind don't matter, 
                        and those who matter don't mind."
                    </em>
                    <em style="font: intalic 15px century; text-align: center">  -Bernard M. Maruch </em>
                </div>

            </p>

        </div>
        </br>
        </br>
        <!--Add Items for sale-->
        
        <form action="cart.php" method="get">
        <div class="sticky">
                <table style="width: 75%">
                    <tr style="font: bold 20px courier">
                        <th>Products</th>
                        <th>In stock</th>
                        <th>Amount</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <th>
                        <p><input type="checkbox" name="tires">Tires 27x1.25</p>
                        </th>
                        <th><input type="number" name="numTires" min="1" max="10" placeholder="1"></th>
                        <th> Yes </th>
                        <th>$45.00</th>
                    </tr>
                    <tr>
                        <th>
                            <p><input type="checkbox" name="tubes"> Inner Tubes. OneWay(Presta) </p>
                        </th>
                        <th><input type="number" name="numTubes" min="1" max="10" placeholder="1"></th>
                        <th>Yes</th>
                        <th>$10.00</th>
                    </tr>
                    <tr>
                        <th>
                            <p><input type="checkbox" name="brakes">Brake Shoes </p>
                        </th>
                        <th><input type="number" name="numBrakes" min="1" max="10" placeholder="1"></th>
                        <th> Yes </th>
                        <th> $12.00 </th>
                    </tr>
                </table>
            </div>
            <button type="submit">Checkout</button>
            </form>


    </div>
        <div class="relative" style="background-color: black">
            <p style="color: white; font: 15px century">
                LOCATION
                </br>
                Our office is located
                at:
                </br>
                431 S 3rd
                </br>
                Unit #1108
                </br>
                Rexburg, ID 83440
            </p>
            <a name="bottom"> </a>
            <p class="footer">
                Office number: (208)999-9999
                </br>
                Office Hours: Monday-Friday 9am-7pm, Saturday 8am-4pm
                </br>
                Email: sim16024@byui.edu
                </br>


            </p>
        </div>

    </body>
    <footer>
        <div class="relative">
            <a href="index.html"; style="text-align: center; font: bold 20px castellar"> Back to assignments </a>
        </div>
    </footer>
</html>
