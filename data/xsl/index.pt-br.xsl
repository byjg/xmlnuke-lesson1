﻿<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="xml"/>
	<xsl:template match="/">
		<HTML>
			<link href="common/styles/portal-light.css" type="text/css" rel="stylesheet"/>
			<HEAD>
				<TITLE>Mapa do Site de Demonstração</TITLE>
			</HEAD>
			<BODY>
				<H1>Mapa do Site de Demonstração</H1>
				<H2>Indice</H2>
				<xsl:for-each select="xmlindex/group">
					<TABLE BORDER="0" COLSPAN="1" CELLPADDING="1" STYLE="WIDTH:620px">
						<TR><TD ColSpan="3"><b><xsl:value-of select="title"/></b></TD></TR>
						<xsl:for-each select="page">
							<TR VALIGN="TOP">
								<TD ALIGN="RIGHT" STYLE="WIDTH:20px"> -</TD>
								<TD STYLE="WIDTH:150px"><A><xsl:attribute name="HREF">engine:xmlnuke?xml=<xsl:value-of select="id"/></xsl:attribute><xsl:value-of select="title"/></A></TD>
								<TD STYLE="WIDTH:450px"><i><xsl:value-of select="summary"/></i></TD>
							</TR>
						</xsl:for-each>
					</TABLE><p/>
				</xsl:for-each>
				<p><A HREF="admin:engine"><b>Administrar Conteúdo</b></A></p>
				<p><b>[param:languageselector]</b></p>
			</BODY>
		</HTML>
	</xsl:template>
</xsl:stylesheet>
