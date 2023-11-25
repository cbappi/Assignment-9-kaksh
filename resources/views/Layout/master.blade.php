<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practice</title>
        <!-- Google Font -->
        @include('Layout.include.googlefont')
        <!-- bootstrap stylesheet -->
        @include('Layout.include.bootstrapstyle')
        <!-- custom styles -->

        @include('Layout.include.fontawsome')
        @include('Layout.include.customcss')
</head>
<body>

            <header>
                    @include('Layout.include.navbar')
            </header>

            @yield('content')

            @include('Layout.include.footer')

            @include('Layout.include.bootstrapscript')
</body>

</html>
