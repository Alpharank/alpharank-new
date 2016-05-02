<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Alpharank</title>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Merriweather" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script src="http://d3js.org/topojson.v1.min.js"></script>
      
  </head>
  <body>
    <header class="header clearfix">
      <canvas class="dots-canvas"></canvas>
      <video autoplay  poster="images/brian_ley.png" id="bgvid" loop muted>
      <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
      <source src="videos/biran_ley.webm" type="video/webm">
      <source src="videos/biran_ley.mp4" type="video/mp4">
      </video>
      <div class="vids-overlay"></div>
      <nav>
        <div class="main-nav fixed-top">
          <ul>
            <li>
              <a href="#">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="238px" height="36px" viewBox="0 0 238 36" enable-background="new 0 0 238 36" xml:space="preserve">
                  <g id="Layer_1" display="none">
                  </g>
                  <g id="Layer_2" display="none">
                    
                      <rect id="background" x="-78.3" y="-120.6" display="inline" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="400" height="300"/>
                    
                      <image display="inline" overflow="visible" width="228" height="29" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOQAAAAdCAYAAAC6ysBcAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
                  bWFnZVJlYWR5ccllPAAAA2ppVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdp
                  bj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6
                  eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1
                  Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJo
                  dHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlw
                  dGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEu
                  MC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVz
                  b3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1N
                  Ok9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowMjgwMTE3NDA3MjA2ODExOEE2RENFODIzMERD
                  MDc4QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3MUUzRTExNzVFQUExMUU1OEU1NUJFMEZB
                  MDdDODNBOCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3MUUzRTExNjVFQUExMUU1OEU1NUJF
                  MEZBMDdDODNBOCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNSAoV2lu
                  ZG93cykiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCMTZE
                  MDkyMjVEODkxMUU1QTY0QkUwOUEzOTcyNDI0QyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpC
                  MTZEMDkyMzVEODkxMUU1QTY0QkUwOUEzOTcyNDI0QyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9y
                  ZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PlrsYMEAAA0jSURBVHja7F0J
                  kFTVFb2/u6d7NpgBZ9gXIRIWEwRFSUCigYSQRBCHpTTGaGIwJEHLUkQlUCoSNZGEMsGUGo0pFUmI
                  RYhCBMSIMUEMYRFBEDQgYQnLMMzWPTM93Z13u+/XP6/v+//93z0LVX2qbtHz/tLvv3eXc+97/TES
                  iQTkkEMOHQO+3BDkkEPHQcD8UPbyEi/X3yrkNiGdhWyizyd0LowHA9B/zXYo23kIYsFAbiY6kpdu
                  jkO4e2c4cP04SPiFz86xqFbB6Slz1QbpAVOF/Mry90wh+UKuQXvTuYERj7v5vlIhjwoJSe2VQuYJ
                  iTpcP0HIjVJbk5B7hZzS7MNnhSzQOA/7ckTIP4W8YdO364VMEmLV+CP0HarBKRHycyEF1qEUskLI
                  XzX69qCQ/kx/70YdMe/mi8bE/CQgEWjRu4FC7ne4f0xIHT3HO0LeojY3mC1krDQuiGVC/uVwbSfS
                  k0JpfHZRuwo3C7lS+s7/MM87jXTfel41jV+Yue9lQuZIbX6aq+XZNMgZTNtEIT2EHHO8WnhdQ3hi
                  F74X7/19xbGVQt52uP5zQm5g2h92YZA9FfewwzYh9wjZyBy7XMi3pTZUgoU29yukcZDTjb0aBmnn
                  UN4U8lySvfgMyKtvFNIAkVCx+KJPZqm7h+d/h5T1Tc3z8fnuIz2S0axhkAU0Pn7m2GZykhyuZOZi
                  D2OQo5nz6mnOZINER/ALmmcZj2Y7h6xm2hpJHEKjAX7hgfMrhSP1a3dhus2xaRrXNzFtYd1obvH+
                  bnEJGcpM5lgD01bv5MqE1Go+n4zJWuOL89MYheBZ0RWfL9PnRwVeL2SK5vmXK4wR8TWKgF7GB8g4
                  /IpjunPB6XctE81NFskZ4yNCdmbbIJ8SUmNNC4lSVDrmjwEfdDp4CvJP10BczyDLiXKqMIWhsh0J
                  eUKeETK4HftgODgujBC9Pk0nEhA6Uw+J7JT9QvT8vTN0vL2on14xmqhpWyCooPdH7ahzJsONFj5e
                  yO+EHBDyD638KpmfxKHblv3JSdfEV4V0tTk+iLh6e6GBvGm9TaQqFvKTduzjUCGjHHKvSdY4k2Qw
                  CVfPH7Y5p0zILQ73wTH6RgYGq4MHyMG3NpDWDmfaFwk50xoGaeZH6HFmUcJf5Jw7QjIqxgqCYOhX
                  72YwFCGS5YnKBPj8w0guopyJM8yrSDHbA1dTpLYaUY1qnBMijwxV1YEvpsXof0zPjnn6F4Q8oThv
                  koPOXSFF0TijvEhbSzMYhx4ahalMUawITjuEPGt3YbbWIbfQv+N1Tk4EDDg7uJebAfyy1Pa6kK2M
                  she0k7IjDTlMsg9SVdDHmfO6CLmwHfqH81zBKMd6qW2ckL4pg/RBsDoM/oZo0jgdcIye/SAVcX4I
                  qeqqjP6krLrRD9Of56W27ow+eHGgo1pxvLFKPIBpnw8OqwHZMkhMdDcIuVZLO6IxqB3QDRpLC3WW
                  PtAjlkht+F2bpbaBFJ3aK0eUsUZxbk8dn5Xl/qETGCm1YbVyndRWZFJGzB0D4UYI1olA6myQ3PNv
                  V+RVeYp7lLSgzCmgkf+BGY/pWZivJZRXZwMJi6EhA7pLoQ/rdDxntrCD8rjbyUOOUKaRIndsLCmE
                  moHdk/mkh5zhbUtUtmJyByrkxGyKK3aIg33lN+LBYLHa52dYzWbleCcrrc0QrKqHhOFJTboxbVyq
                  YS0qydXVd4kJHWXOLXbRlzhDz6+A9OULr/BT3zE3vZd59kaKjo7I1haZG8jz/5YKLKfpYYeQh0vX
                  SpE/1lzQI7lTxwa9aeBkerSXviMi0dSplB9E29j4OANS0aqTDvdCqvOKwuiwLV8rV2+pLDJdbaII
                  +TGJdaMALsifL+QQshfMIzUoq7w8gEs9X2fO22NT+OHWtd8gx7ZFcsy9qJ/rXYzDKtJJq87/lCJX
                  VYbzX071lASlJTKeFvJeWxkkDv7nySvMtyjO08TT34fULomWBtkcg/peXaBJRMq8mkhqi1Y6cFLl
                  dae3yOMcoag8xnJsKPVnSxsbZJAEESLqdTtzXh2Nhx06Uz6cLQyH9GrfLsr3cJ5wwf47lmMF9P3L
                  MEpipVWj+PYDckAGRYoKReFlheJ6VOKJjJGbmwnWMUxpuguDROXCDQF9hHzF0t6XdPauDMfYsCk0
                  oZ4+4CbZtwKVaR5Rwt1CVmsk0KPI494odXAWDeoYFW2NFudDbb8yu0oeR1etu1E2MgMzDdoeT5KS
                  76IosJLJe83+Hm/jvl3DzPMGSwRerxr3VKW1Puk8HYg2bnrAqiIu69ysiBJbaVw4TID0pQiMOP+l
                  z5sgfUGec9ZOTGEx0z6HDLO6lca/nqHLWgZZRArzPaKZi4i7I336EXNtEeWJw2y8Q1eiWEpUD+op
                  chR2tvtB+i4HHLSXLX+/xORqUyzRqq2AnncwSV+bnPLhNu5XgGi83A+rYawVclY6B5cuLsDcMVgT
                  hgBWWo2M6h/7IbVvt9EFXX3J8vkjSN8yx6UzdiiliPua1I76eSfYrA1mCNSJ29xMmAk0wPOI8pk5
                  AU7cq0L+CKk9ll1oskaSweD1WJp+QXH/0zY5Q4q29ukKTaUsbf0mkyudkQo3BdTXzpY23K85Gviy
                  e3tiHjjvw0Q0g7nJW+1EyzUrhBdDam3QijDN4XBLelElOVVkSpMTPliKlda82ghEC0OC1XjZOQcf
                  kmNV7Rcuk2ikCeu+2YSiGDQd1NVsVTFtLs2DdWfXt4T8JYO5baB+RKngJFfSkRLjPuETbgxyJuUC
                  coK+hmjNavJ0+yhq/ptobX+6Fnfs3EQKgzP3FEXIFcoRstDWsnc/hlhLg5ymKHg8pzFA0zqQQeIk
                  LKSCl240GQfqKm03GvvOGveqYAwXad4TWmNoGEt9TTEInQ1DuGeXTNjDRcBvrkeodmHp7GqaRKmB
                  G7qJacWvyTCtRZmryfC9UAF0aNeRM0XjXs4UfXCzyB1uDBLXZg4ozjtMRshRi1MUlkdS1aqUIpmf
                  DDTm1BGkreftOiwb3tgMjACj6D3AbxhuDXwgKUWMcsW/C/kT6Pz6pWWEtKNPeaC37JEH+hu6OeAS
                  1hDhNPeFKusEZbU9dy45wGJKd8olSriE7tekWSfQhblJYLXL6x6iINJPMppMijpFpAMraTzkdd/Z
                  VGv4QDeHRH5/oQ312W1zn+Ukx4jvozK+SJWzaymqdaECwyPk/UZ8Qlt7d4VoSYF1k8Bkp9zTAbhJ
                  4IsuDCBTzCGabMoYitKPuTRGc3L9mk7UDpdCqursFSmDFr3JP4OVVttz3yMa+DchS5njGCG/qzCo
                  8RmO/QyPEW0+tA5Qnx5k2jG9ut9NUQe3KP2S8kiQ+PUoSN/CJGMHUaHHyBPsJRlD+QpuRl9FoRur
                  Xbg0MSdJWzsJ2tq3LPlLdRu62kQeiJOYR89rEF0qdZCAxn06GiqYtrjNGHLRqyLhM4wg7mmN2lZa
                  rfnYb+DT6qgVCyC9+jpRURBU9ZGrR0wEvqrrhBfJgbQGMB/lNl3MBMWqA2eQiyk/3E6WPJuiHhrX
                  LVTU8YJDkKqM9mMmEd84MAoreJHuJSYRG0RRBpiQP0QhDzHnY1Go0KFv+TQp+x1kxDlmkCEFXV1m
                  M4bcLzEuSfh8w4I1EfBHmnQrrdVklFwueYdGdNto00fMres0i0JOQG27E/R+R+oWcSqScva2WNcg
                  Md+6ipR7LFEMs2r0QgadC9pEKyM1KfgTkISp1pMh/beN1ZTD/k8hqyB9t0x/jTzUjJDlDhKEcwuj
                  ybHJ+LPNGOL4yssfAZE7Tg0IYwzWRXR27JhApnSUacfy//n0WfXbRrt5xmCxLUu0FYi1Pd5Kc4CF
                  0NeZdsx5p+oYpGnZT1LlazQVZbZl2LE84BfJTSQrbKGz9XZ0FfMTu6WAPRTJsjVRnDc9l8CN4XGH
                  ucRCUvprUAyjQtBVX7AqLL89wA5o2D9j2rEyfB99xgqpvLAf06CR3EaGCeD9Z20YsY600jwsUujO
                  IlD8oL4tXgOJvP99mxi1NdDQDEXHq3AdcqSCY7/m8B0YyTcpOHtXi2PwCr/0r+q4F2opw4lmY5gq
                  VjARU+mvY46jsdV6UPaLjXj8svzKWqSsfheFpmcUac5NxFy4V5p8RGmTHTYonPpUzfHhHJFqiaVQ
                  8z5FirQFq+zce45wq+mtmVTsMo0uWHX6EvMw2+IB/4qSD09A/snk6zwwz1hnoZ8GXf+KxvcsJ5qa
                  kBxOHxp0nOxXXUY7c5DN15KcpntYoyaec8Lj2OyU+oT3OujQxwainkXSdWY5vTdFwrj0HM9q9Gct
                  sSOf5d4+ESV7J7fQxROViuc/pnDEWP6fxcwJpkYnJWU1aO6dqt5Y0f09pCq01j6YhZ1GGp9i6fhe
                  m3s+T4xwgGJMrdjNzNkZUP+gYQGdY0jXfIZVOPPN5R7fy+oGuPdwIeU2EYpod8eCgePl2w9Cv7U7
                  IB7KvZ+1I8LX1AxVQ/vAwYpLU9XWHLIC7r2sRu6/Esghhw7k/HJDkEMOHQf/F2AAm4uHrVLFwwgA
                  AAAASUVORK5CYII=" transform="matrix(1 0 0 1 7.6665 2.668)">
                    </image>
                  </g>
                  <g id="Layer_3">
                    <g>
                      <path fill="#fff" d="M42.4,27.6l8-21.3h4.7L63,27.6h-6.2l-1.3-4.2h-5.7l-1.3,4.2H42.4z M52.7,12.4l-2,7.1h3.9L52.7,12.4z"/>
                      <path fill="#fff" d="M64.6,27.6V6.3h5.9v16.2h9.7v5.1H64.6z"/>
                      <path fill="#fff" d="M82.3,27.6V6.3h9.2c1,0,2,0.2,2.9,0.6c0.9,0.4,1.6,1,2.3,1.7c0.6,0.7,1.1,1.5,1.5,2.4
                        c0.4,0.9,0.5,1.8,0.5,2.7c0,0.9-0.2,1.9-0.5,2.7c-0.3,0.9-0.8,1.7-1.4,2.4c-0.6,0.7-1.4,1.2-2.2,1.7c-0.9,0.4-1.8,0.6-2.9,0.6
                        h-3.5v6.5H82.3z M88.1,15.9h3.1c0.4,0,0.7-0.2,1-0.5c0.3-0.3,0.5-0.9,0.5-1.8c0-0.9-0.2-1.5-0.5-1.8c-0.4-0.3-0.7-0.5-1.1-0.5
                        h-2.9V15.9z"/>
                      <path fill="#fff" d="M119.7,6.3v21.3h-5.9v-8.3h-7.1v8.3h-5.9V6.3h5.9v7.9h7.1V6.3H119.7z"/>
                      <path fill="#fff" d="M121.3,27.6l8-21.3h4.7l7.9,21.3h-6.2l-1.3-4.2h-5.7l-1.3,4.2H121.3z M131.6,12.4l-2,7.1h3.9L131.6,12.4z"
                        />
                      <path fill="#13B28B" d="M143.5,27.6V6.3h9.8c1,0,2,0.2,2.9,0.6c0.9,0.4,1.6,1,2.3,1.7s1.1,1.5,1.5,2.4c0.4,0.9,0.5,1.8,0.5,2.7
                        c0,1.2-0.3,2.4-0.8,3.5c-0.5,1.1-1.3,1.9-2.3,2.6l4.8,7.8h-6.6l-4-6.5h-2.2v6.5H143.5z M149.3,15.9h3.7c0.4,0,0.7-0.2,1-0.6
                        c0.3-0.4,0.5-1,0.5-1.7c0-0.7-0.2-1.3-0.5-1.7c-0.4-0.4-0.7-0.6-1.1-0.6h-3.5V15.9z"/>
                      <path fill="#13B28B" d="M162,27.6l8-21.3h4.7l7.9,21.3h-6.2l-1.3-4.2h-5.7l-1.3,4.2H162z M172.3,12.4l-2,7.1h3.9L172.3,12.4z"/>
                      <path fill="#13B28B" d="M190.1,17.1v10.5h-5.8V6.3h4.6l8.6,10.8V6.3h5.8v21.3h-4.7L190.1,17.1z"/>
                      <path fill="#13B28B" d="M206.8,27.6V6.3h5.8V15l7.1-8.7h6l-7.7,9.5l8.3,11.8h-6.1l-5.6-8.5l-1.9,2.2v6.3H206.8z"/>
                    </g>
                  </g>
                  <g id="Layer_4">
                    <circle fill="none" stroke="#13B28B" stroke-miterlimit="10" cx="14.1" cy="21.3" r="3.8"/>
                    <line fill="#5FC2A4" stroke="#13B28B" stroke-miterlimit="10" x1="17.9" y1="20.3" x2="23.6" y2="18.8"/>
                    <circle opacity="0.4" fill="#13B38B" cx="28.1" cy="18.2" r="4.6"/>
                    <circle fill="#13B38B" cx="28.1" cy="18.2" r="2.3"/>
                    <line fill="none" stroke="#13B28B" stroke-miterlimit="10" x1="27" y1="13.8" x2="25.4" y2="9.5"/>
                    <circle fill="#13B38B" cx="24.5" cy="7.3" r="2.6"/>
                    <line fill="none" stroke="#13B28B" stroke-miterlimit="10" x1="31.5" y1="21.3" x2="33.7" y2="23.5"/>
                    <circle fill="#13B38B" cx="36.1" cy="25.8" r="3.6"/>
                  </g>
                  </svg>
                </a>
              </li>
              <li><a class="nav-links" href="#"><i class="fa fa-code"></i><span>View API</span></a></li>
              <li><a class="nav-links" href="#"><i class="fa fa-star"></i><span>Features</span></a></li>
              <li><a class="nav-links" href="#"><i class="fa fa-wrench"></i><span>Installation</span></a></li>
              <li><a class="nav-links" href="#"><i class="fa fa-bar-chart"></i><span>Resources</span></a></li>
          </ul>
        </div>
      </nav>
      <div class="hero-container">
        <h2 data-sr="enter bottom, ease-in-out 100px">We map <i class="it">human</i> networks</h2>
        <p data-sr="enter bottom, ease-in-out 100px wait 0.3s">Companies still build recommendation engines and analyze their customers by behaviors recorded in-store or online. Humans are active organisms that grow in networks. Alpharank allows you to predict which customers will matter over time without hours of data science and many complicated models.</p>
        <div  data-sr="enter bottom, ease-in-out 100px, wait 0.6s"><a class="btn btn-primary" href="#"><i class="fa fa-code"></i> View API</a><a class="btn btn-primary" href="#"><i class="fa fa-phone"></i>Contact Us</a></div>
      </div>
    </header>
    <section class="sect-journey">
      <div class="container">
        <h2 class="h-title" data-sr="enter bottom, ease-in-out 100px">Why do <i class="it">human</i> networks matter?</h2>
        <div id="journey-carousel" class="owl-carousel owl-theme">
          <div class="recommendation clearfix">
            <div class="col-sm-6">
              <div class="cloud animated bu s2" data-sr="enter bottom, ease-in-out 100px">
                <svg class="cloud-text" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 229.6 177" style="enable-background:new 0 0 229.6 177;" xml:space="preserve">
                  <style type="text/css">
                    .cloud{fill:#fff;}
                    .t1{fill:#212121;}
                  </style>
                  <g id="Layer_2">
                    <path class="cloud" d="M229.6,79.5C229.6,35.6,178.2,0,114.8,0S0,35.6,0,79.5C0,123.4,51.4,159,114.8,159c15.9,0,31.1-2.2,44.8-6.3
                      l-1.8,24.3l24.9-33.4C211.2,129.1,229.6,105.8,229.6,79.5z"/>
                  </g>
                  <g id="Layer_3">
                    <g>
                      <path class="t1" d="M38.6,66.8c0,3-1.9,4.7-4.8,4.7c-2,0-3.6-0.8-4.8-2.2l1.6-2.4c1,1,2.1,1.6,2.9,1.6c0.9,0,1.5-0.6,1.5-1.7
                        v-6.5h-4.8v-2.9h8.4V66.8z"/>
                      <path class="t1" d="M52,65.9c0,3.3-2.4,5.5-5.9,5.5c-3.5,0-5.9-2.2-5.9-5.5c0-3.3,2.4-5.5,5.9-5.5C49.6,60.4,52,62.6,52,65.9z
                         M43.7,66c0,1.7,1,2.8,2.4,2.8c1.4,0,2.4-1.1,2.4-2.8c0-1.7-1-2.8-2.4-2.8C44.7,63.2,43.7,64.3,43.7,66z"/>
                      <path class="t1" d="M65,64.5v6.8h-3.5v-5.8c0-1.3-0.7-2-1.9-2c-1.4,0-2.2,1.1-2.2,2.6v5.3H54V56.5h3.5v5.8c0.8-1.3,2-1.9,3.6-1.9
                        C63.4,60.4,65,62,65,64.5z"/>
                      <path class="t1" d="M78.4,64.5v6.8H75v-5.8c0-1.3-0.7-2-1.9-2c-1.3,0-2.1,0.9-2.2,2.2v5.7h-3.5V60.6h3.5v1.8
                        c0.8-1.3,2-1.9,3.6-1.9C76.9,60.4,78.4,62,78.4,64.5z"/>
                      <path class="t1" d="M89,62.4c0.7-1.3,2-2,3.5-2v3.1c-2-0.2-3.3,0.8-3.5,2.3v5.5h-3.5V60.6H89V62.4z"/>
                      <path class="t1" d="M104.2,66.9h-7.6c0.3,1.3,1.3,2,2.5,2c0.9,0,1.9-0.4,2.6-1.1l1.8,1.8c-1.1,1.2-2.7,1.9-4.7,1.9
                        c-3.5,0-5.7-2.2-5.7-5.5c0-3.3,2.3-5.5,5.6-5.5C102.6,60.4,104.5,62.9,104.2,66.9z M100.9,65c0-1.3-0.8-2.2-2.1-2.2
                        c-1.2,0-2,0.9-2.2,2.2H100.9z"/>
                      <path class="t1" d="M115.6,62.9l-2.5,1.5c-0.5-0.7-1.2-1.1-2.2-1.1c-1.3,0-2.3,1.1-2.3,2.7c0,1.7,0.9,2.7,2.3,2.7
                        c1,0,1.7-0.4,2.2-1.2l2.5,1.5c-0.9,1.6-2.6,2.5-4.9,2.5c-3.3,0-5.6-2.2-5.6-5.5c0-3.3,2.3-5.5,5.6-5.5
                        C112.9,60.4,114.7,61.3,115.6,62.9z"/>
                      <path class="t1" d="M127.9,65.9c0,3.3-2.4,5.5-5.9,5.5c-3.5,0-5.9-2.2-5.9-5.5c0-3.3,2.4-5.5,5.9-5.5
                        C125.6,60.4,127.9,62.6,127.9,65.9z M119.6,66c0,1.7,1,2.8,2.4,2.8c1.4,0,2.4-1.1,2.4-2.8c0-1.7-1-2.8-2.4-2.8
                        C120.6,63.2,119.6,64.3,119.6,66z"/>
                      <path class="t1" d="M148.1,64.5v6.8h-3.4v-5.8c0-1.3-0.7-2.1-1.9-2.1c-1.3,0-2.1,1.1-2.1,2.6v5.3h-3.5v-5.8
                        c0-1.3-0.7-2.1-1.8-2.1c-1.3,0-2.1,1.1-2.1,2.6v5.3h-3.4V60.6h3.4v1.8c0.7-1.3,2-1.9,3.6-1.9c1.8,0,3.1,0.9,3.6,2.4
                        c0.7-1.6,2-2.4,3.8-2.4C146.5,60.4,148.1,62,148.1,64.5z"/>
                      <path class="t1" d="M168.8,64.5v6.8h-3.4v-5.8c0-1.3-0.7-2.1-1.9-2.1c-1.3,0-2.1,1.1-2.1,2.6v5.3h-3.5v-5.8
                        c0-1.3-0.7-2.1-1.8-2.1c-1.3,0-2.1,1.1-2.1,2.6v5.3h-3.4V60.6h3.4v1.8c0.7-1.3,2-1.9,3.6-1.9c1.8,0,3.1,0.9,3.6,2.4
                        c0.7-1.6,2-2.4,3.8-2.4C167.3,60.4,168.8,62,168.8,64.5z"/>
                      <path class="t1" d="M181.4,66.9h-7.6c0.3,1.3,1.3,2,2.5,2c0.9,0,1.9-0.4,2.6-1.1l1.8,1.8c-1.1,1.2-2.7,1.9-4.7,1.9
                        c-3.5,0-5.7-2.2-5.7-5.5c0-3.3,2.3-5.5,5.6-5.5C179.8,60.4,181.7,62.9,181.4,66.9z M178.1,65c0-1.3-0.8-2.2-2.1-2.2
                        c-1.2,0-2,0.9-2.2,2.2H178.1z"/>
                      <path class="t1" d="M194.3,64.5v6.8h-3.4v-5.8c0-1.3-0.7-2-1.9-2c-1.3,0-2.1,0.9-2.2,2.2v5.7h-3.5V60.6h3.5v1.8
                        c0.8-1.3,2-1.9,3.6-1.9C192.7,60.4,194.3,62,194.3,64.5z"/>
                      <path class="t1" d="M207.6,71.3h-3.5v-1.4c-0.8,1-1.9,1.6-3.2,1.6c-3,0-5-2.2-5-5.6c0-3.3,2-5.5,5-5.5c1.4,0,2.6,0.6,3.3,1.6
                        v-5.5h3.5V71.3z M204.2,66c0-1.7-1-2.8-2.4-2.8s-2.4,1.1-2.4,2.8c0,1.7,1,2.8,2.4,2.8S204.2,67.6,204.2,66z"/>
                      <path class="t1" d="M64.7,88.3v7h-3.4v-1.2c-0.7,0.9-1.8,1.4-3.3,1.4c-2.3,0-3.7-1.4-3.7-3.4c0-2,1.5-3.2,4.1-3.3h2.8v-0.2
                        c0-1.1-0.7-1.7-2.1-1.7c-0.9,0-2.1,0.3-3.2,0.9l-1-2.3c1.7-0.8,3.2-1.2,5-1.2C62.9,84.4,64.6,85.9,64.7,88.3z M61.3,91.7v-1h-2.2
                        c-1,0-1.6,0.4-1.6,1.2c0,0.8,0.6,1.3,1.5,1.3C60.1,93.2,61,92.6,61.3,91.7z"/>
                      <path class="t1" d="M82.8,88.5v6.8h-3.4v-5.8c0-1.3-0.7-2-1.9-2c-1.3,0-2.1,0.9-2.2,2.2v5.7h-3.5V84.6h3.5v1.8
                        c0.8-1.3,2-1.9,3.6-1.9C81.2,84.4,82.8,86,82.8,88.5z"/>
                      <path class="t1" d="M95.4,90.9h-7.6c0.3,1.3,1.3,2,2.5,2c0.9,0,1.9-0.4,2.6-1.1l1.8,1.8c-1.1,1.2-2.7,1.9-4.7,1.9
                        c-3.5,0-5.7-2.2-5.7-5.5c0-3.3,2.3-5.5,5.6-5.5C93.7,84.4,95.6,86.9,95.4,90.9z M92.1,89c0-1.3-0.8-2.2-2.1-2.2
                        c-1.2,0-2,0.9-2.2,2.2H92.1z"/>
                      <path class="t1" d="M107,95.3l-2.1-6.8l-2.1,6.8h-3.4l-3.9-10.8h3.5l2.2,7.5l2.2-7.5h3.3l2.2,7.5l2.2-7.5h3.4l-3.9,10.8H107z"/>
                      <path class="t1" d="M132.1,90c0,3.3-2,5.5-5,5.5c-1.4,0-2.5-0.6-3.3-1.6v5.3h-3.5V84.6h3.5V86c0.8-1,1.9-1.5,3.2-1.5
                        C130.1,84.4,132.1,86.7,132.1,90z M128.6,89.9c0-1.6-1-2.8-2.4-2.8c-1.4,0-2.4,1.2-2.4,2.8c0,1.7,1,2.8,2.4,2.8
                        C127.7,92.7,128.6,91.6,128.6,89.9z"/>
                      <path class="t1" d="M145.1,88.5v6.8h-3.5v-5.8c0-1.3-0.7-2-1.9-2c-1.4,0-2.2,1.1-2.2,2.6v5.3h-3.5V80.5h3.5v5.8
                        c0.8-1.3,2-1.9,3.6-1.9C143.5,84.4,145.1,86,145.1,88.5z"/>
                      <path class="t1" d="M158.4,89.9c0,3.3-2.4,5.5-5.9,5.5c-3.5,0-5.9-2.2-5.9-5.5c0-3.3,2.4-5.5,5.9-5.5
                        C156.1,84.4,158.4,86.6,158.4,89.9z M150.1,90c0,1.7,1,2.8,2.4,2.8c1.4,0,2.4-1.1,2.4-2.8c0-1.7-1-2.8-2.4-2.8
                        C151.1,87.2,150.1,88.3,150.1,90z"/>
                      <path class="t1" d="M171.3,88.5v6.8h-3.4v-5.8c0-1.3-0.7-2-1.9-2c-1.3,0-2.1,0.9-2.2,2.2v5.7h-3.5V84.6h3.5v1.8
                        c0.8-1.3,2-1.9,3.6-1.9C169.7,84.4,171.3,86,171.3,88.5z"/>
                      <path class="t1" d="M183.9,90.9h-7.6c0.3,1.3,1.3,2,2.5,2c0.9,0,1.9-0.4,2.6-1.1l1.8,1.8c-1.1,1.2-2.7,1.9-4.7,1.9
                        c-3.5,0-5.7-2.2-5.7-5.5c0-3.3,2.3-5.5,5.6-5.5C182.3,84.4,184.1,86.9,183.9,90.9z M180.6,89c0-1.3-0.8-2.2-2.1-2.2
                        c-1.2,0-2,0.9-2.2,2.2H180.6z"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="tweeting animated bl" data-sr="enter left, ease-in-out 100px">
                <svg class="h-tweeting" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 203.2 294.8" style="enable-background:new 0 0 203.2 294.8;" xml:space="preserve">
                  <style type="text/css">
                    .st0{display:none;}
                    .st1{display:inline;fill:#7DF9D6;}
                    .st2{display:inline;fill:#FFFFFF;}
                    .st3{fill:#382323;}
                    .st4{fill:#F2B5AF;}
                    .st5{fill:#BCBBBB;}
                    .st6{fill:#898484;}
                    .st7{fill:#726F6F;}
                    .st8{fill:#FFD9C0;}
                    .st9{fill:#AF3852;}
                    .st10{fill:#C63E55;}
                    .st11{fill:#563A39;}
                    .st12{fill:#B54E4E;}
                    .st13{fill:#FFFFFF;}
                  </style>
                  <g id="Layer_2" class="st0">
                    <rect x="-216.2" y="-220.2" class="st1" width="960" height="563"/>
                    <path class="st2" d="M204.5-116.5c0-43.9-51.4-79.5-114.8-79.5s-114.8,35.6-114.8,79.5C-25.1-72.5,26.3-37,89.7-37
                      c15.9,0,31.1-2.2,44.8-6.3L132.8-19l24.9-33.4C186.1-66.9,204.5-90.2,204.5-116.5z"/>
                  </g>
                  <g id="Layer_1">
                    <g>
                      <path class="st3" d="M126,20.3c0.5-0.6,23.5,15,15.7,44.3S109.7,40.5,126,20.3z"/>
                      <path class="st4" d="M173.2,193.3c0,0-6.3-16.8,0-35s19.8-7.3,20.5-7s1.8,44-9.5,47.8S173.2,193.3,173.2,193.3z"/>
                      <path class="st5" d="M175.7,112.1c0,0-4.3,1-5,2.7c-0.7,1.7-4.3,36.3-1.7,46.3c2.7,10,10.7,6,10.7,6L175.7,112.1z"/>
                      <path class="st6" d="M171.7,150.4c0,0,0.8-33.2,2.8-37.2s26.3,2.9,28.5,12.5c1.7,7.3-5.5,47.5-8.5,54c-12,0-23.8-6.7-23.8-6.7
                        L171.7,150.4z"/>
                      <path class="st7" d="M171.7,150.4c0,0,0-1.7,0.1-4.3c4.3-3,16.4-11.5,17.2-11.7c0.9-0.2,9.1-0.7,13.8,2.1
                        c-1.1,11.2-4,27.4-6.3,36.7c-3.4,2.4-7.8,3.5-13.4,2.4c-6.7-7.2-10-13.3-11.7-18L171.7,150.4z"/>
                      <path class="st4" d="M171,153.8c0,0-6.5-8.5-4-11c2.5-2.5,2.5-9.5-3-12.5c0,5.5-6,15-6,15l7.5,19.5L171,153.8z"/>
                      <path class="st8" d="M153.5,174.3c0,0,7.5-7.5,11-15.5s4-12.5,4-12.5l21.5-7.5c0,0,13,0,13,4.5c0,4.5-7,3.5-6.5,5.5s7,3,3.5,5
                        s-6.5,1-6.5,3.5s7,3.5,3,7s-6,0.5-6.5,3s3,6.5,0,9l-7-0.5c0,0-15,18.5-29,13S153.5,174.3,153.5,174.3z"/>
                      <path class="st9" d="M86,143.4c3.3,0,26.7,13.3,40,53.3s27.3,51.3,27.3,51.3l17.3-56.7l18.7,2c0,0-19.3,104.7-43.3,93.3
                        c-24-11.3-57.3-106.7-57.3-106.7s-6.3-47.5,0.8-45.1"/>
                      <path class="st10" d="M46,129.8c0,0,28.7,13.7,34,17c14-12,33,19,21,80c-12,61-16,66-16,66l-85,2c0,0,28-148,30-152
                        C32,138.8,46,129.8,46,129.8z"/>
                      <path class="st9" d="M104.1,204.8c0,0-9.3,9.3-24,0.7c-14.7-8.7-31.3-38-31.3-38s16,64,36,62S104.1,204.8,104.1,204.8z"/>
                      <path class="st9" d="M18.1,200.7c3.2-16.6,6.3-31.9,8.5-42.7c3,4.1,6.2,11.5,9.5,23.8c13.3,50.6,54.1,53.9,63.2,54
                        c-2.5,12.6-4.7,22.4-6.5,30c-6,4.8-14,9.1-23.7,9.9C53.1,277.1,31.1,231.6,18.1,200.7z"/>
                      <path class="st8" d="M71,96.8c1.3,4-11,50-14,66c12,16,23.3,8,23.3,8s16-38,8-58.7C85,106.1,71,96.8,71,96.8z"/>
                      <path class="st8" d="M134,33.8c4,3.2,30,117-15,111c-45-6-48-48-48-48s-18,5-20-21s16-16,16-16S68.3-18.6,134,33.8z"/>
                      <path class="st4" d="M125.7,59.4c0,0,18,46,6.7,44.7C121,102.8,121,92.8,121,92.8s-3.3,6.7-5.3,0.7s4.7-13.3,4.7-13.3L125.7,59.4z
                        "/>
                      <path class="st11" d="M115.3,40.4c0,0-4-10-10.7-5.3c-6.7,4.7-6.7,18-6.7,18s5.3-16.7,10-13.3C112.7,43.1,113.3,43.8,115.3,40.4z"
                        />
                      <path class="st11" d="M129,43.3c0,0,1-9.5,10.5-5s4.5,15,4.5,15s1.2-10.1-6-10.5C133.7,42.5,130,47.3,129,43.3z"/>
                      <circle class="st11" cx="114" cy="64.3" r="3"/>
                      <circle class="st11" cx="139" cy="68.3" r="3"/>
                      <path class="st12" d="M114.5,131.8c-20.5-3.5-24.5-13-22-36.5c7.5,23.5,35,18,36.5,18C129,113.3,118,119.8,114.5,131.8z"/>
                      <path class="st13" d="M125.5,113.6c-3,1.8-7.1,3.2-11.9,2.5c-15-2.4-18.6-10.1-19-15.8C102.2,114.2,118.4,114.2,125.5,113.6z"/>
                      <path class="st4" d="M68.7,74.3c0,0-1.7-5.8-6.5-5s-4,11.8-4,11.8S62.3,69.5,68.7,74.3z"/>
                      <path class="st4" d="M89.5,135c-0.4,3.3-1,6.7-1.7,9.9c-3.3-4-12-16.9-10.8-38.2C77.1,105.4,82.8,123.7,89.5,135z"/>
                      <path class="st10" d="M55,150.8c0.7-13-10-38-34-26s20.1,124.5,55,131c27.7,5.2,92-65,92-65l-13-21c0,0-59.1,58.8-78,46
                        C52,198.8,54.1,167.2,55,150.8z"/>
                      <path class="st5" d="M187.5,118.6c0,2.8-2.6,1.9-7.2,1.5c-3.7-0.3-4.3-2.2-4.2-3.8c0.2-1.7,4.3-0.8,6.7-0.7
                        C187.2,115.9,187.5,118.6,187.5,118.6z"/>
                      <circle class="st13" cx="184.2" cy="118.3" r="1.6"/>
                      <path class="st13" d="M178,117.1c-0.1,0.4,0.2,0.7,0.6,0.8l2.3,0.3c0.4,0.1,0.7-0.2,0.8-0.6l0,0c0.1-0.4-0.2-0.7-0.6-0.8l-2.3-0.3
                        C178.4,116.5,178.1,116.7,178,117.1L178,117.1z"/>
                      <path class="st11" d="M84.5,20.6c0,0,3.9,7,2.8,13.2c-1.3,7-16,9.3-9,42.3C83.6,84.7,67,59.8,67,59.8S57.8,13.3,84.5,20.6z"/>
                      <path class="st11" d="M85,29.3c0,0,20.8,12.5,41.8-2S142.2,0,142.2,0S129.5,9.3,110,2S69.2,12.8,73.2,25.5S85,29.3,85,29.3z"/>
                      <path class="st10" d="M53,136.8c7.2-3,16.5,26.5,16.5,26.5l4,10.5l-5.3-1l-2.8,15C65.5,187.8,40.9,141.8,53,136.8z"/>
                      <polygon class="st9" points="67.5,169.3 69.5,163.3 72.9,172.8 68.6,171.1 62.5,183.6     "/>
                      <polygon class="st9" points="75.5,172.8 83,163.3 81,188.8 79.7,171.8    "/>
                      <path class="st9" d="M62.7,182.5c0,0-9.3-21-11.8-36.3c7.5,36.5,11.5,37.4,11.5,37.4"/>
                      <circle class="st13" cx="75" cy="179.5" r="2.3"/>
                      <circle class="st13" cx="74.5" cy="190" r="2.3"/>
                      <circle class="st13" cx="150.7" cy="181.8" r="2.3"/>
                      <circle class="st13" cx="145.5" cy="186.3" r="2.3"/>
                    </g>
                  </g>
                  </svg>
                </div>
            </div>
            <div class="col-sm-6">
              <div class="tcont">
                <h3 class="i-title animated br">Recommendations from people are better than advertisements</h3><!-- data-sr="enter right, ease-in-out 100px" -->
                <p class="animated br s2" data-sr="enter right, ease-in-out 100px wait 0.4s">People will likely buy the products that there friends recommend. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
              </div>
            </div>
          </div>
          <div class="discovering">

            <div class="col-sm-6">
              <div class="tcont">
                <h3 class="animated bl i-title">Discovering new things</h3>
                <p class="animated bl s2">New products and services become popular targeting specific networks and regions</p>
              </div>
            </div>
            <div class="col-sm-6 text-center">
              <div class="animated br teen-cont">
                <svg class="teen-selfie" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 202.6 517.5" style="enable-background:new 0 0 202.6 517.5;" xml:space="preserve">
              <g id="Background" class="st0">
                <g class="st1">
                  <rect x="-50.4" y="-121.5" class="st2" width="799.1" height="800"/>
                  <rect x="-51.2" y="415.1" class="st3" width="800" height="263.5"/>
                </g>
                <g class="st1">
                  <g>
                    <path class="st4" d="M234.8,639.9v-0.3c-0.3,0.4-0.7,0.7-1,1c-0.3,0.3-0.7,0.4-1.1,0.6c-0.4,0.1-0.8,0.2-1.3,0.2
                      c-0.6,0-1.2-0.1-1.7-0.4c-0.5-0.3-1-0.6-1.4-1.1c-0.4-0.5-0.7-1.1-0.9-1.7c-0.2-0.7-0.3-1.4-0.3-2.1c0-1.6,0.4-2.9,1.2-3.8
                      c0.8-0.9,1.8-1.4,3.1-1.4c0.7,0,1.4,0.1,1.9,0.4c0.5,0.3,1,0.7,1.5,1.2v-3.8c0-0.5,0.1-0.9,0.3-1.2c0.2-0.3,0.5-0.4,0.9-0.4
                      c0.4,0,0.7,0.1,0.9,0.4c0.2,0.3,0.3,0.6,0.3,1.1v11.4c0,0.5-0.1,0.9-0.3,1.1c-0.2,0.2-0.5,0.4-0.9,0.4c-0.4,0-0.6-0.1-0.9-0.4
                      C234.9,640.7,234.8,640.4,234.8,639.9z M229.7,636.1c0,0.7,0.1,1.3,0.3,1.8c0.2,0.5,0.5,0.9,0.9,1.1c0.4,0.3,0.8,0.4,1.2,0.4
                      c0.5,0,0.9-0.1,1.2-0.4c0.4-0.2,0.7-0.6,0.9-1.1c0.2-0.5,0.3-1.1,0.3-1.8c0-0.7-0.1-1.3-0.3-1.8c-0.2-0.5-0.5-0.9-0.9-1.1
                      c-0.4-0.3-0.8-0.4-1.3-0.4c-0.5,0-0.9,0.1-1.3,0.4c-0.4,0.3-0.7,0.7-0.9,1.2C229.8,634.8,229.7,635.4,229.7,636.1z"/>
                    <path class="st4" d="M246.2,636.7h-5.1c0,0.6,0.1,1.1,0.4,1.6c0.2,0.5,0.5,0.8,0.9,1c0.4,0.2,0.8,0.3,1.3,0.3
                      c0.3,0,0.6,0,0.9-0.1c0.3-0.1,0.5-0.2,0.7-0.3c0.2-0.2,0.5-0.3,0.7-0.5c0.2-0.2,0.5-0.4,0.8-0.7c0.1-0.1,0.3-0.2,0.6-0.2
                      c0.3,0,0.5,0.1,0.6,0.2c0.2,0.1,0.2,0.4,0.2,0.6c0,0.2-0.1,0.5-0.3,0.8c-0.2,0.3-0.5,0.6-0.8,0.9c-0.4,0.3-0.8,0.5-1.4,0.7
                      c-0.6,0.2-1.2,0.3-1.9,0.3c-1.7,0-3-0.5-3.9-1.4c-0.9-0.9-1.4-2.2-1.4-3.9c0-0.8,0.1-1.5,0.3-2.1c0.2-0.7,0.6-1.2,1-1.7
                      c0.4-0.5,1-0.8,1.6-1.1c0.6-0.3,1.3-0.4,2.1-0.4c1,0,1.9,0.2,2.6,0.6c0.7,0.4,1.3,1,1.6,1.7c0.4,0.7,0.5,1.4,0.5,2.1
                      c0,0.7-0.2,1.1-0.6,1.3C247.4,636.6,246.9,636.7,246.2,636.7z M241.2,635.3h4.7c-0.1-0.9-0.3-1.6-0.7-2c-0.4-0.4-1-0.7-1.6-0.7
                      c-0.6,0-1.2,0.2-1.6,0.7C241.5,633.7,241.2,634.4,241.2,635.3z"/>
                    <path class="st4" d="M258,638c0,0.7-0.2,1.3-0.5,1.8c-0.3,0.5-0.9,0.9-1.5,1.2c-0.7,0.3-1.5,0.4-2.5,0.4c-0.9,0-1.7-0.1-2.4-0.4
                      c-0.7-0.3-1.2-0.6-1.5-1.1c-0.3-0.4-0.5-0.9-0.5-1.3c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.8-0.3c0.3,0,0.5,0.1,0.6,0.2
                      c0.1,0.1,0.3,0.3,0.4,0.6c0.3,0.5,0.6,0.8,1,1c0.4,0.2,0.9,0.3,1.5,0.3c0.5,0,0.9-0.1,1.3-0.3c0.3-0.2,0.5-0.5,0.5-0.8
                      c0-0.5-0.2-0.8-0.5-1c-0.3-0.2-0.9-0.4-1.7-0.6c-0.9-0.2-1.6-0.5-2.2-0.7c-0.6-0.2-1-0.6-1.3-1c-0.3-0.4-0.5-0.9-0.5-1.5
                      c0-0.5,0.2-1,0.5-1.5c0.3-0.5,0.8-0.8,1.4-1.1c0.6-0.3,1.3-0.4,2.2-0.4c0.7,0,1.3,0.1,1.8,0.2c0.5,0.1,1,0.3,1.3,0.6
                      c0.4,0.2,0.6,0.5,0.8,0.8c0.2,0.3,0.3,0.6,0.3,0.8c0,0.3-0.1,0.5-0.3,0.7c-0.2,0.2-0.5,0.3-0.9,0.3c-0.3,0-0.5-0.1-0.7-0.2
                      c-0.2-0.2-0.4-0.4-0.6-0.7c-0.2-0.3-0.4-0.5-0.7-0.6c-0.3-0.2-0.6-0.2-1.1-0.2c-0.5,0-0.9,0.1-1.2,0.3c-0.3,0.2-0.5,0.4-0.5,0.7
                      c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.5,0.3,0.9,0.4c0.4,0.1,0.9,0.3,1.6,0.4c0.8,0.2,1.5,0.4,2,0.7c0.5,0.3,0.9,0.6,1.2,1
                      C257.9,637.1,258,637.5,258,638z"/>
                    <path class="st4" d="M260.7,629.6c-0.4,0-0.7-0.1-0.9-0.3c-0.3-0.2-0.4-0.5-0.4-0.9c0-0.4,0.1-0.7,0.4-0.9
                      c0.3-0.2,0.6-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.3c0.3,0.2,0.4,0.5,0.4,0.9c0,0.4-0.1,0.7-0.4,0.9
                      C261.3,629.5,261,629.6,260.7,629.6z M262,632.3v7.5c0,0.5-0.1,0.9-0.4,1.2c-0.2,0.3-0.6,0.4-0.9,0.4s-0.7-0.1-0.9-0.4
                      c-0.2-0.3-0.4-0.7-0.4-1.2v-7.4c0-0.5,0.1-0.9,0.4-1.2c0.2-0.3,0.5-0.4,0.9-0.4s0.7,0.1,0.9,0.4C261.8,631.5,262,631.8,262,632.3
                      z"/>
                    <path class="st4" d="M273.3,632.7v7.5c0,0.9-0.1,1.6-0.3,2.2c-0.2,0.6-0.5,1.1-0.9,1.5c-0.4,0.4-0.9,0.7-1.6,0.9
                      c-0.7,0.2-1.5,0.3-2.4,0.3c-0.9,0-1.7-0.1-2.4-0.4c-0.7-0.3-1.2-0.6-1.6-1c-0.4-0.4-0.6-0.8-0.6-1.2c0-0.3,0.1-0.6,0.3-0.8
                      c0.2-0.2,0.5-0.3,0.8-0.3c0.4,0,0.7,0.2,1,0.5c0.1,0.2,0.3,0.3,0.4,0.5c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.4,0.2,0.7,0.3
                      c0.3,0.1,0.5,0.1,0.9,0.1c0.7,0,1.2-0.1,1.6-0.3c0.4-0.2,0.6-0.4,0.8-0.8c0.1-0.3,0.2-0.7,0.3-1.1c0-0.4,0-1,0.1-1.8
                      c-0.4,0.6-0.9,1-1.4,1.3c-0.5,0.3-1.1,0.4-1.9,0.4c-0.9,0-1.6-0.2-2.3-0.7c-0.6-0.4-1.1-1.1-1.5-1.9c-0.3-0.8-0.5-1.7-0.5-2.8
                      c0-0.8,0.1-1.5,0.3-2.1c0.2-0.6,0.5-1.2,0.9-1.6c0.4-0.4,0.8-0.8,1.4-1c0.5-0.2,1.1-0.3,1.7-0.3c0.7,0,1.4,0.1,1.9,0.4
                      c0.5,0.3,1,0.7,1.5,1.3v-0.4c0-0.4,0.1-0.8,0.3-1c0.2-0.2,0.5-0.4,0.9-0.4c0.5,0,0.8,0.2,1,0.5
                      C273.2,631.6,273.3,632.1,273.3,632.7z M265.8,636c0,1.1,0.2,1.8,0.7,2.4c0.5,0.5,1.1,0.8,1.8,0.8c0.4,0,0.8-0.1,1.2-0.3
                      c0.4-0.2,0.7-0.6,0.9-1c0.2-0.5,0.4-1,0.4-1.7c0-1.1-0.2-1.9-0.7-2.5c-0.5-0.6-1.1-0.9-1.8-0.9c-0.7,0-1.3,0.3-1.8,0.8
                      C266,634.2,265.8,635,265.8,636z"/>
                    <path class="st4" d="M277.5,632.3v0.3c0.5-0.6,1-1,1.5-1.3c0.5-0.3,1.2-0.4,1.9-0.4c0.7,0,1.3,0.1,1.8,0.4
                      c0.5,0.3,0.9,0.7,1.2,1.3c0.2,0.3,0.3,0.7,0.3,1c0.1,0.4,0.1,0.8,0.1,1.4v4.8c0,0.5-0.1,0.9-0.4,1.2c-0.2,0.3-0.5,0.4-0.9,0.4
                      c-0.4,0-0.7-0.1-0.9-0.4c-0.2-0.3-0.4-0.7-0.4-1.2v-4.3c0-0.9-0.1-1.5-0.4-2c-0.2-0.5-0.7-0.7-1.4-0.7c-0.5,0-0.9,0.1-1.3,0.4
                      c-0.4,0.3-0.7,0.7-0.8,1.1c-0.1,0.4-0.2,1.1-0.2,2.2v3.2c0,0.5-0.1,0.9-0.4,1.2c-0.2,0.3-0.6,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4
                      c-0.2-0.3-0.4-0.7-0.4-1.2v-7.5c0-0.5,0.1-0.9,0.3-1.1c0.2-0.2,0.5-0.4,0.9-0.4c0.2,0,0.4,0.1,0.6,0.2c0.2,0.1,0.3,0.3,0.4,0.5
                      C277.4,631.7,277.5,632,277.5,632.3z"/>
                    <path class="st4" d="M293.2,636.7h-5.1c0,0.6,0.1,1.1,0.4,1.6c0.2,0.5,0.5,0.8,0.9,1c0.4,0.2,0.8,0.3,1.3,0.3
                      c0.3,0,0.6,0,0.9-0.1c0.3-0.1,0.5-0.2,0.7-0.3c0.2-0.2,0.5-0.3,0.7-0.5c0.2-0.2,0.5-0.4,0.8-0.7c0.1-0.1,0.3-0.2,0.6-0.2
                      c0.3,0,0.5,0.1,0.6,0.2c0.2,0.1,0.2,0.4,0.2,0.6c0,0.2-0.1,0.5-0.3,0.8c-0.2,0.3-0.5,0.6-0.8,0.9c-0.4,0.3-0.8,0.5-1.4,0.7
                      c-0.6,0.2-1.2,0.3-1.9,0.3c-1.7,0-3-0.5-3.9-1.4c-0.9-0.9-1.4-2.2-1.4-3.9c0-0.8,0.1-1.5,0.3-2.1c0.2-0.7,0.6-1.2,1-1.7
                      c0.4-0.5,1-0.8,1.6-1.1c0.6-0.3,1.3-0.4,2.1-0.4c1,0,1.9,0.2,2.6,0.6c0.7,0.4,1.3,1,1.6,1.7c0.4,0.7,0.5,1.4,0.5,2.1
                      c0,0.7-0.2,1.1-0.6,1.3C294.4,636.6,293.9,636.7,293.2,636.7z M288.2,635.3h4.7c-0.1-0.9-0.3-1.6-0.7-2c-0.4-0.4-1-0.7-1.6-0.7
                      c-0.6,0-1.2,0.2-1.6,0.7C288.5,633.7,288.2,634.4,288.2,635.3z"/>
                    <path class="st4" d="M303.8,639.9v-0.3c-0.3,0.4-0.7,0.7-1,1c-0.3,0.3-0.7,0.4-1.1,0.6c-0.4,0.1-0.8,0.2-1.3,0.2
                      c-0.6,0-1.2-0.1-1.7-0.4c-0.5-0.3-1-0.6-1.4-1.1c-0.4-0.5-0.7-1.1-0.9-1.7c-0.2-0.7-0.3-1.4-0.3-2.1c0-1.6,0.4-2.9,1.2-3.8
                      c0.8-0.9,1.8-1.4,3.1-1.4c0.7,0,1.4,0.1,1.9,0.4c0.5,0.3,1,0.7,1.5,1.2v-3.8c0-0.5,0.1-0.9,0.3-1.2c0.2-0.3,0.5-0.4,0.9-0.4
                      c0.4,0,0.7,0.1,0.9,0.4c0.2,0.3,0.3,0.6,0.3,1.1v11.4c0,0.5-0.1,0.9-0.3,1.1c-0.2,0.2-0.5,0.4-0.9,0.4c-0.4,0-0.6-0.1-0.9-0.4
                      C303.9,640.7,303.8,640.4,303.8,639.9z M298.7,636.1c0,0.7,0.1,1.3,0.3,1.8c0.2,0.5,0.5,0.9,0.9,1.1c0.4,0.3,0.8,0.4,1.2,0.4
                      c0.5,0,0.9-0.1,1.2-0.4c0.4-0.2,0.7-0.6,0.9-1.1c0.2-0.5,0.3-1.1,0.3-1.8c0-0.7-0.1-1.3-0.3-1.8c-0.2-0.5-0.5-0.9-0.9-1.1
                      c-0.4-0.3-0.8-0.4-1.3-0.4c-0.5,0-0.9,0.1-1.3,0.4c-0.4,0.3-0.7,0.7-0.9,1.2C298.8,634.8,298.7,635.4,298.7,636.1z"/>
                    <path class="st4" d="M314.4,628.5v4c0.5-0.5,1-0.9,1.5-1.2c0.5-0.3,1.1-0.4,1.9-0.4c0.9,0,1.6,0.2,2.3,0.6c0.6,0.4,1.2,1,1.5,1.8
                      c0.4,0.8,0.5,1.7,0.5,2.8c0,0.8-0.1,1.5-0.3,2.2c-0.2,0.7-0.5,1.2-0.9,1.7c-0.4,0.5-0.8,0.9-1.4,1.1c-0.5,0.3-1.1,0.4-1.8,0.4
                      c-0.4,0-0.8,0-1.1-0.1c-0.4-0.1-0.7-0.2-0.9-0.4c-0.2-0.2-0.5-0.3-0.6-0.5c-0.2-0.2-0.4-0.4-0.7-0.7v0.3c0,0.5-0.1,0.9-0.4,1.1
                      c-0.2,0.3-0.5,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4c-0.2-0.3-0.3-0.6-0.3-1.1v-11.3c0-0.5,0.1-0.9,0.3-1.2
                      c0.2-0.3,0.5-0.4,0.9-0.4c0.4,0,0.7,0.1,0.9,0.4C314.3,627.6,314.4,628,314.4,628.5z M314.5,636.2c0,1,0.2,1.8,0.7,2.4
                      c0.5,0.6,1.1,0.8,1.9,0.8c0.7,0,1.2-0.3,1.7-0.9c0.5-0.6,0.7-1.4,0.7-2.4c0-0.7-0.1-1.3-0.3-1.8c-0.2-0.5-0.5-0.9-0.8-1.1
                      c-0.4-0.3-0.8-0.4-1.3-0.4c-0.5,0-0.9,0.1-1.3,0.4c-0.4,0.3-0.7,0.7-0.9,1.2C314.6,634.8,314.5,635.5,314.5,636.2z"/>
                    <path class="st4" d="M325.4,641.7l0.2-0.6l-3.2-8c-0.2-0.5-0.3-0.8-0.3-1c0-0.2,0.1-0.4,0.2-0.6c0.1-0.2,0.3-0.3,0.5-0.5
                      c0.2-0.1,0.4-0.2,0.6-0.2c0.4,0,0.7,0.1,0.8,0.4c0.2,0.2,0.4,0.6,0.5,1l2.2,6.4l2.1-5.9c0.2-0.5,0.3-0.9,0.4-1.1
                      c0.1-0.3,0.3-0.5,0.4-0.5c0.1-0.1,0.4-0.1,0.6-0.1c0.2,0,0.4,0.1,0.6,0.2c0.2,0.1,0.3,0.2,0.4,0.4c0.1,0.2,0.1,0.4,0.1,0.6
                      c0,0.1-0.1,0.3-0.1,0.5c-0.1,0.2-0.1,0.4-0.2,0.7L328,642c-0.3,0.8-0.6,1.4-0.9,1.8c-0.3,0.4-0.6,0.8-1.1,1
                      c-0.5,0.2-1.1,0.4-1.9,0.4c-0.8,0-1.3-0.1-1.7-0.2c-0.4-0.2-0.6-0.5-0.6-0.9c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.4-0.2,0.8-0.2
                      c0.1,0,0.3,0,0.4,0.1c0.2,0,0.3,0.1,0.4,0.1c0.3,0,0.5,0,0.7-0.1c0.2-0.1,0.3-0.2,0.5-0.5C325.1,642.4,325.3,642.1,325.4,641.7z"
                      />
                  </g>
                  <g>
                    <path class="st4" d="M363,631.1h0.6v-0.8c0-0.8,0.1-1.5,0.3-1.9c0.2-0.5,0.6-0.8,1-1c0.5-0.2,1.2-0.3,2-0.3
                      c1.5,0,2.3,0.4,2.3,1.1c0,0.2-0.1,0.4-0.2,0.6c-0.2,0.2-0.3,0.3-0.6,0.3c-0.1,0-0.3,0-0.5-0.1c-0.2,0-0.5-0.1-0.6-0.1
                      c-0.5,0-0.8,0.1-0.9,0.4c-0.1,0.3-0.2,0.7-0.2,1.2v0.6h0.6c1,0,1.5,0.3,1.5,0.9c0,0.4-0.1,0.7-0.4,0.8c-0.3,0.1-0.6,0.2-1.1,0.2
                      h-0.6v6.9c0,0.5-0.1,0.9-0.4,1.2c-0.2,0.3-0.6,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4c-0.2-0.3-0.4-0.7-0.4-1.2v-6.9h-0.7
                      c-0.4,0-0.7-0.1-0.9-0.3c-0.2-0.2-0.3-0.4-0.3-0.7C361.7,631.4,362.1,631.1,363,631.1"/>
                    <path class="st4" d="M371.5,637.6v2.2c0,0.5-0.1,0.9-0.4,1.2c-0.2,0.3-0.6,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4
                      c-0.2-0.3-0.4-0.7-0.4-1.2v-7.2c0-1.2,0.4-1.7,1.3-1.7c0.4,0,0.7,0.1,0.9,0.4c0.2,0.3,0.3,0.7,0.3,1.2c0.3-0.5,0.6-0.9,0.9-1.2
                      c0.3-0.3,0.8-0.4,1.3-0.4c0.5,0,1.1,0.1,1.6,0.4c0.5,0.3,0.8,0.6,0.8,1.1c0,0.3-0.1,0.6-0.3,0.8c-0.2,0.2-0.5,0.3-0.7,0.3
                      c-0.1,0-0.3-0.1-0.7-0.2c-0.4-0.1-0.7-0.2-1-0.2c-0.4,0-0.7,0.1-0.9,0.3c-0.2,0.2-0.4,0.5-0.6,0.9c-0.1,0.4-0.2,0.9-0.3,1.4
                      C371.5,636.2,371.5,636.8,371.5,637.6"/>
                    <path class="st4" d="M383.4,636.7h-5.1c0,0.6,0.1,1.1,0.4,1.6c0.2,0.4,0.5,0.8,0.9,1c0.4,0.2,0.8,0.3,1.3,0.3
                      c0.3,0,0.6,0,0.8-0.1c0.3-0.1,0.5-0.2,0.7-0.3c0.2-0.2,0.5-0.3,0.7-0.5c0.2-0.2,0.5-0.4,0.8-0.7c0.1-0.1,0.3-0.2,0.6-0.2
                      c0.3,0,0.5,0.1,0.6,0.2c0.2,0.1,0.2,0.4,0.2,0.6c0,0.2-0.1,0.5-0.3,0.8c-0.2,0.3-0.5,0.6-0.8,0.9c-0.4,0.3-0.8,0.5-1.4,0.7
                      c-0.6,0.2-1.2,0.3-1.9,0.3c-1.7,0-3-0.5-3.9-1.4c-0.9-1-1.4-2.2-1.4-3.9c0-0.8,0.1-1.5,0.3-2.1c0.2-0.7,0.6-1.2,1-1.7
                      c0.4-0.5,1-0.8,1.6-1.1c0.6-0.2,1.3-0.4,2.1-0.4c1,0,1.9,0.2,2.6,0.6c0.7,0.4,1.3,1,1.6,1.7c0.4,0.7,0.5,1.4,0.5,2.1
                      c0,0.6-0.2,1.1-0.6,1.3C384.6,636.6,384.1,636.7,383.4,636.7 M378.3,635.3h4.7c-0.1-0.9-0.3-1.5-0.7-2c-0.4-0.4-1-0.7-1.6-0.7
                      c-0.6,0-1.2,0.2-1.6,0.7C378.7,633.7,378.4,634.4,378.3,635.3"/>
                    <path class="st4" d="M394.2,636.7h-5.1c0,0.6,0.1,1.1,0.4,1.6c0.2,0.4,0.5,0.8,0.9,1c0.4,0.2,0.8,0.3,1.3,0.3
                      c0.3,0,0.6,0,0.8-0.1c0.3-0.1,0.5-0.2,0.8-0.3c0.2-0.2,0.5-0.3,0.7-0.5c0.2-0.2,0.5-0.4,0.8-0.7c0.1-0.1,0.3-0.2,0.6-0.2
                      c0.3,0,0.5,0.1,0.7,0.2c0.2,0.1,0.2,0.4,0.2,0.6c0,0.2-0.1,0.5-0.3,0.8c-0.2,0.3-0.5,0.6-0.8,0.9c-0.4,0.3-0.8,0.5-1.4,0.7
                      c-0.6,0.2-1.2,0.3-1.9,0.3c-1.7,0-3-0.5-3.9-1.4c-0.9-1-1.4-2.2-1.4-3.9c0-0.8,0.1-1.5,0.3-2.1c0.2-0.7,0.6-1.2,1-1.7
                      c0.4-0.5,1-0.8,1.6-1.1c0.6-0.2,1.4-0.4,2.1-0.4c1,0,1.9,0.2,2.6,0.6c0.7,0.4,1.3,1,1.6,1.7c0.4,0.7,0.5,1.4,0.5,2.1
                      c0,0.6-0.2,1.1-0.6,1.3C395.4,636.6,394.9,636.7,394.2,636.7 M389.1,635.3h4.7c-0.1-0.9-0.3-1.5-0.7-2c-0.4-0.4-1-0.7-1.6-0.7
                      c-0.6,0-1.2,0.2-1.6,0.7C389.5,633.7,389.2,634.4,389.1,635.3"/>
                    <path class="st4" d="M399.9,632.3v0.3c0.5-0.6,1-1,1.5-1.3c0.5-0.3,1.1-0.4,1.8-0.4c0.8,0,1.5,0.2,2.2,0.6c0.7,0.4,1.2,1,1.6,1.8
                      c0.4,0.8,0.6,1.7,0.6,2.8c0,0.8-0.1,1.5-0.3,2.2c-0.2,0.7-0.5,1.2-0.9,1.7c-0.4,0.5-0.9,0.8-1.4,1c-0.5,0.2-1.1,0.4-1.7,0.4
                      c-0.7,0-1.4-0.1-1.9-0.4c-0.5-0.3-1-0.7-1.4-1.3v3.9c0,1.1-0.4,1.7-1.2,1.7c-0.5,0-0.8-0.1-1-0.4c-0.2-0.3-0.2-0.7-0.2-1.3v-11.2
                      c0-0.5,0.1-0.9,0.3-1.1c0.2-0.2,0.5-0.4,0.9-0.4c0.4,0,0.7,0.1,0.9,0.4C399.8,631.5,399.9,631.8,399.9,632.3 M405,636.1
                      c0-0.7-0.1-1.3-0.3-1.8c-0.2-0.5-0.5-0.9-0.9-1.1c-0.4-0.3-0.8-0.4-1.2-0.4c-0.7,0-1.3,0.3-1.8,0.8c-0.5,0.6-0.7,1.4-0.7,2.5
                      c0,1,0.2,1.8,0.7,2.4c0.5,0.6,1.1,0.9,1.8,0.9c0.4,0,0.8-0.1,1.2-0.4c0.4-0.3,0.7-0.6,0.9-1.1C404.9,637.4,405,636.8,405,636.1"
                      />
                    <path class="st4" d="M410.2,629.6c-0.4,0-0.7-0.1-0.9-0.3c-0.3-0.2-0.4-0.5-0.4-0.9c0-0.4,0.1-0.7,0.4-0.9
                      c0.3-0.2,0.6-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.3c0.3,0.2,0.4,0.5,0.4,0.9c0,0.4-0.1,0.7-0.4,0.9
                      C410.8,629.5,410.5,629.6,410.2,629.6 M411.5,632.3v7.5c0,0.5-0.1,0.9-0.4,1.2c-0.3,0.3-0.6,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4
                      c-0.2-0.3-0.4-0.7-0.4-1.2v-7.4c0-0.5,0.1-0.9,0.4-1.2c0.2-0.3,0.5-0.4,0.9-0.4c0.4,0,0.7,0.1,0.9,0.4
                      C411.3,631.5,411.5,631.8,411.5,632.3"/>
                    <path class="st4" d="M419.8,640.2l-2.3-3.8l-1.4,1.3v2.1c0,0.5-0.1,0.9-0.4,1.1c-0.3,0.3-0.6,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4
                      c-0.2-0.3-0.3-0.7-0.3-1.2v-11.1c0-0.6,0.1-1,0.3-1.3c0.2-0.3,0.5-0.5,1-0.5c0.4,0,0.7,0.1,0.9,0.4c0.2,0.3,0.4,0.7,0.4,1.2v6.3
                      l2.9-3.1c0.4-0.4,0.6-0.6,0.8-0.8c0.2-0.1,0.4-0.2,0.7-0.2c0.3,0,0.6,0.1,0.8,0.3c0.2,0.2,0.3,0.5,0.3,0.8c0,0.4-0.4,0.9-1.1,1.5
                      l-1.4,1.3l2.7,4.2c0.2,0.3,0.3,0.5,0.4,0.7c0.1,0.2,0.1,0.3,0.1,0.5c0,0.4-0.1,0.7-0.3,1c-0.2,0.2-0.5,0.4-0.9,0.4
                      c-0.3,0-0.6-0.1-0.7-0.3C420.4,640.9,420.1,640.6,419.8,640.2"/>
                    <path class="st4" d="M425.5,641.4c-0.4,0-0.7-0.1-1-0.4c-0.3-0.2-0.4-0.6-0.4-1.1c0-0.4,0.1-0.7,0.4-1c0.3-0.3,0.6-0.4,1-0.4
                      c0.4,0,0.7,0.1,1,0.4c0.3,0.3,0.4,0.6,0.4,1c0,0.5-0.1,0.8-0.4,1.1C426.2,641.2,425.8,641.4,425.5,641.4"/>
                    <path class="st4" d="M438.4,638.2c0,0.3-0.1,0.7-0.3,1c-0.2,0.4-0.5,0.7-0.9,1c-0.4,0.3-0.9,0.6-1.5,0.8c-0.6,0.2-1.3,0.3-2,0.3
                      c-1.6,0-2.9-0.5-3.8-1.4c-0.9-0.9-1.3-2.2-1.3-3.8c0-1.1,0.2-2,0.6-2.8c0.4-0.8,1-1.4,1.8-1.9c0.8-0.4,1.7-0.7,2.8-0.7
                      c0.7,0,1.3,0.1,1.9,0.3c0.6,0.2,1,0.5,1.4,0.8c0.4,0.3,0.7,0.6,0.9,1c0.2,0.4,0.3,0.7,0.3,1c0,0.3-0.1,0.6-0.3,0.8
                      c-0.2,0.2-0.5,0.3-0.8,0.3c-0.2,0-0.4-0.1-0.5-0.2c-0.1-0.1-0.3-0.3-0.5-0.5c-0.3-0.5-0.6-0.8-1-1.1c-0.3-0.2-0.8-0.4-1.3-0.4
                      c-0.8,0-1.4,0.3-1.9,0.9c-0.5,0.6-0.7,1.4-0.7,2.5c0,0.5,0.1,0.9,0.2,1.3c0.1,0.4,0.3,0.8,0.5,1c0.2,0.3,0.5,0.5,0.8,0.7
                      c0.3,0.2,0.7,0.2,1.1,0.2c0.5,0,1-0.1,1.3-0.4c0.4-0.2,0.7-0.6,1-1.1c0.2-0.3,0.3-0.5,0.5-0.7c0.2-0.2,0.4-0.2,0.7-0.2
                      c0.3,0,0.6,0.1,0.8,0.4C438.3,637.6,438.4,637.9,438.4,638.2"/>
                    <path class="st4" d="M449.5,636.1c0,0.8-0.1,1.5-0.4,2.1c-0.2,0.7-0.6,1.2-1,1.7c-0.5,0.5-1,0.8-1.6,1.1
                      c-0.6,0.2-1.3,0.4-2.1,0.4c-0.8,0-1.5-0.1-2.1-0.4c-0.6-0.2-1.2-0.6-1.6-1.1c-0.5-0.5-0.8-1-1.1-1.7c-0.2-0.6-0.4-1.4-0.4-2.1
                      c0-0.8,0.1-1.5,0.4-2.2c0.2-0.7,0.6-1.2,1-1.7c0.5-0.5,1-0.8,1.6-1.1c0.6-0.2,1.3-0.4,2.1-0.4c0.8,0,1.5,0.1,2.1,0.4
                      c0.6,0.3,1.2,0.6,1.6,1.1c0.5,0.5,0.8,1,1,1.7C449.4,634.6,449.5,635.3,449.5,636.1 M446.9,636.1c0-1.1-0.2-1.9-0.7-2.5
                      c-0.5-0.6-1.1-0.9-1.9-0.9c-0.5,0-1,0.1-1.3,0.4c-0.4,0.3-0.7,0.6-0.9,1.2c-0.2,0.5-0.3,1.1-0.3,1.8c0,0.7,0.1,1.3,0.3,1.8
                      c0.2,0.5,0.5,0.9,0.9,1.2c0.4,0.3,0.8,0.4,1.4,0.4c0.8,0,1.4-0.3,1.9-0.9C446.7,638,446.9,637.1,446.9,636.1"/>
                    <path class="st4" d="M459.4,636.3v3.4c0,0.5-0.1,1-0.4,1.2c-0.3,0.3-0.6,0.4-1,0.4c-0.4,0-0.7-0.1-1-0.4
                      c-0.2-0.3-0.4-0.7-0.4-1.2v-4.1c0-0.7,0-1.2-0.1-1.5c0-0.4-0.2-0.7-0.4-0.9c-0.2-0.2-0.5-0.4-0.9-0.4c-0.9,0-1.4,0.3-1.7,0.9
                      c-0.3,0.6-0.4,1.4-0.4,2.5v3.5c0,0.5-0.1,0.9-0.4,1.2c-0.2,0.3-0.6,0.4-1,0.4c-0.4,0-0.7-0.1-1-0.4c-0.3-0.3-0.4-0.7-0.4-1.2
                      v-7.4c0-0.5,0.1-0.9,0.3-1.1c0.2-0.3,0.5-0.4,0.9-0.4c0.4,0,0.7,0.1,0.9,0.4c0.2,0.2,0.4,0.6,0.4,1v0.2c0.5-0.5,0.9-0.9,1.4-1.2
                      c0.5-0.3,1.1-0.4,1.7-0.4c0.7,0,1.2,0.1,1.7,0.4c0.5,0.3,0.9,0.7,1.2,1.2c0.4-0.5,0.9-0.9,1.4-1.2c0.5-0.3,1.1-0.4,1.7-0.4
                      c0.7,0,1.3,0.1,1.8,0.4c0.5,0.3,0.9,0.7,1.1,1.2c0.2,0.5,0.3,1.2,0.3,2.2v5.1c0,0.5-0.1,1-0.4,1.2c-0.2,0.3-0.6,0.4-1,0.4
                      c-0.4,0-0.7-0.1-1-0.4c-0.3-0.3-0.4-0.7-0.4-1.2v-4.4c0-0.6,0-1-0.1-1.3c0-0.3-0.2-0.6-0.4-0.8c-0.2-0.2-0.5-0.3-1-0.3
                      c-0.3,0-0.7,0.1-1,0.3c-0.3,0.2-0.5,0.5-0.7,0.8C459.5,634.4,459.4,635.2,459.4,636.3"/>
                  </g>
                  <g>
                    <path class="st4" d="M338.7,635.5C338.7,635.5,338.7,635.5,338.7,635.5C338.7,635.5,338.7,635.5,338.7,635.5z"/>
                    <path class="st4" d="M338.9,636.3C338.9,636.3,338.9,636.3,338.9,636.3c0-0.2-0.1-0.5-0.1-0.7
                      C338.8,635.8,338.8,636.1,338.9,636.3z"/>
                    <path class="st4" d="M339.7,638.7C339.7,638.7,339.7,638.7,339.7,638.7C339.7,638.7,339.7,638.7,339.7,638.7z"/>
                    <path class="st4" d="M339.6,638.5c0,0,0-0.1-0.1-0.1C339.6,638.5,339.6,638.5,339.6,638.5z"/>
                    <path class="st4" d="M339.1,637.2c0.1,0.4,0.3,0.8,0.5,1.2C339.4,638,339.2,637.6,339.1,637.2
                      C339.1,637.2,339.1,637.2,339.1,637.2z"/>
                    <path class="st4" d="M348.8,625.5c0.5,0,0.9,0,1.3,0.1l0.1-0.8c0,0-1.2-0.4-2.7-0.2l-0.1-0.4c0.5-0.1,0.8-0.5,0.8-1
                      c0-0.6-0.5-1.1-1.1-1.1c-0.6,0-1.1,0.5-1.1,1.1c0,0.5,0.4,0.9,0.8,1l0.1,0.5c-1.6,0.2-2.9,0.9-2.9,0.9l0.2,0.7
                      c1-0.3,1.8-0.5,2.6-0.6C347.7,625.6,348.3,625.5,348.8,625.5z"/>
                    <path class="st4" d="M339.7,629.4L339.7,629.4c0-0.1,0.1-0.1,0.1-0.2l-0.3-0.2l-0.5-0.4c0,0-0.8,0.7-1.4,2c0,0-0.1-0.1-0.1-0.1
                      c-0.2-0.2-0.4-0.3-0.8-0.3c0,0,0,0,0,0c-0.2,0-0.3-0.1-0.4-0.1c0.1-0.1,0.1-0.3,0.1-0.4c0-0.4-0.3-0.7-0.7-0.7
                      c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7c0.1,0,0.1,0,0.2,0c0.2,0.2,0.4,0.3,0.8,0.3c0.2,0,0.3,0,0.4,0.2
                      c0.1,0.1,0.1,0.3,0.2,0.4c0,0,0,0,0,0c-0.4,1.2-0.3,2.7-0.3,2.7l1.1,0c0-0.5,0.1-1.5,0.4-2.2C339,630.3,339.7,629.4,339.7,629.4z
                      "/>
                    <path class="st4" d="M358,626.4c-0.4,0-0.7,0.3-0.7,0.7c0,0.1,0,0.1,0,0.2c-0.2,0.2-0.3,0.4-0.3,0.8c0,0.2,0,0.3-0.2,0.4
                      c-0.1,0.1-0.2,0.1-0.3,0.1c-0.8-1.1-1.8-1.8-1.8-1.8l-0.8,0.8c0.6,0.5,1.2,1.2,1.7,2c0.4,0.6,0.8,1.3,1.1,2l1-0.5
                      c0,0-0.5-1.2-1.1-2.2c0.1,0,0.2-0.1,0.3-0.2c0.2-0.2,0.3-0.4,0.3-0.8c0-0.2,0.1-0.3,0.1-0.4c0.1,0.1,0.3,0.1,0.4,0.1
                      c0.4,0,0.7-0.3,0.7-0.7C358.6,626.7,358.3,626.4,358,626.4z"/>
                    <path class="st4" d="M355.3,635.6c-1.4,0.7-3.7,1.6-6.8,2c-1.2,0.2-2.4,0.2-3.4,0.2c-1.4,0-2.6-0.1-3.6-0.2
                      c-1.1-0.1-1.9-0.3-2.4-0.4c0.1,0.4,0.3,0.8,0.5,1.2c0,0,0,0,0,0c0,0,0,0.1,0.1,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0,0
                      c0.3,0.6,0.7,1.1,1.1,1.5c1.4,1.6,2.9,1.8,2.9,1.8l0,0l0,0c0,0,1.3,0.4,3.3,0.4c1.9,0,3.9-0.4,5.7-1.2c1.3-0.7,2.6-1.7,3.3-2.7
                      c0.5-0.7,0.8-1.5,1-2.3c0.1-0.4,0.2-1.1,0.1-1.8C356.8,634.8,356.2,635.2,355.3,635.6z"/>
                    <path class="st4" d="M340.2,629.7c0,0.1-0.7,0.9-1.1,2.3c-0.4,1-0.3,2.4-0.3,2.5v0c0,0.3,0,0.7,0.1,1c0,0,0,0,0,0
                      c0,0,0,0.1,0,0.1c0,0.2,0.1,0.5,0.1,0.7c0.7,0.2,4.9,1.2,9.5,0.5c2.9-0.4,5.1-1.3,6.5-1.9c1.1-0.5,1.8-1,2.1-1.2
                      c-0.3-1-1-2.6-1.7-3.6c-2-2.9-4.2-3.6-5.3-3.8c-0.4-0.1-0.8-0.1-1.2-0.1c-0.4,0-1,0-1.7,0.1c-0.7,0.1-1.6,0.3-2.5,0.6
                      c-1.3,0.5-2.6,1.2-3.5,2l0,0C340.8,629,340.5,629.3,340.2,629.7z M352.4,629.1c1,0,1.7,0.8,1.7,1.7c0,1-0.8,1.7-1.7,1.7
                      c-1,0-1.7-0.8-1.7-1.7C350.7,629.8,351.5,629.1,352.4,629.1z M344.2,629c1.6,0,2.8,1.3,2.8,2.8c0,1.6-1.3,2.8-2.8,2.8
                      c-1.6,0-2.8-1.3-2.8-2.8C341.4,630.3,342.6,629,344.2,629z"/>
                  </g>
                </g>
              </g>
              <g id="Objects">
                <g>
                  <ellipse class="st5" cx="345.6" cy="506.3" rx="376.8" ry="48.6"/>
                  <g>
                    <g>
                      <path class="st6" d="M124.9,482.7c0,0,6.3,19.5,6.6,24.3c0.3,4.9-21.5,5.2-23.6,3.8c-2.1-1.4-7.2-24.7-5.2-25.4
                        C104.8,484.8,124.2,480.4,124.9,482.7z"/>
                      <path class="st7" d="M104.8,484.8c0,0,7.6,7.3,13.9,5.2c6.3-2.1,10.1-5.2,10.1-5.2s-10.1-59.7-12-85.8
                        c-1.9-26.1,4-77.8,2.3-87.5c-1.8-9.8-32,19.4-32,19.4S97.5,464.6,104.8,484.8z"/>
                    </g>
                    <g>
                      <path class="st6" d="M88.8,487.2c0,0-8.7,13.9-10.8,14.9s-16.3-1-17.7,0s-3.1,9.7-2.4,11.1s22.9,3.8,29.2,4.2
                        c6.3,0.3,20.1-1,24-3.5c0.7-1.7-3.5-24.3-4.9-26.7C104.8,484.8,89.9,482.7,88.8,487.2z"/>
                      <path class="st7" d="M60.3,302.1c0,0,1.4,87.5,5.6,105.2c4.2,17.7,15.5,62.5,16.4,66.3c0,0-0.3,4.2,0,6.3
                        c0.3,2.1,3.4,10.1,5.5,11.8c2.1,1.7,17.7,3.8,21.4-2.6c0,0-5.1-28.3-7.2-39.7c-2.1-11.5-11.5-90.7-8.7-116
                        c0,0,19.1-12.5,24.3-16.7c5.2-4.2,4.5-13.5,4.5-14.6C122.2,301,60.3,302.1,60.3,302.1z"/>
                    </g>
                    <g>
                      <g>
                        <path class="st8" d="M16.7,50.2c0,0-1.7-3-1.7-4.5s5.9-21.7,8.7-22.9S45,25.2,49,26.3c4,1,20.1,4.9,21,8.3
                          C70.9,38.1,16.7,50.2,16.7,50.2z"/>
                        <g>
                          <path class="st9" d="M69.7,31.8c0,0-2.6-9.3-5.7-10.3c-3.1-1-15.6,4.3-15.6,4.3S67.1,30.7,69.7,31.8z"/>
                          <path class="st9" d="M72,61.3c0,0-7.7,3.8-12.2,3.8s-7.5-3.6-10.7-3.6c-3.1,0-1.6-5.2,1.6-4.5c3.1,0.7,8.9,2.1,11,1.1
                            c2.1-1,8-19,7.6-22.5s-21.5-6.9-24.7-9s0.3-5.2,0.3-5.2s11.5,3.5,14.6,3.8c3.1,0.3,10.8,0.3,13.5,3.8
                            c2.8,3.5,5.6,21.2,5.6,21.2s26.9,21.9,30.1,27.8s-8.2,10.6-8.2,10.6S74.6,59.6,72,61.3z"/>
                        </g>
                        <g>
                          <path class="st6" d="M46.9,27.5c-16.4-3.8-21.1-3.9-22.2-2s-9.4,23.3-8,24.7s38.7,8,43.7,8.2c5.1,0.2,9.9-21.7,9.6-23.8
                            C69.7,32.5,50,28.3,46.9,27.5z"/>
                          <path class="st8" d="M46.1,30.6c-12.8-2.9-16.4-3-17.2-1.5c-0.8,1.5-7.3,18-6.2,19.1c1.1,1.1,25,4.4,28.9,4.6
                            C55.5,53,59.3,36,59,34.4C58.8,32.8,48.5,31.2,46.1,30.6z"/>
                          <circle class="st10" cx="62.4" cy="45" r="2.6"/>
                        </g>
                        <g>
                          <path class="st6" d="M36.2,0.7C35.8-0.5,33.9,0,34,1.2c0.2,3-0.3,6,0,9c0.1,1.3,2.1,1.4,2.3,0.1C36.6,7.2,37.1,3.8,36.2,0.7z"
                            />
                          <path class="st6" d="M23.8,11.4c-0.7-2.3-1.2-4.8-2.5-6.9c-0.7-1.1-2.4-0.2-1.9,1c0.8,2.3,1.3,4.7,2.4,6.9
                            C22.5,13.7,24.2,12.6,23.8,11.4z"/>
                          <path class="st6" d="M15.9,18.2c-2.5-1.8-5.7-3-8.6-4.1c-1.4-0.5-2.2,1.3-1,2c2.6,1.7,5.6,3.3,8.6,4.2
                            C16,20.7,16.9,18.9,15.9,18.2z"/>
                          <path class="st6" d="M9.6,27.3C8.3,27,6.9,27,5.5,26.8c-1.5-0.2-3-0.4-4.5-0.4c-1.4,0-1.3,2-0.1,2.3c2.6,0.7,5.9,1.6,8.6,1
                            C10.8,29.4,11,27.7,9.6,27.3z"/>
                        </g>
                      </g>
                      <path class="st11" d="M94.1,85.9c0,0,4.9-13,14.9-13c0,0,9.5,14.6,11.6,19.4c0,0-10.1,12.4-15.5,11.6
                        C105.1,103.8,96.1,90.5,94.1,85.9z"/>
                      <path class="st12" d="M118.7,92.4c0,0,13.9,28.1,19.6,39.4s11,44.1,12,54.9c1,10.8-17.6,4.4-16.9,0c0.7-4.4-13.4-61.1-26.2-84.2
                        C107.2,102.5,113.1,90.7,118.7,92.4z"/>
                    </g>
                    <g>
                      <path class="st9" d="M125.8,160.9c0,0-3.1,11.7-2.6,13.5c0.5,1.8,14.6,5.2,15.1,3.7c0.5-1.6,1.8-10.2,2.9-13
                        c1-2.9-3-12-5.7-12.7C132.8,151.7,125.8,160.9,125.8,160.9z"/>
                      <path class="st13" d="M126.9,307.4c0,0-0.7-30.2,7.2-57.1c7.9-26.8,23.8-57.9,16.5-70.4c0,0-6-1.6-13.5,0
                        c-7.6,1.6-21.4,1-21.4,1s-13.5,0.9-16.9,1.7s-25.5,18.5-39.1,20.8c-13.5,2.3-24-6.1-26.8-11.3c-2.9-5.2-15.9-4.6-16.4,0.2
                        c-0.5,4.8,3.9,18.1,20.1,26.4c16.2,8.3,42.5,2.3,42.5,2.3s-26.8,44.3-21.9,90.4C57.1,311.5,94,320.6,126.9,307.4z"/>
                      <path class="st11" d="M110.5,181.1c0,0,2.1-7.3,3.1-7.8c1-0.5,24,2.6,30.7,0c0,0,0.8,3.9,0,7
                        C144.4,180.3,136.3,187.4,110.5,181.1z"/>
                    </g>
                    <g>
                      <path class="st9" d="M10.9,168.7c0,0,3.6-22.7,9.2-33.9c0,0-2.5-19.7,0-22.1s7.4-1.1,8-0.3c0,0,1.6-23.2,3.4-23.7
                        c1.8-0.5,5.7,0.8,4.9,5.7c-0.8,4.9-0.3,18.2,0.1,19.3c0.4,1,8-21.6,10.1-22.1c2.1-0.5,5.7,1.8,4.7,4.4c-1,2.6-7,19.8-7,22.4
                        c0,2.6,1,5.7,2.1,6.5s5.7-0.5,6.3,1c0.5,1.6-1.6,5.2-8.6,7.8c-7,2.6-12.2,4.2-12.2,4.2s-7.6,21.4-6,32.6
                        C27.3,181.7,13.5,168.9,10.9,168.7z"/>
                      <path class="st11" d="M23.9,195c-6.3,1.8-9.4,2.9-12.2,2.9s-6-26.3-5.7-30.2c0.3-3.9,17.7-1,20.6,0c2.9,1,5.2,17.7,7.8,22.1
                        C34.4,189.8,30.2,193.2,23.9,195z"/>
                    </g>
                    <g>
                      <path class="st14" d="M114,153c0,0,0.6-9.1,6.1-11.6c5.5-2.5,8.8,0,8.8,0S119.6,154.4,114,153z"/>
                      <path class="st9" d="M135.7,95c0,0-13.8,20.6-16,24.5s-3.9,0.8-4.7,0c-0.8-0.8-8,1.4-5.8,4.4c2.2,3,6.9,6.1,6.9,6.1
                        s-3.6,5.8-4.1,7.2c0,0,13.5,0.8,17.6,0c0,0-7.4,15.1-20.8,13.2c0,0-3.2,8.3-2.3,9.6c0.8,1.4,18.4,4.4,22.3,1.9
                        c3.9-2.5,9.4-12.9,15.7-22.8s13.5-8.8,11.8-19.3C154.7,109.3,143.7,88.4,135.7,95z"/>
                      <path class="st15" d="M146.7,104.6c0,0-14.2,0.5-15.2-10.9c-1-11.4,4.2-22.7,9.2-22.9c5-0.3,20.2,7.2,9.9,15.1
                        c0,0,14-5.8,21.5-3.3c7.4,2.5,16,10.5,2.8,15.1c0,0,25.3,10.2,18.4,25.6c0,0,10.7,3.9,9.4,8.8c-1.4,5-8.3,0-8.3,0
                        s5.5,11.6,1.1,14.3s-5,0-5,0s1.7,11-9.9,16.3c-11.6,5.4-16.2,4-16.2,4s0.6,11.8-6.3,11.3s-11-11.6-11-11.6s0.6,4.1-5.2,3.6
                        c-5.8-0.6-6-13-6.2-16.7c-0.2-3.7,8.1-16.1,8.1-16.1s2.8-12.9,8.5-12.9C152.2,124.4,134.6,115.9,146.7,104.6z"/>
                      <path class="st9" d="M139,124.4c2.7-0.8,9.9,10.4,7.2,16.8c-2.8,6.3-9.4,12.1-11.8,9.1s0.6-5.5,3.3-9.4
                        C140.4,137.1,135.4,125.5,139,124.4z"/>
                      <g>
                        <path class="st16" d="M133.4,107.1c0,0,5.9,3,5,9.6c0,0-2.1-7.7-7.1-7.7L133.4,107.1z"/>
                        
                          <ellipse transform="matrix(0.405 -0.9143 0.9143 0.405 -33.9842 187.2492)" class="st17" cx="126.9" cy="119.7" rx="3" ry="1.9"/>
                      </g>
                    </g>
                  </g>
                  <g class="st0">
                    <path class="st18" d="M353.3,337.6c0,0,2.2,152.2,2.9,157.2c0.6,5.1-10.2,8.6-12.1,0c-1.9-8.6-3.2-157.2-3.2-157.2H353.3z"/>
                    <g class="st1">
                      <path class="st19" d="M232.8,398.1c0,0-2.5,88.7,0,91.4h10.8c0,0,0-87,0-91.4S232.9,394.4,232.8,398.1z"/>
                      <path class="st19" d="M297.9,396.5c0,0,1.1,92.3,3.6,92.9c2.4,0.6,10.4,0,10.4,0s1.6-82.4,0-90.2
                        C310.3,391.5,297.9,396.5,297.9,396.5z"/>
                      <path class="st19" d="M320.8,383.6l-4,16.7l-87.4-1.2l-0.3-21.6C229.1,377.6,298.5,376.8,320.8,383.6z"/>
                    </g>
                    <path class="st20" d="M253.1,280.4c0,0-7.4,11.4-7.7,15C245.4,295.4,252.2,285.2,253.1,280.4z"/>
                    <g class="st1">
                      <g>
                        <g>
                          <path class="st21" d="M312.2,472.6c0,0-7.6,12.3-8.9,15.9s2.5,13.2,4.4,13.7s15.5,3,16.5,5.5c1,2.5,0,6.8,0,6.8
                            s-16.5,1.8-25.4,0c-8.9-1.8-15.8-28.5-14.4-38.6c0,0,12.2-9.1,14.4-11.1C301.1,462.9,312.2,472.6,312.2,472.6z"/>
                          <path class="st22" d="M313.9,358.9c0,0,74.4-8.9,80-4.9c5.5,4,7.6,12.6,2.5,19.7s-76.6,94.5-80.7,98.9c-4,4.4-18.8-2.6-21-8.7
                            c0,0,66.4-80.2,68.9-86.7c0,0-61.9-0.2-68.9-9.1c-7-8.9-17.3-11.1-11.8-14.1S313.9,358.9,313.9,358.9z"/>
                        </g>
                        <g>
                          <path class="st21" d="M365.6,501.8c0,0,3,12.1,5.5,14.1c2.5,2,24.2-3,26.2,0c2,3,1.9,13.6,1.9,13.6s-39.7,4.5-45.2,0
                            c0,0-10.3,2.5-13.7-0.5c0,0,2.1-26.7,5.1-30.2C348.5,495.2,365.6,501.8,365.6,501.8z"/>
                          <path class="st23" d="M283,354c0,0,8.7,11.1,16,11.6s77.8-1,83.9,6.1c6.1,7.1-15.1,117.9-12.6,132.8c0,0-26.7,0.7-30.3,0
                            c0,0,22.2-105.1,19.7-110.1c-2.5-5-101.6-10.1-107.1-15.7c-5.5-5.5-6.1-15.6-4.5-21.2C249.5,352,283,354,283,354z"/>
                        </g>
                      </g>
                      <g>
                        <path class="st24" d="M267,209.7c0,0-9.2-10.8-10.8-16.8c-1.6-6-1.6-26.7-1.6-26.7s-3.8,0-4.8-1.9c-1-1.9,2.9-6.3,4.8-5.5
                          c0,0-4.1-4.6-1.6-7.8c2.5-3.2,8.9,4.1,8.9,4.1s14.9-14,39.7-8.6c0,0,7.9-11,12.4-1.2c0,0,9.8-8.6,14.6,3.1
                          c4.8,11.7-3.1,19-3.1,19s5.9,23.3-2.2,30S278.7,212.3,267,209.7z"/>
                        <path class="st9" d="M274.9,186.3c0,0,7.9,46.3,9.2,48.5c1.3,2.2,16.2,11.1,27.9,9.2c11.7-1.9,14-6,13.3-20
                          c-0.6-14-4.4-52.4-5.4-54c0,0-5.1,3.1-7.6,2.6s-21.6-0.5-23.8,0S274.9,186.3,274.9,186.3z"/>
                        <path class="st9" d="M283.9,211.3c0,0-7-9.5-13-8.3s-5.4,11.7-3.5,15.2S283.5,230.1,283.9,211.3z"/>
                        <g>
                          <path class="st25" d="M309.8,203c0,0-0.2,6.6,1,6.5c1.1-0.2,6.5-0.3,7.5,0.8c1,1.1,0.8,6.2,0,6.7c-0.8,0.5-5.7,1.4-8.4,1
                            c0,0,7.5-1.4,7.6-2.2c0.2-0.8,0.2-5.2-0.6-5.2c-0.8,0.1-5.9,0.9-7,0C308.7,209.6,309.5,204.1,309.8,203z"/>
                          <path class="st26" d="M295.2,224.3c0,0,13,4.8,23,1.1C318.3,225.4,304.6,232.4,295.2,224.3z"/>
                          
                            <ellipse transform="matrix(0.9943 -0.1064 0.1064 0.9943 -19.993 32.6591)" class="st17" cx="296" cy="203.6" rx="1.9" ry="3.1"/>
                          
                            <ellipse transform="matrix(0.9943 -0.1064 0.1064 0.9943 -19.5482 34.8814)" class="st17" cx="317" cy="200.6" rx="1.9" ry="3.1"/>
                          <path class="st24" d="M298.9,183.7c0.6-0.1-8.3-2.4-11.6,5.2C287.3,189,296.2,184.2,298.9,183.7z"/>
                          <path class="st24" d="M310.2,181.5c-0.5,0,5.9-3.5,8.7,3.2C318.9,184.7,315.7,181.5,310.2,181.5z"/>
                        </g>
                      </g>
                      <g>
                        <path class="st9" d="M314.5,282.9c0,0,9.3,27.7,13.6,36.1s-10.6,7.8-10.6,7.8s-13.4-29.8-14.2-37.5
                          C302.4,281.6,310.9,272.4,314.5,282.9z"/>
                        <g>
                          <path class="st27" d="M263.1,250.4c2.6,5,14.3,15.7,21.7,14.8c7.4-1,17.4-5.7,8.2-18.6c-3.4-0.9-7-1.7-10.5-2.4
                            c-6.3-1.2-13.2-1.2-19.5-0.6C262.5,244.1,260.8,246.1,263.1,250.4z"/>
                          <path class="st28" d="M308.6,252.3c-1.1-1.3-7.7-3.6-15.6-5.6c9.2,12.9-0.8,17.6-8.2,18.6c-7.4,1-19-9.8-21.7-14.8
                            c-2.3-4.3-0.6-6.3-0.1-6.8c-11.2,1-20.3,3.6-20.3,3.6c-3.2,2.3-18.6,37.3-17.2,38.9c2.7,3.3,20,9.2,20,9.2s-6.2,19.9-4.4,31.3
                            c0.7,4.7,4.4,40.6,4.4,40.6c19-16.2,59.8-9.2,59.8-9.2s-8.2-17.9-9.2-24.5s9.4-46.3,9.4-46.3s12.1,1.3,12.1-2.2
                            C317.5,281.5,310.2,254.2,308.6,252.3z"/>
                        </g>
                        <path class="st9" d="M297.8,238.3c0,0-5.9,6.7-7.9,10.8c0,0,7.2,8.6-3.2,10.8c-10.5,2.2-20.9-11.8-19.4-15.6
                          c0,0,8.9-0.6,11.4-1.9c2.5-1.3,3.7-14.6,3.7-14.6S293,222.8,297.8,238.3z"/>
                        <g>
                          <path class="st9" d="M243.1,294.6c0,0-6.2,18.9-5.3,21.5c1,2.5,37.4,5.4,43.2,5.1c5.7-0.3,4.8,9.2-1.3,10.5
                            c-6,1.3-55.5,2.5-59.7-1c-4.1-3.5,5.5-40.1,6.8-43.3C233,290.3,234.8,291,243.1,294.6z"/>
                          <path class="st9" d="M293,317.1c0,0,5.1-6.7,7.2-8.5c2-1.7,5.2-1.9,5.2-1.9s3.8,2.2,4.4,4.1c0.6,1.9,3.3,7.7,0,8.9
                            c-3.3,1.2-7.6-5.3-7.6-5.3s-3.1,1.7-4.1,3.3C297.2,319.4,293,317.1,293,317.1z"/>
                          <path class="st9" d="M279.5,324.1c0,0,15.4-6.6,19.6-5.1s9,2.2,11.7,2.5c2.6,0.2,4.4,3,4.9,2.7
                            C316.1,323.7,284.7,329.2,279.5,324.1z"/>
                          <path class="st9" d="M281,321.1c0.9,0,8.1-1.7,10.3-3c2.2-1.3,7.4-6.1,8.9-5.6c1.4,0.5,2.7,2.9,3,6.8s-1.6,6.3-4.3,5.4
                            c-2.7-1-2.2-4.1-2.2-4.1s-9.4,4.9-12.5,4.3C281,324.5,281,321.1,281,321.1z"/>
                        </g>
                      </g>
                    </g>
                    <g class="st1">
                      <path class="st29" d="M270,332.9c0,0-0.3-3.7,0-4.8s3.6-3.8,3.6-3.8s43.8-1.7,50.3-2.1c0,0,17.9-53,20.8-55.9
                        c0,0,60.9,2.4,72.4,4.8L400.4,325v7.9c0,0-74.4,1.3-79.8,0H270z"/>
                      <path class="st6" d="M344.8,266.4c0,0,5.5,0.2,5.7,2.1c0.2,1.9-18.1,53.2-19.3,54c-1.2,0.8-7.2-0.2-7.2-0.2
                        S342.1,269.5,344.8,266.4z"/>
                      <g>
                        <path class="st6" d="M400.9,257.1c-0.4-1.9-0.7-3.9-1.8-5.6c-0.6-1-2.3-0.4-2.1,0.8c0.3,2,0.9,4.1,1.9,5.9
                          C399.5,259.4,401.1,258.3,400.9,257.1z"/>
                        <path class="st6" d="M414,251.6c-0.5,1.8-0.8,3.8-1.1,5.7c-0.2,1.5,2,1.9,2.3,0.4c0.4-1.9,0.8-3.8,0.9-5.7
                          C416.3,250.6,414.4,250.2,414,251.6z"/>
                        <path class="st6" d="M431.7,260.4c-0.9,0.4-1.7,1.1-2.5,1.7c-0.8,0.6-1.7,1.1-2.5,1.7c-1.1,0.8-0.2,2.6,1.1,2.1
                          c1-0.3,1.9-0.9,2.7-1.4c0.9-0.7,2.1-1.5,2.6-2.5C433.6,261.1,432.7,259.9,431.7,260.4z"/>
                        <path class="st6" d="M435.9,278.6c-1.2-1.1-3.5-2-5.2-1.7c-1.4,0.2-1.5,2.1-0.1,2.5c0.7,0.2,1.4,0.3,2.1,0.5
                          c0.8,0.3,1.5,0.6,2.3,0.7C436,280.8,436.7,279.4,435.9,278.6z"/>
                      </g>
                    </g>
                    <g class="st1">
                      <path class="st30" d="M446.9,341.8c0,0,2.2,172.1,2.9,177.8c0.6,5.7-10.2,9.7-12.1,0c-1.9-9.7-3.2-177.8-3.2-177.8H446.9z"/>
                      <polygon class="st30" points="195.9,335.4 262,331.6 262,352.1 195.9,352.1         "/>
                      <polygon class="st30" points="456.1,331.6 262,331.6 262,352.1 456.1,347.5         "/>
                      <path class="st30" d="M209,347.3c0,0-10.9,161.9-10.9,167.6c0,0-8.8,8.4-10.7,0c-1.9-8.4,8.9-167.6,8.9-167.6H209z"/>
                      <path class="st30" d="M262,352.1c0,0-11.1,170.6-10,174.4c1.1,3.8,9.8,5.9,11.5,2.1c1.6-3.8,11.5-177.5,11.5-177.5L262,352.1z"
                        />
                    </g>
                  </g>
                  <g class="st0">
                    <g class="st1">
                      <path class="st31" d="M555.2,156.8c0,0-4.7,12.6-12.8,19c-8.1,6.4-46.7,60,5.2,89.3c0,0-8.3-10.5-2.9-23.8c0,0,2.1,7.4,8.6,10.5
                        c0,0-8.4-21.9-7.1-39.3c1.4-17.4,14.5-41.4,15.8-52.7C563.4,148.4,557,155.9,555.2,156.8z"/>
                      <path class="st13" d="M555.2,143.8c0,0-2,10.8-1.8,13.9c0.2,3.1,3.3,6.8,7.1,6c3.8-0.9,5.3-12.9,6-15.7
                        C567.2,145.1,557.5,141.5,555.2,143.8z"/>
                    </g>
                    <g class="st1">
                      <path class="st32" d="M661.7,487.9c0,0,9,7,12.4,6.9c3.3-0.2,16.2-13.5,21.9-11.1s10,9.2,9,15.1c0,0-24.8,13-34.3,14.9
                        c-9.5,1.9-19.5,2.9-21.4,0s-5.6-14.4-2.8-20.5S661.7,487.9,661.7,487.9z"/>
                      <path class="st32" d="M512.2,483.3c0,0,2.4,22,6.2,24.2c0,0,16.7,3,19,7.8c2.4,4.9,0,9.1,0,9.1s-21.9,5.2-29.5,0
                        c-7.6-5.2-22.2-25.3-23-29.8c-0.8-4.4,12-17.2,12-17.2L512.2,483.3z"/>
                      <path class="st33" d="M625.5,276.4c0,0,20.9,59.1,26.7,89.1s10,117.1,11.9,122.3c0,0-6.2,11.9-19.3,4.3c0,0-7.9-77.3-13.1-96
                        c-5.2-18.7-32.3-73.2-36.6-79.2c0,0-16.8,57.2-23.9,75.2c-7.1,18.1-48.6,90.4-59,95.7c0,0-11.9,4.1-17.1-7.2
                        c0,0,40.9-66.5,46.7-87c5.7-20.5,10.5-101.5,20.2-118.4C571.6,258.3,610.7,265.4,625.5,276.4z"/>
                    </g>
                    <g class="st1">
                      <g>
                        <path class="st9" d="M695.1,211.3c0,0-0.6-10.8,1-16.5c1.6-5.7,6.7-6.6,11.2-2.8c0,0,13.8-14.7,17-15c3.2-0.3,4.5,1.3,1.3,4.8
                          c-3.2,3.5-10.5,14-10.5,14s5.4-1.2,7,1.4c1.6,2.5,0,6.4,0,6.4s4.4,3.5,0.3,7.8s-15.2,10.8-17.1,10.1
                          C703.4,220.7,695.1,211.3,695.1,211.3z"/>
                        <path class="st34" d="M604.2,171.8c0,0,7.3,2.1,12.1,9.8c4.9,7.6,18.7,39.7,37.7,42.6c19,2.9,35.9-14,40-14.8
                          c4-0.7,15.2,9,14,15.1c-1.2,6.1-37.4,23-54.7,22c-17.4-1-30.9-18.6-34.3-22.6S602.7,183.5,604.2,171.8z"/>
                      </g>
                      <path class="st35" d="M542.2,229.6c0,0-15,39-40.4,53.6c0,0-7.5-0.6-9.3-3.2c0,0,26.1-11.6,39.2-40.5
                        C544.7,210.5,542.2,229.6,542.2,229.6z"/>
                      <path class="st34" d="M588.8,170.8c0,0,13.5-2.5,15.7,3.2s6,21.7,9.1,24.8c3.1,3.1,14.3,18.4,5.2,29.6c0,0,8.6,24.2,9.8,51.7
                        c0,0-38.9,14.8-71.5-1.4c0,0,12.3-31.1,13.2-37.4c1.7-11.4-9.8-35.7-9.8-35.7s-18.4,32.5-31.9,41.7c-13.5,9.1-39,12.4-43.1-5.2
                        c-4-17.6,13.3-13.1,13.3-13.1s16.4,2.4,24.3-3.3c7.9-5.7,23.8-44.5,29.3-49.5C557.9,171.1,582,170.9,588.8,170.8z"/>
                      <g>
                        <path class="st35" d="M490.1,281.6c0,0-22.2,18.7-26,24.4c-3.8,5.7,31.1,31.1,36.2,30.5c5.1-0.6,31.5-27.2,31-30.5
                          C530.8,302.7,496.6,280.5,490.1,281.6z"/>
                        <path class="st35" d="M560.5,172.9c0,0,8.3,17.9,6,40.3c-2.4,22.4-23.8,75-37.6,87.5l3.8,5.4c0,0,58.9-84.8,31.6-133.1H560.5z"
                          />
                        <path class="st36" d="M533.5,304.8c0,0-7.9-6.1-16.9-12.4c-9-6.3-21.4-15.6-25.5-14.6s-13.7,10.1-13.7,13.5
                          c0,3.4,15.9,19.9,21.9,20.5c0,0,15.3-4.5,24.8-5.7C533.5,304.8,531.5,307.9,533.5,304.8z"/>
                      </g>
                      <path class="st9" d="M590.1,165.6c0,0,1.6,6.6,3.8,6.9c0,0,2.2,4.8-1.9,6.4c-4.1,1.7-14.4-5.4-14-6.7c0.3-1.2,1.3-5.4,0.8-7.9
                        S586.5,161.1,590.1,165.6z"/>
                    </g>
                    <g class="st1">
                      <path class="st31" d="M578.3,79.1c9.5-4.4,28.3,6.3,31.9,15.6s5.5,23-0.8,29.4c-6.3,6.4-46.2,27.2-46.2,27.2
                        s-16.2-11.2-19.4-18.9c-3.2-7.6-4.8-24.1,2.5-37.1C553.6,82.3,567.9,76.9,578.3,79.1z"/>
                      <path class="st9" d="M608.5,116.3c0,0,4,27.1,0,36.8c-6,14.6-24.5,13.3-32.6,10.5c-13.5-4.7-19.4-28.2-20.7-35.2
                        c0,0,22.2-9.2,24.4-36.2C579.6,92.1,598,117.5,608.5,116.3z"/>
                      <g>
                        <path class="st25" d="M588.8,117.8c0,0-0.6,8.3,1.9,9.8c2.5,1.6,7-3.1,8.4-1.1c1.4,2,1.3,4.6-1.9,5.9c0,0,7.3-1.6,2.8-7.3
                          c-2.8-3.5-7,2.7-8.2,1.3S588.8,119.9,588.8,117.8z"/>
                        <g>
                          <path class="st37" d="M594.4,156.8c-1.3,1.1-2.7,1.8-4.3,1.9c-6.6,0.7-13.2-8.8-16.3-15C579.2,144,590.7,145.6,594.4,156.8z"
                            />
                          <path class="st38" d="M572,138.8c1-0.6,31.7-2.2,31.7-2.2s-2.9,14.8-9.4,20.3c-3.6-11.2-15.2-12.9-20.6-13
                            C572.4,141.1,571.7,139,572,138.8z"/>
                        </g>
                        <path class="st17" d="M581.7,124.2c0,0-3-4.8-6.8-4c-3.8,0.8-6,3.8-5.6,6.3C569.3,126.6,573.6,119,581.7,124.2z"/>
                        <path class="st17" d="M604.5,121.3c0,0-2.6-4.1-5.8-3.4c-3.3,0.7-5.2,3.3-4.8,5.4C593.9,123.4,597.5,116.8,604.5,121.3z"/>
                        <path class="st39" d="M578.7,107.7c0,0-10.4,2.9-12.2,6C566.4,113.7,566.5,104.8,578.7,107.7z"/>
                        <path class="st39" d="M592.2,107.5c0,0,7-5.3,11.6,4.3C603.7,111.8,597.9,107.1,592.2,107.5z"/>
                      </g>
                      <path class="st9" d="M556.2,128.6c0,0-6-5.3-8.9-2s0.4,12.2,4.4,13.7c4.1,1.4,6.6,3.2,8.3,0
                        C561.9,137.2,556.2,128.6,556.2,128.6z"/>
                      <path class="st9" d="M609.1,120.6c0,0,2.1-4.5,3-0.5c0.8,4.1,1.7,14.8-1.8,15.5C606.7,136.3,609.1,120.6,609.1,120.6z"/>
                    </g>
                    <g class="st1">
                      <path class="st40" d="M551.2,130.9c1.6-2.4,7.7,2.9,6.6,5.7c-1.1,2.9-4.8,3.8-6.6,1C548.8,133.9,550.3,132.3,551.2,130.9z"/>
                      <path class="st40" d="M612.5,123.4c0,0,2.3-0.8,2.5,3.2c0.2,4-4.5,4.8-4.5,4.8S608.3,125.4,612.5,123.4z"/>
                      <path class="st40" d="M553.4,138.8c0,0,4.4,29.9,34.5,41.8c0,0,0,35-6.2,55.9c-6.2,20.9-20,37.1-37.8,34.3
                        c-17.9-2.9-28.3-19.3-28.3-19.3v-6.2h-3.3v6c0,0,9,20.5,31.2,23.6c22.1,3.1,35.2-14.3,42.6-37.4c7.4-23.1,6.2-56.4,6.2-56.4
                        s32.2-15.9,22.3-52.1c0,0-2.4-2-1.8,1.6c0.7,3.6,6.6,31.7-21.7,47.2c0,0-25-7-35.1-39C555.8,138.8,553.6,133.6,553.4,138.8z"/>
                      <g>
                        <g>
                          <path class="st41" d="M510.8,243.2c1.3-3.3-2.5-35.9-3.8-41.4c-0.8-3.4-3.3-4.9-5.1-5.5c2.4-0.3,4.2-0.5,4.8-0.4
                            c1.9,0.3,4.1,1.3,5.6,5.9c1.4,4.6,6.7,42.2,3.3,43.5c-1.2,0.5-4.9,1.1-9.2,1.5C508,246.2,510,245,510.8,243.2z"/>
                          <path class="st40" d="M481.8,199.4c4.5-0.7,14.2-2.3,20.1-3.1c1.8,0.6,4.3,2.1,5.1,5.5c1.3,5.5,5.1,38.1,3.8,41.4
                            c-0.7,1.8-2.8,3-4.4,3.7c-7.3,0.8-16.4,1.2-18.6,0.3C484.1,245.8,477.5,200.1,481.8,199.4z"/>
                        </g>
                        <path class="st6" d="M483.5,204c0.1,1.4,1.3,2.4,2.7,2.3l4-0.3c1.4-0.1,2.4-1.3,2.3-2.7l0,0c-0.1-1.4-1.3-2.4-2.7-2.3l-4,0.3
                          C484.4,201.5,483.4,202.7,483.5,204L483.5,204z"/>
                        <path class="st6" d="M510.7,181c-0.1-1.2-1.9-1.6-2.3-0.4c-0.9,2.4-1.5,5.4-1.5,8c0,1.5,2.1,1.3,2.4,0.1
                          C510,186.3,510.8,183.5,510.7,181z"/>
                        <path class="st6" d="M493.9,180.1c-0.4-1.3-2.3-0.8-2.2,0.5c0,2.1,0.5,4.4,1.4,6.3c0.5,1.1,2.5,0.9,2.3-0.5
                          C494.9,184.3,494.5,182.1,493.9,180.1z"/>
                        <path class="st6" d="M483.7,190.5c-1.1-1.6-2.1-3.5-3.4-5c-0.8-1-2.6-0.2-2,1c0.8,2,2.2,3.9,3.6,5.5
                          C482.9,193,484.5,191.5,483.7,190.5z"/>
                        <path class="st6" d="M473.2,199.5c-1.3-0.9-2.7-2-4.3-2.5c-0.5-0.2-1.1-0.1-1.4,0.3c-0.4,0.5-0.4,1.3,0.1,1.7
                          c1.3,1,2.7,2,4.3,2.5c0.5,0.2,1.1,0.1,1.5-0.3C473.8,200.8,473.8,199.9,473.2,199.5z"/>
                      </g>
                      <path class="st9" d="M480.4,205.6c0,0-0.6,6,2.1,7.1c2.6,1.2,3.1,2.6,8.8,1.4c5.7-1.2,12.1,0.7,12.9,2.6s-3.3,5.2-7.4,5.2
                        c-4,0-9.3,0.7-9.3,2.4c0,1.7,3.9,2.1,8.3,1.4c4.3-0.7,10.5-0.9,11.7,2.4c1.2,3.3-2.9,4.7-6.7,5.2c-3.8,0.5-9.8,0.7-10.5,1.7
                        c-0.7,1,3.8,2.4,6.7,1.9c2.9-0.5,8.1,0,8.3,2.4c0.2,2.4-7.9,3.6-12.6,3.6c-4.8,0-8.3-1.7-10.2-3.6c-1.9-1.9-5.2-15.9-5-22.4
                        C477.7,210.6,480.4,205.6,480.4,205.6z"/>
                    </g>
                  </g>
                </g>
              </g>
              </svg>
              </div>
              

            </div>
          </div>
          <!-- discovering -->
          <div class="Evaluating">
            <div class="col-sm-6 text-center">
              <div class="browsing bl animated">
                
              <svg class="svg-evaluating" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 269 390.2" style="enable-background:new 0 0 269 390.2;" xml:space="preserve">
                <g id="Background" class="st0">
                  <g class="st1">
                    <rect x="-237.5" y="-262.8" class="st2" width="799.1" height="800"/>
                    <rect x="-238.4" y="273.8" class="st3" width="800" height="263.5"/>
                  </g>
                  <g class="st1">
                    <g>
                      <path class="st4" d="M47.6,498.6v-0.3c-0.3,0.4-0.7,0.7-1,1c-0.3,0.3-0.7,0.4-1.1,0.6c-0.4,0.1-0.8,0.2-1.3,0.2
                        c-0.6,0-1.2-0.1-1.7-0.4c-0.5-0.3-1-0.6-1.4-1.1c-0.4-0.5-0.7-1.1-0.9-1.7c-0.2-0.7-0.3-1.4-0.3-2.1c0-1.6,0.4-2.9,1.2-3.8
                        c0.8-0.9,1.8-1.4,3.1-1.4c0.7,0,1.4,0.1,1.9,0.4c0.5,0.3,1,0.7,1.5,1.2v-3.8c0-0.5,0.1-0.9,0.3-1.2c0.2-0.3,0.5-0.4,0.9-0.4
                        c0.4,0,0.7,0.1,0.9,0.4c0.2,0.3,0.3,0.6,0.3,1.1v11.4c0,0.5-0.1,0.9-0.3,1.1c-0.2,0.2-0.5,0.4-0.9,0.4c-0.4,0-0.6-0.1-0.9-0.4
                        C47.8,499.4,47.6,499.1,47.6,498.6z M42.5,494.8c0,0.7,0.1,1.3,0.3,1.8c0.2,0.5,0.5,0.9,0.9,1.1c0.4,0.3,0.8,0.4,1.2,0.4
                        c0.5,0,0.9-0.1,1.2-0.4c0.4-0.2,0.7-0.6,0.9-1.1c0.2-0.5,0.3-1.1,0.3-1.8c0-0.7-0.1-1.3-0.3-1.8c-0.2-0.5-0.5-0.9-0.9-1.1
                        c-0.4-0.3-0.8-0.4-1.3-0.4c-0.5,0-0.9,0.1-1.3,0.4c-0.4,0.3-0.7,0.7-0.9,1.2C42.6,493.5,42.5,494.1,42.5,494.8z"/>
                      <path class="st4" d="M59.1,495.5H54c0,0.6,0.1,1.1,0.4,1.6c0.2,0.5,0.5,0.8,0.9,1c0.4,0.2,0.8,0.3,1.3,0.3c0.3,0,0.6,0,0.9-0.1
                        c0.3-0.1,0.5-0.2,0.7-0.3c0.2-0.2,0.5-0.3,0.7-0.5c0.2-0.2,0.5-0.4,0.8-0.7c0.1-0.1,0.3-0.2,0.6-0.2c0.3,0,0.5,0.1,0.6,0.2
                        c0.2,0.1,0.2,0.4,0.2,0.6c0,0.2-0.1,0.5-0.3,0.8c-0.2,0.3-0.5,0.6-0.8,0.9c-0.4,0.3-0.8,0.5-1.4,0.7c-0.6,0.2-1.2,0.3-1.9,0.3
                        c-1.7,0-3-0.5-3.9-1.4c-0.9-0.9-1.4-2.2-1.4-3.9c0-0.8,0.1-1.5,0.3-2.1c0.2-0.7,0.6-1.2,1-1.7c0.4-0.5,1-0.8,1.6-1.1
                        c0.6-0.3,1.3-0.4,2.1-0.4c1,0,1.9,0.2,2.6,0.6c0.7,0.4,1.3,1,1.6,1.7c0.4,0.7,0.5,1.4,0.5,2.1c0,0.7-0.2,1.1-0.6,1.3
                        C60.3,495.4,59.8,495.5,59.1,495.5z M54,494h4.7c-0.1-0.9-0.3-1.6-0.7-2c-0.4-0.4-1-0.7-1.6-0.7c-0.6,0-1.2,0.2-1.6,0.7
                        C54.3,492.4,54.1,493.1,54,494z"/>
                      <path class="st4" d="M70.9,496.7c0,0.7-0.2,1.3-0.5,1.8c-0.3,0.5-0.9,0.9-1.5,1.2c-0.7,0.3-1.5,0.4-2.5,0.4
                        c-0.9,0-1.7-0.1-2.4-0.4c-0.7-0.3-1.2-0.6-1.5-1.1c-0.3-0.4-0.5-0.9-0.5-1.3c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.8-0.3
                        c0.3,0,0.5,0.1,0.6,0.2c0.1,0.1,0.3,0.3,0.4,0.6c0.3,0.5,0.6,0.8,1,1c0.4,0.2,0.9,0.3,1.5,0.3c0.5,0,0.9-0.1,1.3-0.3
                        c0.3-0.2,0.5-0.5,0.5-0.8c0-0.5-0.2-0.8-0.5-1c-0.3-0.2-0.9-0.4-1.7-0.6c-0.9-0.2-1.6-0.5-2.2-0.7c-0.6-0.2-1-0.6-1.3-1
                        c-0.3-0.4-0.5-0.9-0.5-1.5c0-0.5,0.2-1,0.5-1.5c0.3-0.5,0.8-0.8,1.4-1.1c0.6-0.3,1.3-0.4,2.2-0.4c0.7,0,1.3,0.1,1.8,0.2
                        c0.5,0.1,1,0.3,1.3,0.6c0.4,0.2,0.6,0.5,0.8,0.8c0.2,0.3,0.3,0.6,0.3,0.8c0,0.3-0.1,0.5-0.3,0.7c-0.2,0.2-0.5,0.3-0.9,0.3
                        c-0.3,0-0.5-0.1-0.7-0.2c-0.2-0.2-0.4-0.4-0.6-0.7c-0.2-0.3-0.4-0.5-0.7-0.6c-0.3-0.2-0.6-0.2-1.1-0.2c-0.5,0-0.9,0.1-1.2,0.3
                        c-0.3,0.2-0.5,0.4-0.5,0.7c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.5,0.3,0.9,0.4c0.4,0.1,0.9,0.3,1.6,0.4c0.8,0.2,1.5,0.4,2,0.7
                        c0.5,0.3,0.9,0.6,1.2,1C70.8,495.8,70.9,496.2,70.9,496.7z"/>
                      <path class="st4" d="M73.5,488.3c-0.4,0-0.7-0.1-0.9-0.3c-0.3-0.2-0.4-0.5-0.4-0.9c0-0.4,0.1-0.7,0.4-0.9
                        c0.3-0.2,0.6-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.3c0.3,0.2,0.4,0.5,0.4,0.9c0,0.4-0.1,0.7-0.4,0.9
                        C74.2,488.2,73.9,488.3,73.5,488.3z M74.8,491v7.5c0,0.5-0.1,0.9-0.4,1.2c-0.2,0.3-0.6,0.4-0.9,0.4s-0.7-0.1-0.9-0.4
                        c-0.2-0.3-0.4-0.7-0.4-1.2v-7.4c0-0.5,0.1-0.9,0.4-1.2c0.2-0.3,0.5-0.4,0.9-0.4s0.7,0.1,0.9,0.4C74.7,490.2,74.8,490.6,74.8,491z
                        "/>
                      <path class="st4" d="M86.2,491.4v7.5c0,0.9-0.1,1.6-0.3,2.2c-0.2,0.6-0.5,1.1-0.9,1.5c-0.4,0.4-0.9,0.7-1.6,0.9
                        c-0.7,0.2-1.5,0.3-2.4,0.3c-0.9,0-1.7-0.1-2.4-0.4c-0.7-0.3-1.2-0.6-1.6-1c-0.4-0.4-0.6-0.8-0.6-1.2c0-0.3,0.1-0.6,0.3-0.8
                        c0.2-0.2,0.5-0.3,0.8-0.3c0.4,0,0.7,0.2,1,0.5c0.1,0.2,0.3,0.3,0.4,0.5c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.4,0.2,0.7,0.3
                        c0.3,0.1,0.5,0.1,0.9,0.1c0.7,0,1.2-0.1,1.6-0.3c0.4-0.2,0.6-0.4,0.8-0.8c0.1-0.3,0.2-0.7,0.3-1.1c0-0.4,0-1,0.1-1.8
                        c-0.4,0.6-0.9,1-1.4,1.3c-0.5,0.3-1.1,0.4-1.9,0.4c-0.9,0-1.6-0.2-2.3-0.7c-0.6-0.4-1.1-1.1-1.5-1.9c-0.3-0.8-0.5-1.7-0.5-2.8
                        c0-0.8,0.1-1.5,0.3-2.1c0.2-0.6,0.5-1.2,0.9-1.6c0.4-0.4,0.8-0.8,1.4-1c0.5-0.2,1.1-0.3,1.7-0.3c0.7,0,1.4,0.1,1.9,0.4
                        c0.5,0.3,1,0.7,1.5,1.3V491c0-0.4,0.1-0.8,0.3-1c0.2-0.2,0.5-0.4,0.9-0.4c0.5,0,0.8,0.2,1,0.5C86.1,490.4,86.2,490.8,86.2,491.4z
                         M78.7,494.7c0,1.1,0.2,1.8,0.7,2.4c0.5,0.5,1.1,0.8,1.8,0.8c0.4,0,0.8-0.1,1.2-0.3c0.4-0.2,0.7-0.6,0.9-1c0.2-0.5,0.4-1,0.4-1.7
                        c0-1.1-0.2-1.9-0.7-2.5c-0.5-0.6-1.1-0.9-1.8-0.9c-0.7,0-1.3,0.3-1.8,0.8C78.9,492.9,78.7,493.7,78.7,494.7z"/>
                      <path class="st4" d="M90.3,491v0.3c0.5-0.6,1-1,1.5-1.3c0.5-0.3,1.2-0.4,1.9-0.4c0.7,0,1.3,0.1,1.8,0.4c0.5,0.3,0.9,0.7,1.2,1.3
                        c0.2,0.3,0.3,0.7,0.3,1c0.1,0.4,0.1,0.8,0.1,1.4v4.8c0,0.5-0.1,0.9-0.4,1.2c-0.2,0.3-0.5,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4
                        c-0.2-0.3-0.4-0.7-0.4-1.2v-4.3c0-0.9-0.1-1.5-0.4-2c-0.2-0.5-0.7-0.7-1.4-0.7c-0.5,0-0.9,0.1-1.3,0.4c-0.4,0.3-0.7,0.7-0.8,1.1
                        c-0.1,0.4-0.2,1.1-0.2,2.2v3.2c0,0.5-0.1,0.9-0.4,1.2c-0.2,0.3-0.6,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4c-0.2-0.3-0.4-0.7-0.4-1.2
                        V491c0-0.5,0.1-0.9,0.3-1.1c0.2-0.2,0.5-0.4,0.9-0.4c0.2,0,0.4,0.1,0.6,0.2c0.2,0.1,0.3,0.3,0.4,0.5
                        C90.2,490.4,90.3,490.7,90.3,491z"/>
                      <path class="st4" d="M106.1,495.5H101c0,0.6,0.1,1.1,0.4,1.6c0.2,0.5,0.5,0.8,0.9,1c0.4,0.2,0.8,0.3,1.3,0.3c0.3,0,0.6,0,0.9-0.1
                        c0.3-0.1,0.5-0.2,0.7-0.3c0.2-0.2,0.5-0.3,0.7-0.5c0.2-0.2,0.5-0.4,0.8-0.7c0.1-0.1,0.3-0.2,0.6-0.2c0.3,0,0.5,0.1,0.6,0.2
                        c0.2,0.1,0.2,0.4,0.2,0.6c0,0.2-0.1,0.5-0.3,0.8c-0.2,0.3-0.5,0.6-0.8,0.9c-0.4,0.3-0.8,0.5-1.4,0.7c-0.6,0.2-1.2,0.3-1.9,0.3
                        c-1.7,0-3-0.5-3.9-1.4c-0.9-0.9-1.4-2.2-1.4-3.9c0-0.8,0.1-1.5,0.3-2.1c0.2-0.7,0.6-1.2,1-1.7c0.4-0.5,1-0.8,1.6-1.1
                        c0.6-0.3,1.3-0.4,2.1-0.4c1,0,1.9,0.2,2.6,0.6c0.7,0.4,1.3,1,1.6,1.7c0.4,0.7,0.5,1.4,0.5,2.1c0,0.7-0.2,1.1-0.6,1.3
                        C107.3,495.4,106.8,495.5,106.1,495.5z M101,494h4.7c-0.1-0.9-0.3-1.6-0.7-2c-0.4-0.4-1-0.7-1.6-0.7c-0.6,0-1.2,0.2-1.6,0.7
                        C101.3,492.4,101.1,493.1,101,494z"/>
                      <path class="st4" d="M116.6,498.6v-0.3c-0.3,0.4-0.7,0.7-1,1c-0.3,0.3-0.7,0.4-1.1,0.6c-0.4,0.1-0.8,0.2-1.3,0.2
                        c-0.6,0-1.2-0.1-1.7-0.4c-0.5-0.3-1-0.6-1.4-1.1c-0.4-0.5-0.7-1.1-0.9-1.7c-0.2-0.7-0.3-1.4-0.3-2.1c0-1.6,0.4-2.9,1.2-3.8
                        c0.8-0.9,1.8-1.4,3.1-1.4c0.7,0,1.4,0.1,1.9,0.4c0.5,0.3,1,0.7,1.5,1.2v-3.8c0-0.5,0.1-0.9,0.3-1.2c0.2-0.3,0.5-0.4,0.9-0.4
                        c0.4,0,0.7,0.1,0.9,0.4c0.2,0.3,0.3,0.6,0.3,1.1v11.4c0,0.5-0.1,0.9-0.3,1.1c-0.2,0.2-0.5,0.4-0.9,0.4c-0.4,0-0.6-0.1-0.9-0.4
                        C116.8,499.4,116.6,499.1,116.6,498.6z M111.5,494.8c0,0.7,0.1,1.3,0.3,1.8c0.2,0.5,0.5,0.9,0.9,1.1c0.4,0.3,0.8,0.4,1.2,0.4
                        c0.5,0,0.9-0.1,1.2-0.4c0.4-0.2,0.7-0.6,0.9-1.1c0.2-0.5,0.3-1.1,0.3-1.8c0-0.7-0.1-1.3-0.3-1.8c-0.2-0.5-0.5-0.9-0.9-1.1
                        c-0.4-0.3-0.8-0.4-1.3-0.4c-0.5,0-0.9,0.1-1.3,0.4c-0.4,0.3-0.7,0.7-0.9,1.2C111.6,493.5,111.5,494.1,111.5,494.8z"/>
                      <path class="st4" d="M127.2,487.2v4c0.5-0.5,1-0.9,1.5-1.2c0.5-0.3,1.1-0.4,1.9-0.4c0.9,0,1.6,0.2,2.3,0.6c0.6,0.4,1.2,1,1.5,1.8
                        c0.4,0.8,0.5,1.7,0.5,2.8c0,0.8-0.1,1.5-0.3,2.2c-0.2,0.7-0.5,1.2-0.9,1.7c-0.4,0.5-0.8,0.9-1.4,1.1c-0.5,0.3-1.1,0.4-1.8,0.4
                        c-0.4,0-0.8,0-1.1-0.1c-0.4-0.1-0.7-0.2-0.9-0.4c-0.2-0.2-0.5-0.3-0.6-0.5c-0.2-0.2-0.4-0.4-0.7-0.7v0.3c0,0.5-0.1,0.9-0.4,1.1
                        c-0.2,0.3-0.5,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4c-0.2-0.3-0.3-0.6-0.3-1.1v-11.3c0-0.5,0.1-0.9,0.3-1.2
                        c0.2-0.3,0.5-0.4,0.9-0.4c0.4,0,0.7,0.1,0.9,0.4C127.1,486.3,127.2,486.7,127.2,487.2z M127.4,494.9c0,1,0.2,1.8,0.7,2.4
                        c0.5,0.6,1.1,0.8,1.9,0.8c0.7,0,1.2-0.3,1.7-0.9c0.5-0.6,0.7-1.4,0.7-2.4c0-0.7-0.1-1.3-0.3-1.8c-0.2-0.5-0.5-0.9-0.8-1.1
                        c-0.4-0.3-0.8-0.4-1.3-0.4c-0.5,0-0.9,0.1-1.3,0.4c-0.4,0.3-0.7,0.7-0.9,1.2C127.5,493.6,127.4,494.2,127.4,494.9z"/>
                      <path class="st4" d="M138.3,500.4l0.2-0.6l-3.2-8c-0.2-0.5-0.3-0.8-0.3-1c0-0.2,0.1-0.4,0.2-0.6c0.1-0.2,0.3-0.3,0.5-0.5
                        c0.2-0.1,0.4-0.2,0.6-0.2c0.4,0,0.7,0.1,0.8,0.4c0.2,0.2,0.4,0.6,0.5,1l2.2,6.4l2.1-5.9c0.2-0.5,0.3-0.9,0.4-1.1
                        c0.1-0.3,0.3-0.5,0.4-0.5c0.1-0.1,0.4-0.1,0.6-0.1c0.2,0,0.4,0.1,0.6,0.2c0.2,0.1,0.3,0.2,0.4,0.4c0.1,0.2,0.1,0.4,0.1,0.6
                        c0,0.1-0.1,0.3-0.1,0.5c-0.1,0.2-0.1,0.4-0.2,0.7l-3.4,8.9c-0.3,0.8-0.6,1.4-0.9,1.8c-0.3,0.4-0.6,0.8-1.1,1
                        c-0.5,0.2-1.1,0.4-1.9,0.4c-0.8,0-1.3-0.1-1.7-0.2c-0.4-0.2-0.6-0.5-0.6-0.9c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.4-0.2,0.8-0.2
                        c0.1,0,0.3,0,0.4,0.1c0.2,0,0.3,0.1,0.4,0.1c0.3,0,0.5,0,0.7-0.1c0.2-0.1,0.3-0.2,0.5-0.5C138,501.2,138.1,500.8,138.3,500.4z"/>
                    </g>
                    <g>
                      <path class="st4" d="M175.9,489.8h0.6V489c0-0.8,0.1-1.5,0.3-1.9c0.2-0.5,0.6-0.8,1-1c0.5-0.2,1.2-0.3,2-0.3
                        c1.5,0,2.3,0.4,2.3,1.1c0,0.2-0.1,0.4-0.2,0.6c-0.2,0.2-0.3,0.3-0.6,0.3c-0.1,0-0.3,0-0.5-0.1c-0.2,0-0.5-0.1-0.6-0.1
                        c-0.5,0-0.8,0.1-0.9,0.4c-0.1,0.3-0.2,0.7-0.2,1.2v0.6h0.6c1,0,1.5,0.3,1.5,0.9c0,0.4-0.1,0.7-0.4,0.8c-0.3,0.1-0.6,0.2-1.1,0.2
                        h-0.6v6.9c0,0.5-0.1,0.9-0.4,1.2c-0.2,0.3-0.6,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4c-0.2-0.3-0.4-0.7-0.4-1.2v-6.9h-0.7
                        c-0.4,0-0.7-0.1-0.9-0.3c-0.2-0.2-0.3-0.4-0.3-0.7C174.6,490.1,175,489.8,175.9,489.8"/>
                      <path class="st4" d="M184.3,496.3v2.2c0,0.5-0.1,0.9-0.4,1.2c-0.2,0.3-0.6,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4
                        c-0.2-0.3-0.4-0.7-0.4-1.2v-7.2c0-1.2,0.4-1.7,1.3-1.7c0.4,0,0.7,0.1,0.9,0.4c0.2,0.3,0.3,0.7,0.3,1.2c0.3-0.5,0.6-0.9,0.9-1.2
                        c0.3-0.3,0.8-0.4,1.3-0.4c0.5,0,1.1,0.1,1.6,0.4c0.5,0.3,0.8,0.6,0.8,1.1c0,0.3-0.1,0.6-0.3,0.8c-0.2,0.2-0.5,0.3-0.7,0.3
                        c-0.1,0-0.3-0.1-0.7-0.2c-0.4-0.1-0.7-0.2-1-0.2c-0.4,0-0.7,0.1-0.9,0.3c-0.2,0.2-0.4,0.5-0.6,0.9c-0.1,0.4-0.2,0.9-0.3,1.4
                        C184.4,494.9,184.3,495.6,184.3,496.3"/>
                      <path class="st4" d="M196.3,495.4h-5.1c0,0.6,0.1,1.1,0.4,1.6c0.2,0.4,0.5,0.8,0.9,1c0.4,0.2,0.8,0.3,1.3,0.3
                        c0.3,0,0.6,0,0.8-0.1c0.3-0.1,0.5-0.2,0.7-0.3c0.2-0.2,0.5-0.3,0.7-0.5c0.2-0.2,0.5-0.4,0.8-0.7c0.1-0.1,0.3-0.2,0.6-0.2
                        c0.3,0,0.5,0.1,0.6,0.2c0.2,0.1,0.2,0.4,0.2,0.6c0,0.2-0.1,0.5-0.3,0.8c-0.2,0.3-0.5,0.6-0.8,0.9c-0.4,0.3-0.8,0.5-1.4,0.7
                        c-0.6,0.2-1.2,0.3-1.9,0.3c-1.7,0-3-0.5-3.9-1.4c-0.9-1-1.4-2.2-1.4-3.9c0-0.8,0.1-1.5,0.3-2.1c0.2-0.7,0.6-1.2,1-1.7
                        c0.4-0.5,1-0.8,1.6-1.1c0.6-0.2,1.3-0.4,2.1-0.4c1,0,1.9,0.2,2.6,0.6c0.7,0.4,1.3,1,1.6,1.7c0.4,0.7,0.5,1.4,0.5,2.1
                        c0,0.6-0.2,1.1-0.6,1.3C197.5,495.4,196.9,495.4,196.3,495.4 M191.2,494h4.7c-0.1-0.9-0.3-1.5-0.7-2c-0.4-0.4-1-0.7-1.6-0.7
                        c-0.6,0-1.2,0.2-1.6,0.7C191.5,492.4,191.3,493.1,191.2,494"/>
                      <path class="st4" d="M207.1,495.4H202c0,0.6,0.1,1.1,0.4,1.6c0.2,0.4,0.5,0.8,0.9,1c0.4,0.2,0.8,0.3,1.3,0.3c0.3,0,0.6,0,0.8-0.1
                        c0.3-0.1,0.5-0.2,0.8-0.3c0.2-0.2,0.5-0.3,0.7-0.5c0.2-0.2,0.5-0.4,0.8-0.7c0.1-0.1,0.3-0.2,0.6-0.2c0.3,0,0.5,0.1,0.7,0.2
                        c0.2,0.1,0.2,0.4,0.2,0.6c0,0.2-0.1,0.5-0.3,0.8c-0.2,0.3-0.5,0.6-0.8,0.9c-0.4,0.3-0.8,0.5-1.4,0.7c-0.6,0.2-1.2,0.3-1.9,0.3
                        c-1.7,0-3-0.5-3.9-1.4c-0.9-1-1.4-2.2-1.4-3.9c0-0.8,0.1-1.5,0.3-2.1c0.2-0.7,0.6-1.2,1-1.7c0.4-0.5,1-0.8,1.6-1.1
                        c0.6-0.2,1.4-0.4,2.1-0.4c1,0,1.9,0.2,2.6,0.6c0.7,0.4,1.3,1,1.6,1.7c0.4,0.7,0.5,1.4,0.5,2.1c0,0.6-0.2,1.1-0.6,1.3
                        C208.3,495.4,207.7,495.4,207.1,495.4 M202,494h4.7c-0.1-0.9-0.3-1.5-0.7-2c-0.4-0.4-1-0.7-1.6-0.7c-0.6,0-1.2,0.2-1.6,0.7
                        C202.3,492.4,202.1,493.1,202,494"/>
                      <path class="st4" d="M212.7,491v0.3c0.5-0.6,1-1,1.5-1.3c0.5-0.3,1.1-0.4,1.8-0.4c0.8,0,1.5,0.2,2.2,0.6c0.7,0.4,1.2,1,1.6,1.8
                        c0.4,0.8,0.6,1.7,0.6,2.8c0,0.8-0.1,1.5-0.3,2.2c-0.2,0.7-0.5,1.2-0.9,1.7c-0.4,0.5-0.9,0.8-1.4,1c-0.5,0.2-1.1,0.4-1.7,0.4
                        c-0.7,0-1.4-0.1-1.9-0.4c-0.5-0.3-1-0.7-1.4-1.3v3.9c0,1.1-0.4,1.7-1.2,1.7c-0.5,0-0.8-0.1-1-0.4c-0.2-0.3-0.2-0.7-0.2-1.3V491
                        c0-0.5,0.1-0.9,0.3-1.1c0.2-0.2,0.5-0.4,0.9-0.4c0.4,0,0.7,0.1,0.9,0.4C212.6,490.2,212.7,490.5,212.7,491 M217.8,494.8
                        c0-0.7-0.1-1.3-0.3-1.8c-0.2-0.5-0.5-0.9-0.9-1.1c-0.4-0.3-0.8-0.4-1.2-0.4c-0.7,0-1.3,0.3-1.8,0.8c-0.5,0.6-0.7,1.4-0.7,2.5
                        c0,1,0.2,1.8,0.7,2.4c0.5,0.6,1.1,0.9,1.8,0.9c0.4,0,0.8-0.1,1.2-0.4c0.4-0.3,0.7-0.6,0.9-1.1
                        C217.7,496.1,217.8,495.5,217.8,494.8"/>
                      <path class="st4" d="M223,488.3c-0.4,0-0.7-0.1-0.9-0.3c-0.3-0.2-0.4-0.5-0.4-0.9c0-0.4,0.1-0.7,0.4-0.9c0.3-0.2,0.6-0.4,0.9-0.4
                        c0.3,0,0.6,0.1,0.9,0.3c0.3,0.2,0.4,0.5,0.4,0.9c0,0.4-0.1,0.7-0.4,0.9C223.7,488.2,223.4,488.3,223,488.3 M224.3,491v7.5
                        c0,0.5-0.1,0.9-0.4,1.2c-0.3,0.3-0.6,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4c-0.2-0.3-0.4-0.7-0.4-1.2v-7.4c0-0.5,0.1-0.9,0.4-1.2
                        c0.2-0.3,0.5-0.4,0.9-0.4c0.4,0,0.7,0.1,0.9,0.4C224.2,490.2,224.3,490.5,224.3,491"/>
                      <path class="st4" d="M232.7,498.9l-2.3-3.8l-1.4,1.3v2.1c0,0.5-0.1,0.9-0.4,1.1c-0.3,0.3-0.6,0.4-0.9,0.4c-0.4,0-0.7-0.1-0.9-0.4
                        c-0.2-0.3-0.3-0.7-0.3-1.2v-11.1c0-0.6,0.1-1,0.3-1.3c0.2-0.3,0.5-0.5,1-0.5c0.4,0,0.7,0.1,0.9,0.4c0.2,0.3,0.4,0.7,0.4,1.2v6.3
                        l2.9-3.1c0.4-0.4,0.6-0.6,0.8-0.8c0.2-0.1,0.4-0.2,0.7-0.2c0.3,0,0.6,0.1,0.8,0.3c0.2,0.2,0.3,0.5,0.3,0.8c0,0.4-0.4,0.9-1.1,1.5
                        l-1.4,1.3l2.7,4.2c0.2,0.3,0.3,0.5,0.4,0.7c0.1,0.2,0.1,0.3,0.1,0.5c0,0.4-0.1,0.7-0.3,1c-0.2,0.2-0.5,0.4-0.9,0.4
                        c-0.3,0-0.6-0.1-0.7-0.3C233.2,499.7,233,499.3,232.7,498.9"/>
                      <path class="st4" d="M238.3,500.1c-0.4,0-0.7-0.1-1-0.4c-0.3-0.2-0.4-0.6-0.4-1.1c0-0.4,0.1-0.7,0.4-1c0.3-0.3,0.6-0.4,1-0.4
                        c0.4,0,0.7,0.1,1,0.4c0.3,0.3,0.4,0.6,0.4,1c0,0.5-0.1,0.8-0.4,1.1C239,500,238.7,500.1,238.3,500.1"/>
                      <path class="st4" d="M251.2,496.9c0,0.3-0.1,0.7-0.3,1c-0.2,0.4-0.5,0.7-0.9,1c-0.4,0.3-0.9,0.6-1.5,0.8c-0.6,0.2-1.3,0.3-2,0.3
                        c-1.6,0-2.9-0.5-3.8-1.4c-0.9-0.9-1.3-2.2-1.3-3.8c0-1.1,0.2-2,0.6-2.8c0.4-0.8,1-1.4,1.8-1.9c0.8-0.4,1.7-0.7,2.8-0.7
                        c0.7,0,1.3,0.1,1.9,0.3c0.6,0.2,1,0.5,1.4,0.8c0.4,0.3,0.7,0.6,0.9,1c0.2,0.4,0.3,0.7,0.3,1c0,0.3-0.1,0.6-0.3,0.8
                        c-0.2,0.2-0.5,0.3-0.8,0.3c-0.2,0-0.4-0.1-0.5-0.2c-0.1-0.1-0.3-0.3-0.5-0.5c-0.3-0.5-0.6-0.8-1-1.1c-0.3-0.2-0.8-0.4-1.3-0.4
                        c-0.8,0-1.4,0.3-1.9,0.9c-0.5,0.6-0.7,1.4-0.7,2.5c0,0.5,0.1,0.9,0.2,1.3c0.1,0.4,0.3,0.8,0.5,1c0.2,0.3,0.5,0.5,0.8,0.7
                        c0.3,0.2,0.7,0.2,1.1,0.2c0.5,0,1-0.1,1.3-0.4c0.4-0.2,0.7-0.6,1-1.1c0.2-0.3,0.3-0.5,0.5-0.7c0.2-0.2,0.4-0.2,0.7-0.2
                        c0.3,0,0.6,0.1,0.8,0.4C251.1,496.3,251.2,496.6,251.2,496.9"/>
                      <path class="st4" d="M262.4,494.8c0,0.8-0.1,1.5-0.4,2.1c-0.2,0.7-0.6,1.2-1,1.7c-0.5,0.5-1,0.8-1.6,1.1
                        c-0.6,0.2-1.3,0.4-2.1,0.4c-0.8,0-1.5-0.1-2.1-0.4c-0.6-0.2-1.2-0.6-1.6-1.1c-0.5-0.5-0.8-1-1.1-1.7c-0.2-0.6-0.4-1.4-0.4-2.1
                        c0-0.8,0.1-1.5,0.4-2.2c0.2-0.7,0.6-1.2,1-1.7c0.5-0.5,1-0.8,1.6-1.1c0.6-0.2,1.3-0.4,2.1-0.4c0.8,0,1.5,0.1,2.1,0.4
                        c0.6,0.3,1.2,0.6,1.6,1.1c0.5,0.5,0.8,1,1,1.7C262.3,493.3,262.4,494,262.4,494.8 M259.8,494.8c0-1.1-0.2-1.9-0.7-2.5
                        c-0.5-0.6-1.1-0.9-1.9-0.9c-0.5,0-1,0.1-1.3,0.4c-0.4,0.3-0.7,0.6-0.9,1.2c-0.2,0.5-0.3,1.1-0.3,1.8c0,0.7,0.1,1.3,0.3,1.8
                        c0.2,0.5,0.5,0.9,0.9,1.2c0.4,0.3,0.8,0.4,1.4,0.4c0.8,0,1.4-0.3,1.9-0.9C259.6,496.7,259.8,495.9,259.8,494.8"/>
                      <path class="st4" d="M272.3,495v3.4c0,0.5-0.1,1-0.4,1.2c-0.3,0.3-0.6,0.4-1,0.4c-0.4,0-0.7-0.1-1-0.4c-0.2-0.3-0.4-0.7-0.4-1.2
                        v-4.1c0-0.7,0-1.2-0.1-1.5c0-0.4-0.2-0.7-0.4-0.9c-0.2-0.2-0.5-0.4-0.9-0.4c-0.9,0-1.4,0.3-1.7,0.9c-0.3,0.6-0.4,1.4-0.4,2.5v3.5
                        c0,0.5-0.1,0.9-0.4,1.2c-0.2,0.3-0.6,0.4-1,0.4c-0.4,0-0.7-0.1-1-0.4c-0.3-0.3-0.4-0.7-0.4-1.2V491c0-0.5,0.1-0.9,0.3-1.1
                        c0.2-0.3,0.5-0.4,0.9-0.4c0.4,0,0.7,0.1,0.9,0.4c0.2,0.2,0.4,0.6,0.4,1v0.2c0.5-0.5,0.9-0.9,1.4-1.2c0.5-0.3,1.1-0.4,1.7-0.4
                        c0.7,0,1.2,0.1,1.7,0.4c0.5,0.3,0.9,0.7,1.2,1.2c0.4-0.5,0.9-0.9,1.4-1.2c0.5-0.3,1.1-0.4,1.7-0.4c0.7,0,1.3,0.1,1.8,0.4
                        c0.5,0.3,0.9,0.7,1.1,1.2c0.2,0.5,0.3,1.2,0.3,2.2v5.1c0,0.5-0.1,1-0.4,1.2c-0.2,0.3-0.6,0.4-1,0.4c-0.4,0-0.7-0.1-1-0.4
                        c-0.3-0.3-0.4-0.7-0.4-1.2v-4.4c0-0.6,0-1-0.1-1.3c0-0.3-0.2-0.6-0.4-0.8c-0.2-0.2-0.5-0.3-1-0.3c-0.3,0-0.7,0.1-1,0.3
                        c-0.3,0.2-0.5,0.5-0.7,0.8C272.4,493.1,272.3,493.9,272.3,495"/>
                    </g>
                    <g>
                      <path class="st4" d="M151.6,494.2C151.6,494.2,151.6,494.2,151.6,494.2C151.6,494.2,151.6,494.2,151.6,494.2z"/>
                      <path class="st4" d="M151.7,495C151.7,495,151.7,495,151.7,495c0-0.2-0.1-0.5-0.1-0.7C151.6,494.5,151.7,494.8,151.7,495z"/>
                      <path class="st4" d="M152.6,497.4C152.6,497.4,152.6,497.4,152.6,497.4C152.6,497.4,152.6,497.4,152.6,497.4z"/>
                      <path class="st4" d="M152.5,497.3c0,0,0-0.1-0.1-0.1C152.4,497.2,152.5,497.2,152.5,497.3z"/>
                      <path class="st4" d="M152,495.9c0.1,0.4,0.3,0.8,0.5,1.2C152.2,496.7,152.1,496.3,152,495.9C152,495.9,152,495.9,152,495.9z"/>
                      <path class="st4" d="M161.6,484.2c0.5,0,0.9,0,1.3,0.1l0.1-0.8c0,0-1.2-0.4-2.7-0.2l-0.1-0.4c0.5-0.1,0.8-0.5,0.8-1
                        c0-0.6-0.5-1.1-1.1-1.1c-0.6,0-1.1,0.5-1.1,1.1c0,0.5,0.4,0.9,0.8,1l0.1,0.5c-1.6,0.2-2.9,0.9-2.9,0.9l0.2,0.7
                        c1-0.3,1.8-0.5,2.6-0.6C160.6,484.3,161.2,484.2,161.6,484.2z"/>
                      <path class="st4" d="M152.6,488.1L152.6,488.1c0-0.1,0.1-0.1,0.1-0.2l-0.3-0.2l-0.5-0.4c0,0-0.8,0.7-1.4,2c0,0-0.1-0.1-0.1-0.1
                        c-0.2-0.2-0.4-0.3-0.8-0.3c0,0,0,0,0,0c-0.2,0-0.3-0.1-0.4-0.1c0.1-0.1,0.1-0.3,0.1-0.4c0-0.4-0.3-0.7-0.7-0.7
                        c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7c0.1,0,0.1,0,0.2,0c0.2,0.2,0.4,0.3,0.8,0.3c0.2,0,0.3,0,0.4,0.2
                        c0.1,0.1,0.1,0.3,0.2,0.4c0,0,0,0,0,0c-0.4,1.2-0.3,2.7-0.3,2.7l1.1,0c0-0.5,0.1-1.5,0.4-2.2C151.9,489,152.5,488.1,152.6,488.1z
                        "/>
                      <path class="st4" d="M170.8,485.1c-0.4,0-0.7,0.3-0.7,0.7c0,0.1,0,0.1,0,0.2c-0.2,0.2-0.3,0.4-0.3,0.8c0,0.2,0,0.3-0.2,0.4
                        c-0.1,0.1-0.2,0.1-0.3,0.1c-0.8-1.1-1.8-1.8-1.8-1.8l-0.8,0.8c0.6,0.5,1.2,1.2,1.7,2c0.4,0.6,0.8,1.3,1.1,2l1-0.5
                        c0,0-0.5-1.2-1.1-2.2c0.1,0,0.2-0.1,0.3-0.2c0.2-0.2,0.3-0.4,0.3-0.8c0-0.2,0.1-0.3,0.1-0.4c0.1,0.1,0.3,0.1,0.4,0.1
                        c0.4,0,0.7-0.3,0.7-0.7C171.5,485.4,171.2,485.1,170.8,485.1z"/>
                      <path class="st4" d="M168.2,494.3c-1.4,0.7-3.7,1.6-6.8,2c-1.2,0.2-2.4,0.2-3.4,0.2c-1.4,0-2.6-0.1-3.6-0.2
                        c-1.1-0.1-1.9-0.3-2.4-0.4c0.1,0.4,0.3,0.8,0.5,1.2c0,0,0,0,0,0c0,0,0,0.1,0.1,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0,0
                        c0.3,0.6,0.7,1.1,1.1,1.5c1.4,1.6,2.9,1.8,2.9,1.8l0,0l0,0c0,0,1.3,0.4,3.3,0.4c1.9,0,3.9-0.4,5.7-1.2c1.3-0.7,2.6-1.7,3.3-2.7
                        c0.5-0.7,0.8-1.5,1-2.3c0.1-0.4,0.2-1.1,0.1-1.8C169.6,493.5,169,493.9,168.2,494.3z"/>
                      <path class="st4" d="M153,488.4c0,0.1-0.7,0.9-1.1,2.3c-0.4,1-0.3,2.4-0.3,2.5v0c0,0.3,0,0.7,0.1,1c0,0,0,0,0,0c0,0,0,0.1,0,0.1
                        c0,0.2,0.1,0.5,0.1,0.7c0.7,0.2,4.9,1.2,9.5,0.5c2.9-0.4,5.1-1.3,6.5-1.9c1.1-0.5,1.8-1,2.1-1.2c-0.3-1-1-2.6-1.7-3.6
                        c-2-2.9-4.2-3.6-5.3-3.8c-0.4-0.1-0.8-0.1-1.2-0.1c-0.4,0-1,0-1.7,0.1c-0.7,0.1-1.6,0.3-2.5,0.6c-1.3,0.5-2.6,1.2-3.5,2l0,0
                        C153.6,487.7,153.3,488,153,488.4z M165.3,487.8c1,0,1.7,0.8,1.7,1.7c0,1-0.8,1.7-1.7,1.7c-1,0-1.7-0.8-1.7-1.7
                        C163.5,488.6,164.3,487.8,165.3,487.8z M157,487.7c1.6,0,2.8,1.3,2.8,2.8c0,1.6-1.3,2.8-2.8,2.8c-1.6,0-2.8-1.3-2.8-2.8
                        C154.2,489,155.5,487.7,157,487.7z"/>
                    </g>
                  </g>
                </g>
                <g id="Objects">
                  <g>
                    <ellipse class="st5" cx="158.4" cy="365" rx="376.8" ry="48.6"/>
                    <g class="st0">
                      <g class="st1">
                        <path class="st6" d="M-62.2,341.4c0,0,6.3,19.5,6.6,24.3c0.3,4.9-21.5,5.2-23.6,3.8c-2.1-1.4-7.2-24.7-5.2-25.4
                          C-82.4,343.5-62.9,339.1-62.2,341.4z"/>
                        <path class="st7" d="M-82.4,343.5c0,0,7.6,7.3,13.9,5.2c6.3-2.1,10.1-5.2,10.1-5.2s-10.1-59.7-12-85.8
                          c-1.9-26.1,4-77.8,2.3-87.5c-1.8-9.8-32,19.4-32,19.4S-89.7,323.3-82.4,343.5z"/>
                      </g>
                      <g class="st1">
                        <path class="st6" d="M-98.3,345.9c0,0-8.7,13.9-10.8,14.9c-2.1,1-16.3-1-17.7,0c-1.4,1-3.1,9.7-2.4,11.1s22.9,3.8,29.2,4.2
                          c6.3,0.3,20.1-1,24-3.5c0.7-1.7-3.5-24.3-4.9-26.7C-82.4,343.5-97.3,341.4-98.3,345.9z"/>
                        <path class="st7" d="M-126.8,160.8c0,0,1.4,87.5,5.6,105.2c4.2,17.7,15.5,62.5,16.4,66.3c0,0-0.3,4.2,0,6.3
                          c0.3,2.1,3.4,10.1,5.5,11.8s17.7,3.8,21.4-2.6c0,0-5.1-28.3-7.2-39.7c-2.1-11.5-11.5-90.7-8.7-116c0,0,19.1-12.5,24.3-16.7
                          c5.2-4.2,4.5-13.5,4.5-14.6C-65,159.7-126.8,160.8-126.8,160.8z"/>
                      </g>
                      <g class="st1">
                        <g>
                          <path class="st8" d="M-170.4-91.1c0,0-1.7-3-1.7-4.5s5.9-21.7,8.7-22.9c2.8-1.2,21.4,2.4,25.4,3.5c4,1,20.1,4.9,21,8.3
                            C-116.2-103.2-170.4-91.1-170.4-91.1z"/>
                          <g>
                            <path class="st9" d="M-117.4-109.5c0,0-2.6-9.3-5.7-10.3c-3.1-1-15.6,4.3-15.6,4.3S-120.1-110.6-117.4-109.5z"/>
                            <path class="st9" d="M-115.2-80c0,0-7.7,3.8-12.2,3.8s-7.5-3.6-10.7-3.6s-1.6-5.2,1.6-4.5s8.9,2.1,11,1.1c2.1-1,8-19,7.6-22.5
                              c-0.3-3.5-21.5-6.9-24.7-9s0.3-5.2,0.3-5.2s11.5,3.5,14.6,3.8c3.1,0.3,10.8,0.3,13.5,3.8c2.8,3.5,5.6,21.2,5.6,21.2
                              s26.9,21.9,30.1,27.8c3.2,5.9-8.2,10.6-8.2,10.6S-112.6-81.7-115.2-80z"/>
                          </g>
                          <g>
                            <path class="st6" d="M-140.3-113.8c-16.4-3.8-21.1-3.9-22.2-2c-1,1.9-9.4,23.3-8,24.7c1.4,1.4,38.7,8,43.7,8.2
                              s9.9-21.7,9.6-23.8C-117.4-108.8-137.1-113-140.3-113.8z"/>
                            <path class="st8" d="M-141.1-110.7c-12.8-2.9-16.4-3-17.2-1.5c-0.8,1.5-7.3,18-6.2,19.1c1.1,1.1,25,4.4,28.9,4.6
                              c3.9,0.1,7.7-16.8,7.4-18.4C-128.4-108.5-138.6-110.1-141.1-110.7z"/>
                            <circle class="st10" cx="-124.7" cy="-96.3" r="2.6"/>
                          </g>
                          <g>
                            <path class="st6" d="M-151-140.5c-0.4-1.3-2.3-0.8-2.2,0.5c0.2,3-0.3,6,0,9c0.1,1.3,2.1,1.4,2.3,0.1
                              C-150.5-134.1-150-137.5-151-140.5z"/>
                            <path class="st6" d="M-163.3-129.9c-0.7-2.3-1.2-4.8-2.5-6.9c-0.7-1.1-2.4-0.2-1.9,1c0.8,2.3,1.3,4.7,2.4,6.9
                              C-164.7-127.6-162.9-128.7-163.3-129.9z"/>
                            <path class="st6" d="M-171.3-123.1c-2.5-1.8-5.7-3-8.6-4.1c-1.4-0.5-2.2,1.3-1,2c2.6,1.7,5.6,3.3,8.6,4.2
                              C-171.1-120.6-170.3-122.4-171.3-123.1z"/>
                            <path class="st6" d="M-177.5-114c-1.3-0.3-2.8-0.4-4.1-0.6c-1.5-0.2-3-0.4-4.5-0.4c-1.4,0-1.3,2-0.1,2.3
                              c2.6,0.7,5.9,1.6,8.6,1C-176.3-111.9-176.2-113.6-177.5-114z"/>
                          </g>
                        </g>
                        <path class="st11" d="M-93.1-55.4c0,0,4.9-13,14.9-13c0,0,9.5,14.6,11.6,19.4c0,0-10.1,12.4-15.5,11.6
                          C-82.1-37.5-91-50.8-93.1-55.4z"/>
                        <path class="st12" d="M-68.5-48.9c0,0,13.9,28.1,19.6,39.4s11,44.1,12,54.9s-17.6,4.4-16.9,0s-13.4-61.1-26.2-84.2
                          C-79.9-38.8-74-50.6-68.5-48.9z"/>
                      </g>
                      <g class="st1">
                        <path class="st9" d="M-61.3,19.6c0,0-3.1,11.7-2.6,13.5s14.6,5.2,15.1,3.7s1.8-10.2,2.9-13s-3-12-5.7-12.7S-61.3,19.6-61.3,19.6
                          z"/>
                        <path class="st13" d="M-60.3,166.1c0,0-0.7-30.2,7.2-57.1s23.8-57.9,16.5-70.4c0,0-6-1.6-13.5,0c-7.6,1.6-21.4,1-21.4,1
                          s-13.5,0.9-16.9,1.7s-25.5,18.5-39.1,20.8c-13.5,2.3-24-6.1-26.8-11.3c-2.9-5.2-15.9-4.6-16.4,0.2s3.9,18.1,20.1,26.4
                          s42.5,2.3,42.5,2.3s-26.8,44.3-21.9,90.4C-130.1,170.3-93.1,179.3-60.3,166.1z"/>
                        <path class="st11" d="M-76.6,39.8c0,0,2.1-7.3,3.1-7.8c1-0.5,24,2.6,30.7,0c0,0,0.8,3.9,0,7C-42.8,39-50.8,46.1-76.6,39.8z"/>
                      </g>
                      <g class="st1">
                        <path class="st9" d="M-176.2,27.4c0,0,3.6-22.7,9.2-33.9c0,0-2.5-19.7,0-22.1s7.4-1.1,8-0.3c0,0,1.6-23.2,3.4-23.7
                          c1.8-0.5,5.7,0.8,4.9,5.7s-0.3,18.2,0.1,19.3c0.4,1,8-21.6,10.1-22.1c2.1-0.5,5.7,1.8,4.7,4.4s-7,19.8-7,22.4s1,5.7,2.1,6.5
                          c1,0.8,5.7-0.5,6.3,1c0.5,1.6-1.6,5.2-8.6,7.8s-12.2,4.2-12.2,4.2s-7.6,21.4-6,32.6C-159.8,40.4-173.6,27.6-176.2,27.4z"/>
                        <path class="st11" d="M-163.2,53.7c-6.3,1.8-9.4,2.9-12.2,2.9s-6-26.3-5.7-30.2s17.7-1,20.6,0c2.9,1,5.2,17.7,7.8,22.1
                          C-152.8,48.5-156.9,51.9-163.2,53.7z"/>
                      </g>
                      <g class="st1">
                        <path class="st14" d="M-73.2,11.7c0,0,0.6-9.1,6.1-11.6s8.8,0,8.8,0S-67.6,13.1-73.2,11.7z"/>
                        <path class="st9" d="M-51.5-46.3c0,0-13.8,20.6-16,24.5c-2.2,3.9-3.9,0.8-4.7,0c-0.8-0.8-8,1.4-5.8,4.4c2.2,3,6.9,6.1,6.9,6.1
                          s-3.6,5.8-4.1,7.2c0,0,13.5,0.8,17.6,0c0,0-7.4,15.1-20.8,13.2c0,0-3.2,8.3-2.3,9.6c0.8,1.4,18.4,4.4,22.3,1.9S-49,7.6-42.7-2.3
                          s13.5-8.8,11.8-19.3C-32.5-32-43.5-52.9-51.5-46.3z"/>
                        <path class="st15" d="M-40.5-36.7c0,0-14.2,0.5-15.2-10.9s4.2-22.7,9.2-22.9c5-0.3,20.2,7.2,9.9,15.1c0,0,14-5.8,21.5-3.3
                          c7.4,2.5,16,10.5,2.8,15.1c0,0,25.3,10.2,18.4,25.6c0,0,10.7,3.9,9.4,8.8s-8.3,0-8.3,0S12.6,2.4,8.2,5.1s-5,0-5,0
                          s1.7,11-9.9,16.3s-16.2,4-16.2,4s0.6,11.8-6.3,11.3c-6.9-0.6-11-11.6-11-11.6s0.6,4.1-5.2,3.6s-6-13-6.2-16.7s8.1-16.1,8.1-16.1
                          s2.8-12.9,8.5-12.9C-35-16.9-52.6-25.4-40.5-36.7z"/>
                        <path class="st9" d="M-48.2-16.9c2.7-0.8,9.9,10.4,7.2,16.8C-43.8,6.2-50.4,12-52.8,9c-2.5-3,0.6-5.5,3.3-9.4
                          S-51.7-15.8-48.2-16.9z"/>
                        <g>
                          <path class="st16" d="M-53.8-34.2c0,0,5.9,3,5,9.6c0,0-2.1-7.7-7.1-7.7L-53.8-34.2z"/>
                          
                            <ellipse transform="matrix(0.405 -0.9143 0.9143 0.405 -16.1514 -67.921)" class="st17" cx="-60.3" cy="-21.6" rx="3" ry="1.9"/>
                        </g>
                      </g>
                    </g>
                    <g>
                      <path class="st18" d="M166.2,196.3c0,0,2.2,152.2,2.9,157.2s-10.2,8.6-12.1,0c-1.9-8.6-3.2-157.2-3.2-157.2H166.2z"/>
                      <g>
                        <path class="st19" d="M45.7,256.8c0,0-2.5,88.7,0,91.4h10.8c0,0,0-87,0-91.4S45.8,253.1,45.7,256.8z"/>
                        <path class="st19" d="M110.8,255.2c0,0,1.1,92.3,3.6,92.9c2.4,0.6,10.4,0,10.4,0s1.6-82.4,0-90.2
                          C123.2,250.2,110.8,255.2,110.8,255.2z"/>
                        <path class="st19" d="M133.6,242.4l-4,16.7l-87.4-1.2l-0.3-21.6C41.9,236.4,111.3,235.6,133.6,242.4z"/>
                      </g>
                      <path class="st6" d="M66,139.1c0,0-7.4,11.4-7.7,15C58.3,154.1,65,143.9,66,139.1z"/>
                      <g>
                        <g>
                          <g>
                            <path class="st20" d="M125.1,331.3c0,0-7.6,12.3-8.9,15.9s2.5,13.2,4.4,13.7s15.5,3,16.5,5.5c1,2.5,0,6.8,0,6.8
                              s-16.5,1.8-25.4,0S96,344.8,97.4,334.8c0,0,12.2-9.1,14.4-11.1C114,321.7,125.1,331.3,125.1,331.3z"/>
                            <path class="st21" d="M126.8,217.6c0,0,74.4-8.9,80-4.9s7.6,12.6,2.5,19.7c-5,7.1-76.6,94.5-80.7,98.9c-4,4.4-18.8-2.6-21-8.7
                              c0,0,66.4-80.2,68.9-86.7c0,0-61.9-0.2-68.9-9.1c-7-8.9-17.3-11.1-11.8-14.1C101.4,209.7,126.8,217.6,126.8,217.6z"/>
                          </g>
                          <g>
                            <path class="st20" d="M178.5,360.5c0,0,3,12.1,5.5,14.1c2.5,2,24.2-3,26.2,0c2,3,1.9,13.6,1.9,13.6s-39.7,4.5-45.2,0
                              c0,0-10.3,2.5-13.7-0.5c0,0,2.1-26.7,5.1-30.2C161.4,353.9,178.5,360.5,178.5,360.5z"/>
                            <path class="st22" d="M95.8,212.7c0,0,8.7,11.1,16,11.6c7.2,0.5,77.8-1,83.9,6.1c6.1,7.1-15.1,117.9-12.6,132.8
                              c0,0-26.7,0.7-30.3,0c0,0,22.2-105.1,19.7-110.1c-2.5-5-101.6-10.1-107.1-15.7s-6.1-15.6-4.5-21.2
                              C62.3,210.7,95.8,212.7,95.8,212.7z"/>
                          </g>
                        </g>
                        <g>
                          <path class="st23" d="M79.9,68.5c0,0-9.2-10.8-10.8-16.8S67.5,25,67.5,25s-3.8,0-4.8-1.9s2.9-6.3,4.8-5.5c0,0-4.1-4.6-1.6-7.8
                            s8.9,4.1,8.9,4.1s14.9-14,39.7-8.6c0,0,7.9-11,12.4-1.2c0,0,9.8-8.6,14.6,3.1c4.8,11.7-3.1,19-3.1,19s5.9,23.3-2.2,30
                            C128.1,63.1,91.6,71,79.9,68.5z"/>
                          <path class="st9" d="M87.8,45c0,0,7.9,46.3,9.2,48.5c1.3,2.2,16.2,11.1,27.9,9.2s14-6,13.3-20c-0.6-14-4.4-52.4-5.4-54
                            c0,0-5.1,3.1-7.6,2.6s-21.6-0.5-23.8,0C99.2,32,87.8,45,87.8,45z"/>
                          <path class="st9" d="M96.7,70c0,0-7-9.5-13-8.3S78.3,73.5,80.2,77C82.1,80.5,96.4,88.8,96.7,70z"/>
                          <g>
                            <path class="st24" d="M122.7,61.7c0,0-0.2,6.6,1,6.5c1.1-0.2,6.5-0.3,7.5,0.8c1,1.1,0.8,6.2,0,6.7c-0.8,0.5-5.7,1.4-8.4,1
                              c0,0,7.5-1.4,7.6-2.2c0.2-0.8,0.2-5.2-0.6-5.2c-0.8,0.1-5.9,0.9-7,0C121.6,68.3,122.4,62.8,122.7,61.7z"/>
                            <path class="st25" d="M108.1,83.1c0,0,13,4.8,23,1.1C131.1,84.2,117.5,91.1,108.1,83.1z"/>
                            
                              <ellipse transform="matrix(0.9943 -0.1064 0.1064 0.9943 -6.0188 11.9383)" class="st17" cx="108.8" cy="62.4" rx="1.9" ry="3.1"/>
                            
                              <ellipse transform="matrix(0.9943 -0.1064 0.1064 0.9943 -5.574 14.1606)" class="st17" cx="129.9" cy="59.3" rx="1.9" ry="3.1"/>
                            <path class="st23" d="M111.7,42.4c0.6-0.1-8.3-2.4-11.6,5.2C100.2,47.7,109,42.9,111.7,42.4z"/>
                            <path class="st23" d="M123,40.2c-0.5,0,5.9-3.5,8.7,3.2C131.8,43.4,128.6,40.2,123,40.2z"/>
                          </g>
                        </g>
                        <g>
                          <path class="st9" d="M127.3,141.6c0,0,9.3,27.7,13.6,36.1c4.3,8.4-10.6,7.8-10.6,7.8s-13.4-29.8-14.2-37.5
                            C115.2,140.3,123.7,131.2,127.3,141.6z"/>
                          <g>
                            <path class="st26" d="M76,109.2c2.6,5,14.3,15.7,21.7,14.8c7.4-1,17.4-5.7,8.2-18.6c-3.4-0.9-7-1.7-10.5-2.4
                              c-6.3-1.2-13.2-1.2-19.5-0.6C75.4,102.8,73.7,104.8,76,109.2z"/>
                            <path class="st27" d="M121.4,111c-1.1-1.3-7.7-3.6-15.6-5.6c9.2,12.9-0.8,17.6-8.2,18.6c-7.4,1-19-9.8-21.7-14.8
                              c-2.3-4.3-0.6-6.3-0.1-6.8c-11.2,1-20.3,3.6-20.3,3.6c-3.2,2.3-18.6,37.3-17.2,38.9c2.7,3.3,20,9.2,20,9.2s-6.2,19.9-4.4,31.3
                              c0.7,4.7,4.4,40.6,4.4,40.6c19-16.2,59.8-9.2,59.8-9.2s-8.2-17.9-9.2-24.5c-1.1-6.7,9.4-46.3,9.4-46.3s12.1,1.3,12.1-2.2
                              C130.3,140.2,123,112.9,121.4,111z"/>
                          </g>
                          <path class="st9" d="M110.6,97c0,0-5.9,6.7-7.9,10.8c0,0,7.2,8.6-3.2,10.8S78.6,106.7,80.2,103c0,0,8.9-0.6,11.4-1.9
                            c2.5-1.3,3.7-14.6,3.7-14.6S105.9,81.5,110.6,97z"/>
                          <g>
                            <path class="st9" d="M55.9,153.3c0,0-6.2,18.9-5.3,21.5c1,2.5,37.4,5.4,43.2,5.1c5.7-0.3,4.8,9.2-1.3,10.5s-55.5,2.5-59.7-1
                              s5.5-40.1,6.8-43.3C45.8,149,47.6,149.7,55.9,153.3z"/>
                            <path class="st9" d="M105.9,175.8c0,0,5.1-6.7,7.2-8.5c2-1.7,5.2-1.9,5.2-1.9s3.8,2.2,4.4,4.1c0.6,1.9,3.3,7.7,0,8.9
                              c-3.3,1.2-7.6-5.3-7.6-5.3s-3.1,1.7-4.1,3.3C110,178.1,105.9,175.8,105.9,175.8z"/>
                            <path class="st9" d="M92.3,182.8c0,0,15.4-6.6,19.6-5.1s9,2.2,11.7,2.5c2.6,0.2,4.4,3,4.9,2.7
                              C129,182.4,97.5,187.9,92.3,182.8z"/>
                            <path class="st9" d="M93.8,179.8c0.9,0,8.1-1.7,10.3-3s7.4-6.1,8.9-5.6c1.4,0.5,2.7,2.9,3,6.8c0.3,4-1.6,6.3-4.3,5.4
                              c-2.7-1-2.2-4.1-2.2-4.1s-9.4,4.9-12.5,4.3C93.8,183.2,93.8,179.8,93.8,179.8z"/>
                          </g>
                        </g>
                      </g>
                      <g>
                        <path class="st28" d="M82.9,191.6c0,0-0.3-3.7,0-4.8c0.3-1.1,3.6-3.8,3.6-3.8s43.8-1.7,50.3-2.1c0,0,17.9-53,20.8-55.9
                          c0,0,60.9,2.4,72.4,4.8l-16.7,53.9v7.9c0,0-74.4,1.3-79.8,0H82.9z"/>
                        <path class="st6" d="M157.6,125.1c0,0,5.5,0.2,5.7,2.1s-18.1,53.2-19.3,54c-1.2,0.8-7.2-0.2-7.2-0.2S155,128.2,157.6,125.1z"/>
                        <g>
                          <path class="st6" d="M213.7,115.8c-0.4-1.9-0.7-3.9-1.8-5.6c-0.6-1-2.3-0.4-2.1,0.8c0.3,2,0.9,4.1,1.9,5.9
                            C212.4,118.1,214,117,213.7,115.8z"/>
                          <path class="st6" d="M226.9,110.3c-0.5,1.8-0.8,3.8-1.1,5.7c-0.2,1.5,2,1.9,2.3,0.4c0.4-1.9,0.8-3.8,0.9-5.7
                            C229.1,109.3,227.3,108.9,226.9,110.3z"/>
                          <path class="st6" d="M244.5,119.1c-0.9,0.4-1.7,1.1-2.5,1.7c-0.8,0.6-1.7,1.1-2.5,1.7c-1.1,0.8-0.2,2.6,1.1,2.1
                            c1-0.3,1.9-0.9,2.7-1.4c0.9-0.7,2.1-1.5,2.6-2.5C246.4,119.8,245.5,118.6,244.5,119.1z"/>
                          <path class="st6" d="M248.7,137.3c-1.2-1.1-3.5-2-5.2-1.7c-1.4,0.2-1.5,2.1-0.1,2.5c0.7,0.2,1.4,0.3,2.1,0.5
                            c0.8,0.3,1.5,0.6,2.3,0.7C248.9,139.5,249.5,138.1,248.7,137.3z"/>
                        </g>
                      </g>
                      <g>
                        <path class="st18" d="M259.8,200.5c0,0,2.2,172.1,2.9,177.8s-10.2,9.7-12.1,0c-1.9-9.7-3.2-177.8-3.2-177.8H259.8z"/>
                        <polygon class="st18" points="8.8,194.1 74.8,190.3 74.8,210.8 8.8,210.8         "/>
                        <polygon class="st18" points="269,190.3 74.8,190.3 74.8,210.8 269,206.2         "/>
                        <path class="st18" d="M21.8,206c0,0-10.9,161.9-10.9,167.6c0,0-8.8,8.4-10.7,0S9.1,206,9.1,206H21.8z"/>
                        <path class="st18" d="M74.8,210.8c0,0-11.1,170.6-10,174.4c1.1,3.8,9.8,5.9,11.5,2.1c1.6-3.8,11.5-177.5,11.5-177.5L74.8,210.8z
                          "/>
                      </g>
                    </g>
                    <g class="st0">
                      <g class="st1">
                        <path class="st29" d="M368,15.5c0,0-4.7,12.6-12.8,19s-46.7,60,5.2,89.3c0,0-8.3-10.5-2.9-23.8c0,0,2.1,7.4,8.6,10.5
                          c0,0-8.4-21.9-7.1-39.3c1.4-17.4,14.5-41.4,15.8-52.7S369.8,14.6,368,15.5z"/>
                        <path class="st13" d="M368,2.5c0,0-2,10.8-1.8,13.9s3.3,6.8,7.1,6c3.8-0.9,5.3-12.9,6-15.7S370.3,0.2,368,2.5z"/>
                      </g>
                      <g class="st1">
                        <path class="st30" d="M474.5,346.6c0,0,9,7,12.4,6.9c3.3-0.2,16.2-13.5,21.9-11.1s10,9.2,9,15.1c0,0-24.8,13-34.3,14.9
                          c-9.5,1.9-19.5,2.9-21.4,0c-1.9-2.9-5.6-14.4-2.8-20.5C462.1,345.6,474.5,346.6,474.5,346.6z"/>
                        <path class="st30" d="M325,342c0,0,2.4,22,6.2,24.2c0,0,16.7,3,19,7.8c2.4,4.9,0,9.1,0,9.1s-21.9,5.2-29.5,0
                          c-7.6-5.2-22.2-25.3-23-29.8c-0.8-4.4,12-17.2,12-17.2L325,342z"/>
                        <path class="st31" d="M438.3,135.1c0,0,20.9,59.1,26.7,89.1s10,117.1,11.9,122.3c0,0-6.2,11.9-19.3,4.3c0,0-7.9-77.3-13.1-96
                          s-32.3-73.2-36.6-79.2c0,0-16.8,57.2-23.9,75.2c-7.1,18.1-48.6,90.4-59,95.7c0,0-11.9,4.1-17.1-7.2c0,0,40.9-66.5,46.7-87
                          c5.7-20.5,10.5-101.5,20.2-118.4S423.6,124.1,438.3,135.1z"/>
                      </g>
                      <g class="st1">
                        <g>
                          <path class="st9" d="M508,70c0,0-0.6-10.8,1-16.5c1.6-5.7,6.7-6.6,11.2-2.8c0,0,13.8-14.7,17-15c3.2-0.3,4.5,1.3,1.3,4.8
                            c-3.2,3.5-10.5,14-10.5,14s5.4-1.2,7,1.4c1.6,2.5,0,6.4,0,6.4s4.4,3.5,0.3,7.8S520,80.8,518.1,80.1C516.2,79.4,508,70,508,70z"
                            />
                          <path class="st32" d="M417,30.5c0,0,7.3,2.1,12.1,9.8s18.7,39.7,37.7,42.6c19,2.9,35.9-14,40-14.8c4-0.7,15.2,9,14,15.1
                            c-1.2,6.1-37.4,23-54.7,22c-17.4-1-30.9-18.6-34.3-22.6C428.6,78.6,415.5,42.2,417,30.5z"/>
                        </g>
                        <path class="st33" d="M355.1,88.3c0,0-15,39-40.4,53.6c0,0-7.5-0.6-9.3-3.2c0,0,26.1-11.6,39.2-40.5S355.1,88.3,355.1,88.3z"/>
                        <path class="st32" d="M401.6,29.5c0,0,13.5-2.5,15.7,3.2s6,21.7,9.1,24.8c3.1,3.1,14.3,18.4,5.2,29.6c0,0,8.6,24.2,9.8,51.7
                          c0,0-38.9,14.8-71.5-1.4c0,0,12.3-31.1,13.2-37.4c1.7-11.4-9.8-35.7-9.8-35.7s-18.4,32.5-31.9,41.7s-39,12.4-43.1-5.2
                          c-4-17.6,13.3-13.1,13.3-13.1s16.4,2.4,24.3-3.3c7.9-5.7,23.8-44.5,29.3-49.5C370.7,29.8,394.8,29.7,401.6,29.5z"/>
                        <g>
                          <path class="st33" d="M303,140.3c0,0-22.2,18.7-26,24.4c-3.8,5.7,31.1,31.1,36.2,30.5c5.1-0.6,31.5-27.2,31-30.5
                            C343.6,161.4,309.4,139.2,303,140.3z"/>
                          <path class="st33" d="M373.3,31.7c0,0,8.3,17.9,6,40.3s-23.8,75-37.6,87.5l3.8,5.4c0,0,58.9-84.8,31.6-133.1H373.3z"/>
                          <path class="st34" d="M346.3,163.5c0,0-7.9-6.1-16.9-12.4s-21.4-15.6-25.5-14.6c-4.1,1-13.7,10.1-13.7,13.5
                            c0,3.4,15.9,19.9,21.9,20.5c0,0,15.3-4.5,24.8-5.7C346.3,163.5,344.3,166.6,346.3,163.5z"/>
                        </g>
                        <path class="st9" d="M402.9,24.3c0,0,1.6,6.6,3.8,6.9c0,0,2.2,4.8-1.9,6.4s-14.4-5.4-14-6.7c0.3-1.2,1.3-5.4,0.8-7.9
                          C391,20.5,399.4,19.8,402.9,24.3z"/>
                      </g>
                      <g class="st1">
                        <path class="st29" d="M391.2-62.2c9.5-4.4,28.3,6.3,31.9,15.6s5.5,23-0.8,29.4C416-10.7,376.1,10,376.1,10S359.9-1.2,356.7-8.8
                          c-3.2-7.6-4.8-24.1,2.5-37.1C366.4-59,380.7-64.4,391.2-62.2z"/>
                        <path class="st9" d="M421.3-25c0,0,4,27.1,0,36.8c-6,14.6-24.5,13.3-32.6,10.5C375.3,17.5,369.3-6,368-13
                          c0,0,22.2-9.2,24.4-36.2C392.5-49.1,410.9-23.8,421.3-25z"/>
                        <g>
                          <path class="st24" d="M401.7-23.4c0,0-0.6,8.3,1.9,9.8s7-3.1,8.4-1.1s1.3,4.6-1.9,5.9c0,0,7.3-1.6,2.8-7.3
                            c-2.8-3.5-7,2.7-8.2,1.3S401.7-21.4,401.7-23.4z"/>
                          <g>
                            <path class="st35" d="M407.2,15.5c-1.3,1.1-2.7,1.8-4.3,1.9c-6.6,0.7-13.2-8.8-16.3-15C392,2.7,403.6,4.3,407.2,15.5z"/>
                            <path class="st36" d="M384.9-2.5c1-0.6,31.7-2.2,31.7-2.2s-2.9,14.8-9.4,20.3c-3.6-11.2-15.2-12.9-20.6-13
                              C385.3-0.2,384.6-2.3,384.9-2.5z"/>
                          </g>
                          <path class="st17" d="M394.5-17.1c0,0-3-4.8-6.8-4c-3.8,0.8-6,3.8-5.6,6.3C382.2-14.7,386.4-22.3,394.5-17.1z"/>
                          <path class="st17" d="M417.3-20c0,0-2.6-4.1-5.8-3.4c-3.3,0.7-5.2,3.3-4.8,5.4C406.7-17.9,410.4-24.5,417.3-20z"/>
                          <path class="st37" d="M391.5-33.6c0,0-10.4,2.9-12.2,6C379.3-27.6,379.3-36.5,391.5-33.6z"/>
                          <path class="st37" d="M405-33.8c0,0,7-5.3,11.6,4.3C416.6-29.5,410.8-34.2,405-33.8z"/>
                        </g>
                        <path class="st9" d="M369.1-12.6c0,0-6-5.3-8.9-2c-2.8,3.4,0.4,12.2,4.4,13.7s6.6,3.2,8.3,0S369.1-12.6,369.1-12.6z"/>
                        <path class="st9" d="M421.9-20.7c0,0,2.1-4.5,3-0.5s1.7,14.8-1.8,15.5C419.5-5,421.9-20.7,421.9-20.7z"/>
                      </g>
                      <g class="st1">
                        <path class="st38" d="M364.1-10.4c1.6-2.4,7.7,2.9,6.6,5.7s-4.8,3.8-6.6,1C361.7-7.4,363.1-9,364.1-10.4z"/>
                        <path class="st38" d="M425.4-17.9c0,0,2.3-0.8,2.5,3.2c0.2,4-4.5,4.8-4.5,4.8S421.2-15.9,425.4-17.9z"/>
                        <path class="st38" d="M366.2-2.5c0,0,4.4,29.9,34.5,41.8c0,0,0,35-6.2,55.9c-6.2,20.9-20,37.1-37.8,34.3
                          c-17.9-2.9-28.3-19.3-28.3-19.3v-6.2H325v6c0,0,9,20.5,31.2,23.6s35.2-14.3,42.6-37.4c7.4-23.1,6.2-56.4,6.2-56.4
                          s32.2-15.9,22.3-52.1c0,0-2.4-2-1.8,1.6s6.6,31.7-21.7,47.2c0,0-25-7-35.1-39C368.7-2.5,366.5-7.7,366.2-2.5z"/>
                        <g>
                          <g>
                            <path class="st39" d="M323.6,101.9c1.3-3.3-2.5-35.9-3.8-41.4c-0.8-3.4-3.3-4.9-5.1-5.5c2.4-0.3,4.2-0.5,4.8-0.4
                              c1.9,0.3,4.1,1.3,5.6,5.9s6.7,42.2,3.3,43.5c-1.2,0.5-4.9,1.1-9.2,1.5C320.8,104.9,322.9,103.7,323.6,101.9z"/>
                            <path class="st38" d="M294.6,58.1c4.5-0.7,14.2-2.3,20.1-3.1c1.8,0.6,4.3,2.1,5.1,5.5c1.3,5.5,5.1,38.1,3.8,41.4
                              c-0.7,1.8-2.8,3-4.4,3.7c-7.3,0.8-16.4,1.2-18.6,0.3C296.9,104.5,290.3,58.8,294.6,58.1z"/>
                          </g>
                          <path class="st6" d="M296.4,62.8c0.1,1.4,1.3,2.4,2.7,2.3l4-0.3c1.4-0.1,2.4-1.3,2.3-2.7l0,0c-0.1-1.4-1.3-2.4-2.7-2.3l-4,0.3
                            C297.3,60.2,296.2,61.4,296.4,62.8L296.4,62.8z"/>
                          <path class="st6" d="M323.5,39.7c-0.1-1.2-1.9-1.6-2.3-0.4c-0.9,2.4-1.5,5.4-1.5,8c0,1.5,2.1,1.3,2.4,0.1
                            C322.9,45.1,323.7,42.2,323.5,39.7z"/>
                          <path class="st6" d="M306.7,38.8c-0.4-1.3-2.3-0.8-2.2,0.5c0,2.1,0.5,4.4,1.4,6.3c0.5,1.1,2.5,0.9,2.3-0.5
                            C307.7,43,307.4,40.8,306.7,38.8z"/>
                          <path class="st6" d="M296.6,49.2c-1.1-1.6-2.1-3.5-3.4-5c-0.8-1-2.6-0.2-2,1c0.8,2,2.2,3.9,3.6,5.5
                            C295.8,51.8,297.3,50.3,296.6,49.2z"/>
                          <path class="st6" d="M286.1,58.3c-1.3-0.9-2.7-2-4.3-2.5c-0.5-0.2-1.1-0.1-1.4,0.3c-0.4,0.5-0.4,1.3,0.1,1.7
                            c1.3,1,2.7,2,4.3,2.5c0.5,0.2,1.1,0.1,1.5-0.3C286.6,59.5,286.6,58.6,286.1,58.3z"/>
                        </g>
                        <path class="st9" d="M293.2,64.3c0,0-0.6,6,2.1,7.1c2.6,1.2,3.1,2.6,8.8,1.4c5.7-1.2,12.1,0.7,12.9,2.6s-3.3,5.2-7.4,5.2
                          c-4,0-9.3,0.7-9.3,2.4s3.9,2.1,8.3,1.4c4.3-0.7,10.5-0.9,11.7,2.4c1.2,3.3-2.9,4.7-6.7,5.2c-3.8,0.5-9.8,0.7-10.5,1.7
                          s3.8,2.4,6.7,1.9c2.9-0.5,8.1,0,8.3,2.4c0.2,2.4-7.9,3.6-12.6,3.6c-4.8,0-8.3-1.7-10.2-3.6c-1.9-1.9-5.2-15.9-5-22.4
                          C290.5,69.3,293.2,64.3,293.2,64.3z"/>
                      </g>
                    </g>
                  </g>
                </g>
                </svg>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="tcont">
                <h3 class="animated br i-title">Evaluating</h3>
                <p class="animated br s2">New products and services become popular targeting specific networks and regions</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>
    <section class="sect-hiw">
      <div class="container">
        <h2 class="h-title">How Alpharanks works?</h2>
        <img src="images/alpharanks_works_bound.svg" alt="">
      </div>
    </section>
    <section class="sect-networks">
      <div class="container">
        <h2 class="reveal">Why do <i class="it">human</i> networks matter?</h2>
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="net-blocks reveal">
              <div class="icon-container">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <g>
                    <g>
                      <path style="fill:#FFB980;" d="M126.782,306.207c-18.452,0-35.193-7.918-47.545-20.715c-0.009,7.669-0.288,18.74-2.321,26.816
                        c1.334,0.815,2.369,2.154,2.571,3.819c2.636,21.45,22.967,37.623,47.295,37.623c24.324,0,44.654-16.175,47.295-37.623
                        c0.205-1.668,1.218-3.004,2.572-3.817c-2.034-8.078-2.313-19.149-2.322-26.819C161.975,298.289,145.233,306.207,126.782,306.207z
                        "/>
                    </g>
                    <g>
                      <path style="fill:#F8AB6B;" d="M173.295,286.467c-12.248,12.2-28.554,19.741-46.513,19.741c-18.452,0-35.193-7.918-47.545-20.715
                        c-0.009,7.669-0.288,18.74-2.321,26.816c1.334,0.815,2.369,2.154,2.571,3.819c1.165,9.481,5.796,17.923,12.693,24.402
                        C123.986,336.05,160.086,304.643,173.295,286.467z"/>
                    </g>
                    <g>
                      <path style="fill:#00E68C;" d="M223.199,318.013c-0.212-0.059-0.423-0.106-0.64-0.137l-42.168-6.327
                        c-0.258-0.039-0.81-0.059-1.073-0.059c-2.667,0-4.916,1.989-5.241,4.638c-2.641,21.448-22.972,37.623-47.295,37.623
                        c-24.329,0-44.659-16.173-47.295-37.623c-0.33-2.726-2.786-4.777-5.375-4.635c-0.31-0.018-0.614,0.008-0.939,0.057l-42.168,6.327
                        c-0.217,0.031-0.428,0.077-0.64,0.137C10.431,323.595,0,343.209,0,359.699v20.465c0,8.713,7.759,15.801,17.297,15.801h218.969
                        c9.539,0,17.297-7.088,17.297-15.801v-20.465C253.563,343.209,243.132,323.595,223.199,318.013z"/>
                    </g>
                    <g>
                      <path style="fill:#FDC88E;" d="M174.325,174.143H84.521c-14.563,0-26.413,11.85-26.413,26.413v31.695
                        c0,40.78,30.808,73.956,68.673,73.956s68.673-33.176,68.673-73.956v-36.978C195.455,183.623,185.978,174.143,174.325,174.143z"/>
                    </g>
                    <g>
                      <path style="fill:#5C546A;" d="M163.76,116.035H95.086c-9.936,0-18.288,6.892-20.537,16.144
                        c-18.185,2.311-32.289,17.88-32.289,36.681v26.413c0,13.614,5.779,26.314,15.848,35.34v-30.058
                        c0-14.563,11.85-26.413,26.413-26.413h89.804c11.654,0,21.13,9.479,21.13,21.13v35.335c10.071-9.024,15.848-21.724,15.848-35.335
                        v-31.695C211.303,137.364,189.976,116.035,163.76,116.035z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path style="fill:#FFB980;" d="M385.218,306.207c-18.452,0-35.193-7.918-47.545-20.715c-0.009,7.669-0.288,18.74-2.321,26.816
                        c1.334,0.815,2.369,2.154,2.571,3.819c2.636,21.45,22.967,37.623,47.295,37.623c24.324,0,44.654-16.175,47.295-37.623
                        c0.205-1.668,1.218-3.004,2.572-3.817c-2.034-8.078-2.313-19.149-2.322-26.819C420.411,298.289,403.67,306.207,385.218,306.207z"
                        />
                    </g>
                    <g>
                      <path style="fill:#F8AB6B;" d="M431.731,286.467c-12.248,12.2-28.554,19.741-46.513,19.741c-18.452,0-35.193-7.918-47.545-20.715
                        c-0.009,7.669-0.288,18.74-2.321,26.816c1.334,0.815,2.369,2.154,2.571,3.819c1.165,9.481,5.796,17.923,12.693,24.402
                        C382.422,336.05,418.522,304.643,431.731,286.467z"/>
                    </g>
                    <g>
                      <path style="fill:#00ABFF;" d="M481.635,318.013c-0.211-0.059-0.423-0.106-0.64-0.137l-42.168-6.327
                        c-0.258-0.039-0.81-0.059-1.073-0.059c-2.667,0-4.916,1.989-5.241,4.638c-2.641,21.448-22.972,37.623-47.295,37.623
                        c-24.329,0-44.659-16.173-47.295-37.623c-0.33-2.726-2.786-4.777-5.375-4.635c-0.31-0.018-0.614,0.008-0.939,0.057l-42.168,6.327
                        c-0.217,0.031-0.428,0.077-0.64,0.137c-19.933,5.582-30.364,25.195-30.364,41.685v20.465c0,8.713,7.759,15.801,17.297,15.801
                        h218.969c9.539,0,17.297-7.088,17.297-15.801v-20.465C512,343.209,501.569,323.595,481.635,318.013z"/>
                    </g>
                    <g>
                      <path style="fill:#FDC88E;" d="M432.761,174.143h-89.804c-14.563,0-26.413,11.85-26.413,26.413v31.695
                        c0,40.78,30.808,73.956,68.673,73.956s68.673-33.176,68.673-73.956v-36.978C453.892,183.623,444.415,174.143,432.761,174.143z"/>
                    </g>
                    <g>
                      <path style="fill:#7E5C62;" d="M422.196,116.035h-68.673c-9.936,0-18.288,6.892-20.537,16.144
                        c-18.185,2.311-32.289,17.88-32.289,36.681v26.413c0,13.614,5.779,26.314,15.848,35.34v-30.058
                        c0-14.563,11.85-26.413,26.413-26.413h89.804c11.654,0,21.13,9.479,21.13,21.13v35.335c10.071-9.024,15.848-21.724,15.848-35.335
                        v-31.695C469.739,137.364,448.413,116.035,422.196,116.035z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path style="fill:#FDC88E;" d="M256,332.035c-27.944,0-53.297-11.991-72.003-31.372c-0.014,11.615-0.436,28.379-3.516,40.611
                        c2.02,1.235,3.588,3.262,3.894,5.784c3.992,32.484,34.781,56.977,71.625,56.977c36.836,0,67.625-24.496,71.625-56.977
                        c0.31-2.525,1.844-4.549,3.895-5.78c-3.08-12.233-3.503-28.999-3.517-40.615C309.297,320.044,283.944,332.035,256,332.035z"/>
                    </g>
                    <g>
                      <path style="fill:#FFB980;" d="M326.44,302.139c-18.549,18.477-43.242,29.896-70.44,29.896
                        c-27.944,0-53.297-11.991-72.003-31.372c-0.014,11.615-0.436,28.379-3.516,40.611c2.02,1.235,3.588,3.262,3.894,5.784
                        c1.765,14.359,8.778,27.144,19.223,36.954C251.766,377.229,306.436,329.666,326.44,302.139z"/>
                    </g>
                    <g>
                      <path style="fill:#FF4F19;" d="M402.015,349.914c-0.32-0.09-0.641-0.16-0.969-0.207l-63.859-9.582
                        c-0.391-0.059-1.227-0.09-1.625-0.09c-4.039,0-7.445,3.012-7.938,7.023c-4,32.48-34.789,56.977-71.625,56.977
                        c-36.844,0-67.633-24.492-71.625-56.977c-0.5-4.129-4.219-7.234-8.141-7.02c-0.469-0.027-0.93,0.012-1.422,0.086l-63.859,9.582
                        c-0.328,0.047-0.648,0.117-0.969,0.207C79.797,358.367,64,388.07,64,413.043v30.992c0,13.195,11.75,23.93,26.195,23.93h331.609
                        c14.445,0,26.195-10.734,26.195-23.93v-30.992C448,388.07,432.203,358.367,402.015,349.914z"/>
                    </g>
                    <g>
                      <path style="fill:#FFE1B2;" d="M328,132.035H192c-22.055,0-40,17.945-40,40v48c0,61.758,46.656,112,104,112s104-50.242,104-112
                        v-56C360,146.391,345.648,132.035,328,132.035z"/>
                    </g>
                    <g>
                      <path style="fill:#7E5449;" d="M312,44.035H208c-15.047,0-27.695,10.437-31.102,24.449C149.359,71.984,128,95.562,128,124.035v40
                        c0,20.617,8.752,39.851,24,53.52v-45.52c0-22.055,17.945-40,40-40h136c17.648,0,32,14.355,32,32v53.511
                        c15.251-13.666,24-32.899,24-53.511v-48C384,76.336,351.703,44.035,312,44.035z"/>
                    </g>
                  </g>
                </g>
                </svg>

              </div>
              <h3>Recommendations from people are better than advertisements</h3>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="net-blocks reveal">
              <div class="icon-container">
                
                <svg id="svg-cog" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 414.95 414.95"><defs><style>.cls-1{fill:none;stroke:#231f20;stroke-miterlimit:10;stroke-width:15px;}</style></defs><title>cogwheel</title><path class="cls-1" d="M395.45,169.57H360.79a157.08,157.08,0,0,0-17.24-41.92L368.21,103a12,12,0,0,0,0-17L330.74,48.55a12,12,0,0,0-17,0L289.41,72.9A157.12,157.12,0,0,0,246,54.76V19.5a12,12,0,0,0-12-12H181a12,12,0,0,0-12,12V54.76a157.1,157.1,0,0,0-42.69,17.7L102.38,48.55h0l-0.61-.61a12,12,0,0,0-17,0L47.32,85.41a12,12,0,0,0,0,17L47.93,103h0L71.84,126.9a157.1,157.1,0,0,0-17.69,42.67H19.5a12,12,0,0,0-12,12v53a12,12,0,0,0,12,12H54.16A157.12,157.12,0,0,0,72.3,290L47.93,314.38a12,12,0,0,0,0,17l37.48,37.48a12,12,0,0,0,17,0l24.68-24.68A157.08,157.08,0,0,0,169,361.39v34.06a12,12,0,0,0,12,12h53a12,12,0,0,0,12-12V361.39a157.1,157.1,0,0,0,42.67-17.69l25.12,25.12a12,12,0,0,0,17,0l37.48-37.48a12,12,0,0,0,0-17l-0.61-.61-24.51-24.51a157.1,157.1,0,0,0,17.7-42.69h34.66a12,12,0,0,0,12-12v-53A12,12,0,0,0,395.45,169.57Z"/><circle class="cls-1" cx="208.07" cy="208.07" r="81.13"/></svg>
              </div>
              <h3>New products and services become popular targeting specific networks and regions</h3>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
              <div></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="net-blocks reveal">
              <div class="icon-container">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                  <g>
                    <g>
                      <path style="fill:#9F6459;" d="M416,32H272c0,8.836-7.164,16-16,16s-16-7.164-16-16H96c-22.055,0-40,17.945-40,40v400
                        c0,22.055,17.945,40,40,40h320c22.055,0,40-17.945,40-40V72C456,49.945,438.054,32,416,32z M416,464c0,4.418-3.582,8-8,8H104
                        c-4.418,0-8-3.582-8-8V80c0-4.418,3.582-8,8-8h304c4.418,0,8,3.582,8,8V464z"/>
                    </g>
                    <g>
                      <g>
                        <path style="fill:#D8DCE1;" d="M152,368c-1.891,0-3.789-0.664-5.312-2.023c-3.305-2.93-3.602-7.992-0.664-11.289l64-72
                          c2.328-2.625,6.094-3.422,9.289-1.969l80.445,36.57l52.844-128.336c1.688-4.078,6.359-6,10.445-4.352
                          c4.086,1.68,6.031,6.359,4.352,10.445l-56,136c-0.828,2.008-2.438,3.594-4.453,4.391s-4.273,0.742-6.258-0.156l-82.625-37.555
                          l-60.086,67.586C156.398,367.094,154.203,368,152,368z"/>
                      </g>
                    </g>
                    <g>
                      <circle style="fill:#FF4F19;" cx="152" cy="360" r="24"/>
                    </g>
                    <g>
                      <circle style="fill:#FF9600;" cx="216" cy="288" r="24"/>
                    </g>
                    <g>
                      <circle style="fill:#FFD200;" cx="304" cy="328" r="24"/>
                    </g>
                    <g>
                      <circle style="fill:#74D24F;" cx="360" cy="192" r="24"/>
                    </g>
                    <g>
                      <path style="fill:#B9BBC1;" d="M304,16h-20.391C277.969,6.242,267.484,0,256,0s-21.969,6.242-27.609,16H208
                        c-22.055,0-40,17.945-40,40v32c0,4.418,3.578,8,8,8h160c4.422,0,8-3.582,8-8V56C344,33.945,326.055,16,304,16z M256,40
                        c-4.418,0-8-3.582-8-8c0-4.418,3.582-8,8-8s8,3.582,8,8C264,36.418,260.418,40,256,40z"/>
                    </g>
                  </g>
                  </svg>
              </div>
              <h3>Lots of data can be easily segmented understanding each customer’s network value</h3>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sect-company">
      <div id="client-carousel" class="owl-carousel">
        <div>
          <div class="clients">
            <img class="img-responsive" src="images/zappos-transparent.png" alt="">
          </div>
        </div>
        <div>
          <div class="clients">
            <img class="img-responsive" src="images/capital_one.png" alt="">
          </div>
        </div>
        <div>
          <div class="clients">
            <img class="img-responsive" src="images/first_bank.png" alt="">
          </div>
        </div>
        <div>
          <div class="clients">
            <img class="img-responsive" src="images/jpmorgan_chase.png" alt="">
          </div>
        </div>
        <div>
          <div class="clients">
            <img class="img-responsive" src="images/staples.png" alt="">
          </div>
        </div>
        <div>
          <div class="clients">
            <img class="img-responsive" src="images/eventbrite_logo.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="sect-contacts">

      <!-- <div id="map"></div> -->
      <div id="turnglobe">
        
        <div id="worldmap"></div>
        
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <h3>Ready to understand your people?</h3>

            <form role="form" id="contact_form" name="contact_form">
              <div class="row">
                <div class="col-xs-6 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" />
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company" />
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                     <textarea rows="5" class="form-control" id="message" placeholder="Message"></textarea>
                  </div>
                </div>
              </div>
               <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
            </form>
          </div>
        </div>
        
      </div>
    </section>
    <footer>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script> -->
    <!-- <script src="js/jquery.visible.min.js"></script> -->
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/owl.carousel2.min.js"></script>
    <script>
      $(function() {
        window.sr = new scrollReveal();

        // Owl
        var owl = $('#client-carousel');

        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY>0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });
        $("#journey-carousel").owlCarousel({
          items:1,
          nav: true,
          navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
        });

        $("#client-carousel").owlCarousel({
          items: 5,
          loop: true
        });
        
      });

    </script>
    <script src="js/main.js"></script>
  </body>
</html>