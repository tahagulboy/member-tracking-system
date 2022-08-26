<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }
?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Ekle</title>
    <?php include("../statik/head.php"); ?>
</head>
<body class="text-center">

<main class="form-signin w-100 m-auto">
    <br>
    <h1 class="h3 mb-3 fw-normal">Üye Ekle</h1>
    <form method="POST" action="uye-ekle2.php">
        <div class="row">
            <div class="col-md-1"> </div>
            <div class="col-md-4">
                <h6>Kimlik Bilgileri</h6>
                <input style="width: 50%;" maxLength="11" type="text" placeholder="TC*" name="UyeTC">
                <br>
                <br>
                <input style="width: 50%;" maxLength="9" type="text" placeholder="Seri No" name="SeriNo"> 
                <br>
                <br> 
                <input style="width: 50%;" type="text" placeholder="Ad*" name="UyeAdi">
                <br>
                <br>
                <input style="width: 50%;" type="text" placeholder="Soyad*" name="UyeSoyadi">   
                <br>
                <br>
                <input style="width: 50%;" type="text" placeholder="Baba Adı" name="BabaAdi">  
                <br>
                <br>
                <input style="width: 50%;" type="text" placeholder="Anne Adı" name="AnneAdi">  
                <br>
                <br>
                <span>Doğum Tarihi:</span>
                <input style="width: 25%;" type="date" placeholder="Doğum Tarihi" name="DogumTarihi">
                <br>
                <br>
                <input style="width: 50%;" type="text" placeholder="Doğum Yeri" name="DogumYeri">
                <br>
                <br>
                <select style="width: 50%;" name="Cinsiyet">
                    <option value="NULL">Cinsiyet</option>
                    <option value="Kadın">Kadın</option>
                    <option value="Erkek">Erkek</option>
                </select>
                <br>
                <br>
                <select style="width: 50%;" name="MedeniHali">
                    <option value="NULL">Medeni Hali</option>
                    <option value="Bekar">Bekar</option>
                    <option value="Evli">Evli</option>
                    <option value="Dul">Dul</option>
                    <option value="Boşanmış">Boşanmış</option>
                </select>    
            </div>
            <div class="col-md-2">
                <h6>İletişim Bilgileri</h6>
                    <input style="width: 95%;" type="email" placeholder="E-Posta" name="Eposta">
                    <br>
                    <br>   
                    <input style="width: 95%;" type="tel" placeholder="Tel No" name="Telno">
                    <br>
                    <br>
                    <input style="width: 95%;" type="text" placeholder="Web Adresi" name="WebAdresi">
                    <br>
                    <br>   
                    <select style="width: 95%;" name="Il">
                        <option value="NULL">İl</option>
                        <option value="Adana">Adana</option>
                        <option value="Adıyaman">Adıyaman</option>
                        <option value="Afyonkarahisar">Afyonkarahisar</option>
                        <option value="Ağrı">Ağrı</option>
                        <option value="Amasya">Amasya</option>
                        <option value="Ankara">Ankara</option>
                        <option value="Antalya">Antalya</option>
                        <option value="Artvin">Artvin</option>
                        <option value="Aydın">Aydın</option>
                        <option value="Balıkesir">Balıkesir</option>
                        <option value="Bilecik">Bilecik</option>
                        <option value="Bingöl">Bingöl</option>
                        <option value="Bitlis">Bitlis</option>
                        <option value="Bolu">Bolu</option>
                        <option value="Burdur">Burdur</option>
                        <option value="Bursa">Bursa</option>
                        <option value="Çanakkale">Çanakkale</option>
                        <option value="Çankırı">Çankırı</option>
                        <option value="Çorum">Çorum</option>
                        <option value="Denizli">Denizli</option>
                        <option value="Diyarbakır">Diyarbakır</option>
                        <option value="Edirne">Edirne</option>
                        <option value="Elazığ">Elazığ</option>
                        <option value="Erzincan">Erzincan</option>
                        <option value="Erzurum">Erzurum</option>
                        <option value="Eskişehir">Eskişehir</option>
                        <option value="Gaziantep">Gaziantep</option>
                        <option value="Giresun">Giresun</option>
                        <option value="Gümüşhane">Gümüşhane</option>
                        <option value="Hakkâri">Hakkâri</option>
                        <option value="Hatay">Hatay</option>
                        <option value="Isparta">Isparta</option>
                        <option value="Mersin">Mersin</option>
                        <option value="İstanbul">İstanbul</option>
                        <option value="İzmir">İzmir</option>
                        <option value="Kars">Kars</option>
                        <option value="Kastamonu">Kastamonu</option>
                        <option value="Kayseri">Kayseri</option>
                        <option value="Kırklareli">Kırklareli</option>
                        <option value="Kırşehir">Kırşehir</option>
                        <option value="Kocaeli">Kocaeli</option>
                        <option value="Konya">Konya</option>
                        <option value="Kütahya">Kütahya</option>
                        <option value="Malatya">Malatya</option>
                        <option value="Manisa">Manisa</option>
                        <option value="Kahramanmaraş">Kahramanmaraş</option>
                        <option value="Mardin">Mardin</option>
                        <option value="Muğla">Muğla</option>
                        <option value="Muş">Muş</option>
                        <option value="Nevşehir">Nevşehir</option>
                        <option value="Niğde">Niğde</option>
                        <option value="Ordu">Ordu</option>
                        <option value="Rize">Rize</option>
                        <option value="Sakarya">Sakarya</option>
                        <option value="Samsun">Samsun</option>
                        <option value="Siirt">Siirt</option>
                        <option value="Sinop">Sinop</option>
                        <option value="Sivas">Sivas</option>
                        <option value="Tekirdağ">Tekirdağ</option>
                        <option value="Tokat">Tokat</option>
                        <option value="Trabzon">Trabzon</option>
                        <option value="Tunceli">Tunceli</option>
                        <option value="Şanlıurfa">Şanlıurfa</option>
                        <option value="Uşak">Uşak</option>
                        <option value="Van">Van</option>
                        <option value="Yozgat">Yozgat</option>
                        <option value="Zonguldak">Zonguldak</option>
                        <option value="Aksaray">Aksaray</option>
                        <option value="Bayburt">Bayburt</option>
                        <option value="Karaman">Karaman</option>
                        <option value="Kırıkkale">Kırıkkale</option>
                        <option value="Batman">Batman</option>
                        <option value="Şırnak">Şırnak</option>
                        <option value="Bartın">Bartın</option>
                        <option value="Ardahan">Ardahan</option>
                        <option value="Iğdır">Iğdır</option>
                        <option value="Yalova">Yalova</option>
                        <option value="Karabük">Karabük</option>
                        <option value="Kilis">Kilis</option>
                        <option value="Osmaniye">Osmaniye</option>
                        <option value="Düzce">Düzce</option>
                    </select>
                    <br>
                    <br>
                    <input style="width: 95%;" type="text" placeholder="İlçe" name="Ilce">
                    <br>
                    <br>
                    <input style="width: 95%; height: 100px;" type="text" placeholder="Adres" name="Adres">
                    <br>
                    <br>
                    <span>Kayıt Tarihi:</span>
                    <input style="width: 95%;" type="datetime-local" placeholder="Kayıt Tarihi" name="KayitTarihi">  
                    <br>
                    <br>
                    <input style="width: 50%;" class="btn btn-lg btn-primary btn-block" type="submit" value="Ekle">
                    <button class="btn"><a href="../uyeler.php">Geri Dön</a></button>
            </div>
            <div class="col-md-4">
                <h6>Diğer Bilgileri</h6>                   
                    <select style="width: 50%;" name="Grubu">
                        <option value="NULL">Grubu</option>
                        <option value="Üyeler">Üyeler</option>
                        <option value="Yöneticiler">Yöneticiler</option>
                    </select>            
                    <br>
                    <br>
                    <select style="width: 50%;" name="Gorevi">
                        <option value="NULL">Görevi</option>
                        <option value="Üye">Üye</option>
                        <option value="Aşçı">Aşçı</option>
                        <option value="Garson">Garson</option>
                        <option value="Başkan Yardımcısı">Başkan Yardımcısı</option>
                        <option value="Dernek Başkanı">Dernek Başkanı</option>
                    </select> 
                    <br>
                    <br>  
                    <input style="width: 50%;" type="text" placeholder="Mesleği" name="Meslek">  
                    <br>
                    <br>
                    <input style="width: 50%;" type="text" placeholder="Çalıştığı Yer" name="CalistigiYer">  
                    <br>
                    <br>
                    <select style="width: 50%;" name="OgrenimDurumu">
                        <option value="NULL">Öğrenim Durumu</option>
                        <option value="İlkokul Mezunu">İlkokul Mezunu</option>
                        <option value="Lise Mezunu">Lise Mezunu</option>
                        <option value="Üniversite Mezunu">Üniversite Mezunu</option>
                    </select>
                    <br>
                    <br>
                    <select style="width: 50%;" name="AskerlikDurumu">
                        <option value="NULL">Askerlik Durumu</option>
                        <option value="Yapmadı">Yapmadı</option>
                        <option value="Yaptı">Yaptı</option>
                    </select>  
                    <br>
                    <br>
                        <select style="width: 50%;" name="KanGrubu">
                        <option value="NULL">Kan Grubu</option>
                        <option value="0-">0-</option>
                        <option value="0+">0+</option>
                        <option value="A-">A-</option>
                        <option value="A+">A+</option>
                        <option value="B-">B-</option>
                        <option value="B+">B+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB+">AB+</option>
                    </select>  
                    <br>
                    <br>
                    <input style="width: 50%;" type="number" placeholder="Boy (CM)" name="Boy">
                    <br>
                    <br>   
                    <input style="width: 50%;" type="number" placeholder="Kilo (KG)" name="Kilo">  
                    <br>
                    <br>
                    <input style="width: 50%;" type="password" placeholder="Üye Şifresi" name="UyeSifresi"> 
                    <br>
                    <br>
            </div>
        </div>
        <br>
        <br>
    </form> 
</main>
</body>
</html>