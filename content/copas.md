---
title: "Copas"
date: 2022-11-05T09:11:45+07:00
draft: false
---
{{< rawhtml >}}
<div class="container-sm" id="all">

<div class="input-group col-sm-12">
    <div class="form-group col-sm-12">
                <label for="rumus1">duplicate ke kanan</label>
        <input type="text" class="form-control" id="rumus1" placeholder="" value="=countif($A$2:$Z$2;A$2)>1">
        <button type="button" class="btn btn-primary  " id="cplintang" onclick="copy('rumus1')">Copy</button>
    </div>
</div>
<!--  ################  SEPERATION  ################### -->
<div class="input-group col-sm-12">
    <div class="form-group col-sm-12">
              <label for="rumus2">highlight dupllicate ke bawah </label>
         <input type="text" class="form-control" id="rumus100" placeholder="" value="=countif($A$2:$A$100;$A2)>1">
         <button type="button" class="btn btn-primary " id="cpbujur" onclick="copy('rumus100')">Copy</button>
    </div>
  </div>
<!--  ################  SEPERATION  ################### -->
<div class="input-group col-sm-12">
  <div class="form-group col-sm-12">
			<label for="rumus2">Regex No HP </label>
       <input type="text" class="form-control" id="rumus2" placeholder="" value="^\'0[0-9]{9,13}$">
	   <button type="button" class="btn btn-primary " id="cpbujur" onclick="copy('rumus2')">Copy</button>
  </div>
</div>
<!--  ################  SEPERATION  ################### -->
<div class="input-group col-sm-12">
    <div class="form-group col-sm-12">
              <label for="rumus3">Regex Angka (NIS) atau (NIK) digit, (NPWP) </label>
         <input type="text" class="form-control" id="rumus3" placeholder="" value="^[0-9]{5}$">
         <button type="button" class="btn btn-primary " id="cpbujur" onclick="copy('rumus3')">Copy</button>
    </div>
  </div>
  <!--  ################  SEPERATION  ################### -->
<div class="input-group col-sm-12">
    <div class="form-group col-sm-12">
              <label for="rumus4">Symbol penting</label>
         <input type="text" class="form-control" id="rumus4" placeholder="" value="☑ ☐ ☒ √ ×">
         <button type="button" class="btn btn-primary " id="cpbujur" onclick="copy('rumus4')">Copy</button>
    </div>
  </div>

    <!--  ################  SEPERATION  ################### -->
<div class="input-group col-sm-12">
    <div class="form-group col-sm-12">
              <label for="rumus5">Symbol Fisika</label>
         <input type="text" class="form-control" id="rumus5" placeholder="" value="ρ α β ɣ ¹²³⁴⁵⁶⁷⁸⁹⁰₁₂₃₄₅₆₇₈₉₀ θ ω π ">
         <button type="button" class="btn btn-primary " id="cpbujur" onclick="copy('rumus5')">Copy</button>
    </div>
  </div>
    <!--  ################  SEPERATION  ################### -->
    <div class="input-group col-sm-12">
        <div class="form-group col-sm-12">
                  <label for="rumus6">Nomor to WA (multiformat)</label>
             <input type="text" class="form-control" id="rumus6" placeholder="" value='=arrayformula(if(left(F4:F,1)="+", hyperlink("https://wa.me/"&right(F4:F, len(F4:F)-1),"Call"),if(left(F4:F,1)="6", hyperlink("https://wa.me/"&(F4:F),"Call"),if(left(F4:F,1)="0", hyperlink("https://wa.me/62"&right(F4:F, len(F4:F)-1),"Call"),if(left(F4:F,1)="8", hyperlink("https://wa.me/62"&(F4:F),"Call"),"")))))'>
             <button type="button" class="btn btn-primary " id="cpbujur" onclick="copy('rumus6')">Copy</button>
        </div>
      </div>
        <!--  ################  SEPERATION  ################### -->
<div class="input-group col-sm-12">
    <div class="form-group col-sm-12">
                <label for="rumus7">Nomor to WA dimulai '0</label>
            <input type="text" class="form-control" id="rumus7" placeholder="" value='hyperlink("https://wa.me/62"&right(F4:F, len(F4:F)-1),"Klik to Chat")'>
            <button type="button" class="btn btn-primary " id="cpbujur" onclick="copy('rumus7')">Copy</button>
    </div>
    </div>
        <!--  ################  SEPERATION  ################### -->
<div class="input-group col-sm-12">
    <div class="form-group col-sm-12">
                <label for="rumus8">Membersihkan Karakter</label>
            <input type="text" class="form-control" id="rumus8" placeholder="" value='=SUBSTITUTE(SUBSTITUTE(SUBSTITUTE(F9,"+",""),"-","")," ","")'>
            <button type="button" class="btn btn-primary " id="cpbujur" onclick="copy('rumus8')">Copy</button>
    </div>
    </div>
<script>
function getMobileOperatingSystem() {
  var userAgent = navigator.userAgent || navigator.vendor || window.opera;

  if( userAgent.match( /iPad/i ) || userAgent.match( /iPhone/i ) || userAgent.match( /iPod/i ) )
  {
    //return 'iOS';
    console.log("iphone");
  }
  else if( userAgent.match( /Android/i ) )
  {
    //return 'Android';
    console.log("Android");
  }
  else
  {

    console.log("computer");
    //return 'unknown'; 
  // alert("gunakan smartphone");
   //document.getElementById("all").style.display = "none";
   //document.getElementById("all").style.visibility = "collapse";
  // document.getElementById("alert").style.visibility = "visible";
  }
}

getMobileOperatingSystem();

   
var x = document.getElementById("lintang");
var y = document.getElementById("bujur");
 
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.value =  position.coords.latitude;
  y.value=position.coords.longitude;
  document.getElementById("cekmap").style.visibility = "visible";
  document.getElementById("cekmap").href = "https://www.google.com/maps/search/?api=1&query="+x.value+","+y.value;
}


function copy(id) {
    var id;
  var copyText = document.getElementById(id);
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */
   navigator.clipboard.writeText(copyText.value);
}

</script>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
{{< /rawhtml >}}
