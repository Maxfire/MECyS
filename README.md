# MECyS

## Ciberseguridad: Inyección de dependencias en PHP

Tienes una aplicación PHP vulnerable a inyecciones SQL. El objetivo del reto es encontrar la vulnerabilidad y explotarla para acceder a la información de los usuarios en la base de datos. Posteriormente, deberán corregir el código y aplicar medidas de seguridad adecuadas para prevenir la vulnerabilidad.

### Escenario:
Un formulario de inicio de sesión básico permite a los usuarios ingresar su nombre de usuario y contraseña. Si el inicio de sesión tiene éxito, muestra un mensaje de bienvenida. Sin embargo, el formulario es vulnerable a inyecciones SQL.

### Objetivo:
Explotar la vulnerabilidad: Los alumnos deben identificar la vulnerabilidad de inyección SQL en el código anterior y explotarla para acceder a los datos de la tabla usuarios.

### Pista: Se puede intentar una inyección simple como admin' -- en el campo de nombre de usuario y cualquier valor en el campo de la contraseña.
Solucionar el problema: Una vez que se explota la vulnerabilidad, los estudiantes deben modificar el código para que sea seguro. Para solucionar el problema, deben:

-- Utilizar consultas preparadas con parámetros en lugar de concatenar los datos del usuario directamente en la consulta SQL.
-- Validar y filtrar correctamente los datos de entrada.

### Resultados esperados:
Antes de la corrección: Los estudiantes podrán explotar la vulnerabilidad de SQL para acceder a los datos sin una contraseña válida.
Después de la corrección: El código será seguro frente a inyecciones SQL, ya que utiliza consultas preparadas y valida la entrada del usuario.

## Cibersecurity: Injection dependency in PHP

You have a PHP application vulnerable to SQL injections. The goal of this challenge is to identify the vulnerability and exploit it to access the user information in the database. Afterward, you must fix the code and implement proper security measures to prevent this vulnerability.

### Scenario:
A basic login form allows users to enter their username and password. If the login is successful, it displays a welcome message. However, the form is vulnerable to SQL injection.

### Objective:
Exploit the vulnerability: Students should identify the SQL injection vulnerability in the code above and exploit it to access the data in the users table.

### Hint: You can try a simple injection like admin' -- in the username field and any value in the password field.
Fix the issue: After exploiting the vulnerability, students should modify the code to make it secure. To fix the issue, they must:

-- Use prepared statements with parameters instead of concatenating user input directly into the SQL query.
-- Properly validate and sanitize user input.

### Expected Results:
Before the fix: Students will be able to exploit the SQL injection vulnerability to access the data without a valid password.

After the fix: The code will be secure against SQL injection since it uses prepared statements and validates user input.
