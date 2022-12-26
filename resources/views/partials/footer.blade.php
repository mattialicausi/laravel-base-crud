<?php
$footer_info = config('footer.footer_info');
$footer_help = config('footer.footer_help');
?>

<footer class="footer">
    <div class="container">
        <div class="row align-items-center justify-content-between position-relative">
            <div class=" container-img-logo">
                <img class="footer_img" src="{{ Vite::asset('resources/img/logo-white.PNG')}}" alt="logo image">
            </div>
            <div class="d-flex align-items-start col-6">
                <div class="d-flex align-items-center col-5">
                    <ul>
                        @foreach ($footer_info as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="white  d-flex align-items-center col-6">
                    <ul class="posit">
                        @foreach ($footer_help as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div  class="decoration-footer">
                <img src="{{Vite::asset('resources/img/picture-white.PNG')}}" alt="picture decorations">
            </div>
           
            <div class="container-social col-3">
                <div class="ms-2 white icone"><i class="fa-brands fa-square-twitter"></i></div>
                <div class="ms-2 white icone"><i class="fa-brands fa-square-facebook"></i></div>
                <div class="ms-2 white icone"><i class="fa-brands fa-square-google-plus"></i></div>
                <div class="ms-2 white icone"><i class="fa-brands fa-instagram"></i></div>
                <div class="ms-2 white icone"><i class="fa-brands fa-tiktok"></i></div>
            </div>

        </div>
    </div>

</footer>