<?php 
include_once("include/header.php");
include_once('baza.php');
if(isset($_POST['bos'])) {
  $food_name = htmlspecialchars($_POST['food_name']);
  $drink_name = htmlspecialchars($_POST['drink_name']);
  $desert_name = htmlspecialchars($_POST['desert_name']);
  $number_food = htmlspecialchars($_POST['number_food']);
  $number_drink = htmlspecialchars($_POST['number_drink']);
  $number_desert = htmlspecialchars($_POST['number_desert']);
  $adress = htmlspecialchars($_POST['adress']);
  $phone = htmlspecialchars($_POST['phone']);
  $sql->query("INSERT INTO `admin`(`id`, `food_name`, `drink_name`, `desert_name`, `number_food`, `number_drink`, `number_desert`, `adress`, `phone`) VALUES
   (null ,'".$food_name."','".$drink_name."','".$desert_name."','".$number_food."','".$number_drink."','".$number_desert."','".$adress."','".$phone."')");
}
?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Доставка</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Главное</a></li>
                            <li class="breadcrumb-item"><a href="booking">Страницы</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Доставка</li>
                        </ol>
                    </nav>
                </div>
            </div>
    <!-- delivery session -->
    <br>
    <br>
    <div class="delivery_page" >
    <form class="form">
    <p class="title">ЗАКАЗАТ ЕДУ</p>
    <br>
  
                    <a href="menu.php"><button class="button type1">
</button></a>
<br>
<div class="group">
  <input required="" type="text" class="input" name="food_name">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label>Название еды</label>
  
</div>
<br>
<div class="group">
  <input required="" type="text" class="input" name="drink_name">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label>Название напитков</label>
  
</div>
<br>
<div class="group">
  <input required="" type="text" class="input" name="desert_name">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label>Названия десертов</label>
  
</div>
<br>
<div class="group">
  <input required="" type="text" class="input2" name="number_food">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label>Количество еды</label>
  
</div>
<div class="group">
  <input required="" type="text" class="input3" name="number_drink">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label class="label3">Количество напитков</label>
  
</div>
<br>
<div class="group">
  <input required="" type="text" class="input4" name="number_desert">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label>Количество десертов</label>
  
</div>
<div class="group">
  <input required="" type="text" class="input5" name="adress">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label class="label5">Адрес</label>
  
</div>
<br>
<div class="group">
  <input required="" type="text" class="input" value="+998" name="phone">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label>Номер телефона</label>
  
</div>
<br>

  <br>
    <button class="submit" name="bos">Готово</button>
    <br>
    <br>
    <br>
    <br>
    <br>

</form>


<div class="img">
    <img class="imgg" src="img/aaa.jpg" alt="">
    <img class="second" src="img/bbb.jpg" alt="">
    <img src="img/ddd.jpg" alt="" class="third">
</div>

    </div>
    
    <!-- delivery session end -->
    <br>
    <br>
    <br>
    <br>

<?php
include_once("include/footer.php");
?>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.delivery_page{
  color: #FEA116;
    width:100%;
    height: 900px;
  background-color:#DDE6ED;
    margin-top:-50px;
    margin-bottom:-50px;
}

.form {
  color: #FEA116;
  
  display: flex;
  flex-direction: column;
  gap: 10px;
  /* max-width: 350px; */
  width:100%;
  background-color: #fff;
  padding: 20px;
  border-radius: ;
  position: relative;
}
.img>.imgg{
    width:300px;
    height:300px;
position:absolute;
right:50px;
margin-top:-770px;
}
.img>.second{
width:180px;
height:180px;
position:absolute;
right:280px;
margin-top:-600px;
}
.img>.third{
    width:170px;
height:170px;
position:absolute;
right:20px;
margin-top:-530px;
}
.title {
  margin-left: 40%;
  font-size: 40px;
  color: #FEA116;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
  
}

.title::before,.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: #FEA116;
}

.title::before {
  width: 18px;
  height: 18px;
  background-color: #FEA116;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}



.button {
  height: 50px;
  width: 150px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition: all 0.5s ease-in-out;
}

.button:hover {
  box-shadow: .5px .5px 150px #252525;
}

.type1::after {
  content: "Смотрет";
  height: 50px;
  width: 150px;
  background-color: #FEA116;
  color: #fff;
  position: absolute;
  top: 0%;
  left: 0%;
  transform: translateY(50px);
  font-size: 1.2rem;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.5s ease-in-out;
}

.type1::before {
  content: "Меню";
  height: 50px;
  width: 150px;
  background-color: #fff;
  color: #FEA116;
  position: absolute;
  top: 0%;
  left: 0%;
  transform: translateY(0px) scale(1.2);
  font-size: 2rem;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.5s ease-in-out;
}

.type1:hover::after {
  transform: translateY(0) scale(1.2);
}

.type1:hover::before {
  transform: translateY(-50px) scale(0) rotate(120deg);
}



.group {
 position: relative;
}
.input5 {
  margin-left: 34.5%;
  margin-top: -58px;
 font-size: 18px;
 padding: 10px 10px 10px 5px;
 display: block;
 width: 350px;
 border: none;
 border-bottom: 1px solid #FEA116;
 background: transparent;
}

.input5:focus {
 outline: none;
}

.label5 {
  margin-left: 34.5%;
  margin-top: -58px;
 color: #FEA116;
 font-size: 18px;
 font-weight: normal;
 position: absolute;
 pointer-events: none;
 left: 5px;
 top: 10px;
 transition: 0.2s ease all;
 -moz-transition: 0.2s ease all;
 -webkit-transition: 0.2s ease all;
}

.input5:focus ~ .label5, .input:valid ~ label {
 top: -20px;
 font-size: 14px;
 color: #FEA116;
}
.input4 {
 font-size: 18px;
 padding: 10px 10px 10px 5px;
 display: block;
 width: 350px;
 border: none;
 border-bottom: 1px solid #FEA116;
 background: transparent;
}

.input4:focus {
 outline: none;
}

label {
 color: #FEA116;
 font-size: 18px;
 font-weight: normal;
 position: absolute;
 pointer-events: none;
 left: 5px;
 top: 10px;
 transition: 0.2s ease all;
 -moz-transition: 0.2s ease all;
 -webkit-transition: 0.2s ease all;
}

.input4:focus ~ label, .input:valid ~ label {
 top: -20px;
 font-size: 14px;
 color: #FEA116;
}
.input3 {
  margin-left: 34.5%;
  margin-top: -58px;
 font-size: 18px;
 padding: 10px 10px 10px 5px;
 display: block;
 width: 350px;
 border: none;
 border-bottom: 1px solid #FEA116;
 background: transparent;
}

.input3:focus {
 outline: none;
}

.label3 {
  margin-left: 34.5%;
  margin-top: -58px;
 color: #FEA116;
 font-size: 18px;
 font-weight: normal;
 position: absolute;
 pointer-events: none;
 left: 5px;
 top: 10px;
 transition: 0.2s ease all;
 -moz-transition: 0.2s ease all;
 -webkit-transition: 0.2s ease all;
}

.input3:focus ~ .label3, .input:valid ~ label {
 top: -20px;
 font-size: 14px;
 color: #FEA116;
}
.input2 {
 font-size: 18px;
 padding: 10px 10px 10px 5px;
 display: block;
 width: 350px;
 border: none;
 border-bottom: 1px solid #FEA116;
 background: transparent;
}

.input2:focus {
 outline: none;
}

label {
 color: #FEA116;
 font-size: 18px;
 font-weight: normal;
 position: absolute;
 pointer-events: none;
 left: 5px;
 top: 10px;
 transition: 0.2s ease all;
 -moz-transition: 0.2s ease all;
 -webkit-transition: 0.2s ease all;
}

.input2:focus ~ label, .input:valid ~ label {
 top: -20px;
 font-size: 14px;
 color: #FEA116;
}
.input {
 font-size: 18px;
 padding: 10px 10px 10px 5px;
 display: block;
 width: 800px;
 border: none;
 border-bottom: 1px solid #FEA116;
 background: transparent;
}

.input:focus {
 outline: none;
}

label {
 color: #FEA116;
 font-size: 18px;
 font-weight: normal;
 position: absolute;
 pointer-events: none;
 left: 5px;
 top: 10px;
 transition: 0.2s ease all;
 -moz-transition: 0.2s ease all;
 -webkit-transition: 0.2s ease all;
}

.input:focus ~ label, .input:valid ~ label {
 top: -20px;
 font-size: 14px;
 color: #FEA116;
}

.bar {
 position: relative;
 display: block;
 width: 800px;
}

.bar:before, .bar:after {
 content: '';
 height: 2px;
 width: 0;
 bottom: 1px;
 position: absolute;
 background: #FEA116;
 transition: 0.2s ease all;
 -moz-transition: 0.2s ease all;
 -webkit-transition: 0.2s ease all;
}

.bar:before {
 left: 50%;
}

.bar:after {
 right: 50%;
}

.input:focus ~ .bar:before, .input:focus ~ .bar:after {
 width: 50%;
}

.highlight {
 position: absolute;
 height: 60%;
 width: 100px;
 top: 25%;
 left: 0;
 pointer-events: none;
 opacity: 0.5;
}

.input:focus ~ .highlight {
 animation: inputHighlighter 0.3s ease;
}

@keyframes inputHighlighter {
 from {
  background: #FEA116;
 }

 to {
  width: 0;
  background: transparent;
 }
}

.submit {
  border: none;
  outline: none;
  background:none;
  border:3px solid #FEA116;
  padding: 10px;
  border-radius: 10px;
  color: #FEA116;
  font-size: 20px;
  transform: .3s ease;
  width:25%;
  margin-left:220px;
}

.submit:hover {
  background-color: #FEA116;
  color:white;
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}

</style>
