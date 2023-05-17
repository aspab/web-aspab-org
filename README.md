# ASPAB.org Website
Rebuild (2022-23). The plan:
- Content compiled with [Jigsaw](https://jigsaw.tighten.com)
- Interactivity with [AlpineJS](https://alpinejs.dev)
- Styled with [Tailwind](https://tailwindcss.com)

# ToDo
- Migrate newsletter content
- Finish styling / migrating exisiting (history) pages
- Sort out the `{{ trim($page->baseUrl, '/') }}`


# Development
```
composer update
npm update
npm run watch
vendor/bin/jigsaw serve
```