<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>واترمارک ساز</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="input-group mb-3" style="position: absolute; top: 10px; left: 10px; width: 20%;font-family: Dana;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">نام تبریک گوینده</span>
                </div>
                <input type="text" class="form-control" id="TabrikGoo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="Mabrook">نام مبروک</span>
                </div>
                <input type="text" class="form-control" id="Mabrook" aria-label="Sizing example input" aria-describedby="Mabrook">
                <button class="w-100 mt-3 rounded-pill btn btn-success">ثبت</button>
            </div>
            <img src="Poster.jpg" id="imagee" alt="Nowruz99"
                style="position: absolute; top: 50%; left: 50%;transform: translate(-50%,-50%); height: 100%;">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="watermark.min.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("button").click(function() {
                var TabrikGoo = $('#TabrikGoo').val();
                var MatnTabrik = $('#MatnTabrik').val();
                var Mabrook = $('#Mabrook').val();
                $('#imagee').watermark({
                    text: TabrikGoo,
                    textWidth: 1000,
                    textColor: '#FFF',
                    textBg: 'rgba(0,0,0,0)',
                    opacity: 1,
                    gravity: 'nw',
                    textSize: 100,
                    margin: 12,
                    done: function(imgURL) {
                        this.src = imgURL;
                    }
                });
            });
        });
    </script>
</body>

</html>