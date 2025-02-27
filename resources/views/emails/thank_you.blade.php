<!-- resources/views/emails/thank_you.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 100px;
        }

        .header h1 {
            color: #333;
            font-size: 24px;
        }

        .content p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        .content strong {
            color: #333;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="https://res.cloudinary.com/dzcfujysw/image/upload/v1733744647/bgg_logo_bvekrs.png" alt="BGG Entertainment Logo">
    </div>
    <h1>Thank You, {{ $name }}!</h1>
    <p>Thank you for contacting us. We will get back to you shortly.</p>
    <div class="footer">
        <p>Thank you for reaching out to us!</p>
        <p>Visit our website: <a href="https://bgg-website.yhhm.org/">www.bgg-website.yhhm.org</a></p>
    </div>
</body>

</html>