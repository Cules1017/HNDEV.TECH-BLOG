<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="k--XHwTUeUYrlgJ9UJbrbEtcZ5-8Ch3qOd_Yjiyj_DY" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="1; url=https://www.hndev.tech/">
    <link rel="icon" type="image/x-icon" href="https://www.hndev.tech/public/storage/logoasset/logoovan.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảm ơn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/show/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/show/themify-icons/themify-icons.css')}}">
</head>

<body>
    <button type="button" class="btn btn-info btn-floating btn-lg" id="btn-back-to-top">
        <i class="ti-control-eject"></i>
    </button>
    <div class="">
    <nav class=" navbar navbar-expand-lg  navbar-dark bg-dark sticky-top fixed-top">

<a class="navbar-brand bg_logo brand_logo" href="{{route('Home.index')}}">HNDEV</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('Home.index')}}">Trang chủ <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="{{route('Home.index')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bài viết
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('Home.menushow','code')}}">Lập trình</a>
                <a class="dropdown-item" href="{{route('Home.menushow','game')}}">Game</a>
                <a class="dropdown-item" href="{{route('Home.menushow','football')}}">Bóng đá</a>
                <a class="dropdown-item" href="{{route('Home.menushow','life')}}">Cuộc sống</a>
               
                <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->


            </div>

        </li>
    
        <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Giới Thiệu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('Home.aboutus')}}">Giới Thiệu</a>
                <a class="dropdown-item" href="">Nội Qui</a>
                <a class="dropdown-item" href="{{route('feedback.create')}}">Feedback</a>
                <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->


            </div>

        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{route('Home.index')}}">Ủng hộ <span class="sr-only">(current)</span></a>
        </li>

        <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{route('Home.searchshow')}}" method="GET">
        <input class="form-control mr-sm-2" type="search" name="content_search" placeholder="Tìm kiếm" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="nav-icon fas ti-search"></i></button>
    </form>
</div>
</nav>
    </div>
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <main>
        <div class="container">
            <div class="row">
                <div class="col stylethabk">
                    <div class="boder_bg">
                        .
                        <div class="tilte_thanks">Cảm ơn đã đóng góp</div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col sub_thankl">
                    
                        <div class="subtilte_thanks">Quay lại trang chủ sau  <span class="alert_red">1s</span> </div>
                    
                </div>

            </div>
            

        </div>
    </main>
    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="flex_itemcontact">
                <a href="" class="icon_ft"><i class="ti-facebook"></i></a>
                <a href="" class="icon_ft"><i class="ti-youtube"></i></a>
                <a href="" class="icon_ft"><i class="ti-instagram"></i></a>
                <a href="" class="icon_ft"><i class="ti-github"></i></a>
            </div>

            <p class="m-0 text-center text-white">Copyright &copy; </p>
        </div>
    </footer>



</body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="VVurFPD3"></script>
<script src="{{asset('asset/show/appjs.js')}}">
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="HHWYccmL"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

</html>