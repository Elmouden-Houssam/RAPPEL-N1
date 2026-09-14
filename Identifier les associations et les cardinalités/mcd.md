##  2.1. Identifier les associations:
-- les entiter
```
CLIENT
COMMANDE
PRODUIT
```


lire les regles :

CLIENT ------(1,N)---PASS------(1,1)--------COMMAND
COMMAND -----(1,N)----CONTIENT-----(0,N)---PRODUIT