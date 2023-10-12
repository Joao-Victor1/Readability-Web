<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Web version for a software that calculates the readability index of a text based on the Flesch-Kincaid formula, for studente grades">
    <meta name="keywords" content="Flesch, Kincaid, Formula, Readability, Text, Index, Calculate, Students, Grades">
    <meta name="author" content="João Victor Lopes Silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/readability-icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Readability Analyzer</title>
</head>
<header>
    <h1 class="text-center mt-3">
        Readability Analyzer
    </h1>
</header>

<body>
    <div class="container-fluid mt-5">
        <div class="row text-center">
            <div class="col-md-6">
                <form>
                    <h3> Insert your text here: </h3>
                    <textarea class="col-md-7" rows="15" placeholder="Type your text..."></textarea><br>
                    <button id="sendButton" type="button" class="btn btn-primary mt-3">Send</button>
                </form>
            </div>

            <div class="col-md-5">
                <h3> Result: </h3>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>