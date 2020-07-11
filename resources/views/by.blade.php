<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Progect</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            }


            body {
            background-color: #1d1e22;
            }

            .box {
            width: 400px;
            height: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            }

            .box span {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 38% 62% 63% 37% / 41% 44% 46% 59%;
            box-shadow: 0 0 4px rgba(255, 255, 255, .1), inset 0 0 8px rgba(255, 255, 255, .4);
            transition: background-color .2s ease;
            }

            .box span:nth-child(1) {
            animation: rotateToLeft 6s linear infinite;
            }

            .box span:nth-child(2) {
            animation: rotateToLeft 8s linear infinite;
            }

            .box span:nth-child(3) {
            animation: rotateToLeft 10s linear infinite;
            }

            .box span:nth-child(4) {
            animation: rotateToRight 12s linear infinite;
            }
            .box span:nth-child(5) {
            animation: rotateToLeft 12s linear infinite;
            }

            .box span:nth-child(6) {
            animation: rotateToRight 6s linear infinite;
            }

            .box .content{
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            color: rgba(255, 255, 255, .7);
            padding: 40px;
            font: 16px/24px Arial, sans-serif;
            }

            .box .content .title{
            font: bold 20px/28px Arial, sans-serif;
            margin-bottom: 8px;
            color: rgba(255, 255, 255, .8);
            }

            .box .content .description{
            margin-bottom: 20px;
            }

            .box .content .button{
            display: inline-block;
            padding: 12px 20px;
            border-radius: 74% 24% 44% 58% / 57% 54% 56% 74%;
            border: 1px solid #fff;
            background-color: rgba(255, 255, 255, .8);
            color: #000;
            align-self: flex-start;
            margin: 0 auto;
            transition: background-color .2s linear, color .2s linear;
            }
            

            .box:hover .button{
            background-color: transparent;
            color: #fff;
            }

            @keyframes rotateToRight {
            0% {
                transform: rotate(0);
            }
            100% {
                transform: rotate(360deg);
            }
            }

            @keyframes rotateToLeft {
            0% {
                transform: rotate(360deg);
            }
            100% {
                transform: rotate(0);
            }
            }

            .devs {
                display: flex;
                justify-content: center;
            }

            p {
                font-size: 10px;
                font-style: italic;
                opacity: 0.8;
            }
    </style>
</head>
<body>
    <div class="box">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <div class="content">
        <div class="title">DEV BY</div>
        <div class="description">
            ООО "PAVLAZ"
            <p>По заказу для УО "Беллорусская государтсвенная академия связи"</p>
        </div>
        <div class="devs">
        <a href="https://vk.com/id75904577" target="_blank" class="button">Алексей</a>
        <a href="https://vk.com/lyavontiy" target="_blank" class="button">Леонид</a>
        </div>
    </div>
    </div>
</body>
</html>