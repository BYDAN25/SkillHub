# SkillHub

## Plataforma web para la gestión y reserva de clases de habilidades

SkillHub es una aplicación web desarrollada con Laravel que permite a los usuarios consultar diferentes clases de habilidades, revisar sus horarios disponibles y realizar reservas.

El proyecto está enfocado en facilitar la gestión de clases y reservas mediante una plataforma web sencilla, organizada y fácil de utilizar.

Además, cuenta con una API para la gestión de reservas y agenda, la cual puede ser probada mediante Thunder Client desde Visual Studio Code.

---

## Temática del proyecto

**Clases de Habilidades**

SkillHub permite publicar y consultar clases relacionadas con diferentes áreas de conocimiento, por ejemplo:

- Programación
- Bases de datos
- Ciberseguridad
- Desarrollo web
- Diseño
- Otras habilidades profesionales

---

# Funcionalidades

## Usuarios

El sistema permite:

- Registro de usuarios.
- Inicio de sesión.
- Cierre de sesión.
- Actualización del perfil.
- Cambio de contraseña.
- Eliminación de cuenta.

---

## Clases

Los usuarios pueden consultar las clases disponibles.

Cada clase contiene información como:

- Nombre.
- Descripción.
- Categoría.
- Nivel.
- Instructor.
- Duración.
- Costo.
- Ubicación.

También se cuenta con un filtro por ubicación para facilitar la búsqueda de clases.

---

## Horarios

Las clases cuentan con horarios definidos que pueden estar disponibles para realizar una reserva.

Cada horario contiene:

- Fecha.
- Hora de inicio.
- Hora de finalización.
- Lugares disponibles.

---

## Reservas

Los usuarios pueden:

- Consultar sus reservas.
- Reservar una clase.
- Consultar el estado de una reserva.
- Cancelar una reserva.

---

## Historial

El sistema permite consultar el historial de reservas del usuario.

En esta sección pueden visualizarse las reservas que hayan sido canceladas o que formen parte del historial del usuario.

---

# Filtro por ubicación

SkillHub cuenta con un filtro para buscar clases de acuerdo con su ubicación.

El usuario puede:

1. Entrar a la sección **Clases**.
2. Seleccionar una ubicación.
3. Presionar **Filtrar**.
4. Consultar únicamente las clases disponibles en esa ubicación.

También existe una opción para limpiar el filtro y volver a mostrar todas las clases.

---

# API

SkillHub cuenta con una API REST enfocada en la gestión de reservas y agenda.

La API permite realizar operaciones mediante solicitudes HTTP y puede ser utilizada posteriormente por otras aplicaciones, como aplicaciones móviles o sistemas externos.

## URL base

```text
http://127.0.0.1:8000/api