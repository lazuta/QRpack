<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QR - Packege</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


        <!-- Styles -->
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
                padding-top: 100px;
            }

            h6 {
                color: #111E92;
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

            .button button {
                background-color: #111E92;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           <div class="content">
                
                <section>
                    <div class="container">
                    <form action="check.php" method="post" class="form">
                        <div class="row">
                        <div class="col s12 m6">
                            <div class="card">
                            <div class="card-content">
                                <h6>От кого</h6>
                                <hr>
                            
                                <div class="row">
                                    <div class="input-field col s12">
                                    <input id="name_sender" type="text" class="validate" name="name_sender">
                                    <label for="name_sender">Ф.И.О. отправителя</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <input id="country" type="text" class="validate" name="country">
                                    <label for="country">Страна</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <input id="city" type="text" class="validate" name="city">
                                    <label for="city">Город</label>
                                    </div>
                                    <div class="input-field col s12">
                                    <input id="street" type="text" class="validate" name="street">
                                    <label for="street">Улица, дом, корпус, квартира</label>
                                    </div>
                                </div>
                            
                            </div>
                            </div>
                        </div>
                
                        <div class="col s12 m6">
                            <div class="card">
                            <div class="card-content">
                                <h6>кому</h6>
                                <hr>
                                <div class="row">
                                    <div class="input-field col s12">
                                    <input id="name_rec" type="text" class="validate" name="name_rec">
                                    <label for="name_rec">Ф.И.О. получателя</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <input id="country_rec" type="text" class="validate" name="country_rec">
                                    <label for="country_rec">Страна</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <input id="city_rec" type="text" class="validate" name="city_rec">
                                    <label for="city_rec">Город</label>
                                    </div>
                                    <div class="input-field col s12">
                                    <input id="street_rec" type="text" class="validate" name="street_rec">
                                    <label for="street_rec">Улица, дом, корпус, квартира</label>
                                    </div>
                
                                    <div class="input-field col s6">
                                    <input id="phone_rec" type="text" class="validate" name="phone_rec">
                                    <label for="phone_rec">Телефон</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <input id="index_rec" type="text" class="validate" name="index_rec">
                                    <label for="index_rec">Индекс</label>
                                    </div>
                                </div>
                            
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="button">
                        <button class="btn btn-success">Зарегестрировать</button>
                        </div>
                    </form>
                    </div>
                </section>

            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
