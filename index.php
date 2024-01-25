<?php
$credentialsFile = file_exists('credentials-dev.json') ? 'credentials-dev.json' : 'credentials.json';
$credentialsJson = file_get_contents($credentialsFile);
$credentials = json_decode($credentialsJson);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta name="Cross-Origin-Opener-Policy" content="same-origin-allow-popups">

    <title>Test google social login</title>
</head>

<body>

    <div id="g_id_onload" data-client_id="<?php echo $credentials->client_id ?>" data-context="signin" data-ux_mode="popup" data-callback="loginCallback" data-auto_prompt="false">
    </div>

    <div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="outline" data-text="signin_with" data-size="large" data-logo_alignment="left">
    </div>


    <script src="https://accounts.google.com/gsi/client" async></script>
    <script src="script.js"></script>
</body>

</html>