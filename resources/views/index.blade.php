<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Currency converter</title>
</head>
<body>

<div class="container">
    <h3>Currency converter</h3>
    <div class="row">
        <div class="col-sm">
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="From" id="from">
            </div>
        </div>
        <div class="col-sm">
            <div class="input-group mb-3">
                <select class="custom-select" id="list1">
                    @foreach($currencies as $curr)
                        <option value={{$loop->index+1}}>{{$curr["id"]}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="To" id="to">
            </div>
        </div>
        <div class="col-sm">
            <div class="input-group mb-3">
                <select class="custom-select" id="list2">
                    @foreach($currencies as $curr)
                        <option value={{$loop->index+1}}>{{$curr["id"]}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{!! Html::script('js/convert.js') !!}
</body>
</html>