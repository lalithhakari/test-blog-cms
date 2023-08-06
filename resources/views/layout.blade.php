<!doctype html>
<html>

<head>
    <title>{{ $page->title }}</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;

        .pagination {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        nav>ul>li>a:hover {
            color: #047857;
        }

        nav>ul>li.active {
            background: #047857;
        }

        nav>ul>li>span {
            cursor: not-allowed;
        }
    </style>
</head>

<body class="bg-gray-900 text-white text-lg font-mono">
    @php
    $links = Statamic::tag('nav:main_menu')->fetch();
    @endphp
    <nav class="bg-black text-xs uppercase text-green text-center flex items-center justify-center space-x-4">
        @foreach($links as $link)
        <a href="{{ $link['url'] }}" class="p-2 block hover:text-yellow-200">{{ $link['title'] }}</a>
        @endforeach
    </nav>
    <div class="container max-w-lg mx-auto py-8">
        @yield('body')
    </div>
</body>

</html>