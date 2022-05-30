<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


    <xsl:template match="/">
        <html>
            <table border="1" style=" margin-left: 25%; margin-top:10%; width: 70%; border-color: #d4af37; font-family: 'Roboto', sans-serif; font-size: 90%; text-align:center; disp^lay:flex;">
                <tr bgcolor="#939393" >
                    <th style="width: 11%; font-family: 'Roboto', sans-serif;">Nom du Coach </th>
                    <th style="width: 7%; font-family: 'Roboto', sans-serif;">Prenom </th>
                    <th style="width: 3%; font-family: 'Roboto', sans-serif;">Age</th>
                    <th style="width: 17.5%; font-family: 'Roboto', sans-serif;">Diplôme</th>
                    <th style="width: 33%; font-family: 'Roboto', sans-serif;">Expériences </th>
                    <th style="width: 13%; font-family: 'Roboto', sans-serif;">Langue maternelle</th>
                    <th style="width: 15%; font-family: 'Roboto', sans-serif;">Autre langue parlée</th>
                </tr>
                <xsl:for-each select="CV/Coach">
                    <tr style="margin-top=20%;">
                        <td>
                            <xsl:value-of select="Nom"/>
                        </td>
                        <td>
                            <xsl:value-of select="Prenom" />
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