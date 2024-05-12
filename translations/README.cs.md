>**NOTE:** _This file has been translated automatically. If you find an error, just make a PR with the edits" to all translation files._
![Good First Issues](../assets/github/social-preview.png)

# Dobré první problémy

**Good First Issues** je iniciativa ke snadnému výběru z oblíbených projektů, takže vývojáři, kteří nikdy nepřispívali do open-source, mohou rychle začít.

Web: [good-first-issues.github.io](https://good-first-issues.github.io)

Tento web je primárně zaměřen na vývojáře, kteří chtějí přispět k open source softwaru, ale nevědí, kde a jak začít.

Správci open source se vždy snaží zapojit více lidí, ale noví vývojáři si obecně myslí, že stát se přispěvatelem je náročné. Věříme, že přimějeme vývojáře, aby opravovali super-snadné problémy, odstraňuje překážku pro budoucí příspěvky. To je důvod, proč existuje *Good First Issues*.

## Přidání nového projektu

Do *Good First Issues* můžete přidat nový projekt, postupujte takto:

- Chcete-li zachovat kvalitu projektů v *Good First Issues*, ujistěte se, že vaše úložiště GitHub splňuje následující kritéria:

     - Má nejméně tři vydání se štítkem „dobré první vydání“. Tento štítek je již ve výchozím nastavení přítomen na všech úložištích.

     - Obsahuje `README.md` s podrobnými pokyny pro nastavení projektu

     - Je aktivně udržován (poslední aktualizace před méně než 1 měsícem)

- Přidejte cestu svého úložiště (ve formátu `vlastník/název` a lexikografické pořadí) do [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Vytvořte nový požadavek na stažení. Do popisu PR přidejte odkaz na stránku vydání úložiště. Jakmile bude požadavek na stažení sloučen, změny se projeví na [good-first-issues.github.io](https://good-first-issues.github.io).

## Jak to funguje?

- First *Good First Issues* je statická webová stránka, která ke generování souborů HTML používá [PHP](https://www.php.net)`.
– K načítání problémů z úložišť uvedených v [repositories.json] (https://github.com/gomzyakov/good-first) používáme [GitHub REST API](https://docs.github.com/en/rest) -issue/blob/main/repositories.json).
– K pravidelnému procházení problémů (dvakrát denně) používáme [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Pomozte nám růst

Navigace v open-source projektech může být pro začátečníky i zkušené přispěvatele docela zdrcující. *Good First Issues* se snaží tento problém vyřešit poskytnutím platformy, která slouží jako výchozí bod pro ty, kteří chtějí začít s open-source nebo ty, kteří se chtějí pustit do nového projektu.

Čím více lidí ví o [good-first-issues.github.io](https://good-first-issues.github.io), tím lépe. Existují různé způsoby, jak nám můžete pomoci růst: můžete přispívat do „úžasných“ seznamů, blogovat o nás, oslovovat blogery, technologické vlivy, vývojáře a open-source například na Twitteru a YouTube. Zkuste zmínit [good-first-issues.github.io](https://good-first-issues.github.io) ve videu nebo tweetu!

## Návrhy a přání

Pokud máte dotazy nebo návrhy (nebo jste našli chybu), můžete kdykoli napsat na [problémy](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licence

Toto je software s otevřeným zdrojovým kódem licencovaný na základě [licence MIT] (https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).
