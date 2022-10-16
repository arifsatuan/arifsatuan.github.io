---
title: "Form"
date: 2022-10-16T22:24:23+07:00
draft: false
---

Penulisan form intinya 

```html
<link rel="stylesheet" href="/css/form.css">
<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" 
onload="if(submitted) {window.location='/thankyou';}"></iframe>

<form action="https://docs.google.com/forms/d/e/1FAIpQLSc4_IDUPGYGTHQ0g0GgBTc3sGdQSbMA-Sbr02SijiO-qT_EAg/formResponse" 
method="post" target="hidden_iframe" onsubmit="submitted=true;">
</form>
<form action="https://docs.google.com/forms/d/e/1FAIpQLSc4_IDUPGYGTHQ0g0GgBTc3sGdQSbMA-Sbr02SijiO-qT_EAg/formResponse" method="post" target="hidden_iframe" onsubmit="submitted=true">
  <label>NIS</label>
        <input type="number" placeholder="5 digit NIS" class="form-input" name="entry.472610624" required>

   <label>Resume</label>
        <textarea rows="5" placeholder="ketikkan minimal 2 paragraf kegiatan praktikum hari ini dihubungkan dengan teks bacaan di atas" class="form-input" name="entry.1370131877" ></textarea>

   <button type="submit">Send</button>
</form>
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

