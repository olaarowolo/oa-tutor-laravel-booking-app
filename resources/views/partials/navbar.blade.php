<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    nav {
        background-color: white;
        padding: 10px;
    }

    .nav-links {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    .nav-links li {
        margin: 0 15px;
    }

    .nav-links a {
        color: black;
        text-decoration: none;
        font-weight: bold;
    }

    .nav-links a:hover {
        text-decoration: underline;
    }

    @media (max-width: 600px) {
        .nav-links {
            flex-direction: column;
            align-items: center;
        }

        .nav-links li {
            margin: 10px 0;
        }
    }
</style>



<style>
    <style>

    /* General Styles */
    .nav-links {
        display: flex;
        list-style: none;
    }

    .nav-links li {
        margin: 0 15px;
    }

    .menu-icon {
        display: none;
        font-size: 2rem;
        cursor: pointer;
    }

    .menu-toggle {
        display: none;
    }

    /* Media Query for Smaller Screens */
    @media (max-width: 600px) {
        .nav-links {
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            width: 100%;
            height: 18.3em;

        }

        .nav-links li {
            margin: 5px 0;

        }

        .menu-icon {
            display: block;
            position: absolute;
            top: 35px;
            right: 30px;
        }

        /* When checkbox is checked, show the menu */
        .menu-toggle:checked+.menu-icon+.nav-links {
            display: flex;
        }
    }
</style>

<style>
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    label .menu {
        position: absolute;
        right: -100px;
        top: -100px;
        z-index: 100;
        width: 200px;
        height: 200px;
        background: #FFF;
        border-radius: 50% 50% 50% 50%;
        -webkit-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
        box-shadow: 0 0 0 0 #FFF, 0 0 0 0 #FFF;
        cursor: pointer;

    }

    label .hamburger {
        position: absolute;
        top: 135px;
        left: 50px;
        width: 30px;
        height: 2px;
        background: #69D2e7;
        display: block;
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
    }

    label .hamburger:after,
    label .hamburger:before {
        -webkit-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
        content: "";
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        background: #69d2e7;
    }

    label .hamburger:before {
        top: -10px;
    }

    label .hamburger:after {
        bottom: -10px;
    }

    label input {
        display: none;
    }

    label input:checked+.menu {
        box-shadow: 0 0 0 100vw #FFF, 0 0 0 100vh #FFF;
        border-radius: 0;

    }

    label input:checked+.menu .hamburger {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);

    }

    label input:checked+.menu .hamburger:after {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        bottom: 0;

    }

    label input:checked+.menu .hamburger:before {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        top: 0;

    }

    label input:checked+.menu+ul {
        opacity: 1;
    }

    label ul {
        z-index: 200;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        opacity: 0;
        -webkit-transition: .25s 0s ease-in-out;
        transition: .25s 0s ease-in-out;
    }

    label a {
        margin-bottom: 1em;
        display: block;
        color: #f38630;
        text-decoration: none;

    }



    /* General Styles */
    .nav-links {
        display: flex;
        list-style: none;
    }

    .nav-links li {
        margin: 0 15px;
    }

    .menu-icon {
        display: none;
        font-size: 2rem;
        cursor: pointer;
    }

    .menu-toggle {
        display: none;
    }

    /* Media Query for Smaller Screens */
    @media (max-width: 600px) {
        .nav-links {
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.95);
            width: 100%;
            height: 18.3em;

        }

        .nav-links li {
            margin: 5px 0;

        }

        .menu-icon {
            display: block;
            position: absolute;
            top: 35px;
            right: 30px;
        }

        /* When checkbox is checked, show the menu */
        .menu-toggle:checked+.menu-icon+.nav-links {
            display: flex;
        }
    }
</style>

<nav>
    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <label for="menu-toggle" class="menu-icon">&#9776;</label>

    <ul class="nav-links">
        <li><a href="/">Home</a></li>
        <li><a href="/eleven-plus">11+</a></li>
        <li><a href="/key-stage-1">KS-1</a></li>
        <li><a href="/key-stage-2">KS-2</a></li>
        <li><a href="/key-stage-3">KS-3</a></li>
        <li><a href="/coding4kids">Coding4Kids</a></li>
        <li><a href="/booking-policy">Booking Policy</a></li>
    </ul>

</nav>
