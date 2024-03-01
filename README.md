![Good First Issues](./assets/github/social-preview.png)

#### Read this in [other languages](translations/Translations.md):

[ગુજરાતી](translations/README.guj.md)
&middot; [हिन्दी](translations/README.hi.md)
&middot; [मराठी](translations/README.mr.md)
&middot; [മലയാളം](translations/README.ml.md)
&middot; [ಕನ್ನಡ](translations/README.ka.md)
&middot; [తెలుగు](translations/README.te.md)
&middot; [ଓଡିଆ](translations/README.od.md)
&middot; [ਪੰਜਾਬੀ](translations/README.pb.md)
&middot; [বাংলা](translations/README.bn.md)
&middot; [தமிழ்](translations/README.ta.md)
&middot; [မြန်မာ](translations/README.mm_unicode.md)
&middot; [Bahasa Indonesia](translations/README.id.md)
&middot; [Català](translations/README.ca.md)
&middot; [Español](translations/README.es.md)
&middot; [Nederlands](translations/README.nl.md)
&middot; [Русский](translations/README.ru.md)
&middot; [Bulgarian](translations/README.bg.md)
&middot; [Македонски](translations/README.mk.md)
&middot; [Magyar](translations/README.hu.md)
&middot; [Slovenčina](translations/README.slk.md)
&middot; [日本語](translations/README.ja.md)
&middot; [Tiếng Việt](translations/README.vn.md)
&middot; [Polski](translations/README.pl.md)
&middot; [فارسی](translations/README.fa.md)
&middot; [Lietuvių kalba](translations/README.lt.md)
&middot; [한국어](translations/README.ko.md)
&middot; [Deutsch](translations/README.de.md)
&middot; [中文(Simplified)](translations/README.zh-cn.md)
&middot; [中文(Traditional)](translations/README.zh-tw.md)
&middot; [ελληνικά](translations/README.gr.md)
&middot; [العربية](translations/README.ar.md)
&middot; [Українська](translations/README.ua.md)
&middot; [Português (Portugal)](translations/README.pt-pt.md)
&middot; [Italiano](translations/README.it.md)
&middot; [ภาษาไทย](translations/README.th.md)
&middot; [Galego](translations/README.gl.md)
&middot; [नेपाली](translations/README.np.md)
&middot; [اردو](translations/README.ur.md)
&middot; [Limba Română](translations/README.ro.md)
&middot; [English](README.md)
&middot; [Türkçe](translations/README.tr.md)
&middot; [עברית](translations/README.hb.md)
&middot; [Czech](translations/README.cs.md)
&middot; [Slovenščina](translations/README.sl.md)
&middot; [Norsk](translations/README.no.md)
&middot; [Svenska](translations/README.se.md)
&middot; [Dansk](translations/README.da.md)
&middot; [Wikang Filipino](translations/README.tl.md)
&middot; [Қазақша](translations/README.kz.md)
&middot; [Afrikaans (South Africa)](translations/README.afk.md)
&middot; [Zulu (South Africa)](translations/README.zul.md)
&middot; [Kiswahili (Kenya)](translations/README.kws.md)
&middot; [ქართული](translations/README.ge.md)
&middot; [Igbo (Nigeria)](translations/README.igb.md)
&middot; [Yoruba (Nigeria)](translations/README.yor.md)
&middot; [Hausa (Nigeria)](translations/README.hau.md)
&middot; [Suomeksi](translations/README.fi.md)
&middot; [Español de México](translations/README.mx.md)
&middot; [Српски](translations/README.sr.md)
&middot; [Latvia](translations/README.lv.md)
&middot; [Shqip](translations/README.al.md)
&middot; [Беларуская мова](translations/README.by.md)
&middot; [Azərbaycan dili](translations/README.aze.md)
&middot; [Bosanski](translations/README.bih.md)
&middot; [پښتو - Pashto](translations/README.ps.md)
&middot; [ພາສາລາວ](translations/README.la.md)
&middot; [Af-soomaali](translations/README.so.md)
&middot; [አማርኛ(Ethiopia)](translations/README.am.md)
&middot; [සිංහල(Sri Lanka)](translations/README.si.md)
&middot; [հայերեն](translations/README.arm.md)

# Good First Issues

**Good First Issues** is an initiative to curate easy pickings from popular projects, so developers who've never contributed to open-source can get started quickly.

Website: [good-first-issues.github.io](https://good-first-issues.github.io)

This website is primarily targeted at developers who want to contribute to open source software but do not know where or how to start.

Open-source maintainers are always looking to get more people involved, but new developers generally think it's challenging to become a contributor. We believe getting developers to fix super-easy issues removes the barrier for future contributions. This is why *Good First Issues* exists.

## Adding a new project

You're welcome to add a new project in *Good First Issues*, just follow these steps:

- To maintain the quality of projects in *Good First Issues*, please make sure your GitHub repository meets the following criteria:

    - It has at least three issues with the `good first issue` label. This label is already present on all repositories by default.

    - It contains a `README.md` with detailed setup instructions for the project

    - It is actively maintained (last update less than 1 month ago)

- Add your repository's path (in the format `owner/name` and lexicographic order) in [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Create a new pull-request. Please add the link to the issues page of the repository in the PR description. Once the pull request is merged, the changes will be live on [good-first-issues.github.io](https://good-first-issues.github.io).

## How does it work?

- First *Good First Issues* is a static website that uses [PHP](https://www.php.net)` to generate HTML files. 
- We use [GitHub REST API](https://docs.github.com/en/rest) to fetch issues from the repositories listed in [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).
- To periodically cycle through issues (twice a day), we use [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Help us grow

Navigating open-source projects can be quite overwhelming for beginners and experienced contributors alike. *Good First Issues* looks to solve this problem by providing a platform that serves as a starting point for those looking to get started with open-source or those who are looking to get into a new project.

The more people who know about [good-first-issues.github.io](https://good-first-issues.github.io), the better. There are various ways you can help us grow: you could contribute to `awesome` lists, blog about us, reach out to bloggers, tech influences, developer and open-source on Twitter and YouTube, for example. Try and get [good-first-issues.github.io](https://good-first-issues.github.io) mentioned in a video or tweet!

## Suggestions and wishes

If you have questions or suggestions (or found a bug), you can always write to [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## License

This is open-sourced software licensed under the [MIT License](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).
