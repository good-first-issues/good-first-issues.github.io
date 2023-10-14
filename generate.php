<?php


// TODO Add CS-fixer
// TODO Rename file
// TODO To class + ->run()


// Удаляем все файлы (кроме .gitignore) из директории `./data`


// Read the JSON file
$json = file_get_contents('repositories.json');

// Decode the JSON file 
$json_data = json_decode($json, true);

// Display data 
print_r($json_data);

// TODO Рандомизируем массив с репозиториями

$indexContent= "<h1>Hello!</h1>";

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

    $indexContent .= '<h2>'.$repositoryData['full_name'].'</h2>';
    $indexContent .= '<p>'.$repositoryData['description'].'</p>';


    // Записываем ищуйки в общий файл
}




file_put_contents('index.html', $indexContent);

