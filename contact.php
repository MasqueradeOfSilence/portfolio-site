<?php
  if($_POST["message"])
  {
    if ($_POST["mathQuestion"] == 45)
    {
      mail("softwaredev@alexanderneville.com", $_POST["subject"],
        $_POST["message"], "From: " . $_POST["name"] . ", " . $_POST["email"]);

      echo '<script type="text/JavaScript">
        window.alert("Email sent successfully.");
        </script>';

      echo '<script type="text/JavaScript">
        window.location = document.referrer;
        </script>';

      exit;
    }
    else
    {
      echo '<script type="text/JavaScript">
        window.alert("Email failed.");
        </script>';

      echo '<script type="text/JavaScript">
        window.location = document.referrer;
        </script>';

      exit;
    }
  }
  else
  {
    echo '<script type="text/JavaScript">
      window.alert("Email failed: Please fill out all boxes.");
      </script>';

    echo '<script type="text/JavaScript">
      window.location = document.referrer;
      </script>';

    exit;
  }
 ?>
