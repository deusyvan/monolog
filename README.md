# monolog
Usando monolog para usar packagist com uso de composer

Site oficial do composer: getcomposer.org

clicar em download e baixar manualmente: lastest snapshot : arquivo: composer.phar

- criar arquivo composer.json
    Diz ao instalador o que vamos instalar no projeto, no caso vamos instalar o monolog

- Na aplicação, vá pelo terminal e acesse a pasta onde está o composer, não executar como root

- Após Executar via terminal o comando "composer install"
- Se precisar atualizar apenas executar na pasta o "composer update"

- O composer cria seu proprio autoload, então para inserirmos na aplicação devemos fazer o seguinte:
Colocamos no arquivo index.php a inserção dele: require 'vendor/autoload.php'; para carregar as bibliotecas que o composer instalou

*RESUMO:
Você altera apenas o arquivo composer.json para incluir mais bibliotecas que for utilizar e install.



