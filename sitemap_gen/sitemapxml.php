<?php

/*
<html><body><p>
<span style="font-weight: bold;
color: #ff3300;
">To function this software must be uploaded and run on your server and your server must support the php scripting language.</span> If this message appears in your browser when the file is run from your server, php is not available on that server. Without php this software will not function. When php is supported by your server none of this message is displayed or sent to the browser. For more information visit <a href="www.softswot.com">www.softswot.com</a>.
</p><p>
Software : SiteMap XML Dymanic SiteMap Generator Software<br />
Company: softSWOT<br />
Web Site: http://www.softswot.com<br />
Copyright: www.softswot.com<br />
</p></body></html>

#### Start User Configuration Settings.
The following defualt variables can be user defined by opening this file in a text editor and adjusting the values between each "". For more information visit www.softswot.com.
*/

$siteMapType="google";
$startUrls="";
$incUrls=".htm,.php";
$excUrls="PHPSESS";
$depthNum=1;
$limitNum=1000;
$delaySec=0.1;
$urlLastMod="";
$urlSort="";
$urlTitle="";
$urlDesc="";
$urlUrl="";
$urlCount="";
$htmlFull="true";
$htmlTitleTag="p";
$htmlDescTag="p";
$urlVals="";
$priVals="";
$freqVals="";
$priDef="0.5";
$freqDef="weekly";
/*
#### End User Configuration Settings.
*/

error_reporting(E_ERROR);$dynamicSiteMap='false';$lastModName='Last-Modified:';$titleTag='title';$descTag='description';$genGStart='<?xml version="1.0" encoding="UTF-8"?>';$genGStart.='<urlset xmlns="http://www.google.com/schemas/sitemap/0.84" ';$genGStart.='xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" ';$genGStart.='xsi:schemaLocation="http://www.google.com/schemas/sitemap/0.84 ';$genGStart.='http://www.google.com/schemas/sitemap/0.84/sitemap.xsd">';$genGEnd='</urlset>';$genSMPStart='<?xml version="1.0" encoding="UTF-8"?>';$genSMPStart.='<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" ';$genSMPStart.='xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 ';$genSMPStart.='http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" ';$genSMPStart.='xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';$genSMPEnd='</urlset>';$genRStart='<?xml version="1.0" encoding="UTF-8"?>';$genRStart.='<rss version="2.0"><channel>';$genREnd="</channel></rss>";$genHStart='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">';$genHEnd='</body></html>';$generator="SiteMap XML www.softswot.com";$genOut='';$hostDom='';$limitCnt=0;$linkCnt=0;$depthCnt=0;$useUrls=array();$curUrls=array();$useeol='\n';$nowTime = gmdate('D, d M Y H:i:s O');$debug='';if(isset($_POST['Action'])){foreach($_POST as $name=>$val){if (get_magic_quotes_gpc()){$val=stripslashes($val);$val=trim($val);}else{$val=trim($val);}if(strpos($name,'Urls')||strpos($name,'Vals')){$vals=explode(',',$val);$$name=array_map('trim',$vals);}else{$$name=$val;}}}if(!empty($Action)&&$Action=='Display Static SiteMap'&&!empty($outputTA)){if(!empty($siteMapType)){if($siteMapType=='google'||$siteMapType=='rss'||$siteMapType=='sitemapsprotocol'){header('Content-type: text/xml');}elseif($siteMapType=='html'){header('Content-type: text/html');}elseif($siteMapType=='text'){header('Content-type: text/plain');}}echo $outputTA;exit;}function smRun(){global $genOut;global $hostDom;global $limitCnt;global $linkCnt;global $depthCnt;global $depthNum;global $limitNum;global $siteMapType;global $startUrls;global $startUrlsFir;global $genGStart;global $genGEnd;global $genSMPStart;global $genSMPEnd;global $debug;set_time_limit ( 600 );$depthCnt=0;$limitCnt=0;$linkCnt=0;$useUrls=array();$curUrls=array();$genOut='';$hostDom='';for($depthCnt=0;$depthCnt<=$depthNum;$depthCnt++){if($limitCnt<=$limitNum){getLinks();}}if($siteMapType=='google'){genGXml();}elseif($siteMapType=='rss'){genRss();}elseif($siteMapType=='html'){genHtml();}elseif($siteMapType=='text'){genTxt();}elseif($siteMapType=='sitemapsprotocol'){$genGStart=$genSMPStart;$genGEnd=$genSMPEnd;genGXml();}$depthCnt--;$startUrls=$startUrlsFir;}function getLinks(){global $startUrls;global $incUrls;global $excUrls;global $depthNum;global $depthCnt;global $limitNum;global $useUrls;global $curUrls;global $limitCnt;global $delaySec;global $startUrlsFir;global $hostDom;global $linkCnt;global $dynamicSiteMap;global $debug;$fileSt="http://";$fileStLen=strlen($fileSt);$fileWWW="www.";$fileWWWLen=strlen($fileWWW);if($depthCnt>0){$startUrls=$curUrls;$curUrls=array();}else{$startUrlsFir=$startUrls;}foreach($startUrls as $startUrl){if(empty($hostDom)){if (substr($startUrl,0,$fileStLen) != $fileSt){$startUrl=$fileSt.$startUrl;}$urlParts=parse_url($startUrl);$hostDom = $urlParts['host'];$hostDom = strtolower($hostDom);}$urlParts=parse_url($startUrl);if(!empty($urlParts['host'])){$hostUrl=$urlParts['host'];$hostUrl=strtolower($hostUrl);}else{$hostUrl=$hostDom;}if($dynamicSiteMap!='true'){echo"disMess('Site Domain $hostDom');";}if($hostUrl==$hostDom){if($delaySec>0){usleep($delaySec*1000000);}$useHtml=@file_get_contents($startUrl);if($useHtml===false){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $startUrl);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);$useHtml=curl_exec($ch);if($useHtml===false){echo"<p>Error - Unable to retrieve file contents. If this problem persists your server may not support file_get_contents or curl and is unable to read url contents.</p>";curl_close($ch);exit;}curl_close($ch);}$pattern='`href=[\"\']([^>\'\"\s\t\n\r]+)[\"\']`i';preg_match_all($pattern,$useHtml,$matchUrls);$uniUrls=array_unique($matchUrls[1]);$limitCnt=$limitCnt+count($uniUrls);$addUrls=array($startUrl);$linkUrls=array_merge($addUrls,$uniUrls);foreach($linkUrls as $linkUrl){$linkUrl=utfEncode($linkUrl);$fragLen=strpos($linkUrl,'#');if($fragLen!==false){$linkUrl=substr($linkUrl,0,$fragLen);}$trimUrl=strtolower($linkUrl);if (substr($trimUrl,0,$fileStLen) == $fileSt){$trimUrl=substr($trimUrl, $fileStLen);}if(substr($trimUrl,-1) == "/"){$trimUrl=substr($trimUrl, 0, -1);$trimUrl=trim($trimUrl);if(empty($trimUrl)){$trimUrl=$hostDom;}}$incMk=false;if($trimUrl==$hostDom){$incMk=true;$excMk=false;$linkUrl=$fileSt.$hostUrl.'/';}else{foreach($incUrls as $incUrl){if(!empty($incUrl)){$incCk=strpos($linkUrl,$incUrl);}else{$incCk=false;}if($incCk!==false){$incMk=true;break;}}$excMk=false;foreach($excUrls as $excUrl){if(!empty($excUrl)){$excCk=strpos($linkUrl,$excUrl);}else{$excCk=false;}if($excCk!==false){$excMk=true;break;}}}if($incMk===true&&$excMk===false){$linkParts=parse_url($linkUrl);if(!empty($linkParts['host'])){$hostLink=$linkParts['host'];$hostLink=strtolower($hostLink);if($hostLink==$hostDom){$useUrls[]=$linkUrl;$curUrls[]=$linkUrl;}}elseif(strpos($linkUrl,"../")!==false){$pattern = '/';$curDirs = explode($pattern,$startUrl);$curDirs = array_reverse($curDirs);if(substr($startUrl,-1) != "/"){unset($curDirs[0]);}$relDirs = explode($pattern,$linkUrl);$relDirs = array_reverse($relDirs);$upDir=count($relDirs);$absDirs=array();$curLev=1;for ($dirLev=0;$dirLev<$upDir;$dirLev++){if($relDirs[$dirLev]!='..'){$absDirs[]=$relDirs[$dirLev];}else{unset($curDirs[$curLev]);$curLev++;}}$pattern = '/';$absDirs = array_reverse($absDirs);$absDir=implode($pattern,$absDirs);$curDirs = array_reverse($curDirs);$curDir=implode($pattern,$curDirs);$linkUrl="$curDir/$absDir";$useUrls[]=$linkUrl;$curUrls[]=$linkUrl;}else{if(substr($linkUrl,0,1)!='/'){$linkUrl='/'.$linkUrl;}$linkUrl='http://'.$hostUrl.$linkUrl;$useUrls[]=$linkUrl;$curUrls[]=$linkUrl;}if($dynamicSiteMap!='true'){echo"disMess('Processing $linkUrl');";}}}}}$useUrls=array_unique($useUrls);$linkCnt=count($useUrls);}function genGXml(){global $useUrls;global $urlVals;global $priVals;global $freqVals;global $priDef;global $freqDef;global $genOut;global $urlSort;global $urlLastMod;global $genGStart;global $genGEnd;if(!empty($urlSort)&&$urlSort!='false'){sort($useUrls);}foreach($useUrls as $linkUrl){$priUse=$priDef;$freqUse=$freqDef;$arrPos=0;foreach($urlVals as $urlVal){if(!empty($urlVal)&&$urlVal!='false'){$urlCk=strpos($linkUrl,$urlVal);}else{$urlCk=false;}if($urlCk!==false){$priUse=$priVals[$arrPos];$freqUse=$freqVals[$arrPos];break;}$arrPos++;}$genOut.=" <url><loc>$linkUrl</loc>";if(!empty($urlLastMod)&&$urlLastMod!='false'){http($linkUrl);}$genOut.="<priority>$priUse</priority><changefreq>$freqUse</changefreq></url>";}$genOut=$genGStart.$genOut.$genGEnd;}function genRss(){global $useUrls;global $hostDom;global $genOut;global $urlTitle;global $urlDesc;global $urlLastMod;global $urlSort;global $generator;global $genRStart;global $genREnd;$rssTime = gmdate('D, d M Y H:i:s O');$genRStart.="<title>Site Map $hostDom</title>";$genRStart.="<link>$hostDom</link>";$genRStart.="<description>Site Map for the domain $hostDom</description>";$genRStart.="<lastBuildDate>$rssTime</lastBuildDate>";$genRStart.="<generator>$generator</generator>";if(!empty($urlSort)&&$urlSort!='false'){sort($useUrls);}foreach($useUrls as $linkUrl){if((!empty($urlTitle)&&$urlTitle!='false')||(!empty($urlDesc)&&$urlDesc!='false')||(!empty($urlLastMod)&&$urLastMod!='false')){http($linkUrl);}else{$genOut.="<item>";$genOut.="<link>$linkUrl</link>";$genOut.="</item>";}}$genOut=$genRStart.$genOut.$genREnd;}function genHtml(){global $useUrls;global $genOut;global $linkCnt;global $hostDom;global $urlTitle;global $urlDesc;global $urlLastMod;global $urlCount;global $urlSort;global $titleTag;global $htmlTitleTag;global $htmlFull;global $urlNum;global $genHStart;global $genHEnd;$genHStart.="<head><title>Site Map $hostDom</title></head><body>";if(!empty($urlSort)&&$urlSort!='false'){sort($useUrls);}$urlNum=0;foreach($useUrls as $linkUrl){if(!empty($urlCount)&&$urlCount!='false'){$urlNum++;}if((!empty($urlTitle)&&$urlTitle!='false')||(!empty($urlDesc)&&$urlDesc!='false')||(!empty($urlLastMod)&&$urlLastMod!='false')){http($linkUrl);}else{$genOut.='<'.$htmlTitleTag.' class="sm'.$titleTag.'">';if($urlNum>0){$genOut.=$urlNum.'. ';}$genOut.='<a href="'.$linkUrl.'">'.$linkUrl.'</a>';$genOut.='</'.$htmlTitleTag.'>';}}if(!empty($htmlFull)&&$htmlFull!='false'){$genOut=$genHStart.$genOut.$genHEnd;}}function genTxt(){global $useUrls;global $genOut;global $urlSort;global $useeol;global $urlTitle;global $urlDesc;global $urlLastMod;if(!empty($urlSort)&&$urlSort!='false'){sort($useUrls);}foreach($useUrls as $linkUrl){if((!empty($urlTitle)&&$urlTitle!='false')||(!empty($urlDesc)&&$urlDesc!='false')||(!empty($urlLastMod)&&$urlLastMod!='false')){http($linkUrl);}else{$genOut.=$linkUrl.$useeol;}}}function http($useUrl){global $genOut;global $urlTitle;global $urlDesc;global $urlLastMod;global $urlUrl;global $urlNum;global $htmlTitleTag;global $htmlDescTag;global $siteMapType;global $lastModName;global $lastMod;global $titleTag;global $descTag;global $generator;global $nowTime;global $useeol;global $debug;$title='No Title';$desc='No Description';if($siteMapType=='google'||$siteMapType=='sitemapsprotocol'||((empty($urlTitle)||$urlTitle=='false')&&(empty($urlDesc)||$urlDesc=='false'))){$useReq='HEAD';}else{$useReq='GET';}$urlParts=parse_url($useUrl);if($urlParts!==false){$useHost=$urlParts['host'];$usePath=$urlParts['path'];if(empty($usePath)){$usePath='/';}$header="$useReq $usePath HTTP/1.1 \r\n";$header.="Host: $useHost \r\n";$header.="User-Agent: $generator \r\n";$header.="Connection: Close \r\n\r\n";$fp = fsockopen($useHost,80,$errno,$errstr,30);if (!$fp){$debug.="<p><span class='err'>Connection Fail:</span> Unable to connect to $useUrl</p>";}else{$lastMod='';$res='';fputs ($fp, $header);while (!feof($fp)){$resLine=fgets($fp, 1024);$res.=$resLine;if((!empty($urlLastMod)&&$urlLastMod!='false')&&strpos($resLine,$lastModName)!==false&&empty($lastMod)){$lastModNameLen=strlen($lastModName);$lastMod=trim(substr($resLine,$lastModNameLen));}}fclose ($fp);}if(empty($lastMod)){$lastMod=$nowTime;}if((!empty($urlTitle)&&$urlTitle!='false')&&!empty($res)){$matchGets==array();$pattern="`<\s*".$titleTag."\s*>([^<]+)<\/\s*".$titleTag."\s*>`i";preg_match($pattern,$res,$matchGets);if(!empty($matchGets[1])){$title=$matchGets[1];$title=trim($title);$title=utfEncode($title);}}if((!empty($urlDesc)&&$urlDesc!='false')&&!empty($res)){$matchGets==array();$pattern="`name\s*=\s*[\"\']?\s*".$descTag."\s*[\"\']?\s*content\s*=\s*[\"\']([^>\'\"]+)[\"\']`i";preg_match($pattern,$res,$matchGets);if(!empty($matchGets[1])){$desc=$matchGets[1];$desc=trim($desc);$desc=utfEncode($desc);}}if($siteMapType=='google'||$siteMapType=='sitemapsprotocol'){$lastModTS=strtotime($lastMod);if(!empty($lastModTS)){$genOut.='<lastmod>'.gmdate("Y-m-d\TH:i:s+00:00",$lastModTS).'</lastmod>';}}elseif($siteMapType=='rss'){$genOut.="<item>";if(!empty($title)&&(!empty($urlTitle)&&$urlTitle!='false')){$genOut.="<title>$title</title>";}$genOut.="<link>$useUrl</link>";if(!empty($desc)&&(!empty($urlDesc)&&$urlDesc!='false')){$genOut.="<description>$desc</description>";}if(!empty($lastMod)&&(!empty($urlLastMod)&&$urlLastMod!='false')){$genOut.="<pubDate>$lastMod</pubDate>";}$genOut.="</item>";}elseif($siteMapType=='html'){$genOut.='<'.$htmlTitleTag.' class="sm'.$titleTag.'">';if($urlNum>0){$genOut.=$urlNum.'. ';}if(empty($title)||$title=='No Title'){$title=$useUrl;}$genOut.='<a href="'.$useUrl.'">'.$title.'</a>';if(!empty($lastMod)&&(!empty($urlLastMod)&&$urlLastMod!='false')){$genOut.='<br />'.$lastMod;}if($title!=$useUrl&&(!empty($urlUrl)&&$urlUrl!='false')){$genOut.='<br />'.$useUrl;}$genOut.='</'.$htmlTitleTag.'>';if(!empty($desc)&&(!empty($urlDesc)&&$urlDesc!='false')){$genOut.='<'.$htmlDescTag.' class="sm'.$descTag.'">'.$desc.'</'.$htmlDescTag.'>';}}elseif($siteMapType=='text'){if(!empty($title)&&(!empty($urlTitle)&&$urlTitle!='false')){$genOut.=$title.$useeol;}$genOut.=$useUrl.$useeol;if(!empty($lastMod)&&(!empty($urlLastMod)&&$urlLastMod!='false')){$genOut.=$lastMod.$useeol;}if(!empty($desc)&&(!empty($urlDesc)&&$urlDesc!='false')){$genOut.=$desc.$useeol;}}}else{$debug.="<p><span class='err'>Error:</span> Could not $useReq $useUrl</p>";}}function utfEncode($utfEncoded){$utfEncoded=html_entity_decode($utfEncoded,ENT_QUOTES);$utfEncoded=htmlentities($utfEncoded,ENT_QUOTES);$utfEncoded=utf8_encode($utfEncoded);return $utfEncoded;}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="http://www.softswot.com/favicon.ico" />
    <link rel="shortcut icon" href="http://www.softswot.com/favicon.ico" />
<style type="text/css">
/*<![CDATA[*/
<!-- 
body {margin:0px; padding:0px; background-color: #ffffff; color: #000000; width:100%; text-align: justify; vertical-align: top; font-size: smaller;  font-family: verdana, arial, helvetica, sans-serif;line-height: 150%;}
.note {color:#ffffff;background-color:#000066;font-size:10px;font-weight:normal;line-height:120%;text-decoration:none;padding:0px;margin:0px;position:absolute;}
a{text-decoration: underline; font-weight: bold;}
a:link {color: #000066; background-color: #ffffff; }
a:visited {color:#006699; background-color: #ffffff;}
a:hover {color:#ffffff; background-color: #000066;}
a.help {position:absolute; margin:0px; padding:0px;font-weight: bold; color: #cccccc; background-color: #ffffff;line-height: 120%;}
a.help:visited {color: #cccccc; background-color: #ffffff;}
a.help:hover {color: #cccccc; background-color: #ffffff;}
a.menutop{float: left; font-weight: bold; font-size: 10px; font-family: verdana, arial, helvetica, sans-serif; margin-left: 0px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px; padding: 5px;line-height: 120%;}
a.menutop:link { color: #003399; background-color: #ffcc00;}
a.menutop:visited {color:#003399; background-color: #ffcc00;}
a.menutop:hover {color:#ffcc00; background-color: #003399;}
div.section{margin: 0px;}
div.menu {margin-left: 20px; margin-right: 20px; margin-top: 2px; margin-bottom: 20px;}
div.menuline{margin: 0px;clear: both; background-color: #ffcc00; height: 1px; width: 100%; font-size: 1px;}
h1 {margin: 5px; font-size: 20px; background-color: #ffffff; color: #000066; text-align: center;}
h2 {margin: 20px; font-size: 18px; background-color: #ffffff; color: #000066; text-align: center;}
input{margin:0px;}
.short{width:50px}
.long{width:300px}
.but{font-weight:bold;cursor:pointer;margin-top:5px;margin-bottom:5px;}
.small{margin: 0px; font-size: 10px; line-height: 120%;}
.smallcent {text-align: center; margin: 0px; font-size: 10px;line-height: 120%;}
.note{text-align: justify;}
span.lab{font-weight: bold;color: #000066;}
span.high{font-weight: bold;color: #ff3300;}
span.err{font-weight: bold;color: #ff0000;}
span.h2{margin: 5px;font-weight: bold;color: #000066;font-size: 14px;border-bottom-style: solid;border-bottom-width: 1px;border-bottom-color: #ffcc00;}
p{margin: 20px;}

table {margin-left: 20px; margin-right: 20px; margin-top: 5px; margin-bottom: 0px; text-align: left; vertical-align: top; border-collapse: collapse;width: 75%; font-size: 12px; font-family: verdana, arial, helvetica, sans-serif;}
table.inner{margin-left: 0px; margin-right: 0px; margin-top: 0px; margin-bottom: 0px;}
tr {width: 100%; vertical-align: top;}
td {vertical-align: top;}
td.three {width: 250px;}
textarea.status{border:none; border-color: #ffffff; overflow: hidden; font-size: 12px; font-weight: bold; color: #cc0000; font-family: verdana, arial, helvetica, sans-serif;}

-->
/*]]>*/
</style>
    <meta name="Copyright" content="Copyright www.softswot.com as a group member of www.bizpep.com" />
    <meta name="description" content="SiteMap XML Dynamic SiteMap Generator, for Google sitemaps, RSS sitemaps for Yahoo and MSN, HTML sitemaps, Text sitemaps and the new Sitemaps Protocol" />
    <meta name="keywords" content="SiteMap XML, SiteMap Generator, Dynamic SiteMap Generator, Google sitemap, RSS sitemap, HTML sitemap, Text sitemap, Sitemaps Protocol, sitemap, site map, google site map, softswot" />
<script type="text/javascript" src="smxpc.js">
</script>
    <title>
      SiteMap XML Dynamic SiteMap Generator - Google, RSS, HTML, Text and Sitemaps Protocol SiteMaps
    </title>
  </head>
  <body <?php  if(empty($_POST['Action'])){echo 'onload="javascript:init(\'dis\')"';}elseif($_POST['Action']=='Generate Static SiteMap'){echo 'onload="javascript:init(\'act\')"';} ?> >
   <div id="upgrade" class="section">
      <h2 style="color: #ff0000; background-color: #ffffff;">
        Browser Error
      </h2>
      <p>
        <b style="color: #ff0000; background-color: #ffffff;">For this software to function correctly your system should include a 5th Generation browser with JavaScript enabled</b>. Mozilla Firefox from version 1.0 or Microsoft Internet Explorer from version 5.5 (Windows 98) are recommended. Netscape Navigator from version 7.0 is also supported.
      </p>
      <p>
        If this message remains then your current browser does not appear to meet these requirements. This may be due to your browser blocking or disabling JavaScript or restricting Active Content. If this is the case please follow your browser help instructions to <b style="color: #ff0000; background-color: #ffffff;">unblock/enable JavaScript</b> or <b style="color: #ff0000; background-color: #ffffff;">Allow Blocked Content</b>. If required you can download current version browsers free of charge from:
      </p>
      <ul>
        <li>
          <a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a>
        </li>
        <li>
          <a href="http://www.microsoft.com/windows/ie/default.asp">Microsoft Internet Explorer</a>
        </li>
      </ul>
      <p>
        Once you have current browser software with JavaScript enabled you will be able to access all software functions.
      </p>
    </div>
    <div class="menu" id="menu">
      <a class="menutop" href="javascript:void(0);" onclick="javascript:section('input');return false;" onmouseover="javascript:nShow('input','20','20','200');" onmouseout="javascript:nHide('input');" name="ainput" id="ainput">Input</a>
			 <a class="menutop" href="javascript:void(0);" onclick="javascript:section('output');return false;" onmouseover="javascript:nShow('output','20','20','200');" onmouseout="javascript:nHide('output');" name="aoutput" id="aoutput">Output</a> <a class='menutop' href="http://www.softswot.com/sitemap/Help.html" target="_blank" onmouseover="javascript:nShow('help','20','20','200')" onmouseout="javascript:nHide('help')" name="ahelp" id="ahelp">Help</a> <a class="menutop" href="javascript:void(0);" onclick="javascript:section('reg');return false;" onmouseover="javascript:nShow('reg','20','20','200');" onmouseout="javascript:nHide('reg');" name="areg" id="areg">Registration</a>
			 <a class='menutop' href="http://www.softswot.com/" target="_blank" onmouseover="javascript:nShow('softswot','20','20','200')" onmouseout="javascript:nHide('softswot')" name="asoftswot" id="asoftswot">softSWOT.com</a>
			 
			 <a class='menutop' href="http://www.google.com/webmasters/sitemaps/docs/en/about.html" target="_blank" onmouseover="javascript:nShow('gsitemapweb','20','20','200')" onmouseout="javascript:nHide('gsitemapweb')" name="agsitemapweb" id="agsitemapweb">About Google Sitemaps</a>
			 <a class='menutop' href="http://www.google.com/webmasters/sitemaps" target="_blank" onmouseover="javascript:nShow('gsitemapacc','20','20','200')" onmouseout="javascript:nHide('gsitemapacc')" name="agsitemapacc" id="agsitemapacc">Google Sitemap Account</a>
			 <a class='menutop' href="http://submit.search.yahoo.com/free/request" target="_blank" onmouseover="javascript:nShow('yahoositemap','-220','20','200')" onmouseout="javascript:nHide('yahoositemap')" name="ayahoositemap" id="ayahoositemap">Yahoo Sitemap Submit</a>
	
	     <div class="menuline"></div>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="form" id="form" >
      <div id="input" class="section">
        <h2>
          Input Variables<a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#inputSect" id="ainputSect" name="ainputSect" onmouseover="javascript:nShow('inputSect','-220','20','200')" onmouseout="javascript:nHide('inputSect')">?</a>
        </h2>
				
				<p>Select the required <b>SiteMap Type</b>, input a url for the <b>Start URL's</b> value, set any other variables desired (it is recommended you start with the default settings) and click one of the <b>Generate</b> buttons. It is usually best to start with <b>Generate Static SiteMap</b> to ensure the generated SiteMap meets your requirements.</p>			
		
<table summary="layout">
<tr>
<td>
<span class="h2">SiteMap Type</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#smtype" id="asmtype" name="asmtype" onmouseover="javascript:nShow('smtype','20','20','200')" onmouseout="javascript:nHide('smtype')">?</a><br />
<input type="radio" name="siteMapType" value="google" <?php  if(empty($siteMapType)||$siteMapType=='google'){echo 'checked="checked"';} ?> onclick="javascript:radioClick(this.value)" />&nbsp;<span class="lab">Google SiteMap</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#gSiteMap" id="agSiteMap" name="agSiteMap" onmouseover="javascript:nShow('gSiteMap','20','20','200')" onmouseout="javascript:nHide('gSiteMap')">?</a>&nbsp;&nbsp;&nbsp; <input type="radio" name="siteMapType" value="rss" <?php  if(!empty($siteMapType)&&$siteMapType=='rss'){echo 'checked="checked"';} ?> onclick="javascript:radioClick(this.value)" />&nbsp;<span class="lab">RSS SiteMap</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#rssSiteMap" id="arssSiteMap" name="arssSiteMap" onmouseover="javascript:nShow('rssSiteMap','20','20','200')" onmouseout="javascript:nHide('rssSiteMap')">?</a>&nbsp;&nbsp;&nbsp; <input type="radio" name="siteMapType" value="html" <?php  if(!empty($siteMapType)&&$siteMapType=='html'){echo 'checked="checked"';} ?> onclick="javascript:radioClick(this.value)" />&nbsp;<span class="lab">HTML SiteMap</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#htmlSiteMap" id="ahtmlSiteMap" name="ahtmlSiteMap" onmouseover="javascript:nShow('htmlSiteMap','20','20','150')" onmouseout="javascript:nHide('htmlSiteMap')">?</a>&nbsp;&nbsp;&nbsp; <input type="radio" name="siteMapType" value="text" <?php  if(!empty($siteMapType)&&$siteMapType=='text'){echo 'checked="checked"';} ?> onclick="javascript:radioClick(this.value)" />&nbsp;<span class="lab">Text SiteMap</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#textSiteMap" id="atextSiteMap" name="atextSiteMap" onmouseover="javascript:nShow('textSiteMap','20','20','150')" onmouseout="javascript:nHide('textSiteMap')">?</a>&nbsp;&nbsp;&nbsp; <input type="radio" name="siteMapType" value="sitemapsprotocol" <?php  if(!empty($siteMapType)&&$siteMapType=='sitemapsprotocol'){echo 'checked="checked"';} ?> onclick="javascript:radioClick(this.value)" />&nbsp;<span class="lab">Sitemaps Protocol</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#smpSiteMap" id="asmpSiteMap" name="asmpSiteMap" onmouseover="javascript:nShow('smpSiteMap','-220','20','200')" onmouseout="javascript:nHide('smpSiteMap')">?</a>
<input type="hidden" name="siteMapTypeRadio" value="" />
</td>
</tr>
</table>


<table summary="layout">
<tr>
<td colspan='3'>
<span class="h2">SiteMap URLs</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#smurls" id="asmurls" name="asmurls" onmouseover="javascript:nShow('smurls','20','20','200')" onmouseout="javascript:nHide('smurls')">?</a>
</td></tr>

<tr>
<td colspan='3'>
<span class='lab'>Start URLs</span><a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#startUrls' id='astartUrls' name='astartUrls'onmouseover="javascript:nShow('startUrls','20','20','200')" onmouseout="javascript:nHide('startUrls')">?</a><br />
<textarea rows="2" cols="50" name="startUrls">&nbsp;</textarea>
</td>
</tr>


<tr>
<td class="three"><span class='lab'>Include URLs with</span><a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#incUrls' id='aincUrls' name='aincUrls' onmouseover="javascript:nShow('incUrls','20','20','200')" onmouseout="javascript:nHide('incUrls')">?</a><br />
<textarea rows="2" cols="20" name="incUrls">
</textarea>
</td>

<td class="three">
<span class='lab'>Exclude URLs with</span><a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#excUrls' id='aexcUrls' name='aexcUrls' onmouseover="javascript:nShow('excUrls','20','20','200')" onmouseout="javascript:nHide('excUrls')">?</a><br />
<textarea rows="2" cols="20" name="excUrls">
</textarea>
</td>

<td>

<table summary="layout" class='inner'>
<tr>

<td>
<span class='lab'>Depth</span><a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#depthNum' id='adepthNum' name='adepthNum' onmouseover="javascript:nShow('depthNum','-220','20','200')" onmouseout="javascript:nHide('depthNum')">?</a><br />
<select name="depthNum">
<option value='0'<?php if(isset($depthNum)&&$depthNum=='0'){echo ' selected="selected" ';} ?>>0</option> 
<option value='1'<?php if(isset($depthNum)&&$depthNum=='1'){echo ' selected="selected" ';} ?>>1</option>
<option value='2'<?php if(isset($depthNum)&&$depthNum=='2'){echo ' selected="selected" ';} ?>>2</option>
<option value='3'<?php if(isset($depthNum)&&$depthNum=='3'){echo ' selected="selected" ';} ?>>3</option>
<option value='4'<?php if(isset($depthNum)&&$depthNum=='4'){echo ' selected="selected" ';} ?>>4</option>
<option value='5'<?php if(isset($depthNum)&&$depthNum=='5'){echo ' selected="selected" ';} ?>>5</option>
</select>
</td>

<td>
<span class='lab'>Limit</span><a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#limitNum' id='alimitNum' name='alimitNum' onmouseover="javascript:nShow('limitNum','-220','20','200')" onmouseout="javascript:nHide('limitNum')">?</a><br />
<select name="limitNum">
<option value='10'<?php if(isset($limitNum)&&$limitNum=='10'){echo 'selected="selected"';} ?> >10</option>
<option value='100'<?php if(isset($limitNum)&&$limitNum=='100'){echo 'selected="selected"';} ?> >100</option>
<option value='1000'<?php if(isset($limitNum)&&$limitNum=='1000'){echo 'selected="selected"';} ?> >1000</option>
<option value='2000'<?php if(isset($limitNum)&&$limitNum=='2000'){echo 'selected="selected"';} ?> >2000</option>
<option value='3000'<?php if(isset($limitNum)&&$limitNum=='3000'){echo 'selected="selected"';} ?> >3000</option>
<option value='4000'<?php if(isset($limitNum)&&$limitNum=='4000'){echo 'selected="selected"';} ?> >4000</option>
<option value='5000'<?php if(isset($limitNum)&&$limitNum=='5000'){echo 'selected="selected"';} ?> >5000</option>
</select>
</td>

<td>
<span class='lab'>Delay</span><a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#delaySec' id='adelaySec' name='adelaySec' onmouseover="javascript:nShow('delaySec','-220','20','200')" onmouseout="javascript:nHide('delaySec')">?</a><br />
<select name="delaySec">
<option value='0.0'<?php if(isset($delaySec)&&$delaySec=='0.0'){echo 'selected="selected"';} ?> >0.0</option>
<option value='0.1'<?php if(isset($delaySec)&&$delaySec=='0.1'){echo 'selected="selected"';} ?> >0.1</option>
<option value='0.5'<?php if(isset($delaySec)&&$delaySec=='0.5'){echo 'selected="selected"';} ?> >0.5</option>
<option value='1.0'<?php if(isset($delaySec)&&$delaySec=='1.0'){echo 'selected="selected"';} ?> >1.0</option>
<option value='2.0'<?php if(isset($delaySec)&&$delaySec=='2.0'){echo 'selected="selected"';} ?> >2.0</option>
<option value='3.0'<?php if(isset($delaySec)&&$delaySec=='3.0'){echo 'selected="selected"';} ?> >3.0</option>
<option value='5.0'<?php if(isset($delaySec)&&$delaySec=='5.0'){echo 'selected="selected"';} ?> >5.0</option>
</select>
</td>

</tr>


</table>

</td>

</tr>
</table>

<table summary="layout">
<tr>
<td colspan='3'>
<span class="h2">SiteMap Formatting</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#smformat" id="asmformat" name="asmformat" onmouseover="javascript:nShow('smformat','20','20','200')" onmouseout="javascript:nHide('smformat')">?</a>
</td>
</tr>

<tr>
<td class="three">
<input type="checkbox" id="urlLastMod" name="urlLastMod" <?php  if(!empty($urlLastMod)){echo 'checked="checked"';} ?> />&nbsp;<span class="lab">Include Date Last Modified</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#urlLastMod" id="aurlLastMod" name="aurlLastMod" onmouseover="javascript:nShow('urlLastMod','20','-100','200')" onmouseout="javascript:nHide('urlLastMod')">?</a>
</td>
<td class="three">
<input type="checkbox" id="urlSort" name="urlSort" <?php  if(!empty($urlSort)){echo 'checked="checked"';} ?> />&nbsp;<span class="lab">Sort URL's</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#urlSort" id="aurlSort" name="aurlSort" onmouseover="javascript:nShow('urlSort','20','-100','150')" onmouseout="javascript:nHide('urlSort')">?</a>
</td>
<td>&nbsp;

</td>
</tr>
</table>


<table summary="layout" id='notgoogle' style="display: none">
<tr>
<td class="three">
<input type="checkbox" id="urlTitle" name="urlTitle" <?php  if(!empty($urlTitle)){echo 'checked="checked"';} ?> />&nbsp;<span class="lab">Include Title</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#urlTitle" id="aurlTitle" name="aurlTitle" onmouseover="javascript:nShow('urlTitle','20','-100','200')" onmouseout="javascript:nHide('urlTitle')">?</a>
</td>

<td class="three">
<input type="checkbox" id="urlDesc" name="urlDesc" <?php  if(!empty($urlDesc)){echo 'checked="checked"';} ?> />&nbsp;<span class="lab">Include Description</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#urlDesc" id="aurlDesc" name="aurlDesc" onmouseover="javascript:nShow('urlDesc','20','-100','150')" onmouseout="javascript:nHide('urlDesc')">?</a>
</td>
<td>&nbsp;

</td>
</tr>
</table>

<table summary="layout" id='htmlinc' style="display: none">
<tr>
<td class="three">
<input type="checkbox" id="urlUrl" name="urlUrl" <?php  if(!empty($urlUrl)){echo 'checked="checked"';} ?> />&nbsp;<span class="lab">Include Url</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#urlUrl" id="aurlUrl" name="aurlUrl" onmouseover="javascript:nShow('urlUrl','20','-100','150')" onmouseout="javascript:nHide('urlUrl')">?</a>
</td>
<td class="three">
<input type="checkbox" id="urlCount" name="urlCount" <?php  if(!empty($urlCount)){echo 'checked="checked"';} ?> />&nbsp;<span class="lab">Include Count</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#urlCount" id="aurlCount" name="aurlCount" onmouseover="javascript:nShow('urlCount','20','-100','150')" onmouseout="javascript:nHide('urlCount')">?</a>
</td>
<td>&nbsp;

</td>
</tr>
</table>

<table summary="layout" id='htmlform' style="display: none">
<tr>
<td class="three">
<input type="checkbox" id="htmlFull" name="htmlFull" <?php  if(!empty($htmlFull)){echo 'checked="checked"';} ?> />&nbsp;<span class="lab">Full HTML</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#htmlFull" id="ahtmlFull" name="ahtmlFull" onmouseover="javascript:nShow('htmlFull','20','-100','200')" onmouseout="javascript:nHide('htmlFull')">?</a>
</td>

<td class="three">
<input type="text" class="short" id="htmlTitleTag" name="htmlTitleTag" <?php  if(!empty($htmlTitleTag)){echo "value='$htmlTitleTag'";} ?> />&nbsp;<span class="lab">HTML Title Tag</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#htmlTitleTag" id="ahtmlTitleTag" name="ahtmlTitleTag" onmouseover="javascript:nShow('htmlTitleTag','20','-100','200')" onmouseout="javascript:nHide('htmlTitleTag')">?</a>
</td>

<td>
<input type="text" class="short" id="htmlDescTag" name="htmlDescTag" <?php  if(!empty($htmlDescTag)){echo "value='$htmlDescTag'";} ?> />&nbsp;<span class="lab">HTML Description Tag</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#htmlDescTag" id="ahtmlDescTag" name="ahtmlDescTag" onmouseover="javascript:nShow('htmlDescTag','-220','-100','200')" onmouseout="javascript:nHide('htmlDescTag')">?</a>
</td>
</tr>
</table>


<table summary="layout" id='googlevals'>

<tr >

<td class="three" width="33%"><span class='lab'>For URLs with</span><a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#urlVals' id='aurlVals' name='aurlVals' onmouseover="javascript:nShow('urlVals','20','-100','200')" onmouseout="javascript:nHide('urlVals')">?</a><br />
<textarea rows="2" cols="20" name="urlVals">
</textarea>
</td>

<td class="three" width="33%">
<span class='lab'>Set Priority as</span><a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#priVals' id='apriVals' name='apriVals'onmouseover="javascript:nShow('priVals','20','-100','200')" onmouseout="javascript:nHide('priVals')">?</a><br />
<textarea rows="2" cols="20" name="priVals">
</textarea>
</td>

<td>
<span class='lab'>Set Change Frequency as</span><a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#freqVals' id='afreqVals' name='afreqVals' onmouseover="javascript:nShow('freqVals','-220','-100','200')" onmouseout="javascript:nHide('freqVals')">?</a><br />
<textarea rows="2" cols="20" name="freqVals">
</textarea>
</td>

</tr>

<tr>

<td class="three">



</td>

<td class="three">
<span><span class='lab'>Default Priority</span><a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#priDef' id='apriDef' name='apriDef' onmouseover="javascript:nShow('priDef','20','-100','200')" onmouseout="javascript:nHide('priDef')">?</a><br />
<select name="priDef">
<option value='1.0'<?php if(isset($priDef)&&$priDef=='1.0'){echo 'selected="selected"';} ?> >1.0</option>
<option value='0.9'<?php if(isset($priDef)&&$priDef=='0.9'){echo 'selected="selected"';} ?> >0.9</option>
<option value='0.8'<?php if(isset($priDef)&&$priDef=='0.8'){echo 'selected="selected"';} ?> >0.8</option>
<option value='0.7'<?php if(isset($priDef)&&$priDef=='0.7'){echo 'selected="selected"';} ?> >0.7</option>
<option value='0.6'<?php if(isset($priDef)&&$priDef=='0.6'){echo 'selected="selected"';} ?> >0.6</option>
<option value='0.5'<?php if(isset($priDef)&&$priDef=='0.5'){echo 'selected="selected"';} ?> >0.5</option>
<option value='0.4'<?php if(isset($priDef)&&$priDef=='0.4'){echo 'selected="selected"';} ?> >0.4</option>
<option value='0.3'<?php if(isset($priDef)&&$priDef=='0.3'){echo 'selected="selected"';} ?> >0.3</option>
<option value='0.2'<?php if(isset($priDef)&&$priDef=='0.2'){echo 'selected="selected"';} ?> >0.2</option>
<option value='0.1'<?php if(isset($priDef)&&$priDef=='0.1'){echo 'selected="selected"';} ?> >0.1</option>
<option value='0.0'<?php if(isset($priDef)&&$priDef=='0.0'){echo 'selected="selected"';} ?> >0.0</option>
</select></span>
</td>

<td>
<span class='lab'>Default Change Frequency</span><a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#freqDef' id='afreqDef' name='afreqDef' onmouseover="javascript:nShow('freqDef','-220','-100','200')" onmouseout="javascript:nHide('freqDef')">?</a><br />
<select name="freqDef">
<option value='always'<?php if(isset($freqDef)&&$freqDef=='always'){echo 'selected="selected"';} ?> >always</option>
<option value='hourly'<?php if(isset($freqDef)&&$freqDef=='hourly'){echo 'selected="selected"';} ?> >hourly</option>
<option value='daily'<?php if(isset($freqDef)&&$freqDef=='daily'){echo 'selected="selected"';} ?> >daily</option>
<option value='weekly'<?php if(isset($freqDef)&&$freqDef=='weekly'){echo 'selected="selected"';} ?> >weekly</option>
<option value='monthly'<?php if(isset($freqDef)&&$freqDef=='monthly'){echo 'selected="selected"';} ?> >monthly</option>
<option value='yearly'<?php if(isset($freqDef)&&$freqDef=='yearly'){echo 'selected="selected"';} ?> >yearly</option>
<option value='never'<?php if(isset($freqDef)&&$freqDef=='never'){echo 'selected="selected"';} ?> >never</option>
</select>
</td>

</tr>


</table>

<table summary="layout">

<tr>
<td colspan='3'>
<input type="submit" class="but" name="Action" value="Generate Dynamic SiteMap Code" onclick="javascript:return genCheck();" /><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#genDyn" id="agenDyn" name="agenDyn" onmouseover="javascript:nShow('genDyn','20','-250','200')" onmouseout="javascript:nHide('genDyn')">?</a> <b>or</b> <input type="submit" class='but' name="Action" value="Generate Static SiteMap" onclick="javascript:return genCheck();" /><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#genStat" id="agenSta" name="agenSta" onmouseover="javascript:nShow('genSta','-220','-250','200')" onmouseout="javascript:nHide('genSta')">?</a>&nbsp;&nbsp;&nbsp; <a href="<?php echo $_SERVER['PHP_SELF'] ?>">Refresh SiteMap XML</a><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#refsm" id="arefsm" name="arefsm" onmouseover="javascript:nShow('refsm','-220','-250','200')" onmouseout="javascript:nHide('refsm')">?</a>
<br />
</td>
</tr>

</table>			
        <div class="menuline"></div><br />
      </div>
      <div id="output" class="section">
        <h2>
          Output<a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#outputSect" id="aoutputSect" name="aoutputSect" onmouseover="javascript:nShow('outputSect','-220','20','200')" onmouseout="javascript:nHide('outputSect')">?</a>
        </h2>
				
				<p><textarea class='status' rows="5" cols="100" name="statmes"></textarea></p>
				
        <p>
          <span class='h2'>Generated Output</span><a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#outputGen" id="aoutputGen" name="aoutputGen" onmouseover="javascript:nShow('outputGen','20','20','200')" onmouseout="javascript:nHide('outputGen')">?</a><br />
          <textarea rows="10" cols="75" name="outputTA" id="outptTA"></textarea>
        </p>	
        <p>
				
          <input type="button" class="but" value="Select All" onclick="javascript:selectta('outputTA');return false;" />
          <a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#outputSel' id='aoutputSel' name='aoutputSel' onmouseover="javascript:nShow('outputSel','20','-200','200')" onmouseout="javascript:nHide('outputSel')">?</a>&nbsp;

					<input type="submit" class='but' name="Action" value="Display Static SiteMap" onclick="javascript:return disStatic();" />
          <a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#display' id='adisplay' name='adisplay' onmouseover="javascript:nShow('display','20','-200','200')" onmouseout="javascript:nHide('display')">?</a>&nbsp;

					<input type="button" class="but" onclick="javascript:resetta('outputTA');return false;" value="Clear Output" />
					<a class="help" target="help" href="http://www.softswot.com/sitemap/Help.html#clear" id="aclear" name="aclear" onmouseover="javascript:nShow('clear','-220','-200','200')" onmouseout="javascript:nHide('clear')">?</a>&nbsp;
					
					<input type="reset" class='but' />
          <a class='help' target='help' href='http://www.softswot.com/sitemap/Help.html#reset' id='areset' name='areset' onmouseover="javascript:nShow('reset','-220','-200','200')" onmouseout="javascript:nHide('reset')">?</a>
		     
				</p>
      </div>
      
			<div id="reg" class="section"></div>
			
      <div id="hide" style="display: none">
        <span id="ninput">Start here and set the input variables for your SiteMap.</span>
				<span id="noutput">Generated output for Dynamic SiteMap Code or a Static SiteMap.</span>
				<span id="nhelp">Open the online Help file in a new window.</span>
				<span id="nreg">Access registration and support details.</span>
				<span id="nsoftswot">Go to software developer web site, www.softswot.com.</span>
				<span id='ngsitemapweb'>Open the About Google Sitemaps web page. Learn how Google uses sitemaps to index your site.</span>
				<span id='ngsitemapacc'>Open the Google Sitemap Account web page to directly access your Google Sitemap Account. Add and monitor your Google sitemaps.</span>
				<span id='nyahoositemap'>Open the Yahoo submission page to submit an RSS SiteMap to Yahoo.</span>
				
				<span id='ninputSect'>Set the Input variables as required and then click Generate Dynamic SiteMap Code or Generate Static SiteMap. Dynamic SiteMap Code can be uploaded to your server and when ever it is called will automatically build a SiteMap reflecting the current status of your site. A Static SiteMap can be uploaded to your site and when it is called will display a SiteMap of your site as it was when the Static SiteMap was generated. The SiteMap processing time depends upon the number of links extracted and the settings applied. It will generally range from less than a second to several minutes. An indicative processing time is 1 sec per 100 links extracted. Selecting Last Modified Date, Title, or Description variables will result in a slower processing time.</span>
				
				<span id='nsmtype'>Select the desired SiteMap type.</span>
				<span id='ngSiteMap'>Generates a SiteMap in the XML format required by Google Sitemaps. The new SiteMap Protocol is also supported by Google.</span>
				<span id='nrssSiteMap'>Generates a SiteMap in RSS format which is accepted by Yahoo and other search engines.</span>
				<span id='nhtmlSiteMap'>Generates a SiteMap in HTML format for your site showing the site pages for visitors and providing search engines with page links.</span>
				<span id='ntextSiteMap'>Generates a text SiteMap which is suitable as an alternative site map format for some search engines.</span>
				<span id='nsmpSiteMap'>Generates a SiteMap in the www.sitemaps.org XML protocol. This protocol is based on the Google XML format and designed to be supported by major search engines including Google, Yahoo and MSN.</span>
				
				<span id='nsmurls'>Set the variables for the urls to be included in the SiteMap.</span>
				<span id='nstartUrls'>Input the starting URLs (ie http://www.mydomain.com/), each url must be separated by a comma (ie ,). SiteMap XML will extract href links from each of these and if the set Depth is greater than 0 and the set Limit has not been reached extract href links from each of the links. The domain of the first URL will be set as the site domain and only URLs relating to this site and that pass the Include, Exclude tests will be used in the generated SiteMap.</span>
				<span id='nincUrls'>Only URLs that include these character combinations will be used. Each character combination must be separated by a comma (ie ,). Standard character combinations to include would be .htm, .php to use urls with htm and php extensions and not other file types ie .gif .css etc. URLs that match the site domain home page are included by default.</span>
				<span id='nexcUrls'>Only URLs that do not include these character combinations will be used. Each character combination must be separated by a comma (ie ,). Standard character combinations to exclude would be PHPSESS (a common session id used for php sites). This test is applied after the Include URL's test.</span>
		    <span id='ndepthNum'>Sets the page depth applied. A depth of 0 will extract links only from the Start URLs. A depth of 1 will also extract links from the links found in the Start URLs. This process continues until the set Depth or links Limit is reached.</span>
				<span id='nlimitNum'>Sets the maximum number of links extracted. Once the number of links extracted (checked) exceeds the Limit value no further pages will be examined for links regardless of the Depth set.</span>
				<span id='ndelaySec'>This is the time the program waits before extracting links from each page. Processing pauses for this duration decreasing the load on the server but increasing the running time.</span>
			
				<span id='nsmformat'>Set the desired variables for your SiteMap. Only variables applicable to the selected SiteMap Type are displayed.</span>
				<span id='nurlLastMod'>Include the Last Modified Date of the url file in the generated SiteMap. To use this feature your server must include a Last-Modified: date in the response headers when the url file is requested.</span>
				<span id='nurlSort'>Sorts the url's in the SiteMap in alphabetical order.</span>
				<span id='nurlTitle'>Includes the contents of the title tag in the SiteMap for each url if available. Not applicable for Google SiteMaps.</span>
				<span id='nurlDesc'>Includes the contents of the description tag in the SiteMap for each url if available. Not applicable for Google SiteMaps.</span>
				<span id='nurlUrl'>Includes the URL value as displayed text. Only applicable for HTML SiteMaps.</span>
				<span id='nurlCount'>Includes a count number for each URL. Only applicable for HTML SiteMaps.</span>
				<span id='nhtmlFull'>When selected the generated HTML SiteMap is a complete valid web page and can be displayed as a standalone document. When not selected the generated HTML SiteMap is content only and should be included within an existing web page. Only applicable for HTML SiteMaps.</span>
				<span id='nhtmlTitleTag'>This is the tag type that surrounds the Title in a HTML SiteMap when you Include Title. The default value is 'p' a paragraph tag. Only applicable for HTML SiteMaps.</span>
				<span id='nhtmlDescTag'>This is the tag type that surrounds the Description in a HTML SiteMap when you Include Description. The default value is 'p' a paragraph tag. Only applicable for HTML SiteMaps.</span>
				
				<span id='nurlVals'>URLs that include these character combinations will use the corresponding Set Priority and Set Change Frequency. Each character combination must be separated by a comma (ie ,), you can place each on a new line to easily see the corresponding Set values on the same line number. Only applicable for Google SiteMaps.</span>
		    <span id='npriVals'>The Set Priority will be applied to corresponding For URLs. Each Set Priority value must be one of the numbers 1.0 0.9 0.8 0.7 0.6 0.5 0.4 0.3 0.3 0.2 0.1 0.0, each value must be separated by a comma (ie ,), you can place each on a new line to easily see the corresponding For URL on the same line number. Only applicable for Google SiteMaps.</span>
        <span id='nfreqVals'>The Set Change Frequency will be applied to corresponding For URLs. Each Set Priority value must be one of the values always hourly daily weekly monthly yearly never, each value must be separated by a comma (ie ,), you can place each on a new line to easily see the corresponding For URL on the same line number. Only applicable for Google SiteMaps.</span>
				<span id='npriDef'>Default Priority is used for any URL that does not match a For URLs character combination. Only applicable for Google SiteMaps.</span>
				<span id='nfreqDef'>Default Change Frequency is used for any URL that does not match a For URLs character combination. Only applicable for Google SiteMaps.</span>
				
				<span id='ngenDyn'>Input a Start Url, adjust any other variables as required and then click Generate Dynamic SiteMap Code to create code you can upload to your server to Dynamically generate your SiteMap. Once uploaded whenever this code is called it will dynamically build a SiteMap in real time and return a current SiteMap of your site.</span>
				<span id='ngenSta'>Input a Start Url, adjust any other variables as required and then click Generate Static SiteMap to build a SiteMap that for your site as it is now. This returns a SiteMap in the set format reflecting your site at this point in time. This SiteMap can be saved and provided to search engines or displayed on your site however if your site changes a new SiteMap will need to be built for the changes to be included. Alternately you can Generate Dynamic SiteMap Code that once uploaded to your server will always return a current valid and up to date SiteMap.</span>
				<span id='nrefsm'>Reloads SiteMap XML Dynamic SiteMap Generator Software, and returns variables to default values.</span>
				
				<span id="noutputSect">This section displays the generated output based on the input values set.</span>
				<span id="noutputGen">This is the Generated output for Dynamic SiteMap Code or a Static SiteMap. Generated output is displayed in the text area. Select and copy this output to a text editor. For Dynamic SiteMap Code from the text editor save the output as a file with a .php extension ie sitemap.php. For Static SiteMaps save the output code as a file with a .xml extension for Google and RSS SiteMaps ie sitemap.xml, a file with a .html or .htm extension for HTML SiteMaps ie sitemap.html and a file with a .txt extension for Text SiteMaps ie sitemap.txt. Then upload the saved file to your server.</span>
				<span id='noutputSel'>Selects all the contents of the text area.</span>
				<span id='ndisplay'>Display Static SiteMap sends and displays the Generated Static SiteMap directly to your browser allowing you to see how it will be displayed in a browser without having to upload it. As an alternative to saving the SiteMap from the text area you can view source of this display and then use Save As from your browser. This display will not run Dynamic SiteMap Code and should not be used with Dynamic SiteMap Code.  Dynamic SiteMap Code must be uploaded and run on your server.</span>
				<span id='nclear'>Clear generated output.</span>
				<span id='nreset'>Reset all input and output values.</span>		
				</div>	
    </form>	
		
<?php
$varTextAreas=array('startUrls','incUrls','excUrls','urlVals','priVals','freqVals');if(!empty($siteMapType)){echo"<script type='text/javascript'>";echo "radioClick('$siteMapType');";echo "</script>";}if(isset($_POST['Action'])){if($_POST['Action']=='Generate Dynamic SiteMap Code'){foreach($varTextAreas as $varTextArea){if(is_array($$varTextArea)){$$varTextArea=implode(',',$$varTextArea);}echo"<script type='text/javascript'>";echo"window.document.form.$varTextArea.value='".$$varTextArea."';";echo"</script>";}echo"<script type='text/javascript'>";echo"codeBuild();";$endMess="Dynamic SiteMap Code Completed. Copy and paste the code in the text area to a text editor, save it as a file with a .php extension (ie sitemap.php) and upload it to your server. If desired you can edit the variables directly either in the text area or using a text editor.";echo"disMess('$endMess');";echo"alert('$endMess');";echo"</script>";}else if(isset($_POST['Action'])&&$_POST['Action']=='Generate Static SiteMap'){echo"<script type='text/javascript'>";echo"section('output')";echo"</script>";$starttime = microtime();$startarray = explode(" ", $starttime);$starttime = $startarray[1] + $startarray[0];echo"<script type='text/javascript'>";echo"disMess('Processing Started');";smRun();$endtime = microtime();$endarray = explode(" ", $endtime);$endtime = $endarray[1] + $endarray[0];$totaltime = $endtime - $starttime;$totaltime = round($totaltime,5);$endMess="Static SiteMap for $hostDom.\\nCompleted in $totaltime seconds.\\n$limitCnt Links Extracted.\\n$linkCnt Unique Links Used.\\nDepth $depthCnt.";echo"disOut('$genOut');";echo"disMess('$endMess');";echo"alert('$endMess');";echo"</script>";}}foreach($varTextAreas as $varTextArea){if(is_array($$varTextArea)){$$varTextArea=implode(',',$$varTextArea);}$$varTextArea=str_replace(',',',\n',$$varTextArea);echo"<script type='text/javascript'>";echo"window.document.form.$varTextArea.value='".$$varTextArea."';";echo"</script>";}echo $debug;
?>

  </body>
</html>
