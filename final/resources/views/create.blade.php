<?php $location = "Suggestion"; ?>
<body><!DOCTYPE html>
<html>
    <head>
        <title><?php echo $location; ?></title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    </head>
    <body>
    <div class="container">
        <div id="nav">
            <h1 id="logo"><a href="/people/">Item Shop</a></h1>
            <a href="/people/">Home</a>
            <a href="/people/create">Suggestion</a>
            <a href="/people/about">About</a>
            <form class="example" action="/class/Final-Assignment/list">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Submit</button>
            </form>
        </div>
        <div id="body">
            <div class="outer">
                <div class="middle">
                    <div class="inner">
                        <h2>Suggesst an Item</h2>
                        <form action="{{url('people')}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                            <label for="name">Name: </label>
                            <input type="text" name="name" />
                            </div>
                            <div class="form-group">
                            <label for="age">Price: </label>
                            <input type="text" name="age" />
                            </div>
                            <div class="form-group">
                            <label for="type">Category: </label>
                            <select name="type">
                                <option value="Clothes">Clothes</option>
                                <option value="Weapons">Weapons</option>
                                <option value="Food">Food</option>
                                <option value="Item">Item</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <label for="email">Image-URL: </label>
                            <input type="text" name="email" />
                            </div>
                            <br>
                            <input type="submit" value="Add Item" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="footer">
                <footer>~~~ ©Copyright Mario item Shop ~~~</footer>
            </div>
        </div>
    </body>
</html>