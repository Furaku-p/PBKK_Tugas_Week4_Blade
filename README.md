# PBKK — Laravel Academic Profile

Modern static academic profile website for the PBKK Laravel routing assignment.

## Personal data
- Name: Alfianz Risqia Ilahi Loven Kary
- NRP: 5025241164
- Semester: 5
- IPK: `3.75`

## Routes
- `/` — Home
- `/mahasiswa/{nrp}` — Student profile, 10-digit NRP validation
- `/agent/{tema?}` — Agentic Network Security Harness concept
- `/hitung-ipk/{ip1}/{ip2}` — Average two IP values
- `/dashboard` — Dashboard route group
- Fallback — Custom 404 page

## Run
Create a normal Laravel project first, then copy these files into it. Run:

```bash
php artisan serve
```

Open `http://127.0.0.1:8000`.


### IPK
The homepage IPK is calculated with the same formula as `/hitung-ipk/{ip1}/{ip2}`. Change `ip1` and `ip2` in `routes/web.php` to your actual values; the displayed IPK will update automatically.
