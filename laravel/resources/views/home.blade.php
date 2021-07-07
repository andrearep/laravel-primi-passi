<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: sans-serif;
        text-align: center;
        background-color: cornflowerblue;

    }

    header {

        background-color: aqua;
        padding: 3rem;
    }

    h1 {
        color: darkblue;
        font-size: 4rem;
        margin-bottom: 2rem;
    }

    main {
        width: 1000px;
        margin: auto;
        padding: 5rem;
    }

    h2 {
        font: 3.5rem;
        text-transform: uppercase;
    }

    .title {
        margin-bottom: 2rem;
    }

    ul>li {
        list-style: none;
        display: inline;
    }

    ul>li>a {
        text-decoration: none;
        margin-right: 2rem;
        font-size: 2rem;
    }
    </style>
</head>

<body>
    <header>
        <h1>Homepage</h1>

        <nav>
            <ul>
                @foreach ($list as $element)
                <li> <a href=""> {{$element}} </a></li>
                @endforeach
            </ul>
        </nav>
    </header>

    <main>
        <div class="title">
            <h2>questo sarà il sito più bello di sempre</h2>
            <span>forse no...</span>
        </div>

        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsa ea itaque commodi nisi quia cum?
            Praesentium vitae temporibus obcaecati eos id totam esse minus, quasi voluptate, sapiente animi
            exercitationem. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic possimus laboriosam quidem
            amet, eveniet quis tempora aspernatur. Aliquam, fuga repellat soluta quo nulla neque quibusdam nisi sint
            maxime quisquam, dolores harum fugit exercitationem doloremque ipsum odio ab distinctio. Eos earum minus
            sequi cum aspernatur neque numquam dignissimos qui consequuntur esse.
        </p>


    </main>

</body>

</html>