<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Styles for the email content */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f5f5f5;
        }

        .email-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .email-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Styles for headings */
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #3498db;
            /* Blue color */
        }

        /* Styles for text */
        p {
            font-size: 16px;
            line-height: 1.5;
            color: #666;
            /* Gray color */
        }

        /* Styles for list items */
        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            margin-bottom: 10px;
        }

        strong {
            color: black;
            /* Red color */
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Welcome to Our Platform</h1>
        </div>
        <div class="email-content">
            <h2>Your Account Information</h2>
            <p>Hello, <strong>{{ $mailData['admin'] }}</strong></p>
            <p>Here is customer account information:</p>
            <ul>
                <li><p><strong>Nama :</strong> {{ $mailData['nama'] }} </p></li>
                <li><p><strong>Email :</strong> {{ $mailData['email'] }} </p></li>
                <li><p><strong>Password :</strong> {{ $mailData['password'] }}</p></li>
            </ul>
            <p>Please keep this information secure and do not share it with anyone.</p>
        </div>
    </div>
</body>
</body>

</html>
