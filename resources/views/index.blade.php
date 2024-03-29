<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Customer Visit Management</title>
    <meta name="description"
          content="Customer Visit Management (CVM) is a web-based application that appoints customers to their desired specialists sequentially.">
    <meta name="keywords" content="visit, management, customer, queue">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/nfq-logo.svg') }}" type="image/x-icon"/>
</head>
<body class="bg-blue-dark">
<noscript>
    <strong>We're sorry but our service doesn't work properly without JavaScript enabled. Please enable it to
        continue.</strong>
</noscript>
<div id="app">
    <App></App>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
