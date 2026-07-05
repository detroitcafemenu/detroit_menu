

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>القهوة| Detroit Cafe</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Tahoma,sans-serif;
}

body{
background:url("smoothie-bg.jpg");
background-size:cover;
background-position:center;
background-attachment:fixed;
min-height:100vh;
}

.overlay{
background:rgba(255,253,253,0.1);
min-height:100vh;
padding-bottom:30px;
}

.header{
color:rgb(13,3,59);
text-align:center;
padding-top:30px;
}

.title{
font-size:32px;
}

.back{
position:fixed;
left:20px;
top:20px;

background:white;
color:#082F6B;

padding:10px 15px;

border-radius:10px;

font-size:18px;
font-weight:bold;
text-decoration:none;

box-shadow:0 2px 8px rgba(0,0,0,.2);

transition:.3s;
z-index:1000;
}

.back:hover{
background:#082F6B;
color:white;
transform:scale(1.05);
}

.container{
width:90%;
margin:auto;
padding-top:30px;

display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:20px;
}

.card{
background:white;
border-radius:15px;
padding:25px;
text-align:center;
box-shadow:0 3px 10px rgba(0,0,0,.15);
transition:.3s;
}

.card:hover{
transform:translateY(-5px);
}

.name{
font-size:20px;
font-weight:bold;
margin-bottom:10px;
}

.price{
color:#082F6B;
font-size:18px;
font-weight:bold;
}

</style>
</head>

<body>

<div class="overlay">

<a href="index.html" class="back">
← الرئيسية
</a>

<div class="header">
<h1 class="title">القهوة☕</h1>
</div>

<div class="container">

<?php 
$data=json_decode(file_get_contents("http://localhost/detroit/get_menu.php?category=coffee"),true);

foreach ($data as $item){
    echo'
    <div class="card">
    <div class="name">'.$item["name"].'</div>
    <div class="price">'.$item["price"].'د.ع</div>
    </div>':

}
?>
</body>
</html>