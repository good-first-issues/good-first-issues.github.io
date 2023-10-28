![Good First Issues](./assets/github/social-preview.png)

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
