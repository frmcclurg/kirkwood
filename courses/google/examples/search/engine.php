<html>
<head>
   <title>Search Engine</title>
   
   <style type="text/css">
      .gsc-control-cse 
      {
         font-family: Arial, sans-serif;
         border-color: #F9F5FF;
         background-color: #F9F5FF;
      }
      
      .gsc-control-cse .gsc-table-result 
      {
         font-family: Arial, sans-serif;
      }
      
      input.gsc-input 
      {
         border-color: #DECAFF;
      }
      
      input.gsc-search-button 
      {
         border-color: #923C99;
         background-color: #C78DCC;
      }
      
      .gsc-tabHeader.gsc-tabhInactive 
      {
         border-color: #DECAFF;
         background-color: #DECAFF;
      }
      
      .gsc-tabHeader.gsc-tabhActive 
      {
         border-color: #C78DCC;
         background-color: #C78DCC;
      }
      
      .gsc-tabsArea 
      {
         border-color: #C78DCC;
      }
      
      .gsc-webResult.gsc-result,
      .gsc-results .gsc-imageResult 
      {
         border-color: #F9F5FF;
         background-color: #F9F5FF;
      }
      
      .gsc-webResult.gsc-result:hover,
      .gsc-imageResult:hover 
      {
         border-color: #DECAFF;
         background-color: #FFFFFF;
      }
      
      .gsc-webResult.gsc-result.gsc-promotion:hover 
      {
         border-color: #DECAFF;
         background-color: #FFFFFF;
      }
      
      .gs-webResult.gs-result a.gs-title:link,
      .gs-webResult.gs-result a.gs-title:link b,
      .gs-imageResult a.gs-title:link,
      .gs-imageResult a.gs-title:link b 
      {
         color: #0066CC;
      }
      
      .gs-webResult.gs-result a.gs-title:visited,
      .gs-webResult.gs-result a.gs-title:visited b,
      .gs-imageResult a.gs-title:visited,
      .gs-imageResult a.gs-title:visited b 
      {
         color: #0066CC;
      }
      
      .gs-webResult.gs-result a.gs-title:hover,
      .gs-webResult.gs-result a.gs-title:hover b,
      .gs-imageResult a.gs-title:hover,
      .gs-imageResult a.gs-title:hover b 
      {
         color: #0066CC;
      }
      
      .gs-webResult.gs-result a.gs-title:active,
      .gs-webResult.gs-result a.gs-title:active b,
      .gs-imageResult a.gs-title:active,
      .gs-imageResult a.gs-title:active b 
      {
         color: #0066CC;
      }
      
      .gsc-cursor-page 
      {
         color: #0066CC;
      }
      
      a.gsc-trailing-more-results:link 
      {
         color: #0066CC;
      }
      
      .gs-webResult .gs-snippet,
      .gs-imageResult .gs-snippet,
      .gs-fileFormatType 
      {
         color: #000000;
      }
      
      .gs-webResult div.gs-visibleUrl,
      .gs-imageResult div.gs-visibleUrl 
      {
         color: #CC7A9F;
      }
      
      .gs-webResult div.gs-visibleUrl-short 
      {
         color: #CC7A9F;
      }
      
      .gs-webResult div.gs-visibleUrl-short 
      {
         display: none;
      }
      
      .gs-webResult div.gs-visibleUrl-long 
      {
         display: block;
      }
      
      .gs-promotion div.gs-visibleUrl-short 
      {
         display: none;
      }
      
      .gs-promotion div.gs-visibleUrl-long 
      {
         display: block;
      }
      
      .gsc-cursor-box 
      {
         border-color: #F9F5FF;
      }
      
      .gsc-results .gsc-cursor-box .gsc-cursor-page 
      {
         border-color: #DECAFF;
         background-color: #F9F5FF;
         color: #0066CC;
      }
      
      .gsc-results .gsc-cursor-box .gsc-cursor-current-page 
      {
         border-color: #C78DCC;
         background-color: #C78DCC;
         color: #0066CC;
      }
      
      .gsc-webResult.gsc-result.gsc-promotion 
      {
         border-color: #DECAFF;
         background-color: #F0E9FF;
      }
      
      .gsc-completion-title 
      {
         color: #0066CC;
      }
      
      .gsc-completion-snippet 
      {
         color: #000000;
      }
      
      .gs-promotion a.gs-title:link,
      .gs-promotion a.gs-title:link *,
      .gs-promotion .gs-snippet a:link 
      {
         color: #0066CC;
      }
      
      .gs-promotion a.gs-title:visited,
      .gs-promotion a.gs-title:visited *,
      .gs-promotion .gs-snippet a:visited 
      {
         color: #0066CC;
      }
      
      .gs-promotion a.gs-title:hover,
      .gs-promotion a.gs-title:hover *,
      .gs-promotion .gs-snippet a:hover 
      {
         color: #0066CC;
      }
      
      .gs-promotion a.gs-title:active,
      .gs-promotion a.gs-title:active *,
      .gs-promotion .gs-snippet a:active 
      {
         color: #0066CC;
      }
      
      .gs-promotion .gs-snippet,
      .gs-promotion .gs-title .gs-promotion-title-right,
      .gs-promotion .gs-title .gs-promotion-title-right *  
      {
         color: #000000;
      }
      
      .gs-promotion .gs-visibleUrl,
      .gs-promotion .gs-visibleUrl-short 
      {
         color: #CC7A9F;
      }
   </style>
   
</head>

<body>
   <h1>Search Engine</h1>
   
   <!-- this is a google search box -->
   <div id="cse" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en', style : google.loader.themes.BUBBLEGUM});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
      '001380259757562643803:79zmyrap1fc', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.draw('cse');
  }, true);
</script>
      
</body>
</html>