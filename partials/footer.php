<footer>
    <div class="foot_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="foot_box">
                        <h3>Disclaimer</h3>
                        <p>Get My Certification Done provides legitimate exam support services in compliance with
                            all applicable laws and regulations. By using our services, you agree not to
                            misrepresent the assistance received or share access beyond your license. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="foot_box">
                        <div class="foot_box">
                            <h3>Useful Links</h3>
                            <ul>
                                <li><a href="contact-us">Contact Us</a></li>
                                <li><a href="terms-conditions">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot_bot">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>&copy; Copyright 2024 getmycertificationdone.com All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- pop up window -->
<div class="modal" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="line"></div>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                    class="fas fa-times"></i></button>
            <div class="pop_heading">
                <h5>Signup for 50% Discounts – Only 5 Slots Remaining </h5>
            </div>
            <div class="modal-body ">
                <div id="popupform" class="inform">
                    <form action="/backend/action/action" method="POST">
                        <input type="hidden" name="type" value="contactForm">
                        <div class="row gy-3">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="field">
                                    <span class="pop_icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input type="text" name="name" placeholder="Name" class="form-control"
                                        required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="field">
                                    <span class="pop_icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <input type="email" name="email" placeholder="Email" class="form-control"
                                        required="required" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="field">
                                    <span class="pop_icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <input type="number" name="phone" placeholder="Phone Number"
                                        class="form-control" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="field">
                                    <span class="pop_icon"><i class="fas fa-comment-alt"></i></span>
                                    <textarea class="form-control" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="field field-btn">
                                    <button type="submit" class="pop_btn" name="popup_form">Sign-Up Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p style="text-align : end;margin-top: 10px;">*Terms &amp; Conditions Apply</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- WHATSAPP CHAT SCRIPT -->
<div class="navbar-fixed-bottom">
    <div class="col-md-12 whappfooter">
        <a href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_no ?>&amp;text=Hi%20getmycertificationdone.com,"
            class="float" target="_blank"> <i class="fab fa-whatsapp"></i>Whatsapp Now</a>
    </div>
</div>
<!-- WHATSAPP CHAT SCRIPT END -->


<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"
    integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.responsive').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1241,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.slider2').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.slider3').slick({
        infinite: true,
        vertical: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        verticalSwiping: true,
        dots: true,
    });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66be8dca146b7af4a43af502/1i5c5joho';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>