<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task1</title>
    <link href = "style.css" type = "text/css" rel="stylesheet">
</head>
<body>
    <div id = "navbar">
        <span id = "name">Paul</span>
        
        <nav id = "menu">
            <ul>
                <li>About</li>
            </ul>
        </nav>         
        
    </div>
    <div id="container">
        <span id = "heading">Hello There!!</span>
        <?php date_default_timezone_set ("Africa/Lagos"); ?>
        <span id = "time">The current time is <?php echo date("h:i:s");?></span>
    
    </div>
</body>
</html>