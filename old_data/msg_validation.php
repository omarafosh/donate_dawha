          <?php
          function msg_validation($field)
          {
          ?>
            <ul style="list-style-type: none;">
              <?php
              if (isset($_SESSION['errors'][$field])) {
                foreach ($_SESSION['errors'][$field] as $err) {
              ?>
                  <li><?php echo $err; ?></li>
                <?php
                }
                ?>
            </ul>
          <?php }
            } ?>