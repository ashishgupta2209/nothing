<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reivise ChatBOT</title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
    <style>
        /* Ensure the body takes up the full height of the viewport */
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
            /* Prevent horizontal scrolling */
        }

        /* Style the chatbot container to cover the full viewport */
        #myLandbot {
            width: 100vw;
            /* 100% of the viewport width */
            height: 100vh;
            /* 100% of the viewport height */
            position: absolute;
            top: 0;
            left: 0;
        }
        nav {
            z-index: 500;
        }
    </style>
</head>

<body>
    <!-- Include the nav bar using php -->
    <?php include 'navbar.php' ?>
    <!-- navbar ends here -->

    <script SameSite="None; Secure" src="https://cdn.landbot.io/landbot-3/landbot-3.0.0.js"></script>
    <div id="myLandbot" class="mt-5"></div>
    <script>
        var myLandbot = new Landbot.Container({
            container: '#myLandbot',
            configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-2601309-NOVPMTT6E64YB3HN/index.json',
        });
    </script>


    <!-- Embed code for Landbot -->
    <script id="landbot-script" src="https://cdn.landbot.io/landbot.min.js" data-landbot-id="myLandbot" async></script>
</body>

</html>