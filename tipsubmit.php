<?php
include("includes/init.php");

$title = 'Submit a Tip!';

// Was the form submitted?
if (isset($_POST['submit'])) {
  // Assume the order is valid
  $valid_tip = TRUE;

  // Name is required.
  $name = trim( $_POST['name'] );
  if ( $name == '' ) {
    // No name was given (it's empty).
    $valid_tip = FALSE;
    $show_name_empty_error = TRUE;
  }

  if (isset($_POST['fashionBox'])) {$fashionBool = $_POST['fashionBox'];}
  if (isset($_POST['eduBox'])) {$eduBool = $_POST['eduBox'];}
  if (isset($fashionBool) || isset($eduBool)) {
    $valid_tip = TRUE;
  }
  else {
    $valid_tip = FALSE;
    $show_no_cat_error = TRUE;
  }

  // Sanitizes input for security purposes
  $tip = htmlspecialchars(filter_input(INPUT_POST, 'tip', FILTER_DEFAULT));

  // Check that the
  if ( trim( $_POST['tip'] ) == '' ) {
    $valid_tip = FALSE;
    $show_tip_empty_error = TRUE;
  }
  else if (strlen(trim( $_POST['tip'] )) > 150){
    $valid_tip = FALSE;
    $show_tip_max_error = TRUE;
  }
}
else {
  // Form was not submitted.
  //sets default tip and name 'value'
  $tip = '';
  $name = '';

}
?>
<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<body>
  <?php include("includes/header.php");?>

  <div id="content-wrap">
    <article id="form" style ="background-color: white; color: black; padding: 20px;">

      <h1 id="article-title", style ="color: black; padding-left: 525px; font-size: 200%;">Submit Your Tips Here!</h1>
      <h2 style="border: none; padding-left: 215px; padding-bottom: 20px;">Wanna add to our list we have here by sharing your wisdom?</h2>
      <p></p>

      <?php
      if ( isset($valid_tip) && $valid_tip ) { ?>

        <h2 style="border-color: red">Thank you, <?php echo htmlspecialchars($name); ?> for your <?php
        if (isset($fashionBool) && isset($eduBool)) {
            echo ("fashion/educational ");
        }
        else if (!isset($fashionBool)) {
            echo ("educational ");
        }
        else {
            echo ("fashion ");
        }
        ?>tip!</h2>
        <p></p>
        <h3><strong>This is what you wrote:</strong></h3>
        <h4><?php echo htmlspecialchars($tip); ?></h4>


      <?php } else { ?>

        <h2 style="border-color: red">Tip Submission Form</h2>
        <p style ="color: black;">Your tip can be a maximum of 150 characters.</p>
        <p style ="color: black;">Additionally, please provide a name that we can associate with your tip.</p>
        <p style ="color: black;">If you want to stay anonymous, feel free to put "Anonymous" or "Anon" in the name box.</p>

        <form id="tip_submission" method="post" action="tipsubmit.php">
          <fieldset>
            <legend>Tip Submission Form</legend>

            <p class="form_error <?php if ( !isset($show_name_empty_error) ) { echo 'hidden'; } ?>">Please give us your name so we can give you credit! If not, write "Anon" or "Anonymous".</p>
            <p>
              <label style ="color: black;" for="name_field">Name (just first name is fine):</label>
              <input id="name_field" type="text" name="name" value="<?php if( isset($name) ) { echo htmlspecialchars($name); } ?>"/>
            </p>

            <p class="form_error <?php if ( !isset($show_no_cat_error) ) { echo 'hidden'; } ?>">Please choose a tip category.</p>
            <p>
              <label style ="color: black;" for="fashion_box">Fashion Tip</label>
              <input id="fashion_box" type="checkbox" name="fashionBox" value="<?php isset($fashionBool) ?>"/>
            </p>
            <p>
              <label style ="color: black;" for="education_box">Educational Tip</label>
              <input id="education_box" type="checkbox" name="eduBox" value="<?php isset($eduBool) ?>"/>
            </p>

            <p class="form_error <?php if ( !isset($show_tip_empty_error) || !$show_tip_empty_error ) { echo 'hidden'; } ?>">You can't submit nothing!</p>
            <p class="form_error <?php if ( !isset($show_tip_max_error) || !$show_tip_max_error) { echo 'hidden'; } ?>">Character maximum is 150.</p>
            <p>
              <label style ="color: black;" for="tip_input">Write your tip here:</label>
              <input type="text" id="tip_input" name="tip" value="<?php if( isset($tip) ) { echo htmlspecialchars($tip); } ?>"/>
            </p>


            <input type="submit" name="submit" value="Submit tip"/>
          </fieldset>
        </form>

      <?php } ?>

    </article>
  </div>

  <?php include("includes/footer.php");?>
</body>

</html>
