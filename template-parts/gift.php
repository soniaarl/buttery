<?php session_start();
/* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location: christmas");
exit;
}

// Switch content depending on the user
if( isset($_SESSION['Username'])){
    if($_SESSION['Username'] == 'jai'){
        $message="<p>This is for jai</p>
        <p>Second paragraph</p>";
    }
    if($_SESSION['Username'] == 'abi'){
        $message="<p>This is for abiii</p>
        <p>Second paragraph</p>";
    }
}

?>

    <audio src="<?php echo esc_url(home_url('/wp-content/themes/buttery/audio/music.mp3')); ?>" id="music"></audio>
 
    <div class="container" id="container">
    <svg class="ribbon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="465.716px" height="465.716px" viewBox="0 0 465.716 465.716" style="enable-background:new 0 0 465.716 465.716;"
	 xml:space="preserve">
<g>
	<path d="M25.119,122.412c4.853,11.155,37.956,36.175,58.149,42.438c8.091-4.584,20.085-8.055,36.235-8.055
		c8.352,0,18.817,1.006,30.995,4.045c-52.359-42.573-86.396-50.315-106.555-48.345c-8.833,0.89-15.16,3.604-19.564,6.344
		C24.435,120.105,24.639,121.32,25.119,122.412z"/>
	<path d="M165.805,165.518c7.121,2.567,14.679,5.841,22.642,9.966l-10.733-69.258c0,0-92.728-82.916-116.28-49.065
		c-17.065,24.532-30.991,41.828-35.522,53.798c4.539-2.112,10.089-3.933,17.082-4.673
		C65.824,103.821,105.09,112.974,165.805,165.518z"/>
	<path d="M5.949,286.085c8.572-17.02,35.492-29.815,78.848-37.955c0.008-0.124,0.118-1.029,0.433-2.408l-0.395-2.008
		c-0.052-0.292-4.346-22.301-9.372-41.307c-26.801,2.208-77.918,9.931-75.372,36.782c2.285,24.165-0.817,43.064,3.619,53.327
		C4.173,290.449,4.819,288.333,5.949,286.085z"/>
	<path d="M150.965,256.434c0.994-0.798,2.044-1.575,3.056-2.356c-15.282,3.482-30.991,6.144-43.484,6.144
		c-11.108,0-18.578-2.096-22.712-6.328c-54.265,9.891-71.162,25.031-76.211,34.885c-1.919,3.755-2.422,7.205-2.306,10.103
		c2.2,1.211,4.905,1.988,8.448,2.132C36.438,301.81,100.834,287.027,150.965,256.434z"/>
	<path d="M216.713,169.813h8.33h15.631h4.995c9.47,0,17.825,4.036,23.307,10.197c0.269-0.158,0.529-0.292,0.798-0.449
		c2.773-17.851,11.549-73.091,18.073-99.793c7.851-32.085,7.201-48.123-4.576-48.123c-7.306,0-27.964,0-42.589,0
		c0,0-6.688,0-15.631,0c-14.625,0-35.285,0-42.595,0c-11.776,0-12.427,16.038-4.577,48.123
		c6.306,25.758,14.695,78.135,17.773,97.832C201.054,172.789,208.502,169.813,216.713,169.813z"/>
	<path d="M92.231,243.943c-0.431,1.183-0.706,2.192-0.886,2.97c-0.088,0.404-0.158,0.741-0.196,1.002
		c1.088,2.084,3.388,3.434,6.209,4.355c3.903,1.271,8.832,1.655,13.178,1.655c14.291,0,33.408-3.743,51.004-8.143
		c2.144-0.537,4.264-1.086,6.352-1.64c0.088-0.048,0.164-0.107,0.252-0.168c1.883-1.227,3.815-2.453,5.777-3.659
		c3.681-2.252,7.483-4.468,11.447-6.6c-1.221-0.042-2.465-0.081-3.745-0.11c-5.16-0.143-10.75-0.227-16.557-0.227
		C127.959,233.379,102.484,237.142,92.231,243.943z"/>
	<path d="M118.281,381.526l3.603-3.037l1.411,4.492c6.54,20.874,16.486,39.682,22.68,50.345
		c2.489-118.636,45.202-167.687,66.782-184.982c-5.857-0.689-11.123-2.882-15.401-6.163c-0.998-0.766-1.932-1.563-2.803-2.438
		c-0.815-0.812-1.639-1.635-2.338-2.528c-4.404,2.269-8.674,4.597-12.733,7.029c-3.18,1.899-6.255,3.839-9.225,5.818
		c-86.823,57.804-87.151,148.567-83.473,184.009C97.845,399.094,117.353,382.315,118.281,381.526z"/>
	<path d="M189.653,185.373c0.082-0.15,0.18-0.276,0.262-0.425c0.219-0.399,0.467-0.775,0.706-1.162
		c-0.323-0.181-0.653-0.353-0.974-0.533c-3.274-1.789-6.502-3.484-9.634-4.987c-6.091-2.917-11.91-5.298-17.444-7.243
		c-17.544-6.18-32.175-7.935-43.065-7.935c-11.227,0-20.526,1.911-27.625,4.714c-6.578,2.599-11.267,5.953-13.651,9.303
		c-1.82,2.561-2.349,5.001-1.563,7.256c1.751,5.029,3.503,11.208,5.174,17.59c3.258,12.469,6.124,25.656,7.749,33.528
		c0.156,0.766,0.336,1.635,0.471,2.284c0.689-0.396,1.571-0.741,2.346-1.118c1.806-0.881,3.833-1.699,6.071-2.452
		c13.904-4.685,36.085-7.095,66.602-7.095c0.848,0,1.655,0.006,2.497,0.014c2.373,0.008,4.695,0.032,6.971,0.074
		c4.601,0.068,8.938,0.187,12.946,0.329c-0.024-0.088-0.04-0.176-0.058-0.261c-0.242-1.092-0.287-2.23-0.375-3.358
		c-0.048-0.627-0.212-1.234-0.212-1.878v-25.513C186.844,192.518,187.888,188.773,189.653,185.373z"/>
	<path d="M299.917,165.518c60.717-52.535,99.985-61.688,122.819-59.232c6.993,0.74,12.544,2.561,17.084,4.673
		c-4.532-11.97-18.454-29.266-35.525-53.798C380.744,23.31,288.02,106.226,288.02,106.226l-10.736,69.258
		C285.235,171.351,292.8,168.079,299.917,165.518z"/>
	<path d="M440.602,122.412c0.481-1.1,0.689-2.306,0.75-3.579c-4.416-2.741-10.732-5.456-19.572-6.346
		c-20.222-2.016-54.232,5.767-106.57,48.354c12.175-3.047,22.646-4.045,31.002-4.045c16.146,0,28.145,3.471,36.239,8.055
		C402.644,158.595,435.757,133.566,440.602,122.412z"/>
	<path d="M462.006,292.5c4.432-10.255,1.334-29.146,3.618-53.311c2.545-26.857-48.574-34.582-75.367-36.79
		c-5.021,19.005-9.321,41.022-9.378,41.314l-0.389,1.992c0.312,1.395,0.421,2.284,0.429,2.416
		c43.36,8.136,70.278,20.935,78.854,37.954C460.912,288.317,461.553,290.449,462.006,292.5z"/>
	<path d="M456.412,298.88c0.12-2.889-0.385-6.348-2.309-10.103c-5.045-9.854-21.94-24.994-76.213-34.885
		c-4.132,4.232-11.605,6.328-22.714,6.328c-12.491,0-28.204-2.677-43.493-6.151c1.015,0.789,2.08,1.566,3.058,2.364
		c50.133,30.593,114.528,45.376,133.211,44.578C451.502,300.861,454.215,300.091,456.412,298.88z"/>
	<path d="M300.651,233.379c-5.811,0-11.397,0.092-16.559,0.227c-1.278,0.03-2.528,0.068-3.739,0.11
		c3.964,2.147,7.759,4.348,11.445,6.6c1.96,1.206,3.888,2.433,5.771,3.659c0.085,0.061,0.169,0.12,0.253,0.168
		c2.088,0.554,4.204,1.094,6.348,1.64c17.604,4.399,36.724,8.143,51.007,8.143c4.359,0,9.285-0.385,13.185-1.655
		c2.821-0.922,5.129-2.284,6.219-4.363c-0.048-0.269-0.107-0.605-0.184-0.994c-0.161-0.777-0.429-1.771-0.846-2.93
		C363.339,237.167,337.84,233.379,300.651,233.379z"/>
	<path d="M319.743,433.334c6.199-10.672,16.138-29.491,22.678-50.346l1.414-4.5l3.607,3.049
		c0.926,0.786,20.422,17.557,31.479,52.518c3.654-35.481,3.25-126.234-83.483-183.984c-2.965-1.988-6.039-3.92-9.221-5.812
		c-4.107-2.46-8.439-4.825-12.912-7.133c-0.757-0.389-1.522-0.781-2.292-1.17c-0.084,0.128-0.137,0.26-0.229,0.38
		c-0.657,0.922-1.435,1.76-2.216,2.609c-0.813,0.873-1.623,1.723-2.553,2.5c-3.755,3.143-8.396,5.427-13.577,6.517
		C273.874,264.881,317.234,313.752,319.743,433.334z"/>
	<path d="M376.135,235.473c1.627-7.875,4.484-21.061,7.75-33.53c1.671-6.382,3.435-12.553,5.174-17.59
		c0.785-2.254,0.264-4.695-1.563-7.255c-2.384-3.351-7.081-6.705-13.653-9.303c-7.089-2.801-16.398-4.715-27.623-4.715
		c-10.884,0-25.52,1.755-43.076,7.935c-5.533,1.948-11.345,4.328-17.432,7.244c-3.138,1.503-6.364,3.198-9.638,4.987
		c-1.15,0.637-2.301,1.232-3.475,1.909c1.827,3.455,2.938,7.275,2.938,11.351v25.513c0,0.982-0.213,1.908-0.321,2.859
		c-0.107,0.924-0.16,1.859-0.368,2.751c0.773-0.03,1.603-0.06,2.4-0.084c4.26-0.156,8.944-0.282,13.93-0.367
		c2.276-0.042,4.601-0.066,6.969-0.074c0.842,0,1.647-0.014,2.497-0.014c30.669,0,52.93,2.435,66.815,7.167
		c2.152,0.738,4.108,1.531,5.863,2.373c0.766,0.385,1.655,0.729,2.345,1.126C375.798,237.106,375.983,236.233,376.135,235.473z"/>
	<path d="M221.093,242.424h5.192h3.138h6.885h3.132h5.188h1.042c4.792,0,9.253-1.255,12.979-3.387
		c1.158-0.661,2.221-1.427,3.227-2.256c0.881-0.718,1.654-1.521,2.4-2.353c0.208-0.236,0.461-0.44,0.648-0.681
		c0.67-0.817,1.215-1.699,1.744-2.599c0.067-0.126,0.152-0.247,0.22-0.369c0-0.008,0.008-0.016,0.017-0.026
		c0.505-0.901,0.89-1.852,1.234-2.825c0-0.008,0.008-0.016,0.008-0.024c0.116-0.307,0.236-0.605,0.328-0.912
		c0.478-1.599,0.798-3.25,0.798-4.976v-25.513c0-2.907-0.733-5.663-2-8.165c-0.477-0.928-1.05-1.797-1.671-2.645
		c-0.068-0.104-0.124-0.21-0.192-0.314c-0.569-0.747-1.234-1.415-1.907-2.09c-4.332-4.366-10.68-7.189-17.842-7.189h-4.986h-15.631
		h-8.33c-6.468,0-12.325,2.269-16.595,5.929c-0.832,0.713-1.545,1.515-2.246,2.322c-0.299,0.345-0.621,0.675-0.894,1.036
		c-0.361,0.479-0.635,1.004-0.95,1.507c-1.797,2.882-2.913,6.118-2.913,9.61v25.513c0,1.311,0.172,2.583,0.449,3.821
		c0.148,0.671,0.407,1.296,0.629,1.939c0.132,0.403,0.264,0.802,0.429,1.192c0.08,0.185,0.118,0.381,0.198,0.553
		c0.234,0.5,0.525,0.974,0.797,1.458c0.15,0.259,0.315,0.503,0.479,0.751c0.427,0.671,0.817,1.338,1.318,1.956
		c0.158,0.198,0.357,0.365,0.523,0.551c0.014,0.016,0.03,0.032,0.038,0.04c0.249,0.291,0.525,0.555,0.802,0.84
		c0.854,0.872,1.773,1.669,2.785,2.414c1.108,0.806,2.292,1.52,3.559,2.148c3.438,1.691,7.364,2.741,11.591,2.741H221.093z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
      <h1 class="open">open your gift :)</h1>
      <input  class="input-data submit view-card" name="Submit" type="submit" value="View Card" class="Button3" id="view-card">
      <h1 class="merry">Merry Christmas!</h1>
      
      <!-- Present -->
      <div class="box" id="box">
          <!-- Box lid -->
          <div class="b1"></div>
          <div class="b2"></div>

          <!-- Ribbon -->
          <div class="horizontal"></div>
          <div class="vertical"></div>
      </div><!-- End box -->
      
    
      <!-- Animals -->
      <!-- Source: https://dev.to/benpai/cute-css-animals-igp -->
      <div class="animals" id="animals">

        <!-- Bear -->
        <div class="animal bear">
            <div class="hat"></div>
            <div class="top"></div>
            <div class="fluff"></div>
            <div class="eye1"></div>
            <div class="eye2"></div>
            <div class="mouth"></div>
            <div class="hand1"></div>
            <div class="hand2"></div>
          </div>
          
          <!-- Pig -->
          <div class="animal pig">
            <div class="hat"></div>
            <div class="top"></div>
            <div class="fluff"></div>
            <div class="eye1"></div>
            <div class="eye2"></div>
            <div class="mouth"></div>
            <div class="hand1"></div>
            <div class="hand2"></div>
          </div>
          
          <!-- Panda -->
          <div class="animal panda">
            <div class="hat"></div>
            <div class="top"></div>
            <div class="fluff"></div>
            <div class="eye1"></div>
            <div class="eye2"></div>
            <div class="nose">
              <div class="mouth"></div>
            </div>
            <div class="hand1"></div>
            <div class="hand2"></div>
          </div>
          
          <!-- Mouse -->
          <div class="animal mouse">
            <div class="hat"></div>
            <div class="top"></div>
            <div class="fluff"></div>
            <div class="eye1"></div>
            <div class="eye2"></div>
            <div class="face"></div>
            <div class="nose">
              <div class="mouth"></div>
            </div>
            <div class="whiskers1"></div>
            <div class="whiskers2"></div>
            <div class="hand1"></div>
            <div class="hand2"></div>
          </div>
      </div><!-- end animals -->

    <!-- Christmas Card -->
    <div class="card" id="card">
      <div class="upper-half"></div>
      <div class="bottom-half"></div>
      <div class="message">
        <?php echo $message?>
      </div>
      <p class="close" id="close">x</p>
    </div>

    </div><!-- end container -->


    <!-- Snowflakes -->
    <!-- Source: https://codepen.io/codeconvey/pen/xRzQay -->
    <div class="snowflakes" aria-hidden="true">
      <div class="snowflake">
      ❅
      </div>
      <div class="snowflake">
      ❅
      </div>
      <div class="snowflake">
      ❆
      </div>
      <div class="snowflake">
      ❄
      </div>
      <div class="snowflake">
      ❅
      </div>
      <div class="snowflake">
      ❆
      </div>
      <div class="snowflake">
      ❄
      </div>
      <div class="snowflake">
      ❅
      </div>
      <div class="snowflake">
      ❆
      </div>
      <div class="snowflake">
      ❄
      </div>
    </div>

<?php