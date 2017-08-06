<!-- begin header - do not modify -->

<?php include("/templates/header.php");
?>

<!-- end header - do not place anything above this line -->

<!-- page content begins here -->

<div class="blog-header">
        <h1 class="blog-title">Axemoor's Awards</h1>

      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Order of the Fleece</h2>
            <p>Award Citations:
              <ul>
                <li>Service: "The rivers of our world bring life and renewed
                  hope to every person their waters touch.  But every great
                  river begins as a small stream.  The same small beginnings can
                  be seen in the Services of some of the Young of Our beloved
                  Barony.  At this time, We charge you, (name), to continue your
                  service to Axemoor, Gleann Abhann, and Our Society as a member
                  of the Order of the Fleece.  And know that just as the spring
                  becomes the river, which brings life, your Service brings
                  inspiration to all which your Services touch. "</li>
              <li>Arts and Sciences: "All artists have but one story.  They come
                from humble beginnings.  But to complete the journey, from
                struggling to success, the artists need their own drive.
                They need the drive to make the world, in some form or another,
                a better and more wondrous place.  You, (name), at such a young
                age, have this desire.  At this time, We induct you into the
                Order of the Fleece, and challenge you to continue your craft.
                Just as the Artist inspires and the Scientist enriches, you to
                continue to do both for all those who dwell within our lands."</li>

              <li>Martial Arts: "As the cub is eager to learn the art of the
                hunt, or the pup is eager to wrestle with his siblings, so you
                (name), have the desires of combat.  At this time, We induct you
                into the Order of the Fleece.  We charge you to continue your
                training and to hone your skills upon the battlefield.  When the
                time comes for your skills to be tested, know that the Barony of
                Axemoor has faith that you will stand tallest among your pack."</li>
              </ul></p>

            <p>  <?php  // open our php code

/* There are no records available on the Hall of Records

      // Initialize the cURL session and set the source URL.
      // Substitute in the individual's ID where "245" is
      $ch = curl_init("http://dev.records.gleannabhann.net/api/award_recip.php?id=220"); //TODO change id once this award has been added

      // we don't want the headers, so we include this and set it to 0 ("False")
      curl_setopt($ch, CURLOPT_HEADER, 0);

      // we want the output to go to a variable instead of STDOUT, so set this to 1 ("True")
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

      // Execute the request and store the result in $result
      $result = curl_exec($ch);

      // close the cURL session
      curl_close($ch);

      // Convert the received information from JSON to php so we can use it
        	$awards = json_decode($result, TRUE);

      // Set up a basic HTML table for displaying the data
      echo '<table><tr><td>Name</td><td>Date</td></tr>';

      // Loop through each award in the awards portion of the data and display it in a table
      foreach ($awards["persons"] as $person)
      {
      	echo '<tr><td>' . $person["name_person"] . '</td><td>' . $person["date_award"] . '</td></tr>';
      }

      // End the table
      echo '</table>';

*/

      //close our php code
      ?></p>
      <p>No records were found at the Hall of Records. This is most likely because the
      local Baronial records for this award were not provided to the Kingdom Heralds.</p>
      <p>The above list comes directly from the Kingdom of Gleann Abhann
        <a href="http://records.gleannabhann.net">Hall of Records</a>.
        Any errors or omissions may be reported by submitting a correction
        request - form available at the bottom of each individual's Hall
        of Records page. </p>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->




      </div><!-- /.row -->

    </div><!-- /.container -->



<!-- page content ends here -->

<!-- Begin Footer - do not modify or insert anything after this -->

<?php include("/templates/footer.php");
?>
<!-- end of footer -->
