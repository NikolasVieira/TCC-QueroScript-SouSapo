<!doctype html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width = 1050, user-scalable = no" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('extras/modernizr.2.5.3.min.js') }}"></script>
</head>

<body>
    <div class="flipbook-viewport">
        <div class="container">
            <div class="flipbook">
                @foreach($content as $page)
                <div style="background-image:url({{ asset($page) }})"></div>
                @endforeach
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function loadApp() {
	// Create the flipbook

	$('.flipbook').turn({
			// Width
			width:922,

			// Height
			height:600,

			// Elevation
			elevation: 50,

			// Enable gradients
			gradients: true,

			// Auto center this flipbook
			autoCenter: true

        });
    }
    </script>

</body>

</html>
