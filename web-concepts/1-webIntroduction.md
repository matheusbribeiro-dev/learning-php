## Pontos históricos da Internet

- 1950s -- Computador eletrônico.
- 1960s -- ARPANET - Departamento de defesa norte americano.
- 1970s -- TCP/IP - Robert E.Kahn & Vint Cerf.
- 1980s -- WWW - Tim Berners Lee.
- 1990s -- Internet no Brasil.
- 2000s -- IG, Redes Sociais, Internet em casa.

## TCP/IP - Protocolo base da internet

>O Transmission Control Protocol/ Internet Protocol é um conjunto de protocolos de comunicação entre computadores em rede.

- Definido por camadas, tendo cada camada uma responsabilidade:

	Dependência entre camadas: Aplicação -> Transporte -> Internet ->   	Rede física

	- Alplicação:
		+ HTTP, FTP, SMTP etc;
		+ Comunicação processo-a-processo;
		+ Número da porta.
	
	- Transporte:
		+ TCP (confiável);
		+ UDP (melhor esforço).
		
	- Internet:
		+ IP;
		+ Conexão entre redes;
		+ Transferência de pacotes;
		+ Cominicação HOST a HOST;
		+ Confiabilidade;
		+ Integridade etc.
		
	- Rede física:
		+ Ethernet;
		+ WIFI;
		+ Mac adress;
		+ Hardware.
		
## Anatomia do IPV4

- Dividido em 4 partes, cada parte pode ir de 0 a 255;
- Classe A:

	| 192.|168.100.230|
	|-----|-----------|
	|Rede |    Host   |
	
	- Máscara de sub-rede: 255.0.0.0
	
> Dentro dessa organização para se identificar o que é rede e o que é host existe a máscara de sub-rede.
> A máscara de sub-rede é uma seguência numérica associada ao ip, ou seja, tem o mesmo tamanho do número de ip.
> Numa máscara de sub-rede sempre que determinado bit for igual a 1 o bit correspondente no ip aponta para uma rede;
> Numa máscara de sub-rede sempre que determinado bit for igual a 0
>o bit correspondente no ip aponta para uma máquina(host).

- Classe B:

	| 192.168.|100.230|
	|---------|-------|
	|   Rede  |  Host |
	
	- Máscara de sub-rede: 255.255.0.0

- Classe C:

	| 192.168.100.|230 |
	|-------------|----|
	|   Rede      |Host|
	
	- Máscara de sub-rede: 255.255.255.0
