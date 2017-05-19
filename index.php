
<form class="" action="index.php" method="post">
  <fieldset>
    <legend>Input Your Data Here</legend>

    <input type="text" name="from" value="" placeholder="From">
    <input type="text" name="to" value="" placeholder="To">
    <input type="submit" name="" value="Submit">
  </fieldset>
</form>
<form>
  <fieldset>
    <legend>Output</legend>
        <?php
        $from = $_POST['from'];
        $to   = $_POST['to'];

        if ($from < $to) {
          while ($from <= $to) {
            echo $from . '<br>';
            $from++;
          }
        } elseif ($to < $from) {
          while ($to <= $from) {
            echo $from . '<br>';
            $from--;
          }
        }
        ?>
</fieldset>
</form>
