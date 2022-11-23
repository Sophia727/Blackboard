<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User created successfully!</title>
</head>
<body>
    <h2>Email Notification: New user on Blackboard</h2>
    <p>Greetings from University, and a warm welcome to our Community! </p>
    
    

    <p>Kindly recieve your login account information which you can log with direclyon our portal: http://127.0.0.1:8000/login :</p>
    <ul>
        <li><strong>Name: </strong> {{$user['name']}}</li>
        <li><strong>Email: </strong> {{$user['email']}}</li>
        <li><strong>Password: </strong> {{$user['pass']}}</li>
    </ul>

    <p>For any question or further in formation, please contact us <a href="{{route('contactUs')}}">here</a>. </p>
      
    <p>Sincerely,</p>
    <p>University Team.</p>
</body>
</html>