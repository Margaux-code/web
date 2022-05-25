<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


<xsl:template match="Coach[@id='coach1']">
  <html>
    <h2>CV du coach</h2>
    <xsl:value-of select="Age"/>


  </html>
</xsl:template>

</xsl:stylesheet>