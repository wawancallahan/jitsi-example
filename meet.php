

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umroh.in Meet</title>
    
    <link rel="icon" type="image/x-icon" href="./umrohin_fav.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        #meet { padding-bottom: 10.25%; } #meet iframe { position: absolute; top: 0; left: 0; width: 100% !important; height: 100% !important; }
    </style>
</head>
<body>
    <div id="meet"></div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
    <script src='https://meet.engagemedia.org/external_api.js'></script>
    <script>
        const domain = 'meet.engagemedia.org';
        const options = {
            roomName: '<?php echo $id ?>',
            width: '100%',
            height: '100vh',
            parentNode: document.querySelector('#meet'),
            lang: 'en',
            configOverwrite: { 
                startWithAudioMuted: true, 
                prejoinConfig: {
                    enabled: false
                } 
            },
            interfaceConfigOverwrite: { 
                APP_NAME: 'UMROHIN',
                DISABLE_DOMINANT_SPEAKER_INDICATOR: true 
            },
            userInfo: {
                email: 'example@gmail.com',
                displayName: '<?php echo $name ?>'
            },
            interfaceConfigOverwrite: {
                noSsl: true,
                SHOW_JITSI_WATERMARK: false,
                HIDE_DEEP_LINKING_LOGO: true,
                SHOW_BRAND_WATERMARK: false,
                SHOW_WATERMARK_FOR_GUESTS: false,
                SHOW_POWERED_BY: false
            }
        };

        const api = new JitsiMeetExternalAPI(domain, options);
    </script>

</body>
</html>