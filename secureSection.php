<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Secure Section";
    include("./components/head.php"); ?>
    <style>
        .userListContainer {
            margin: 50px auto;
            text-align: center;
            width: 50%;

        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#">Administrator Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Go Back</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="userListContainer">
            <h3>Current user list</h1>
                <ul class="list-group">
                    <li class="list-group-item">Robert De Niroo</li>
                    <li class="list-group-item">Jack Nicholson</li>
                    <li class="list-group-item">Marlon Brando</li>
                    <li class="list-group-item">Denzel Washington</li>
                    <li class="list-group-item">Humphrey Bogart</li>
                </ul>
        </div>
    </div>
    <?php include("./components/scripts.html"); ?>
</body>

</html>