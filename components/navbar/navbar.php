<?php
    $toggleLogIn = "toggleLogIn()";
?>
<div class="navbar__container">
    <div class="navbar_shadow"></div>
    <nav class="navbar">
        <!-- <div class="drawertogglebutton__container">
            <button class="toggle-button" onclick="drawerToggleClickHandler()" style="cursor: pointer">
                <div class="toggle-button__line"></div>
                <div class="toggle-button__line"></div>
                <div class="toggle-button__line"></div>
            </button>
        </div> -->
        <div class="navbar__logo">
            <img src="src/navLogo.png" alt="logo aqui" class="navlogo">
            <a href=""><legend>Webex Calling</legend></a>
        </div>
        
        <ul class="navbar__options">
            <div class="left">
                <li onclick="<?php       ?>" class="navbar__item">Home</li>
                <li onclick="<?php       ?>" class="navbar__item">About</li>
                <li onclick="<?php       ?>" class="navbar__item">All courses</li>
            </div>
            <div class="right">
                <li onclick="<?php echo $toggleLogIn; ?>" class="navbar__item right">Log in</li>
            </div>
        </ul>
    </nav>

</div>
<script>
    //Log in
    toggleLogIn = (event, target) => {
        console.log("Event:", event)
        console.log("Target:", target)
        $('#login').toggle();
    }
    //
    handleNavLink = (event, link) => {
        console.log(link);
        ( event.metaKey || event.ctrlKey ) ? window.open(link) : window.location = link;
    }
</script>