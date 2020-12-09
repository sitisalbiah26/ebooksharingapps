<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook Sharing Appicaltion @yield('title')</title>
</head>
<body>
    @include('subview.list')

    @include('subview.about')
    

    @yield('content')

</body>
</html>
