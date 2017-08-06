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
            <h2 class="blog-post-title">Order of the Justinian</h2>
            <p>Award Citation: "There are those gentles among us who through word and deed have brought all of us closer to the dream. For your efforts in
attire, manner, speech, and sharing the knowledge of your persona with others we are mindful to award you, (name), the Order
of Justinian this _____ day of _____ Anno Societatus _____ being ______ Gregorian."</p>

            <p>  <?php  // open our php code
/* There are no records on file at the Hall of Records, so this block is commented output

      // Initialize the cURL session and set the source URL.
      // Substitute in the individual's ID where "245" is
      $ch = curl_init("http://dev.records.gleannabhann.net/api/award_recip.php?id=217"); //TODO update the id once an item is created in Records

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
