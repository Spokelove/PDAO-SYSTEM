<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>{{ $title !== ""  ? $title : 'V-Abled System'}}</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>

        .carousel {
                    position: relative;
                    max-width: 800px;
                    margin: 0 auto;
                }

        .carousel-content {
                    display: flex;
                    overflow: hidden;
                }

        .slide {
                    flex: 0 0 100%;
                }

            img {
                    max-width: 100%;
                    height: auto;
                }

.carousel-buttons {
                    display: flex;
                    justify-content: center;
                    margin-top: 10px;
                }

.carousel-button {
                    margin: 0 5px;
                    padding: 5px 10px;
                    font-size: 16px;
                    background-color:#54B435;
                    border: none;
                    cursor: pointer;
                    border-radius: 20px;
                    color:white;
                }

        .active {
                    background-color:	#A9A9A9;

                }

</style>
</head>
<body class=" bg-white-300  min-h-screen pt-12 pb-6 px-2">
    <x-messages />