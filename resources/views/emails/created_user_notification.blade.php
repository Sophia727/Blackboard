<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User created successfully!</title>
</head>
<body>
    <h2>Email Notification: user account created on Blackboard</h2>
    <p>Greetings from University, and a warm welcome to our Community! </p>
    
    <p>Your Info:</p>
    <p>
        <strong>Name: </strong> {{$user['name']}}
        <strong>Email: </strong> {{$user['email']}}
        <strong>Name: </strong> {{$user['pass']}}
    </p>
</body>
</html>