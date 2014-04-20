<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
   <xsl:output method="xml" />
   <xsl:template match="/">
      <html>
         <head>
            <title>XMLNuke - <xsl:value-of select="page/meta/title" /></title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link href="common/styles/deliciouslyblue.css" rel="stylesheet" type="text/css" />
	    <xmlnuke-htmlheader />
	    <xmlnuke-scripts />
         </head>
         <body>
            <div id="container">
               <div id="header">
                  <form name="form1" id="form1" method="post" action="module:search?action=search">
                     <input type="text" name="txtsearch" value="Search For..." />
                     <input class=" button" type="submit" name="Submit" value="GO" />
                  </form>
                  <a href="http://www.xmlnuke.com/">
                     <img src="common/imgs/logo_xmlnuke_pb.gif" border="0" />
                  </a>
               </div>
               <div id="tabs10">
                  <ul>
                     <li>
                        <a href="engine:xmlnuke?xml=home" title="Home">
                           <span>Home</span>
                        </a>
                     </li>
                     <li>
                        <a href="engine:xmlnuke?xsl=rss" title="RSS">
                           <span>RSS</span>
                        </a>
                     </li>
                     <li>
                        <a href="engine:xmlnuke?xsl=wml" title="WML">
                           <span>WML</span>
                        </a>
                     </li>
                  </ul>
               </div>
               <div id="container2">
                  <div id="content">
                     <xmlnuke-blockcentercss />
                  </div>
                  <div id="sidebar">
                     <xmlnuke-menucss />
                     <xmlnuke-blockleftcss />
                     <xmlnuke-blockrightcss />
                  </div>
                  <div id="footer">
                     <p>
                        <a href="http://validator.w3.org/check?uri=referer">Valid XHTML 1.0</a> | Design modified by Joao Gilberto Magalh�es | Design by <a href="#">super j man</a></p>
                  </div>
               </div>
            </div>
         </body>
      </html>
   </xsl:template>
   <xmlnuke-htmlbody />
</xsl:stylesheet>
