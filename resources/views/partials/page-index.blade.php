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
      <h4>8 & 12 JANUARY 2019</h4>
      <h5 class="text-uppercase">HABITAS, TULUM</h5>
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
    <div class="p-5">
      <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup.jpg" class="img-fluid" />
    </div>
  </div>

</div>

<div class="venue bg-dark text-primary pb-5 text-center">

  <div class="container">
    <div class="py-5">
      <h2 class="mb-5 text-uppercase">The Venue</h2>
      <p class="text-uppercase">
        Habitas Tulum sets the standard for laidback luxury.
      </p>
      <p class="text-uppercase">
        White sand and rich turquoise water. A private beach that offers complete seclusion to unwind and discover the restorative power of the Caribbean waters.
      </p>
      <p class="text-uppercase">      
        Through panels, action-based events and sensory musical experiences, HABITAS, seeks to shift the consciousness of our community through the adoption of sustainable practices in our everyday life. 
      </p>
    </div>
  </div>
  <div class="container-fluid p-lg-5">
    <div class="row align-items-center px-4">
      <div class="col-sm-6 col-lg-3 mb-4">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/venue/1.png" class="img-fluid" />
      </div>
      <div class="col-sm-6 col-lg-3 mb-4">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/venue/2.png" class="img-fluid" />
      </div>
      <div class="col-sm-6 col-lg-3 mb-4">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/venue/3.png" class="img-fluid" />
      </div>
      <div class="col-sm-6 col-lg-3 mb-4">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/venue/4.png" class="img-fluid" />
      </div>
    </div>
    <h6>Photo credits: Rodrigo Trevino & Aaron Brimhall</h6>
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
    <div class="line-up row justify-content-center">

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://soundcloud.com/solselectas">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/SABO.png" class="img-fluid" />
        <h4 class="text-primary">SABO</h4>
        <small class="text-primary">(Sol Selectas)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://soundcloud.com/goldcap">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/GOLDCAP.png" class="img-fluid" />
        <h4 class="text-primary">GOLDCAP</h4>
        <small class="text-primary">(Sol Selectas)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://soundcloud.com/seth-schwarz">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/SETH.png" class="img-fluid" />
        <h4 class="text-primary">SETH SCHWARZ</h4>
        <small class="text-primary">(Bar 25 / Katermukke)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://soundcloud.com/valentinhuedo">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/VALENTIN.png" class="img-fluid" />
        <h4 class="text-primary">VALENTIN HUEDO</h4>
        <small class="text-primary">(WooMoon Ibiza / IBIZA SONICA)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/GANADAIA.png" class="img-fluid" />
        <h4 class="text-primary">GANDAIA</h4>
        <small class="text-primary">(ILS / Mayan Warrior)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://soundcloud.com/ilonalica">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/LICA.png" class="img-fluid" />
        <h4 class="text-primary">LICA</h4>
        <small class="text-primary">(Scorpios Mykonos)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://soundcloud.com/malin-linnea">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/MALIN.png" class="img-fluid" />
        <h4 class="text-primary">MALIN</h4>
        <small class="text-primary">(Scorpios Mykonos)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://soundcloud.com/carla-frayman">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/CARLITA.png" class="img-fluid" />
        <h4 class="text-primary">CARLITA</h4>
        <small class="text-primary">(Bespoke Musik / Cosmic Awakenings)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://soundcloud.com/sora-paris">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/SORA.png" class="img-fluid" />
        <h4 class="text-primary">SORA</h4>
        <small class="text-primary">(Horde / Crossings)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://soundcloud.com/2kuumba">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/KUUMBA.png" class="img-fluid" />
        <h4 class="text-primary">KUUMBA</h4>
        <small class="text-primary">(Criminal Music)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://soundcloud.com/mendrixmusic">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/MENDRIX.png" class="img-fluid" />
        <h4 class="text-primary">MENDRIX</h4>
        <small class="text-primary">(Calypso / Mayan Warrior)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://www.instagram.com/alejandroglatt/">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/GLATT.png" class="img-fluid" />
        <h4 class="text-primary">Alejandro Glatt (A/V)</h4>
        <small class="text-primary">(YAM)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://soundcloud.com/isiaudi">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/ISIAUDI.png" class="img-fluid" />
        <h4 class="text-primary">ISI AUDI</h4>
        <small class="text-primary">(YAM)</small>
      </a>

      <a class="col-6 col-lg-4 mb-3" target="_blank" href="https://origins.nu/">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/lineup/KRIEN.png" class="img-fluid" />
        <h4 class="text-primary">KRIEN JOZEPH AND MERANTE TAMAR</h4>
        <small class="text-primary">(Origins)</small>
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
      <div class="left-card col-md-6">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/kinky-school2.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card right-card"> 
          <div class="card-body">
            <h4>KINKY SCHOOL</h4>
            <p class="lead-text-uppercase">
              Everything you always wanted to know but were afraid to ask.
            </p>
            <p class="lead-text-uppercase">
              Hands on! An experimental room with coaching and guidance.
            </p>
          </div>       
        </div>
      </div>
    </div>

    <div class="row no-gutters align-items-center my-5 pb-5">
      <div class="col-md-6 order-lg-2">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/HAVDALAH2.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card left-card"> 
          <div class="card-body">
            <h4>HAVDALAH SHABAT</h4>
            <p class="lead-text-uppercase">
              LOCATED IN AN AMAZING MANGLAR, 100M FROM CASA MALCA, THE CELEBRATION OF MOTZE SHABAT (END), A DECLARATION OF THE INTENTION TO END SHABAT AND START A NEW CYCLE
            </p>
            <p class="lead-text-uppercase">
              The Havdalah (Separation) ceremony is a multi-sensory ritual employing our faculties of speech, hearing, sight, smell and taste to define the boundaries that God set in creation “between the sacred and the everyday.”
            </p>
            <p class="lead-text-uppercase">
            Havdalah is done after nightfall on Saturday evening, which is when Shabbat ends. “Nightfall” is the point at which is grows dark enough for three medium-sized stars to become visible. Because making Havdalah involves actions that are forbidden on Shabbat.
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
      <div class="col-md-5 order-lg-2">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/vr-diving.png" class="img-fluid" />
      </div>
      <div class="col-md-7 text-left">
        <div class="card left-card"> 
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
      <div class="col-md-6 left-card">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/fruit-healing.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card right-card"> 
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
      <div class="col-md-6 order-lg-2">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/chasing-coral.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card left-card"> 
          <div class="card-body">
            <h4>CHASING CORAL SCREENING</h4>
            <p class="lead-text-uppercase">
              Screening of the award-winning game changer documentary "Chasing Coral" Directed by Jeff Orlowski,
              <br>
              "Watching Chasing Coral is a remarkable experience, one that teeters between overwhelming the viewer with the scope of earth's ruin and inspiring them to find ways to help."  Rotten Tomatoes
            </p>
          </div>       
        </div>
      </div>
    </div>

    <div class="row no-gutters align-items-center my-5 pb-5">
      <div class="col-md-6 left-card">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/pulque-bombs.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card right-card"> 
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
      <div class="col-md-6 order-lg-2">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/experience/adopt-a-reef.png" class="img-fluid" />
      </div>
      <div class="col-md-6 text-left">
        <div class="card left-card"> 
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
      <div class="py-5">
        <h5>IN COLLABORATION WITH</h5>
        <div class="row align-items-center">
          <div class="col-6 col-lg mb-3">
            <a href="https://icbrkr.com/">
              <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/sponsors/icbrkr.png" class="img-fluid" width="120" />
            </a>
          </div>
          <div class="col-6 col-lg mb-3 mt-3">
            <a href="https://www.watermatters.com.mx/">
              <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/sponsors/water-matters.png" class="img-fluid" />
            </a>
          </div>
          <div class="col-6 col-lg mb-3">
            <a href="https://ourhabitas.com/">
              <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/sponsors/habitas.png" class="img-fluid" />
            </a>
          </div>
          <div class="col-6 col-lg mb-3">
            <a href="http://www.restorecoral.org/">
              <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/sponsors/restore-coral.png" class="img-fluid" />
            </a>
          </div>
        </div>
      </div>
    </div>

</div>

