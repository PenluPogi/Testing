<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Laravel App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
</head>
<body>
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif
    {{ $slot }}
</body>
</html>