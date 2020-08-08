<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>Loading</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="loading">
        <svg width="100%" height="100%">
            <circle cx="20%" cy="20%" r="15%" fill="yellow" />
            <circle cx="20%" cy="80%" r="15%" fill="red" />
            <circle cx="80%" cy="20%" r="15%" fill="green" />
            <circle cx="80%" cy="80%" r="15%" fill="blue" />
        </svg>
    </div>
    <div class="loading1">
        <svg width="100%" height="100%">
            <circle r="15%" fill="blue" />
        </svg>
    </div>
    <div class="loading2">
        <svg width="100%" height="100%">
            <circle cx="20%" cy="20%" r="15%" fill="blue" />
        </svg>
    </div>
    <script src="script.js?p=<?= time() ?>"></script>
</body>
</html>