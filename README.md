# Laravel 11, Inertia Vue 3, TypeScript, shadcn/ui Boilerplate

This repository provides a boilerplate for a web application built using Laravel 11, Inertia.js with Vue 3, TypeScript, and shadcn/ui. It includes a devcontainer setup, husky pre-commit hooks, lint-staged, ESLint, and Prettier.

## Technologies Used

- **Laravel 11:** A PHP framework for web artisans.
- **Inertia.js with Vue 3:** A framework that lets you quickly build modern single-page React, Vue and Svelte apps using classic server-side routing and controllers.
- **TypeScript:** A statically typed superset of JavaScript that adds optional types.
- **shadcn/ui:** A UI library for Vue.js (assuming it's a UI library).
- **Devcontainer:** A development container for Visual Studio Code, providing a fully configured development environment that can be shared across a team.
- **Husky pre-commit hooks:** A tool to facilitate running tasks on Git hooks, like pre-commit.
- **Lint-staged:** A package that allows you to run linters on staged files.
- **ESLint:** A pluggable and configurable linter tool for identifying and reporting on patterns in JavaScript.
- **Prettier:** An opinionated code formatter that enforces a consistent style by parsing your code and re-printing it.

## Getting Started

These instructions will get you a copy of the boilerplate up and running on your local machine for development and testing purposes.

### Prerequisites

- Docker
- Visual Studio Code with Remote - Containers extension

### Installation

1. Clone the repository

```bash
git clone https://github.com/xqsit94/laravel-vue3-shadcn.git
```

2. Open the project folder in Visual Studio Code.

3. When prompted to "Reopen in Container", click "Reopen in Container". This will start the build of the Docker container defined in the `.devcontainer` folder.

4. Once the build is complete, you'll automatically be connected to the container. All commands from here are run inside the container.

5. Install PHP dependencies

```bash
sail composer install
```

6. Install JavaScript dependencies

```bash
bun install
```

7. Copy .env.example and create a .env file

```bash
cp .env.example .env
```

8. Generate a new application key

```bash
sail php artisan key:generate
```

9. Run the database migrations (Set the database connection in .env before migrating)

```bash
sail php artisan migrate
```

10. Run the application in development mode

```bash
bun run dev
```
