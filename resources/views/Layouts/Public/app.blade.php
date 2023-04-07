<!DOCTYPE html>

<html lang="en-us">

<head>
    <title>@yield("title")</title>
    @include("Layouts.Public.head")
</head>

<body>
@include("Layouts.Public.header")
@yield("content")
@include("Layouts.Public.footer")


@stack("js")
<!-- JS Plugins -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js" async></script>
<script src="plugins/slick/slick.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
@if($errors->any())
Swal.fire({
    icon: 'error',
title:'Oops',
html:"@foreach($errors->all() as $errors){{$errors}}<br/> @endforeach",
})
@endif
    @if(request()->session()->has("success"))
        Swal.fire({
    icon:"success",
    title:"Success",
    html:"{{request()->session()->get("success")}}",
})
@endif
</script>
</html>
