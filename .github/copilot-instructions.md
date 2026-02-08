# Copilot Instructions for FINTRASC Project

## Project Overview

FINTRASC is a translation agency website built as a handmade, static website served through XAMPP.

- **Main file**: `fintrasc.html`
- **Server path**: `c:\xampp\htdocs\fintrascdotcom`
- **Local URL**: `http://localhost/fintrascdotcom/fintrasc.html`

## Tech Stack

- **HTML5**: Semantic structure, no frameworks
- **Tailwind CSS**: Via CDN (not npm/build process)
- **Vanilla JavaScript**: No frameworks, stored in `script.js`
- **Custom CSS**: Additional styles in `style.css`

## Development Environment

- **Server**: XAMPP (Apache + PHP)
- **Access**: Files must be served through Apache; direct file:// protocol may not work for all features
- **Start server**: Launch XAMPP Control Panel and start Apache module
- **Testing**: View at `http://localhost/fintrascdotcom/fintrasc.html`

## Code Conventions

- **Handmade approach**: All code written manually, no build tools or package managers
- **Tailwind classes**: Use Tailwind utility classes for styling; avoid inline styles
- **Custom CSS**: Use `style.css` only for styles that can't be achieved with Tailwind
- **JavaScript**: Vanilla JS only, ES6+ syntax acceptable for modern browsers
- **Responsive design**: Mobile-first approach using Tailwind breakpoints (sm:, md:, lg:, xl:)
- **Navigation**: Fixed top navbar with hamburger menu for mobile devices

## File Structure

```
fintrascdotcom/
├── fintrasc.html    # Main HTML file
├── style.css        # Custom CSS styles
├── script.js        # JavaScript functionality
└── .github/
    └── copilot-instructions.md
```

## Key Patterns

- **Navigation bar**: Fixed at top, responsive with hamburger menu on mobile
- **Section IDs**: Use for anchor navigation (#services, #about, #contact)
- **Smooth scrolling**: Enabled via CSS `scroll-behavior: smooth`
- **Mobile menu**: Toggle functionality in `script.js` with icon switching
