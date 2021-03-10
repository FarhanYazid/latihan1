<!DOCTYPE html>
<html lang="en">
<head>
    <tittle></tittle>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown("slow");
  });
});
</script>
<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
}
#panel {
  display: none;
}
</style>
</head>

<body style="background-color: blue ;">

    <section id="section">
        <div id="navbar" class="navbar">
            
            <div class="pull-left">
                <h1>Sistem Informasi Kartu Prakerja</h1>
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">SISD</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Informasi Terbaru</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="tugas3.php">Tugas 3</a></li>
                </ul>
            </div>
        </nav>
   

    <div class="container">
        <div>
            <div class="col-lg-4 col-md-6 col-xs-12 colom1">
                <h3>Kartu Prakerja</h3>
                <img src="kartu.jpg"style="width:300px;height:150px;">
                <p class="justify">
                Kartu Prakerja adalah sebuah kartu yang digalangkan dalam rangka program pelatihan
                dan pembinaan warga negara Indonesia yang belum memiliki keterampilan. Kartu tersebut 
                dipromosikan oleh Joko Widodo pada masa kampanye Pemilihan umum Presiden Indonesia 2019, 
                bersama dengan KIP Kuliah dan Kartu sembako murah.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 colom1" >
                <h3>Syarat dan Alur Menjadi Peserta Kartu Prakerja</h3>
                <p> 
                <ol> 1.Pekerja yang ingin meningkatkan keterampilan</ol>
                <ol> 2.Tidak sedang menjalani pendidikan formal</ol>
                <ol> 3.Pekerja formal atau informal</ol>
                <ol> 4.WNI berusia 18 tahun ke atas</ol>
                <ol> 5.Pelaku usaha mikro dan kecil</ol>
                <ol> 6.Korban PHK</ol>
                 </p>
            </div>
            
            <div class="col-lg-4 col-md-6 col-xs-12 colom1">
            <h3>Daftar Disini !</h3>
            <div id="flip">Klik untuk mengisi formulir pendaftaran</div>
            <div id="panel">
                <form class=" form-horizontal " action=" ">
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">NIK:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan NIK " name="nik">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">No.KK:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan No.KK " name="no.kk ">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">Nama:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan Nama " name="nama ">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">Alamat:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan Alamat " name="alamat">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">Provinsi:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan Provinsi " name="provinsi">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">No.HP:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan No.hp " name="no.hp">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">E-mail:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan E-mail " name="e-mail">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1">Status Pekerjaan:</label>
                    <div class="col-sm-9 ">
                        <select name="status_pekerjaan" class="form-control sp">
                            <option value="bekerja">Sedang Bekerja</option>
                            <option value="tidakbekerja">Tidak Bekerja</option>
                        </select>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1">Password:</label>
                    <div class="col-sm-9 ">
                        <input type="password" class="formcontrol psw " placeholder="Enter password ">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1">Re Password:</label>
                    <div class="col-sm-9 ">
                        <input type="password" class="formcontrol repsw " placeholder="Enter password ">
                    <small class="errpsw "></small>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-sm-offset-3 col-sm-9 ">
                        <button type="submit " class="btn btn-default ">Submit</button>
                    </div>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright © 2021 | by Farhan Yazid</p>
                </div>
            </div>
        </div>
    </footer>
</body>


</html>