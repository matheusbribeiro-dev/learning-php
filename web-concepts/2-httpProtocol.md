## Protocolo HTTP - Hyper Text Transfer Protocol

HTTP é um protocolo de comunicação baseado em texto. É o protocolo principal pra troca de informações na web.

Nesse contexto, um protocolo nada mais é do que uma série de regras pré-definidas para a troca de informações.

Quando você digita uma url e dá enter no seu navegador, o que acontece é o seguinte:
1- O navegador "pergunta" ao sistema operacional qual o IP do servidor da url que você digitou.

2- O sistema operacional faz um dns lookup e devolve o IP para o navegador.

3- O navegador abre uma conexão TCP com o servidor.

4- O navegador envia uma requisição do tipo HTTP GET através da conexão TCP. A requisição não é nada mágico.
Vamos supor que vamos acessar minha página. O que o navegador envia pela conexão é um texto mais ou menos assim:

```HTTP
  GET http://google.com/ HTTP/1.1
  Host: google.com
  Connection: keep-alive
  Pragma: no-cache
  Cache-Control: no-cache
  Accept: text/html,application/xhtml+xml,application/  xml;q=0.9,image/webp,*/*;q=0.8
  Upgrade-Insecure-Requests: 1
  User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.36
  Accept-Encoding: gzip, deflate, sdch
  Accept-Language: en-US,en;q=0.8,pt;q=0.6
```

Meio confuso, né?
Mas cada um desses textos aí significa algo de acordo com as regras do protocolo.

5- o navegador recebe a resposta do servidor e fecha a conexão TCP. Ou, deixa ela aberta pra fazer uma nova requisição.

6- o navegador analisa a resposta e determina o que fazer com ela. Podemos ter vários formatos diferentes de resposta: html, videos, sons. Cada tipo tem sua forma diferente de ser interpretado pelo navegador.

- Atua na camada de aplicação e é enviado sobre o protocolo TCP.
- Stateless:

  - Cada requisição que é feita pelo navegador é independente. Assim que o navegador fecha a conexão TCP, toda a informação é perdida.
    Mesmo que várias requisições sejam enviadas pela mesma conexão TCP, uma requisição não sabe da outra.

- Cliente-Servidor

## Métodos GET e POST

1. Get:

- Essa é a requisição mais comum de todas. Através dessa requisição nós pedimos a representação de um recurso: que pode ser um arquivo html, xml, json, etc.
  Um exemplo de requisição GET seria:

          ```
          GET /search?q=web+moderno&hl=pt-BR HTTP/1.1
          User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
          Host: http://google.com
          Connection: Keep-Alive
          ```

2. Post:

- O método POST é utilizado quando queremos criar um recurso. Quando usamos POST, os dados vão no corpo da requisição e não na URI.

## Grupos de status HTTP

- 1xx - Informação
- 2xx - Sucesso
- 3xx - Redirecionamento
- 4xx - Erro no cliente
- 5xx - Erro no servidor

<hr>

Referências:

- [O protocolo HTTP é stateless. Mas o que isso significa?](http://gabsferreira.com/o-protocolo-http-e-stateless-mas-o-que-isso-significa/)

- [Os métodos HTTP: quais são e pra que servem](http://gabsferreira.com/os-metodos-http-e-a-diferenca-entre-eles/)
