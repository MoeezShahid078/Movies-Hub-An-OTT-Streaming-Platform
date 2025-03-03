<html>
  <head>
    <meta name="description" content="Hello this is my first web page!." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link data-asynced="1" as="style" onload="this.onload=null;this.rel='stylesheet'"  rel="preload" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Moovies Hub - Watch TV Shows Online, Watch Movies Online</title>
    <link rel="icon" href="img/title logo.png"  type="image/x-icon" />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="navbar__brand">
          <img data-lazyloaded="1" src="img/logo.png" width="2308" height="684" 
            alt="logo"
            class="brand__logo"
          />
        </div>

        <div class="navbar__nav__items">
          <div class="nav__item">
            <div class="dropdown__container">
              <i class="fas fa-globe"></i>
              <select
                name="languages"
                id="languagesSelect"
                class="language__drop__down"
              >
                <option value="english" selected style="color:white;">English</option>
                <option value="urdu" style="color: white;">اردو</option>
              </select>
            </div>
          </div>

          <div class="nav__item">
            <a href="login.php" ><button class="signin__button">Log in</button></a>
          </div>
          <div class="nav__item">
            <a href="admin_login.php" ><button class="signin__button">Admin</button></a>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section class="hero">
        <div class="hero__bg__image__container">
          <img data-lazyloaded="1" src="img/background.jpg" width="2000" height="1125" 
            alt="BG hero image"
            class="hero__bg__image"
          />
        </div>
        <div class="hero__bg__overlay"></div>

        <div class="hero__card">
          <h1 class="hero__title">
            Unlimited Movies TV,<br />
            Shows and More.
          </h1>
          <p class="hero__subtitle">Watch anywhere and cancel anytime.</p>
          <p class="hero__description">
            Ready to watch? Enter your email to create or restart your
            membership .
          </p>

          <div class="email__form__container">
            <div class="form__container">
              <input type="email" class="email__input" placeholder=" " required>
              <label class="email__label">Email Address</label>
            </div>
             <a href="signup.php"> <button class="primary__button" > Get Started  <i class="fal fa-chevron-right"></i> </button> </a>
          </div>
        </div>
      </section>
      <section class="features__container">

        <div class="feature">
          <div class="feature__details">
            <h3 class="feature__title">Enjoy on your TV.</h3>
            <h5 class="feature__sub__title">
              Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV,
              Blu-ray players and more.
            </h5>
          </div>
          <div class="feature__image__container">
            <img data-lazyloaded="1" src="img/tv.png" width="640" height="480"
              alt="Feature image"
              class="feature__image"
            />
            <div class="feature__backgroud__video__container">
              <video
                autoplay=""
                loop=""
                muted=""
                class="feature__backgroud__video"
              >
                <source
                  src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-tv-in-0819.m4v"
                  type="video/mp4"
                />
              </video>
            </div>
          </div>
        </div>

        <div class="feature">
          <div class="feature__details">
            <h3 class="feature__title">
              Download your shows to watch offline.
            </h3>
            <h5 class="feature__sub__title">
              Save your favourites easily and always have something to watch.
            </h5>
          </div>
          <div class="feature__image__container">
            <img data-lazyloaded="1" src="img/downloads.jpg" width="640" height="480"
              alt="Feature image"
              class="feature__image"
            />
            <div class="feature__2__poster__container">
              <div class="poster__container">
                <img data-lazyloaded="1" src="img/strangerthings 1.jpg" width="150" height="210"
                  alt="poster"
                  class="poster"
                />
              </div>
              <div class="poster__details">
                <h4>Stranger Things</h4>
                <h6>Downloading...</h6>
              </div>
              <div class="download__gif__container">
                <img data-lazyloaded="1" src="img/download-icon.gif" width="100" height="100"
                  alt="downloading gif"
                  class="gif"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="feature">
          <div class="feature__details">
            <h3 class="feature__title">Watch everywhere.</h3>
            <h5 class="feature__sub__title">
              Stream unlimited movies and TV shows on your phone, tablet,
              laptop, and TV.
            </h5>
          </div>
          <div class="feature__image__container feature__3__image__container">
            <img data-lazyloaded="1" src="img/watchevery 3.png" width="640" height="480"
              alt="Feature image"
              class="feature__image feature__3__image"
            />
            <div
              class="feature__backgroud__video__container feature__3__backgroud__video__container"
            >
              <video
                autoplay=""
                loop=""
                muted=""
                class="feature__backgroud__video feature__3__backgroud__video"
              >
                <source
                  src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-devices-in.m4v"
                  type="video/mp4"
                />
              </video>
            </div>
          </div>
        </div>

        <div class="feature">
          <div class="feature__details">
            <h3 class="feature__title">Create profiles for children.</h3>
            <h5 class="feature__sub__title">
              Send children on adventures with their favourite characters in a
              space made just for them—free with your membership.
            </h5>
          </div>
          <div class="feature__image__container">
            <img data-lazyloaded="1" src="img/create children.jpg" width="640" height="480"
              alt="Feature image"
              class="feature__image"
            />
          </div>
        </div>
      </section>
      <section class="FAQ__list__container">
        <h1 class="FAQ__heading">Frequently Asked Questions</h1>
        <div class="FAQ__list">
          <div class="FAQ__accordian">
            <button class="FAQ__title">
              What is Moovies Hub?<i class="fal fa-plus"></i>
            </button>
            <div class="FAQ__visible">
              <p>
                Moovies Hub is a streaming service that offers a wide variety of
                award-winning TV shows, movies, anime, documentaries and more –
                on thousands of internet-connected devices.
              </p>
              <p>
                You can watch as much as you want, whenever you want, without a
                single ad – all for one low monthly price. There's always
                something new to discover, and new TV shows and movies are added
                every week!
              </p>
            </div>
          </div>
          <div class="FAQ__accordian">
            <button class="FAQ__title">
              How much does Moovies Hub cost?<i class="fal fa-plus"></i>
            </button>
            <div class="FAQ__visible">
              <p>
                Watch on your smartphone, tablet, Smart TV, laptop, or
                streaming device, all for one fixed monthly fee. Plans range
                from $ 59 to $ 99 a month. No extra costs, no contracts.
              </p>
            </div>
          </div>
          <div class="FAQ__accordian">
            <button class="FAQ__title">
              Where can i watch?<i class="fal fa-plus"></i>
            </button>
            <div class="FAQ__visible">
              <p>
                Watch anywhere, anytime, on an unlimited number of devices. Sign
                in with your Moovies Hub account to watch instantly on the web at
                Moovies Hub.com from your personal computer or on any
                internet-connected device that offers the Moovies Hub app, including
                smart TVs, smartphones, tablets, streaming media players and
                game consoles.
              </p>
              <p>
                You can also download your favourite shows with the iOS,
                Android, or Windows 10 app. Use downloads to watch while you're
                on the go and without an internet connection. Take Moovies Hub with
                you anywhere.
              </p>
            </div>
          </div>
          <div class="FAQ__accordian">
            <button class="FAQ__title">
              How do I cancel?<i class="fal fa-plus"></i>
            </button>
            <div class="FAQ__visible">
              <p>
                Moovies Hub is flexible. There are no annoying contracts and no
                commitments. You can easily cancel your account online in two
                clicks. There are no cancellation fees – start or stop your
                account anytime.
              </p>
            </div>
          </div>
          <div class="FAQ__accordian">
            <button class="FAQ__title">
              What can I watch from Moovies Hub?<i class="fal fa-plus"></i>
            </button>
            <div class="FAQ__visible">
              <p>
                Moovies Hub has an extensive library of feature films,
                documentaries, TV shows, anime, award-winning Moovies Hub originals,
                and more. Watch as much as you want, anytime you want.
              </p>
            </div>
          </div>
          <div class="FAQ__accordian">
            <button class="FAQ__title">
              Is Moovies Hub good for kids?<i class="fal fa-plus"></i>
            </button>
            <div class="FAQ__visible">
              <p>
                The Moovies Hub Kids experience is included in your membership to
                give parents control while kids enjoy family-friendly TV shows
                and films in their own space.
              </p>
              <p>
                Kids profiles come with PIN-protected parental controls that let
                you restrict the maturity rating of content kids can watch and
                block specific titles you don’t want kids to see.
              </p>
            </div>
          </div>
        </div>
        <div class="FAQ__get__started__email">
          <h3>
            Ready to watch? Enter your email to create or restart your
            membership.
          </h3>
          <div class="email__form__container">
            <div class="form__container">
              <input type="email" class="email__input" placeholder=" " />
              <label class="email__label">Email Address</label>
            </div>
            <a href="signup.php"><button class="primary__button">
              Get Started <i class="fal fa-chevron-right"></i>  
            </button></a>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="footer__row__1">
        <h4>Questions? Call 000-000-000-0000</h4>
      </div>
      <div class="footer__row__2">
        <div class="column__1">
          <p>FAQ</p>
          <p>Investor Relations</p>
          <p>Privacy</p>
          <p>Speed Test</p>
        </div>
        <div class="column__2">
          <p>Help Centre</p>
          <p>Jobs</p>
          <p>Cookie Preferences</p>
          <p>Legal Notices</p>
        </div>
        <div class="column__3">
          <p>Account</p>
          <p>Ways to Watch</p>
          <p>Corporate Information</p>
          <p>Only on Moovies Hub</p>
        </div>
        <div class="column__4">
          <p>Media Centre</p>
          <p>Terms of Use</p>
          <p>Contact Us</p>
        </div>
      </div>
      <div class="footer__row__3">
        <div class="dropdown__container">
          <i class="fas fa-globe"></i>
          <select
            name="languages"
            id="languagesSelect"
            class="language__drop__down"
          >
            <option value="english" selected>English</option>
            <option value="urdu">اردو</option>
          </select>
        </div>
      </div>
      <div class="footer__row__4">
        <p>Moovies Hub</p>
      </div>

</html>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    background-color: black;
    color: white;
    font-family: "Poppins", sans-serif;
  }
  
  .navbar {
    position: absolute;
    top: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 3% 5%;
    z-index: 10;
  }
  
  .navbar__brand {
    width: 100px;
    height: 100%;
  }
  
  .brand__logo {
    width: 130%;
    height: 130%;
  }
  
  .language__drop__down {
    background: transparent;
    border: none;
    color: white;
  }
  
  .language__drop__down:focus {
    outline: none;
  }
  
  .language__drop__down option {
    background-color:black;
  }
  
  .dropdown__container {
    border: 1px solid white;
    padding: 0.4rem;
    border-radius: 4px;
    background: rgba(0, 0, 0, 0.4);
  }
  
  .signin__button {
    background-color: #8903dc;
    border: 1px solid #8903dc;
    color: white;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
  }
  
  .navbar__nav__items {
    display: flex;
    gap: 10px;
  }
  
  .hero__bg__image__container {
    width: 100%;
    height: 80vh;
  }
  
  .hero__bg__image {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .hero__bg__overlay {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 80vh;
    background: rgba(0, 0, 0, 0.4);
    background-image: linear-gradient(
      to top,
      rgba(0, 0, 0, 0.8) 0,
      rgba(0, 0, 0, 0) 60%,
      rgba(0, 0, 0, 0.8) 100%
    );
  }
  
  .hero__card {
    position: absolute;
    top: 20%;
    text-align: center;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  
  .hero__title {
    font-weight: 600;
    font-size: 2rem;
  }
  
  .hero__subtitle,
  .hero__description {
    font-weight: 400;
    font-size: 1rem;
  }
  
  .hero__description {
    margin: 0 50px;
  }
  
  .email__input {
    border: none;
    background: transparent;
    width: 100%;
    height: 100%;
    padding-left: 7px;
  }
  .email__label {
    color: black;
    position: absolute;
    top: 28%;
    left: 2%;
    color: rgb(153, 149, 149);
    transition: 0.5s;
  }
  
  .email__form__container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 15px;
  }
  
  .form__container {
    background-color: white;
    width: 90%;
    height: 50px;
    position: relative;
  }
  
  .email__input:focus + .email__label {
    top: 0.2rem;
    font-size: 10px;
  }
  
  .email__input:not(:placeholder-shown).email__input:not(:focus) + .email__label {
    top: 0.2rem;
    font-size: 10px;
  }
  
  .email__input:focus-visible {
    outline: none;
  }
  
  .primary__button {
    background-color: #8903dc;
    border: 1px solid #8903dc;
    color: white;
    padding: 0.8rem 1.2rem;
    border-radius: 2px;
    font-size: 15px;
    letter-spacing: 1px;
  }
  
  .feature {
    border-top: 8px solid #222;
    padding: 2rem 1rem;
  }
  
  .feature__details {
    text-align: center;
  }
  
  .feature__title {
    font-size: 25px;
    font-weight: 600;
    margin: 10px 0;
  }
  
  .feature__sub__title {
    font-size: 15px;
    font-weight: 400;
  }
  
  .feature__image__container {
    width: 100%;
    position: relative;
  }
  .feature__image {
    width: 100%;
  }
  
  .feature__backgroud__video__container {
    position: absolute;
    width: 100%;
    top: 20%;
    left: 13%;
    height: 100%;
    max-width: 73%;
    max-height: 54%;
    z-index: -2;
  }
  
  .feature__backgroud__video {
    width: 100%;
  }
  
  .feature__2__poster__container {
    position: absolute;
    bottom: 8%;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    max-width: 16em;
    display: flex;
    align-items: center;
    background-color: black;
    border: 2px solid rgba(255, 255, 255, 0.25);
    border-radius: 10px;
    height: 60px;
    padding: 0.25rem 0.6rem;
    gap: 15px;
  }
  
  .poster__container {
    width: 20%;
  }
  
  .poster {
    width: 100%;
    height: 100%;
  }
  .poster__details {
    width: 60%;
  }
  .poster__details > h4 {
    font-size: 13px;
    font-weight: 500;
  }
  .poster__details > h6 {
    font-size: 12px;
    font-weight: 400;
    color: rgb(63, 63, 246);
  }
  
  .download__gif__container {
    width: 20%;
    height: 100%;
  }
  .gif {
    width: 100%;
    height: 100%;
  }
  
  .feature__3__backgroud__video__container {
    max-width: 63%;
    max-height: 47%;
    z-index: -2;
    top: 9%;
    left: 19%;
  }
  
  .FAQ__accordian {
    width: 100%;
  }
  .FAQ__title {
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 15px 20px;
    font-size: 18px;
    background-color: #303030;
    border: 1px solid #303030;
    color: white;
  }
  
  .FAQ__visible {
    background-color: #303030;
    border-top: 1px solid black;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease-in-out;
  }
  
  .FAQ__visible > p {
    margin: 1rem;
  }
  .FAQ__list__container {
    border-top: 8px solid #222;
    padding: 2rem 0;
  }
  .FAQ__heading {
    font-size: 20px;
    text-align: center;
    font-weight: 600;
    margin: 1rem 3rem;
  }
  
  .FAQ__list {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 10px;
  }
  
  .FAQ__get__started__email {
    text-align: center;
  }
  
  .FAQ__get__started__email > h3 {
    font-size: 18px;
    font-weight: 400;
    margin: 2rem 0;
  }
  
  footer {
    border-top: 8px solid #333;
    padding: 2rem 1rem;
    color: #757575;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }
  
  .footer__row__2 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 20px;
  }
  
  .footer__row__1 > h4 {
    font-size: 15px;
    font-weight: 500;
  }
  
  .footer__row__3 > .dropdown__container {
    width: fit-content;
    border: 1px solid #757575;
    color: #757575;
  }
  
  .footer__row__3 > .dropdown__container > .language__drop__down {
    color: #757575;
  }
  
  @media (min-width: 768px) {
    .hero__bg__image__container {
      height: 100vh;
    }
  
    .hero__bg__overlay {
      height: 100vh;
    }
    .hero__card {
      top: 40%;
      left: 30%;
      transform: translate(-20%, -20%);
    }
    .hero__title {
      font-size: 3rem;
    }
    .hero__subtitle,
    .hero__description {
      font-size: 1.3rem;
    }
  
    .feature {
      padding: 4rem;
    }
  
    .feature__title {
      font-size: 35px;
    }
  
    .feature__sub__title {
      font-size: 20px;
    }
    .feature__2__poster__container {
      max-width: 26em;
      height: 85px;
    }
    .poster__container {
      width: 15%;
    }
    .download__gif__container {
      width: 3rem;
      height: 3rem;
    }
  
    .poster__details > h4 {
      font-size: 18px;
    }
    .poster__details > h6 {
      font-size: 14px;
    }
    .FAQ__title {
      font-size: 20px;
    }
    .FAQ__heading {
      font-size: 38px;
      font-weight: 500;
      letter-spacing: 1px;
    }
    .FAQ__list {
      padding: 1rem 5rem;
    }
    .FAQ__get__started__email {
      width: 75%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      transform: translateX(15%);
    }
  }
  
  @media (min-width: 1024px) {
    .navbar {
      padding: 2% 5%;
    }
  
    .navbar__brand {
      width: 150px;
    }
  
    .signin__button {
      padding: 10px 20px;
      font-size: 18px;
    }
    .dropdown__container {
      padding: 10px 5px;
    }
  
    .navbar__nav__items {
      gap: 30px;
    }
  
    .hero__card {
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  
    .form__container {
      width: 50%;
    }
    .email__form__container {
      flex-direction: row;
      align-items: center;
      gap: 1px;
    }
    .primary__button {
      height: 50px;
    }
  
    .feature {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
    }
  
    .feature__details {
      text-align: left;
      padding: 0 6rem;
    }
  
    .feature__title {
      font-size: 50px;
    }
  
    .feature__sub__title {
      font-size: 25px;
    }
  
    .feature__image__container {
      max-width: 500px;
    }
  
    .feature:nth-child(even) {
      flex-direction: row-reverse;
    }
  
    .feature__2__poster__container {
      max-width: 20em;
      height: 100px;
      padding: 1rem;
    }
    .poster__container {
      width: 20%;
    }
    .FAQ__list {
      padding: 1rem 25rem;
    }
    .FAQ__get__started__email {
      transform: translateX(16%);
    }
    footer {
      padding: 2rem 20rem;
      justify-content: flex-start;
      text-align: left;
      align-items: flex-start;
    }
  
    .footer__row__2 {
      justify-content: space-between;
      align-items: flex-start;
      flex-wrap: nowrap;
    }
  
    .footer__row__1,
    .footer__row__3,
    .footer__row__4 {
      align-self: flex-start;
    }
  }
  
  @media (min-width: 1254px) {
  }
  </style>