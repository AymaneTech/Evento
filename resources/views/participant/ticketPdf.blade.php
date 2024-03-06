<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    HELLO
</body>
</html>

    <section>
        <div class="heading flex flex-col items-center justify-center mt-16 gap-4">
            <h1 class="text-5xl font-bold">{{ $booking->participant->name }}'s {{ $booking->event->title }} </h1>
            <h2 class="text-5xl font-bold">{{ $booking->event->date->format('Y') }} Ticket</h2>
            <p>Go Back To The Home Page To Get Your Free Ticket</p>
            <a href="/" class="inline-flex items-center px-6 py-2.5 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full hover:bg-yellow-400 focus:bg-yellow-400">Go back Home</a>
        </div>
        <div class="ticket container mx-auto w-[900px] bg-yellow-600 mt-12 rounded-xl p-8">
            <div class="header flex justify-around">
                <div class="logo">
                    <h2>Evento</h2>
                </div>
                <div class="participant flex gap-4 items-center">
                    <div class="info flex flex-col">
                        <strong>{{ $booking->participant->name }}</strong>
                        <span>{{ $booking->participant->email }}</span>
                    </div>
                    <img class="w-20 h-20 rounded-full" src="{{ asset("storage/images/". $booking->participant->avatar->path) }}" alt="">
                </div>
            </div>
            <h1 class="font-bold text-4xl text-center my-4">{{ $booking->event->title }}</h1>
            <div class="details flex justify-around">
                <div class="place">
                    <strong>place</strong>
                    <p>{{ $booking->event->location }}</p>
                </div>
                <div class="date">
                    <strong>date</strong>
                    <p>{{ $booking->event->date->format("d M Y") }}</p>
                </div>
                <div class="time">
                    <strong>Time</strong>
                    <p>starting from: {{ $booking->event->date->format("H:i") }}</p>
                </div>
                <div class="organiser">
                    <strong>Organised by</strong>
                    <p>{{ $booking->event->organiser->name }}</p>
                </div>
            </div>
        </div>
        <a href=" {{ route("tickets.download", $booking->id) }}" class="inline-flex text-end items-center px-6 py-2.5 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full hover:bg-yellow-400 focus:bg-yellow-400">Download it</a>
    </section>

{{--<link rel="stylesheet"--}}
{{--      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>--}}

{{--<div class="ticket created-by-anniedotexe">--}}
{{--    <div class="left">--}}
{{--        <div class="image">--}}
{{--            <p class="admit-one">--}}
{{--                <span>ADMIT ONE</span>--}}
{{--                <span>ADMIT ONE</span>--}}
{{--                <span>ADMIT ONE</span>--}}
{{--            </p>--}}
{{--            <div class="ticket-number">--}}
{{--                <p>--}}
{{--                    #20030220--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="ticket-info">--}}
{{--            <p class="date">--}}
{{--                <span>TUESDAY</span>--}}
{{--                <span class="june-29">JUNE 29TH</span>--}}
{{--                <span>2021</span>--}}
{{--            </p>--}}
{{--            <div class="show-name">--}}
{{--                <h1>SOUR Prom</h1>--}}
{{--                <h2>Olivia Rodrigo</h2>--}}
{{--            </div>--}}
{{--            <div class="time">--}}
{{--                <p>8:00 PM <span>TO</span> 11:00 PM</p>--}}
{{--                <p>DOORS <span>@</span> 7:00 PM</p>--}}
{{--            </div>--}}
{{--            <p class="location"><span>East High School</span>--}}
{{--                <span class="separator"><i class="far fa-smile"></i></span><span>Salt Lake City, Utah</span>--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="right">--}}
{{--        <p class="admit-one">--}}
{{--            <span>ADMIT ONE</span>--}}
{{--            <span>ADMIT ONE</span>--}}
{{--            <span>ADMIT ONE</span>--}}
{{--        </p>--}}
{{--        <div class="right-info-container">--}}
{{--            <div class="show-name">--}}
{{--                <h1>SOUR Prom</h1>--}}
{{--            </div>--}}
{{--            <div class="time">--}}
{{--                <p>8:00 PM <span>TO</span> 11:00 PM</p>--}}
{{--                <p>DOORS <span>@</span> 7:00 PM</p>--}}
{{--            </div>--}}
{{--            <div class="barcode">--}}
{{--                <img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" alt="QR code">--}}
{{--            </div>--}}
{{--            <p class="ticket-number">--}}
{{--                #20030220--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<style>--}}

{{--    * {--}}
{{--        margin: 0;--}}
{{--        padding: 0;--}}
{{--        box-sizing: border-box;--}}
{{--    }--}}

{{--    body,--}}
{{--    html {--}}
{{--        height: 100vh;--}}
{{--        display: grid;--}}
{{--        font-family: "Staatliches", cursive;--}}
{{--        background: #d83565;--}}
{{--        color: black;--}}
{{--        font-size: 14px;--}}
{{--        letter-spacing: 0.1em;--}}
{{--    }--}}

{{--    .ticket {--}}
{{--        margin: auto;--}}
{{--        display: flex;--}}
{{--        background: white;--}}
{{--        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;--}}
{{--    }--}}

{{--    .left {--}}
{{--        display: flex;--}}
{{--    }--}}

{{--    .image {--}}
{{--        height: 250px;--}}
{{--        width: 250px;--}}
{{--        background-image: url("https://media.pitchfork.com/photos/60db53e71dfc7ddc9f5086f9/1:1/w_1656,h_1656,c_limit/Olivia-Rodrigo-Sour-Prom.jpg");--}}
{{--        background-size: contain;--}}
{{--        opacity: 0.85;--}}
{{--    }--}}

{{--    .admit-one {--}}
{{--        position: absolute;--}}
{{--        color: darkgray;--}}
{{--        height: 250px;--}}
{{--        padding: 0 10px;--}}
{{--        letter-spacing: 0.15em;--}}
{{--        display: flex;--}}
{{--        text-align: center;--}}
{{--        justify-content: space-around;--}}
{{--        writing-mode: vertical-rl;--}}
{{--        transform: rotate(-180deg);--}}
{{--    }--}}

{{--    .admit-one span:nth-child(2) {--}}
{{--        color: white;--}}
{{--        font-weight: 700;--}}
{{--    }--}}

{{--    .left .ticket-number {--}}
{{--        height: 250px;--}}
{{--        width: 250px;--}}
{{--        display: flex;--}}
{{--        justify-content: flex-end;--}}
{{--        align-items: flex-end;--}}
{{--        padding: 5px;--}}
{{--    }--}}

{{--    .ticket-info {--}}
{{--        padding: 10px 30px;--}}
{{--        display: flex;--}}
{{--        flex-direction: column;--}}
{{--        text-align: center;--}}
{{--        justify-content: space-between;--}}
{{--        align-items: center;--}}
{{--    }--}}

{{--    .date {--}}
{{--        border-top: 1px solid gray;--}}
{{--        border-bottom: 1px solid gray;--}}
{{--        padding: 5px 0;--}}
{{--        font-weight: 700;--}}
{{--        display: flex;--}}
{{--        align-items: center;--}}
{{--        justify-content: space-around;--}}
{{--    }--}}

{{--    .date span {--}}
{{--        width: 100px;--}}
{{--    }--}}

{{--    .date span:first-child {--}}
{{--        text-align: left;--}}
{{--    }--}}

{{--    .date span:last-child {--}}
{{--        text-align: right;--}}
{{--    }--}}

{{--    .date .june-29 {--}}
{{--        color: #d83565;--}}
{{--        font-size: 20px;--}}
{{--    }--}}

{{--    .show-name {--}}
{{--        font-size: 32px;--}}
{{--        font-family: "Nanum Pen Script", cursive;--}}
{{--        color: #d83565;--}}
{{--    }--}}

{{--    .show-name h1 {--}}
{{--        font-size: 48px;--}}
{{--        font-weight: 700;--}}
{{--        letter-spacing: 0.1em;--}}
{{--        color: #4a437e;--}}
{{--    }--}}

{{--    .time {--}}
{{--        padding: 10px 0;--}}
{{--        color: #4a437e;--}}
{{--        text-align: center;--}}
{{--        display: flex;--}}
{{--        flex-direction: column;--}}
{{--        gap: 10px;--}}
{{--        font-weight: 700;--}}
{{--    }--}}

{{--    .time span {--}}
{{--        font-weight: 400;--}}
{{--        color: gray;--}}
{{--    }--}}

{{--    .left .time {--}}
{{--        font-size: 16px;--}}
{{--    }--}}


{{--    .location {--}}
{{--        display: flex;--}}
{{--        justify-content: space-around;--}}
{{--        align-items: center;--}}
{{--        width: 100%;--}}
{{--        padding-top: 8px;--}}
{{--        border-top: 1px solid gray;--}}
{{--    }--}}

{{--    .location .separator {--}}
{{--        font-size: 20px;--}}
{{--    }--}}

{{--    .right {--}}
{{--        width: 180px;--}}
{{--        border-left: 1px dashed #404040;--}}
{{--    }--}}

{{--    .right .admit-one {--}}
{{--        color: darkgray;--}}
{{--    }--}}

{{--    .right .admit-one span:nth-child(2) {--}}
{{--        color: gray;--}}
{{--    }--}}

{{--    .right .right-info-container {--}}
{{--        height: 250px;--}}
{{--        padding: 10px 10px 10px 35px;--}}
{{--        display: flex;--}}
{{--        flex-direction: column;--}}
{{--        justify-content: space-around;--}}
{{--        align-items: center;--}}
{{--    }--}}

{{--    .right .show-name h1 {--}}
{{--        font-size: 18px;--}}
{{--    }--}}

{{--    .barcode {--}}
{{--        height: 100px;--}}
{{--    }--}}

{{--    .barcode img {--}}
{{--        height: 100%;--}}
{{--    }--}}

{{--    .right .ticket-number {--}}
{{--        color: gray;--}}
{{--    }--}}
{{--</style>--}}
