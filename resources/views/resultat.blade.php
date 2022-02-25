
<!DOCTYPE html>
<html>

<head>
    <title>computer engineering mutex concept - Google Search</title>
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div id="header">
        <div id="topbar">
            <img  src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/455/6847633455_6d892ce2-4585-415a-a21a-395ac074dfed.png?cb=1645270253" width="180"/>
           <form  method="get"  action="{{route('recherche')}}">
            <div id="searchbar" type="text">
                <input id="searchbartext" type="text" value="{{old('$search_text')}}" name="search" type="search" />
                <button id="searchbarmic">
                    <img src="images/googlemic.png" />
                </button>
                <button id="searchbarbutton">
                    <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                        </path>
                    </svg>
                </button>
            </div>
        </form>
            

            <div id="boxesicon"></div>
            <div id="bellicon"></div>
            <img id="profileimage" src="images/photo.png" />
        </div>
        <div id="optionsbar">
            <ul id="optionsmenu1">
                <li id="optionsmenuactive">All</li>
                <li>News</li>
                <li>Videos</li>
                <li>Images</li>
                <li>Maps</li>
                <li>More</li>
            </ul>

            <ul id="optionsmenu2">
                <li>Settings</li>
                <li>Tools</li>
            </ul>
        </div>
    </div>
   


    <div id="searchresultsarea">
       <p style="display: none;"> {{$i=0}}</p>
        @foreach ($result as $item)
      
        <p id="searchresultsnumber " style="display: none;">environ  {{$i=$i+1}} resultat( trouvé en 0.56 seconds) </p>
        @endforeach
         <p id="searchresultsnumber">environ  {{$i}} resultat( trouvé en 0.56 seconds) </p>
        {{--  --}}
        @foreach ($result as $item)
        <div class="searchresult">
            <a href="">  <h2> {{$item->title}}</h2></a>
            <a>https://miage.org/wiki/Lock_(computer_science)</a> <button>▼</button>
            <p>{{$item->description}}</p>
            <p> {{$item->categorie->nom_categorie}}</p>
        </div>

        @endforeach
        
        
        <div class="relatedsearches">
            <h3>Searches related to computer engineering mutex concept</h3>
            <div class="relatedlists">
                <ul class="relatedleft">
                    <li>what is <b>mutex</b> and semaphore</li>
                    <li><b>mutex</b> lock c++</li>
                    <li><b>mutex</b> java</li>
                    <li><b>mutex</b> c++</li>
                </ul>
                <ul class="relatedright">
                    <li><b>mutex</b> vs lock</li>
                    <li><b>mutex</b> semaphore example</li>
                    <li><b>mutex</b> and semaphore example in c</li>
                    <li><b>mutex</b> c#</li>
                </ul>
            </div>
        </div>

        {{-- <div class="pagebar">
            <ul class="pagelist">
                <li class="pagelistprevious">Previous</li>
               {{$result->links()}}
                <li class="pagelistnext"> <a href="search={{$search_text}}">Next</a></li>
            </ul>
        </div> --}}

       

          <div class="pagebar">
            <ul class="pagelist">
               
                <li class="pagelistfirst"> 1 {{$result->appends(['search'=>$search_text])->links()}}</li>
               
               
            </ul>
        </div>
    </div>
    
    <div id="footer">
        <div id="footerlocation">
            <p>Somewhere, Moon </p>
            <p> - From your phone (Location History) - Use precise location - Learn more</p>
        </div>

        <ul id="footermenu">
            <li>Help</li>
            <li>Send feedback</li>
            <li>Privacy</li>
            <li>Terms</li>
        </ul>
    </div>
</body>

</html>

<style>
    body {
    min-height: 100%;
    position: relative;
}

#topbar {
    display: flex;
    height: 64px;
    width: 100%;
    align-items: flex-end;
    position: fixed;
    background-color: white;
}

#searchbarimage {
    height: 30px;
    padding: 0px 28px 10px 30px;
    cursor: pointer;
}

html, body {
    margin: 0;
    padding: 0;
    height: auto;
}

#searchbarmic {
    height: 45px;
    width: 35px;
    margin-left: auto;
    background-color: white;
}

#searchbarmic img {
    height: 25px;
}

#searchbarbutton {
    height: 45px;
    width: 55px;
    position: relative;
    margin-right: -2px;
    background-color: white;
}

#searchbarbutton svg {
    height: 25px;
    width: 35px;
    position: relative;
    left: -3px;
}

#searchbarbutton svg path {
    fill: #4285F4
}

#searchbar {
    width: 625px;
    height: 45px;
    border-radius: 100px;
    border-color: lightgray;
    border-style: solid;
    border-width: 1px;
    font-size: 16px;
    position: relative;
    bottom: 5px;
    overflow: hidden;
    display: flex;
    z-index: 100;
}

#searchbar:hover {
    box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
}

#searchbar > input {
    height: 45px;
    border-style: none;
    font-size: 16px;
    line-height: 45px;
    padding-left: 20px;
    flex: 1;
}

#searchbar > input:focus {
    outline: none;
}

#searchbar button {
    border: none;
    cursor: pointer;
}

#searchbar button:focus {
    outline: none;
}

#boxesicon {
    width: 25px;
    height: 25px;
    background-image: url('images/boxes.png');
    opacity: 0.6;
    background-size: 26px;
    position: absolute;
    right: 130px;
    bottom: 14px;
}

#optionsmenuactive::after {
    content: '';
    display: block;
    position: absolute;
    width: 100%;
    height: 3px;
    background-color: #4285F4;
    left: 5px;
    bottom: 0px;
}

#optionsmenu2 {
    list-style: none;
    display: flex;
    flex-direction: row;
    padding: 0px;
    margin: 0px;
    margin-left: 100px;
}

#optionsmenu2 li {
    padding: 0px 10px 15px 20px;
}

#searchresultsarea {
    margin-left: 150px;
    font-family: 'Arial';
}

#searchresultsnumber {
    font-size: 0.8rem;
    color: gray;
}

.searchresult {
    margin-left: 8px;
}

.searchresult h2 {
    font-size: 19px;
    line-height: 18px;
    font-weight: normal;
    color: rgb(29, 1, 189);
    margin-bottom: 0px;
    margin-top: 25px;
}

.searchresult a {
    font-size: 14px;
    line-height: 14px;
    color: green;
    margin-bottom: 0px;
}

.searchresult button {
    font-size: 10px;
    line-height: 14px;
    color: green;
    margin-bottom: 0px;
    padding: 0px;
    border-width: 0px;
    background-color: white;
}

#bellicon {
    width: 20px;
    height: 20px;
    background-color: rgb(105, 105, 105);
    background-image: url('images/bell.png');
    background-size: 12px;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    border-radius: 30px;
    position: absolute;
    right: 90px;
    bottom: 18px;
}

#profileimage {
    border-radius: 50px;
    width: 32px;
    height: 32px;
    position: absolute;
    right: 40px;
    bottom: 12px;
}

#optionsbar {
    width: 100%;
    height: 50px;
    border-width: 0px;
    border-bottom: 1px;
    border-color: lightgray;
    border-style: solid;
    display: flex;
    align-items: flex-end;
    font-family: 'Arial';
    font-size: 13px;
    color: rgb(112, 112, 112);
    padding-top: 64px;
}

#optionsmenu1 {
    list-style: none;
    display: flex;
    flex-direction: row;
    padding: 0px;
    margin: 0px;
    margin-left: 150px;
}

#optionsmenu1 li {
    padding: 0px 10px 15px 20px;
}

#optionsmenuactive {
    color: #4285F4;
    font-weight: bold;
    position: relative;
    z-index: -1;
}

.searchresult p {
    width: 625px;
    font-size: 13px;
    margin-top: 0px;
    color: rgb(82, 82, 82);
}

.relatedsearches h3 {
    font-weight: normal;
    font-size: 19px;
    margin-top: 40px;
    margin-bottom: 10px;
}

.relatedlists ul {
    list-style: none;
    color: rgb(29, 1, 189);
    padding-left: 0px;
    font-size: 14px;
    margin-bottom: 50px;
}

.relatedlists {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 300px;
}

.relatedlists ul li {
    margin-bottom: 8px;
}

.pagelist {
    list-style: none;
    color: rgb(29, 135, 255);
    display: flex;
    flex-direction: row;
    font-size: 12px;
    margin-bottom: 30px;
    margin-left: 100px;
}

.pagelistprevious::before {
    content: '<';
    display: block;
    position: absolute;
    right: 12px;
    top: -35px;
    color: rgb(29, 135, 255);
    font-size: 20px;
    transform: scale(0.7, 1.2);
}

.pagelistprevious::after {
    content: '';
    display: block;
    position: absolute;
    right: -40px;
    top: -35px;
    width: 40px;
    height: 40px;
    background-image: url('images/g.png');
    background-repeat: no-repeat;
    background-size: 28px;
}

.pagelistfirst {
    margin-left: 20px;
    font-size: 13px;
}

.pagelistnumber::before, .pagelistfirst::before {
    content: '';
    display: block;
    position: absolute;
    left: -2px;
    top: -21px;
    border-radius: 50px;
    width: 10px;
    height: 10px;
    background-color: white;
    z-index: 3;
}

.pagelistnumber::after {
    content: '';
    display: block;
    position: absolute;
    left: -6px;
    top: -25px;
    border-radius: 50px;
    width: 18px;
    height: 18px;
    background-color: rgb(255, 196, 0);
    z-index: 2;
}

.pagelistfirst::after {
    content: '';
    display: block;
    position: absolute;
    left: -6px;
    top: -25px;
    border-radius: 50px;
    width: 18px;
    height: 18px;
    background-color: red;
    z-index: 2;
}

.pagelist li {
    margin-right: 15px;
    position: relative;
}

.pagelistnext {
    margin-left: 40px;
    font-size: 13px;
}

.pagelistnext::before {
    content: '>';
    display: block;
    position: absolute;
    left: 5px;
    top: -35px;
    color: rgb(29, 135, 255);
    font-size: 20px;
    transform: scale(0.7, 1.2);
}

.pagelistnext::after {
    content: '';
    display: block;
    position: absolute;
    left: -55px;
    top: -37px;
    width: 50px;
    height: 50px;
    background-image: url('images/gle.png');
    background-repeat: no-repeat;
    background-size: 48px;
}


#footer {
    background-color: rgb(238, 238, 238);
    position: relative;
    left: 0px;
    bottom: 0px;
    width: 100%;
    font-size: 13px;
    font-family: 'arial';
    color: rgb(85, 85, 85);
}

#footermenu {
    list-style: none;
    display: flex;
    flex-direction: row;
    margin-top: 0px;
    margin-left: 135px;
    margin-bottom: 0px;
    padding-bottom: 10px;
}

#footermenu li {
    padding-right: 30px;
}

#footerlocation {
    display: flex;
    direction: row;
    margin-left: 175px;
    position: relative;
    top: -5px;
}

#footerlocation p:nth-of-type(1) {
    font-weight: bold;
}
</style>