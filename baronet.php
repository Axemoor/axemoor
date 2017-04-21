<!-- begin header - do not modify -->

<?php include("templates/header.php");
?>

<!-- end header - do not place anything above this line -->

<!-- page content begins here -->
<div class="row">

<div class="blog-header">
  <!-- the below section is not in use on this page

        <h1 class="blog-title text-center"></h1>
        <p class="lead blog-description text-center"></p>

      -->

      </div>

      <div class="row">

        <div class="col-sm-12 blog-main">
          <div class="blog-post">
            <h1 class="blog-post-title text-center">Baronet of Axemoor</h1>

            <hr>
          </div><!-- /.blog-post -->

          <div class="row">

            <div class="col-sm-12 col-md-4">
              <div class="blog-post">
                <h2 class="blog-post-title text-center">Baroness of Axemoor</h2>
                <?php if (time() < 1492873200) { // if earlier than 10:00 a.m. CDT on April 22, 2017, do this:
                  echo "<p class='text-center'>Her Excellency Baroness Brigida Ingvarsdottir</p>";
                  echo "<p class='text-center'>Ann Bass</p>";
                  echo "<p class='text-center'>baroness_gida(at)att.net</p>";
                  echo "<img class='center-block' src='images/armorial/brigidaingvarsdottir.gif' height='300px'>";
                }
                else {
                  echo "<p class='text-center'>Her Excellency Baroness Tegan verch Dwgan</p>";
                  echo "<p class='text-center'>Elaine Dunagan</p>";
                  echo "<p class='text-center'>baroness@axemoor.net</p>";
                  echo "<img class='center-block' src='images/armorial/tegandwgan.gif' height='300px'>";
                }
                  ?>

                <hr/>

                <table class='table-condensed'>
                  <thead colspan='2'><h2 class="text-center">Her Excellency's Awards</h2></thead>
                  <t><td>Award Name</td><td>Award Date</td></tr>
                  <?php

                   if (time() < 1492873200) {$ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=245");}
                     else {$ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=1264");}
                  curl_setopt($ch, CURLOPT_HEADER, 0);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  $result = curl_exec($ch);
                  curl_close($ch);

                  $person = json_decode($result, TRUE);

                  foreach ($person["awards"] as $award)
                    {
                    echo '<tr><td>' . $award["name_award"] . '</td><td>' . $award["date_award"] . '</td></tr>';
                    }
                    echo '</table>';


                   ?>
              </div><!-- /.blog-post -->
            </div><!-- /.col -->




            <div class="col-sm-12 col-md-4">
              <div class="blog-post">
                <!--<img class="center-block" src="images/te_axemoor.jpg" width=100%> -->
              </div><!-- /.blog-post -->
            </div><!-- /.col -->

            <div class="col-sm-12 col-md-4">
              <div class="blog-post">
                <h2 class="blog-post-title text-center">Baron of Axemoor</h2>
                <?php if (time() < 1492873200){
                  echo "<p class='text-center'>His Excellency Baron Gellir Gunnarrsson</p>";
                echo "<p class='text-center'>Chris Bass</p>";
                echo "<p class='text-center'>gellir(at)att.net<p>";
                echo "<img class='center-block' src='images/armorial/gellirgunnarrsson.gif' height='300px'>";
              } else {
                echo "<p class='text-center'>His Excellency Baron Dafydd ap y Kynith</p>";
              echo "<p class='text-center'>Richard Dunagan</p>";
              echo "<p class='text-center'>baron@axemoor.net<p>";
              echo "<img class='center-block' src='images/armorial/dafyddkynith.gif' height='300px'>";
              }
                ?>



                <hr/>

                <table class='table-condensed'>
                  <thead colspan='2'><h2 class="text-center">His Excellency's Awards</h2></thead>
                  <t><td>Award Name</td><td>Award Date</td></tr>
                  <?php
                  if (time() < 1492873200) {$ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=556");
                  } else {$ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=363");}

                  curl_setopt($ch, CURLOPT_HEADER, 0);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  $result = curl_exec($ch);
                  curl_close($ch);

                  $person = json_decode($result, TRUE);

                  foreach ($person["awards"] as $award)
                    {
                    echo '<tr><td>' . $award["name_award"] . '</td><td>' . $award["date_award"] . '</td></tr>';
                    }
                    echo '</table>';


                   ?>
              </div><!-- /.blog-post -->
            </div><!-- /.col -->
          </div><!-- /.row -->


        </div><!-- /.blog-main -->



      </div><!-- /.row -->

    </div><!-- /.container -->


    <!-- page-specific footer -->

    <!-- this section is not used on this page

    <footer class="blog-footer">
      <p class="text-center">If you want to include a page-specific footer, it goes here.</p>

    </footer>

    -->

<!-- page content ends here -->

<!-- Begin Footer - do not modify or insert anything after this -->

<?php include("templates/footer.php");
