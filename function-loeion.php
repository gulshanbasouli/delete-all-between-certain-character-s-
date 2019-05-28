/**
Author: Loeion
URI: http://www.loeion.com/	
*/

function delete_allcontent_between($startTag, $endTag, $contentString) {
  $beginningPosition = strpos($contentString, $startTag);
  $endingPosition = strpos($contentString, $endTag);
  if ($beginningPosition === false || $endingPosition === false) {
    return $contentString;
  }
  
  $textToDelete = substr($contentString, $beginningPosition, ($endingPosition + strlen($endTag)) - $beginningPosition);
  return delete_allcontent_between($startTag, $endTag, str_replace($textToDelete, '', $contentString)); // recursion for all replaced
}


//What data will be removed : (PHP Development)
$stringContent = 'Level of endeavour in organization (PHP Development) network.';
$finalContent  = delete_allcontent_between('(', ')', $stringContent);
