<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


    <xsl:template match="/">
        <html>

            <table border="1">
                <tr bgcolor="#9acd32">
                    <th>Nom du Coach </th>
                    <th>Age</th>
                    <th>Diplôme</th>
                    <th>Expériences </th>
                    <th>Langue maternelle</th>
                    <th>Autre langue parlée</th>
                </tr>
                <xsl:for-each select="CV/Coach[@id='Coach3']">
                    <tr>
                        <td>
                            <xsl:value-of select="Nom" />
                            
                        </td>
                        <td>
                            <xsl:value-of select="Age" />
                        </td>
                        <td>
                            <xsl:value-of select="Diplomes" />
                        </td>
                        <td>
                            <xsl:value-of select="Experiences" />
                        </td>
                        <td>
                            <xsl:value-of select="LV1" />
                        </td>
                        <td>
                            <xsl:value-of select="LV2" />
                        </td>
                    </tr>
                </xsl:for-each>
            </table>
        </html>
    </xsl:template>

</xsl:stylesheet>