![Good First Issues](./assets/github/social-preview.png)

#### Read this in [other languages](translations/Translations.md):

[Gujarati](translations/README.guj.md)
&middot; [Hindi](translations/README.hi.md)
&middot; [Marathi](translations/README.mr.md)
&middot; [Malayalam](translations/README.ml.md)
&middot; [Kannada](translations/README.ka.md)
&middot; [Telugu](translations/README.te.md)
&middot; [Odia](translations/README.od.md)
&middot; [Punjabi](translations/README.pb.md)
&middot; [Bengali](translations/README.bn.md)
&middot; [Tamil](translations/README.ta.md)
&middot; [Burmese](translations/README.mm_unicode.md)
&middot; [Bahasa Indonesia](translations/README.id.md)
&middot; [Catalan](translations/README.ca.md)
&middot; [Spanish](translations/README.es.md)
&middot; [Dutch](translations/README.nl.md)
&middot; [Russian](translations/README.ru.md)
&middot; [Bulgarian](translations/README.bg.md)
&middot; [Macedonian](translations/README.mk.md)
&middot; [Hungarian](translations/README.hu.md)
&middot; [Slovak](translations/README.slk.md)
&middot; [Japanese](translations/README.ja.md)
&middot; [Vietnamese](translations/README.vn.md)
&middot; [Polish](translations/README.pl.md)
&middot; [Persian](translations/README.fa.md)
&middot; [Lithuanian](translations/README.lt.md)
&middot; [Korean](translations/README.ko.md)
&middot; [German](translations/README.de.md)
&middot; [Chinese(Simplified)](translations/README.zh-cn.md)
&middot; [Chinese(Traditional)](translations/README.zh-tw.md)
&middot; [Greek](translations/README.gr.md)
&middot; [Arabic](translations/README.ar.md)
&middot; [Ukrainian](translations/README.ua.md)
&middot; [Portuguese(Portugal)](translations/README.pt-pt.md)
&middot; [Italian](translations/README.it.md)
&middot; [Thai](translations/README.th.md)
&middot; [Galician](translations/README.gl.md)
&middot; [Nepali](translations/README.np.md)
&middot; [Urdu](translations/README.ur.md)
&middot; [Romanian](translations/README.ro.md)
&middot; [English](README.md)
&middot; [Turkish](translations/README.tr.md)
&middot; [Hebrew](translations/README.hb.md)
&middot; [Czech](translations/README.cs.md)
&middot; [Slovenian](translations/README.sl.md)
&middot; [Norwegian](translations/README.no.md)
&middot; [Swedish](translations/README.se.md)
&middot; [Danish](translations/README.da.md)
&middot; [Filipino](translations/README.tl.md)
&middot; [Kazakh](translations/README.kz.md)
&middot; [Afrikaans (South Africa)](translations/README.afk.md)
&middot; [Zulu (South Africa)](translations/README.zul.md)
&middot; [Kiswahili (Kenya)](translations/README.kws.md)
&middot; [Georgian](translations/README.ge.md)
&middot; [Igbo (Nigeria)](translations/README.igb.md)
&middot; [Yoruba (Nigeria)](translations/README.yor.md)
&middot; [Hausa (Nigeria)](translations/README.hau.md)
&middot; [Finnish](translations/README.fi.md)
&middot; [Mexican Spanish](translations/README.mx.md)
&middot; [Serbian](translations/README.sr.md)
&middot; [Latvia](translations/README.lv.md)
&middot; [Albanian](translations/README.al.md)
&middot; [Belarusian](translations/README.by.md)
&middot; [Azerbaijani](translations/README.aze.md)
&middot; [Bosnian](translations/README.bih.md)
&middot; [Pashto](translations/README.ps.md)
&middot; [Lao](translations/README.la.md)
&middot; [Somali](translations/README.so.md)
&middot; [Amharic(Ethiopia)](translations/README.am.md)
&middot; [Sinhala(Sri Lanka)](translations/README.si.md)
&middot; [Armenian](translations/README.arm.md)

# Good First Issues

**Good First Issues** helps you make your first contribution to open-source. Developers who've never contributed to open-source can get started quickly.

Website: [good-first-issues.github.io](https://good-first-issues.github.io)

This website is primarily targeted at developers who want to contribute to open source software but do not know where or how to start.

Open-source maintainers are always looking to get more people involved, but new developers generally think it's challenging to become a contributor. We believe getting developers to fix super-easy issues removes the barrier for future contributions. This is why *Good First Issues* exists.

## How it works?

App send the request to GutHub API for each programming language:

```bash
curl -L \
  -H "Accept: application/vnd.github+json" \
  -H "X-GitHub-Api-Version: 2022-11-28" \
  "https://api.github.com/search/issues?q=label:\"good+first+issue\"+language:php+state:open+no:assignee&sort=updated&order=desc&per_page=50&page=1"
```

And get the response with JSON-array with information about issues:

```json
[
  {
    "url": "https://api.github.com/repos/symfony/ux/issues/1480",
    "repository_url": "https://api.github.com/repos/symfony/ux",
    "labels_url": "https://api.github.com/repos/symfony/ux/issues/1480/labels{/name}",
    "comments_url": "https://api.github.com/repos/symfony/ux/issues/1480/comments",
    "events_url": "https://api.github.com/repos/symfony/ux/issues/1480/events",
    "html_url": "https://github.com/symfony/ux/issues/1480",
    "id": 2125792255,
    "node_id": "I_kwDOEuCKh85-tQP_",
    "number": 1480,
    "title": "[UX Dropzone] drag'n'drop replacement fail",
    "user": {
      "login": "3PSY0N",
      "id": 78256817,
      "node_id": "MDQ6VXNlcjc4MjU2ODE3",
      "avatar_url": "https://avatars.githubusercontent.com/u/78256817?v=4",
      "gravatar_id": "",
      "url": "https://api.github.com/users/3PSY0N",
      "html_url": "https://github.com/3PSY0N",
      "followers_url": "https://api.github.com/users/3PSY0N/followers",
      "following_url": "https://api.github.com/users/3PSY0N/following{/other_user}",
      "gists_url": "https://api.github.com/users/3PSY0N/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/3PSY0N/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/3PSY0N/subscriptions",
      "organizations_url": "https://api.github.com/users/3PSY0N/orgs",
      "repos_url": "https://api.github.com/users/3PSY0N/repos",
      "events_url": "https://api.github.com/users/3PSY0N/events{/privacy}",
      "received_events_url": "https://api.github.com/users/3PSY0N/received_events",
      "type": "User",
      "site_admin": false
    },
    "labels": [
      {
        "id": 2540405642,
        "node_id": "MDU6TGFiZWwyNTQwNDA1NjQy",
        "url": "https://api.github.com/repos/symfony/ux/labels/good%20first%20issue",
        "name": "good first issue",
        "color": "7057ff",
        "default": true,
        "description": "Good for newcomers"
      },
      {
        "id": 6831689208,
        "node_id": "LA_kwDOEuCKh88AAAABlzNN-A",
        "url": "https://api.github.com/repos/symfony/ux/labels/Dropzone",
        "name": "Dropzone",
        "color": "dddddd",
        "default": false,
        "description": ""
      }
    ],
    "state": "open",
    "locked": false,
    "assignee": null,
    "assignees": [

    ],
    "milestone": null,
    "comments": 5,
    "created_at": "2024-02-08T18:08:55Z",
    "updated_at": "2024-08-13T11:29:17Z",
    "closed_at": null,
    "author_association": "NONE",
    "active_lock_reason": null,
    "body": "Hello,\r\n\r\nWith symfony ux dropzone, you can drag and drop files to add them to the dropzone.\r\nOnce a file is in the zone (file A), if you want to replace it with another file (file B), drag'n'drop doesn't work: file A isn't replaced in the dropzone by file B.\r\nAnd file B opens in a new browser tab.\r\n\r\nIs this a known problem? How can I solve it, please?\r\n\r\n\r\nThanks\r\n\r\n![uxdropzone](https://github.com/symfony/ux/assets/78256817/f9ea1728-4f4b-4287-bcb9-22063b0b47d7)\r\n",
    "reactions": {
      "url": "https://api.github.com/repos/symfony/ux/issues/1480/reactions",
      "total_count": 0,
      "+1": 0,
      "-1": 0,
      "laugh": 0,
      "hooray": 0,
      "confused": 0,
      "heart": 0,
      "rocket": 0,
      "eyes": 0
    },
    "timeline_url": "https://api.github.com/repos/symfony/ux/issues/1480/timeline",
    "performed_via_github_app": null,
    "state_reason": null,
    "score": 1.0
  },
  {
    
  }
]
```

After that, we just render a couple of static HTML pages.

To periodically cycle through issues (twice a day), we use [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Help us grow

Navigating open-source projects can be quite overwhelming for beginners and experienced contributors alike. *Good First Issues* looks to solve this problem by providing a platform that serves as a starting point for those looking to get started with open-source or those who are looking to get into a new project.

The more people who know about [good-first-issues.github.io](https://good-first-issues.github.io), the better. There are various ways you can help us grow: you could contribute to `awesome` lists, blog about us, reach out to bloggers, tech influences, developer and open-source on Twitter and YouTube, for example. Try and get [good-first-issues.github.io](https://good-first-issues.github.io) mentioned in a video or tweet!

## Suggestions and wishes

If you have questions or suggestions (or found a bug), you can always write to [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## License

This is open-sourced software licensed under the [MIT License](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).
