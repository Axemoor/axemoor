<!-- begin header - do not modify -->

<?php include("templates/header.php");
?>

<!-- end header - do not place anything above this line -->

<!-- page content begins here -->

<div class="page-header">
        <h1 class="blog-title text-center">Barony Armorial</h1>
        <p class="bg-danger text-center">This page is undergoing content overhaul.<br/>Information on this page is not guaranteed to be accurate.</p>
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
              <img src="images/armorial/marthaeffingham.jpg" height="150px" alt="Azure, on a bend sinister between two arum lilies bendwise sinister argent slipped three dragonflies vert." title="Azure, on a bend sinister between two arum lilies bendwise sinister argent slipped three dragonflies vert."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Martha Effingham of Stewart Kepe</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=935");
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
            <img src="images/armorial/williamfitzhughe.gif" height="150px" alt="Vert, an antelope rampant contourny, in chief two round buckles Or." title="Vert, an antelope rampant contourny, in chief two round buckles Or."/>
          </div>
          <div class="media-body">
            <h3 class="media-heading">William fitzhughe de Cambria</h3>
            <p><small>
            <?php
            $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=1349");
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

      <div class="row"> <!-- Row 4 -->
        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/dafyddkynith.gif" height="150px" alt="Quarterly sable and vert, two enfields combattant Or." title="Quarterly sable and vert, two enfields combattant Or."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Dafydd ap y Kynith</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=363");
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
            <img src="images/armorial/gellirgunnarrsson.gif" height="150px" alt="Per bend sinister gules and sable, a sun in its splendor Or and a wolf's head erased argent." title="Per bend sinister gules and sable, a sun in its splendor Or and a wolf's head erased argent."/>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Gellir Gunnarrsson</h3>
            <p><small>
            <?php
            $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=556");
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
    <div class="row"><!-- Row 4 -->
      <div class="col-md-6">
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
          </div>
        </div>
      </div>
      <div class="col-md-6">
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
     </div><div class="row">
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

        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/gillianladyer.gif" height="150px" alt="Argent, a cat dormant sable, on a chief vert three fleurs-de-lis argent." title="Argent, a cat dormant sable, on a chief vert three fleurs-de-lis argent."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Gillian LaDyer</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=579");
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

      <div class="row"> <!-- Row 6 -->
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
      </div><!-- /.row -->
      <div class="row"> <!-- Row 7 -->
        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/tegandwgan.gif" height="150px" alt="Per pale azure and Or, on a lozenge sable between in chief two Bowen knots crosswise counterchanged a cinquefoil argent." title="Per pale azure and Or, on a lozenge sable between in chief two Bowen knots crosswise counterchanged a cinquefoil argent."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Tegan verch Dwgan</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=1264");
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
              <img src="images/armorial/thorvald.gif" height="150px" alt="Vert semy of oak leaves bendwise sinister, in pale a dagger inverted and a stag's head caboshed Or." title="Vert semy of oak leaves bendwise sinister, in pale a dagger inverted and a stag's head caboshed Or."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Thorvald Invarsson</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=1289");
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
     </div>
     <div class="row">
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
              <img src="images/armorial/iforleycester.gif" height="150px" alt="Per bend sinister sable and argent, a cross fleury argent and on a tower gules in pale three mascles interlaced argent." title="Per bend sinister sable and argent, a cross fleury argent and on a tower gules in pale three mascles interlaced argent."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Ifor de Leycester</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=673");
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
         <div class="col-md-6">
           <div class="media">
             <div class="media-left">
               <img src="images/armorial/egilharaldsson.jpg" height="150px" alt="Vert, an eagle Or and a bordure Or pellety." title="Vert, an eagle Or and a bordure Or pellety."/>
             </div>
             <div class="media-body">
               <h3 class="media-heading">Egil Haraldsson</h3>
               <p><small>
               <?php
               $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=438");
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
       </div><!-- /.row -->
       <div class="row">
          <div class="col-md-6">
            <div class="media">
              <div class="media-left">
                <img src="images/armorial/morganamist.jpg" height="150px" alt="Purpure, a bend sinister between three gouttes and an arum lily bendwise sinister argent." title="Purpure, a bend sinister between three gouttes and an arum lily bendwise sinister argent."/>
              </div>
              <div class="media-body">
                <h3 class="media-heading">Muirgen "Morgana" of the Mists</h3>
                <p><small>
                <?php
                $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=999");
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
                <img src="images/armorial/brigidaingvarsdottir.gif" height="150px" alt="Per chevron azure and gules, a gryphon segreant erminois." title="Per chevron azure and gules, a gryphon segreant erminois."/>
              </div>
              <div class="media-body">
                <h3 class="media-heading">Br&iacute;gi&eth;a Ingvarsd&oacute;ttir</h3>
                <p><small>
                <?php
                $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=245");
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
           <div class="col-md-6">
             <div class="media">
               <div class="media-left">
                 <img src="images/armorial/johannamerryngton.jpg" height="150px" alt="Vert, on a chevron inverted Or three ladybugs gules spotted sable and in base a domestic cat dormant argent." title="Vert, on a chevron inverted Or three ladybugs gules spotted sable and in base a domestic cat dormant argent."/>
               </div>
               <div class="media-body">
                 <h3 class="media-heading">Johanna Merryngton</h3>
                 <p><small><i>No records on file at the Gleann Abhann <a href="http://records.gleannabhann.net">Hall of Records</a>.</i></small></p>
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
                 <img src="images/armorial/adalydedesardaigne.png" height="150px" alt="a"/>
               </div>
               <div class="media-body">
                 <h3 class="media-heading">Baroness Adalyde de Sardaigne</h3>
                <!--
              <p>Titles</p>
              <p>M.K.A </p>
              <p>Persona Period and Location</p>
              <p>Email address</p>
            -->
               </div>
             </div>
           </div>

           </div>
           <!-- extra entry
           <div class="col-md-6">
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
           end of extra entry -->
         </div><!-- /.row -->
    </div><!-- /.container -->

</div><!-- /.container -->

<!-- page content ends here -->

<!-- Begin Footer - do not modify or insert anything after this -->

<?php include("templates/footer.php");
?>
<!-- end of footer -->
