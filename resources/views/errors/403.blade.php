<style>
  svg {
  width: 251px;
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left:-40px;
  margin-top:-250px;
  animation:animTranslate .6s linear infinite;
}

body{
  margin:0;
  font:300  1.3em/1.3em Roboto, sans-serif;
  height: 100%;
  width: 100%;
  position: absolute;
  min-height: 600px;
  background: #112 url("{{asset('assets/dist/img/back404.jpg')}}") top center no-repeat;
  background-size: 100%;
}

a {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  min-width: 300px;
  font-weight: 400;
  text-align: center;
  top: 50%;
  margin-top: 190px;
  color: #FFF;
  text-decoration: none;
  border-radius: 2px;
  background-color: #03A2E2;
  padding: 10px;
  margin-bottom: 20px;
  box-shadow: 0 2px 3px rgba(0,0,0,0.12), 0 1px 3px rgba(0,0,0,0.24);
}
h1 {
    position: absolute;
    z-index: 2;
    color: #fff;
    font-weight: bold;
    font-size: 1.3em;
    width: 100%;
    text-align: center;
    top: 50%;
    margin-top: 80px;
}
*,:after,:before{box-sizing:border-box}
.pull-left{float:left}
.pull-right{float:right}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}

.roll-wrap{
  top:50%;
  left:50%;
  width:475px;
  height:145px;
  position:absolute;
  margin-top:-72.5px;
  margin-left:-237.5px;
  border-bottom:5px solid #FFF; 
}
.roll{
  width:475px;
  height:145px;
  padding-bottom:20px;
}
.roll .roll-roof,
.roll .roll-main{
  margin:auto;
}
.roll-wrap .road .mud:before,
.roll-wrap .road .mud:after,
.roll .roll-roof .roll-silencer:before,
.roll .roll-roof .roll-silencer:after,
.roll .roll-body:before,
.roll .roll-body:after,
.roll .roll-main .roll-back:before,
.roll .roll-main .roll-back:after,
.roll .roll-main .roll-front:after{
  content:'';
  position:absolute;
}
.roll .roll-roof{
  width:80px;
  height:60px;
  bottom:-1px;
  position:relative;
  background:#056598;
  border:15px solid #FFF;
  border-bottom:none;
}
.roll .roll-roof .roll-silencer{
  width:14px;
  left:-50px;
  height:12px;
  bottom:-1px;
  position:absolute;
  background:#FFF;
}
.roll .roll-roof .roll-silencer:before{
  height:0;
  bottom:100%;
  width:inherit;
  border:6px solid #FFF;
  border-top:4px solid transparent;
  border-left:8px solid transparent;
}
.roll .roll-roof .roll-silencer:after{
  left:4px;
  width:5px;
  height:12px;
  bottom:100%;
  background:inherit;
  transform:skewY(-35deg);
}
.roll .roll-roof .roll-silencer .roll-smoke{
  left:-5px;
  width:16px;
  height:16px;
  bottom:20px;
  border-radius:50%;
  position:absolute;
  background:#FFF;
  transform:scale(0);
  animation:translateSmoke .5s linear infinite;
}
.roll-main{
  height:60px;
  width:185px;
  position:relative;
}
.roll .roll-main .roll-body{
  height:inherit;
  width:inherit;
  position:relative;
  background:#FFF;
}
.roll .roll-main .roll-body:before{
  left:-15px;
  width:30px;
  height:inherit;
  background:inherit;
  transform:skewX(-20deg);
}
.roll .roll-main .roll-body:after{
  bottom:0;
  right:15px;
  width:35px;
  height:41px;
  background:#056598;
}
.roll .roll-main .roll-back{
  bottom:-1px;
  width:75px;
  height:45px;
  position:absolute;
}
.roll .roll-main .roll-back:before{
  width:75px;
  height:45px;
  background:#056598;
  border-radius:50% 50% 0 0 / 85% 85% 0 0;
}
.roll .roll-main .roll-back:after{
  top:50%;
  left:50%;
  width:60px;
  height:60px;
  border-radius:50%;
  margin-top:-15px;
  margin-left:-30px;
  background:transparent;
  border:15px solid #FFF;
}
.roll .roll-main .roll-front{
  z-index:1;
  width:60px;
  height:60px;
  right:-24px;
  bottom:-20px;
  border-radius:50%;
  position:absolute;
  background:#FFF;
  border-top:2px solid #056598;
}
.roll .roll-main .roll-front:after{
  top:50%;
  left:50%;
  width:80px;
  height:20px;
  margin-top:-10px;
  margin-left:-40px;
  background:inherit;
  border:2px solid #056598;
}
.roll-wrap .road{
  right:0;
  bottom:0;
  height:15px;
  width:140px;
  overflow:hidden;
  position:absolute;
}
.roll-wrap .road .mud-wrap{
  width:160px;
  position:absolute;
  animation:moveRoad .4s linear infinite;
}
.roll-wrap .road .mud{
  bottom:0;
  width:40px;
  float:left;
  height:15px;
  position:relative;
  display:inline-block;
}
.roll-wrap .road .mud:before,
.roll-wrap .road .mud:after{
  width:20px;
  height:20px;
  border-radius:4px;
  background:#FFF;
  transform:rotate(45deg);
}
.roll-wrap .road .mud:before{
  left:0;
  bottom:-17px;
}
.roll-wrap .road .mud:after{
  right:0;
  bottom:-20px;
}

.roll-wrap .roll-roof,
.roll-wrap .roll-body,
.roll-wrap .roll-silencer,
.roll-wrap .roll-back:before,
.roll-wrap .roll-front{
  animation:animTranslate .6s linear infinite;
}
.roll-wrap .roll-silencer{
  animation-duration:.4s;
}
.roll-wrap .roll-front{
  animation-duration:.3s;
}
.roll-wrap .roll-back{
  animation:animTranslate .8s linear infinite;
}
@keyframes moveRoad{
  0%{
    right:-40px;
  }
  100%{
    right:0;
  }
}
@keyframes translateSmoke{
  0%{
    opacity:0;
    transform:scale(0) translate(0);
  }
  60%{
    transform:scale(.5) translate(0);
  }
  100%{
    opacity:.6;
    transform:scale(1) translate(-10px,-40px);
  }
}
@keyframes animTranslate{
  0%{
    transform:translateY(0);
  }
  50%{
    transform:translateY(2px);
  }
  100%{
    transform:translateY(0);
  }
}
</style>
<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="675.000000pt" height="216.000000pt" viewBox="0 0 675.000000 216.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,216.000000) scale(0.100000,-0.100000)"
fill="#ffffff" stroke="none">
<path d="M0 1080 l0 -1080 1078 2 1077 3 3 1045 c1 575 0 1060 -3 1078 l-6 32
-1074 0 -1075 0 0 -1080z m1193 773 c6 -16 42 -79 79 -141 38 -62 68 -117 68
-123 0 -12 -178 -253 -191 -257 -5 -2 -28 12 -51 30 -94 74 -193 89 -291 44
-106 -48 -152 -121 -152 -236 1 -63 5 -81 27 -116 53 -82 137 -129 233 -129
66 0 110 17 163 62 19 16 150 201 291 413 l257 385 168 5 c105 3 174 1 183 -5
11 -8 2 -27 -42 -95 -30 -46 -55 -90 -55 -96 0 -7 -4 -14 -8 -16 -5 -1 -114
-178 -242 -393 -129 -214 -240 -396 -247 -403 -7 -7 -13 -18 -13 -23 0 -6 -11
-25 -25 -43 -14 -18 -25 -38 -25 -44 0 -6 -7 -17 -14 -25 -8 -8 -28 -37 -43
-64 -15 -28 -65 -111 -110 -186 -46 -74 -83 -140 -83 -147 0 -6 -10 -10 -22
-8 -16 2 -31 21 -53 63 -27 53 -75 139 -112 200 -7 11 -15 27 -19 35 -9 18
-68 123 -140 247 -30 50 -54 94 -54 97 0 3 -17 34 -38 68 -21 35 -41 70 -45
78 -4 8 -23 42 -42 75 -19 33 -39 69 -44 81 -5 11 -27 50 -49 86 -39 63 -100
172 -130 233 -9 17 -18 32 -21 35 -3 3 -13 19 -22 35 -8 17 -37 67 -64 113
-39 67 -46 85 -34 92 7 5 200 9 429 9 389 0 440 2 465 23 31 26 91 67 98 68 4
0 13 -12 20 -27z"/>
</g>
</svg>
<h1>ERROR 403 YOUR PAGE NOT ACCESS!</h1>
<div class="roll-wrap">
<div class="roll">
  <div class="roll-roof">
    <div class="roll-silencer">
      <div class="roll-smoke"></div>
    </div>
  </div>
  <div class="roll-main">
    <div class="roll-body"></div>
    <div class="roll-back"></div>
    <div class="roll-front"></div>
  </div>  
</div>
<div class="road">
  <div class="mud-wrap clearfix">
    <div class="mud"></div>
    <div class="mud"></div>
    <div class="mud"></div>
    <div class="mud"></div>
  </div>
</div>
</div>
<div class="background-gocel"></div>
<div class="background-ground"></div>
<a href="{{route('home')}}">BACK TO HOME</a>