NOTE: This file has been translated automatically. If you find an error, just make a PR with the edits" to all translation files.
![Good First Issues](../assets/github/social-preview.png)

# Gode første utgaver

**Good First Issues** er et initiativ for å samle enkle valg fra populære prosjekter, slik at utviklere som aldri har bidratt til åpen kildekode kan komme raskt i gang.

Nettsted: [good-first-issues.github.io](https://good-first-issues.github.io)

Denne nettsiden er først og fremst rettet mot utviklere som ønsker å bidra til åpen kildekode-programvare, men som ikke vet hvor eller hvordan de skal begynne.

Åpen kildekode vedlikeholdere er alltid ute etter å få flere mennesker involvert, men nye utviklere synes generelt det er utfordrende å bli en bidragsyter. Vi tror at å få utviklere til å fikse superenkle problemer fjerner barrieren for fremtidige bidrag. Dette er grunnen til at *Good First Issues* eksisterer.

## Legger til et nytt prosjekt

Du er velkommen til å legge til et nytt prosjekt i *Good First Issues*, bare følg disse trinnene:

- For å opprettholde kvaliteten på prosjekter i *Good First Issues*, sørg for at GitHub-depotet ditt oppfyller følgende kriterier:

     - Den har minst tre utgaver med etiketten `good first issue`. Denne etiketten er allerede til stede på alle repositories som standard.

     - Den inneholder en `README.md` med detaljerte oppsettinstruksjoner for prosjektet

     - Det vedlikeholdes aktivt (siste oppdatering for mindre enn 1 måned siden)

- Legg til depotets bane (i formatet `eier/navn` og leksikografisk rekkefølge) i [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Opprett en ny pull-forespørsel. Vennligst legg til lenken til problemsiden til depotet i PR-beskrivelsen. Når pull-forespørselen er slått sammen, vil endringene være live på [good-first-issues.github.io](https://good-first-issues.github.io).

## Hvordan virker det?

- First *Good First Issues* er et statisk nettsted som bruker [PHP](https://www.php.net)` for å generere HTML-filer.
– Vi bruker [GitHub REST API](https://docs.github.com/en/rest) for å hente problemer fra depotene som er oppført i [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- For å periodisk gå gjennom problemer (to ganger om dagen), bruker vi [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Hjelp oss å vokse

Å navigere i åpen kildekode-prosjekter kan være ganske overveldende for både nybegynnere og erfarne bidragsytere. *Good First Issues* ser ut til å løse dette problemet ved å tilby en plattform som fungerer som et utgangspunkt for de som ønsker å komme i gang med åpen kildekode eller de som ønsker å komme inn i et nytt prosjekt.

Jo flere som vet om [good-first-issues.github.io](https://good-first-issues.github.io), jo bedre. Det er forskjellige måter du kan hjelpe oss med å vokse: du kan bidra til "fantastiske" lister, blogge om oss, nå ut til bloggere, teknologiske påvirkninger, utviklere og åpen kildekode på Twitter og YouTube, for eksempel. Prøv å få [good-first-issues.github.io](https://good-first-issues.github.io) nevnt i en video eller tweet!

## Forslag og ønsker

Hvis du har spørsmål eller forslag (eller fant en feil), kan du alltid skrive til [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Lisens

Dette er åpen programvare lisensiert under [MIT-lisensen](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).
