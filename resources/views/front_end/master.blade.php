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
            thanhtienmoi=parseInt(price)*parseInt(productqty);
            thanhtiencu=$(this).parent().parent().find('.total').html(thanhtienmoi + 'VNĐ');
            total=$(this).parent().parent().find('.total').html();
            totalold=$(this).parent().parent().parent().find('.totalall').html();
            totalnew=parseInt(totalold)+parseInt(tiencu);
            totalnew=$(this).parent().parent().parent().find('.totalall').html(totalnew + 'VNĐ');
        });
        $(".hrboxpd:last").css('display','none');
    });
</script>
