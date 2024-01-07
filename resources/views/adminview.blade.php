<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vtSystem</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    @vite(['resources/css/app.css','resources/js/app.js'])


</head>
<body class="bg-green-600 scrollbar-hidden">
@if($token === null)
    <div class="fixed inset-0 flex z-50">
        <div class="modal-overlay fixed inset-0 bg-black bg-opacity-98 text-white  smx:text-2xl xs:text-sm lg:text-3xl flex justify-center pt-52"> 401 - Unauthorized</div>
    </div>
@endif


<!-- component -->
<div  class="flex w-screen flex-col ">

    <livewire:dynamic-admin-view/>

</div>

@stack('js')
</body>
<script>
    const currentYear = new Date().getFullYear();
    document.getElementById('currentYear').textContent = currentYear;

</script>
</html>
