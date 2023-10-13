<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" /><meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="keywords" content="Deparment of Agriculture Negeri Sembilan">
    <meta name="author" content="Super User">
    <meta name="description" content="Laman Web Rasmi Jabatan Pertanian Negeri Sembilan, Jabatan Pertanian Negeri Sembilan,Agriculture Department Negeri Sembilan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> {{env('APP_NAME')}} | @yield('title')</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="css/css_1.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/megamenu.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/template.css" rel="stylesheet" type="text/css">
    <link href="css/off-canvas.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link href="css/corporate.css" rel="stylesheet" type="text/css">
    <link href="css/settings.css" rel="stylesheet" type="text/css">
    <link href="css/style(2).css" rel="stylesheet" type="text/css">

    <script async="" src="js/matomo.js.download"></script>
    <script src="js/jquery.min.js.download" type="text/javascript"></script>
	<script src="js/jquery-noconflict.js.download" type="text/javascript"></script>
	<script src="js/jquery-migrate.min.js.download" type="text/javascript"></script>
	<script src="js/caption.js.download" type="text/javascript"></script>
	<script src="js/bootstrap.js.download" type="text/javascript"></script>
	<script src="js/jquery.tap.min.js.download" type="text/javascript"></script>
	<script src="js/off-canvas.js.download" type="text/javascript"></script>
	<script src="js/script.js.download" type="text/javascript"></script>
	<script src="js/menu.js.download" type="text/javascript"></script>
	@yield('page-style')
</head>
<body>
    @yield('content')
</body>
</html>