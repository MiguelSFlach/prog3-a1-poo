# Sistema de Registro de Usuários com PHP - Programação III

## Nome: Miguel Schneiders Flach  
## Turma: Ciência da Computação - UNOESC  
## Professor: Leandro Otavio Cordova Vieira  

---

### 📌 Descrição do Projeto

Projeto desenvolvido como atividade A1 da disciplina de Programação III.  
O sistema foi construído utilizando **PHP puro com orientação a objetos**, respeitando os seguintes requisitos:

- Cadastro de usuários (nome, e-mail, senha)
- Login com validação
- Sessão para autenticação
- Cookie para lembrar o e-mail
- Área restrita (dashboard)
- Logout com destruição da sessão

---

### 🗃️ Estrutura de Diretórios

```
/classes
  Usuario.php
  Sessao.php
  Autenticador.php

/index.php
/cadastro.php
/processa_cadastro.php
/login.php
/processa_login.php
/dashboard.php
/logout.php
```

---

### 🚀 Como Executar Localmente

1. Clone o repositório:
   ```bash
   git clone https://github.com/seuusuario/prog3-a1-poo-miguel-schneiders-flach.git
   ```

2. Inicie o servidor embutido do PHP:
   ```bash
   cd prog3-a1-poo-miguel-schneiders-flach
   php -S localhost:8000
   ```

3. Acesse no navegador:
   ```
   http://localhost:8000
   ```

---

### ✅ Diferenciais Implementados

- `password_hash()` e `password_verify()` usados para proteger as senhas
- Sessão iniciada e protegida nas rotas restritas
- Cookies funcionais com checkbox "Lembrar e-mail"
- Código limpo, comentado e modularizado com OOP

---
