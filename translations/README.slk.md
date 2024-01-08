![Good First Issues](https://github.com/Krishna01work/good-first-issues.github.io/blob/f5ac4b7f8543913637057e166638f1735512434c/assets/github/social-preview.png)

# Dobré prvé čísla

**Good First Issues** je iniciatíva na výber jednoduchého výberu z obľúbených projektov, takže vývojári, ktorí nikdy neprispievali do open source, môžu rýchlo začať.

Webové stránky: [good-first-issues.github.io](https://good-first-issues.github.io)

Táto webová stránka je primárne zameraná na vývojárov, ktorí chcú prispieť k open source softvéru, ale nevedia, kde a ako začať.

Správcovia open source sa vždy snažia zapojiť viac ľudí, no noví vývojári si vo všeobecnosti myslia, že je náročné stať sa prispievateľom. Veríme, že prinútenie vývojárov, aby opravili super jednoduché problémy, odstráni prekážku pre budúce príspevky. To je dôvod, prečo existujú *Dobré prvé čísla*.

## Pridanie nového projektu

Do *Dobrých prvých vydaní* môžete pridať nový projekt, postupujte podľa týchto krokov:

- Ak chcete zachovať kvalitu projektov v *Dobrých prvých vydaniach*, uistite sa, že váš repozitár GitHub spĺňa nasledujúce kritériá:

     - Má najmenej tri vydania s označením „dobré prvé vydanie“. Tento štítok sa už štandardne nachádza na všetkých úložiskách.

     - Obsahuje súbor `README.md` s podrobnými pokynmi na nastavenie projektu

     - Je aktívne udržiavaný (posledná aktualizácia pred menej ako 1 mesiacom)

- Pridajte cestu k svojmu úložisku (vo formáte „vlastník/názov“ a lexikografickom poradí) do súboru [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Vytvorte novú požiadavku na stiahnutie. Do popisu PR pridajte odkaz na stránku problémov úložiska. Po zlúčení žiadosti o stiahnutie budú zmeny zverejnené na [good-first-issues.github.io](https://good-first-issues.github.io).

## Ako to funguje?

– First *Good First Issues* je statická webová stránka, ktorá používa [PHP](https://www.php.net) na generovanie súborov HTML.
– Používame [GitHub REST API](https://docs.github.com/en/rest) na načítanie problémov z úložísk uvedených v [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
– Na pravidelné cyklovanie problémov (dvakrát denne) používame [pracovný postup GitHub](https://docs.github.com/en/actions/using-workflows).

## Pomôžte nám rásť

Navigácia v projektoch s otvoreným zdrojovým kódom môže byť pre začiatočníkov aj skúsených prispievateľov dosť zdrvujúca. *Good First Issues* sa snaží tento problém vyriešiť poskytnutím platformy, ktorá slúži ako východiskový bod pre tých, ktorí chcú začať s open-source alebo pre tých, ktorí sa chcú pustiť do nového projektu.

Čím viac ľudí vie o [good-first-issues.github.io](https://good-first-issues.github.io), tým lepšie. Existujú rôzne spôsoby, ako nám môžete pomôcť rásť: môžete prispievať do „úžasných“ zoznamov, blogovať o nás, oslovovať blogerov, technologických vplyvov, vývojárov a open source napríklad na Twitteri a YouTube. Skúste uviesť [good-first-issues.github.io](https://good-first-issues.github.io) zmienku vo videu alebo tweete!

## Návrhy a priania

Ak máte otázky alebo návrhy (alebo ste našli chybu), vždy môžete napísať na [problémy](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licencia

Toto je softvér s otvoreným zdrojom licencovaný na základe [licencie MIT] (https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).