<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>Welcome</title>
</head>
<body class="bg-blue container mx-auto">
    <div id="wrapper" class="flex h-screen items-center justify-center">
            <p class="text-white text-2xl font-mono" id="text"></p>
    </div>

    <script>
        typeString = ['Welcome, Feel free to use me :D'];
        let  i = 0;
        let count = 0;
        let selectedText = '';
        let text = '';
        (function type() {
            if (count === typeString.length) {
                count = 0;
                return;
            }
            selectedText = typeString[count];
            text = selectedText.slice(0, ++i);
            document.getElementById('text').innerHTML = text;
            if (text.length === selectedText.length) {
                count++;
                return;
            }
            setTimeout(type, 100);
        }());
    </script>
</body>
</html>
