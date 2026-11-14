<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:sm="http://www.sitemaps.org/schemas/sitemap/0.9">
<xsl:output method="html" encoding="UTF-8" indent="yes"/>
<xsl:template match="/">
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sitemap — TSPDV Chauffeur Privé Côte d'Azur</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Helvetica Neue', sans-serif; background: #0a0a0a; color: #f5f0e8; }
    header { background: #1a1a1a; border-bottom: 1px solid rgba(201,168,76,0.2); padding: 28px 40px; display: flex; align-items: center; gap: 20px; }
    header h1 { font-size: 1.2rem; font-weight: 300; letter-spacing: 0.1em; color: #c9a84c; }
    header span { font-size: 0.8rem; color: #666; }
    .container { max-width: 900px; margin: 48px auto; padding: 0 24px; }
    table { width: 100%; border-collapse: collapse; }
    thead tr { background: #1a1a1a; }
    thead th { padding: 14px 20px; text-align: left; font-size: 0.7rem; letter-spacing: 0.15em; text-transform: uppercase; color: #c9a84c; font-weight: 500; }
    tbody tr { border-bottom: 1px solid rgba(255,255,255,0.05); transition: background 0.2s; }
    tbody tr:hover { background: #1a1a1a; }
    tbody td { padding: 14px 20px; font-size: 0.85rem; }
    a { color: #c9a84c; text-decoration: none; }
    a:hover { text-decoration: underline; }
    .priority { display: inline-block; padding: 3px 10px; border-radius: 20px; font-size: 0.72rem; font-weight: 600; }
    .p-high { background: rgba(201,168,76,0.15); color: #c9a84c; }
    .p-mid  { background: rgba(255,255,255,0.06); color: #888; }
    .p-low  { background: rgba(255,255,255,0.03); color: #555; }
    .count  { color: #555; font-size: 0.8rem; margin-bottom: 20px; }
  </style>
</head>
<body>
  <header>
    <div>
      <h1>TSPDV — Sitemap</h1>
      <span>Chauffeur Privé Côte d'Azur · taxisaintpaul.fr</span>
    </div>
  </header>
  <div class="container">
    <p class="count"><xsl:value-of select="count(sm:urlset/sm:url)"/> URLs indexées</p>
    <table>
      <thead>
        <tr>
          <th>URL</th>
          <th>Dernière modification</th>
          <th>Priorité</th>
          <th>Fréquence</th>
        </tr>
      </thead>
      <tbody>
        <xsl:for-each select="sm:urlset/sm:url">
          <tr>
            <td><a href="{sm:loc}"><xsl:value-of select="sm:loc"/></a></td>
            <td><xsl:value-of select="sm:lastmod"/></td>
            <td>
              <xsl:choose>
                <xsl:when test="sm:priority >= 0.9">
                  <span class="priority p-high"><xsl:value-of select="sm:priority"/></span>
                </xsl:when>
                <xsl:when test="sm:priority >= 0.7">
                  <span class="priority p-mid"><xsl:value-of select="sm:priority"/></span>
                </xsl:when>
                <xsl:otherwise>
                  <span class="priority p-low"><xsl:value-of select="sm:priority"/></span>
                </xsl:otherwise>
              </xsl:choose>
            </td>
            <td><xsl:value-of select="sm:changefreq"/></td>
          </tr>
        </xsl:for-each>
      </tbody>
    </table>
  </div>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
