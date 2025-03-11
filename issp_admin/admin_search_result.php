<?php

  $strJsonFileContents = file_get_contents("../json/admin_search.json");
  $arrayJSON = json_decode($strJsonFileContents, true);
  
  $input = preg_quote($_POST['search_key'], '~');
  
  $result = preg_grep('/' . $input . '/i', array_column($arrayJSON, 'keyword'));
  
  $resultKeys = array_keys($result);

?>

<!-- Page Content  -->

<div>

  <h2>Search Results</h2>
  <p>Search finished, found <?=count($resultKeys);?> page(s) matching the search query.</p>

  <br>

  <table class="tbl_search">
    <?php
    for ($i=0; $i < count($resultKeys); $i++) { 
    ?>
      <tr>
        <th onclick="content('<?=$arrayJSON[$resultKeys[$i]]['target']?>')"><?=$arrayJSON[$resultKeys[$i]]['keyword'];?></th>
      </tr>
    <?php
    }
    ?>
  </table>    
 
</div>
