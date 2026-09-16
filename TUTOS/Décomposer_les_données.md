# Dépendances fonctionnelles

### 1. Produit

**Identifiant :** `idProduit`

`idProduit → nomProduit, prixProduit`

---

### 2. Commande

**Identifiant :** `idCommande`

`idCommande → numeroCommande, dateCommande`

---

### 3. CommandeProduit

**Clé composée :** `idCommande + idProduit`

`(idCommande, idProduit) → quantiteCommande`

---

### 4. Client

**Identifiant :** `idClient`

`idClient → nomClient, emailClient`

---

# Décomposition en groupes

Après l’analyse des dépendances fonctionnelles, on obtient les groupes suivants :

**COMMANDE**
`(idCommande, numeroCommande, dateCommande, idClient)`

**PRODUIT**
`(idProduit, nomProduit, prixProduit)`

**COMMANDE_PRODUIT**
`(idCommande, idProduit, quantiteCommande)`

**CLIENT**
`(idClient, nomClient, emailClient)`