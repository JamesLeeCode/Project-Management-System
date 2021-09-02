<?php

  if($_POST['roles'] == "Department")
  {
    header("Location:../departmentDashboard.html");
    exit();
  }

  if($_POST['roles'] == "Contractors")
  {
    header("Location:../contractorsDashboard.html");
    exit();
  }

  if($_POST['roles'] == "Inspectors")
  {
    header("Location:../inspectorsDashboard.html");
    exit();
  }


?>
