<?php $location = "Home"; ?>
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
                        <h2>Welcome to the Item Shop</h2>
                        <p class="inner-text">
                            Navigate through the website by clicking a link on the nav bar.
                        </p>
                        <h2>List of Items</h2>
                        <table>
                          <tr>
                            <!-- <th>Id</th> -->
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Image</th>
                          </tr>
                          @foreach($people as $person)
                          <tr>
                            <!-- <td>{{$person['id']}}</td> -->
                            <td>{{$person['name']}}</td>
                            <td>{{$person['age']}}</td>
                            <td>{{$person['type']}}</td>
                            <td><img class="index-image" src="{{$person['email']}}" /></td>

                            <td><a href="{{action('PersonController@edit', $person['id'])}}">Edit</a></td>
                            <td>
                              <form action="{{action('PersonController@destroy', $person['id'])}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit">Delete</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </table>
                        <p><a href="/people/create">Suggest an Item</a></p>
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
