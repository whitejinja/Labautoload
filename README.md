# Laboratorio Composer Autoload y PSR-4

## Instalación

Clonar el proyecto:

```bash
git clone URL_DEL_REPOSITORIO
```

Entrar al proyecto:

```bash
cd Lab4Autoload
```

Instalar dependencias:

```bash
composer install
```

Generar autoload:

```bash
composer dump-autoload
```

Ejecutar proyecto:

```bash
php prueba.php
```

---

## Estructura del Proyecto

```plaintext
App/
 └── User.php

DataBase/
 └── Model/
      └── ProductModel.php
```

---

## Namespaces

| Namespace | Carpeta |
|---|---|
| App\\ | App/ |
| DataBase\\ | DataBase/ |

---

## Resultado Esperado

```plaintext
John Doe
123
```

---

## Conclusiones Técnicas

### 1. Mantenibilidad
Permite agregar nuevas clases sin modificar múltiples archivos include o require.

### 2. Eficiencia
Composer carga únicamente las clases necesarias mediante Lazy Loading.

### 3. Estandarización
PSR-4 mejora la organización y facilita el trabajo colaborativo.
