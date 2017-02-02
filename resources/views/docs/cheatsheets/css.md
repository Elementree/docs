# CSS Selectors

## Basic Selectors

### Type Selectors
- Syntax: element tagname
- e.g.: input{ } will match any < input > tag in HTML

### class Selectors
- Syntax: .classname
- e.g.: .boxes (all class="boxes")

### Id Selectors
- Syntax: #idname
- e.g.: #one-word (targets one id="one-word")

### Attribute Selectors
- Chooses nodes based on the value of one of its attributes
- Syntax: [attr], [attr=value], [attr~=value], [attr|=value], [attr^=vaue], [attr$=value], [attr*=value]
- e.g.: [autoplay]

## Combinators

### Adjacent Sibling Selectors
- "+"
- Syntax: A + B
- e.g.: main + #extra-section

### General Sibling Selectors
- "~"
- Syntax: A ~ B
- e.g.: p ~ span

### Child Selectors
- ">"
- Syntax A > B
- e.g. ul > li

### Descendant Selectors
- " "
- Syntax: A B
- e.g.: div span

## Pseudo_selectors

 - Syntax: selector:pseudo-element {
  property: value;
}
or
- selector:pseudo-class {
  property: value;
}

## All pseudo-elements

- :after
- :before
- :first-letter
- :first-line
- :selection
- :backdrop
- :placeholder
- :marker
- :spelling-error
- :grammar-error

## All pseudo-classes

- :active
- :any
- :checked
- :default
- :dir()
- :disabled
- :empty
- :enabled
- :first
- :first-child
- :first-of-type
- :fullscreen
- :focus
- :hover
- :indeterminate
- :in-range
- :invalid
- :lang()
- :last-child
- :last-of-type
- :left
