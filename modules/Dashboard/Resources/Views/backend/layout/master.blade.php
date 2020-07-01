<!DOCTYPE html>
<html class="no-js">
<head>
    <title>Dashboard - Canvas Admin</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
	<meta name="author" content="" />

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,800italic,400,600,800" type="text/css">

	<link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('backend/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('backend/js/plugins/icheck/skins/minimal/blue.css') }}" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('backend/js/plugins/fullcalendar/fullcalendar.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('backend/js/plugins/simplecolorpicker/jquery.simplecolorpicker.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('backend/js/plugins/datepicker/datepicker.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('backend/js/plugins/timepicker/bootstrap-timepicker.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('backend/js/plugins/fileupload/bootstrap-fileupload.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('backend/css/App.css') }}" type="text/css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('/css/fontawesome/css/all.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" type="text/css" />

	<!-- Upload File -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/upload_button/css/normalize.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/upload_button/css/demo.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/upload_button/css/component.css') }}" />

	@stack('css')

</head>

<body>

<div id="wrapper">
@include('Dashboard::backend.layout.header')
@include('Dashboard::backend.layout.menu')
	<div id="content">
		<div id="content-header">
			<div class="row">
				<div class="col-md-6">
                    <h1>@yield('title')</h1>
                </div>
				<div class="col-md-12">
					@include('Dashboard::backend.layout.notification')
				</div>
			</div>
		</div>
		@yield('content')
	</div>
</div> <!-- #wrapper -->
@include('Dashboard::backend.layout.footer')

<script src="https://kit.fontawesome.com/3e9081f038.js"></script>
<script src="{{ asset('backend/js/libs/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/file_upload.js') }}"></script>

<script src="{{ asset('backend/js/plugins/icheck/jquery.icheck.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/tableCheckable/jquery.tableCheckable.js') }}"></script>

<script src="{{ asset('backend/js/App.js') }}" defer></script>

<script src="{{ asset('backend/js/libs/raphael-2.1.2.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/morris/morris.min.js') }}"></script>

<script src="{{ asset('backend/js/demos/charts/morris/area.js') }}"></script>
<script src="{{ asset('backend/js/demos/charts/morris/donut.js') }}"></script>

<script src="{{ asset('backend/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<script src="{{ asset('backend/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('backend/js/demos/calendar.js') }}"></script>

<script src="{{ asset('backend/js/demos/dashboard.js') }}"></script>

<script src="{{ asset('backend/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/datatables/DT_bootstrap.js') }}"></script>
<script src="{{ asset('backend/js/plugins/tableCheckable/jquery.tableCheckable.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<!-- upload file -->
<script src="{{ asset('backend/upload_button/js/custom-file-input.js') }}"></script>
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
<script src="{{ asset('backend/js/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('backend/js/plugins/timepicker/bootstrap-timepicker.js') }}"></script>
<script src="{{ asset('backend/js/plugins/simplecolorpicker/jquery.simplecolorpicker.js') }}"></script>
<script src="{{ asset('backend/js/plugins/textarea-counter/jquery.textarea-counter.js') }}"></script>
<script src="{{ asset('backend/js/plugins/autosize/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('backend/js/demos/form-extended.js') }}"></script>
<script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>

<script src="{{ asset('backend/js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
@stack('js')

</body>
</html>
