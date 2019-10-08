<!doctype html>
<html lang="en">
@include('front_end.block.header.head')
@include('front_end.block.header.header')
<body>
@yield ('content')
</body>
@include('front_end.block.footer.footer')
@include('front_end.block.footer.script')
</html>
<script>
    $(document).ready(function () {
        $(".productqty").change(function () {
            productqty=$(this).val();
            price=$(this).parent().parent().find('.price').html();
            tiencu=$(this).parent().parent().find('.total').html();
            tienmoi=parseInt(price)*parseInt(productqty);
            gantienmoi=$(this).parent().parent().find('.total').html(tienmoi);
            tienthaydoi=parseInt(tienmoi)-parseInt(tiencu);
            totalold=$(this).parent().parent().parent().find('.totalall').html();
            totalnew=parseInt(totalold)+parseInt(tienthaydoi);
            totalnew=$(this).parent().parent().parent().find('.totalall').html(totalnew);
            abc=$('.totalall').html();
            $('.vinh').val(abc);
        });
        $(".hrboxpd:last").css('display','none');
        $(".alert-success").fadeOut(2000);
    });
</script>
