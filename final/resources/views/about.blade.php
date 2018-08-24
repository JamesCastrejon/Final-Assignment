<?php $location = "About"; ?>
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
                        <h2>About</h2>
                        <table class="about-facts">
                            <tr>
                                <th>Why do we exist?</th>
                                <th>What can I buy?</th> 
                            </tr>
                            <tr>
                                <td>We exist to bring profit in the Mushroom Kingdom.
                                </td>
                                <td>Here you can buy a variety of items.
                                This includes but is not limited to Food, Clothes, and
                                weapons.</td> 
                            </tr>
                            <tr>
                                <td>We also provide a way to give items of all sorts to toads
                                who can afford it.
                                </td>
                                <td>This includes but is not limited to Food, Clothes, and
                                weapons.
                                </td>
                            </tr>
                            <tr>
                                <td>We have multiple locations all over the Mushroom Kingdom.
                                </td>
                                <td> You can also donate to charity for a chance to win
                                a prize from our raffle.
                                </td>
                            </tr>
                            <tr>
                                <td>Even in the most desolate places because we believe every and all
                                Toads deserve a chance buy from us.
                                </td>
                                <td>We also have a SECRET SHOP for those Toads who seek something greater
                                and off the books. DON'T ACTUALLY ASK!</td>
                            </tr>
                        </table>
                        <p class="inner-text">TERMS AND CONDITIONS: Any and all sales are final.
                        The costomer has to buy whatever items at their own risk.
                        We do not support any misuse or promote items specifically for 
                        Illegal actions. Any and all actions that use our products inappropriately
                        or illegally are not meant to be used in that specific way. Any side effects like death,
                         terminal illness or terminal death illness from our products are not by us but by our suppliers.</p>
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