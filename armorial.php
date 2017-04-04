<!-- begin header - do not modify -->

<?php include("templates/header.php");
?>

<!-- end header - do not place anything above this line -->

<!-- page content begins here -->

<div class="page-header">
        <h1 class="blog-title text-center">Barony Armorial: Active Members</h1>
        <h4 class="text-center"><a href="armorial-inactives.php">Inactive Members</a> | <a href="armorial-memorials.php">Member Memorials</a></h4>

</div>

<div class="container">
      <div class="row"> <!-- Row 1 -->
        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/adalydedesardaigne.png" height="150px" alt="Per bend azure and vert, a bend between a natural sea-tortoise and three seeblätter argent." title="Per bend azure and vert, a bend between a natural sea-tortoise and three seeblätter argent."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Adalyde de Sardaigne</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=3");
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
      <div class="row">
        <div class="col-md-12">
          <hr width="75%"/>
        </div>
      </div>
      <div class="row"> <!-- Row 2 -->
        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <!-- <img src="images/armorial/image.jpg" height="150px" alt=""/> -->
            </div>
            <div class="media-body">
              <h3 class="media-heading">Aoffie O'Caleigh</h3>

              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=142");
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
    <div class="row">
      <div class="col-md-12">
        <hr width="75%"/>
      </div>
    </div>
      <div class="row"> <!-- Row 3 -->


        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="images/armorial/giata-alberti.jpg" height="150px" alt="Argent, a fleur-de-lys and on a chief gules three suns in their splendor Or." title="Argent, a fleur-de-lys and on a chief gules three suns in their splendor Or."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Giata Magdalena Alberti</h3>

              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=575");
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
              <img src="images/armorial/OnoraCathain.jpg" height="150px" alt="Sable, three fish naiant in annulo Or." title="Sable, three fish naiant in annulo Or."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">On&oacute;ra inghean mhic Cath&aacute;in</h3>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=1034");
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
              <img src="images/armorial/johannamerryngton.jpg" height="150px" alt="Vert, on a chevron inverted Or three ladybugs gules spotted sable and in base a domestic cat dormant argent." title="Vert, on a chevron inverted Or three ladybugs gules spotted sable and in base a domestic cat dormant argent."/>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Johanna Merryngton</h3>
              <p><small>
              <?php
              $ch = curl_init("http://records.gleannabhann.net/api/person_awards.php?id=1692");
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
</div> <!-- /.row -->
      <div class="row">
        <div class="row">
          <div class="col-md-12">
            <hr width="75%"/>
          </div>
        </div>
        <div class="row"> <!-- Row 5 -->

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
    <div class="row">
      <div class="col-md-12">
        <hr width="75%"/>
      </div>
    </div>


     </div><div class="row">
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

      <div class="row">
        <div class="col-md-12">
          <hr width="75%"/>
        </div>
      </div>
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
       <div class="col-md-12">
         <hr width="75%"/>
       </div>
     </div>
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

         </div>
         <div class="row">
           <div class="col-md-12">
             <hr width="75%"/>
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
