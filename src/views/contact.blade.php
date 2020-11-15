<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>

    <h1>Contact Us any time</h1>

    <form action="{{ route('contact') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Your Name"><hr>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter Your E-mail"><hr>

        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="2" placeholder="Enter your message"></textarea><hr>

        <input type="submit" value="Submit">

    </form>
    
</body>
</html>