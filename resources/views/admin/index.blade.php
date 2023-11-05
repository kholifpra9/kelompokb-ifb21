<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    
</head>
<body>
    
    @include('admin.header')
    @include('admin.sidebar')
    <div class="pt-20 pl-[280px] pr-[50px] pb-10">
        @include("admin.dashboard")
    </div>
    @include('admin.footer')

    

    <script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>