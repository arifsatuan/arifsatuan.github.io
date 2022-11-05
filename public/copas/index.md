# Copas

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

{{< /rawhtml >}}

