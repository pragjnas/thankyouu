<!DOCTYPE html>
<html lang="en">

@include('includes.head')
@include('includes.mainNav')
<body>
<div class="container">
    <head>

    </head>

    <main role="main">
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</div>
</body>
</html>