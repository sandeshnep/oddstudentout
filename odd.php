<?php include "inc/header.inc"?>
  <title> The Odd One Out</title>
  <body>

    <header class="top-bar">
        <h1>The Odd One Out</h1>
        <?php include "inc/navbar.inc"?>
    </header>

    <main class="diff-main">
      <article onclick="toggleHide('hide1')">
      <h2> Shawn Chen </h2>
      <figure>
        <img src="images/shawn.jpg" alt="profile picture">
      </figure>

        <h3> Early Life </h3>
       <p>Graduated from IB programme in high school, I ended up in U of R as an international student. I chose Environmental Study instead of Environmental Science is because I’m not the type of person who can sit in lab for more than 5 hrs and study on the other hand, is more policy-wise and practices related which potentially suits me more. Besides, I’m really not a massive science nerd that can recite complicated equations like piece of cake. <b>Click for more/less</b></p>
        <section class="hide-to-start hide1">
          <h3> Academic Program </h3>
          <p>My inclination for graduate program would be finance. There are 2 major reasons I convert from Environmental Study to Finance. First, my mom and dad initially wanted me to take econ and finance during college, and this is kind of my family business; but instead I went a little bit rebellious and independent and decided to try out the unpopular but fascinating earth science. The kind of major most Asian parents would classify it as “won’t get you a decent job in the future”. Second, my intern during last summer was to work for a Private Equity company. (P.E. is like high-end in the finance industry) And the experience is so amazing and I was able to see myself working for finance in the future.
          </p>
          <h3> Interests </h3>
          <p>My spare time hobby is really nerdy and geeky. I pretty much spend all my leisure time with my pc. I’m an editorial crew member for Gosugamer, and I am a very skilful dota2 player (top20 North America). This applies that I usually play video games(dota2) all day. Besides, I do music as well. I started doing covers and writing during high school but I stopped a while ago because I don’t see a good future doing this, but still, I’m a great singer.</p>
        </section>

    </article>

      <section class="sect">
        <div>
        <h2> Why Shawn is different </h2>
          <ol>
            <li> Shawn is NOT a Mechanical Engineering major. </li>
            <li> Shawn is NOT a Computer Science minor. </li>
            <li> Shawn is NOT a senior. </li>
            <li> Shawn is NOT from the United States. </li>
          </ol>
        </div>
      <a href="similar.php" class="diff-button button">See The Similar Duo!</a>
      </section>

    </main>

    <script type="text/javascript">
    function toggleHide(which) {
      console.log();
      var focus = document.getElementsByClassName(which)[0];
      if (focus.style.display === "block") {
        focus.style.display = "none";
      } else {
        focus.style.display = "block";
      }
    }
  </script>
  </body>

<?php include "inc/scripts.inc"?>


</html>
