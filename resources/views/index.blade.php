<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">



    <title>Google Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  
  <body>
    <header>
      
      <nav>
        <ul id="nav_bar">
          <li class="nav-links" id="gmail"><a href="#">Gmail</a></li>
          <li class="nav-links"><a href="#">Images</a></li>
          {{-- <li id="sign_in"><a href="{{url('register')}}">Sign In</a></li> --}}
          {!! !Auth::user()? "<li id='sign_in'><a href='/register'>Sign In</a></li>":'Already connected  as '.Auth::user()->name!!}
        </ul>  
      </nav>  
      {{-- @include('navigation-menu') --}}
    </header>  
  
    <!-- GOOGLE IMG -->  
    <div class="google offset-lg-5 ">
      <a href="#" id="google_logo"><img  src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/455/6847633455_6d892ce2-4585-415a-a21a-395ac074dfed.png?cb=1645270253"/></a>
    </div>
    
    <!-- FORM SEARCH -->  
    <div class="form container">  
      <form type="get" action="{{route('recherche')}}">
        <label for="form-search"></label>
        <input type="text" name="search" type="search" id="search" class="form-control" onfocus="" value="" >
        <button class="btn btn-primary">rechercher</button>
      </form>
      <div id="search_list"></div>
    </div>  
    
    <!-- BUTTONS -->
    <div class= "buttons">  
      <input type="submit" value="Google Search" id="google_search">
      <input type="submit" value="I'm Feeling Lucky" id="im_feeling_lucky">
    </div>
      
    <!-- FOOTER -->
    <footer>
        <ul class="footer-left">
          <li><a href="#">Advertising</a></li>
          <li><a href="#">Business</a></li>
          <li><a href="#">About</a></li> 
        </ul>
        <ul class="footer-right">    
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Settings</a></li>
        </ul>       
    </footer>      
  </body>

  <style>
      /* BASIC STYLES */
body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
}

header {
  width: 100%;
}

ul {
  list-style: none;
}

/* NAV BAR */
#nav_bar {
  float: right;
}

#nav_bar li {
  display: inline-block;
  padding: 8px;
}

#nav_bar #sign_in {
  background: #4887ef; 
  margin-right: 25px;
  padding: 7px 15px;
  border-radius: 3px; 
  font-weight: bold;
}

.nav-links {
  color: #404040;
}

a {
  text-decoration: none;
  color: inherit;
}

li.nav-links a:hover {
  text-decoration: underline;
}

#sign_in:hover { 
  box-shadow: 1px 1px 5px #999;
}

#sign_in {
  color: #fff;
}

/* GOOGLE AREA */
.google #google_logo {
  text-align: center;
  display: block;
  margin: 0 auto;
  clear: both;
  padding-top: 112px;
  padding-bottom: 20px;
}

.form {
  text-align: center;
}

#form-search { 
  width: 450px;
  line-height: 32px;
  padding: 20px 10px;
}

.form #form-search {
  padding: 0 8px;
}

/*#form-search:hover {
  border-color: #e4e4e4;
  padding-top: 0;
}*/

.buttons {
  text-align: center;
  padding-top: 30px;
  margin-bottom: 300px;
}

/* FOOTER */
footer  {
  background: #f2f2f2;
  border-top: solid 2px #e4e4e4;
/*   position: fixed; */
  bottom: 0;
  padding-bottom: 0;
  width: 100%;
  
}

footer ul li {
  display: inline;
  color: #666666;
  font-size: 14px;
  padding: 13px;
}

footer ul {
  float: left;
  padding: 1px;
}

footer ul a:hover {
  text-decoration: underline;
}

.footer-right {
  float: right;
}

/* MEDIA QUERIES */

@media screen and (max-width: 400px) {
 
 li.nav-links a {
    display: none;
  }
  
 #google_logo {
   padding: 0;
 }
  
 .buttons {
   display: none;
 }
  
 #form-search {
   width: 80%;

 }
  
 footer {
   bottom: 0;
 }
  
 footer ul {
   float: none;
   padding-bottom: 2px;
    
 }
  
 .footer-left {
   text-align: center;
   margin: auto; 
   padding-top: 10px;
    
 }
  
 .footer-right {
   float: none;
   text-align: center;
   
 }
}

@media screen and (max-width: 565px) {
 
  li.nav-links a {
    display: none;
  }
  
  
 #google_logo {
   padding: 0;
 }
  
 .buttons {
   display: none;
 }
  
 #form-search {
   width: 80%;

 }
  
 footer {
/*    bottom: 0;
   postion: absolute; */
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;
 }
  
 footer ul {
   float: none;
   padding-bottom: 2px;
    
 }
  
 .footer-left {
   text-align: center;
   margin: auto; 
   padding-top: 10px;
    
 }
  
 .footer-right {
   float: none;
   text-align: center;
   
 }
}

  </style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script>
//   var ok=  document.getElementById('#search_list')
  // console.console.log(ok);
    $(document).ready(function(){
        $('#search').on('keyup',function(){
            var query=$(this).val();
            $.ajax({
                url:'search',
                type:'GET',
                data:{
                    'search':query
                },
                success:function(data){
                    $('#search_list').html(data);
                }
           
            });
        });
    });
</script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> --}}
</html>
</x-app-layout>