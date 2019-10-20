<?php

	
	$degree= $_POST['option'];
	 if(empty($degree))

  {

    echo("");

  }
  else

  {

    $S = count($degree);

    for($i=0; $i < $S; $i++)
    {
      echo($degree[$i] . " ");
    }
  }


?>
