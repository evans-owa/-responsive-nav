<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
                $(function() {
                    $(".toggle").on("click",function(){

                        if($(".item").hasClass("active")){
                            $(".item").removeClass("active")
                        }
                        else{
                            $(".item").addClass("active")
                        }
                    })
                });
    </script>
</head>
<body>
    <nav>
    <ul class="menu">
        <li class="logo"><a href="#">Logo</a></li>
        <li class="item"><a href="#">Simps</a></li>
        <li class="item"><a href="#">Dust</a></li>
        <li class="item"><a href="#">Not Simps</a></li>
        <li class="item"><a href="#">Always Simps</a></li>
        <li class="item button"><a href="#">Login</a></li>
        <li class="item button secondary"><a href="#">Sign up</a></li>
        <li class="toggle"><a href="#"><span class="bars"></span></a></li>
    </ul>
    </nav>

    <main>

    </main>
</body>

</html>
