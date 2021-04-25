<html>

<head>
    <meta charset="utf-8" />
    <title>Edit Flip Book</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/starter-template.css') }}" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="starter-template">
            <h1>Edit Flip Book</h1>
            <p class="lead">edit your flipping book by adding images.</p>
        </div>

        <form class="register-form" method="POST" action="{{ route('flipbook.update',$flipbook->id) }}"
            enctype="multipart/form-data">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="put" />

            <div class="row">
                <div class="col-lg-3">

                    <label><span class="required">*</span> Book Name</label> </div>
                <div class="col-lg-3">
                    <input class="input-block-level" type="text" placeholder="* Flip Book Name" name="book_name"
                        value="{{ $flipbook->name }}"></div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <label><span class="required">*</span> Book Description</label></div>
                <div class="col-lg-3"><input class="input-block-level" type="text" placeholder="* Flip Book Desc"
                        name="desc" value="{{ $flipbook->desc }}"></div>
            </div>

            <div class="row">
                @foreach($content as $page)
                <div class="col-md-1">
                    <img src="{{ asset($page) }}" width="100" height="100" />

                </div>
                @endforeach
            </div>

            <div id="browse_file">

                <div class="row">
                    <div class="col-lg-3"><label><span class="required">*</span> Select Flipbook Image </label></div>
                    <div class="col-lg-9"><input type="file" name="flip_img_1" /></div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-offset-6">
                    <button id="add_files" class="btn btn-medium btn-general input-block-level" type="button">Add More
                        Image</button>
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-lg-offset-3 pull-right">
                    <button id="add_files" class="btn btn-lg btn-primary" type="submit">Update Flip Book</button>
                </div>

            </div>

        </form>
        <hr>
        <form class="register-form" method="POST" action="{{ route('flipbook.destroy',$flipbook->id)  }}">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="delete" />
            <button class="btn btn-lg btn-danger" type="submit">Delete Flip Book</button>
        </form>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>

</body>

<script type="text/javascript">
    $(document).ready(function(){
        var i = 2;
	  $("#add_files").on('click',function(){
  var data = '<div class="row"><div class="col-lg-3"><label><span class="required">*</span> Select Flipbook Image </label></div><div class="col-lg-9"><input type="file" name="flip_img_'+ i +'" /></div></div>';

	 // var data = '<div><label><span class="required">*</span> Select Flipbook Image </label><input type="file" name="flip_img_'+ i +'" /></div>';
	  i++;
	    $('#browse_file').append(data);
	  });
	  });

</script>

</html>
