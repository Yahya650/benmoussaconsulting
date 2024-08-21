<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Message Notification</title>
</head>

<body>
    <h1>New Message Notification</h1>

    {{-- @dd($message->headers->headers->from) --}}
    {{-- {{ json_encode($message_content) }} --}}

    <p><strong>Full Name:</strong> {{ $message_content->full_name }}</p>
    <p><strong>Email:</strong> {{ $message_content->email }}</p>
    <p><strong>Phone Number:</strong> {{ $message_content->phone_number }}</p>
    <p><strong>Subject:</strong> {{ $message_content->subject }}</p>
    <p><strong>Message:</strong> {{ $message_content->text }}</p>
</body>

</html>
