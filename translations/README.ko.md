![좋은 첫 번째 이슈](https://github.com/Krishna01work/good-first-issues.github.io/blob/f5ac4b7f8543913637057e166638f1735512434c/assets/github/social-preview.png)

# 좋은 첫 번째 이슈

**Good First Issues**는 인기 프로젝트 중에서 쉽게 선택할 수 있도록 선별하여 오픈 소스에 기여한 적이 없는 개발자도 빠르게 시작할 수 있도록 하는 이니셔티브입니다.

웹사이트: [good-first-issues.github.io](https://good-first-issues.github.io)

이 웹사이트는 주로 오픈 소스 소프트웨어에 기여하고 싶지만 어디서 어떻게 시작해야 할지 모르는 개발자를 대상으로 합니다.

오픈 소스 관리자는 항상 더 많은 사람들이 참여하도록 노력하지만, 새로운 개발자는 일반적으로 기여자가 되는 것이 어렵다고 생각합니다. 우리는 개발자가 매우 쉬운 문제를 해결하도록 하면 향후 기여에 대한 장벽이 제거된다고 믿습니다. 이것이 *Good First Issues*가 존재하는 이유입니다.

## 새 프로젝트 추가

*Good First Issues*에 새 프로젝트를 추가하실 수 있습니다. 다음 단계를 따르세요.

- *Good First Issues* 프로젝트의 품질을 유지하려면 GitHub 저장소가 다음 기준을 충족하는지 확인하세요.

     - '좋은 첫 호' 라벨이 붙은 호가 최소 3개 이상 있습니다. 이 레이블은 기본적으로 모든 저장소에 이미 존재합니다.

     - 프로젝트에 대한 자세한 설정 지침이 포함된 `README.md`가 포함되어 있습니다.

     - 활발히 유지관리되고 있습니다.(마지막 업데이트가 1개월 이내)

- [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json)에 저장소 경로(`소유자/이름` 형식 및 사전순)를 추가합니다.

- 새로운 풀 요청을 생성합니다. PR 설명에 저장소 이슈 페이지 링크를 추가해주세요. 풀 요청이 병합되면 변경 사항이 [good-first-issues.github.io](https://good-first-issues.github.io)에 게시됩니다.

## 어떻게 작동하나요?

- First *Good First Issues*는 [PHP](https://www.php.net)`를 사용하여 HTML 파일을 생성하는 정적 웹사이트입니다.
- [GitHub REST API](https://docs.github.com/en/rest)를 사용하여 [repositories.json](https://github.com/gomzyakov/good-first)에 나열된 리포지토리에서 이슈를 가져옵니다. -문제/blob/main/repositories.json).
- 정기적으로 문제를 순환하기 위해(하루 2회) [GitHub Workflow](https://docs.github.com/en/actions/using-workflows)를 사용합니다.

## 우리의 성장을 도와주세요

오픈 소스 프로젝트를 탐색하는 것은 초보자와 숙련된 기여자 모두에게 상당히 부담스러울 수 있습니다. *Good First Issues*는 오픈 소스를 시작하려는 사람들이나 새로운 프로젝트에 참여하려는 사람들을 위한 출발점 역할을 하는 플랫폼을 제공함으로써 이 문제를 해결하려고 합니다.

[good-first-issues.github.io](https://good-first-issues.github.io)에 대해 아는 사람이 많을수록 좋습니다. 우리의 성장을 도울 수 있는 다양한 방법이 있습니다. 예를 들어 '멋진' 목록에 기여하고, 우리에 대한 블로그를 작성하고, 블로거, 기술 영향력자, 개발자 및 Twitter 및 YouTube의 오픈 소스에 접근할 수 있습니다. 동영상이나 트윗에서 [good-first-issues.github.io](https://good-first-issues.github.io)를 언급해 보세요!

## 제안 및 희망사항

질문이나 제안 사항이 있거나 버그를 발견한 경우 언제든지 [문제](https://github.com/good-first-issues/good-first-issues.github.io/issues)에 글을 쓸 수 있습니다.

## 라이센스

이는 [MIT 라이선스](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE)에 따라 라이선스가 부여된 오픈 소스 소프트웨어입니다.