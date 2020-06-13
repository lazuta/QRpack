<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        body {
      height: 100vh;
    }

    header {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 60px;
    }
    
    .title {
      height: 60px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .title h1 {
      font-size: 24px;
      color: #111E92;
      text-transform: uppercase;
      font-weight: bold;
      text-align: center;
    }

    section {
      width: 100%;
      border-radius: 15px 15px 0px 0px;
      padding: 15px;
      padding-top: 30px;
      display: flex;
      justify-content: center;
    }

    h6 {
      margin: 10px 0px 18px 0px;
      text-transform: uppercase;
      font-weight: bold;
      color: rgba(153, 153, 153, 0.904);
      font-size: 20px;
    }

    hr {
      margin: 0px 0px 20px 0px;
    }

    .card {
      min-height: 475px;
    }

    .button {
      display: flex;
      justify-content: center;
    }

    .row {
        display: flex;
        justify-content: center;
        margin: 0 auto;
    }

    .card {
        width: 356px;
    }

    .card-container {
        display: flex;
        justify-content: center;
    }

    .information h5 i {
        font-size: 18px;
        font-weight: 200;
        margin: 4px;
        padding: 4px;
    }

    .information h5 {
        margin: 0;
        padding: 0;
    }

    .information {
        margin: 15px 0px;
    }

    .information p{
        font-size: 16px;
    }

    .hr-inf {
        margin: 5px 0px;
    }

    .button button {
        margin: 0px 5px;
        background-color: #111E92;
    }

    .trecker {
      display: none;
    }

    .date-time {
      font-size: 7px;
      height: auto;
    }
    </style>
</head>
<body>
    <header>
    <div class="title">
      <h1>заявка принята</h1>
    </div>
  </header>

  <section>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-content ">
                    <h6>Итог</h6>
                    <hr>
                  
                    <div class="information">
                        <h5><i>От кого:</i></h5>
                        <p>{{ $packege->sender->name }}</p>
                        <p>{{ $packege->sender->city }}</p>
                        <p>{{ $packege->sender->country }}</p>
                        <p>{{ $packege->sender->street }}</p>
                    </div>

                    <div class="information">
                        <h5><i>Кому:</i></h5>
                        <p>{{ $packege->recipient->street }}</p>
                        <p>{{ $packege->recipient->city }}</p>
                        <p>{{ $packege->recipient->country }}</p>
                        <p>{{ $packege->recipient->street }}</p>
                        <p>{{ $packege->recipient->phone }}</p>
                        <p>{{ $packege->recipient->index }}</p>
                    </div>
                    
                      <p class="trecker">{{ $packege->tracker }}</p>
                    <hr class="hr-inf">
                    

                    <div class="card-container">
                        <div id="qr"></div>
                    </div>
                    
                    <hr class="hr-inf">

                    @foreach ($history as $item)
                      <div class="card-body">
                          {{$item->description}} - <span class="date-time">{{$item->created_at}}</span>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
        

        <div class="button">
            {{-- <button class="btn btn-success">Печать</button>  --}}
            <a class="btn btn-success" href = {{ route('mail.write') }}>Новая посылка</a>
        </div>
    </div>
  </section>

    <footer>
      <script src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ URL::asset('/js/qr.min.js') }}"> </script>
        <script type="text/javascript">
    
         
          let tracker = '' + document.querySelector('.trecker').innerHTML;

          if(tracker) {
            let text = tracker;
            let typeNumber = 3;
            let errorLevel = 'L';
            let qrDiv = document.getElementById('qr');
          
            let qr1 = qrcode(typeNumber, errorLevel);
          
            qr1.addData(text);
            qr1.make();
            qrDiv.innerHTML += qr1.createSvgTag(8,10);

            $(".count_element").on("click", (function() {
              ga("send", "event", "goal", "goal");
              yaCounterXXXXXXXX.reachGoal("goal");
              return true;
            }));
         }
          
        </script>
    </footer>
</body>
</html>