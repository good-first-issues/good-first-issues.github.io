![Good First Issues](https://github.com/Krishna01work/good-first-issues.github.io/blob/f5ac4b7f8543913637057e166638f1735512434c/assets/github/social-preview.png)

# Gode første numre

**Good First Issues** er et initiativ til at sammensætte nemme valg fra populære projekter, så udviklere, der aldrig har bidraget til open source, kan komme hurtigt i gang.

Hjemmeside: [good-first-issues.github.io](https://good-first-issues.github.io)

Denne hjemmeside er primært målrettet udviklere, der ønsker at bidrage til open source-software, men som ikke ved, hvor eller hvordan de skal starte.

Open source-vedligeholdere søger altid at få flere mennesker involveret, men nye udviklere synes generelt, det er udfordrende at blive en bidragyder. Vi mener, at det fjerner barrieren for fremtidige bidrag at få udviklere til at løse superlette problemer. Det er derfor, *Good First Issues* eksisterer.

## Tilføjelse af et nyt projekt

Du er velkommen til at tilføje et nyt projekt i *Good First Issues*, følg blot disse trin:

- For at opretholde kvaliteten af projekter i *Good First Issues*, skal du sørge for, at dit GitHub-lager opfylder følgende kriterier:

     - Den har mindst tre numre med mærket "god første udgave". Denne etiket er allerede til stede på alle lagre som standard.

     - Den indeholder en `README.md` med detaljerede opsætningsinstruktioner til projektet

     - Det vedligeholdes aktivt (sidste opdatering for mindre end 1 måned siden)

- Tilføj dit depots sti (i formatet `ejer/navn` og leksikografisk rækkefølge) i [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Opret en ny pull-anmodning. Tilføj venligst linket til problemsiden for depotet i PR-beskrivelsen. Når pull-anmodningen er slået sammen, vil ændringerne være live på [good-first-issues.github.io](https://good-first-issues.github.io).

## Hvordan virker det?

- First *Good First Issues* er et statisk websted, der bruger [PHP](https://www.php.net)` til at generere HTML-filer.
- Vi bruger [GitHub REST API](https://docs.github.com/en/rest) til at hente problemer fra de lagre, der er angivet i [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- For periodisk at gennemgå problemer (to gange om dagen) bruger vi [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Hjælp os med at vokse

At navigere i open source-projekter kan være ret overvældende for både begyndere og erfarne bidragydere. *Good First Issues* ser ud til at løse dette problem ved at tilbyde en platform, der fungerer som udgangspunkt for dem, der ønsker at komme i gang med open source eller dem, der ønsker at komme ind i et nyt projekt.

Jo flere der kender til [good-first-issues.github.io](https://good-first-issues.github.io), jo bedre. Der er forskellige måder, du kan hjælpe os med at vokse: Du kan bidrage til "fantastiske" lister, blogge om os, nå ud til bloggere, teknologiske påvirkninger, udviklere og open source på Twitter og YouTube, for eksempel. Prøv at få [good-first-issues.github.io](https://good-first-issues.github.io) nævnt i en video eller tweet!

## Forslag og ønsker

Hvis du har spørgsmål eller forslag (eller har fundet en fejl), kan du altid skrive til [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licens

Dette er open source-software, der er licenseret under [MIT-licensen](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).