<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>INSTITUT KT SKILL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('website/resources/img/logokt.jpeg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('website/resources/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('website/resources/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        .img--logo{
            width: 60px;
            height: auto;
            margin: 4px;
        }
    </style>
</head>

<body>

@yield('content')

<!-- Footer -->
<div class="container-fluid position-relative bg-dark text-white-50 py-0" style="margin-top: 90px;">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-5 mb-4">
                <h3 class="text-white mb-4">Lokasi</h3>
                <p><i class="fas fa-map-marker-alt mr-2"></i>F18-F27 Kawasan Perindustrian Chendering, <br>21080 Kuala Terengganu, Terengganu</p>
                <div>
                    <!-- Google Map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.9580369177634!2d103.15940381476466!3d5.2692227961771625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b7bfe643d18631%3A0x95c5a3124ba61002!2sInstitut%20KT%20Skill!5e0!3m2!1sen!2smy!4v1674720084168!5m2!1sen!2smy"
                            width="300"
                            height="200"
                            style="border:0;"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0">
                    </iframe>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <h3 class="text-white mb-3">Hubungi Kami</h3>
                <p><i class="fas fa-phone-alt mr-2"></i>016-6198849</p>
                <p><i class="fa fa-fax mr-2"></i>09-6164410</p>
                <p><i class="fa fa-envelope mr-2"></i>ktskill@ktsi.edu.my</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="text-white mr-4" href="https://www.facebook.com/ktskillterengganu/"><i class="fab fa-2x fa-facebook-f"></i></a>
                    <a class="text-white mr-4" href="https://instagram.com/ktskill_chendering?igshid=YmMyMTA2M2Y="><i class="fab fa-2x fa-instagram"></i></a>
                    <a class="text-white mr-4" href="https://www.tiktok.com/@ktskill_chendering?_t=8ZKvbgfRP1e&_r=1" style="margin-top: -6px"><i class="bi bi-tiktok fa-2x"></i></a>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <h3 class="text-white mb-4">Rakan Industri Institut KT Skill</h3>
                <img class="img--logo" src="{{ asset('website/resources/img/AIMS.png') }}" title="Aims-Global Holdings Sdn Bhd">
                <img class="img--logo" src="{{ asset('website/resources/img/JPK.jpg') }}" title="Jabatan Pembangunan Kemahiran (JPK)">
                <img class="img--logo" src="{{ asset('website/resources/img/Sumai.png') }}" title="Sumai Engineering Sdn Bhd">
                <img class="img--logo" src="{{ asset('website/resources/img/anmesra.jpg') }}" title="Anmesra Sdn Bhd">
                <img class="img--logo" src="{{ asset('website/resources/img/yem.jpg') }}" title="Yem Engineering">
                <img class="img--logo" src="{{ asset('website/resources/img/changhuat.png') }}" title="Changhuat Plastic Industries (Senai) Sdn Bhd">
                <img class="img--logo" src="{{ asset('website/resources/img/NFE.png') }}" title="NF Engineering & Services">
                <img class="img--logo" src="{{ asset('website/resources/img/msetlogo.png') }}" title="MSET Holdings Sdn Bhd">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white-50 border-top py-3" style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0">Copyright &copy; <a class="text-white" href="#">KT Skill Institute</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <p class="m-0">Designed by <a class="text-white" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top">
    <i class="fa fa-angle-double-up"></i>
</a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('website/resources/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('website/resources/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('website/resources/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('website/resources/lib/owlcarousel/owl.carousel.min.js')}}"></script>


<!-- Template Javascript -->
<script src="{{ asset('website/resources/js/main.js') }}"></script>

<script>

    var $animation_elements = $('.animation-element');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
            } else {
                $element.removeClass('in-view');
            }
        });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');

</script>

</body>
</html>

