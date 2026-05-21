# Astra PRMBLE Child

Motyw potomny dla Astra + WooCommerce, przygotowany pod estetykę:
- szarości i biel,
- delikatne akcenty bordowe,
- czyste karty produktów i spokojne CTA.

## Instalacja
1. Upewnij się, że aktywny jest motyw **Astra**.
2. Skopiuj folder `astra-prmble-child` do `wp-content/themes/`.
3. W panelu WordPress aktywuj motyw **Astra PRMBLE Child**.
4. Przejdź do `Wygląd -> Personalizacja` i ustaw:
   - logo,
   - typografię,
   - układ nagłówka i stopki.

## Szybkie dopasowanie do marki
W pliku `style.css` zmień zmienne CSS w `:root`:
- `--prmb-accent` (główny bordowy),
- `--prmb-accent-hover` (hover),
- `--prmb-bg` i `--prmb-surface` (tła).

## Dalsze kroki
- Dodać własne bannery kategorii i sekcję inspiracji na stronie głównej.
- Ustawić zdjęcia produktowe w spójnych proporcjach.
- Skonfigurować filtrację produktów (atrybuty, cena, producenci).


## Elementor (układ podobny do sklepu meblowego)
- Gotową rozpiskę sekcji i klas CSS znajdziesz w `elementor-home-structure.md`.
- W Elementorze dodawaj klasy sekcji/elementów: `prmb-hero`, `prmb-category-grid`, `prmb-featured-products`, `prmb-usp-strip`, `prmb-inspirations`, `prmb-newsletter`.

## Import gotowego szablonu Elementor (JSON)
1. Wejdź w `Szablony -> Zapisane szablony -> Importuj szablon`.
2. Zaimportuj plik: `wp-content/themes/astra-prmble-child/elementor/homepage-prmble-template.json`.
3. Utwórz nową stronę i kliknij `Edytuj w Elementor`.
4. Wstaw zaimportowany szablon `PRMBLE Home Starter`.
5. Podmień placeholdery obrazów, produkty i teksty na docelowe.
6. W sekcji newsletter ustaw własny shortcode formularza (domyślnie: `[newsletter_form]`).


## Wersja production – gotowe shortcode
- ` [prmb_featured_products limit="8" columns="4" orderby="date" order="DESC"] ` – sekcja produktów do wstawienia w Elementorze (widget Shortcode).
- ` [prmb_mini_cart] ` – mini-koszyk do osadzenia np. w nagłówku (Elementor Header / HTML / Shortcode).

### Rekomendowany układ strony głównej (production)
1. Hero (`prmb-hero`).
2. Kategorie (`prmb-category-grid`).
3. Produkty: dodaj sekcję `prmb-featured-products` i wstaw shortcode ` [prmb_featured_products] `.
4. USP (`prmb-usp-strip`).
5. Inspiracje (`prmb-inspirations`).
6. Newsletter (`prmb-newsletter`).
