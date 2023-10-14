<?php


// TODO Add CS-fixer
// TODO Rename file
// TODO To class + ->run()


if (!is_dir('pages')) {
    mkdir('pages');
}


// Read the JSON file
$json = file_get_contents('repositories.json');

// Decode the JSON file 
$json_data = json_decode($json, true);

// Display data 
print_r($json_data);

// TODO Рандомизируем массив с репозиториями

$indexContent = "<h1>Hello!</h1>";

$repositoriesByLanguage = [];

// Проходимся по всем репозиториям
foreach ($json_data as $line) {
    echo "Line : https://api.github.com/repos/" . $line . "\n";
    // Записываем информацию о репозитории в файл data/repositories.json
    // Это необходимо для главной страницы

    $opts = [
        'http' => [
            'method' => 'GET',
            'header' => [
                'User-Agent: PHP'
            ]
        ]
    ];

    $context = stream_context_create($opts);
    $repositoryJson = file_get_contents('https://api.github.com/repos/' . $line, false, $context);
    $repository = json_decode($repositoryJson, true);

    $repositoryData = [
        'html_url' => $repository['html_url'], // Ex: "https://github.com/octocat/Hello-World"
        'full_name' => $repository['full_name'], // Ex: "octocat/Hello-World"
        'description' => $repository['description'], // Ex: "This your first repo!"
        'language' => $repository['language'], // Ex: null,
        'stargazers_count' => $repository['stargazers_count'], // Ex: 80,
        'open_issues_count' => $repository['open_issues_count'], // Ex: 0,
        'open_issues' => $repository['open_issues'], // Ex: 0,
        'updated_at' => $repository['updated_at'], // Ex: "2011-01-26T19:14:43Z",
    ];

    print_r($repositoryData);

    // Конетент для главной страницы
    $indexContent .= '<h2>' . $repositoryData['full_name'] . '</h2>';
    $indexContent .= '<p>' . $repositoryData['description'] . '</p>';

    $repositoriesByLanguage[$repositoryData['language']][] = $repositoryData['full_name'];

    // Записываем ищуйки в общий файл
}


file_put_contents('index.html', $indexContent);


foreach ($repositoriesByLanguage as $lang => $repositories) {
    if (strlen($lang) < 1) {
        $lang = 'other';
    }

    print_r('Language: ' . $lang);

    $langFile = 'pages/' . $lang . '.html';
    if (file_exists($langFile)) {
        $status = unlink($langFile) ? 'The file ' . $langFile . ' has been deleted' . "\n" : 'Error deleting ' . $langFile . "\n";
        echo $status;
    }


    // TODO Пишем шапку файла
    file_put_contents($langFile, '<h1>Lang: ' . $lang . '</h1>' . "\n");

    foreach ($repositories as $repository) {
        print_r('Repository: ' . $repository."\n");

        $issuesJson = file_get_contents('https://api.github.com/repos/' . $repository . '/issues?state=open&sort=updated&labels=good%20first%20issue', false, $context);
        $issues = json_decode($issuesJson, true);

        foreach ($issues as $issue) {
            print_r('Issue #' . $issue['number'] . ' ' . $issue['title'] . "\n");

            $str = '<p>' . $issue['title'] . '</p>';
            $str .= '<p>' . $issue['html_url'] . '</p>';

            file_put_contents($langFile, $str, FILE_APPEND);
        }

    }


}

