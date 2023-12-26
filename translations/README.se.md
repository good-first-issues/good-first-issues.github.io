![Good First Issues](./assets/github/social-preview.png)

# Bra första nummer

**Good First Issues** är ett initiativ för att ta fram enkla val från populära projekt, så att utvecklare som aldrig har bidragit till öppen källkod kan komma igång snabbt.

Webbplats: [good-first-issues.github.io](https://good-first-issues.github.io)

Den här webbplatsen är i första hand riktad till utvecklare som vill bidra till programvara med öppen källkod men inte vet var eller hur de ska börja.

Underhållare med öppen källkod strävar alltid efter att få fler människor involverade, men nya utvecklare tycker generellt att det är utmanande att bli en bidragsgivare. Vi tror att få utvecklare att fixa superenkla problem tar bort hindret för framtida bidrag. Det är därför *Good First Issues* finns.

## Lägger till ett nytt projekt

Du är välkommen att lägga till ett nytt projekt i *Good First Issues*, följ bara dessa steg:

- För att upprätthålla kvaliteten på projekt i *Good First Issues*, se till att ditt GitHub-förråd uppfyller följande kriterier:

     - Den har minst tre nummer med märket "bra första nummer". Den här etiketten finns redan på alla arkiv som standard.

     - Den innehåller en `README.md` med detaljerade installationsinstruktioner för projektet

     - Det underhålls aktivt (senaste uppdateringen för mindre än 1 månad sedan)

- Lägg till ditt förvars sökväg (i formatet `ägare/namn` och lexikografisk ordning) i [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Skapa en ny pull-request. Vänligen lägg till länken till problemsidan för förvaret i PR-beskrivningen. När pull-begäran har slagits samman kommer ändringarna att vara live på [good-first-issues.github.io](https://good-first-issues.github.io).

## Hur fungerar det?

- First *Good First Issues* är en statisk webbplats som använder [PHP](https://www.php.net)` för att generera HTML-filer.
– Vi använder [GitHub REST API](https://docs.github.com/en/rest) för att hämta problem från arkiven som listas i [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- För att regelbundet gå igenom problem (två gånger om dagen) använder vi [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Hjälp oss att växa

Att navigera i projekt med öppen källkod kan vara ganska överväldigande för både nybörjare och erfarna bidragsgivare. *Good First Issues* försöker lösa detta problem genom att tillhandahålla en plattform som fungerar som utgångspunkt för de som vill komma igång med öppen källkod eller de som vill komma in i ett nytt projekt.

Ju fler som känner till [good-first-issues.github.io](https://good-first-issues.github.io), desto bättre. Det finns olika sätt du kan hjälpa oss att växa: du kan bidra till "fantastiska" listor, blogga om oss, nå ut till bloggare, tekniska influenser, utvecklare och öppen källkod på Twitter och YouTube, till exempel. Försök att få [good-first-issues.github.io](https://good-first-issues.github.io) omnämnd i en video eller tweet!

## Förslag och önskemål

Om du har frågor eller förslag (eller hittat en bugg) kan du alltid skriva till [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licens

Detta är öppen källkod licensierad under [MIT License](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).