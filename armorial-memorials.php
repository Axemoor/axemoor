<!-- begin header - do not modify -->

<?php include("templates/header.php");
?>

<!-- end header - do not place anything above this line -->

<!-- page content begins here -->

<div class="page-header">
        <h1 class="blog-title text-center">Barony Armorial: Memorials<br/><span class="small">Members of Axemoor who have since passed away</span></h1>
<h4 class="text-center"><a href="armorial.php">Active Members</a> | <a href="armorial-inactives.php">Inactive Members</a></h4>
</div>

<div class="container">




    <div class="row"><!-- Row 4 -->
      <div class="col-md-6 col-md-offset-3">
        <div class="media">
          <div class="media-left">
            <img src="images/armorial/gordon.gif" height="150px" alt="Sable, a griffin segreant within an annulet Or." title="Sable, a griffin segreant within an annulet Or."/>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Gordon Rede</h3>
            <p><small>
            <?php
            $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=595");
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($ch);
            curl_close($ch);

            $person = json_decode($result, TRUE);
            $awards = array_reverse($person["awards"]);
            foreach ($awards as $award)
              {
              echo '<b>' . $award["name_award"] . '</b><i>, ' . $award["date_award"] . '</i>; ';
              }
             ?>
           </small></p><!--
              <p>Titles</p>
              <p>M.K.A </p>
              <p>Persona Period and Location</p>
              <p>Email address</p>
              -->
              <p>Gordon Rede's shields are on display at the Waldorf School of New Orleans</p>
              <div class="row">
                <div class="col-md-6">
                  <img src="images/armorial/gordon-rede-kite.jpg" width="200px" class="img-fluid img-thumbnail rounded" alt="photgraph of Gordon Rede's kite shield"><!--release code sp0764-->
                </div>
                <div class="col-md-6">
                <img src="images/armorial/gordon-rede-round.jpg" width="200px" class="img-fluid img-thumbnail rounded" alt="photograph of Gordon Rede's round shield"><!--release code sp0764-->
              </div>
              </div>
              <div class="row">
                <p class="text-center">
                  Photos courtesy of Mistress Tegan verch Dwgan
                </p>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <hr width="75%"/>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="media">
          <div class="media-left">
            <img src="images/armorial/gralon.gif" height="150px" alt="Gyronny Or and sable, a castle argent"/>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Gradlon Friant Braz</h3>
            <p><small>
            <?php
            $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=598");
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($ch);
            curl_close($ch);

            $person = json_decode($result, TRUE);
            $awards = array_reverse($person["awards"]);
            foreach ($awards as $award)
              {
              echo '<b>' . $award["name_award"] . '</b><i>, ' . $award["date_award"] . '</i>; ';
              }
             ?>
           </small></p>
           <!--
              <p>Titles</p>
              <p>M.K.A </p>
              <p>Persona Period and Location</p>
              <p>Email address</p>
              -->
          </div>
        </div>
      </div>

</div><!-- /.row -->
<div class="row">
  <div class="col-md-12">
    <hr width="75%"/>
  </div>
</div>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="media">
      <div class="media-left">
        <img src="images/armorial/byron-delancey.jpg" height="150px" alt="THL Byron Delancey's personal arms"/>
      </div>
      <div class="media-body">
        <h3 class="media-heading">The Honorable Lord Byron Delancey</h3>
             <p>M.K.A. Brian Held, Jr.</p>
        <p><small>
        <?php
        $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=259");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $person = json_decode($result, TRUE);
        $awards = array_reverse($person["awards"]);
        foreach ($awards as $award)
          {
          echo '<b>' . $award["name_award"] . '</b><i>, ' . $award["date_award"] . '</i>; ';
          }
         ?>
       </small></p>


     <p>THL Byron Delancey passed away on March 17, 2020.</p>
     <hr/>
     <!-- <p>Persona Period and Location</p> -->

     <div class="row">
       <div class="col-md-12">
         <p><em>Byron doing scribal work. He inspired others to take up scribal arts.</em></p>
         <img src="images/armorial/byron-delancey-scribing.jpg" height="300px" alt="Byron working on a scroll"/><!--release code -->
       </div>
     </div>
     <div class="row">
       <p class="text-center">
        Photo courtesy Mistress Barbara Sterling
       </p>
     </div>



      </div>
    </div>
  </div>



         <!-- extra entry
         <div class="row">
           <div class="col-md-6 col-md-offset-3">
             <div class="media">
               <div class="media-left">
                 <img src="images/armorial/a.gif" height="150px" alt="a"/>
               </div>
               <div class="media-body">
                 <h3 class="media-heading">Vacant</h3>

              <p>Titles</p>
              <p>M.K.A </p>
              <p>Persona Period and Location</p>
              <p>Email address</p>

               </div>
             </div>
           </div>
         </div>
         end of extra entry -->




       </div><!-- /.container -->
     </div><!-- /.container -->

<!-- page content ends here -->

<!-- Begin Footer - do not modify or insert anything after this -->

<?php include("templates/footer.php");
?>
<!-- end of footer -->
