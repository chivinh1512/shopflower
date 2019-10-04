<!doctype html>
<html lang="en">
@include('front_end.block.header.head')
<body>
@include('admin.headeradmin')
@yield ('content')

</body>
@include('front_end.block.footer.script')
<script>
    $(document).ready(function () {
        $(".row-pd:even").css("background-color", "#eaf2f4");
    });
</script>
</html>

