# ![](assets/title.png) Treinamento SAP Cloud for Customer

![#](https://img.shields.io/badge/PHP-Codeception-111?style=flat-square&logo=Php)
![#](https://img.shields.io/badge/Selenium-Webdriver-111?style=flat-square&logo=selenium)

Este repositório foi criado unicamente com o propósito de facilitar a visualização do progresso do treinamento, utilizando cenários de testes para exercitar e garantir os passos das soluções desenvolvidas.

## Primeiros passos

### Instalação do Selenium

Realize a instalação do Selenium utilizando o comando `npm install selenium-standalone -g`, logo a seguir execute `selenium-standalone install` para instalar e configurar o serviço. Alternativamente você pode realizar a instalação conforme as demandas do seu ambiente. Para mais detalhes veja a [documentação oficial](https://www.selenium.dev/documentation/webdriver/).

Com o webdriver instalado inicialize o serviço do Selenium com o comando `selenium-standalone start`.

Resumidamente, os comandos de instalação e inicialização do serviço do Selenium são:
```
npm install selenium-standalone -g
selenium-standalone install
selenium-standalone start
```

### Instalação das dependências

Primeiramente realize o download deste repositório e, a seguir, execute `composer install` para proceder com a instalação das dependências.

### Configuração do ambiente

Logo em seguida configure as credenciais de acesso em seu `.env` conforme [arquivo de exemplo](.env.example).

## Utilização

Para utilização seguem os mesmos princípios de operação do Codeception. A exemplo do comando de execução dos testes:
```
php vendor/bin/codecept run --steps
```

[![asciicast](https://asciinema.org/a/1vMzM7YozrZBuYyBu2uP3DRoY.svg)](https://asciinema.org/a/1vMzM7YozrZBuYyBu2uP3DRoY)