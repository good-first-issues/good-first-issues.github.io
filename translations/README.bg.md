![Добри първи издания](./assets/github/social-preview.png)

# Добри първи издания

**Good First Issues** е инициатива за подготвяне на лесни избори от популярни проекти, така че разработчиците, които никога не са участвали в отворен код, могат да започнат бързо.

Уебсайт: [good-first-issues.github.io](https://good-first-issues.github.io)

Този уебсайт е насочен предимно към разработчици, които искат да допринесат за софтуер с отворен код, но не знаят откъде или как да започнат.

Поддръжниците на отворен код винаги се стремят да привлекат повече хора, но новите разработчици обикновено смятат, че е предизвикателство да станат сътрудници. Вярваме, че карането на разработчиците да коригират супер лесни проблеми премахва бариерата за бъдещи приноси. Ето защо съществува *Good First Issues*.

## Добавяне на нов проект

Можете да добавите нов проект в *Good First Issues*, просто следвайте тези стъпки:

- За да поддържате качеството на проектите в *Good First Issues*, моля, уверете се, че вашето GitHub хранилище отговаря на следните критерии:

     - Има поне три издания с етикет „добър първи брой“. Този етикет вече присъства във всички хранилища по подразбиране.

     - Съдържа `README.md` с подробни инструкции за настройка на проекта

     - Поддържа се активно (последна актуализация преди по-малко от 1 месец)

- Добавете пътя на вашето хранилище (във формат `собственик/име` и лексикографски ред) в [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Създайте нова заявка за изтегляне. Моля, добавете връзката към страницата с проблеми на хранилището в PR описанието. След като заявката за изтегляне бъде обединена, промените ще бъдат активни на [good-first-issues.github.io](https://good-first-issues.github.io).

## Как работи?

- First *Good First Issues* е статичен уебсайт, който използва [PHP](https://www.php.net)` за генериране на HTML файлове.
- Използваме [GitHub REST API](https://docs.github.com/en/rest), за да извличаме проблеми от хранилищата, изброени в [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- За периодично преминаване през проблеми (два пъти на ден) използваме [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Помогнете ни да растем

Навигирането в проекти с отворен код може да бъде доста непосилно както за начинаещи, така и за опитни сътрудници. *Good First Issues* се стреми да реши този проблем, като предоставя платформа, която служи като отправна точка за тези, които искат да започнат работа с отворен код, или тези, които искат да влязат в нов проект.

Колкото повече хора знаят за [good-first-issues.github.io](https://good-first-issues.github.io), толкова по-добре. Има различни начини, по които можете да ни помогнете да растем: можете да допринесете за „страхотни“ списъци, да блогвате за нас, да се свържете с блогъри, технологични влияния, програмист и отворен код в Twitter и YouTube, например. Опитайте да споменете [good-first-issues.github.io](https://good-first-issues.github.io) във видеоклип или туит!

## Предложения и пожелания

Ако имате въпроси или предложения (или откриете грешка), винаги можете да пишете на [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Разрешително

Това е софтуер с отворен код, лицензиран съгласно [Лиценза на MIT](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).