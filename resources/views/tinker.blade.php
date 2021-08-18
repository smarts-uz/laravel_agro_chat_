<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BotMan Studio</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap");
        #popupIframe, #chatIframe {float: left! important; right: auto! important;}

        body {
            background-color: #ececec;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cg fill='%23c7c7c7' fill-opacity='0.27'%3E%3Cpolygon fill-rule='evenodd' points='8 4 12 6 8 8 6 12 4 8 0 6 4 4 6 0 8 4'/%3E%3C/g%3E%3C/svg%3E");
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            font-family: "Open Sans", "Helvetica", sans-serif;
        }


        .container {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .content {
            text-align: center;
        }

        .contact-info {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            background-color: #e6e6e6;
            font-family: "Open Sans", "Helvetica", sans-serif;
        }
        .chat-box {
            width: 100%;height: 20%;padding: 0.2rem 1rem;display: flex;align-items: center;overflow-y: auto;
        }
        .input-area {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 1.5rem 2rem;
            justify-content: center;
        }

        .message {
            padding: 0.3rem 1rem;margin: 0.5rem 0;border-radius: 7px;width: fit-content;
        }
        .message.primary {
            text-align: right;background-color: #d8d8d8;margin-left: auto;
        }
        .message.secondary {
            text-align: left; background-color: #98FB98;margin-right: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="contact-info">
        <h3>boshlash uchun /start ni yuboring</h3>
        <button class="btn btn-primary">yuborish</button>
    </div>
    <div class="content" id="app">
        <botman-tinker api-endpoint="/botman"></botman-tinker>
    </div>

    <div class="input-area"></div>
</div>

<script src="/js/app.js"></script>

<script>
    let ull = document.getElementsByClassName('btn')
    for(let i of ull) {
        if(i.textContent == "") {
            i.style.display = "none"
        }
    }
    let wrappInp = document.getElementsByClassName('input-area')
    let ul = document.getElementsByClassName('ChatLog')
    let ChatInput = document.getElementsByClassName('ChatInput')
    let attachment = document.getElementsByTagName('label')
    let wrap = ChatInput[0].parentElement
    attachment[0].classList.add('fas')
    attachment[0].classList.add('fa-paper-plane')

    ChatInput[0].value = "/"
    wrappInp[0].appendChild(ChatInput[0])
    wrappInp[0].appendChild(attachment[0])
</script>

</body>
</html>

<script>
    let div = document.getElementById('botmanWidgetRoot')
    console.log(div)
</script>