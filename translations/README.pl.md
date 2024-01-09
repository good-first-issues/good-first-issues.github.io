![Dobre pierwsze wydania](../assets/github/social-preview.png)

# Dobre pierwsze problemy

**Good First Issues** to inicjatywa mająca na celu selekcję prostych wyborów z popularnych projektów, dzięki czemu programiści, którzy nigdy nie współpracowali z oprogramowaniem open source, mogą szybko rozpocząć pracę.

Strona internetowa: [good-first-issues.github.io](https://good-first-issues.github.io)

Ta witryna jest skierowana przede wszystkim do programistów, którzy chcą współtworzyć oprogramowanie typu open source, ale nie wiedzą od czego i jak zacząć.

Opiekunowie oprogramowania typu open source zawsze chcą zaangażować więcej osób, ale nowi programiści na ogół uważają, że bycie współtwórcą jest trudne. Wierzymy, że nakłonienie programistów do naprawienia bardzo łatwych problemów usuwa barierę dla przyszłych prac. Właśnie dlatego istnieje *Dobre pierwsze problemy*.

## Dodawanie nowego projektu

Możesz dodać nowy projekt do *Dobrych pierwszych numerów*, wykonaj następujące kroki:

- Aby utrzymać jakość projektów w *Good First Issues*, upewnij się, że Twoje repozytorium GitHub spełnia następujące kryteria:

     - Zawiera co najmniej trzy wydania z etykietą „dobry pierwszy numer”. Ta etykieta jest już domyślnie obecna we wszystkich repozytoriach.

     - Zawiera plik `README.md` ze szczegółowymi instrukcjami konfiguracji projektu

     - Jest aktywnie utrzymywany (ostatnia aktualizacja mniej niż 1 miesiąc temu)

- Dodaj ścieżkę do repozytorium (w formacie „właściciel/nazwa” i w porządku leksykograficznym) w [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Utwórz nowe żądanie ściągnięcia. Dodaj link do strony problemów w repozytorium w opisie PR. Po połączeniu żądania ściągnięcia zmiany zostaną wprowadzone w [good-first-issues.github.io](https://good-first-issues.github.io).

## Jak to działa?

- First *Good First Issues* to statyczna witryna internetowa, która wykorzystuje [PHP](https://www.php.net)` do generowania plików HTML.
— Używamy [GitHub REST API](https://docs.github.com/en/rest) do pobierania problemów z repozytoriów wymienionych w [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
— Aby okresowo przeglądać problemy (dwa razy dziennie), używamy [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Pomóż nam się rozwijać

Poruszanie się po projektach open source może być dość przytłaczające zarówno dla początkujących, jak i doświadczonych współpracowników. *Good First Issues* stara się rozwiązać ten problem, dostarczając platformę, która służy jako punkt wyjścia dla tych, którzy chcą rozpocząć pracę z oprogramowaniem open source lub tych, którzy chcą rozpocząć nowy projekt.

Im więcej osób wie o [good-first-issues.github.io](https://good-first-issues.github.io), tym lepiej. Możesz pomóc nam się rozwijać na różne sposoby: możesz współtworzyć „niesamowite” listy, blogować o nas, docierać do blogerów, wpływowych osób technologicznych, programistów i open source na przykład na Twitterze i YouTube. Spróbuj i poproś o wzmiankę o [good-first-issues.github.io](https://good-first-issues.github.io) w filmie lub tweecie!

## Sugestie i życzenia

Jeśli masz pytania lub sugestie (lub znalazłeś błąd), zawsze możesz napisać do [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licencja

To jest oprogramowanie typu open source objęte licencją [Licencja MIT] (https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).