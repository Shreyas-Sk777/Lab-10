# Web Programming Lab 10 - PHP Applications

This directory contains solutions for **Lab 10**, implementing three server-side web applications using PHP.

---

## Directory Structure

```text
Lab 10/
├── index.php                 # Master navigation portal linking all 3 applications
├── style.css                 # Unified modern stylesheet
├── part_b.php                # Root shortcut for Part B
├── part_c.html               # Root shortcut for Part C
├── part_a/                   # Part A: Session & Usage Duration Tracker
│   ├── index.php             # Input form for Name
│   ├── hello.php             # Hello greeting with start time in top-right corner & logout button
│   └── logout.php            # Logout summary page displaying duration of usage & session destruction
├── part_b/                   # Part B: Current Date, Time and Day
│   └── index.php             # PHP script using date() functions
└── part_c/                   # Part C: Age Authorization Gatekeeper
    ├── index.html            # HTML form taking Name and Age
    └── verify.php            # PHP validation (< 18 unauthorized vs >= 18 welcome)
```

---

## Application Overviews

### Part A: Session & Usage Duration Tracker
- **Requirements**:
  - Takes a name as input.
  - Submits to `hello.php` which greets the user with the name taken from the request.
  - Shows the start time at the right top corner of the page.
  - Provides a **Logout** button.
  - Clicking **Logout** displays a logout page with a "Thank You" message and the total duration of usage.
  - Uses PHP `$_SESSION` to store the name and start timestamp.
- **Files**:
  - `part_a/index.php`
  - `part_a/hello.php`
  - `part_a/logout.php`

### Part B: Current Date, Time and Day
- **Requirements**:
  - PHP script displaying the current Date, Time, and Day.
- **Key PHP Functions**:
  - `date('l')` - Current day of week (e.g., `Tuesday`)
  - `date('d-m-Y')` - Current date (e.g., `17-11-2026`)
  - `date('h:i:s A')` - Current 12-hour time with AM/PM (e.g., `10:05:30 AM`)
- **Files**:
  - `part_b/index.php` / `part_b.php`

### Part C: Age Authorization Gatekeeper
- **Requirements**:
  - Takes Name and Age from an HTML page.
  - If `age < 18`: displays *"Hello \<name\>, you are not authorized to visit the site"*.
  - Otherwise (`age >= 18`): displays *"Welcome \<name\> to this site"*.
- **Files**:
  - `part_c/index.html` / `part_c.html`
  - `part_c/verify.php`

---

## How to Run

Because these applications use server-side PHP and sessions, they must be run through a PHP server.

### Option 1: Built-in PHP Server (Fastest)
1. Open PowerShell or Command Prompt in the `Lab 10` folder:
   ```powershell
   cd "d:\Web Programming Labs\Lab 10"
   php -S localhost:8000
   ```
2. Open your web browser and navigate to:
   [http://localhost:8000](http://localhost:8000)

### Option 2: XAMPP / WAMP
1. Copy or link `Lab 10` into your `C:\xampp\htdocs\` folder.
2. Start Apache from the XAMPP Control Panel.
3. Open:
   [http://localhost/Lab%2010/](http://localhost/Lab%2010/)
