
<section id="header">
    <img src="img/header.jpg" style="width:100%;  z-index:1;" />
    <div id="name_site">
        <div id="name__site">кафе</div>
    </div>


    <?php include"pop-up_window.html"?>



    <!-- Fullscreen начало -->
    <button onclick="openFullscreen();">Open Fullscreen</button>
    <button onclick="closeFullscreen();">Close Fullscreen</button>

    <script>
        var elem = document.documentElement;
        function openFullscreen() {
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) { /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE11 */
                elem.msRequestFullscreen();
            }
        }

        function closeFullscreen() {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitExitFullscreen) { /* Safari */
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) { /* IE11 */
                document.msExitFullscreen();
            }
        }




    </script>



    <!-- Fullscreen конец -->
    <div id="menu">
        <div>
            <div class="link_menu"><a href="">выпечка</a></div>
            <div class="link_menu"><a href="">ссаты</a></div>
            <div class="link_menu"><a href="">горячии закуски</a></div>
        </div>
        <div>
            <div class="link_menu"><a href="">коктейли</a></div>
            <div class="link_menu"><a href="">вино</a></div>
            <div class="link_menu"><a href="">кофе</a></div>
        </div>
        <div>
            <div class="link_menu"><a href="">бронирование</a></div>
            <div class="link_menu"><a href="">банкет</a></div>
        </div>
        <div>
            <div class="link_menu"><a href="">акции</a></div>
        </div>
        <div style="float: right; margin:20px 20px 0 0;">
            <div class="header_telephone"><span style="margin:0 10px;">&#9742;</span><a href="tel:1234567890">1234-567-890</a></div>
            <div class="header_mail"><span style="margin:0 10px;">&#128386;</span><a href="mailto:vlad@webref.ru">vlad@webref.ru</a></div>

        </div>


    </div>


</section>

<style>
    #header {
        position: relative;
    }

    #name_site {
        z-index: 2;
        position: absolute;
        margin: auto;
        top: 20px;
        left: 20px;
    }

    #name__site {
        font-size: 150px;
        color: #fff;
    }

    #menu {
        width: 500px;
        z-index: 2;
        position: absolute;
        margin: auto;
        right: 10px;
        top: 20px;
    }

    .link_menu {
        margin: 10px;
        display: inline;
        font-size: 25px;
    }

        .link_menu:hover {
            border-bottom: 1px solid red;
        }

    a {
        text-decoration: none;
    }

    .header_telephone {
        font-size: 23px;
    }

    .header_mail {
        font-size: 23px;
    }

    a {
        color: #fff;
    }
</style>

