>**NOTE:** _This file has been translated automatically. If you find an error, just make a PR with the edits" to all translation files._
![Boas primeiras questões](../assets/github/social-preview.png)

# Bons primeiros problemas

**Good First Issues** é uma iniciativa para selecionar escolhas fáceis de projetos populares, para que desenvolvedores que nunca contribuíram com código aberto possam começar rapidamente.

Site: [good-first-issues.github.io](https://good-first-issues.github.io)

Este site é direcionado principalmente a desenvolvedores que desejam contribuir com software de código aberto, mas não sabem por onde ou como começar.

Os mantenedores de código aberto estão sempre procurando envolver mais pessoas, mas os novos desenvolvedores geralmente acham que é um desafio se tornar um contribuidor. Acreditamos que fazer com que os desenvolvedores corrijam problemas superfáceis remove a barreira para futuras contribuições. É por isso que existem *Good First Issues*.

## Adicionando um novo projeto

Você pode adicionar um novo projeto em *Good First Issues*, basta seguir estas etapas:

- Para manter a qualidade dos projetos em *Good First Issues*, certifique-se de que seu repositório GitHub atenda aos seguintes critérios:

     - Possui pelo menos três edições com o rótulo de “boa primeira edição”. Este rótulo já está presente em todos os repositórios por padrão.

     - Contém um `README.md` com instruções detalhadas de configuração para o projeto

     - É mantido ativamente (última atualização há menos de 1 mês)

- Adicione o caminho do seu repositório (no formato `proprietário/nome` e ordem lexicográfica) em [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Crie uma nova solicitação pull. Adicione o link para a página de problemas do repositório na descrição do PR. Depois que a solicitação pull for mesclada, as alterações estarão disponíveis em [good-first-issues.github.io](https://good-first-issues.github.io).

## Como funciona?

- First *Good First Issues* é um site estático que usa [PHP](https://www.php.net)` para gerar arquivos HTML.
- Usamos a [API REST do GitHub](https://docs.github.com/en/rest) para buscar problemas dos repositórios listados em [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- Para analisar periodicamente os problemas (duas vezes por dia), usamos o [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Ajude-nos a crescer

Navegar em projetos de código aberto pode ser bastante cansativo tanto para iniciantes quanto para colaboradores experientes. *Good First Issues* busca resolver esse problema fornecendo uma plataforma que serve como ponto de partida para quem deseja começar com código aberto ou para quem deseja entrar em um novo projeto.

Quanto mais pessoas souberem sobre [good-first-issues.github.io](https://good-first-issues.github.io), melhor. Existem várias maneiras de nos ajudar a crescer: você pode contribuir para listas “incríveis”, postar sobre nós, entrar em contato com blogueiros, influências tecnológicas, desenvolvedores e código aberto no Twitter e no YouTube, por exemplo. Tente fazer com que [good-first-issues.github.io](https://good-first-issues.github.io) seja mencionado em um vídeo ou tweet!

## Sugestões e desejos

Se você tiver dúvidas ou sugestões (ou encontrar um bug), você pode escrever para [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licença

Este é um software de código aberto licenciado sob a [Licença MIT](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).
