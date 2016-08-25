<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<title>Search</title>
<link href="tabs.css" rel="stylesheet" type="text/css"/>
<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="search/search.js"></script>
<link href="navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="navtree.js"></script>
<script type="text/javascript" src="resize.js"></script>
<script type="text/javascript">
$(document).ready(initResizable);
</script>
<link href="doxygen.css" rel="stylesheet" type="text/css"/>
</head>
<body onload='searchBox.DOMSearchField().focus()'>
<!-- Generated by Doxygen 1.7.4 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'Search');
--></script>
<div id="top">
<div id="titlearea">
<table cellspacing="0" cellpadding="0">
 <tbody>
 <tr style="height: 56px;">
  <td id="projectlogo"><img alt="Logo" src="spurGear.png"/></td>
  <td style="padding-left: 0.5em;">
   <div id="projectname">Prime Number Solver&#160;<span id="projectnumber">1.1</span></div>
   <div id="projectbrief">Uses the Sieve of Eratosthenes to determine numbers that are prime</div>
  </td>
 </tr>
 </tbody>
</table>
</div>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.html"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.html"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.html"><span>Modules</span></a></li>
      <li><a href="files.html"><span>Files</span></a></li>
      <li id="searchli">
        <div id="MSearchBox" class="MSearchBoxInactive">
          <span class="left">
            <form id="FSearchBox" action="search.php" method="get">
              <img id="MSearchSelect" src="search/mag.png" alt=""/>

<script language="php">

function search_results()
{
  return "Search Results";
}

function matches_text($num)
{
  if ($num==0)
  {
    return "Sorry, no documents matching your query.";
  }
  else if ($num==1)
  {
    return "Found <b>1</b> document matching your query.";
  }
  else // $num>1
  {
    return "Found <b>$num</b> documents matching your query. Showing best matches first.";
  }
}

function report_matches()
{
  return "Matches: ";
}
function end_form($value)
{
  echo "              <input type=\"text\" id=\"MSearchField\" name=\"query\" value=\"$value\" size=\"20\" accesskey=\"S\" onfocus=\"searchBox.OnSearchFieldFocus(true)\" onblur=\"searchBox.OnSearchFieldFocus(false)\"/>\n            </form>\n          </span><span class=\"right\"></span>\n        </div>\n      </li>\n    </ul>\n  </div>\n</div>\n<div id=\"side-nav\" class=\"ui-resizable side-nav-resizable\">\n  <div id=\"nav-tree\">\n    <div id=\"nav-tree-contents\">\n    </div>\n  </div>\n  <div id=\"splitbar\" style=\"-moz-user-select:none;\" \n       class=\"ui-resizable-handle\">\n  </div>\n</div>\n<script type=\"text/javascript\">\n  initNavTree('.html','');\n</script>\n<div id=\"doc-content\">\n";
}
function end_page()
{
  echo "</div>\n<div id=\"nav-path\" class=\"navpath\">\n  <ul>\n    <li class=\"footer\">Generated on Wed Aug 14 2013 19:25:47 for Prime Number Solver by&#160;\n<a href=\"http://www.doxygen.org/index.html\">\n<img class=\"footer\" src=\"doxygen.png\" alt=\"doxygen\"/></a> 1.7.4 </li>\n  </ul>\n</div>\n</body></html>";
}

function readInt($file)
{
  $b1 = ord(fgetc($file)); $b2 = ord(fgetc($file));
  $b3 = ord(fgetc($file)); $b4 = ord(fgetc($file));
  return ($b1<<24)|($b2<<16)|($b3<<8)|$b4;
}

function readString($file)
{
  $result="";
  while (ord($c=fgetc($file))) $result.=$c;
  return $result;
}

function readHeader($file)
{
  $header =fgetc($file); $header.=fgetc($file);
  $header.=fgetc($file); $header.=fgetc($file);
  return $header;
}

function computeIndex($word)
{
  // Simple hashing that allows for substring search
  if (strlen($word)<2) return -1;
  // high char of the index
  $hi = ord($word{0});
  if ($hi==0) return -1;
  // low char of the index
  $lo = ord($word{1});
  if ($lo==0) return -1;
  // return index
  return $hi*256+$lo;
}

function search($file,$word,&$statsList)
{
  $index = computeIndex($word);
  if ($index!=-1) // found a valid index
  {
    fseek($file,$index*4+4); // 4 bytes per entry, skip header
    $index = readInt($file);
    if ($index) // found words matching the hash key
    {
      $start=sizeof($statsList);
      $count=$start;
      fseek($file,$index);
      $w = readString($file);
      while ($w)
      {
        $statIdx = readInt($file);
        if ($word==substr($w,0,strlen($word)))
        { // found word that matches (as substring)
          $statsList[$count++]=array(
              "word"=>$word,
              "match"=>$w,
              "index"=>$statIdx,
              "full"=>strlen($w)==strlen($word),
              "docs"=>array()
              );
        }
        $w = readString($file);
      }
      $totalHi=0;
      $totalFreqHi=0;
      $totalFreqLo=0;
      for ($count=$start;$count<sizeof($statsList);$count++)
      {
        $statInfo = &$statsList[$count];
        $multiplier = 1;
        // whole word matches have a double weight
        if ($statInfo["full"]) $multiplier=2;
        fseek($file,$statInfo["index"]); 
        $numDocs = readInt($file);
        $docInfo = array();
        // read docs info + occurrence frequency of the word
        for ($i=0;$i<$numDocs;$i++)
        {
          $idx=readInt($file); 
          $freq=readInt($file); 
          $docInfo[$i]=array("idx"  => $idx,
                             "freq" => $freq>>1,
                             "rank" => 0.0,
                             "hi"   => $freq&1
                            );
          if ($freq&1) // word occurs in high priority doc
          {
            $totalHi++;
            $totalFreqHi+=$freq*$multiplier;
          }
          else // word occurs in low priority doc
          {
            $totalFreqLo+=$freq*$multiplier;
          }
        }
        // read name and url info for the doc
        for ($i=0;$i<$numDocs;$i++)
        {
          fseek($file,$docInfo[$i]["idx"]);
          $docInfo[$i]["name"]=readString($file);
          $docInfo[$i]["url"]=readString($file);
        }
        $statInfo["docs"]=$docInfo;
      }
      $totalFreq=($totalHi+1)*$totalFreqLo + $totalFreqHi;
      for ($count=$start;$count<sizeof($statsList);$count++)
      {
        $statInfo = &$statsList[$count];
        $multiplier = 1;
        // whole word matches have a double weight
        if ($statInfo["full"]) $multiplier=2;
        for ($i=0;$i<sizeof($statInfo["docs"]);$i++)
        {
          $docInfo = &$statInfo["docs"];
          // compute frequency rank of the word in each doc
          $freq=$docInfo[$i]["freq"];
          if ($docInfo[$i]["hi"])
          {
            $statInfo["docs"][$i]["rank"]=
              (float)($freq*$multiplier+$totalFreqLo)/$totalFreq;
          }
          else
          {
            $statInfo["docs"][$i]["rank"]=
              (float)($freq*$multiplier)/$totalFreq;
          }
        }
      }
    }
  }
  return $statsList;
}

function combine_results($results,&$docs)
{
  foreach ($results as $wordInfo)
  {
    $docsList = &$wordInfo["docs"];
    foreach ($docsList as $di)
    {
      $key=$di["url"];
      $rank=$di["rank"];
      if (isset($docs[$key]))
      {
        $docs[$key]["rank"]+=$rank;
      }
      else
      {
        $docs[$key] = array("url"=>$key,
            "name"=>$di["name"],
            "rank"=>$rank
            );
      }
      $docs[$key]["words"][] = array(
               "word"=>$wordInfo["word"],
               "match"=>$wordInfo["match"],
               "freq"=>$di["freq"]
               );
    }
  }
  return $docs;
}

function filter_results($docs,&$requiredWords,&$forbiddenWords)
{
  $filteredDocs=array();
  while (list ($key, $val) = each ($docs)) 
  {
    $words = &$docs[$key]["words"];
    $copy=1; // copy entry by default
    if (sizeof($requiredWords)>0)
    {
      foreach ($requiredWords as $reqWord)
      {
        $found=0;
        foreach ($words as $wordInfo)
        { 
          $found = $wordInfo["word"]==$reqWord;
          if ($found) break;
        }
        if (!$found) 
        {
          $copy=0; // document contains none of the required words
          break;
        }
      }
    }
    if (sizeof($forbiddenWords)>0)
    {
      foreach ($words as $wordInfo)
      {
        if (in_array($wordInfo["word"],$forbiddenWords))
        {
          $copy=0; // document contains a forbidden word
          break;
        }
      }
    }
    if ($copy) $filteredDocs[$key]=$docs[$key];
  }
  return $filteredDocs;
}

function compare_rank($a,$b)
{
  if ($a["rank"] == $b["rank"]) 
  {
    return 0;
  }
  return ($a["rank"]>$b["rank"]) ? -1 : 1; 
}

function sort_results($docs,&$sorted)
{
  $sorted = $docs;
  usort($sorted,"compare_rank");
  return $sorted;
}

function report_results(&$docs)
{
  echo "<div class=\"header\">";
  echo "  <div class=\"headertitle\">\n";
  echo "    <h1>".search_results()."</h1>\n";
  echo "  </div>\n";
  echo "</div>\n";
  echo "<div class=\"searchresults\">\n";
  echo "<table cellspacing=\"2\">\n";
  $numDocs = sizeof($docs);
  if ($numDocs==0)
  {
    echo "  <tr>\n";
    echo "    <td colspan=\"2\">".matches_text(0)."</td>\n";
    echo "  </tr>\n";
  }
  else
  {
    echo "  <tr>\n";
    echo "    <td colspan=\"2\">".matches_text($numDocs);
    echo "\n";
    echo "    </td>\n";
    echo "  </tr>\n";
    $num=1;
    foreach ($docs as $doc)
    {
      echo "  <tr>\n";
      echo "    <td align=\"right\">$num.</td>";
      echo     "<td><a class=\"el\" href=\"".$doc["url"]."\">".$doc["name"]."</a></td>\n";
      echo "  <tr>\n";
      echo "    <td></td><td class=\"tiny\">".report_matches()." ";
      foreach ($doc["words"] as $wordInfo)
      {
        $word = $wordInfo["word"];
        $matchRight = substr($wordInfo["match"],strlen($word));
        echo "<b>$word</b>$matchRight(".$wordInfo["freq"].") ";
      }
      echo "    </td>\n";
      echo "  </tr>\n";
      $num++;
    }
  }
  echo "</table>\n";
}

function main()
{
  if(strcmp('4.1.0', phpversion()) > 0) 
  {
    die("Error: PHP version 4.1.0 or above required!");
  }
  if (!($file=fopen("search/search.idx","rb"))) 
  {
    die("Error: Search index file could NOT be opened!");
  }
  if (readHeader($file)!="DOXS")
  {
    die("Error: Header of index file is invalid!");
  }
  $query="";
  if (array_key_exists("query", $_GET))
  {
    $query=$_GET["query"];
  }
  end_form(preg_replace("/[^a-zA-Z0-9\-\_\.]/i", " ", $query ));
  $results = array();
  $requiredWords = array();
  $forbiddenWords = array();
  $foundWords = array();
  $word=strtok($query," ");
  while ($word) // for each word in the search query
  {
    if (($word{0}=='+')) { $word=substr($word,1); $requiredWords[]=$word; }
    if (($word{0}=='-')) { $word=substr($word,1); $forbiddenWords[]=$word; }
    if (!in_array($word,$foundWords))
    {
      $foundWords[]=$word;
      search($file,strtolower($word),$results);
    }
    $word=strtok(" ");
  }
  $docs = array();
  combine_results($results,$docs);
  // filter out documents with forbidden word or that do not contain
  // required words
  $filteredDocs = filter_results($docs,$requiredWords,$forbiddenWords);
  // sort the results based on rank
  $sorted = array();
  sort_results($filteredDocs,$sorted);
  // report results to the user
  report_results($sorted);
  echo "</div>\n";
  end_page();
  fclose($file);
}

main();


</script>

</body>
</html>