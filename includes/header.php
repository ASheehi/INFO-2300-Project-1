<header>
    <?php
        function makeNav ($pageArr){
          $current_file = basename($_SERVER['PHP_SELF']);
          foreach ($pageArr as $page){
            if ($page[0] == $current_file){
              echo("<li class = active><a href=\"" . $page[0] . "\">" . $page[1] . "</a></li>");
            }
            else
              echo("<li><a href=\"" . $page[0] . "\">" . $page[1] . "</a></li>");
          }
        }
    ?>

    <div id = title>
        <img src ="images/logo.PNG" alt="logo" width="600" height="160">
        <h2>"Look at you looking at me, look at us!"</h2>
    </div>
    <nav id = "menu">
        <ul>
        <?php
            $pages = [array("index.php", "Home"), array("about.php", "About Us"), array("featured.php", "Featured Outfits"), array("fashedu.php", "Fashion & Educational Tips"), array("tipsubmit.php", "Submit a Tip!")];
            makeNav($pages);
        ?>
        </ul>
    </nav>
</header>
