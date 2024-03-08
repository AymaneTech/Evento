<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .ticket {
            width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
            background-color: #f0f0f0;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .event-details {
            margin-bottom: 20px;
        }
        .participant {
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="ticket">
    <div class="header">
        <h1>{{ $booking->participant->name }}'s Ticket</h1>
        <h2>{{ $booking->event->title }}</h2>
    </div>
    <div class="event-details">
        <p><strong>Location:</strong> {{ $booking->event->location }}</p>
        <p><strong>Date:</strong> {{ $booking->event->date->format("d M Y") }}</p>
        <p><strong>Time:</strong> Starting from {{ $booking->event->date->format("H:i") }}</p>
        <p><strong>Organised by:</strong> {{ $booking->event->organiser->name }}</p>
    </div>
    <div class="participant">
        <p><strong>Participant:</strong> {{ $booking->participant->name }}</p>
        <p><strong>Email:</strong> {{ $booking->participant->email }}</p>
    </div>
    <div class="footer">
        <p>aymane elmaini Evento 2024</p>
    </div>
</div>
</body>
</html>
