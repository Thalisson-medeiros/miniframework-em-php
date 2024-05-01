# miniframework em php
---
## Objetivo
* A idéia deste __miniframework__ é facilitar o desenvolvimento de projetos web com php.
## Estrutura
---
* Utiliza o Padrão de Arquitetura MVC.
* Utiliza mysql para lidar com o banco de dados.
* Utiliza o composer para Gerenciar as Dependências do projeto e também o uso do __autoload__.
* Os diretórios estão divididos em 3 partes:
    * "App" = Contém os Models, Views e os Controllers.
    * "Public" = Contém o arquivo 'index' que funciona como a porta de entrada do projeto.
    * "MF" = Fica dentro de 'vendor' e Contém as abstrações de Models, Views e Controllers.
