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