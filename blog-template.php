<!-- begin header - do not modify -->

<?php include("/templates/header.php");
?>

<!-- end header - do not place anything above this line -->

<!-- page content begins here -->

<div class="blog-header">
        <h1 class="blog-title">Blog Title</h1>
        <p class="lead blog-description">Blog description</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Blog Post Title</h2>

            <p>Put the blog post content in here</p>
            <hr>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->


<!-- this is the sidebar for extra info -->
<!-- do not insert anything here that you would want to appear on every single page -->
<!-- use a PHP include for things you want to appear on multiple pages -->
         <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Info about the page or the page's topic goes here</p>
          </div>
          <div class="sidebar-module">
            <h4>List Heading</h4>
            <ol class="list-unstyled">
              <li><a href="#">Item 1</a></li>
              <li><a href="#">Item 2</a></li>
              <li><a href="#">Item 3</a></li>
              <li><a href="#">Item 4</a></li>
              <li><a href="#">Item 5</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">Google</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->


    <!-- page-specific footer -->
    <footer class="blog-footer">
      <p class="text-center">If you want to include a page-specific footer, it goes here.</p>

    </footer>

<!-- page content ends here -->

<!-- Begin Footer - do not modify or insert anything after this -->

<?php include("/templates/footer.php");
?>
<!-- end of footer -->
