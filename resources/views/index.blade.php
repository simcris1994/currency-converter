<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #d9ded9;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .container {
            margin-top: auto;
            margin-bottom: auto;
        }

        .div-border {
            border: 2px solid #8b8f8b;
            border-radius: 10px;
        }

        .input-border {
            border: 1px solid #8b8f8b;
            border-radius: 5px;
        }

        #button-container {
            display: flex;
            justify-content: left;
            align-items: center;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>

    <title>Currency converter</title>
</head>
<body>

    <div class="container col-4 align-self-center">
        <h3 class="mt-3 mb-3 text-center">Currency converter</h3>
        <div class="div-border">
            <div class="row justify-content-center mt-4">
                <div class="col-4">
                    <div class="input-group input-border">
                        <input type="text" class="form-control" aria-label="From" id="from" value="1">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group input-border">
                        <select class="custom-select" id="list1">
                            @foreach($currencies as $curr)
                                <option value={{$loop->index+1}}>{{$curr}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <button id="switch" type="button" class="btn btn-default" aria-label="Left Align">
                    <i class="fa fa-refresh" aria-hidden="true"></i>
                </button>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-4">
                    <div class="input-group input-border">
                        <input type="text" class="form-control" aria-label="To" id="to" value="1">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group input-border">
                        <select class="custom-select" id="list2">
                            @foreach($currencies as $curr)
                                <option value={{$loop->index+1}}>{{$curr}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <p class="text-justify font-weight-bold" id="info"></p>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/fb02e4ee0c.js"></script>
{!! Html::script('js/convert.js') !!}
</body>
</html>