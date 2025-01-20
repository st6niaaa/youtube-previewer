<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<style>
    .bg-dark {
        background-color: #0f0f0f;
    }
</style>


    <body class="bg-dark font-sans flex justify-center items-center min-h-screen m-0 p-5">
        @yield('body')
        @livewireScripts
    </body>
</html>