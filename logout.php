<?php
session_start();
if (isset($_SESSION['loggedin'])) {
    $_SESSION['user_is_loggedin'] = 0;
} elseif (isset($_SESSION['userData'])) {
    $_SESSION['user_is_loggedin1'] = 0;
}elseif (isset($_SESSION['userData1'])) {
    $_SESSION['user_is_loggedin2'] = 0;
}else{
    $_SESSION['user_is_loggedin3'] = 0;
}
session_destroy();
header('Location: fib.php');
?>

<!DOCTYPE html>
<html>
<title>Home | Fibonia</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src= "web.js"></script>
<!DOCTYPE html><html class=''>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="load">
  <hr/><hr/><hr/><hr/>
</div>

<link rel="icon" type="image/png" href="logo.png"><body><script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>

<button class="toggle-chat chat-is-open">
  <svg class="close-chat" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g id="chat_option_01" transform="translate(-266.000000, -579.000000)" fill="#274666" fill-rule="nonzero">
        <g id="button_chat-close_static" transform="translate(246.000000, 559.000000)">
          <g id="Group-4" transform="translate(20.000000, 20.000000)">
            <path d="M6.18869049,10 L0.789348044,4.60065755 C-0.263116015,3.54819349 -0.263116015,1.8418121 0.789348044,0.789348044 C1.8418121,-0.263116015 3.54819349,-0.263116015 4.60065755,0.789348044 L10,6.18869049 L15.3993425,0.789348044 C16.4518065,-0.263116015 18.1581879,-0.263116015 19.210652,0.789348044 C20.263116,1.8418121 20.263116,3.54819349 19.210652,4.60065755 L13.8113095,10 L19.210652,15.3993425 C20.263116,16.4518065 20.263116,18.1581879 19.210652,19.210652 C18.1581879,20.263116 16.4518065,20.263116 15.3993425,19.210652 L10,13.8113095 L4.60065755,19.210652 C3.54819349,20.263116 1.8418121,20.263116 0.789348044,19.210652 C-0.263116015,18.1581879 -0.263116015,16.4518065 0.789348044,15.3993425 L6.18869049,10 Z" id="Combined-Shape"></path>
          </g>
        </g>
      </g>
    </g>
  </svg>
  
  <span class="open-chat">
    <svg width="33px" height="37px" viewBox="0 0 33 37" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="chat_option_01" transform="translate(-59.000000, -572.000000)">
                <g id="button_chat_static" transform="translate(46.000000, 559.000000)">
                    <g id="icon_chat" transform="translate(13.000000, 13.000000)">
                        <path d="M11.3908465,32.1937452 C12.3733449,33.8267185 14.076396,35.4288034 16.5,37 C5.95869323,35.1320625 0.468256843,28.6257901 0.0286908382,17.481183 C0.00965275619,17.1565548 0,16.8294047 0,16.5 C0,16.4339782 0.000387763357,16.3680469 0.00116113687,16.3022084 C0.000387045622,16.2018277 -1.24344979e-14,16.1010916 -1.24344979e-14,16 L0.00728022691,16.0050958 C0.268977109,7.12133202 7.55285045,0 16.5,0 C25.6126984,0 33,7.38730163 33,16.5 C33,25.6126984 25.6126984,33 16.5,33 C14.7167319,33 12.9995375,32.7171051 11.3908465,32.1937452 Z" id="Combined-Shape-Copy" fill="#274666"></path>
                        <g id="Group" transform="translate(7.000000, 15.000000)" fill="#FFFFFF">
                            <circle id="Oval" cx="2" cy="2" r="2"></circle>
                            <circle id="Oval" cx="9" cy="2" r="2"></circle>
                            <circle id="Oval" cx="16" cy="2" r="2"></circle>
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </svg>
    
     Have questions?
  </span>
</button>






<div class="chat-pop-up chat-display-on chat-visible">
  <div class="chat-pop-up--heading">
    <h3>
      &nbsp Need any
      <span>
       &nbsp &nbsp help?
      </span>
    </h3>
    
    <figure id="lottie-animation">
      <svg width="166px" height="166px" viewBox="0 0 166 166" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
        <defs>
            <circle id="path-1" cx="83" cy="83" r="83"></circle>
        </defs>
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="chat_option_01" transform="translate(-244.000000, -62.000000)">
                <g id="modal_chat_option_01" transform="translate(46.000000, 40.000000)">
                    <g id="graphic_support-lady" transform="translate(281.000000, 105.000000) rotate(-360.000000) translate(-281.000000, -105.000000) translate(198.000000, 22.000000)">
                        <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                        </mask>
                        <use id="Oval" fill="#274666" fill-rule="nonzero" xlink:href="#path-1"></use>
                        <path d="M152,168.08275 C152,239.896957 133.596113,214.72453 89.7099219,214.72453 C17.7790385,214.72453 18.6567623,239.854555 16.094375,168.08275 C14.6786914,128.507907 28.8355274,96 82.6315039,96 C136.42748,96 152,120.027583 152,168.08275 Z" id="Path" fill="#2D578A" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M82.8428571,115 L82.8428571,115 C77.5,115 72,110.16286 72,104.842007 L73.1142857,86.6885062 C73.1377573,81.3474042 77.4796679,77.023375 82.8428571,77 L82.8428571,77 C88.2092857,77.0156268 92.5557372,81.3441782 92.5714286,86.6885062 L94,104.842007 C93.9857143,110.16286 88.2714286,115 82.8428571,115 Z" id="Path" fill="#D3B3A1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M121,72 L90,76.7788546 L85.6420898,85.909668 C101.80424,86.5299323 110,90.7484716 110,90.7484716 L121,72 Z" id="Path" fill="#FF6B17" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M58,87.4687182 C62.5,85.4677734 71,84.2602539 80,87 L75.3546202,76.7616946 L47,71 L58,87.4687182 Z" id="Path" fill="#FF6B17" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <circle id="Oval" fill="#E5C6B1" fill-rule="nonzero" mask="url(#mask-2)" cx="84.5" cy="54.5" r="37.5"></circle>
                        <path d="M79,67.8632813 C77.5807399,70.6015625 77.2294872,77 84.5,77 C88.4963997,77 84.9644489,75.3632813 90,67.8632813 L79,67.8632813 Z" id="Path" fill="#3B356B" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <ellipse id="Oval" fill="#B76F46" fill-rule="nonzero" mask="url(#mask-2)" cx="45.5" cy="55.5" rx="5.5" ry="7.5"></ellipse>
                        <ellipse id="Oval" fill="#B76F46" fill-rule="nonzero" mask="url(#mask-2)" cx="122.5" cy="55.5" rx="5.5" ry="7.5"></ellipse>
                        <path d="M44.857263,87.8810972 C48.8472779,89.5306131 52.4940656,89.1324541 56.5269838,88.1228366 L57.0704267,87.9237571 L57.671074,87.6393578 C57.7835787,87.5881084 57.8933649,87.5311537 58,87.4687182 C55.4114958,79.1215988 53.5809513,70.4758602 53.7096615,63.1525783 L60.2705128,23 C60.1847061,23.7820981 56.0998394,25.460563 55.5563965,26.0720215 C52.767081,29.4023947 49.2793402,32.5348589 47.3170571,36.4048244 C40.4382144,49.7147115 38.7363801,65.0153937 40.8529471,79.7330573 C41.0960663,81.4110132 41.3820889,83.074749 41.7253159,84.7384849 C41.8393208,85.8722471 42.5537001,86.8591107 43.5987638,87.3265185 C43.956292,87.5113781 44.3710247,87.6820177 44.857263,87.8810972 Z" id="Path" fill="#FF8D4E" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M110,90.7484716 C110.926739,90.8473127 111.853477,90.9320336 112.765958,90.9885142 C113.678439,91.0449947 114.662208,90.875553 115.617462,90.8614328 L115.817067,90.8614328 L116.03093,90.8614328 C117.028956,90.6637507 118.041239,90.5084291 119.025008,90.2260261 C119.50841,90.1132844 119.984522,89.9718271 120.45076,89.8024217 L120.579077,89.8024217 C121.249181,89.449418 122.004829,88.9975732 122.090374,88.9552128 C123.56756,88.0926123 124.995488,87.149832 126.367629,86.1311831 L127.194565,85.5381369 C135.749075,43.9543001 111.126344,23 111.126344,23 L115.218251,63.9484301 C115.318054,71.9263139 113.036851,81.6268558 110,90.7484716 Z" id="Path" fill="#FF8D4E" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <ellipse id="Oval" fill="#3B356B" fill-rule="nonzero" mask="url(#mask-2)" cx="70.5" cy="55.5" rx="2.5" ry="3.5"></ellipse>
                        <ellipse id="Oval" fill="#3B356B" fill-rule="nonzero" mask="url(#mask-2)" cx="97.5" cy="55.5" rx="2.5" ry="3.5"></ellipse>
                        <path d="M71.9550836,24.2793286 C71.9550836,24.2793286 76.6734816,47.7092853 107.449981,43.4467098 C107.449981,43.4467098 111.042235,41.9263912 110.129917,46.1889667 C109.217598,50.4515422 109.616737,58.9766932 114.221096,67.2176725 C114.221096,67.2176725 116.188283,69.5336719 112.795598,81 L125.981475,47.410905 C125.981475,47.410905 121.919894,-2.8351847 64.3012695,17 C54.7670898,21.8528857 50.1995443,26.5518603 50.5986328,31.0969238" id="Path" fill="#FF8D4E" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M75,32.2036683 C75,32.2036683 74.2508834,49.3130889 54.0954064,48.6213714 C57.2854471,60.0348421 56.8658304,72.1540654 52.8939929,83.3201798 C46.1943463,101.389535 43,47.0403028 43,47.0403028 C43,47.0403028 46.4063604,21.8137891 71.8056537,17" id="Path" fill="#FF8D4E" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M98,66 C91.9248678,66 87,61.0751322 87,55 C87,48.9248678 91.9248678,44 98,44 C104.075132,44 109,48.9248678 109,55 C108.99223,61.0719111 104.071911,65.9922304 98,66 L98,66 Z M98,46.2564103 C93.1788374,46.2564103 89.2705128,50.1647348 89.2705128,54.9858974 C89.2705128,59.8070601 93.1788374,63.7153846 98,63.7153846 C102.821163,63.7153846 106.729487,59.8070601 106.729487,54.9858974 C106.729487,52.6706935 105.809776,50.4503143 104.17268,48.8132179 C102.535583,47.1761214 100.315204,46.2564103 98,46.2564103 L98,46.2564103 Z" id="Shape" fill="#2D578A" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M69,66 C62.9248678,66 58,61.0751322 58,55 C58,48.9248678 62.9248678,44 69,44 C75.0751322,44 80,48.9248678 80,55 C79.9922304,61.0719111 75.0719111,65.9922304 69,66 L69,66 Z M69,46.2564103 C64.1788374,46.2564103 60.2705128,50.1647348 60.2705128,54.9858974 C60.2705128,59.8070601 64.1788374,63.7153846 69,63.7153846 C73.8211626,63.7153846 77.7294872,59.8070601 77.7294872,54.9858974 C77.7217226,50.1679547 73.8179428,46.2641749 69,46.2564103 L69,46.2564103 Z" id="Shape" fill="#2D578A" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M87.715528,55 C85.3939605,52.7807183 81.8729293,52.7496356 79.5167702,54.9276235 L78,53.2340134 C81.1279059,50.2887 85.8309976,50.2515662 89,53.1471616 L87.715528,55 Z" id="Path" fill="#2D578A" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <polygon id="Path" fill="#2D578A" fill-rule="nonzero" mask="url(#mask-2)" points="58.1380471 53 55.1212121 51.1505376 55 50.5770609 55.1212121 49 59 51.3799283"></polygon>
                        <polygon id="Path" fill="#2D578A" fill-rule="nonzero" mask="url(#mask-2)" points="107.757396 54 109 53.1073171 108.964497 52.4926829 108.905325 51 107 52.3609756"></polygon>
                        <path d="M127.669679,53 L123.472661,52.3423365 L125.55718,52.6641718 L123.472661,52.3423365 C123.472661,52.1884152 125.767031,36.6703547 116.309751,25.6300033 C109.804374,18.0458835 99.2698597,14.1978523 85,14.1978523 L85,10 C100.584925,10 112.210664,14.3517735 119.541455,22.9433778 C130.28582,35.410999 127.781599,52.2303938 127.669679,53 Z" id="Path" fill="#4580C1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M42.331409,53 C42.2194547,52.2868293 39.7144768,35.478374 50.4341031,22.9349593 C57.7811055,14.3489431 69.3963664,10 85,10 L85,14.195122 C70.6978354,14.195122 60.1461405,18.0546341 53.6527898,25.6478049 C44.1786553,36.7229268 46.4737189,52.2169106 46.5017075,52.3147967 L42.331409,53 Z" id="Path" fill="#4580C1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M50,42.1332968 L50,63.3862555 C50,63.3862555 39,67.6368472 39,53.7657495 C39,39.8946519 50,42.1332968 50,42.1332968 Z" id="Path" fill="#FFFFFF" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M96,74 L96,71.4020101 C101.472122,71.4020101 106.191672,70.8738589 110.132802,69.8371814 C115.207309,68.5023792 118.991308,66.3245142 121.429623,63.3454774 C123.867137,60.2951023 124.887888,56.3787749 124.242634,52.5527638 L126.760279,52 C127.561583,56.5828281 126.333444,61.283781 123.384665,64.9208543 C118.560351,70.959799 109.333674,74 96,74 Z" id="Path" fill="#4580C1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <rect id="Rectangle" fill="#FFFFFF" fill-rule="nonzero" mask="url(#mask-2)" x="92" y="70" width="10" height="5" rx="1.47"></rect>
                        <path d="M121,42.1332968 L121,63.3862555 C121,63.3862555 132,67.6368472 132,53.7657495 C132,39.8946519 121,42.1332968 121,42.1332968 Z" id="Path" fill="#FFFFFF" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M113.019061,195 L106.209449,187.961609 C120.163573,174.363437 126.554562,165.523218 127.140635,159.273126 C127.615076,154.177331 124.098636,149.841682 117.372748,141.986837 C112.136835,136.141882 107.333027,129.917316 103,123.363254 L111.191071,118 C115.271317,124.172136 119.800254,130.030106 124.740526,135.525594 C132.038533,143.971664 137.801587,150.658135 136.908523,160.202194 C136.015459,169.155027 129.108167,179.304388 113.019061,195 Z" id="Path" fill="#E5C6B1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M52.5081015,198 C36.0269586,181.811129 28.9513595,171.469413 28.0937111,162.26895 C27.1788861,152.547173 33.0823658,145.685572 40.5439067,137.02051 C45.6070487,131.352887 50.2457934,125.3302 54.4235162,119 L63,124.354022 C58.5732751,131.073485 53.6524147,137.463799 48.2770362,143.473515 C41.3157902,151.574996 37.6993729,156.055466 38.1996678,161.35313 C38.8000216,167.820225 45.4325024,176.936151 59.6408772,190.941145 L52.5081015,198 Z" id="Path" fill="#E5C6B1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M116,121.304888 C116,121.304888 108.882562,105.361944 100.142349,103.902279 C95.0462633,100.727862 95.7437722,102.485129 95.7437722,102.485129 L88.3879004,110.803803 C87.1725183,112.019112 84.4906061,112.654988 82.7712816,112.549196 C81.0519571,112.443403 79.4614998,111.606173 78.405694,110.251114 L72.341637,102.485129 C70.5063805,103.342559 68.5168954,103.824464 66.4911032,103.902279 C60.2626599,108.392415 55.2774198,114.379274 52,121.304888 C53.9968737,123.889235 57.1100468,125.373118 60.3843416,125.301253 C56.7156926,130.827361 57.1326301,138.09705 61.4092527,143.171522 L60.6263345,168 L107.459075,168 L107.459075,142.30706 C110.83582,137.683154 111.256204,131.54313 108.540925,126.505831 C108.540925,126.505831 115.302491,122.240208 116,121.304888 Z" id="Path" fill="#4580C1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M72.0347072,101 L66,103.097452 C66,103.097452 66,111.997055 66,111.997055 C68.9501823,112.052656 71.8642541,111.320137 74.4598698,109.870472 L79,111.137682 L79,111.137682 L72.0347072,101 Z" id="Path" fill="#274666" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M94.0428266,101 L87,111.665266 L91.8576017,110.321269 C91.8576017,110.321269 96.993576,112.373394 100,111.939846 L100,103.081028 L94.0428266,101 Z" id="Path" fill="#274666" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M60.1145251,126 C53.9413408,125.695431 52.0977654,121.949239 52,121.766497 L52.4469274,120.715736 L52.4469274,120.715736 L52.7402235,120 C55.3756805,122.346057 58.6075384,123.754543 62,124.035533 L60.1145251,126 Z" id="Path" fill="#274666" fill-rule="nonzero" mask="url(#mask-2)"></path>
                        <path d="M107.896792,127 C114.061367,126.695431 115.902371,122.949239 116,122.766497 L115.553696,121.715736 L115.553696,121.715736 L115.246862,121 C112.620673,123.356401 109.390209,124.766247 106,125.035533 L107.896792,127 Z" id="Path" fill="#274666" fill-rule="nonzero" mask="url(#mask-2)"></path>
                    </g>
                </g>
            </g>
        </g>

      
      </svg>
    </figure>
  </div>
  
  <h4>
    Whether you have questions or concerns, or just need help with something right now, we're here.
  </h4>
  
  <a onclick=\ "window.open('" + urlToGo + "', (Math.floor(Math.random()*100000)), 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=700,height=710,left = 310,top = 275');\" href="contactus.html" id=init-flash-frame class=button-yellow>
    <span>
      Contact Us
    </span>
    
    <svg width="17px" height="17px" viewBox="0 0 17 17" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="chat_option_01" transform="translate(-509.000000, -578.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <g id="button_cta_static" transform="translate(333.000000, 559.000000)">
                  <polygon id="rightwards-arrow" points="192.774 27.224 184.782 35.216 182.286 32.72 185.982 29 176.526 29 176.526 25.448 185.982 25.448 182.262 21.728 184.758 19.208"></polygon>
              </g>
          </g>
      </g>
  
    </svg>
  </a>
</div>
  <div class="load">
  <hr/><hr/><hr/><hr/>
</div>
</body>
<style>
  body{background:#ECF0F1}

.load{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);
  /*change these sizes to fit into your project*/
  width:100px;
  height:100px;
  z-index:10000;
}
.load hr{border:0;margin:0;width:40%;height:40%;position:absolute;border-radius:50%;animation:spin 2s ease infinite}

.load :first-child{background:#19A68C;animation-delay:-1.5s}
.load :nth-child(2){background:#F63D3A;animation-delay:-1s}
.load :nth-child(3){background:#FDA543;animation-delay:-0.5s}
.load :last-child{background:#193B48}

@keyframes spin{
  0%,100%{transform:translate(0)}
  25%{transform:translate(160%)}
  50%{transform:translate(160%, 160%)}
  75%{transform:translate(0, 160%)}
}
</style>
<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/suez/pen/OjGQza?depth=everything&limit=all&order=popularity&page=59&q=icon&show_forks=false" />


<style class="cp-pen-styles">*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Roboto', Helvetica, Arial, sans-serif;
  background: #FFFFFF;
}

a
{
  color: #000;
  transition: color 0.3s ease;
}

a:hover
{
  color: #000;
}

#menuToggle
{
  display: block;
  position: relative;
  top: -910px;
  left: 50px;
  
  z-index: 10001;
  
  -webkit-user-select: none;
  user-select: none;
}

#menuToggle input
{
  display: block;
  width: 40px;
  height: 32px;
  position: absolute;
  top: -7px;
  left: -5px;
  
  cursor: pointer;
  
  opacity: 0; /* hide this */
  z-index: 10002; /* and place it over the hamburger */
  
  -webkit-touch-callout: none;
}

.border {
    background: red;
    width: 300px;
    height: 200px;
    border: 1px solid green;
    overflow: visible;
    margin: 0;
    padding: 0;
}

.border iframe {
    border: none;
    width: 300px;
    height: 100px;
    margin: 0;
    padding: 0;
    opacity: 0.8;
}

.border .lower {
    height: 100px;
    margin: 0;
    padding: 0;
    background: blue;
    opacity: 0.8;
}

/*
 * Just a quick hamburger
 */
#menuToggle span
{
  display: block;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;
  
  background: #FFFFFF;
  border-radius: 3px;
  
  z-index: 10001;
  
  transform-origin: 4px 0px;
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}

#menuToggle span:first-child
{
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2)
{
  transform-origin: 0% 100%;
}

/* 
 * Transform all the slices of hamburger
 * into a crossmark.
 */
#menuToggle input:checked ~ span
{
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background: #FFFFFF;
}

/*
 * But let's hide the middle one.
 */
#menuToggle input:checked ~ span:nth-last-child(3)
{
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

/*
 * Ohyeah and the last one should go the other direction
 */
#menuToggle input:checked ~ span:nth-last-child(2)
{
  transform: rotate(-45deg) translate(0, -1px);
}

/*
 * Make this absolute positioned
 * at the top left of the screen
 */
#menu
{
  position: absolute;
  width: 220px;
  height: 2000px;
  margin: -100px 0 0 -50px;
  padding: 50px;
  padding-top: 125px;
  
  background: rgb(211,211,211);
  opacity: 0.8;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  /* to stop flickering of text in safari */
  
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

#menu li
{
  padding: 10px 0;
  font-size: 22px;
}

/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul
{
  transform: none;
}

.slider {
  overflow: hidden;
  position: relative;
  height: 100vh;
  color: #fff;
}
.slider__top-heading {
  z-index: 12;
  position: absolute;
  left: 0;
  top: 100px;
  width: 100%;
  text-align: center;
  font-size: 16px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  -webkit-transition: all 0.5s 1s;
  transition: all 0.5s 1s;
  -webkit-transform: translateY(-30px);
          transform: translateY(-30px);
  opacity: 0;
}
.slider.s--ready .slider__top-heading {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
}
.slider__slides {
  position: relative;
  height: 100%;
}
.slider__slide {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
.slider__slide.s--active {
  pointer-events: auto;
}
.slider__slide-content {
  z-index: 6;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  height: 100%;
  text-transform: uppercase;
  line-height: 1;
}
.slider__slide-subheading {
  margin-bottom: 20px;
  font-size: 24px;
  letter-spacing: 2px;
  -webkit-transform: translateY(20px);
          transform: translateY(20px);
  opacity: 0;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}
.slider__slide.s--active .slider__slide-subheading {
  -webkit-transition-delay: 0.65s;
          transition-delay: 0.65s;
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.slider__slide-heading {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 20px;
  font-size: 60px;
  letter-spacing: 12px;
}
.slider__slide-heading span {
  display: block;
  opacity: 0;
  -webkit-transform: translateY(-60px);
          transform: translateY(-60px);
  -webkit-transition: all 0.33333s;
  transition: all 0.33333s;
}
.slider__slide.s--prev .slider__slide-heading span {
  -webkit-transform: translateY(60px);
          transform: translateY(60px);
}
.slider__slide.s--active .slider__slide-heading span {
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.slider__slide-heading span:nth-child(1) {
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(1) {
  -webkit-transition-delay: 0.33333s;
          transition-delay: 0.33333s;
}
.slider__slide-heading span:nth-child(2) {
  -webkit-transition-delay: 0.1s;
          transition-delay: 0.1s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(2) {
  -webkit-transition-delay: 0.43333s;
          transition-delay: 0.43333s;
}
.slider__slide-heading span:nth-child(3) {
  -webkit-transition-delay: 0.2s;
          transition-delay: 0.2s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(3) {
  -webkit-transition-delay: 0.53333s;
          transition-delay: 0.53333s;
}
.slider__slide-heading span:nth-child(4) {
  -webkit-transition-delay: 0.3s;
          transition-delay: 0.3s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(4) {
  -webkit-transition-delay: 0.63333s;
          transition-delay: 0.63333s;
}
.slider__slide-heading span:nth-child(5) {
  -webkit-transition-delay: 0.4s;
          transition-delay: 0.4s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(5) {
  -webkit-transition-delay: 0.73333s;
          transition-delay: 0.73333s;
}
.slider__slide-heading span:nth-child(6) {
  -webkit-transition-delay: 0.5s;
          transition-delay: 0.5s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(6) {
  -webkit-transition-delay: 0.83333s;
          transition-delay: 0.83333s;
}
.slider__slide-heading span:nth-child(n+7) {
  -webkit-transition-delay: 0.6s;
          transition-delay: 0.6s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(n+7) {
  -webkit-transition-delay: 0.93333s;
          transition-delay: 0.93333s;
}
.slider__slide-readmore {
  position: relative;
  font-size: 14px;
  text-transform: lowercase;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: translateY(-20px);
          transform: translateY(-20px);
  cursor: pointer;
  opacity: 0;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}
.slider__slide.s--active .slider__slide-readmore {
  -webkit-transition-delay: 0.65s;
          transition-delay: 0.65s;
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.slider__slide-readmore:before {
  content: '';
  position: absolute;
  left: -2px;
  top: -3px;
  width: calc(100% + 4px);
  height: calc(100% + 6px);
  background: rgba(255, 255, 255, 0.4);
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
          transform-origin: 0 50%;
  -webkit-transition: -webkit-transform 0.3s;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
}
.slider__slide-readmore:hover:before {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
}
.slider__slide-parts {
  position: absolute;
  left: 0;
  top: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  height: 100%;
}
.slider__slide-parts:after {
  content: '';
  z-index: 5;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.1);
}
.slider__slide-part {
  position: relative;
  width: 25%;
  height: 100%;
}
.slider__slide-part-inner {
  overflow: hidden;
  position: relative;
  width: 100%;
  height: 100%;
  background-size: 0 0;
  background-repeat: no-repeat;
  -webkit-transition: -webkit-transform 0.5s ease-in-out;
  transition: -webkit-transform 0.5s ease-in-out;
  transition: transform 0.5s ease-in-out;
  transition: transform 0.5s ease-in-out, -webkit-transform 0.5s ease-in-out;
}
.slider__slide-part-inner:before {
  content: '';
  position: absolute;
  width: 100vw;
  height: 100%;
  background-image: inherit;
  background-size: cover;
  background-position: center center;
  -webkit-transition: opacity 0.25s;
  transition: opacity 0.25s;
  opacity: 0;
}
.slider__slide-part:nth-child(1) .slider__slide-part-inner {
  z-index: 3;
  -webkit-transition-delay: 0.24s;
          transition-delay: 0.24s;
  -webkit-transform: translateX(-32.5%);
          transform: translateX(-32.5%);
}
.slider__slide.s--active .slider__slide-part:nth-child(1) .slider__slide-part-inner {
  -webkit-transition-delay: 0.28s;
          transition-delay: 0.28s;
}
.slider__slide-part:nth-child(1) .slider__slide-part-inner:before {
  left: 0vw;
  -webkit-transition-delay: 0.365s;
          transition-delay: 0.365s;
}
.slider__slide.s--active .slider__slide-part:nth-child(1) .slider__slide-part-inner:before {
  -webkit-transition-delay: 0.28s;
          transition-delay: 0.28s;
}
.slider__slide-part:nth-child(2) .slider__slide-part-inner {
  z-index: 2;
  -webkit-transition-delay: 0.16s;
          transition-delay: 0.16s;
  -webkit-transform: translateX(-65%);
          transform: translateX(-65%);
}

.chat-pop-up {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/1195544/element_wave.svg) center 35% no-repeat, linear-gradient(#FBCE3B 36%, #FFFFFF 36%);
  background-size: contain;
  border-radius: 6px;
  bottom: 75px;
  box-shadow: 0 3px 6px 0 rgba(75, 74, 75, 0.2);
  opacity: 0;
  right: 55px;
  padding: 10px;
  position: fixed;
  transform: translatey(20px);
  transition: opacity 0.25s ease, transform 0.25s ease-out;
  width: 402px;
  z-index: 100;
}

.chat-pop-up--heading {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}

.chat-pop-up--heading h3 {
  color: #274666;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 40px;
  font-weight: 700;
  line-height: 44px;
  margin: 10px 0 0;
}

.chat-pop-up--heading h3 span {
  display: block;
}

.chat-pop-up--heading figure {
  margin: 0;
}

.chat-pop-up h4 {
  color: #4A4A4A;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 16px;
  font-weight: 300;
  line-height: 26px;
  margin: 20px 0;
}

.chat-pop-up a {
  background: #FF6B17;
  border-radius: 6px;
  color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 24px;
  font-weight: 600;
  max-width: 225px;
  padding: 12px;
  text-decoration: none;
  transition: background 0.2s ease;
}

.chat-pop-up a:hover, 
a:active {
  background: #FF8D4E;
}

.chat-pop-up a span {
  margin-right: 8px;
}

.toggle-chat {
  background:  #FBCE3B;
  border-radius: 30px;
  border-style: none;
  box-shadow: 0 3px 6px 0 rgba(75, 74, 75, 0.2);
  cursor: pointer;
  display: flex;
  flex-direction: column-reverse;
  align-items: center;
  justify-content: center;
  position: fixed;
  height: 60px;
  bottom: 10px;
  right: 55px;
  padding: 10px;
  transition: width 0.3s ease-in-out, background 0.2s ease;
  outline: none;
  width: 180px;
  z-index: 1000000000000000000000;
}

.toggle-chat:hover, 
.toggle-chat:active {
  background: #FFD95D;
}

.toggle-chat.chat-is-open {
  flex-direction: column;
  width: 60px;
}

.open-chat {
  display: flex;
  align-items: center;
  justify-content: space-between;
  color: #274666;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 20px;
  font-weight: 600;
  line-height: 27px;
  opacity: 1;
  transition: opacity 0.2s 0.2s ease-out;
  margin-top: 23px;
  width: 144px;
}

.toggle-chat.chat-is-open .open-chat {
  transition: none;
  opacity: 0;
}

.toggle-chat .close-chat {
  margin-top: 2px;
  opacity: 0;
  transform: rotate(-40deg);
}

.toggle-chat.chat-is-open .close-chat {
  margin-top: 78px;
  opacity: 1;
  transform: rotate(0deg);
  transition: opacity 0.2s ease-out, transform 0.4s ease-out;
}

.chat-display-on {
  display: block !important;
}

.chat-visible {
  opacity: 1;
  transform: translatey(0);
}

.slider__slide.s--active .slider__slide-part:nth-child(2) .slider__slide-part-inner {
  -webkit-transition-delay: 0.36s;
          transition-delay: 0.36s;
}
.slider__slide-part:nth-child(2) .slider__slide-part-inner:before {
  left: -25vw;
  -webkit-transition-delay: 0.285s;
          transition-delay: 0.285s;
}
.slider__slide.s--active .slider__slide-part:nth-child(2) .slider__slide-part-inner:before {
  -webkit-transition-delay: 0.36s;
          transition-delay: 0.36s;
}
.slider__slide-part:nth-child(3) .slider__slide-part-inner {
  z-index: 1;
  -webkit-transition-delay: 0.08s;
          transition-delay: 0.08s;
  -webkit-transform: translateX(-97.5%);
          transform: translateX(-97.5%);
}
.slider__slide.s--active .slider__slide-part:nth-child(3) .slider__slide-part-inner {
  -webkit-transition-delay: 0.44s;
          transition-delay: 0.44s;
}
.slider__slide-part:nth-child(3) .slider__slide-part-inner:before {
  left: -50vw;
  -webkit-transition-delay: 0.205s;
          transition-delay: 0.205s;
}
.slider__slide.s--active .slider__slide-part:nth-child(3) .slider__slide-part-inner:before {
  -webkit-transition-delay: 0.44s;
          transition-delay: 0.44s;
}
.slider__slide-part:nth-child(4) .slider__slide-part-inner {
  z-index: 0;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
  -webkit-transform: translateX(-130%);
          transform: translateX(-130%);
}
.slider__slide.s--active .slider__slide-part:nth-child(4) .slider__slide-part-inner {
  -webkit-transition-delay: 0.52s;
          transition-delay: 0.52s;
}
.slider__slide-part:nth-child(4) .slider__slide-part-inner:before {
  left: -75vw;
  -webkit-transition-delay: 0.125s;
          transition-delay: 0.125s;
}
.slider__slide.s--active .slider__slide-part:nth-child(4) .slider__slide-part-inner:before {
  -webkit-transition-delay: 0.52s;
          transition-delay: 0.52s;
}
.slider__slide.s--active .slider__slide-part-inner {
  -webkit-transform: translateX(0);
          transform: translateX(0);
  -webkit-transition-timing-function: ease;
          transition-timing-function: ease;
}
.slider__slide.s--active .slider__slide-part-inner:before {
  opacity: 1;
}
.slider__control {
  z-index: 100;
  position: absolute;
  left: 50px;
  top: 50%;
  width: 50px;
  height: 50px;
  margin-top: -25px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.4);
  -webkit-transform: translateX(-50px);
          transform: translateX(-50px);
  opacity: 0;
  -webkit-transition: all 0.5s 1s;
  transition: all 0.5s 1s;
  cursor: pointer;
}
.slider__control:before {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  width: 20px;
  height: 20px;
  margin-left: -10px;
  margin-top: -10px;
  border: 2px solid #FFFFFF;
  border-bottom: none;
  border-right: none;
  -webkit-transform: translateX(5px) rotate(-45deg);
          transform: translateX(5px) rotate(-45deg);
}
.slider__control--right {
  left: auto;
  right: 50px;
  -webkit-transform: translateX(50px);
          transform: translateX(50px);
}
.slider__control--right:before {
  -webkit-transform: translateX(-5px) rotate(135deg);
          transform: translateX(-5px) rotate(135deg);
}
.slider.s--ready .slider__control {
  -webkit-transform: translateX(0);
          transform: translateX(0);
  opacity: 1;
}

.icon-link {
  transition: 0.4s;
  z-index: 10000000;
  position: absolute;
  right: 50px;
  top: 40px;
  width: 32px;
}
.icon-link:hover{
    -webkit-filter: brightness(70%);
	-moz-filter: brightness(70%);
	-o-filter: brightness(70%);
	-ms-filter: brightness(70%);
	filter: brightness(70%);

}
.icon-link img {
  width: 100%; 
  vertical-align: top;
}
.icon-link--twitter {
  left: auto;
  right: 5px;
  top: 40px
}
.icon-link--ig {
  left: auto;
  right: 95px;
  top: 40px
}

.sign-link {
  left: auto;
  width: 100px;
  right: 1700px;
  top: 59px;
}

.profile-link {
  left: auto;
  width: 100px;
  right: 1620px;
  top: 60px
}
html,body
{
    width: 100%;
    height: 100%;
    border: 0px;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
    overflow-y: hidden;
}

.border iframe {
    border: none;
    width: 300px;
    height: 100px;
    margin: 0;
    padding: 0;
    opacity: 0.8;
    display:block; /* Add this */
}

iframe {

    margin: none;
    padding: none;
    border: none;
    line-height: 0;
    float: left; 
}
</style>
</head>
<link rel="icon" type="image/png" href="logo.png"><body><script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>
<div id="app"></div>
<nav role="navigation">
  <div class = "fade-in" id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a href="fib.php"><li>Home</li></a>
      <a href="offers.html"><li>Top Offers</li></a>
      <a href="aboutus.html"><li>About</li></a>
      <a href="contactus.html"><li>Contact Us</li></a>
      <a href="newsletter.html"><li>Newsletter</li></a>
      <a href="phonepage.html"><li>iOS/Android</li></a>
      <a href="faq.html"><li>FAQ</li></a>
      <a href="privacy.html"><li>Privacy</li></a>
      <a href="terms.html"><li>Terms</li></a>
    </ul>
  </div>
</nav>
<a href="https://www.facebook.com/yakubyan" target="_blank" class="icon-link">
  <img src="https://translatorswithoutborders.org/wp-content/uploads/2016/01/Facebook_logo-7.png">
</a>
<a href="https://twitter.com/search?q=sub%202%20pewds&src=typd" target="_blank" class="icon-link icon-link--twitter">
  <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
</a>
<a href="https://www.instagram.com/abyac_999/" target="_blank" class="icon-link icon-link--ig">
  <img src="https://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c521.png">
</a>
<a href="login.php" target="_self" class="icon-link sign-link" style = "color: white">Sign in/Register</a>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.5/index.min.js'></script>
</body></html>
<script >'use strict';
const toggleButton = document.querySelector('.toggle-chat');
const chatPopUp = document.querySelector('.chat-pop-up');

toggleButton.addEventListener('click', _=> {
  toggleButton.classList.toggle('chat-is-open');
  chatPopUp.classList.toggle('chat-display-on');
  chatPopUp.classList.toggle('chat-visible');
})

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var CitiesSlider = function (_React$Component) {
  _inherits(CitiesSlider, _React$Component);

  function CitiesSlider(props) {
    _classCallCheck(this, CitiesSlider);

    var _this = _possibleConstructorReturn(this, _React$Component.call(this, props));

    _this.IMAGE_PARTS = 4;

    _this.changeTO = null;
    _this.AUTOCHANGE_TIME = 4000;

    _this.state = { activeSlide: -1, prevSlide: -1, sliderReady: false };
    return _this;
  }

  CitiesSlider.prototype.componentWillUnmount = function componentWillUnmount() {
    window.clearTimeout(this.changeTO);
  };

  CitiesSlider.prototype.componentDidMount = function componentDidMount() {
    var _this2 = this;

    this.runAutochangeTO();
    setTimeout(function () {
      _this2.setState({ activeSlide: 0, sliderReady: true });
    }, 0);
  };

  CitiesSlider.prototype.runAutochangeTO = function runAutochangeTO() {
    var _this3 = this;

    this.changeTO = setTimeout(function () {
      _this3.changeSlides(1);
      _this3.runAutochangeTO();
    }, this.AUTOCHANGE_TIME);
  };

  CitiesSlider.prototype.changeSlides = function changeSlides(change) {
    window.clearTimeout(this.changeTO);
    var length = this.props.slides.length;

    var prevSlide = this.state.activeSlide;
    var activeSlide = prevSlide + change;
    if (activeSlide < 0) activeSlide = length - 1;
    if (activeSlide >= length) activeSlide = 0;
    this.setState({ activeSlide: activeSlide, prevSlide: prevSlide });
  };

  CitiesSlider.prototype.render = function render() {
    var _this4 = this;

    var _state = this.state;
    var activeSlide = _state.activeSlide;
    var prevSlide = _state.prevSlide;
    var sliderReady = _state.sliderReady;

    return React.createElement(
      'div',
      { className: classNames('slider', { 's--ready': sliderReady }) },
      React.createElement(
        'p',
        { className: 'slider__top-heading' },
        'You only need to follow three simple steps!'
      ),
      React.createElement(
        'div',
        { className: 'slider__slides' },
        this.props.slides.map(function (slide, index) {
          return React.createElement(
            'div',
            {
              className: classNames('slider__slide', { 's--active': activeSlide === index, 's--prev': prevSlide === index }),
              key: slide.city
            },
            React.createElement(
              'div',
              { className: 'slider__slide-content' },
              React.createElement(
                'h3',
                { className: 'slider__slide-subheading' },
                slide.country || slide.city
              ),
              React.createElement(
                'h2',
                { className: 'slider__slide-heading' },
                slide.city.split('').map(function (l) {
                  return React.createElement(
                    'span',
                    null,
                    l
                  );
                })
              ),
              React.createElement(
                'p',
                { className: 'slider__slide-readmore',onClick: function onClick(){window.location = 'offers.html'}},
                'read more'
              )
            ),
            React.createElement(
              'div',
              { className: 'slider__slide-parts' },
              [].concat(Array(_this4.IMAGE_PARTS).fill()).map(function (x, i) {
                return React.createElement(
                  'div',
                  { className: 'slider__slide-part', key: i },
                  React.createElement('div', { className: 'slider__slide-part-inner', style: { backgroundImage: 'url(' + slide.img + ')' } })
                );
              })
            )
          );
        })
      ),
      React.createElement('div', { className: 'slider__control', onClick: function onClick() {
          return _this4.changeSlides(-1);
        } }),
      React.createElement('div', { className: 'slider__control slider__control--right', onClick: function onClick() {
          return _this4.changeSlides(1);
        } })
    );
  };

  return CitiesSlider;
}(React.Component);

var slides = [{
  city: 'Paris',
  country: 'France',
  img: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/paris.jpg'
}, {
  city: 'Rio De Janeiro',
  country: 'Brazil',
  img: 'https://wallpapersdsc.net/wp-content/uploads/2016/09/Rio-De-Janeiro-HD-Background.jpg'
}, {
  city: 'Venice',
  country: 'Italy',
  img: 'https://cdn.steemitimages.com/DQmZURjvPJHLLSvMSEadqun8qwjDU9dUmht73ittqUxijwF/VENICE-3.jpg'
}, {
  city: 'Hong Kong',
  country: 'Hong Kong',
  img: 'https://7wallpapers.net/wp-content/uploads/3_Hong-Kong.jpg'
}, {
  city: 'Prague',
  country: 'Czech Republic',
  img: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/prague.jpg'
}];

ReactDOM.render(React.createElement(CitiesSlider, { slides: slides }), document.querySelector('#app'));
//# sourceURL=pen.js
  	$(window).load(function() {
		// Animate loader off screen
		$(".load").fadeOut("slow");;
	});

</script>
