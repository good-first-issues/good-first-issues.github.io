![Primele probleme bune](../assets/github/social-preview.png)

# Primele probleme bune

**Good First Issues** este o inițiativă de a organiza alegeri ușoare din proiecte populare, astfel încât dezvoltatorii care nu au contribuit niciodată la open-source să poată începe rapid.

Site: [good-first-issues.github.io](https://good-first-issues.github.io)

Acest site web se adresează în primul rând dezvoltatorilor care doresc să contribuie la software-ul open source, dar nu știu de unde sau cum să înceapă.

Întreținerii open-source caută întotdeauna să implice mai mulți oameni, dar dezvoltatorii noi, în general, cred că este o provocare să devină un colaborator. Credem că a face dezvoltatorii să remedieze problemele super-ușoare elimină bariera pentru contribuțiile viitoare. Acesta este motivul pentru care există *Good First Issues*.

## Adăugarea unui nou proiect

Sunteți binevenit să adăugați un nou proiect în *Good First Issues*, trebuie doar să urmați acești pași:

- Pentru a menține calitatea proiectelor în *Good First Issues*, vă rugăm să vă asigurați că depozitul dvs. GitHub îndeplinește următoarele criterii:

     - Are cel puțin trei probleme cu eticheta „bun primul număr”. Această etichetă este deja prezentă în toate depozitele în mod implicit.

     - Conține un `README.md` cu instrucțiuni detaliate de configurare pentru proiect

     - Este întreținut activ (ultima actualizare cu mai puțin de o lună în urmă)

- Adăugați calea depozitului dvs. (în formatul „proprietar/nume” și ordine lexicografică) în [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Creați o nouă cerere de tragere. Vă rugăm să adăugați linkul către pagina cu probleme a depozitului în descrierea PR. Odată ce cererea de extragere este îmbinată, modificările vor fi live pe [good-first-issues.github.io](https://good-first-issues.github.io).

## Cum functioneazã?

- First *Good First Issues* este un site web static care folosește [PHP](https://www.php.net)` pentru a genera fișiere HTML.
- Folosim [GitHub REST API](https://docs.github.com/en/rest) pentru a prelua probleme din depozitele enumerate în [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- Pentru a parcurge periodic problemele (de două ori pe zi), folosim [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Ajută-ne să creștem

Navigarea proiectelor open-source poate fi destul de copleșitoare atât pentru începători, cât și pentru colaboratorii experimentați. *Good First Issues* încearcă să rezolve această problemă oferind o platformă care servește drept punct de plecare pentru cei care doresc să înceapă cu open-source sau cei care doresc să intre într-un nou proiect.

Cu cât mai mulți oameni știu despre [good-first-issues.github.io](https://good-first-issues.github.io), cu atât mai bine. Există diferite moduri în care ne puteți ajuta să creștem: puteți contribui la liste „uimitoare”, blog despre noi, contactați bloggeri, influențe tehnologice, dezvoltatori și open-source pe Twitter și YouTube, de exemplu. Încercați să obțineți [good-first-issues.github.io](https://good-first-issues.github.io) menționat într-un videoclip sau tweet!

## Sugestii și urări

Dacă aveți întrebări sau sugestii (sau ați găsit o eroare), puteți oricând să scrieți la [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licență

Acesta este un software cu sursă deschisă licențiat sub [Licența MIT](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).