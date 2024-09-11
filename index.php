<?php
function adminer_object() {
    include_once "./plugins/plugin.php";

    // Plugins auto-loader.
    foreach (glob("plugins/*.php") as $filename) {
        include_once "./$filename";
    }
    
    $plugins = array(
        new AdminerLoginOtp(base64_decode('YOUR_CODE')),
        // Color variant can by specified in constructor parameter.
        new AdminerTheme(),
        // new AdminerTheme("default-orange"),
        // new AdminerTheme("default-blue"),
        // new AdminerTheme("default-green"),
        // new AdminerTheme("default-blue"),
    );
    
    return new AdminerPlugin($plugins);
}

// store original adminer.php somewhere not accessible from web
include "../../adminer-4.8.1.php";