# Good First Issues

**Good First Issues** is an initiative to curate easy pickings from popular projects, so developers who've never contributed to open-source can get started quickly.

Website: [good-first-issues.github.io](https://good-first-issues.github.io)

This website is primarily targeted at developers who want to contribute to open source software but do not know where or how to start.

Open-source maintainers are always looking to get more people involved, but new developers generally think it's challenging to become a contributor. We believe getting developers to fix super-easy issues removes the barrier for future contributions. This is why *Good First Issues* exists.

## Adding a new project

You're welcome to add a new project in *Good First Issues*, and we encourage all projects &mdash; old and new, big and small.

Follow these simple steps:

- Our goal is to narrow down projects for new open-source contributors. To maintain the quality of projects in *Good First Issues*, please make sure your GitHub repository meets the following criteria:

    - It has at least three issues with the `good first issue` label. This label is already present on all repositories by default. If not, you can follow the steps [here](https://help.github.com/en/github/managing-your-work-on-github/applying-labels-to-issues-and-pull-requests).

    - It contains a `README.md` with detailed setup instructions for the project

    - It is actively maintained

- Add your repository's path (in lexicographic order) in [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Create a new pull-request. Please add the link to the issues page of the repository in the PR description. Once the pull request is merged, the changes will be live on [good-first-issues.github.io](https://good-first-issues.github.io).

## Suggestions and wishes

If you have questions or suggestions (or found a bug), you can always write to [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## License

This is open-sourced software licensed under the [MIT License](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).




# Как это работает?



## Dependencies

- [Bootstrap](https://getbootstrap.com) for theme and frontend components
- [PHP](https://www.php.net) and [GitHub Workflow](https://docs.github.com/en/actions/using-workflows) for periodically calling [GitHub REST API](https://docs.github.com/en/rest)


