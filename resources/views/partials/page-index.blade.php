<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery(window).scroll(function() {
      if (jQuery('body').height() <= (jQuery(window).height() + jQuery(window).scrollTop())) {
        jQuery('.floating-apply').hide();
      } else {
        jQuery(".floating-apply").show();
      }
    });
  });
</script>

<div class="floating-apply web-apply">
  <a href="<?php echo esc_url( home_url( '/apply' ) ); ?>" class="btn btn-secondary">
    APPLY FOR TICKETS
  </a>
</div>

<div class="floating-apply mobile-apply d-lg-none">
  <a href="<?php echo esc_url( home_url( '/apply' ) ); ?>" class="btn btn-secondary btn-block">
    APPLY FOR TICKETS
  </a>
</div>

<div class="hero bg-dark text-primary py-5 text-center">

  <div class="container">
    <div class="py-4">
      <div class="hands-hero mb-4">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/hands.png" width="150" />
      </div>
      <h1>
        TULUM
      </h1>
      <h3>8 & 12 JANUARY 2019</h3>
      <h5 class="text-uppercase">Sian Ka‘an, TULUM</h5>
    </div>
    <div class="row justify-content-center">    
      <div class="py-4 col-10">
        <p class="lead text-uppercase">
          In the recent decade, the mesoamerican reef has experienced a density loss of 75% endangering  hundreds of marine species.
        </p>
        <p class="lead text-uppercase">
          For this edition, Y’am is partnering with <a href="http://www.restorecoral.org/" class="text-secondary">restore coral</a> an organization that creates, maintains and multiplies coral farms for the restoration of damaged reefs.
        </p>
      </div>
    </div>
    <div class="embed-responsive embed-responsive-16by9 my-5">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Uo_r_bY-6K0?autoplay=1&mute=1&rel=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="embed-responsive-item"></iframe>
    </div>
  </div>

</div>

<div class="venue bg-dark text-primary pb-5 text-center">

  <div class="container">
    <div class="py-5">
      <h2 class="mb-5 text-uppercase">The Venue</h2>
      <p class="text-uppercase">
        A stunning beach front villa inside the biosphere reserve of Sian Ka’an, a mile north of Boca Paila bridge and 20 mins away from Tulum; the Caribbean beach-front brings you to a rich coral reef at swimming distance and the lagoon front goes directly to ancient Mayan canals, one of the most spectacular and exclusive places on earth!.
      </p>
      <p class="text-uppercase">      
        The Villa also sets new standards of sustainability and it is completely auto sufficient - sun, wind power and a very silent backup generator - zero carbon property, but with all the modern comforts.
      </p>
      <p class="text-uppercase">
        An ultimate villa in the Mexican Caribbean!
      </p>
    </div>
  </div>
  <div class="container-fluid p-lg-5">
    <div class="row no-gutters align-items-center px-4">
      <div class="col-md-6 mb-4">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/venue/1.jpg" class="img-fluid" />
      </div>
      <div class="col-md-6 mb-4">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/venue/2.jpg" class="img-fluid" />
      </div>
      <div class="col-md-6 mb-4">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/venue/3.jpg" class="img-fluid" />
      </div>
      <div class="col-md-6 mb-4">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/venue/4.jpg" class="img-fluid" />
      </div>
    </div>
  </div>

</div>

<div class="experience bg-dark text-primary pb-5 text-center">

  <div class="hands-container">
    <div class="hands">
      <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/hands.png" width="800" class="img-fluid" />
    </div>
    <div class="line-up-container">
      <div class="line-up d-flex flex-column justify-content-center">        
        <h2>LINEUP</h2>
      </div>     
    </div>
  </div>

  <div class="container">  
    <div class="line-up row">

      <a class="col-4" href="https://soundcloud.com/solselectas">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/SABO.png" class="img-fluid" />
        <h4 class="text-primary">SABO</h4>
        <p class="text-primary">Sol Selectas</p>
      </a>

      <a class="col-4" href="https://soundcloud.com/seth-schwarz">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/SETH.png" class="img-fluid" />
        <h4 class="text-primary">SETH SCHWARZ</h4>
        <p class="text-primary">Bar 25 / Katermukke</p>
      </a>

      <a class="col-4" href="https://soundcloud.com/valentinhuedo">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/VALENTIN.png" class="img-fluid" />
        <h4 class="text-primary">VALENTIN HUEDO</h4>
        <p class="text-primary">WooMoon Ibiza / IBIZA SONICA</p>
      </a>

      <a class="col-4 mb-3">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/GANADAIA.png" class="img-fluid" />
        <h4 class="text-primary">GANDAIA</h4>
        <p class="text-primary">ILS / Mayan Warrior</p>
      </a>

      <a class="col-4 mb-3" href="https://soundcloud.com/ilonalica">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/LICA.png" class="img-fluid" />
        <h4 class="text-primary">LICA</h4>
        <p class="text-primary">Scorpios Mykonos</p>
      </a>

      <a class="col-4 mb-3" href="https://soundcloud.com/malin-linnea">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/MALIN.png" class="img-fluid" />
        <h4 class="text-primary">MALIN</h4>
        <p class="text-primary">Scorpios Mykonos</p>
      </a>

      <a class="col-4 mb-3" href="https://soundcloud.com/carla-frayman">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/CARLITA.png" class="img-fluid" />
        <h4 class="text-primary">CARLITA</h4>
        <p class="text-primary">Bespoke Musik / Cosmic Awakenings</p>
      </a>

      <a class="col-4 mb-3" href="https://soundcloud.com/sora-paris">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/SORA.png" class="img-fluid" />
        <h4 class="text-primary">SORA</h4>
        <p class="text-primary">Horde / Crossings</p>
      </a>

      <a class="col-4 mb-3" href="https://soundcloud.com/2kuumba">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/KUUMBA.png" class="img-fluid" />
        <h4 class="text-primary">KUUMBA</h4>
        <p class="text-primary">Criminal Music</p>
      </a>

      <a class="col-4 mb-3" href="https://soundcloud.com/mendrixmusic">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/MENDRIX.png" class="img-fluid" />
        <h4 class="text-primary">MENDRIX</h4>
        <p class="text-primary">Calypso / Mayan Warrior</p>
      </a>

      <a class="col-4 mb-3" href="https://www.instagram.com/alejandroglatt/">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/GLATT.png" class="img-fluid" />
        <h4 class="text-primary">Alejandro Glatt</h4>
        <p class="text-primary">YAM</p>
      </a>

      <a class="col-4 mb-3" href="https://soundcloud.com/isiaudi">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/ISIAUDI.png" class="img-fluid" />
        <h4 class="text-primary">ISI AUDI</h4>
        <p class="text-primary">YAM</p>
      </a>

    </div>
  </div>

  <div class="container">
    <div class="pt-5">
      <h2 class="text-uppercase">The Experience</h2>
    </div>

    <div class="row no-gutters align-items-center my-5 pb-5">
      <div class="col-md-6 order-lg-2">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/coral-farming.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card left-card"> 
          <div class="card-body">
            <h4>CORAL FARMING</h4>
            <p class="lead-text-uppercase">
              ALL THE CORALS DONATIONS (INCLUDED IN EVERY TICKET) WILL BE PLANTED IN COZUMEL, MEXICO BY THE YAM DIVER BRIGADE, LOOKING FOR VOLUNTEERS! 
            </p>
          </div>       
        </div>
      </div>
    </div>

    <div class="row no-gutters align-items-center my-5 pb-5">
      <div class="col-md-5">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/vr-diving.png" class="img-fluid" />
      </div>
      <div class="col-md-7 text-left">
        <div class="card right-card"> 
          <div class="card-body">
            <h4>VR DIVING</h4>
            <p class="lead-text-uppercase">
              Virtual reality immersive experience 
              <br><br>
              - sensitize the public about the need to protect coral reefs. 
              <br><br>
              - learn and discus about how to increase sustainable ocean related activities  
            </p>
          </div>       
        </div>
      </div>
    </div>

    <div class="row no-gutters align-items-center my-5 pb-5">
      <div class="left-card col-md-6">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/HAVDALAH.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card right-card"> 
          <div class="card-body">
            <h4>MANGLAR SHABAT</h4>
            <p class="lead-text-uppercase">
              LOCATED IN AN AMAZING MANGLAR, 100M FROM CASA MALCA, THE CELEBRATION OF MOTZE SHABAT (END), A DECLARATION OF THE INTENTION TO END SHABAT AND START A NEW CYCLE
            </p>
            <p>
              The Havdalah (Separation) ceremony is a multi-sensory ritual employing our faculties of speech, hearing, sight, smell and taste to define the boundaries that God set in creation “between the sacred and the everyday.”
            </p>
            <p>
            Havdalah is done after nightfall on Saturday evening, which is when Shabbat ends. “Nightfall” is the point at which is grows dark enough for three medium-sized stars to become visible. Because making Havdalah involves actions that are forbidden on Shabbat.
            </p>
          </div>       
        </div>
      </div>
    </div>


    <div class="row no-gutters align-items-center my-5 pb-5">
      <div class="col-md-6 order-lg-2">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/chasing-coral.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card left-card"> 
          <div class="card-body">
            <h4>CHASING CORAL SCREENING</h4>
            <p class="lead-text-uppercase">
              OUTDOOR CINEMA SCREENING THE DOCUMENTAL ABOUT THE CORAL SITUATION AND HOW TO TREAT IT.
            <br><br>
              - FILMED BY <a href="https://www.imdb.com/name/nm2341611/?ref_=tt_ov_dr">Jeff Orlowski.</a>
            <br><br>
              - SCREENING IN LOOP ALL NIGHT LONG.
            </p>
          </div>       
        </div>
      </div>
    </div>

    <div class="row no-gutters align-items-center my-5 pb-5">
      <div class="left-card col-md-6">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/adopt-a-reef.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card right-card"> 
          <div class="card-body">
            <h4>ADOPT A REEF</h4>
            <p class="lead-text-uppercase">
              Every yam tulum ticket, will come with a personalized certificate of coral adoption.
            <br><br>
              - The adoption of corals helps the restoration of the reefs in mexico to encourage the increase of coral reefs.
            </p>
          </div>       
        </div>
      </div>
    </div>

    <div class="row no-gutters align-items-center my-5 pb-5">
      <div class="col-md-6 order-lg-2">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/fruit-healing.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card left-card"> 
          <div class="card-body">
            <h4>FRUIT HEALING</h4>
            <p class="lead-text-uppercase">
              Smell, peel and feel: Find your inner spirit trough fruit flavors, colors and textures. Let yourself go and experience this interactive and immersive experience. Let’s get fruity!
            </p>
          </div>       
        </div>
      </div>
    </div>

    <div class="row no-gutters align-items-center my-5 pb-5">
      <div class="left-card col-md-6">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/kinky-school.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card right-card"> 
          <div class="card-body">
            <h4>KINKY SCHOOL</h4>
            <p class="lead-text-uppercase">
              Everything you always wanted to know but were afraid to ask.
            </p>
          </div>       
        </div>
      </div>
    </div>

    <div class="row no-gutters align-items-center my-5 pb-5">
      <div class="col-md-6 order-lg-2">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/pulque-bombs.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card left-card"> 
          <div class="card-body">
            <h4>PULQUE BOMBS</h4>
            <p class="lead-text-uppercase">
              Experience PULQUE: an alcoholic beverage made from the fermented sap of the maguey (agave) plant. It has the color of milk, somewhat viscous consistency and a sour yeast-like taste.
            </p>
          </div>       
        </div>
      </div>
    </div>

    <div class="row no-gutters align-items-center my-5 pb-5">
      <div class="left-card col-md-6">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/flavia-eberhard.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card right-card"> 
          <div class="card-body">
            <h4>BREATH EMPOWERMENT by Flavia Eberhard</h4>
            <p class="lead-text-uppercase">
              Flavia will take you into a journey of self-discovery trough mindfulness and the power of your own breath that will change the way you perceive yourself.
            </p>
            <p class="lead-text-uppercase">
              In this workshop Flavia invites you to experience what happens within your physical body that allows you to hold your breath for longer period of times but also, and more importantly, what can be done at your conscious level in other to increase your self-confidence and sensibility, so you can become more present and fulfilled.
            </p>
          </div>       
        </div>
      </div>
    </div>

    <div class="row no-gutters align-items-center my-5 pb-5">
      <div class="col-md-6 order-lg-2">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/hot-mezcal.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card left-card"> 
          <div class="card-body">
            <h4>HOT MEZCAL</h4>
            <p class="lead-text-uppercase">
              Feel the fire in your throat, while drinking mezcal in a unique way. Open your heart to receive the god’s drink.
            </p>
          </div>       
        </div>
      </div>
    </div>

    <div class="py-5">
      <div class="card">
        <div class="card-body">
          <h2>APPLY FOR TICKETS</h2>
          <p>Admisions open, send your application now…</p>
          <div class="py-3">
            <a href="<?php echo esc_url( home_url( '/apply' ) ); ?>" class="btn btn-secondary btn-lg">
              APPLY FOR TICKETS
            </a>
          </div>
        </div>
      </div>
      <div class="py-5">
        <a href="https://criminal.com.mx/" target="_blank">
          <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/criminal-logo.png" width="143" class="img-fluid" />
        </a>
      </div>
    </div>

</div>

