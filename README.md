# TODO APP

## Table of contents

- [Getting started](#getting-started)
- [Notes](#notes)
    - [Project directory structure](#project-directory-structure)
        - [Core](#core)
        - [Http](#http)
        - [public](#public)
        - [views](#views)
    - [bootstrap.php](#bootstrap.php)

## Getting started

## Notes

### Project directory structure

It's important to note that the folder structure may vary depending on the specific PHP framework or project architecture being used. The mentioned folder names are commonly used and provide a logical organization for separating different aspects of the application, but they are not mandatory or enforced by PHP itself.

#### Core

The "Core" folder typically contains the core functionality of the application. It may include essential classes, libraries, or components that are fundamental to the application's operation. This folder might contain classes responsible for handling application initialization, managing configuration settings, defining custom exceptions, implementing authentication and authorization logic, or other core functionalities.

#### Http

The "Http" folder is commonly used to organize code related to handling HTTP requests and responses. It often includes classes or files responsible for routing requests, handling middleware, and managing HTTP-specific functionalities like sessions, cookies, and input validation. This folder might contain subfolders such as "Controllers" to store controller classes responsible for handling specific HTTP endpoints or actions.

#### public

The "public" folder is the web-accessible root folder of the application. It contains files that can be accessed directly by the web server and are intended to be publicly available. Typically, this folder contains the entry point of the application, such as an "index.php" file, which acts as the front controller. It may also include static assets like CSS stylesheets, JavaScript files, images, and other resources that are served to the client-side.

#### views

The "views" folder is often used to store templates or view files that are responsible for rendering the presentation layer of the application. These files typically contain HTML markup along with embedded PHP code or template tags to dynamically generate the final output. The view files can be organized into subfolders based on the logical structure of the application or the specific modules or components they represent.

### bootstrap.php

In PHP projects, bootstrap.php is a common filename used for a file that is responsible for initializing the project's environment and setting up necessary configurations before the application starts running. It is often considered the entry point of the project.

The exact content and purpose of bootstrap.php can vary depending on the project's architecture and framework being used.
