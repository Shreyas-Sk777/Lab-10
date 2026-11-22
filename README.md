# Web Programming Lab 10 - Web Applications (PHP & GitHub Pages)

This repository contains solutions for **Lab 10**, implementing three server-side web applications using PHP, accompanied by a live static client-side layer to run smoothly on **GitHub Pages**.

---

## Live Applications on GitHub Pages

When deployed to GitHub Pages:
- **Main Portal**: `index.html` connects to all three interactive applications.
- **Part A**: `part_a/index.html` &rarr; `part_a/hello.html` (Start time in top-right corner) &rarr; `part_a/logout.html` (Thank you & usage duration).
- **Part B**: `part_b/index.html` &rarr; Dynamic date, time (12hr/24hr), and day display.
- **Part C**: `part_c/index.html` &rarr; Age verification gatekeeper (&lt; 18 Unauthorized vs &ge; 18 Welcome).

---

## Complete PHP Server-Side Source (Included for Evaluation)

Professors evaluating the PHP scripts will find the clean backend implementations here:

| Part | Description | PHP Source Files |
| :--- | :--- | :--- |
| **Part A** | Name input, session tracking, start time at top-right corner, logout duration | `part_a/index.php`, `part_a/hello.php`, `part_a/logout.php` |
| **Part B** | Display current Date, Time, and Day using PHP `date()` | `part_b/index.php`, `part_b.php` |
| **Part C** | Age authorization (&lt; 18 unauthorized vs &ge; 18 welcome) | `part_c/index.html`, `part_c/verify.php` |

---

## How to Deploy to GitHub Pages

1. Create a repository on GitHub named `Lab-10` (or `Lab10`).
2. Run in terminal:
   ```powershell
   cd "d:\Web Programming Labs\Lab 10"
   git remote add origin https://github.com/<your-username>/Lab-10.git
   git branch -M main
   git push -u origin main
   ```
3. In GitHub repo **Settings** &rarr; **Pages**, set branch to `main` and save.
4. Your live app is accessible at:
   `https://<your-username>.github.io/Lab-10/`

---

## How to Run Locally with PHP

```powershell
cd "d:\Web Programming Labs\Lab 10"
php -S localhost:8000
```
Then visit [http://localhost:8000/index.php](http://localhost:8000/index.php).
