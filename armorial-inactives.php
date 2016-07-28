<!-- begin header - do not modify -->

<?php include("templates/header.php");
?>

<!-- end header - do not place anything above this line -->

<!-- page content begins here -->

<div class="page-header">
        <h1 class="blog-title text-center">Barony Armorial: Inactive and Former Members</h1>
        <h4 class="text-center"><a href="armorial.php">Active Members</a> | <a href="armorial-memorials.php">Member Memorials</a></h4>
</div>

<div class="container">
      <div class="row"> <!-- Row 1 -->
        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/charlesdebourbon.jpg" height="150px" alt="Azure a cross fleury or a border fleury or issuant from base a sun in splendor gules." title="Azure a cross fleury or a border fleury or issuant from base a sun in splendor gules."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Charles Pierre de Bourbon</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=308");
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

        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/radu.gif" height="150px" alt="Sable, a moose's head erased affronty argent enflamed gules within a bordure dovetailed argent pellety." title="Sable, a moose's head erased affronty argent enflamed gules within a bordure dovetailed argent pellety."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Tar Radu</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=1258");
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

      </div><!-- /.row-->
      <div class="row">
        <div class="col-md-12">
          <hr width="75%"/>
        </div>
      </div>
      <div class="row"> <!-- Row 2 -->
        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/byrondelancy.gif" height="150px" alt="Lord Byron DeLancy"/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Byron DeLancy</h3>

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
             </small></p><!--
              <p>Titles</p>
              <p>M.K.A </p>
              <p>Persona Period and Location</p>
              <p>Email address</p>
              -->
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/robertdecleftlands.gif" height="150px" alt="Vert, an oak tree eradicated and in chief a mullet of four points Or." title="Vert, an oak tree eradicated and in chief a mullet of four points Or."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Robert de Cleftlands</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=1110");
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

    </div><!--/.row-->
    <div class="row">
      <div class="col-md-12">
        <hr width="75%"/>
      </div>
    </div>
      <div class="row"> <!-- Row 3 -->


        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/cristina.gif" height="150px" alt="Argent, two fish naiant in annulo on a chief indented vert an escallop argent" title="Argent, two fish naiant in annulo on a chief indented vert an escallop argent"/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Cristina de Asturias</h3>

              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=352");
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
        </div>
      </div>
    </div>
        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/rychardedavidson.jpg" height="150px" alt="Lord Rycharde Davidson"/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Rycharde Davidson</h3>
              <p><small><i>No records on file at the Gleann Abhann <a href="records.gleannabhann.net">Hall of Records</a></i></small>
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
      <div class="row"> <!-- Row 4 -->

        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/aldermoureisventzke.gif" height="150px" alt="Purpure, a crook of Basel argent." title="Purpure, a crook of Basel argent."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Aldermoureis "Alda" Ventzke</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=55");
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


        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/dirktreefeller.gif" height="150px" alt="Argent, a shakefork purpure between three ram's heads cabossed all within a bordure sable." title="Argent, a shakefork purpure between three ram's heads cabossed all within a bordure sable."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Dirk Treefeller</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=406");
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

        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/elericaerleon.jpg" height="150px" alt="(Fieldless) A winged mermaid proper crined sable, winged and tailed azure, facing dexter, sustaining a bow sable." title="(Fieldless) A winged mermaid proper crined sable, winged and tailed azure, facing dexter, sustaining a bow sable.
              "/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Eleri of Caerleon</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=458");
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

        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/merwyydeffington.jpg" height="150px" alt="Per saltire argent and counter-ermine, a monster composed of the head and torso of a bull, the tail of a snake, the wings of an eagle and the forearms of a man, erect, wings elevated and maintaining a bow gules." title="Per saltire argent and counter-ermine, a monster composed of the head and torso of a bull, the tail of a snake, the wings of an eagle and the forearms of a man, erect, wings elevated and maintaining a bow gules."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Sir Merwydd of Effington</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=969");
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

      <div class="row"> <!-- Row 5 -->
        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/banniarlabroinnfinn.gif" height="150px" alt="Sable, a sword inverted Or between in pile two calla lilies slipped and leaved conjoined in base argent." title="Sable, a sword inverted Or between in pile two calla lilies slipped and leaved conjoined in base argent."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Broinnfinn inghean u&iacute; Chath&aacute;in</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=251");
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
        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/manfred.gif" height="150px" alt="Per chevron inverted argent and sable, a chevron inverted counterchanged between in chief a tree eradicated sable charged with a cross formy and in base a pair of antlers in chevron inverted argent." title="Per chevron inverted argent and sable, a chevron inverted counterchanged between in chief a tree eradicated sable charged with a cross formy and in base a pair of antlers in chevron inverted argent."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Manfred von Rothenburg</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=911");
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

       <div class="row">
         <div class="col-md-12">
           <hr width="75%"/>
         </div>
       </div>
      <div class="row"> <!-- Row 6 -->

        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/stefan.gif" height="150px" alt="Per pale argent and gules all semy of maple leaves counterchanged, two boars combattant the dexter sable and the sinister Or." title="Per pale argent and gules all semy of maple leaves counterchanged, two boars combattant the dexter sable and the sinister Or."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Stefan le Sanglier</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=1216");
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
        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/GwendolynMac.jpg" height="150px" alt="Quarterly vert and azure, in bend two pine trees couped argent." title="Quarterly vert and azure, in bend two pine trees couped argent."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Gwendolyn MacAuslane of Loch Lomond</h3>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=620");
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
      <div class="col-md-6">
        <div class="media">
          <div class="media-left">
            <img src="images/armorial/UricBlackoak.jpg" height="150px" alt="Argent, a bend vert cotised between an oak tree and a wolf rampant sable." title="Argent, a bend vert cotised between an oak tree and a wolf rampant sable."/>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Uric Blackoak</h3>
            <?php
            $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=1318");
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


          </div>
        </div>
      </div>

         <div class="col-md-6">
           <div class="media">
             <div class="media-left">
               <!-- <img src="images/armorial/a.gif" height="150px" alt="Sable, on a bend Or a cross-peen hammer sable, a bordure Or." title="Sable, on a bend Or a cross-peen hammer sable, a bordure Or."/> -->
             </div>
             <div class="media-body">
               <h3 class="media-heading">John of Widcombe</h3>
               <?php
               $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=754");
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


             </div>
           </div>
         </div>

       </div>
       <!-- extra row
        <div class="row">
        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/a.gif" height="150px" alt="a"/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Vacant</h3>



            </div>
          </div>
        </div>

           <div class="col-md-6">
             <div class="media">
               <div class="media-left">
                 <img src="images/armorial/a.gif" height="150px" alt="a"/>
               </div>
               <div class="media-body">
                 <h3 class="media-heading">Vacant</h3>



               </div>
             </div>
           </div>

         </div> end of extra row --><!-- /.row -->
    </div><!-- /.container -->

</div><!-- /.container -->

<!-- page content ends here -->

<!-- Begin Footer - do not modify or insert anything after this -->

<?php include("templates/footer.php");
?>
<!-- end of footer -->
