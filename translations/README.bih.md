![Prva dobra izdanja](../assets/github/social-preview.png)

# Dobra prva izdanja

**Good First Issues** je inicijativa za odabir jednostavnih odabira iz popularnih projekata, tako da programeri koji nikada nisu doprinijeli open-source-u mogu brzo početi.

Web stranica: [good-first-issues.github.io](https://good-first-issues.github.io)

Ova web stranica prvenstveno je usmjerena na programere koji žele doprinijeti softveru otvorenog koda, ali ne znaju odakle i kako da počnu.

Održavači otvorenog koda uvijek žele uključiti više ljudi, ali novi programeri općenito misle da je izazov postati saradnik. Vjerujemo da tjeranje programera da riješe super-jednostavne probleme uklanja barijeru za buduće doprinose. To je razlog zašto postoji *Good First Issues*.

## Dodavanje novog projekta

Možete dodati novi projekat u *Good First Issues*, samo slijedite ove korake:

- Da biste održali kvalitet projekata u *Good First Issues*, uvjerite se da vaše GitHub spremište ispunjava sljedeće kriterije:

     - Ima najmanje tri problema sa oznakom `dobar prvi broj`. Ova oznaka je već prisutna u svim spremištima po defaultu.

     - Sadrži `README.md` sa detaljnim uputstvima za postavljanje projekta

     - Aktivno se održava (zadnje ažuriranje prije manje od mjesec dana)

- Dodajte putanju svog spremišta (u formatu `vlasnik/ime` i leksikografski red) u [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Kreirajte novi zahtjev za povlačenjem. Molimo vas da u opis PR-a dodate link na stranicu sa problemima u repozitorijumu. Kada se zahtjev za povlačenjem spoji, promjene će biti dostupne na [good-first-issues.github.io](https://good-first-issues.github.io).

## Kako to radi?

- First *Good First Issues* je statična web stranica koja koristi [PHP](https://www.php.net)` za generiranje HTML datoteka.
- Koristimo [GitHub REST API](https://docs.github.com/en/rest) za preuzimanje problema iz spremišta navedenih u [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- Da bismo periodično prolazili kroz probleme (dva puta dnevno), koristimo [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Pomozite nam da rastemo

Kretanje kroz projekte otvorenog koda može biti prilično naporno i za početnike i za iskusne saradnike. *Good First Issues* nastoji da reši ovaj problem obezbeđivanjem platforme koja služi kao polazna tačka za one koji žele da počnu sa otvorenim kodom ili one koji žele da uđu u novi projekat.

Što više ljudi zna za [good-first-issues.github.io](https://good-first-issues.github.io), to bolje. Postoje različiti načini na koje nam možete pomoći da rastemo: možete doprinijeti 'strastvenim' listama, blogovati o nama, doprijeti do blogera, tehnoloških utjecaja, programera i open-source na Twitteru i YouTubeu, na primjer. Pokušajte da se [good-first-issues.github.io](https://good-first-issues.github.io) spomene u videu ili tvitu!

## Prijedlozi i želje

Ako imate pitanja ili prijedloga (ili ste pronašli grešku), uvijek možete pisati na [problemi](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licenca

Ovo je softver otvorenog koda licenciran pod [MIT License](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).