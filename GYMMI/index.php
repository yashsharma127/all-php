<DOCTYPE html>
  <html lang="en">
    <head>
      <title>GYMMI INDIA </title>
      <link rel="stylesheet" href="style.css" />
    
    </head>
        <body>
          <header>
            <nav class="navbar">
              <div class="navbar_netflix">
                <img src="logo.png" alt="logo" class="netflix_logo" />
              </div>
              <div class="navbar_nav_items">
                <div class="nav_item">
                  <div class="dropdown_container">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <select
                      name="Languages"
                      id="LanguagesSelect"
                      class="Language_drop_down"
                    >
                      <option value="english" selected>English</option>
                      <option value="hindi">Hindi</option>
                    </select>
                  </div>
                </div>
                <div class="nav_item">
                  <button class="signin_button">Log Out</button>
                </div>
              </div>
            </nav>
          </header>
          <main>
            <section class="hero">
            <!-- <div class="vd">
            <video id="video1" autoplay="" playsinline="" muted="" loop=""
              <source src="bgvideo.webm" type="video/webm" />
            </video>
          </div> -->
              <div class="hero_bg_image_container">
                <img
                  src="./images/back.png"
                  alt="Background Image"
                  class="hero_bg_image"
                />
              </div>
              <div class="hero_bg_overlay"></div>
              <div class="hero_card">
                <h1 class="hero_title">
                GYMMI
                </h1>
                <br />
                <p class="hero_description">
                  <nobr
                    >MARK YOUR GYM ATTENDANCE HERE.</nobr
                  ><br /><br />
                    <button type="submit" name="addattendance" class="get_started" value="add" onclick="getTimeStamp();">Mark Me Present</button>
                </p>
              </div>
              
            </section>
       
           
        
        </body>
  </html>
</DOCTYPE>
