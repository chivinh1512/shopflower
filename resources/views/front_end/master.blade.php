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
            totalallold=$('.totalall').html();
            total =  parseInt(productqty) * parseInt(price);
            
            $('.total').html(total);

        });
        $(".hrboxpd:last").css('display','none');
    });
</script>