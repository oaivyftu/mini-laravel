# LucentPHP

> A lightweight, opinionated PHP application framework focused on clarity, explicit architecture, and streamlined web application bootstrapping.

---

## Overview

LucentPHP is a lightweight PHP framework designed to simplify modern web application development without the heavy abstractions and hidden magic of full-stack frameworks.

It provides the essential architectural building blocks required for real-world applications while maintaining:

- Clear execution flow
- Minimal dependencies
- Explicit lifecycle control
- Lightweight footprint
- Faster project bootstrapping

LucentPHP is built for developers who value understanding their application internals rather than relying on opaque framework behavior.

---

## Why LucentPHP?

Modern PHP frameworks are powerful but often introduce:

- Large dependency trees
- Implicit behaviors and hidden magic
- Over-engineering for small-to-medium projects
- High memory overhead
- Steep learning curve

LucentPHP focuses on:

- Explicit over magic
- Simplicity over abstraction
- Control over convention
- Performance over bloat

---

## Core Features

- Custom routing engine
- Dependency Injection container
- Middleware execution pipeline
- MVC architecture
- Request & Response abstraction
- Environment configuration
- Structured project layout
- Extensible service container
- Clean application lifecycle management

---

## Architecture Philosophy

LucentPHP follows a clear request lifecycle:

1. HTTP Request
2. Router resolution
3. Middleware pipeline
4. Controller execution
5. Response dispatch

No hidden service resolution.  
No implicit global state.  
No unnecessary abstraction layers.

The goal is transparency and maintainability.

---

## Performance & Efficiency

Compared to traditional full-stack frameworks, LucentPHP:

- Reduces application bootstrapping time
- Minimizes memory overhead
- Eliminates unnecessary framework-level boilerplate
- Provides faster cold-start execution

Ideal for:

- Internal tools
- Microservices
- APIs
- Small-to-medium production applications
- Educational exploration of framework internals

---

## Example Usage

```php
$router->get('/users', [UserController::class, 'index']);

$container->bind(UserService::class, function() {
    return new UserService();
});
