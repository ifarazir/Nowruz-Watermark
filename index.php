<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>واترمارک ساز</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    #imagee {
        width: 100%;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="input-group mb-3"
                style="margin: 15px;font-family: Dana;    display: flex;
    justify-content: center;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">نام</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
                <button class="w-100 mt-3 rounded-pill btn btn-success">ثبت</button>
                <h1 id="download-text" style="    font-size: 30px;
    font-weight: bold;
    margin-top: 10px;"></h1>
            </div>
            <div>
            <a download="custom-filename.jpg" href="#" id="download-link" title="ImageName">
            <img src="Nowruz.jpg" id="imagee" alt="Nowruz99">
</a>

            </div>

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
                done: function(imgURL){this.src=imgURL;$("#download-link").attr("href", imgURL);}
            });

            $("#download-text").append("برای دانلود روی عکس کلیک کنید");
            });

        });
    </script>
</body>

</html> 