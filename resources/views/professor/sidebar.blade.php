<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* CSS for the sidebar */
.sidebar {
    position: fixed;  
    top: 0;  
    left: 0;  
    height: 100%;  
    width: 124px; 
    background-color: #f8f9fa;  
    padding: 20px; 
}

 .sidebar a {
    display: block;  
    padding: 10px;  
    color: #333; 
    text-decoration: none;  
}

 
.sidebar a:hover {
    background-color: #e9ecef;  
}

    </style>
</head>
<body>

<!-- resources/views/sidebar.blade.php -->
<div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Student</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Setting</a>
        </li>
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>