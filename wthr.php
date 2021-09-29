<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.4/axios.min.js" integrity="sha512-lTLt+W7MrmDfKam+r3D2LURu0F47a3QaW5nF0c6Hl0JDZ57ruei+ovbg7BrZ+0bjVJ5YgzsAWE+RreERbpPE1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
<style>
@media only screen and (min-width: 600px) {
  .img {
    width: 100%;
    height: 300px !important;
       }
  #ort{
    margin-left:-70px !important; 
       } 
  .icons{
    margin-left: 5%;
    margin-top:-35px;
      }    
  .drc{
    margin-block: 60px !important;
      }   
}

body{
  background-color:#d9dade;
} 
#ort{
  margin-left:-45px;
}   
.img {
  width: 100%;
  height: 245px;
}
.card{
  box-shadow: 5px 20px 50px grey;  
  margin-top:5px;
 }
#day{
  font-family: Cursive;
  font-style: italic;
  text-align:center;
  color:#878e9e;
}
#bttn{
  width: 100%;
  height: 95px;
  margin-top: 5px;
  background-color:#878e9e;
  padding-top:31px;
}
#cities{
  background-color: initial;
  height: 34px;
  width: 140px;
  color: white ;
}
option{
  color : black ;
}
.drc{
  margin-block: 34px;
}
.icons{
  margin-left: 20%;
  margin-top:-63px;
  position: absolute;

}
  </style>
</head>
<body>
<body onload="myFunction()">
<div class="container">
  <div class="card" >
  <div class="card-img-top" >
    <div id="demo" class="carousel slide" data-ride="carousel">
    <div class="carousel-caption">
        <div class="btn-group">
        <div class="container">
       <select id="cities">
        <option value="ADANA" enlem="36.9719" boylam="35.3324">ADANA</option>
        <option value="ADIYAMAN" enlem="37.7607" boylam="38.2784">ADIYAMAN</option>
        <option value="AFYON" enlem="38.7558" boylam="30.5418">AFYON</option>
        <option value="AGRI" enlem="39.7226" boylam="43.0544">AGRI</option>
        <option value="AKSARAY" enlem="38.3746" boylam="34.0284">AKSARAY</option>
        <option value="AMASYA" enlem="40.6544" boylam="35.832">AMASYA</option>
        <option value="ANKARA" enlem="39.9347" boylam="32.8496">ANKARA</option>
        <option value="ANTALYA" enlem="36.894" boylam="30.6868">ANTALYA</option>
        <option value="ARDAHAN" enlem="41.1103" boylam="42.7031">ARDAHAN</option>
        <option value="ARTVIN" enlem="41.1816" boylam="41.82">ARTVIN</option>
        <option value="AYDIN" enlem="37.8528" boylam="27.8426">AYDIN</option>
        <option value="BALIKESIR" enlem="39.6521" boylam="27.8833">BALIKESIR</option>
        <option value="BARTIN" enlem="41.6364" boylam="32.3378">BARTIN</option>
        <option value="BATMAN" enlem="37.8783" boylam="41.1235">BATMAN</option>
        <option value="BAYBURT" enlem="40.2587" boylam="40.2284">BAYBURT</option>
        <option value="BILECIK" enlem="40.1426" boylam="29.9805">BILECIK</option>
        <option value="BINGÖL" enlem="38.8891" boylam="40.4895">BINGÖL</option>
        <option value="BITLIS" enlem="38.3997" boylam="42.1084">BITLIS</option>
        <option value="BOLU" enlem="40.7333" boylam="31.6107">BOLU</option>
        <option value="BURDUR" enlem="37.7193" boylam="30.2843">BURDUR</option>
        <option value="BURSA" enlem="40.2071" boylam="29.0708">BURSA</option>
        <option value="ÇANAKKALE" enlem="40.1566" boylam="26.4142">ÇANAKKALE</option>
        <option value="ÇANKIRI" enlem="40.5985" boylam="33.6168">ÇANKIRI</option>
        <option value="ÇORUM" enlem="40.5509" boylam="34.9536">ÇORUM</option>
        <option value="DENIZLI" enlem="37.7735" boylam="29.0865">DENIZLI</option>
        <option value="DIYARBAKIR" enlem="37.9189" boylam="40.2145">DIYARBAKIR</option>
        <option value="DÜZCE" enlem="40.8393" boylam="31.1639">DÜZCE</option>
        <option value="EDIRNE" enlem="41.6755" boylam="26.5604">EDIRNE</option>
        <option value="ELAZIG" enlem="38.6755" boylam="39.2229">ELAZIG</option>
        <option value="ERZINCAN" enlem="39.7492" boylam="39.4905">ERZINCAN</option>
        <option value="ERZURUM" enlem="39.9051" boylam="41.2709">ERZURUM</option>
        <option value="ESKISEHIR" enlem="39.77" boylam="30.5025">ESKISEHIR</option>
        <option value="GAZIANTEP" enlem="37.0646" boylam="37.3867">GAZIANTEP</option>
        <option value="GIRESUN" enlem="40.9175" boylam="38.3903">GIRESUN</option>
        <option value="GÜMÜSHANE" enlem="40.4611" boylam="39.4671">GÜMÜSHANE</option>
        <option value="HAKKARI" enlem="37.5761" boylam="43.7392">HAKKARI</option>
        <option value="HATAY" enlem="36.2018" boylam="36.1621">HATAY</option>
        <option value="IGDIR" enlem="39.9193" boylam="44.0455">IGDIR</option>
        <option value="ISPARTA" enlem="37.7636" boylam="30.5589">ISPARTA</option>
        <option value="ISTANBUL" enlem="41.0291" boylam="28.9766">ISTANBUL</option>
        <option value="IZMIR" enlem="38.4101" boylam="27.1297">IZMIR</option>
        <option value="MARAS" enlem="36.9283" boylam="37.5894">K.MARAS</option>
        <option value="KARABÜK" enlem="41.1982" boylam="32.6264">KARABÜK</option>
        <option value="KARAMAN" enlem="37.1814" boylam="33.2219">KARAMAN</option>
        <option value="KARS" enlem="40.6094" boylam="43.0958">KARS</option>
        <option value="KASTAMONU" enlem="41.3723" boylam="33.7719">KASTAMONU</option>
        <option value="KAYSERI" enlem="38.7229" boylam="35.4801">KAYSERI</option>
        <option value="KIRIKKALE" enlem="39.8417" boylam="33.516">KIRIKKALE</option>
        <option value="KIRKLARELI" enlem="41.7378" boylam="27.2285">KIRKLARELI</option>
        <option value="KIRSEHIR" enlem="39.148" boylam="34.164">KIRSEHIR</option>
        <option value="KILIS" enlem="36.7176" boylam="37.1139">KILIS</option>
        <option value="KOCAELI" enlem="40.7732" boylam="29.9507">KOCAELI</option>
        <option value="KONYA" enlem="37.8704" boylam="32.511">KONYA</option>
        <option value="KÜTAHYA" enlem="39.4217" boylam="29.9879">KÜTAHYA</option>
        <option value="MALATYA" enlem="38.3475" boylam="38.3143">MALATYA</option>
        <option value="MANISA" enlem="38.6222" boylam="27.4297">MANISA</option>
        <option value="MARDIN" enlem="37.3136" boylam="40.7584">MARDIN</option>
        <option value="MERSIN" enlem="36.8" boylam="34.609">MERSIN</option>
        <option value="MUGLA" enlem="37.2196" boylam="28.3658">MUGLA</option>
        <option value="MUS" enlem="38.7334" boylam="41.4878">MUS</option>
        <option value="NEVSEHIR" enlem="38.6246" boylam="34.714">NEVSEHIR</option>
        <option value="NIGDE" enlem="37.9718" boylam="34.6775">NIGDE</option>
        <option value="ORDU" enlem="40.9881" boylam="37.874">ORDU</option>
        <option value="OSMANIYE" enlem="37.0743" boylam="36.2485">OSMANIYE</option>
        <option value="RIZE" enlem="41.0224" boylam="40.5214">RIZE</option>
        <option value="SAKARYA" enlem="40.7489" boylam="30.3793">SAKARYA</option>
        <option value="SAMSUN" enlem="41.2871" boylam="36.3234">SAMSUN</option>
        <option value="SIIRT" enlem="37.9251" boylam="41.9442">SIIRT</option>
        <option value="SINOP" enlem="42.0269" boylam="35.16">SINOP</option>
        <option value="SIVAS" enlem="39.7515" boylam="37.0172">SIVAS</option>
        <option value="SANLIURFA" enlem="37.1512" boylam="38.7922">SANLIURFA</option>
        <option value="SIRNAK" enlem="37.5228" boylam="42.4608">SIRNAK</option>
        <option value="TEKIRDAG" enlem="40.9792" boylam="27.5144">TEKIRDAG</option>
        <option value="TOKAT" enlem="40.3063" boylam="36.5559">TOKAT</option>
        <option value="TRABZON" enlem="41.0061" boylam="39.7191">TRABZON</option>
        <option value="TUNCELI" enlem="39.1069" boylam="39.5491">TUNCELI</option>
        <option value="USAK" enlem="38.6716" boylam="29.4056">USAK</option>
        <option value="VAN" enlem="38.497" boylam="43.3816">VAN</option>
        <option value="YALOVA" enlem="40.656" boylam="29.2712">YALOVA</option>
        <option value="YOZGAT" enlem="39.8212" boylam="34.8055">YOZGAT</option>
        <option value="ZONGULDAK" enlem="41.4514" boylam="31.7925">ZONGULDAK</option>
    </select>
    
    <ul class="list-group" id="list"> </ul>
    </div>
    </div>
    <div class="drc">
    <h1 id='temp'></h1>
    <h5 id='desc'> </h5> 
    </div>
    </div> 

  <div class="carousel-inner"> 
      <div class="carousel-item active">
      <p id="slider"></p>
      </div>
    </div>
  
</div>

<div class="card-body" id="ort">
    <div class="container mt-3">
        <div class="d-flex flex-column mb-3" id="day">
        
    </div>
    </div>
</div>

  <a href="#" class="btn btn-primary" id="bttn">+ Add Location </a>

<script> 
function myFunction() {
  const hour = new Date().getHours(); 
  var greeting ;
  if (hour >= 00 && hour <=12) {
  greeting ='<img class="img" src="https://c.pxhere.com/photos/be/3a/sunrise_sun_morgenrot_skies_morning_sun_mood_nature_fog-583518.jpg!d">'; // sabah 
  } else if (hour >12 && hour <=18 ){
  greeting ='<img class="img" src="https://www.manzara.gen.tr/w1/G%C3%B6l-Foto%C4%9Fraflar%C4%B1-4.jpg">' ; // öğlen 
  } else  {
 greeting ='<img class="img" src="https://cdn.neredekal.com/blog/IuR/760x380/doganin-carpici-renkleriyle-muhtesem-manzaralar.jpg">'; // akşam
  };      
document.getElementById("slider").innerHTML = greeting;
}

$(document).ready(function(){
    var $days = $('#day');
    calcTemp(36.9719, 35.3324);
    moment.locale('tr');
    $('#cities').on('change', function() {
        var enlem = $("#cities :selected").attr("enlem");
        var boylam = $("#cities :selected").attr("boylam");
        calcTemp(enlem, boylam);
    });

    function calcTemp(enlem, boylam){
        var $list =$('#list');
    var API_URL ='http://api.openweathermap.org/data/2.5/onecall?';
    var params ={
        units: 'metric',
        lang:'tr',
        appid: '80c0146bbfc235fcb6ec8a6c8d163a6a',
        lat: enlem, // enlem
        lon: boylam // boylam
        };
        
    axios
      .get(`${API_URL}${jQuery.param(params)}`)
      .then(response =>{
        $days.empty();
        $('#temp').text(`${response.data.daily[0].temp.day} °c`);
        $('#desc').text(`${response.data.daily[0].weather[0].description}`);
        response.data.daily.map(function (val) {
          var date = new Date(val.dt * 1000);
          var description = val.weather[0].description;
          var main = val.weather[0].main;
          var temp = val.temp.day;
          var icon = `http://openweathermap.org/img/wn/${val.weather[0].icon}.png`;
          var $item = $(`
          <div class="p-1 bg" >
          <span style="color:black;font-size:17px;">${moment(date).format('Do MMMM YY dddd ')} </span><br></br>
          <span style="text-align:center;">${description} ${Math.round(temp)}°c </span><br></br>
          <img class="icons" src="${icon}" >
          </div>
          `);
          $days.append($item);
        });
      })
      .catch(err => console.log(err));
    }
});

</script>
</body>
</html>