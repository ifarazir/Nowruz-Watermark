<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>واترمارک ساز</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .dana {
            font-family: 'dana';
        }

        #imagee {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-7 shadow rounded p-3 border">
                <div class="form-group mb-3 text-right dana">
                    <label for="TabrikGoo">نام تبریک گوینده</label>
                    <input type="text" class="form-control text-right" dir="rtl" id="TabrikGoo" aria-describedby="TabrikGoo" placeholder="نام تبریک گوینده">
                </div>
                <div class="form-group mb-3 text-right dana">
                    <label for="Mabrook">نام مبروک</label>
                    <input type="text" class="form-control text-right" dir="rtl" id="Mabrook" aria-describedby="Mabrook" placeholder="نام مبروک">
                </div>
                <button class="w-100 mt-3 rounded-pill btn btn-success dana">ثبت</button>
                <h1 id="download-text" class="dana"></h1>
            </div>
            <div class="col-md-5">
                <a download="custom-filename.jpg" href="#" id="download-link" title="ImageName">
                    <img src="Poster.jpg" id="imagee" alt="Nowruz99">
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                        $("#download-link").attr("href", imgURL);
                        window.alert('hi1');
                    }
                });
                ('#imagee').watermark({
                    text: TabrikGoo,
                    textWidth: 1000,
                    textColor: '#FFF',
                    textBg: 'rgba(0,0,0,0)',
                    opacity: 1,
                    gravity: 's',
                    textSize: 100,
                    margin: 12,
                    done: function(imgURL) {
                        this.src = imgURL;
                        $("#download-link").attr("href", imgURL);
                        window.alert('hi2');
                    }
                });
            });
        });
    </script>
</body>

</html>