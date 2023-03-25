<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Resmi Desa Tambaksari</title>
    <link rel="icon" href="/img/logo.png">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- style home --}}
    <style>
        .scale-0 {
            opacity: 0;
            transition: all 0.2s ease-in;
        }

        .scale-100 {
            opacity: 100;
            transition: all 0.2s ease-in;
        }
    </style>
</head>

<body>

    @yield('content')
    <script src="/assets/js/bootstrap.bundle.js"></script>
    {{-- script home --}}
    <script>
        const textOverlay = document.querySelector('#text-overlay')
        const wrapper = document.querySelector('#wrapper')

        wrapper.addEventListener('mouseover', () => {
            textOverlay.classList.remove('scale-0')
            textOverlay.classList.add('scale-100')
        })
        wrapper.addEventListener('mouseleave', () => {
            textOverlay.classList.remove('scale-100')
            textOverlay.classList.add('scale-0')
        })
    </script>
</body>

</html>
