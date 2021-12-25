@extends('layout')
@section('page-content')
<!DOCTYPE html>
<!-- saved from url=(0043)https://cdpn.io/dasshounak/fullpage/QWKKYdj -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
  
<link rel="apple-touch-icon" type="image/png" herf="{{asset('ttps://cpwebassets.codepe')}}n.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" herf="{{asset('ttps://cpwebassets.codepe')}}n.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

<link rel="mask-icon" type="" herf="{{asset('ttps://cpwebassets.codepe')}}n.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">


  <title>Contrat</title>
  
  
  
  
<style>


.container {
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
}

form {
  background: rgb(102 165 175 / 30%);
  padding: 3em;
  height: 400px;
  border-radius: 20px;
  border-left: 1px solid rgba(255, 255, 255, 0.3);
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  -webkit-backdrop-filter: blur(10px);
          backdrop-filter: blur(10px);
  box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, 0.2);
  text-align: center;
  position: relative;
  transition: all 0.2s ease-in-out;
  box-shadow: 0 0 2px #404565, 0 0 2px #5fc5d2, 0 0 20px #cceef3;
}
form p {
  font-weight: 500;
  color: #fff;
  opacity: 0.7;
  font-size: 1.4rem;
  margin-top: 0;
  margin-bottom: 10px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
form a {
  text-decoration: none;
  color: #ddd;
  font-size: 12px;
}
form a:hover {
  text-shadow: 2px 2px 6px #00000040;
}
form a:active {
  text-shadow: none;
}
form input {
  background: transparent;
  width: 200px;
  padding: 1em;
  margin-bottom: 2em;
  border: none;
  border-left: 1px solid rgba(255, 255, 255, 0.3);
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 5000px;
  -webkit-backdrop-filter: blur(5px);
          backdrop-filter: blur(5px);
  box-shadow: 4px 4px 60px rgba(0, 0, 0, 0.2);
  color: #fff;
  font-family: Montserrat, sans-serif;
  font-weight: 500;
  transition: all 0.2s ease-in-out;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
form input:hover {
  background: rgba(255, 255, 255, 0.1);
  box-shadow: 4px 4px 60px 8px rgba(0, 0, 0, 0.2);
}
form input[type=num]:focus, form input[type=num]:focus {
  background: rgba(166, 146, 192, 0.1);
  box-shadow: 4px 4px 60px 8px rgba(0, 0, 0, 0.2);
}
form input[type=button] {
  margin-top: 10px;
  width: 150px;
  font-size: 1rem;
}
form input[type=button]:hover {
  cursor: pointer;
}
form input[type=button]:active {
  background: rgba(255, 255, 255, 0.2);
}
form:hover {
  margin: 4px;
}

::-moz-placeholder {
  font-family: Montserrat, sans-serif;
  font-weight: 400;
  color: #fff;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}

:-ms-input-placeholder {
  font-family: Montserrat, sans-serif;
  font-weight: 400;
  color: #fff;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}

::placeholder {
  font-family: Montserrat, sans-serif;
  font-weight: 400;
  color: #fff;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}

.drop {
  background:  rgb(102 165 175 / 30%);
  -webkit-backdrop-filter: blur(10px);
          backdrop-filter: blur(10px);
  border-radius: 10px;
  border-left: 1px solid rgba(255, 255, 255, 0.3);
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  box-shadow: 10px 10px 60px -8px rgba(0, 0, 0, 0.2);
  position: absolute;
  transition: all 0.2s ease;
}
.drop-1 {
  height: 80px;
  width: 80px;
  top: -20px;
  left: -40px;
  z-index: -1;
}
.drop-2 {
  height: 80px;
  width: 80px;
  bottom: -30px;
  right: -10px;
}
.drop-3 {
  height: 100px;
  width: 100px;
  bottom: 120px;
  right: -50px;
  z-index: -1;
}
.drop-4 {
  height: 120px;
  width: 120px;
  top: -60px;
  right: -60px;
}
.drop-5 {
  height: 60px;
  width: 60px;
  bottom: 170px;
  left: 90px;
  z-index: -1;
}

a,
input:focus,
select:focus,
textarea:focus,
button:focus {
  outline: none;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
  c
</script>


</head>

<body translate="no">
  <link rel="preconnect" herf="{{asset('ttps://fonts.gstatic.com/')}}">
<link herf="{{asset('/css2" rel="stylesheet"> ')}}">

<div class="container">

  <form action=" {{ route('log.create')}} " method="get">
    {{ csrf_field()}}

   
    <p>Client</p>
   
    <input type="text" name="nom" placeholder="nom"><br>
    <input type="num" name="prenom" placeholder="prenom"><br>
    <input type="num" name="tell" placeholder="telephone"><br>
    <input type="num" name="add" placeholder="addrese"><br>
    
    <button type="submit">enregistre</button>
   
  <!--   <button type="submit">envoyer</button><br> -->
  
  </form>

  <div class="drops">
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div>
  </div>
</div>
    <script src="./stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js.télécharger"></script>

  

  




 
</body></html>
@endsection