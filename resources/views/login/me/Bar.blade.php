<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

        .overlay {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
            overflow-x: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover,
        .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }


        /* @media screen and (max-height: 450px) {
            .overlay a {
                font-size: 20px
            }

            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            } */
        
    </style>
    </head>
















    <body>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
        <h3>My Google Maps Demo</h3>
        <!--The div element for the map -->
        <div id="map"></div>

        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->


        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
            </div>
        </div>
       








        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAmxpEuREslkCkU6yopJmn7BUgdHW5RqI&callback=initMap&libraries=&v=weekly" async></script>
        <script>
            function openNav() {
                document.getElementById("myNav").style.width = "20%";
            }

            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
        </script>
        <script>
            function initMap() {
                // The location of Uluru
                const uluru = {
                    lat: -25.344,
                    lng: 131.036
                };
                // The map, centered at Uluru
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 4,
                    center: uluru,
                });
                // The marker, positioned at Uluru
                const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                });
            }
        </script>
         <script>
            var slider = document.getElementById("myRange");
            var number = document.getElementById("value");
            number.innerHTML = slider.value;
            slider.oninput = function() {
                number.innerHTML = this.value;

            }

        </script>


    </body>

</html>