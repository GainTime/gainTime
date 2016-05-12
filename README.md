# GainTime
Painel administrativo. Simples e rápido.

[Arquivos não compilados do GainTime](https://github.com/GainTime/build-GainTime)

### Instalação

* Via git:
    - Crie uma vendor:
    ```
    $ mkdir vendors; cd vendors
    ```
    - Faça o download:
    ```
    $ git submodule add https://github.com/GainTime/gainTime.git
    ```
    - Escolha a versão com a qual deseja trabalhar: `git checkout vx.y.z` (opcional)
    ```
    $ git checkout v0.2
    ```        
    ```
    $ git checkout v0.2.1
    ```
    - Informe ao git pra usar aquela versão no submodulo, commitando sua "pasta"
    - Pronto :smile:

### Estrutura

```
GainTime/
|-- dist/
|   |-- css/
|   |-- img/
|   |-- js/
|
|-- vendors
```


### Uso

Adicione à sua `<head>` as linhas seguintes:
```html
<link rel="icon" type="image/png" href="vendor/gainTime/dist/img/logo-gT.png">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="vendors/gainTime/dist/css/gainTime.min.css">
```
- A primeira linha se refere à imagem que aparece no ícone da aba do navegador.
- A segunda linha se refere à biblioteca de ícones que o GainTime utiliza. No caso, o [FontAwesome](http://fortawesome.github.io/Font-Awesome).
- A terceira linha se refere à estilização do GainTime.

No fim do seu arquivo, antes do fechamento da tag `body`, adicione as seguintes linhas:

```html
<script src="vendors/gainTime/vendors/jquery/jquery-2.1.4.min.js"></script>
<script src="vendors/gainTime/dist/js/gainTime.min.js"></script>
```
- A primeira linha se refere ao plugin de JavaScript que o GainTime utiliza, o JQuery, versão 2.1.4;
- A segunda linha se refere aos scripts gerais do GainTime;
- A terceira linha se refere aos scripts do GainTime que dizem respeito aos formulários.
___

### Layout


O layout é composto por quatro partes principais:

- **header > nav`.menu`** - O cabeçalho do site (`header`), onde ficam a logo (`img.menu-logo`), o menu de navegação (`nav.menu`) e a imagem de perfil do usuário (`div.me`).
```html
<header>
    <img src="../assets/img/logo-gT.png" alt="GainTime" class="menu-logo">
    <div id="me">
        <img src="../assets/img/logo-gT.png" alt="Me" class="professor-image">
        <ul id="me-menu">
            <a href="#"><li>Sair</li></a>
            ...
        </ul>
    </div>
    <input type="checkbox" id="menu" class="toggle">
    <label id="menu-toggle" for="menu" onclick><i class="fa fa-bars"></i></label>
    <nav class="menu">
        <ul>
            <a href="index.php"><li><i class="fa fa-home"></i> Início</li></a>
            ...
        </ul>
    </nav>
</header>
```

- **section `.box`** - A div principal que envolve todo o conteúdo "interno" do site.

    OBS: Na tela de login, pode ser substituída pela `class .login`.
```html
<section class="box">
    ...
</section>
```

- **footer** - A barra inferior do site.
```html
<footer>
    <div>
        <p>Área administrativa GainTime</p>
    </div>
</footer>
```

#### Tabelas
As tabelas são ativas com a class table`.table`. Isso pode parecer redundante, mas é uma tentativa de evitar 'conflito' com plugins de calendário e pickers de data.
```html
<table class="table">
    ...
</table>
```

Para auxiliar as tabelas administrativas (TBA), o GainTime dispõe de botões de ícones que indicam as ações mais comuns em uma TBA. Os botões são ativos com a class `.btn-action` e complementados com uma das 3 classes padrão que colorem o botão - `.edit` (azul), `.del` (vermelho), `.download` (verde) - e um ícone que representa a ação ([FontAwesome](http://fortawesome.github.io/Font-Awesome)).

```html
...
<td>
    <a href="#" class="btn-action edit" title="#">
        <i class="fa fa-edit fa-lg"></i>
    </a>
    <a href="#" class="btn-action del" title="#">
        <i class="fa fa-trash-o fa-lg"></i>
    </a>
</td>
...
```

#### Formulários
O formulários são ativos com a class form`.s-form`.
```html
<form class="s-form">
    ...
</form>
```
Os componentes de formulário do GainTime possuem um comportamento específico, e por isso precisam seguir a estrutura padrão, e dependem do script inputLabels para funcionar como planejado.

- **input**
```html
<div class="field has-label">
    <label for="myInput">My Input</label>
    <input id="myInput" type="text" name="" value="">
</div>
```

- **textarea**
```html
<div>
    <!-- Utilize menot se você quer um field que não se move -->
    <div class="field menot">
        <label for="myText">My Text</label>
    </div>
    <textarea id="myText" class="form-input" name="" rows="3"></textarea>
</div>
```

- **radio, checkbox** - Nestes casos a label que representa o título do bloco de inputs é opcional, e por tanto o `.field-mark` também o é.
```html
<div>
    <!-- opcional -->
    <div class="field-mark menot">
        <label>Options</label>
    </div>
    <!--  -->
    <label class="radio">
       <input type="radio" name="user[isAdmin]" required value="1"> op1
    </label>
    <label class="radio">
       <input type="radio" name="user[isAdmin]" value="0"> op2
    </label>
</div>
<div>
    <!-- opcional -->
    <div class="field-mark menot">
        <label>Options</label>
    </div>
    <!--  -->
    <label class="checkbox">
       <input type="checkbox" name="user[isAdmin]" required value="1"> op1
    </label>
    <label class="checkbox">
       <input type="checkbox" name="user[isAdmin]" value="0"> op2
    </label>
</div>
```

- **input type file**
```html
<div class="input-file">
    <div class="btn btn-file">
        <i class="fa fa-upload"></i>
        <input type="file" class="real" name="file" value="">
        <input type="hidden" name="MAX_FILE_SIZE" value="20971520"/>
    </div>
    <div class="field">
        <input class="false" type="text" value="" placeholder="Nenhum arquivo foi selecionado.">
    </div>
</div>
```

### Componentes
#### Botões
Utilize as classes de botão em tags `<a>`, `<input>`, ou `<button>`.
Os botões são ativos com a class `.btn`, e complementados com uma class de cor. Temo 3 classes de cor típicas para botão - `.send` (verde), `.wait` (amarelo), `.cancel` (vermelho).
```html
<button class="btn send">...</button>
<!-- Botão maior que o padrão -->
<button class="btn btn-lg send">..</button>
```

#### Mensagens
As classes de mensagem ocupam uma `width: 100%`, e podem ser fixas (`.msg-fixed`), ou temporárias (`.msg`). As mensagens temporárias ficam visíveis por 3 segundos após serem impressas. As classes de mensgem devem vir acompanhadas por uma classe de cor.
```html
<div class="msg success">This is a temporary message.</div>
<div class="msg-fixed warning">This is a fixed message</div>
```

#### Título
Os títulos ou cabeçalhos das páginas são ativos com a classe `.top-bar`. As `.top-bar` podem conter, ou não, um botão de ação. Este botão deve conter a classe `btn-add` para que fique com a cor principal do projeto e alinhado à direita.
```html
<div class="top-bar">
    <h1><i class="fa fa-file-pdf-o"></i> My page</h1>
    <a href="#" class="btn btn-add"><i class="fa fa-plus"></i>Adicionar</a>
</div>
```

### Complementos
#### Cores
As classes de cor aplicam background-color.
```html
/* Semanticamente preparado para mensagens e alertas */
.fail vermelho #F44336
.success verde #7CB124
.warning amarelo #FCF8E3

/* Semanticamente preparado para botões de ação */
.del vermelho #F44336
.download verde #7cb124
.edit azul #2196f3

/* Semanticamente preparado para botões de confirmação */
.cancel vermelho #EF4836
.send verde #2ECC71
.wait amarelo #F5AB35

```

#### Direções
As classes de direção forçam o posicionamento de um elemento à esquerda ou à direita.
```html
<div class="to-right"></div>
<div class="to-left"></div>
```

#### Visibilidade
As classes de visibilidade tornam elementos visíveis ou invisíveis.

- Elementos ocultos em celulares (max-width: 767px)
```html
<div class="hxs"></div>
```

- Elementos visíveis apenas em celuares (max-width: 767px)
```html
<div class="sxs"></div>
```

- Elementos invisíveis
```html
<div class="invisible"></div>
```

- Elementos não-invisíveis
```html
<div class="visible"></div>
```

#### Afaste-me da footer
Para afastar um elemento da footer, utilize a class `.last`.
```html
<section class="box last">
    ...
</section>
```

### Vendors
O GainTime utiliza [JQuery](https://jquery.com/)
