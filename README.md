# Electronic Health App

Educational PHP/PostgreSQL health-record application with patient and laboratory-result pages.

## Local setup

Install PHP with the pgsql extension and PostgreSQL. XAMPP can provide Apache/PHP, but the database used by the code is PostgreSQL, not MySQL. Configure DATABASE_URL in the PHP server environment rather than committing a password.

The repository includes Electronic_health_app_database. Inspect its format and contents before restoring it into a disposable local database; do not import unknown patient records into production. Then serve the PHP files through Apache or:

~~~sh
php -S 127.0.0.1:8000
~~~

## Structure and limits

register.php, signup-doctor.php and index.php are account entry points; add_person.php, labresult.php and view_and_delete_patient.php provide record pages. connection.php establishes the database connection.

This is a learning prototype, not a certified medical system. Use synthetic data. Database access, permissions, SQL handling and personal-data lifecycle require further review before public deployment.

## Maintenance

Preserve the existing source and sample assets when making changes. Do not commit credentials, personal data or generated build output. This review documents the checked-in project; it does not certify production readiness or a successful build on every platform.
