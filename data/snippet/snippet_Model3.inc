<xsl:template match="Model3">

	Name: <xsl:value-of select="name"/><br/>
	Age: <xsl:value-of select="age"/><br/>
	Gender: <xsl:if test="M">Male</xsl:if><xsl:if test="F">Female</xsl:if><br/>
	Date: <xsl:value-of select="age"/><br/>
	Description: <br/>
	<xsl:value-of select="description"/>
	<hr/>

</xsl:template>