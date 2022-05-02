<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="google-site-verification" content="k--XHwTUeUYrlgJ9UJbrbEtcZ5-8Ch3qOd_Yjiyj_DY" />
  <link rel="icon" type="image/x-icon" href="https://www.hndev.tech/public/storage/logoasset/logoovan.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="title" content="HNDev.Tech - Blog Chia Sẻ Tri Thức" />
  <meta name="abstract" content="HNDev.Tech - Blog Chia Sẻ Tri Thức">
  <meta name="keywords" content="Hndev tech, Blog Chia Sẻ Tri Thức, HNdev, Hiếu Nghĩa Blog, Tri thức xung quanh chúng ta, học hỏi kinh nghiệm, chia sẻ tương lai">
  <meta content="INDEX,FOLLOW" name="robots">
  <meta name="revisit-after" content="1 days" />
  <meta name="copyright" content="Hiếu Nghĩa Cules">
  <meta name="author" content="Hiếu Nghĩa Cules">
  <meta name="GENERATOR" content="Hiếu Nghĩa Cules">
  <meta http-equiv="content-language" content="vi" />
  <meta property="og:locale" content="vi_VN">
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
  <meta name="description" content="Trang blog này nhằm lưu lại những trải nghiệm và những thông tin bổ ích mà mình đã thu nhặt được trong quá trình học tập cũng như theo đuổi đam mê trong cuộc sống.

Những bài viết trên blog này sẽ có thể là những kiến thức của bản thân, hay là những thứ hay ho mình sưu tầm trên mạng.">
  <meta property="og:description" content="trang blog này nhằm lưu lại những trải nghiệm và những thông tin bổ ích mà mình đã thu nhặt được trong quá trình học tập cũng như theo đuổi đam mê trong cuộc sống.

Những bài viết trên blog này sẽ có thể là những kiến thức của bản thân, hay là những thứ hay ho mình sưu tầm trên mạng.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HNDev.Tech - Blog Chia Sẻ Tri Thức</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/show/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/show/themify-icons/themify-icons.css')}}">
</head>
<style>
    .thum_arti {
        margin-bottom: 18px;
    }
</style>

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
    <header class="">
        <div class="container">
            <div class="row inserrt">

            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">aaaa</li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1">bbb</li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2">cccc</li>
                            </ol>
                            <div class="carousel-inner">

                                @foreach($slider as $key=>$item)
                                <div class="carousel-item {{ $key==0 ? 'active' :''}} ">
                                    <div class="slide_list">
                                        <img class="d-block w-100 slidercode" src="{{$item->img_patch}}" alt="{{$item->img_name}}">
                                        <div class="slide_content">
                                            <div class="slide_title">
                                                {{$item->name}}
                                            </div>
                                            <div class="slide_subtitle">
                                                {{$item->descript}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="mb-4 marquee_sl">
                            <marquee width="100%">
                                @foreach($articals as $artical)
                                <a href="{{route('Home.articalsshow',$artical->id)}}" class="tab">&#10149 {{$artical->title}} </a>
                                @endforeach
                            </marquee>
                            <div class="label_title">
                                Tiêu điểm|
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="list-group card">
                        <div class="card-header header_card">Bài viết mới</div>
                        <div class="list_artical list-group-item">

                            @foreach($articals as $artical)
                            <div class="card col-md-12 artical_item mb-1">
                                <a href="#!" class=" col-md-4"><img class=" thum_arti" src="{{$artical->feature_img}}" alt="{{$artical->title}}" /></a>
                                <div class="card-body arti_card col-md-8">

                                    <h2 class="card-title h4 card_title" title="{{$artical->title}}">{{$artical->title}}</h2>
                                    <p class="card-text card_subtitle">{{Str::limit($artical->subtitle, 150)}}</p>
                                    <a class="btn btn-primary mb-2" href="{{route('Home.articalsshow',$artical->id)}}">Đọc Ngay →</a>
                                    <div class="small text-muted day_arti">{{$artical->created_at}}</div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <!-- <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Trước</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!"></a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Sau</a></li> -->{{ $articals->onEachSide(15)->links() }}
                        </ul>
                    </nav>
                </div>




                <div class="col-md-3">
                    <div class="card mb-2">
                        <div class="card-header header_card">Tìm kiếm</div>
                        <div class="card-body">
                            <form action="{{route('Home.searchshow')}}" method="GET">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Bạn muốn tìm..." name="content_search" aria-label="Bạn muốn tìm..." aria-describedby="button-search" />
                                    <button class="btn btn-primary btn_search" id="button-search" type="submit"><i class="nav-icon fas ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="list-group card">
                        <div class="card-header header_card">Danh mục</div>
                        @foreach($LcatePa as $catePa)
                        <a href="{{$catePa->getchil->count()==0 ?route('category.articals',['slug'=>$catePa->slug,'id'=>$catePa->id]):'#'.$catePa->id}}" data-toggle="{{$catePa->getchil->count()!=0 ?'collapse':''}}" class="list-group-item d-flex justify-content-between align-items-center dropcola">
                            {{$catePa->name}}
                            <i class="{{$catePa->getchil->count()!=0 ?'ti-angle-double-down':''}} collasp"></i>

                        </a>
                        <div class="collapse" id="{{$catePa->id}}">
                            <ul>
                                @foreach($catePa->getchil as $CateChil)
                                <li>
                                    <a href="{{ route('category.articals',['slug'=>$CateChil->slug,'id'=>$CateChil->id]) }}" class="dropcola">{{$CateChil->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </ul>
                    <div class="fb-page mt-4" data-href="https://www.facebook.com/hndevtech/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/bongdapow/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bongdapow/">beeb.vn</a></blockquote>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <footer class="py-5 bg-dark">

        <div class="container">
            <div class="flex_itemcontact">
                @foreach($config as $item)
                @if($item->config_key=='facebook_link')<a href="{{$item->config_value}}" class="icon_ft"><i class="ti-facebook"></i></a>@endif
                @if($item->config_key=='youtube_link')<a href="{{$item->config_value}}" class="icon_ft"><i class="ti-youtube"></i></a>@endif
                @if($item->config_key=='instagram_link')<a href="{{$item->config_value}}" class="icon_ft"><i class="ti-instagram"></i></a>@endif
                @if($item->config_key=='github_link')<a href="{{$item->config_value}}" class="icon_ft"><i class="ti-github"></i></a>@endif
                @endforeach
            </div>

            <p class="m-0 text-center text-white">
                @foreach($config as $item)
                @if($item->config_key=='web_name'){{ $item->config_value }}Copyright &copy; @endif
                @if($item->config_key=='year_web'){{ $item->config_value }}Designed by @endif
                @if($item->config_key=='dev_name'){{ $item->config_value }}@endif
                @endforeach



            </p>

        </div>
    </footer>



</body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="VVurFPD3"></script>
<script src="{{asset('asset/show/appjs.js')}}">
</script>
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