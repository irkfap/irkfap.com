<!doctype html>
<html lang="en">
<head>
    <?php include_once './_header.php'; ?>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:700" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h1 {
            font-family: 'Source Sans Pro', 'Open Sans', sans-serif;
            font-size: 70pt;
            font-weight: 700;
            letter-spacing: -1pt;
            color: #F00;
            text-align: center;
        }
        .commi {
            vertical-align: -7pt;
            vertical-align: -8%;
            transform: scale(-1, 1);
            display: inline-block;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 50pt;
            }
        }

        @media (min-width: 1000px) {
            h1 {
                font-size: 100pt;
            }
        }

    </style>
</head>
<body role="document">

<h1><nobr>COMMIN<span class="commi">☭</span></nobr> SOON</h1>

<?php require_once './_ga.php'; ?>
</body>
</html>