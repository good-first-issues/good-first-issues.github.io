![Good First Issues](https://github.com/Krishna01work/good-first-issues.github.io/blob/f5ac4b7f8543913637057e166638f1735512434c/assets/github/social-preview.png)

# Jó első kérdések

A **Good First Issues** egy olyan kezdeményezés, amely a népszerű projektek egyszerű válogatását célozza meg, így azok a fejlesztők, akik soha nem járultak hozzá a nyílt forráskódhoz, gyorsan elkezdhetik a munkát.

Webhely: [good-first-issues.github.io](https://good-first-issues.github.io)

Ez a webhely elsősorban azokat a fejlesztőket célozza meg, akik szeretnének hozzájárulni a nyílt forráskódú szoftverekhez, de nem tudják, hol és hogyan kezdjék el.

A nyílt forráskódú karbantartók mindig több embert szeretnének bevonni, de az új fejlesztők általában úgy gondolják, hogy kihívást jelent közreműködővé válni. Úgy gondoljuk, hogy a fejlesztők rendkívül egyszerű problémák megoldására késztetve megszünteti a jövőbeli hozzájárulások akadályát. Ezért létezik a *Good First Issues*.

## Új projekt hozzáadása

Szívesen hozzáadhat új projektet a *Good First Issues* részhez, csak kövesse az alábbi lépéseket:

- A *Good First Issues* projektek minőségének megőrzése érdekében győződjön meg arról, hogy GitHub-tárhelye megfelel a következő kritériumoknak:

     - Legalább három probléma van a "jó első kiadás" címkével. Ez a címke alapértelmezés szerint már minden adattáron megtalálható.

     - Tartalmaz egy "README.md" fájlt a projekt részletes beállítási utasításaival

     - Aktívan karbantartott (utolsó frissítés kevesebb, mint 1 hónapja)

- Adja hozzá a tárhely elérési útját (tulajdonos/név formátumban és lexikográfiai sorrendben) a [repositories.json] (https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json) fájlban.

- Hozzon létre egy új lehívási kérelmet. Kérjük, a PR-leírásban adja hozzá a tárház problémaoldalára mutató hivatkozást. A lehívási kérelem egyesítése után a módosítások a [good-first-issues.github.io](https://good-first-issues.github.io) oldalon lesznek elérhetők.

## Hogyan működik?

- A First *Good First Issues* egy statikus webhely, amely [PHP](https://www.php.net)” segítségével hoz létre HTML-fájlokat.
- A [GitHub REST API](https://docs.github.com/en/rest) segítségével kérjük le a problémákat a [repositories.json](https://github.com/gomzyakov/good-first) tárolókból. -issue/blob/main/repositories.json).
- A problémák rendszeres (naponta kétszer) áthaladásához a [GitHub Workflow]-t (https://docs.github.com/en/actions/using-workflows) használjuk.

## Segíts növekedésünknek

A nyílt forráskódú projektekben való navigálás meglehetősen nehéz lehet kezdő és tapasztalt közreműködők számára egyaránt. A *Good First Issues* úgy tűnik, hogy megoldja ezt a problémát azáltal, hogy olyan platformot biztosít, amely kiindulópontként szolgál azok számára, akik elkezdik használni a nyílt forráskódot, vagy akik új projektbe szeretnének belevágni.

Minél többen ismerik a [good-first-issues.github.io](https://good-first-issues.github.io) webhelyet, annál jobb. Különböző módokon segíthet növekedésünknek: hozzájárulhat "nagyszerű" listákhoz, blogolhat rólunk, kapcsolatba léphet bloggerekkel, technológiai hatásokkal, fejlesztőkkel és nyílt forráskóddal például a Twitteren és a YouTube-on. Próbáljon meg egy videóban vagy tweetben megemlíteni a [good-first-issues.github.io](https://good-first-issues.github.io) elemet!

## Javaslatok és kívánságok

Ha kérdése vagy javaslata van (vagy hibát talált), bármikor írhat az [issues] címre (https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licenc

Ez egy nyílt forráskódú szoftver, amelynek licence a [MIT-licenc] (https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).