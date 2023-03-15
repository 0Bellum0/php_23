# php_23
## Primeiro commit
### Curso Infoserv

## Passos
    1.wsl new window (Ubunto)
    2.ctrl+shift+p e entra na pasta var\www\html
    3.git clone link do repositório (Terminal)
    4.ctrl+shift+p e entra na pasta var\www\html\php_23
    5.configurar o git (email e name)
    6.verificar se o apache esta rodando
    6.1.sudo service apache2 status (Terminal)
    6.2.sudo service apache2 start (se não estiver rodando) (Terminal)

## Para salvar no github
    1.git add . (Onde "." é todos os arquivos ou especificar por nome)
    2.git commit -m "comentário"
    3.git push


## Dados Tabela de Main:
    1.id PK
    2.staff_id FK
    3.client_id FK
    4.product_id FK
    5.department_id FK
    6.company_id FK
    7.rh_id FK
    8.alt_who (mod_who)
    9.alt_when (mod_when)

## Dados Tabela de Staff:
    1.staff_id PK
    2.staff_status 0 or 1
    3.staff_fullame
    4.staff_mail
    5.staff_name
    6.staff_pass
    7.staff_adress
    8.staff_cep
    9.staff_cpf
    10.staff_nationality
    11.staff_phone
    12.staff_estado_civil
    13.staff_rank
    14.department_id FK
    15.log_first
    16.log_last
    
## Dados Tabela de Produtos:
    1.product_id PK
    2.product_status 0 or 1
    3.product_type
    4.product_cost
    5.product_price
    6.product_profit
    7.product_seekage
    8.product_start
    9.department_id FK
    10.company_id FK
    
## Dados Tabela de Departamentos:
    1.department_id PK
    2.department_name
    3.department_manager FK

## Dados Tabela de companhias:
    1.company_id PK
    2.company_name
    3.company_cnpj
    4.company_status
    5.company_hq_adress
    6.company_hq_cep

## Dados Tabela Clientes:
    1.client_id PK
    2.client_status 0 or 1
    3.client_fullame
    4.client_mail
    5.client_name
    6.client_pass
    7.client_adress
    8.client_cep
    9.client_cpf
    10.client_nationality
    11.client_phone
    12.client_estado_civil
    13.client_gender

## Dados tabela RH:
    1.rh_id
    2.staff_id FK
    3.staff_status VUK
    4.staff_department FK
    5.staff_rank VUK
    6.staff_salary
