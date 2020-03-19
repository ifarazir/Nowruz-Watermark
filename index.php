<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>واترمارک ساز</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="input-group mb-3"
                style="position: absolute; top: 10px; left: 10px; width: 20%;font-family: Dana;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">نام</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
                <button class="w-100 mt-3 rounded-pill btn btn-success">ثبت</button>
            </div>
            <img src="Nowruz.jpg" id="imagee" alt="Nowruz99"
                style="position: absolute; top: 50%; left: 50%;transform: translate(-50%,-50%); height: 100%;">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="watermark.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                var textt = $('input').val();
                $('#imagee').watermark({
                text: textt,
                textWidth: 1000,
                textColor: '#FFF',
                textBg: 'rgba(0,0,0,0)',
                opacity: 1,
                gravity: 'nw',
                textSize: 100,
                margin: 12,
                done: function(imgURL){this.src=imgURL;}
            });
            });
        });
    </script>
</body>

</html> 