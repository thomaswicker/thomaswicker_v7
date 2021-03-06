<?php
/*
Template Name: Home Template
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-home'); ?>

<section class='body-home' role="main">
  <section class='body-home-inner'>
    <div class='body-home-left'>
      <div class="hbc--top">
        <h2>
          A little about "work me"
        </h2>

        <blockquote>
          Currently working as a Principal UX Designer in Centennial, Colorado.
        </blockquote>

        <p class="body-text">
          I am a full stack designer based out of Denver, CO. Jumping into the Wayback Machine... I started off in early 2000 as a fine artist and abstract acrylic painter. After completing my Associates Degree, I quickly began pursuing a career in Graphic/Web Design at the Art Institute of Colorado focusing on the basics of user experience, color theory, layout, typography and more. This built the foundation for what was to become my true passion, UI/UX and software development.
        </p>

        <p class="body-text">
          Fast forward to present day, I now have over 15 years of hands-on real world experience in UI/UX design, rapid prototyping and front-end/mid-tier development. I have created websites and applications for a wide range of industries ranging from apparel to health care to the financial industry to oil and gas. I focus my attention on implementing sound design principles basing all of my decisions on a blend of user driven need and clean semantic code.
        </p>
      </div>

      <div class="hbc--left">
        <h2>
          A little about "other me"
        </h2>

        <p class="body-text">
          Aside from all the work stuff... I am a father of two beautiful and healthy girls that keep me on my toes and my life well balanced and meaningful. I love spending every free moment I have with them reading, playing a game on XBOX/PS4, watching some TV, or just chilling out playing a game from our extensive board game collection.
        </p>

        <p class="body-text">
          I am an avid cook and love to experiment with different cuisines. I enjoy a good Texas Hold'em cash game in Vegas, being out on the golf course or cheering on the Broncos. I love to travel when time permits, traveling gives you perspective and inspires creativity.</span>
        </p>

        <p class="body-text">
          I also love to learn, learn and learn more... It's weird, but I can get just as much enjoyment out of studying the newest javascript framework or learning a foreign language than I do out of anything else. Life is a short ride and my motto is always be learning.
        </p>
      </div>

      <div class="hbc--right">
        </br>
        <img src='<?php bloginfo( 'template_directory' ); ?>/img/home-page-family-photo.jpg' alt="Me & My Girls">
      </div>
    </div>

    <aside class='body-home-right' role="complementary">
      <div class='lastfm-container'>
        <div class='lastfm-title'>
          <div id='lastfm-title-left'>
            <i class="fa fa-spotify"></i>
          </div>
          <div id='lastfm-title-right'>
            <h4>
              LISTENING TO
            </h4>
          </div>
        </div>

        <section id="lastfm-sidebar">
          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('lastfm')) : else : ?>

          <div class="pre-widget">
            <p><strong>Oops! Looks like there was an error...</strong></p>
              <p>Recent songs are not loading.</p>
          </div>

          <?php endif; ?>
        </section>
      </div>

      <div class='twitter-feed'>
        <div id='twitter-title'>
          <div id='twitter-title-left'>
            <i class="fa fa-twitter"></i>
          </div>
          <div id='twitter-title-right'>
            <h4>
              TWITTER FEED
            </h4>
          </div>
        </div>
        <aside id='twitter-feed'>
          <a class='twitter-timeline' data-chrome='noheader nofooter noborders transparent' data-tweet-limit='4' data-widget-id='392388763487182849' href='https://twitter.com/thomasjwicker'>
            Tweets by @thomasjwicker
          </a>
        </aside>
      </div>
    </aside>
  </section>

  <section class='youtube-vids''>
    <h2>
      <a href="https://www.youtube.com/channel/UCQlIq4pjUFBknns2wb9Iwyw?sub_confirmation=1" target="_blank">I create stuff on <img src='<?php bloginfo( 'template_directory' ); ?>/svg/youtube-icon.svg' alt="YouTube Icon"> YouTube!</a>
    </h2>

    <section class="video-container">
      <?php echo do_shortcode('[youtube-feed]'); ?>
    </section>
  </section>

  <section class='my-references'>
    <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
      <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr"></span><i class="fa fa-caret-left"></i></button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr"></span><i class="fa fa-caret-right"></i></button>
        <li class="is-active orbit-slide">
          <section class='ref-card'>
            <div class='ref-card-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/rob_christie.png'>
            </div>

            <div class='ref-card-right'>
              Thomas is one of those front-end developers that every team hopes to have. He is artistic, can do design, responsive layouts, and UI/UX work. Additionally he knows javascript, ruby, haml, sass, and git. As a mid-tier developer, it was a pleasure to collaborate with Thomas.
              <strong>~ Rob Christie - Senior Developer - Oppenheimer Funds</strong>
            </div>
          </section>
        </li>

        <li class="orbit-slide">
          <section class='ref-card'>
            <div class='ref-card-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/cody_palmer.jpg'>
            </div>

            <div class='ref-card-right'>
              Thomas is truly a worker that loves his craft. I've seen him work harder than those hungry first year career employees, despite the fact that he has nothing to prove. I would highly recommend him in any role knowing fully that he will rise to the occasion, and enjoy every moment of it.
              <strong>~ Cody Palmer - Senior Developer - Lending Home</strong>
            </div>
          </section>
        </li>

        <li class="orbit-slide">
          <section class='ref-card'>
            <div class='ref-card-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/chris_aron.jpg'>
            </div>
            <div class='ref-card-right'>
              Thomas is an extremely gifted and creative individual. If you are looking for a quality designer or general marketing professional you cannot go wrong by adding him to your team. Thomas is a highly productive, intelligent, and flexible person who will help raise the quality of any team he is a part of.
              <strong>~ Chris Aron - Executive - SAP</strong>
            </div>
          </section>
        </li>

        <li class="orbit-slide">
          <section class='ref-card'>
            <div class='ref-card-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/nick-apel.jpg'>
            </div>
            <div class='ref-card-right'>
              Thomas is an extremely talented developer and technical professional. His contributions to the team, including both development and technical leadership, enabled numerous capabilities within our digital properties. Thomas is a strong developer, has great communication skills and always delivers clean, quality code.
              <strong>~ Nick Apel - Director - Transamerica</strong>
            </div>
          </section>
        </li>

        <li class="orbit-slide">
          <section class='ref-card'>
            <div class='ref-card-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/alyssa-andersen.jpg'>
            </div>
            <div class='ref-card-right'>
              Thomas is truly an indispensable employee at Enverus due to his experience as a Front End Developer and a Designer. His eye for design is unmatched, and I have personally learned an immense amount from working with him. He’s able to problem solve design issues and propose solutions that within the existing technical constraints. 
              <strong>~ Alyssa Andersen - UX Designer - Enverus</strong>
            </div>
          </section>
        </li>

        <li class="orbit-slide">
          <section class='ref-card'>
            <div class='ref-card-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/richard_cook.jpg'>
            </div>

            <div class='ref-card-right'>
              Thomas is a detail oriented designer with great imagination. He was responsible for the majority of our custom CRM system and managed the UI/UX for just about every front end project at Cricket. He's such a valuable member of our contracting team that we brought him on full time at Cricket. I would highly recommend him for any UI/UX work.
              <strong>~ Richard Cook - Senior Developer - Cricket Communications</strong>
            </div>
          </section>
        </li>

        <li class="orbit-slide">
          <section class='ref-card'>
            <div class='ref-card-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/allie_golon.jpg'>
            </div>

            <div class='ref-card-right'>
              Thomas is very adept at quickly learning what we needed from a graphics perspective, despite hazy directive. He always delivered on-time or ahead of time and his work was top quality. I look forward to asking Thomas to work on future projects...
              <strong>~ Allie Golon - Executive - The Regis Company</strong>
            </div>
          </section>
        </li>

        <li class="orbit-slide">
          <section class='ref-card'>
            <div class='ref-card-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/michael_bowlin.jpg'>
            </div>

            <div class='ref-card-right'>
              I was brought on to Thomas's development team in late 2013 and with his guidance as team-lead we successfully delivered a robust, Enterprise User-Interface for Cricket Wireless. Thomas possessed excellent leadership skills as a project-manager, and as a colleague he was essential in excelling the project above and beyond the initial scope. 
              <strong>~ Michael Bowlin - Senior Developer - Cricket Wireless</strong>
            </div>
          </section>
        </li>
      </ul>
    </div>
  </section>

  <section class='body-portfolio' role="main">
    <h2>
      🔥I make websites, apps, and great user experiences
    </h2>
    <?php get_template_part('partials/portfolio-tiles'); ?>
  </section>

  <section class='instagram-container'>
    <h2>
    <i class="fa fa-instagram"></i> I like to take photographs
    </h2>
    <?php echo do_shortcode('[instagram-feed]'); ?>
  </section>
</section>

<section class='body-contact' role="main">
  <div class='body-contact-inner' role='main'>
    <section class='body-contact-left'>
      <div class='contact-info-container'>
        <h2>
          Let’s collaborate together!
        </h2>

        <p class="body-text margin bottom md">
          Whether it's design or development, websites, ui/ux, apps, or photography — I'd love to work with you. I'm always interesting in hearing about new opportunities for either full time or contract work. Just hit me up with the form below and include as many details as you can about your project. I will endeavor to get back to you with you within 24-48 hours.
        </p>

        <div class='margin bottom md contact-email'>
          <a class='' href='mailto:thomas@thomaswicker.com' title="Email me"></a>
        </div>
    </section>

    <section class='body-contact-right'>
      <?php echo do_shortcode('[contact-form-7 id="4347" title="New Contact Form"]'); ?>
    </section>
  </div>
</section>

<?php get_footer(); ?>