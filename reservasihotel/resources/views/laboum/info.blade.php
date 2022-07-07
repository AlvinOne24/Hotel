<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrderPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
body{
    background-color: aliceblue;
}
h1{
    text-align: center;
    color: black;
    padding: 20px;
}
nav{
    background-color: grey ;
    display: grid;
    place-items: center;
}
nav ul{
    list-style-type: none;
}
nav ul a{
    display: inline-block;
    padding: 20px;
    text-decoration: none;
    color: #000;
    transition: 0.2s ease-in;
    font-size: 18px;
}
nav ul a:hover{
    background-color: white
}
.items{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    padding: 30px 20px;
    grid-column-gap: 30px;
}
.item img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    cursor: pointer;
    transition: 0.2s ease;
}
.item img:hover{
    transform: scale(1.04);
}
.item h4{
    padding: 5px;
    text-align: center;
}
.item button{
    padding: 5px 30px;
    border: none;
    outline: none;
    background-color: cyan;
    color: white;
    cursor: pointer;
    border-radius: 4px;
    font-size: 20px;
    display: block;
    margin: 0 auto;
    transition: 0.2s all;
}
.item button:hover{
    transform: scale(1.08);
}


</style>
<body>
    <h1>Order Room</h1>
    <nav>
        <ul>
            <a href="/welcome"><li>Home</li></a>
            <a href="/info"><li>Get Room</li></a>
            <a href="#"><li>Contact Us</li></a>
            <a href="#"><li>Rate</li></a>
        </ul>
    </nav>
    <section class="items">
        <div class="item">
            <img src="/images/st.jpg" alt="Cover image">
            <h4>Standard Room</h4>
            <button><a href="/laboum/create">Order</a></button>
        </div>
        <div class="item">
        <img src="/images/sp.jpg" alt="Cover image">
            <h4>Superior Room</h4>
            <button><a href="/laboum/create2" class="button">Order</a></button>
        </div>
        <div class="item">
        <img src="/images/dx.jpg" alt="Cover image">
            <h4>Deluxe Room</h4>
            <button><a href="/laboum/create3">Order</a></button>
        </div>
        <div class="item">
        <img src="/images/junior.jpg" alt="Cover image">
            <h4>Junior Suite Room</h4>
            <button><a href="/laboum/create4">Order</a></button>
        </div>
        <div class="item">
        <img src="/images/suite.jpg" alt="Cover image">
            <h4>Suite Room</h4>
            <button><a href="/laboum/create5">Order</a></button>
        </div>
        <div class="item">
        <img src="/images/pres.jpg" alt="Cover image">
            <h4>Presidential Suite</h4>
            <button><a href="/laboum/create6">Order</a></button>
        </div>
    </section>
</body>
</html>