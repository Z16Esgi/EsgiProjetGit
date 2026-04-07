# Contributing

Merci de contribuer à ce projet ! Voici les règles à respecter.

---

## Prérequis

- Avoir un compte GitHub
- Avoir cloné le dépôt en local
- Travailler sur une branche dédiée (jamais directement sur `main`)

---

## Workflow

1. **Crée une branche** à partir de `main`
   ```bash
   git checkout -b GIT-**_ma-fonctionnalite
   ```

2. **Fais tes modifications** puis commite avec un message clair
   ```bash
   git add .
   git commit -m "feat: description courte de la modification"
   ```

3. **Pousse ta branche**
   ```bash
   git push origin feature/ma-fonctionnalite
   ```

4. **Ouvre une Pull Request** sur GitHub vers la branche `main`

5. **Attends la revue** — au moins un membre de l'équipe doit approuver avant le merge

---

## Convention de commits

| Préfixe | Usage |
|--------|-------|
| `feat:` | Nouvelle fonctionnalité |
| `fix:` | Correction de bug |
| `docs:` | Documentation uniquement |
| `refactor:` | Refactoring sans changement de comportement |
| `chore:` | Tâches techniques (config, dépendances…) |

---

## Règles générales

- Ne jamais pusher directement sur `main`
- Un commit = une modification logique
- Les messages de commit sont en **français ou en anglais**, mais restez cohérents
- Supprimez votre branche après le merge

---

## Questions ?

Ouvrez une [issue](../../issues) sur le dépôt.
