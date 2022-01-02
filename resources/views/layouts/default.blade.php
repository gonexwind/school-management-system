@include('includes.head')
@include('includes.header')
<body>
    <main class="u-main" role="main">
        @include('includes.sidebar')
		@yield('content')
    </main>
@include('includes.footer')