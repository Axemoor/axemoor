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

                  <p class='text-center'>Her Excellency Baroness Tegan verch Dwgan</p>
                  <p class='text-center'>Elaine Dunagan</p>
                  <p class='text-center'>baroness@axemoor.net</p>
                  <img class='center-block' src='images/armorial/tegandwgan.gif' height='300px'>
                  <P>Her Excellency is interested in weaving, herbals, and needle arts. She likes sweet wines and light bourbons. She is allergic to patchouli and sandalwood.</p>

                <hr/>

                <table class='table-condensed'>
                  <thead colspan='2'><h2 class="text-center">Her Excellency's Awards</h2></thead>
                  <t><td>Award Name</td><td>Award Date</td></tr>
                  <?php


                  $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=1264");
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
                <img class="center-block" src="images/te_axemoor.jpg" width=100% alt="Photo of TE Dafydd and Tegan. Photo by Duchess Danielle de la Roche.">
                <!-- Release code SP0730 -->
                <h6 class="text-center"> Photo courtesy of Duchess Danielle de la Roche </h6>
              </div><!-- /.blog-post -->
            </div><!-- /.col -->

            <div class="col-sm-12 col-md-4">
              <div class="blog-post">
                <h2 class="blog-post-title text-center">Baron of Axemoor</h2>

              <p class='text-center'>His Excellency Baron Dafydd ap y Kynith</p>
              <p class='text-center'>Richard Dunagan</p>
              <p class='text-center'>baron@axemoor.net<p>
              <img class='center-block' src='images/armorial/dafyddkynith.gif' height='300px'>
              <p>His Excellency is interested in fighting, archery, and live weapons. He enjoys scotch, ales, and some meads. He has no known allergies.</p>



                <hr/>

                <table class='table-condensed'>
                  <thead colspan='2'><h2 class="text-center">His Excellency's Awards</h2></thead>
                  <t><td>Award Name</td><td>Award Date</td></tr>
                  <?php

                  $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=363");
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
