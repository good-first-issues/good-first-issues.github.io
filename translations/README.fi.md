![Good First Issues](../assets/github/social-preview.png)

#Hyvät ensimmäiset ongelmat

**Good First Issues** on aloite, jonka tarkoituksena on kerätä helposti poimintoja suosituista projekteista, jotta kehittäjät, jotka eivät ole koskaan osallistuneet avoimeen lähdekoodiin, voivat aloittaa nopeasti.

Verkkosivusto: [good-first-issues.github.io](https://good-first-issues.github.io)

Tämä sivusto on ensisijaisesti suunnattu kehittäjille, jotka haluavat osallistua avoimen lähdekoodin ohjelmistoihin, mutta eivät tiedä mistä tai miten aloittaa.

Avoimen lähdekoodin ylläpitäjät haluavat aina saada lisää ihmisiä mukaan, mutta uudet kehittäjät ovat yleensä sitä mieltä, että avustajaksi tuleminen on haastavaa. Uskomme, että kehittäjien saaminen korjaamaan erittäin helppoja ongelmia poistaa esteen tuleville lahjoituksille. Tästä syystä *Good First Issues* on olemassa.

## Uuden projektin lisääminen

Voit lisätä uuden projektin *Good First Issues* -osioon, seuraa näitä ohjeita:

- Säilyttääksesi *Good First Issues* -projektien laadun, varmista, että GitHub-arkistosi täyttää seuraavat kriteerit:

     - Siinä on vähintään kolme ongelmaa "hyvä ensimmäinen numero" -merkinnässä. Tämä tunniste on jo oletuksena kaikissa arkistoissa.

     - Se sisältää "README.md" -tiedoston, jossa on yksityiskohtaiset asennusohjeet projektille

     - Sitä ylläpidetään aktiivisesti (viimeisin päivitys alle kuukausi sitten)

- Lisää arkistosi polku (muodossa "omistaja/nimi" ja leksikografinen järjestys) tiedostoon [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Luo uusi vetopyyntö. Lisää linkki arkiston ongelmasivulle PR-kuvaukseen. Kun vetopyyntö on yhdistetty, muutokset tulevat voimaan osoitteessa [good-first-issues.github.io](https://good-first-issues.github.io).

## Kuinka se toimii?

- First *Good First Issues* on staattinen verkkosivusto, joka käyttää [PHP](https://www.php.net)` HTML-tiedostojen luomiseen.
- Käytämme [GitHub REST API](https://docs.github.com/en/rest) ongelmien hakemiseen [repositories.json]:ssa (https://github.com/gomzyakov/good-first) luetelluista tietovarastoista. -issue/blob/main/repositories.json).
- Käytämme [GitHub Workflow]:a (https://docs.github.com/en/actions/using-workflows) ongelmien läpikäymiseen säännöllisesti (kahdesti päivässä).

## Auta meitä kasvamaan

Avoimen lähdekoodin projekteissa liikkuminen voi olla varsin ylivoimaista sekä aloittelijoille että kokeneille osallistujille. *Good First Issues* pyrkii ratkaisemaan tämän ongelman tarjoamalla alustan, joka toimii lähtökohtana niille, jotka haluavat aloittaa avoimen lähdekoodin käytön, tai niille, jotka haluavat päästä mukaan uuteen projektiin.

Mitä useampi ihminen tietää aiheesta [good-first-issues.github.io](https://good-first-issues.github.io), sitä parempi. Voit auttaa meitä kasvamaan useilla eri tavoilla: voit osallistua "mahtaviin" listoihin, blogata meistä, tavoittaa bloggaajia, teknisiä vaikuttajia, kehittäjiä ja avoimen lähdekoodin sisältöä esimerkiksi Twitterissä ja YouTubessa. Yritä saada [good-first-issues.github.io](https://good-first-issues.github.io) maininta videossa tai twiitissä!

## Ehdotuksia ja toiveita

Jos sinulla on kysyttävää tai ehdotuksia (tai löysit virheen), voit aina kirjoittaa osoitteeseen [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Lisenssi

Tämä on avoimen lähdekoodin ohjelmisto, jonka käyttöoikeus on [MIT-lisenssi](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).