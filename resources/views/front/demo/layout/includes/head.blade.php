<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tejarat - Multipurpose Business & Corporate HTML Template</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900|Mirza:400,700&amp;subset=arabic"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
    <!-- inject:css-->
    <link rel="stylesheet" href="{{ asset('demo/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/fontello.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/jquery.mb.YTPlayer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/lnr-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/style.css') }}">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('demo/img/favicon.png') }}">
    <style>
        /* Language Switcher Button */
        .lang-switch-btn {
            display: inline-block;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #858b91, #d0d1d1);
            color: white;
            text-align: center;
            line-height: 40px;
            font-size: 1rem;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2), inset 0px 2px 4px rgba(255, 255, 255, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        }

        /* Hover Effects */
        .lang-switch-btn:hover {
            background: linear-gradient(135deg, #6f7575, #3f4242);
            color: cornflowerblue;
            box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.3), inset 0px 3px 5px rgba(255, 255, 255, 0.1);
            transform: scale(1.1);
        }

        /* Top Bar Styling (Optional) */
        .top_bar--lang {
            display: flex;
            justify-content: flex-end;
            /* Aligns the language switcher to the right */
            padding: 10px;
        }

        .menu-right {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .iconright {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .iconright li {
            display: inline-block;
            margin-left: 10px;
        }
    </style>
    <script>
        window.onload = function() {
            const activeFilter = document.querySelector('#card_filter li.active');
            const div = document.querySelector('.filter-wrapper .container .row');
            activeFilter.onclick = function() {
                console.log(div);
            }

            if (activeFilter) {
                // activeFilter.setAttribute('data-uk-filter', '0');
                activeFilter.dataset.ukFilter = '0';
            }
        };
    </script>
</head>
