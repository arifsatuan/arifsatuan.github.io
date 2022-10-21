# Form


Penulisan form intinya 

```html
<link rel="stylesheet" href="/css/form.css">
<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" 
onload="if(submitted) {window.location='/thankyou';}"></iframe>

<form action="https://docs.google.com/forms/d/e/1FAIpQLSd43IjAIBJEYvhWlAWXCEZ67APgEVAubD3bZxanJudhxbKOQw/formResponse" 
method="post" target="hidden_iframe" onsubmit="submitted=true;">
</form>
<form action="https://docs.google.com/forms/d/e/1FAIpQLSd43IjAIBJEYvhWlAWXCEZ67APgEVAubD3bZxanJudhxbKOQw/formResponse" method="post" target="hidden_iframe" onsubmit="submitted=true">
  <label>NIS</label>
        <input type="text" pattern="^[0-9]{5}$" placeholder="5 digit NIS" class="form-input" name="entry.154653614" required title="Harus 5 digit atuh Neng!">

   <label>Pertanyaan 1</label>
        <textarea rows="8" onpaste="return false;" ondrop="return false;" autocomplete="off" placeholder="Rangkum apa saja yang sudah dibaca di bacaan di atas dalam 3 paragraf" class="form-input" name="entry.1125416052" ></textarea>
 <label>Pertanyaan 2</label>
        <textarea rows="8" onpaste="return false;" ondrop="return false;" autocomplete="off" placeholder="Sebutkan satu rumus (selain contoh di atas), apa saja variabelnya, konsep apa yang ada di dalamnya" class="form-input" name="entry.394474086" ></textarea>

   <button type="submit">Send</button>
</form>

<iframe style="height:400px; width:100%" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTx7GJTfNij7kKAurUSBKxLFaCAGNFkYeA2IO7qnXyPL4Ep-6EcYp_VY7JXS_p5P8MMVzZKLzjvgut_/pubhtml?gid=1904460953&amp;single=true&amp;widget=true&amp;headers=false"></iframe>

```

Degan sebelumnya membuat file `static/css/forms.css`
```css
form { max-width:420px; margin:50px auto; }
.form-input {
//color:white;
//font-family: Helvetica, Arial, sans-serif;
border-radius: 5px;
line-height: 22px;
background-color: transparent;
border:2px solid #2d96bd;
transition: all 0.3s;
padding: 13px;
margin-bottom: 15px;
width:100%;
box-sizing: border-box;
outline:0;
}

.form-input:focus { border:2px solid #2d96bd; }

textarea {

}

[type="submit"] {
font-family: 'Montserrat', Arial, Helvetica, sans-serif;
width: 100%;
background:#2d96bd;
border-radius:5px;
border:0;
cursor:pointer;
color:white;
font-size:24px;
padding-top:10px;
padding-bottom:10px;
transition: all 0.3s;
margin-top:-4px;
font-weight:700;
}
[type="submit"]:hover { background:#0e3340; }
```

Dan file `hugo new thankyou.md`


