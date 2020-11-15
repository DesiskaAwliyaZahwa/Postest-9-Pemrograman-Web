<!DOCTYPE html>
<html>
  <head>
    <title>POSTEST 9</title>
    <style>
    body{
    background-image: url(hijau.jpg);
    position: fixed;
    width: 90vw;
    height: 90vh;
    background-attachment: fixed;
    background-size: cover;
    font-family:cursive;
    }

    .center{
      padding-top: 100px;
      padding-left: 100px;
    }

    .konten1{
      background-image: url(bck1.jpg);
      height: 350px;
      width: 550px;
      float: left;
    }
    
    .konten2{
      background-image: url(bck1.jpg);
      height: 350px;
      width: 550px;
      float: right;
      color: black;
    }

    .form1{
      padding: 50px;
      height: auto;
      text-align: center;
    }

    .input{
      border-width: 1px;
      height: 100px;
      width: 400px;
      border-radius: 10px;
      text-align: center;
      padding: 5px;
    }

    .proses{
      background-color: rgb(139, 194, 139);
      width: 150px;
      height: 40px;
      cursor:pointer;
    }

	.result-text{
	  font-size: 150%;
		height: 150px;
		line-height: 1.1em;
		overflow: auto;
	  }
    </style>
  </head>
  <body>
    <div class="center">
    <div class="konten1">
    <div class="form1">
      <form name="proses" method="POST">
        <br><br>
        <textarea class="input" name="nama" placeholder="Masukkan Kalimat"></textarea>
        <br><br>
        <input class="proses" type="submit" name="proses" value="Proses">
      </form>
    </div>
    </div>
    <div class="konten2">
    <br>
    <?php
			if(isset($_POST['nama'])){
      echo "<p>Kalimat Yang Diinputkan : </p>";
			echo "<p class='result-text'>".$_POST['nama']."</p>";
			echo "<p>Banyak Karakter : <span>".strlen($_POST['nama'])."</span> Karakter</p>";
      }
      
			else{
			echo "<p>Kalimat Yang Diinputkan : </p>";
			echo "<p class='result-text'></p>";
			echo "<p>Banyak Karakter : <span></span> Karakter</p>";
      }
      ?>
    <div>
    <?php
			date_default_timezone_set('Asia/Jakarta');
      echo "Tanggal Dibuat : ";
      echo date("l, d-m-Y, h:i:s a") ;
      echo "  Waktu Setempat";
    ?>
    </div>
    </div>
    </div>
    </body>
</html>
