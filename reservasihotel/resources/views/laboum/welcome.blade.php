<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LanadingPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
    font-family: "Roboto", sans-serif;
}
.flex{
    display: flex;
    align-items: center;
    justify-content: center;
}
body{
    background-color: aliceblue;
}
.container{
    width: 100%;
    height: 100%;
}
header{
    width: 100%;
    padding: 20px;
    justify-content: space-around !important;
}
header .logo img{
    width: 50px;
    height: 50px;
}
header h1{
    padding-top: 10px;
    padding-left: 5px;
    cursor: pointer;
}
header h1 span{
    color: cyan;
}
header ul {
    margin-top: 10px;
}
header ul li{
    padding: 5px 20px;
    margin: 10px;
    transition: all 0.5s;
}
header ul li a{
    font-size: 20px;
    color: rgba(0, 0, 0, 0.705);
    font-weight: 600;
    transition: color ease-out 0.6s;
}
header ul li a:hover{
    color: greenyellow;
}
header input{
    padding: 8px 20px;
    background-color: rgba(9, 209, 9, );
    color: white;
    font-weight: 800;
    outline: none;
    border: none;
    margin-top: 10px;
    font-size: 17px;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.7s;
}
header input:hover{
    transform: scale(1.09);
    background-color: rgba(9, 209, 9, 0.683);
}
.container .content{
    width: 100%;
    height: 90vh;
}
.content .one{
    width: 60%;
    padding: 0 100px;
}
.content .one h1{
    font-size: 60px;
}
.content .one img{
    width: 50px;
    height: 50px;
    margin-top: 8px;
    margin-left: -10px;
}
.content .one p{
    font-size: 16px;
    padding: 10px 0;
    color: rgba(0, 0, 0, 0.728);
}
.content input{
    padding: 10px 20px;
    background-color: cyan;
    color: white;
    font-size: 16px;
    font-weight: 700;
    outline: none;
    border: none;
    border-radius: 10px;
    margin-top: 20px;
    cursor: pointer;
    transition: all 0.7s;
}
.content input:hover{
    transform: scale(1.09);
    background-color: rgba(9, 209, 9, 0.683);
}
.content .input2{
    margin-left: 15px;
}
.content .two{
    width: 40%;
    position: relative;
}
.content .two .main{
    margin-top: -100px;
}
.content .two .toy{
    position: 100;
    width: 500px;
    left: 10px;
    top: 5px;
}
</style>
<body>
    <div class="container">
        <header class="flex">
            <div class="logo flex">
                <img src="images/laboum.png" alt="Cover image"/>
                <h1><span>Laboum</span>HOTELS</h1>
            </div>
            <ul class="flex">
                <li><a href="/welcome">Home</a></li>
                <li><a href="/info">Get Room</a></li>
                <li><a href="/customer">Customer List</a></li>
                <li><a href="laboum">Edit</a></li>
            </ul>
        </header>
        <div class="content flex">
            <div class="one">
                <h1>Istirahat Dengan Nyaman, 
                    <br>Di Laboum Hotel
                    <img src="images/laboum.png" alt="Cover image"/>
                </h1>
                <p>
                Hotel Laboum adalah hotel bintang 4 dengan lokasi yang sangat strategis. Berlokasi dekat dengan pusat kota 
                Palembang, Hotel Laboum merupakan tempat yang tepat bagi untuk menghilangkan penat dan bersantai sebelum 
                menelusuri kota Pempek ini. Dari Hotel Laboum, para tamu dapat dengan mudah menikmati akses menuju ke 
                semua sudut kota dan ke berbagai destinasi wisata yang menarik.

                </p>
                <input type="button" value="Location">
                <input type="button" class="input2" value="View">
            </div>
            <div class="two">

                <img class="toy" src="images/laboum.png" alt="Cover image">
            </div>
        </div>
    </div>
</body>
</html>