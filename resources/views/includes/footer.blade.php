<?php

//viewer_registration();
?>
<div class="site-section subscribe bg-light">
    <div class="container">
        <form  method="POST" action="/" class="row align-items-center" id="sub_form">
@csrf
            <div class="col-md-5 mr-auto">
                <h2>Newsletter Subcribe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aspernatur ut at quae omnis pariatur obcaecati possimus nisi ea iste!</p>
            </div>
            <div class="col-md-6 ml-auto">
                <div id="msg">test</div>

                <div class="d-flex">

                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>

                    <input type="text" name="email" class="form-control" placeholder="Enter your email">
{{--                    <input type="hidden" name="sub_check" class="form-control" value="sub_reg">--}}
                    <button type="submit" name="subscribe" id="subscribe_b" class="btn btn-secondary"><span class="icon-paper-plane"></span></button>
                </div>
            </div>
        </form>
{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="copyright">
                    <p>

                        Copyright &copy;<script type="166617ea582e39e4552d3b9a-text/javascript">document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!--<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15" /></svg></div>-->

<!--custom js-->
@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $("#sub_form").submit(function (e) {
            e.preventDefault();
            alert("jquery is working");
            let form=$(this);
            let data=$(form).serialize();
            let action= $(form).attr('action');

            $.ajax({
                url:action,
                type:"POST",
                data:data,
                success: function(response) {
                    if($.isEmptyObject(response.error)){
                        $('#msg').removeClass('.alert alert-danger').addClass('.alert alert-success');
                        $('#msg').text(response.success);
                    }else{
                        $('#msg').removeClass('.alert alert-success').addClass('.alert alert-danger');
                        $('#msg').text(response.error);
                        // printErrorMsg(response.error);
                    }
                }
            });


        });

        $("#msg").click(function () {
                alert("jquery is working");

        })



        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display', 'block');
            $.each(msg, function (key, value) {
                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
            });
        }

        });




</script>



<!-- Mirrored from colorlib.com/preview/theme/meranda/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Aug 2020 13:39:58 GMT -->
@endsection

